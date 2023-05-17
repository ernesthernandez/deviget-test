define([
    'jquery',
    'slick'
], function ($, slick) {
    'use strict';

    $.widget('ernest.slider', {
        /**
         * Initialization of slider widget.
         *
         * @private
         */
        _create: function () {
            let $sliderEl = this.element
            if ($sliderEl) {
                $sliderEl.slick({
                    infinite: true,
                    variableWidth: true,
                    dots: true,
                    mobileFirst: true,
                    arrows: true,
                    draggable: true,
                    prevArrow: '<button class="slick-prev slick-arrow"></button>',
                    nextArrow: '<button class="slick-next slick-arrow"></button>',
                    slidesToScroll: 2,
                    responsive: [
                        {
                            breakpoint: 480,
                            slidesToScroll: 1
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                arrows: true,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
            this._super();
        }
    });
    return $.ernest.slider;
});
