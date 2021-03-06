<div id="contact-page">
   @includeIf('theme.main::views.components.tabs-banner',['title'=>__('Contact us')])

    <div class="contact-wrapper">
        <div class="container-customize">
            <div class="row">
                <div class="col-md-6 col-12" data-aos="fade-right">
                    <div class="company">
                        <div class="company__name">
                            <h4 class="__text-18">
                                @if(has_field($page, 'company_name_page_content'))
                                {!! has_field($page, 'company_name_page_content') !!}
                                @endif
                            </h4>
                        </div>
                        <div class="company__address">
                            <p class="__text-18 address">
                                @if(has_field($page, 'company_address_page_contact'))
                                {!! has_field($page, 'company_address_page_contact') !!}
                                @endif
                            </p>
                        </div>
                        <div class="company__phone my-4">
                            @if(has_field($page, 'list_phone_page_contact'))
                            @foreach(has_field($page, 'list_phone_page_contact') as $row)
                            <span class="phone">
                                <a title="19004696" href="tel:19004696"> {!! has_sub_field($row, 'phone') !!} </a>
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="company__email">
                            @if(has_field($page, 'list_email_page_contact'))
                                @foreach(has_field($page, 'list_email_page_contact') as $row)
                                <p class="email">
                                    <a title="{!! has_sub_field($row, 'email') !!}" href="mailto:{!! has_sub_field($row, 'email') !!}"> {!! has_sub_field($row, 'email') !!} </a>
                                </p>
                                @endforeach
                            @endif
                            {{-- <p class="email">
                                <a title="vietnhat@vsg.com.vn" href="mailto:vietnhat@vsg.com.vn">vietnhat@vsg.com.vn</a>
                            </p> --}}
                        </div>
                        <div class="company__connect">
                            <h4 class="__text-18">
                                @if(has_field($page, 'title_zalocode_page_contact'))
                                {!! has_field($page, 'title_zalocode_page_contact') !!}
                                @endif
                            </h4>
                            @if(has_field($page, 'image_zalocode_page_contact'))
                            <img src="{{rvMedia::getImageUrl(has_field($page, 'image_zalocode_page_contact'))}}" alt="zalo-code" width="200" height="110">
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-12" data-aos="fade-left">
                    <div id="contact-form" class="form-horizontal form-contact-us">
                        <span class="border_one"></span>
                        <span class="border_two"></span>
                        <span class="border_three"></span>
                        <span class="border_four"></span>

                        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
                        @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                            @if (session()->has('success_msg'))
                                <div class="alert alert-success">
                                    <p>{{_('G???i th??nh c??ng')}}</p>
                                </div>
                            @endif

                            @if (session()->has('error_msg'))
                                <div class="alert alert-danger">
                                    <p>{{ session('error_msg') }}</p>
                                </div>
                            @endif

                            @if (isset($errors) && count($errors))
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <span>{{ $error }}</span> <br>
                                    @endforeach
                                </div>
                            @endif
                        @endif

                        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
                            <h4 class="__text-20 mb-3"> {{ __('Title Form Contact') }} </h4>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact_name" placeholder="{{ __('Full name') }}" name="name" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact_phone" placeholder="{{ __('Phone number') }}" name="phone" value="">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="contact_email" placeholder="{{ __('Email') }}" name="email" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact_address" placeholder="{{ __('Address') }}" name="address" value="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" value="" id="contact_subject" placeholder="{{ __('Subject') }}">
                            </div>

                            <div class="form-group">
                                <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{{ __('Content') }}"> </textarea>
                            </div>

                            <div class="policy custom-checkbox">
                                <label class="customcheck">
                                    <input type="checkbox" checked="checked">
                                    <span title=" {{__('Commit')}}" class="policy__link">
                                        {{__('Commit')}}
                                    </span>
                                    <span class="checkmark"></span>
                                </label>
                                <button class="send-button" type="submit" value="SEND">
                                    {{__('Send')}}
                                </button>

                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <div class="container-customize pl-0 pr-0" data-aos="flip-up" data-aos-delay="400">
            <div class="map">
                <iframe src="{{has_field($page, 'link_map_page_contact')}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!--css in file common.scss----->
        {{-- <div class="box-common-showroom-wrapper">
            <div class="container-customize">
                <div class="box-common-showroom distance-below theme-customize-header-section">
                    <div class="theme-customize-header-section__header">
                        <h2 class="theme-customize-header-section__header__title">
                            Showroom Hailong Glass
                        </h2>
                        <p class="theme-customize-header-section__header__des mb-4">
                            Danh s??ch Showroom Glass
                        </p>
                    </div>

                    <div class="box-common-showroom__content">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="box__tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item box__tabs__header" role="presentation">
                                            <button class="nav-link active px-0" id="col-tab1-tab" data-bs-toggle="tab" data-bs-target="#col-tab1" type="button" role="tab" aria-controls="col-tab1" aria-selected="true"> Mi???n B???c </button>
                                        </li>

                                        <li class="nav-item box__tabs__header" role="presentation">
                                            <button class="nav-link px-0" id="col-tab2-tab" data-bs-toggle="tab" data-bs-target="#col-tab2" type="button" role="tab" aria-controls="col-tab2" aria-selected="true"> Mi???n Trung </button>
                                        </li>

                                        <li class="nav-item box__tabs__header" role="presentation">
                                            <button class="nav-link px-0" id="col-tab3-tab" data-bs-toggle="tab" data-bs-target="#col-tab3" type="button" role="tab" aria-controls="col-tab3" aria-selected="true"> Mi???n Nam </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content box__tabs__content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="col-tab1" role="tabpanel" aria-labelledby="col-tab1-tab">
                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 162 Ho??ng Qu???c Vi???t, C???u Gi???y, HN </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.22456666 / 024.85862988 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 381 Ph??? M???i - T??n D????ng - Th???y Nguy??n - H???i Ph??ng </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.35723838 / 024.22431063 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </span>
                                                </div>
                                            </div>

                                            <a class="btn-read-more small" href="#" title="Read more"> Xem th??m </a>
                                        </div>

                                        <div class="tab-pane fade" id="col-tab2" role="tabpanel" aria-labelledby="col-tab2-tab">
                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 162 Ho??ng Qu???c Vi???t, C???u Gi???y, HN </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.22456666 / 024.85862988 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 381 Ph??? M???i - T??n D????ng - Th???y Nguy??n - H???i Ph??ng </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.35723838 / 024.22431063 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </span>
                                                </div>
                                            </div>

                                            <a class="btn-read-more" href="#" title="Read more"> Xem th??m </a>
                                        </div>

                                        <div class="tab-pane fade" id="col-tab3" role="tabpanel" aria-labelledby="col-tab3-tab">
                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> Duong Linh Trung, Quan Thu Duc, TPHCM </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.22456666 / 024.85862988 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 381 Ph??? M???i - Th???y Nguy??n - H???i Ph??ng </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 024.35723838 / 024.22431063 </span>
                                                </div>
                                            </div>

                                            <div class="line__item">
                                                <div>
                                                    <b class="address"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </b>
                                                </div>
                                                <div class="line__children">
                                                    <span class="phone"> 369 Nguy???n Tr??i, Thanh Xu??n, HN </span>
                                                </div>
                                            </div>

                                            <a class="btn-read-more" href="#" title="Read more"> Xem th??m </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="box__infoOther">
                                    <div class="theme-customize-header-section__header pt-0">
                                        <h3 class="theme-customize-header-section__header__title text-white mb-2"> Nh?? M??y </h3>
                                        <p class="box__infoOther__header__des line__children"> Th???y tr?? HLV Park Hang-seo s??? m???t l???i th??? s??n nh?? n???u c??c ?????i kh??ch kh??ng ???????c ??u ti??n mi???n c??ch ly. </p>
                                    </div>

                                    <div class="box__infoOther__list">
                                        <div class="line__item">
                                            <div>
                                                <b class="address white"> 9 381 Ph??? M???i - Th???y Nguy??n - H???i Ph??ng </b>
                                            </div>
                                            <div class="line__children">
                                                <span class="phone white"> 024.35723838 / 024.22431063 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address white"> 1?? 25 Nguy???n V??n C??? - H???ng H???i - H??? Long </b>
                                            </div>
                                            <div class="line__children">
                                                <span class="phone white"> 024.35723838 / 024.22431063 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end css in file common.scss----->
        {!! do_shortcode('[showrooms][/showrooms]') !!}
    </div>

    @includeIf("theme.main::views.components.modal-google-map");
</div>
