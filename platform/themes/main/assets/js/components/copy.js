export default function copy() {
    const {check, message} = window._scriptCopyLink;

   if(check!=undefined) {
        var $temp = $("<input>");
        var $url = $(location).attr('href');

        $(".list-share .share-item a").each(function () {
            var $url = $(location).attr('href');
            
            if ($(this).attr('href') == '') { 
                $(this).on('click', function(e) {
                    e.preventDefault();
                    $("body").append($temp);
                    $temp.val($url).select();
                    document.execCommand("copy");
                    $temp.remove();
                    Swal.fire(
                    message,
                    '',
                    'success'
                    )
                })
            }
        });
   }
}