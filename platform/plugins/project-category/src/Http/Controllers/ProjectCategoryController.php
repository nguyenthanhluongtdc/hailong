<?php

namespace Platform\ProjectCategory\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\ProjectCategory\Http\Requests\ProjectCategoryRequest;
use Platform\ProjectCategory\Repositories\Interfaces\ProjectCategoryInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\ProjectCategory\Tables\ProjectCategoryTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\ProjectCategory\Forms\ProjectCategoryForm;
use Platform\Base\Forms\FormBuilder;

class ProjectCategoryController extends BaseController
{
    /**
     * @var ProjectCategoryInterface
     */
    protected $projectCategoryRepository;

    /**
     * @param ProjectCategoryInterface $projectCategoryRepository
     */
    public function __construct(ProjectCategoryInterface $projectCategoryRepository)
    {
        $this->projectCategoryRepository = $projectCategoryRepository;
    }

    /**
     * @param ProjectCategoryTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(ProjectCategoryTable $table)
    {
        page_title()->setTitle(trans('plugins/project-category::project-category.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/project-category::project-category.create'));

        return $formBuilder->create(ProjectCategoryForm::class)->renderForm();
    }

    /**
     * @param ProjectCategoryRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ProjectCategoryRequest $request, BaseHttpResponse $response)
    {
        $projectCategory = $this->projectCategoryRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PROJECT_CATEGORY_MODULE_SCREEN_NAME, $request, $projectCategory));

        return $response
            ->setPreviousUrl(route('project-category.index'))
            ->setNextUrl(route('project-category.edit', $projectCategory->id))
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
        $projectCategory = $this->projectCategoryRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $projectCategory));

        page_title()->setTitle(trans('plugins/project-category::project-category.edit') . ' "' . $projectCategory->name . '"');

        return $formBuilder->create(ProjectCategoryForm::class, ['model' => $projectCategory])->renderForm();
    }

    /**
     * @param int $id
     * @param ProjectCategoryRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ProjectCategoryRequest $request, BaseHttpResponse $response)
    {
        $projectCategory = $this->projectCategoryRepository->findOrFail($id);

        $projectCategory->fill($request->input());

        $projectCategory = $this->projectCategoryRepository->createOrUpdate($projectCategory);

        event(new UpdatedContentEvent(PROJECT_CATEGORY_MODULE_SCREEN_NAME, $request, $projectCategory));

        return $response
            ->setPreviousUrl(route('project-category.index'))
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
            $projectCategory = $this->projectCategoryRepository->findOrFail($id);

            $this->projectCategoryRepository->delete($projectCategory);

            event(new DeletedContentEvent(PROJECT_CATEGORY_MODULE_SCREEN_NAME, $request, $projectCategory));

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
            $projectCategory = $this->projectCategoryRepository->findOrFail($id);
            $this->projectCategoryRepository->delete($projectCategory);
            event(new DeletedContentEvent(PROJECT_CATEGORY_MODULE_SCREEN_NAME, $request, $projectCategory));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
