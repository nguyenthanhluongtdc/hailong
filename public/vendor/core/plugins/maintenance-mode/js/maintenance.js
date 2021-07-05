/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************************************************!*\
  !*** ./platform/plugins/maintenance-mode/resources/assets/js/maintenance.js ***!
  \******************************************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var MaintenanceMode = /*#__PURE__*/function () {
  function MaintenanceMode() {
    _classCallCheck(this, MaintenanceMode);
  }

  _createClass(MaintenanceMode, [{
    key: "init",
    value: function init() {
      $(document).on('click', '#btn-maintenance', function (event) {
        event.preventDefault();

        var _self = $(event.currentTarget);

        _self.addClass('button-loading');

        $.ajax({
          type: 'POST',
          url: route('system.maintenance.run'),
          cache: false,
          data: _self.closest('form').serialize(),
          success: function success(res) {
            if (!res.error) {
              Botble.showSuccess(res.message);
              var data = res.data;

              _self.text(data.message);

              if (!data.is_down) {
                _self.removeClass('btn-warning').addClass('btn-info');

                _self.closest('form').find('.maintenance-mode-notice div span').removeClass('text-danger').addClass('text-success').text(data.notice);
              } else {
                _self.addClass('btn-warning').removeClass('btn-info');

                _self.closest('form').find('.maintenance-mode-notice div span').addClass('text-danger').removeClass('text-success').text(data.notice);

                if (data.url) {
                  $('#bypassMaintenanceMode .maintenance-mode-bypass').attr('href', data.url);
                  $('#bypassMaintenanceMode').modal('show');
                }
              }
            } else {
              Botble.showError(res.message);
            }
          },
          error: function error(res) {
            Botble.handleError(res);
          },
          complete: function complete() {
            _self.removeClass('button-loading');
          }
        });
      });
    }
  }]);

  return MaintenanceMode;
}();

$(document).ready(function () {
  new MaintenanceMode().init();
});
/******/ })()
;