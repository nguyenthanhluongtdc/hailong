        <footer>
            <div class="footer-wrapper">
                <div class="container-customize">
                    <div class="footer">
                        <div class="footer__top">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12 mb-sm-0 mb-4 footer__col">
                                    <a class="link-theme-customize text-decoration-none" href="/" title="Logo">
                                        <img class="mw-100" width="400" height="120" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Logo" />
                                    </a>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 mb-sm-0 mb-3 footer__col">
                                    <div class="f-listaddress">
                                        <p class="footer__col__title">
                                            <strong> CÔNG TY TNHH SẢN XUẤT VÀ THƯƠNG MẠI HẢI LONG </strong>
                                        </p>
                                        <p>
                                            Đ/C: Tiểu khu Mỹ Lâm, Thị Trấn Phú Xuyên,
                                            Huyện Phú Xuyên, Thành phố Hà Nội
                                        </p>
                                        <p>
                                            Mã Số Thuế: 0500417176 Đăng ký lần đầu 30/05/2001
                                        </p>
                                        <p>
                                            Nơi cấp: Sở Kế Hoạch & Đầu Tư Tp.Hà Nội
                                        </p>
                                        <div class="pt-4 row">
                                            <div class="col-3"> <img width="90" height="60" class="mw-100" src="{{Theme::asset()->url('images/footer/image4.jpg')}}" alt="" /> </div>
                                            <div class="col-3 pl-0"> <img width="90" height="60" class="mw-100" src="{{Theme::asset()->url('images/footer/image3.jpg')}}" alt="" /> </div>
                                            <div class="px-2 col-2 pl-0"> <img width="80" height="50" class="mw-100" src="{{Theme::asset()->url('images/footer/image1.jpg')}}" alt="" /> </div>
                                            <div class="col-4 px-0"> <img width="120" height="50" class="mw-100" src="{{Theme::asset()->url('images/footer/image2.jpg')}}" alt=""  /> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-12 mb-sm-0 mb-3 footer__col">
                                    <div class="f-listinfo">
                                        <p class="footer__col__title">
                                            <strong> Thông Tin </strong>
                                        </p>
                                        {!!
                                            Menu::renderMenuLocation('col-information-menu', [
                                                'options' => [],
                                                'theme' => true,
                                                'view' => 'col-info-footer',
                                            ])
                                        !!}
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-6 footer__col">
                                    <div class="f-listaboutus">
                                        <p class="footer__col__title">
                                            <strong> Về chúng tôi </strong>
                                        </p>
                                        <ul class="f-listaboutus__content footer__col__list">
                                            <li>
                                                <a href="#" title="Gioi thieu"> Sản phẩm </a>
                                            </li>

                                            <li>
                                                <a href="#" title="Gioi thieu"> Chính sách bảo hành
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" title="Gioi thieu"> Báo giá
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-6 footer__col">
                                    <div class="f-listinfo-other">
                                        <p class="footer__col__title">
                                            <strong> &nbsp </strong>
                                        </p>
                                        <ul class="f-listinfo-other__content footer__col__list">
                                            <li>
                                                <a href="#" title="Gioi thieu"> Tuyển dụng </a>
                                            </li>

                                            <li>
                                                <a href="#" title="Gioi thieu"> Chăm sóc khách hàng
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" title="Gioi thieu"> Tin tức
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" title="Gioi thieu"> Liên hệ
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="footer__col__list--icon pt-4">
                                            <a class="__item__icon" href="#" title="Facebook">
                                                <img width="35" height="35" src="{{Theme::asset()->url('images/hailong/fb_icon.png')}}" alt=""/>
                                            </a>

                                            <a class="__item__icon" href="#" title="Zalo">
                                                <img width="35" height="35" src="{{Theme::asset()->url('images/hailong/zalo_icon.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer__bottom copyright">
                            <p> All rights reserved @2021 - Hailong Glass </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {!! Theme::footer() !!}
        </body>
        </html>
