<?php

namespace Platform\Ecommerce\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Forms\FormBuilder;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Ecommerce\Forms\ProductLabelForm;
use Platform\Ecommerce\Http\Requests\ProductLabelRequest;
use Platform\Ecommerce\Repositories\Interfaces\ProductLabelInterface;
use Platform\Ecommerce\Tables\ProductLabelTable;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Throwable;

class ProductLabelController extends BaseController
{
    /**
     * @var ProductLabelInterface
     */
    protected $productLabelRepository;

    /**
     * @param ProductLabelInterface $productLabelRepository
     */
    public function __construct(ProductLabelInterface $productLabelRepository)
    {
        $this->productLabelRepository = $productLabelRepository;
    }

    /**
     * @param ProductLabelTable $table
     * @return Factory|View
     * @throws Throwable
     */
    public function index(ProductLabelTable $table)
    {
        page_title()->setTitle(trans('plugins/ecommerce::product-label.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/ecommerce::product-label.create'));

        return $formBuilder->create(ProductLabelForm::class)->renderForm();
    }

    /**
     * @param ProductLabelRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ProductLabelRequest $request, BaseHttpResponse $response)
    {
        $productLabel = $this->productLabelRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PRODUCT_LABEL_MODULE_SCREEN_NAME, $request, $productLabel));

        return $response
            ->setPreviousUrl(route('product-label.index'))
            ->setNextUrl(route('product-label.edit', $productLabel->id))
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
        $productLabel = $this->productLabelRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $productLabel));

        page_title()->setTitle(trans('plugins/ecommerce::product-label.edit') . ' "' . $productLabel->name . '"');

        return $formBuilder->create(ProductLabelForm::class, ['model' => $productLabel])->renderForm();
    }

    /**
     * @param int $id
     * @param ProductLabelRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ProductLabelRequest $request, BaseHttpResponse $response)
    {
        $productLabel = $this->productLabelRepository->findOrFail($id);

        $productLabel->fill($request->input());

        $this->productLabelRepository->createOrUpdate($productLabel);

        event(new UpdatedContentEvent(PRODUCT_LABEL_MODULE_SCREEN_NAME, $request, $productLabel));

        return $response
            ->setPreviousUrl(route('product-label.index'))
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
            $productLabel = $this->productLabelRepository->findOrFail($id);

            $this->productLabelRepository->delete($productLabel);

            event(new DeletedContentEvent(PRODUCT_LABEL_MODULE_SCREEN_NAME, $request, $productLabel));

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
            $productLabel = $this->productLabelRepository->findOrFail($id);
            $this->productLabelRepository->delete($productLabel);
            event(new DeletedContentEvent(PRODUCT_LABEL_MODULE_SCREEN_NAME, $request, $productLabel));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
