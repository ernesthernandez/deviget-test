define([
    'jquery',
    'mage/translate',
    'Magento_Ui/js/modal/alert'
], function ($, $t, alert) {
    'use strict';

    return function (widget) {
        $.widget('mage.SwatchRenderer', widget, {
            /**
             * Logic to add tooltip into the swatches
             * @returns {*}
             * @private
             */
            _OnClick: function ($this, $widget) {
                let _self = this;
                alert({
                    title: $t('Low Stock of this product hurry up!'),
                    content: $('.alert-modal-content'),
                    modalClass: 'alert',
                    buttons: [{
                        text: $.mage.__('Select'),
                        class: 'action primary accept',
                        click: function () {
                            this.closeModal(true);
                        }
                    }]
                });
                _self._super($this, $widget)
            }
        });

        return $.mage.SwatchRenderer;
    }
});
