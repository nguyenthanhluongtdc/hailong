/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./platform/themes/main/assets/js/common.js":
/*!**************************************************!*\
  !*** ./platform/themes/main/assets/js/common.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _page_home__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./page/home */ "./platform/themes/main/assets/js/page/home.js");

$(document).ready(function () {
  _page_home__WEBPACK_IMPORTED_MODULE_0__.default.default();
});

/***/ }),

/***/ "./platform/themes/main/assets/js/page/home.js":
/*!*****************************************************!*\
  !*** ./platform/themes/main/assets/js/page/home.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  "default": function _default() {
    var _this = this;

    try {
      var imageModuleWhy;
      var arrItemWhy;
      var i;
      var imageOurproduct;
      var arr;
      var i;

      (function () {
        var _window$_homePage = window._homePage,
            imageWhy = _window$_homePage.imageWhy,
            imageProducts = _window$_homePage.imageProducts;
        $(".set-height").height($(".get-height").height()); //hover module product, change image src

        imageModuleWhy = document.getElementById("image-why-choose");
        arrItemWhy = document.getElementsByClassName("item-why");

        for (i = 0; i < arrItemWhy.length; i++) {
          arrItemWhy[i].onmouseover = function (e) {
            e.preventDefault();
            var imgId = $(this).attr("data-image-id");
            var imgSrc = imageWhy[imgId];
            var style = ["background-image: url(", imgSrc, ");"].join("");
            imageModuleWhy.setAttribute("style", style);
          };
        }

        _this.initSlice();

        if ($(".tab-pane.show .line__item:hidden").length == 0) {
          $(".btn-read-more.tabs").hide();
        }

        $(".btn-read-more.tabs").on("click", function (e) {
          e.preventDefault();

          if ($(".tab-pane.show .line__item:hidden").length == 0) {
            $(".tab-pane.show .line__item").slice(3).slideUp();
            $(this).text("Xem thêm");
          } else {
            $(".tab-pane.show .line__item:hidden").slice(0, 2).slideDown();

            if ($(".tab-pane.show .line__item:hidden").length == 0) {
              $(this).text("Thu gọn");
            }
          }
        });
        imageOurproduct = document.getElementById("image-ourproduct");
        arr = document.getElementsByClassName("list-cate-pro__item__link");

        for (i = 0; i < arr.length; i++) {
          arr[i].onmouseover = function (e) {
            var a = e.target;
            var imgId = a.getAttribute("data-image-id");
            var imgSrc = imageProducts[imgId];
            imageOurproduct.src = imgSrc;
          };
        }

        _this.initSlice();
      })();
    } catch (error) {
      console.log("error", error);
    }
  },
  initSlice: function initSlice() {
    new Splide("#section-intro__carousel", {
      heightRatio: 0.5625,
      cover: true,
      rewind: true,
      lazyLoad: "sequential",
      height: "35.625rem",
      breakpoints: {
        1680: {
          height: "31.666666666666668rem"
        },
        1200: {
          height: "23.733333333333334rem"
        },
        992: {
          height: "20rem"
        },
        576: {
          height: "11rem"
        },
        360: {
          height: "7rem"
        }
      }
    }).mount();
    new Splide("#box-common-typeicalproject-carousel__carousel", {
      perPage: 3,
      gap: 40,
      breakpoints: {
        992: {
          perPage: 2,
          gap: "1rem"
        },
        480: {
          perPage: 1,
          gap: "1rem"
        }
      }
    }).mount();
  },
  initMap: function initMap() {
    var map = document.getElementsByClassName("modal-map")[0];
    var arr = document.getElementsByClassName("link-map");

    for (var i = 0; i < arr.length; i++) {
      arr[i].onclick = function (e) {
        var a = e.target;
        var url = a.getAttribute("data-lat");
        map.src = url;
      };
    }
  }
});

/***/ }),

/***/ "./platform/themes/main/assets/sass/common.scss":
/*!******************************************************!*\
  !*** ./platform/themes/main/assets/sass/common.scss ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/themes/main/js/common": 0,
/******/ 			"themes/main/css/common": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["themes/main/css/common"], () => (__webpack_require__("./platform/themes/main/assets/js/common.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["themes/main/css/common"], () => (__webpack_require__("./platform/themes/main/assets/sass/common.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;