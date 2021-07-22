<?php

namespace Platform\FactoryAddress\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\FactoryAddress\Http\Requests\FactoryAddressRequest;
use Platform\FactoryAddress\Repositories\Interfaces\FactoryAddressInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\FactoryAddress\Tables\FactoryAddressTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\FactoryAddress\Forms\FactoryAddressForm;
use Platform\Base\Forms\FormBuilder;

class FactoryAddressController extends BaseController
{
    /**
     * @var FactoryAddressInterface
     */
    protected $factoryAddressRepository;

    /**
     * @param FactoryAddressInterface $factoryAddressRepository
     */
    public function __construct(FactoryAddressInterface $factoryAddressRepository)
    {
        $this->factoryAddressRepository = $factoryAddressRepository;
    }

    /**
     * @param FactoryAddressTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(FactoryAddressTable $table)
    {
        page_title()->setTitle(trans('plugins/factory-address::factory-address.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/factory-address::factory-address.create'));

        return $formBuilder->create(FactoryAddressForm::class)->renderForm();
    }

    /**
     * @param FactoryAddressRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(FactoryAddressRequest $request, BaseHttpResponse $response)
    {
        $factoryAddress = $this->factoryAddressRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(FACTORY_ADDRESS_MODULE_SCREEN_NAME, $request, $factoryAddress));

        return $response
            ->setPreviousUrl(route('factory-address.index'))
            ->setNextUrl(route('factory-address.edit', $factoryAddress->id))
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
        $factoryAddress = $this->factoryAddressRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $factoryAddress));

        page_title()->setTitle(trans('plugins/factory-address::factory-address.edit') . ' "' . $factoryAddress->name . '"');

        return $formBuilder->create(FactoryAddressForm::class, ['model' => $factoryAddress])->renderForm();
    }

    /**
     * @param int $id
     * @param FactoryAddressRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, FactoryAddressRequest $request, BaseHttpResponse $response)
    {
        $factoryAddress = $this->factoryAddressRepository->findOrFail($id);

        $factoryAddress->fill($request->input());

        $factoryAddress = $this->factoryAddressRepository->createOrUpdate($factoryAddress);

        event(new UpdatedContentEvent(FACTORY_ADDRESS_MODULE_SCREEN_NAME, $request, $factoryAddress));

        return $response
            ->setPreviousUrl(route('factory-address.index'))
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
            $factoryAddress = $this->factoryAddressRepository->findOrFail($id);

            $this->factoryAddressRepository->delete($factoryAddress);

            event(new DeletedContentEvent(FACTORY_ADDRESS_MODULE_SCREEN_NAME, $request, $factoryAddress));

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
            $factoryAddress = $this->factoryAddressRepository->findOrFail($id);
            $this->factoryAddressRepository->delete($factoryAddress);
            event(new DeletedContentEvent(FACTORY_ADDRESS_MODULE_SCREEN_NAME, $request, $factoryAddress));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
