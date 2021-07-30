export default {
    default: function() {
        try {
            if(window._homePage != undefined) {
                const { imageWhy, imageProducts } = window._homePage;

                if(imageWhy.length!=0) {
                    //hover module product, change image src
                    var imageModuleWhy = document.getElementById("image-why-choose");
                    var arrItemWhy = document.getElementsByClassName("item-why");
                    for (var i = 0; i < arrItemWhy.length; i++) {
                        arrItemWhy[i].onmouseover = function(e) {
                            e.preventDefault();
                            var imgId = $(this).attr("data-image-id");
                            var imgSrc = imageWhy[imgId];
                            var style = ["background-image: url(", imgSrc, ");"].join(
                                ""
                            );
                            imageModuleWhy.setAttribute("style", style);
                        };
                    }
                    
                }

                if(imageProducts.length!=0) {
                    var imageOurproduct = document.getElementById("image-ourproduct");
                    var arr = document.getElementsByClassName(
                        "list-cate-pro__item__link"
                    );
                    this.initHoverChangeImage(imageOurproduct, arr, imageProducts)
                }

                this.initSlice();

                var style = document.createElement('style');

                style.innerHTML = `
                    .box-sub {
                        display: none;
                    }
                
                    header {
                        margin-top: 2rem;
                    }
                
                    .container-customize-header {
                        max-width: 1920px;
                        padding-left: 16% !important;
                        padding-right: 16% !important;
                    }
                
                    @media (max-width: 1680px) {
                        .container-customize-header {
                            padding-left: 10% !important;
                            padding-right: 10% !important;
                        }
                    }
                
                    @media (max-width: 992px) {
                        .container-customize-header {
                            padding-left: 8% !important;
                            padding-right: 8% !important;
                        }
                    }
                
                    @media (max-width: 768px) {
                        .container-customize-header {
                            padding-left: 15px !important;
                            padding-right: 15px !important;
                        }
                    }
                
                    .bilingual {
                        display: none !important;
                    }
                
                    @media (min-width: 992px) {
                        .col-index-3 {
                            flex: 0 0 25%;
                            max-width: 25%;
                        }
                
                        .col-index-9 {
                            flex: 0 0 75%;
                            max-width: 75%;
                        }
                    }`;

                document.head.appendChild(style);
            }

            if(window._Introduce!=undefined) {
                const {imageValue} = window._Introduce;
                if(imageValue.length != 0) {
                    var eleimageValue = document.getElementById("image-value");
                    var arr = document.getElementsByClassName(
                        "item-core-value"
                    );
                    this.initHoverChangeImage(eleimageValue, arr, imageValue, true)
                }
            }

            $(".set-height").height($(".get-height").height());

            $(".btn-read-more.tabs").on("click", function(e) {
                e.preventDefault();

                if ($(".tab-pane.show .line__item:hidden").length == 0) {
                    $(".tab-pane.show .line__item")
                        .slice(3)
                        .slideUp();
                    $(this).text("Xem thêm");
                } else {
                    $(".tab-pane.show .line__item:hidden")
                        .slice(0, 2)
                        .slideDown();

                    if ($(".tab-pane.show .line__item:hidden").length == 0) {
                        $(this).text("Thu gọn");
                    }
                }
            });

           
		    var id = '#dialog';
		
		//transition effect		
            $('#mask').fadeIn(500);	
            $('#mask').fadeTo("slow");	
                
            //transition effect
            $(id).fadeIn(1000); 	
        
            //if close button is clicked
            $('.window .close').click(function (e) {
                //Cancel the link behavior
                e.preventDefault();
                
                $('#mask').hide();
                $('.window').hide();
            });		
            
            //if mask is clicked
            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });		

        } catch (error) {
            console.log("error", error);
        }
    },
    initHoverChangeImage: function(eleImage, eleItemHover, dataArr, prevent = false) {
        for (var i = 0; i < eleItemHover.length; i++) {
            eleItemHover[i].onmouseover = function(e) {
                if(prevent!=false) {
                    e.preventDefault();
                    var imgId = $(this).attr("data-image-id");
                }else {
                    var a = e.target;
                    var imgId = a.getAttribute("data-image-id");
                }

                var imgSrc = dataArr[imgId];
                eleImage.src = imgSrc;
            };
        }
    },
    initSlice: function() {
        new Splide("#section-intro__carousel", {
            heightRatio: 0.5625,
            cover: true,
            rewind: true,
            autoplay: true,
            pauseOnHover: false,
            lazyLoad: "sequential",
            height: "35.625rem",
            breakpoints: {
                1680: {
                    height: "31.666666666666668rem",
                },
                1200: {
                    height: "23.733333333333334rem",
                },
                992: {
                    height: "20rem",
                },
                576: {
                    height: "11rem",
                },
                360: {
                    height: "7rem",
                },
            },
        }).mount();
        new Splide("#box-common-typeicalproject-carousel__carousel", {
            perPage: 3,
            gap: 40,
            breakpoints: {
                992: {
                    perPage: 2,
                    gap: "1rem",
                },
                480: {
                    perPage: 1,
                    gap: "1rem",
                },
            },
        }).mount();
    },
    initMap: function() {
        var map = document.getElementsByClassName("modal-map")[0];
        var arr = document.getElementsByClassName("link-map");

        for (var i = 0; i < arr.length; i++) {
            arr[i].onclick = function(e) {
                var a = e.target;
                var url = a.getAttribute("data-lat");
                map.src = url;
            };
        }
    },
    fixedNavbar: function() {
        var docEl = $(document),
        headerEl = $('header');

        docEl.on('scroll', function(){
            if ( docEl.scrollTop() > 50 ){
              headerEl.addClass('fixed-to-top');
            }
            else {
              headerEl.removeClass('fixed-to-top');
            }
        });
    }
};
