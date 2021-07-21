<?php

namespace Platform\Introduce\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Introduce\Http\Requests\IntroduceRequest;
use Platform\Introduce\Repositories\Interfaces\IntroduceInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Introduce\Tables\IntroduceTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Introduce\Forms\IntroduceForm;
use Platform\Base\Forms\FormBuilder;
use Platform\Theme\Events\RenderingHomePageEvent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Platform\Introduce\Models\Introduce;
use BaseHelper;
use Theme;
use SlugHelper;
use SeoHelper;
use RvMedia;

class IntroduceController extends BaseController
{
    /**
     * @var IntroduceInterface
     */
    protected $introduceRepository;

    /**
     * @param IntroduceInterface $introduceRepository
     */
    public function __construct(IntroduceInterface $introduceRepository)
    {
        $this->introduceRepository = $introduceRepository;
    }

    /**
     * @param IntroduceTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(IntroduceTable $table)
    {
        page_title()->setTitle(trans('plugins/introduce::introduce.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/introduce::introduce.create'));

        return $formBuilder->create(IntroduceForm::class)->renderForm();
    }

    /**
     * @param IntroduceRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(IntroduceRequest $request, BaseHttpResponse $response)
    {
        $introduce = $this->introduceRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(INTRODUCE_MODULE_SCREEN_NAME, $request, $introduce));

        return $response
            ->setPreviousUrl(route('introduce.index'))
            ->setNextUrl(route('introduce.edit', $introduce->id))
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
        $introduce = $this->introduceRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $introduce));

        page_title()->setTitle(trans('plugins/introduce::introduce.edit') . ' "' . $introduce->name . '"');

        return $formBuilder->create(IntroduceForm::class, ['model' => $introduce])->renderForm();
    }

    /**
     * @param int $id
     * @param IntroduceRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, IntroduceRequest $request, BaseHttpResponse $response)
    {
        $introduce = $this->introduceRepository->findOrFail($id);

        $introduce->fill($request->input());

        $introduce = $this->introduceRepository->createOrUpdate($introduce);

        event(new UpdatedContentEvent(INTRODUCE_MODULE_SCREEN_NAME, $request, $introduce));

        return $response
            ->setPreviousUrl(route('introduce.index'))
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
            $introduce = $this->introduceRepository->findOrFail($id);

            $this->introduceRepository->delete($introduce);

            event(new DeletedContentEvent(INTRODUCE_MODULE_SCREEN_NAME, $request, $introduce));

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
            $introduce = $this->introduceRepository->findOrFail($id);
            $this->introduceRepository->delete($introduce);
            event(new DeletedContentEvent(INTRODUCE_MODULE_SCREEN_NAME, $request, $introduce));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }

    public function getIntroduce() {
        //dd(Route::getFacadeRoot()->current()->uri());
      
       $key = get_slug_introduce_by_template('introduce');

       if(empty($key)) {
           abort(404);
       }    

       $page = app(IntroduceInterface::class)->getFirstBy(['template' => 'introduce']);
       $introduces = Introduce::latest()->get();

       return Theme::scope('introduce.overview', compact('page','introduces'))->render();
    }

    public function getCompanyInfo() {
        //dd(Route::getFacadeRoot()->current()->uri());
       $key = get_slug_introduce_by_template('company-info');

       if(empty($key)) {
           abort(404);
       }    

       $page = app(IntroduceInterface::class)->getFirstBy(['template' => 'company-info']);
       $introduces = Introduce::latest()->get();
       return Theme::scope('introduce.company-info', compact('page','introduces'))->render();
    }

    public function getTeachnologicalLine() {
        //dd(Route::getFacadeRoot()->current()->uri());
       $key = get_slug_introduce_by_template('teachnological-line');

       if(empty($key)) {
           abort(404);
       }    

       $page = app(IntroduceInterface::class)->getFirstBy(['template' => 'teachnological-line']);
       $introduces = Introduce::latest()->get();

       return Theme::scope('introduce.teachnological-line', compact('page','introduces'))->render();
    }

    public function getIntroduceProfile() {
        //dd(Route::getFacadeRoot()->current()->uri());
       $key = get_slug_introduce_by_template('introduce-profile');

       if(empty($key)) {
           abort(404);
       }    

       $page = app(IntroduceInterface::class)->getFirstBy(['template' => 'introduce-profile']);
       $introduces = Introduce::latest()->get();

       return Theme::scope('introduce.profile', compact('page','introduces'))->render();
    }
    
}
