<?php

namespace Platform\Region\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Region\Http\Requests\RegionRequest;
use Platform\Region\Repositories\Interfaces\RegionInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Region\Tables\RegionTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Region\Forms\RegionForm;
use Platform\Base\Forms\FormBuilder;

class RegionController extends BaseController
{
    /**
     * @var RegionInterface
     */
    protected $regionRepository;

    /**
     * @param RegionInterface $regionRepository
     */
    public function __construct(RegionInterface $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    /**
     * @param RegionTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RegionTable $table)
    {
        page_title()->setTitle(trans('plugins/region::region.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/region::region.create'));

        return $formBuilder->create(RegionForm::class)->renderForm();
    }

    /**
     * @param RegionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(RegionRequest $request, BaseHttpResponse $response)
    {
        $region = $this->regionRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(REGION_MODULE_SCREEN_NAME, $request, $region));

        return $response
            ->setPreviousUrl(route('region.index'))
            ->setNextUrl(route('region.edit', $region->id))
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
        $region = $this->regionRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $region));

        page_title()->setTitle(trans('plugins/region::region.edit') . ' "' . $region->name . '"');

        return $formBuilder->create(RegionForm::class, ['model' => $region])->renderForm();
    }

    /**
     * @param int $id
     * @param RegionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RegionRequest $request, BaseHttpResponse $response)
    {
        $region = $this->regionRepository->findOrFail($id);

        $region->fill($request->input());

        $region = $this->regionRepository->createOrUpdate($region);

        event(new UpdatedContentEvent(REGION_MODULE_SCREEN_NAME, $request, $region));

        return $response
            ->setPreviousUrl(route('region.index'))
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
            $region = $this->regionRepository->findOrFail($id);

            $this->regionRepository->delete($region);

            event(new DeletedContentEvent(REGION_MODULE_SCREEN_NAME, $request, $region));

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
            $region = $this->regionRepository->findOrFail($id);
            $this->regionRepository->delete($region);
            event(new DeletedContentEvent(REGION_MODULE_SCREEN_NAME, $request, $region));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
