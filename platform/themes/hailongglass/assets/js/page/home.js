function home() {

    $(document).ready(function() {
        new Splide( '#section-intro__carousel', {
            heightRatio: 0.5625,
            cover      : true,
            rewind: true,
            lazyLoad   : 'sequential',
        }).mount();


        new Splide( '#section-typicalproject__carousel', {
	        perPage  : 3,
            gap      : 40,
        }).mount();
   })

}

//call function and export
home()
export default home;