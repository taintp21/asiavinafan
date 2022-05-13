jQuery('.product-categories-carousel').slick({
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        // {
        //     breakpoint: 576,
        //     settings: {slidesToShow: 2 }
        // }
    ]
});