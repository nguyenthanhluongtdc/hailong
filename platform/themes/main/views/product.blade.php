 @php
 $slug = \Illuminate\Support\Str::slug( $product->name?$product->name:'product');
 @endphp

 <div id="product-details-page">
     @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Product-Detail','menu'=>'products-menu'])

     <div class="section-product-info-wrapper">
         <div class="container-customize pr-md-0">
             <div class="section-product-info">
                 <div class="row">
                     <div class="col-md-5 distance-below">
                         <div class="box-content">
                             <div class="theme-customize-header-section__header">
                                 <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                                     {!! $product->name !!}
                                 </h2>
                                 <div class="theme-customize-header-section__header__des" data-aos="fade-left">
                                     {!! $product->description !!}
                                 </div>
                             </div>

                             <div class="line-border">

                             </div>

                             <div class="box-content__bottom _fsx20r16" data-aos="fade-up">
                                 <div class="__bottom__line__one"> {!! __('Common characteristic') !!} </div>
                                 <div class="__bottom__line__two"> {!! __('Production process') !!} </div>

                                 <div class="box__btn">
                                     <button class="btn-order mb-2" data-target="#orderModal" data-toggle="modal"><i class="fal fa-shopping-cart"></i> {!! __('Order') !!} </button>
                                     <button class="btn-quote" data-target="#{{$slug}}" data-toggle="modal"><i class="fal fa-door-open"></i> {!! __('Quote') !!} </button>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-7 mt-xl-5 mt-4" data-aos="fade-up-left">
                         <div class="box-picture h-100 d-md-block d-none" style="background-image: url({{rvMedia::getImageUrl($product->image)}}); background-size: cover; background-repeat: no-repeat;">
                         </div>

                         <img class="mw-100 mt-md-0 mt-n2 d-md-none d-block" src="{{rvMedia::getImageUrl($product->image, 'product_featured', false, RvMedia::getDefaultImage())}}" alt="" width="750" height="500">
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="section-product-more-info-wrapper distance-y">
        {!! do_shortcode('[our-policy][/our-policy]') !!}
         <div class="container-customize">
             <div class="section-product-more-info">
                 <div class="more-info">
                    @if(!empty($product->content))
                        <div class="theme-customize-header-section__header">
                            <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                                {!! __('Common characteristic') !!}
                            </h2>
                            
                            <div data-aos="fade-left">
                                {!! $product->content !!}
                            </div>
                        </div>
                    @endif

                    @if(count($productImages) > 1)
                        <div class="row-picture distance-above">
                            <div class="splide" id="section-product-more-info__carousel">
                                <div class="splide__slider">
                                    <!-- relative -->
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                        @php unset($productImages[0]) @endphp
                                            @foreach ($productImages as $img)
                                            <li class="splide__slide">
                                                <img width="1400" height="750" src="{{ RvMedia::getImageUrl($img, 'product_detail') }}" data-zoom-image="{{ RvMedia::getImageUrl($img, 'product_detail') }}" alt="{{ $product->name }}" />
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <!-- extra contents -->
                                </div>
                            </div>
                        </div>
                    @endif
                 </div>
             </div>
         </div>
     </div>

    @if(has_field($product, 'listtabs_production_process_page_product_detail'))
        <div class="section-production-process-wrapper">
            <div class="container-customize">
                <div class="section-production-process distance-below">
                    <div class="row">
                        <div class="col-lg-10 col-md-9">
                            <div class="theme-customize-header-section__header">
                                <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                                    {!! __('Production process') !!}
                                </h2>
                            </div>

                            <div class="box__tabs" data-aos="fade-up">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach(has_field($product, 'listtabs_production_process_page_product_detail') as $key => $row)
                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link {{$key==0?'active':''}} px-0" id="col-tab{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#col-tab{{$key}}" type="button" role="tab" aria-controls="col-tab{{$key}}" aria-selected="true">
                                            {!! has_sub_field($row, 'title') !!}
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content box__tabs__content px-0" id="myTabContent">
                                    @foreach(has_field($product, 'listtabs_production_process_page_product_detail') as $key => $row)
                                    <div class="tab-pane fade show {{$key==0?'active':''}} _fsx20r16" id="col-tab{{$key}}" role="tabpanel" aria-labelledby="col-tab{{$key}}-tab">
                                        {!! has_sub_field($row, 'content') !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3">
                            <div class="box__btn">
                                <button class="btn-order mr-md-0 mb-2" data-target="#orderModal" data-toggle="modal"><i class="fal fa-shopping-cart"></i>{!! __('Order') !!} </button>
                                <button class="btn-quote" data-toggle="modal" data-target="#{{$slug}}"><i class="fal fa-door-open"></i> {!! __('Quote') !!} </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @php $products = get_products([],theme_option('number_of_products_per_page')); @endphp
     @if(!empty($products))
     <div class="section-other-product-wrapper">
         <div class="container-customize">
             <div class="section-other-product">
                 <div class="theme-customize-header-section__header">
                     <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                         {!! __('Other products') !!}
                     </h2>
                 </div>
                 <ul class="section-products-list-cate-pro distance-below">
                     @foreach($products as $key => $other_product)
                     <li class="section-products-list-cate-pro__item" data-aos="{{$key%2==0?'fade-right':'fade-left'}}">
                         <a class="section-products-list-cate-pro__item__link" href="{{$other_product->url}}" title="Kính cường lực">
                             {!! $other_product->name !!}
                         </a>
                     </li>
                     @endforeach
                 </ul>
             </div>
         </div>
     </div>
     @endif

     {!! do_shortcode('[shoppingguide][/shoppingguide]') !!}

     <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body p-0">
                     <div class="row mr-md-0 position-relative">
                         <div class="col-md-5 col-12 col-left position" style="background-image: url({{Theme::asset()->url('/images/products/ordersucces.jpg')}}); background-repeat: no-repeat; background-size: cover;">

                         </div>

                         <div class="col-md-7 p-0 col-12 col-right pl-md-4">
                             <div class="modal-header border-bottom-0 pb-2">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <i class="fal fa-times"></i>
                                 </button>
                             </div>
                             <div class="form-modal pl-md-3 pr-md-5 px-3 pb-4">
                                 <div class="theme-customize-header-section__header pt-0">
                                     <h2 class="theme-customize-header-section__header__title mb-1 pb-0">
                                         {!! __('Order') !!}
                                     </h2>
                                     <p class="theme-customize-header-section__header__des mb-3">
                                         {!! __('Please fill in the information correctly') !!}
                                     </p>
                                 </div>
                                 <form action="{{route('public.checkout.process-custom')}}" method="POST" id="CheckoutForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="payment_method" hidden value="cod">
                                    <input type="text" name="shipping_method" hidden value="default">
                                    <div class="form-group">
                                        <div class="ui input focus w-100">
                                            <input autocomplete="off" type="text" name="address[name]" value="{{ old('customer_name') }}" placeholder="{!!__('Full name')!!}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="ui input focus w-100">
                                            <input autocomplete="off" type="number" name="address[phone]" placeholder="{!!__('Phone number')!!}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="ui search selection dropdown city w-100" name="address[city]">
                                            <option hidden selected="selected"  value="" >Tỉnh/thành</option>
                                            @forelse(@$provinces as $row)
                                                <option {{ old('city') == @$row->id ? 'selected' : '' }}
                                                    value="{{ @$row->id }}">{{ @$row->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="ui search selection dropdown district w-100" name="address[state]" id="">
                                            <option hidden selected="selected"  value="" >Quận/huyện</option>
                                            @forelse(@$districts as $row)
                                                <option {{ old('district') == @$row->id ? 'selected' : '' }}
                                                    value="{{ @$row->id }}">{{ @$row->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="ui search selection dropdown ward w-100" name="address[ward]" id="">
                                            <option hidden selected="selected"  value="" >Phường/xã</option>
                                            @forelse(@$wards as $row)
                                                <option {{ old('ward') == @$row->id ? 'selected' : '' }}
                                                    value="{{ @$row->id }}">{{ @$row->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="ui input focus w-100">
                                            <input autocomplete="off" name="address[address]" type="text" placeholder="Địa chỉ giao hàng">
                                        </div>
                                    </div>
                                    @php $products = get_products([],theme_option('number_of_products_per_page')); @endphp
                                    <div class="form-group">
                                        <select class="ui search selection dropdown product w-100" name="product">
                                            <option hidden selected="selected"  value="" >Sản phẩm</option>
                                            @forelse(@$products as $row)
                                                <option {{ @$product->id == @$row->id ? 'selected' : '' }}
                                                    value="{{ @$row->id }}">{{ @$row->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="ui input focus w-100">
                                            <input autocomplete="off" class="input-file-attach" id="file" name="attach_file" type="file" hidden>
                                            <label class="input-file-trigger" for="file">Upload bản vẽ (định dạng jpg, pdf, tiff...)</label>
                                        </div>
                                        <p class="file-return"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" rows="3" class="form-control" placeholder="Ghi chú kèm theo"></textarea>
                                    </div>
                                    <div class="box__btn">
                                        <button type="submit" class="btn-order" ><i class="fal fa-shopping-cart"></i> {!!__('Order')!!} </button>
                                    </div>
                                </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal price-notification fade" id="{{$slug}}" role="dialog" aria-labelledby="{{$slug}}" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <i class="fal fa-times"></i>
                     </button>
                 </div>
                 <div class="modal-header">
                     <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle"> {!! $product->name !!} </h5>
                 </div>
                 <div class="modal-body p-0">
                     @if(has_field($product, 'content_module_price_notification_page_product_detail'))
                     {!! has_field($product, 'content_module_price_notification_page_product_detail') !!}
                     @endif
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
         <div class="modal-dialog mx-auto" role="document">
             <div class="modal-content">
                 <div class="modal-body p-0">
                     <div class="row">
                         <div class="col-md-6 position" style="background-image: url({{Theme::asset()->url('/images/products/ordersucces.jpg')}}); background-repeat: no-repeat; background-size: cover;">

                         </div>

                         <div class="col-md-6">
                             <div class="col-body p-3">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                                     <i class="fal fa-times"></i>
                                 </button>

                                 <div class="col-content distance-y">
                                     <div class="icon-success mb-lg-5 mb-4">
                                         <i class="fal fa-check-circle"></i>
                                     </div>
                                     <div class="theme-customize-header-section__header pt-0">
                                         <h2 class="theme-customize-header-section__header__title mb-3 pb-0">
                                            {!!__('Your order is successful')!!}
                                         </h2>
                                         <p class="theme-customize-header-section__header__des mb-3">
                                            {!! __('Thank you') !!}
                                         </p>
                                     </div>
                                     <a href="{{route('public.single')."/".get_slug_by_reference(theme_option('products_id'))}}" title="{!!__('See more products')!!}" class="read-more mt-4 d-inline-block"> {!!__('See more products')!!} </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<script>
    $(document).ready(function() {
        if($('#section-product-more-info__carousel').length){
            new Splide('#section-product-more-info__carousel', {
                heightRatio: 0.5625
                , cover: true
                , rewind: true
                , lazyLoad: 'sequential'
            }).mount();
        }

        // $.validator.addMethod("regxPhone", function (value, element, regexpr) {
        //     return regexpr.test(value);
        // }, "Số điện thoại sai định dạng");

        $("#CheckoutForm").validate({
            ignore: [],
            rules: {
                'address[name]': {
                    required: true,
                }, 
                'address[phone]': {
                    required: true,
                    // digits: true,
                    // regxPhone: /(09|08|07|05|03)+([0-9]{8})\b/
                },
                'address[city]': {
                    required: true,
                },
                'address[state]': {
                    required: true,
                },
                'address[ward]': {
                    required: true,
                },
                'address[address]': {
                    required: true,
                },
                product: {
                    required: true,
                },
                attach_file: {
                    extension: "jpg|png|jpeg|pdf|tiff"
                }
            },
            messages: {
                'address[name]': 'Thông tin này không được bỏ trống!',
                'address[phone]': {
                    required: 'Thông tin này không được bỏ trống!',
                    // digits: 'Số điện thoại không hợp lệ!'
                },
                'address[city]': "Thông tin này không được bỏ trống!",
                'address[state]': "Thông tin này không được bỏ trống!",
                'address[ward]': "Thông tin này không được bỏ trống!",
                'address[address]': "Thông tin này không được bỏ trống!",
                product: "Thông tin này không được bỏ trống!",
                attach_file: "File không đúng định dạng!",
            },
            errorElement: "div",
            validClass: "valid-validate",
            errorClass: "error-validate",
            errorPlacement: function (error, element) {
                error.insertAfter(element.parents('.form-group'));
            },
            submitHandler: function (form) {
                // Helper.showProcessingLoader();
                form.submit();
            },
        });

        var fileInput  = document.querySelector( ".input-file-attach" ),  
            button     = document.querySelector( ".input-file-trigger" ),
            the_return = document.querySelector(".file-return");
        button.addEventListener( "keydown", function( event ) {  
            if ( event.keyCode == 13 || event.keyCode == 32 ) {  
                fileInput.focus();  
            }  
        });
        button.addEventListener( "click", function( event ) {
            fileInput.focus();
            return false;
        });  
        fileInput.addEventListener( "change", function( event ) {
            var fullPath = this.value;
            if (fullPath) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            }
            the_return.innerHTML = filename ? ('File đã chọn: ' + filename) : '';  
        });
        var success = "{{Session::get('success')}}"
        if(success) {
            $('#successModal').modal('show');
        }
        $('#close').on('click', function () {
            $('#successModal').modal('hide');
        })
    });
    var Popup = {
        city:function(){
            if($('.city').length){
                var ignoreDiacritics = true;
                $('.ui.dropdown.city').dropdown({
                    ignoreDiacritics: ignoreDiacritics,
                    // sortSelect: true,
                    fullTextSearch: 'exact',
                    onChange: function(value, text, $choice) {
                        if(text){
                            $.ajax({
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                        "content"
                                    )
                                },
                                url: "{{route('address.district')}}",
                                method: "GET",
                                data: {
                                    city: value
                                },
                                dataType: "json",
                                beforeSend: function() {
                                    $('.ui.dropdown.district').api('set loading');
                                    $('.ui.dropdown.ward').api('set loading');
                                },
                                success: function(result, status, xhr) {
                                    $('select[name="address[state]"]')[0].innerHTML = result.html_district;
                                    $('select[name="address[ward]"]')[0].innerHTML = result.html_ward;
                                },
                                error: function(xhr, status, error) {
                                },
                                complete: function(xhr, status) {
                                    $('.ui.dropdown.district').api('remove loading');
                                    $('.ui.dropdown.ward').api('remove loading');
                                }
                            });
                        }
                    }
                });
            }
        },
        district:function(){
            if($('.district').length){
                var ignoreDiacritics = true;
                $('.ui.dropdown.district').dropdown({
                    ignoreDiacritics: ignoreDiacritics,
                    // sortSelect: true,
                    fullTextSearch: 'exact',
                    onChange: function(value, text, $choice) {
                        if(text){
                            $.ajax({
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                        "content"
                                    )
                                },
                                url: "{{route('address.ward')}}",
                                method: "GET",
                                data: {
                                    district: value
                                },
                                dataType: "json",
                                beforeSend: function() {
                                    $('.ui.dropdown.ward').api('set loading');
                                },
                                success: function(result, status, xhr) {
                                    $('select[name="address[ward]"]')[0].innerHTML = result.html;
                                },
                                error: function(xhr, status, error) {
                                },
                                complete: function(xhr, status) {
                                    $('.ui.dropdown.ward').api('remove loading');
                                }
                            });
                        }
                    }
                });
            }
        }
    }
    if($('.ward').length){
        var ignoreDiacritics = true;
        $('.ui.dropdown.ward').dropdown({
            ignoreDiacritics: ignoreDiacritics,
            sortSelect: true,
            fullTextSearch:'exact',
        });
    }
    if($('.product').length){
        var ignoreDiacritics = true;
        $('.ui.dropdown.product').dropdown({
            ignoreDiacritics: ignoreDiacritics,
            sortSelect: true,
            fullTextSearch:'exact',
        });
    }
    Popup.city();
    Popup.district();
</script>
