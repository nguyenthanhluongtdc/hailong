function index() {

    $(document).ready(function() {
        new Splide( '#section-intro__carousel', {
            heightRatio: 0.5625,
            cover      : true,
            lazyLoad   : 'sequential',
        }).mount();
   })

}

//call function and export
index()
export default index;