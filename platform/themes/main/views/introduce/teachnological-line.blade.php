<div id="teachnological-line-page">
    @includeIf("theme.main::views.components.tabs-banner",['introduces'=>$introduces, 'page'=>$page])

    <div class="section-intro-wrapper _fsx20r16">
        <div class="container-customize">
            <p class="my-5">
                {!! get_field($page, 'description_module_introductory_dccn') !!}
            </p>
        </div>

        <div class="section-intro__picture">
            <img class="mw-100" width="1900" height="500" src="{{rvMedia::getImageUrl(get_field($page, 'image_module_introductory_dccn'))}}" alt="ảnh dây chuyền công nghệ" />
        </div>
    </div>

    <div class="section-teachnological-line-list-wrapper">
        <div class="container-customize">
            <div class="section-teachnological">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title pl-0">
                        Các dây chuyền công nghệ chính
                    </h2>
                    <p class="theme-customize-header-section__header__des align-items-end mb-md-4 mb-0">
                        Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường.
                    </p>
                </div>

                <div class="section-teachnological__list _fsx20r16">

                    <div class="section-teachnological__row">
                        <div class="section-teachnological__row__col order-sm-1 order-2 __content">
                            <div>
                                <h3 class="__content__title"> Phân xưởng kính cường lực </h3>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                            </div>
                            <button class="btn-read-more" data-toggle="modal" data-target="#exampleModalCenter" href="#" title="Chi tiết"> Chi tiết </button>
                        </div>

                        <div class="section-teachnological__row__col order-sm-2 order-1 mb-sm-0 mb-3 __picture">
                            <img width="640" height="360" src="{{Theme::asset()->url('images/teachnological/image2.jpg')}}" alt="ảnh dây chuyền công nghệ" />
                        </div>
                    </div>

                    <div class="section-teachnological__row">
                        <div class="section-teachnological__row__col order-sm-1 order-2 __content">
                            <div>
                                <h3 class="__content__title"> Phân xưởng kính cường lực </h3>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                            </div>
                            <button class="btn-read-more" href="#" data-toggle="modal" data-target="#exampleModalCenter" title="Chi tiết"> Chi tiết </button>
                        </div>

                        <div class="section-teachnological__row__col order-sm-2 order-1 mb-sm-0 mb-3 __picture">
                            <img width="640" height="360" src="{{Theme::asset()->url('images/teachnological/image3.jpg')}}" alt="ảnh dây chuyền công nghệ" />
                        </div>
                    </div>

                    <div class="section-teachnological__row">
                        <div class="section-teachnological__row__col order-sm-1 order-2 __content">
                            <div>
                                <h3 class="__content__title"> Phân xưởng kính cường lực </h3>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                                <p> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường. </p>
                            </div>
                            <button class="btn-read-more" href="#" data-toggle="modal" data-target="#exampleModalCenter" title="Chi tiết"> Chi tiết </button>
                        </div>

                        <div class="section-teachnological__row__col order-sm-2 order-1 mb-sm-0 mb-3 __picture">
                            <img width="640" height="360" src="{{Theme::asset()->url('images/teachnological/image4.jpg')}}" alt="ảnh dây chuyền công nghệ" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="container-customize mt-4">
        <div class="box-common-statistics-wrapper mt-n3">
            <div class="box-common-statistics">
                @if(has_field($page, 'stats_module_dccn'))
                @foreach(has_field($page, 'stats_module_dccn') as $row)
                <div class="box-common-statistics__col">
                    <div class="__col__up">
                        {!! has_sub_field($row, 'number') !!}
                    </div>

                    <div class="__col__down">
                        {!! has_sub_field($row, 'description') !!}
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!--end css in file common.scss----->
</div>

<!-- Modal -->
<div class="modal fade dccn" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Phân xưởng kính dán </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
            </div>

            <table>
                <tr>
                    <th> <i>Tên máy</i> </th>
                    <th> <i>Số lượng</i> </th>
                    <th> <i>Bộ phận</i> </th>
                    <th>  </th>
                </tr>
                <tr>
                    <td>Dây chuyền dán kính</td>
                    <td>03</td>
                    <td>03</td>
                </tr>
                <tr>
                    <td>Máy ép kính</td>
                    <td>04</td>
                    <td>04</td>
                    <td rowspan="4">Tổ ÔLây</td>
                </tr>
                <tr>
                    <td>Nồi hấp kính 2600 x 6000</td>
                    <td>01</td>
                    <td>01</td>
                </tr>
                <tr>
                    <td>Nồi hấp kính 3000 x 8000 (autoclave)</td>
                    <td>02</td>
                    <td>02</td>
                </tr>
                <tr>
                    <td>Nồi hấp kính AC 250 - 500</td>
                    <td>01</td>
                    <td>01</td>
                </tr>
                <tr>
                    <td>Máy phun cát</td>
                    <td>02</td>
                    <td>02</td>
                    <td>Tô Phun cát</td>
                </tr>
                <tr>
                    <td>Cầu trục 5 tấn, 3 tấn, 1 tấn, 2 tấn</td>
                    <td>13</td>
                    <td colspan="2">13</td>
                </tr>
                <tr>
                    <td>Máy phát điện</td>
                    <td>01</td>
                    <td colspan="2">01</td>
                </tr>
            </table>
        </div>
    </div>
</div>
