define([
    'jquery'
], function ($) {
    'use strict';

    return function (widget) {
        $.widget('mage.SwatchRenderer', widget, {
            _Rebuild: function () {
                return this._super();
            }
        });

        return $.mage.SwatchRenderer;
    }
});
