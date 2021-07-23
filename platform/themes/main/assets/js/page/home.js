export default {
    default: function() {
        try {
            const { imageWhy, imageProducts } = window._homePage;

            $(".set-height").height($(".get-height").height());

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

            this.initSlice();

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

            var imageOurproduct = document.getElementById("image-ourproduct");
            var arr = document.getElementsByClassName(
                "list-cate-pro__item__link"
            );
            for (var i = 0; i < arr.length; i++) {
                arr[i].onmouseover = function(e) {
                    var a = e.target;
                    var imgId = a.getAttribute("data-image-id");
                    var imgSrc = imageProducts[imgId];
                    imageOurproduct.src = imgSrc;
                };
            }
            this.initSlice();
        } catch (error) {
            console.log("error", error);
        }
    },
    initSlice: function() {
        new Splide("#section-intro__carousel", {
            heightRatio: 0.5625,
            cover: true,
            rewind: true,
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
};
