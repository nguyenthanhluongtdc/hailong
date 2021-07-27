@if(theme_option('image_popup'))
<div id="boxes">
    <div style="display: none;" id="dialog" class="window">
        <div id="lorem">
            <button class="close popup"> <i class="fal fa-times"></i> </button>
            <img class="mw-100 h-auto" src="{{rvMedia::getImageUrl(theme_option('image_popup'))}}" />
        </div>
    </div>
    <div id="mask"></div>
</div>
@endif
