<?php

namespace Platform\Factory\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Factory\Http\Requests\FactoryRequest;
use Platform\Factory\Repositories\Interfaces\FactoryInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Factory\Tables\FactoryTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Factory\Forms\FactoryForm;
use Platform\Base\Forms\FormBuilder;

class FactoryController extends BaseController
{
    /**
     * @var FactoryInterface
     */
    protected $factoryRepository;

    /**
     * @param FactoryInterface $factoryRepository
     */
    public function __construct(FactoryInterface $factoryRepository)
    {
        $this->factoryRepository = $factoryRepository;
    }

    /**
     * @param FactoryTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(FactoryTable $table)
    {
        page_title()->setTitle(trans('plugins/factory::factory.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/factory::factory.create'));

        return $formBuilder->create(FactoryForm::class)->renderForm();
    }

    /**
     * @param FactoryRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(FactoryRequest $request, BaseHttpResponse $response)
    {
        $factory = $this->factoryRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(FACTORY_MODULE_SCREEN_NAME, $request, $factory));

        return $response
            ->setPreviousUrl(route('factory.index'))
            ->setNextUrl(route('factory.edit', $factory->id))
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
        $factory = $this->factoryRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $factory));

        page_title()->setTitle(trans('plugins/factory::factory.edit') . ' "' . $factory->name . '"');

        return $formBuilder->create(FactoryForm::class, ['model' => $factory])->renderForm();
    }

    /**
     * @param int $id
     * @param FactoryRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, FactoryRequest $request, BaseHttpResponse $response)
    {
        $factory = $this->factoryRepository->findOrFail($id);

        $factory->fill($request->input());

        $factory = $this->factoryRepository->createOrUpdate($factory);

        event(new UpdatedContentEvent(FACTORY_MODULE_SCREEN_NAME, $request, $factory));

        return $response
            ->setPreviousUrl(route('factory.index'))
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
            $factory = $this->factoryRepository->findOrFail($id);

            $this->factoryRepository->delete($factory);

            event(new DeletedContentEvent(FACTORY_MODULE_SCREEN_NAME, $request, $factory));

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
            $factory = $this->factoryRepository->findOrFail($id);
            $this->factoryRepository->delete($factory);
            event(new DeletedContentEvent(FACTORY_MODULE_SCREEN_NAME, $request, $factory));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
