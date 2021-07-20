<?php

namespace Platform\ProjectCategories\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\ProjectCategories\Http\Requests\ProjectCategoriesRequest;
use Platform\ProjectCategories\Repositories\Interfaces\ProjectCategoriesInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\ProjectCategories\Tables\ProjectCategoriesTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\ProjectCategories\Forms\ProjectCategoriesForm;
use Platform\Base\Forms\FormBuilder;

class ProjectCategoriesController extends BaseController
{
    /**
     * @var ProjectCategoriesInterface
     */
    protected $projectCategoriesRepository;

    /**
     * @param ProjectCategoriesInterface $projectCategoriesRepository
     */
    public function __construct(ProjectCategoriesInterface $projectCategoriesRepository)
    {
        $this->projectCategoriesRepository = $projectCategoriesRepository;
    }

    /**
     * @param ProjectCategoriesTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(ProjectCategoriesTable $table)
    {
        page_title()->setTitle(trans('plugins/project-categories::project-categories.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/project-categories::project-categories.create'));

        return $formBuilder->create(ProjectCategoriesForm::class)->renderForm();
    }

    /**
     * @param ProjectCategoriesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ProjectCategoriesRequest $request, BaseHttpResponse $response)
    {
        $projectCategories = $this->projectCategoriesRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PROJECT_CATEGORIES_MODULE_SCREEN_NAME, $request, $projectCategories));

        return $response
            ->setPreviousUrl(route('project-categories.index'))
            ->setNextUrl(route('project-categories.edit', $projectCategories->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $projectCategories = $this->projectCategoriesRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $projectCategories));

        page_title()->setTitle(trans('plugins/project-categories::project-categories.edit') . ' "' . $projectCategories->name . '"');

        return $formBuilder->create(ProjectCategoriesForm::class, ['model' => $projectCategories])->renderForm();
    }

    /**
     * @param int $id
     * @param ProjectCategoriesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ProjectCategoriesRequest $request, BaseHttpResponse $response)
    {
        $projectCategories = $this->projectCategoriesRepository->findOrFail($id);

        $projectCategories->fill($request->input());

        $projectCategories = $this->projectCategoriesRepository->createOrUpdate($projectCategories);

        event(new UpdatedContentEvent(PROJECT_CATEGORIES_MODULE_SCREEN_NAME, $request, $projectCategories));

        return $response
            ->setPreviousUrl(route('project-categories.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $projectCategories = $this->projectCategoriesRepository->findOrFail($id);

            $this->projectCategoriesRepository->delete($projectCategories);

            event(new DeletedContentEvent(PROJECT_CATEGORIES_MODULE_SCREEN_NAME, $request, $projectCategories));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $projectCategories = $this->projectCategoriesRepository->findOrFail($id);
            $this->projectCategoriesRepository->delete($projectCategories);
            event(new DeletedContentEvent(PROJECT_CATEGORIES_MODULE_SCREEN_NAME, $request, $projectCategories));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
