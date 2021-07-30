export default 
    function initCounter() {
        try {
            if(window._counter!=undefined) {
                $(".__col__up.count").each(function () {
                    var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
                    $(this).prop('Counter', 0).animate({
                       Counter: $(this).text()
                    }, {
                       duration: 3000,
                       step: function (func) {
                          $(this).text(parseFloat(func).toFixed(size));
                       }
                    });
                });
            }
        }catch(error) {
            console.log(error)
        }
    
}