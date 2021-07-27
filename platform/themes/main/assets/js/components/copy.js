export default function copy() {
    try {
        

        if( window._scriptCopyLink != undefined) {
            const { message} = window._scriptCopyLink;

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

    }catch(error) {
        console.log('error'+ error)
    }
}