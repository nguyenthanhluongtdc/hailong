<!--Google map-->
<div class="modal fade" id="myMapModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100"> {!! __('Google map') !!} <span id="lat" class="float-right"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="map-canvas" class="">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #map-canvas iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>