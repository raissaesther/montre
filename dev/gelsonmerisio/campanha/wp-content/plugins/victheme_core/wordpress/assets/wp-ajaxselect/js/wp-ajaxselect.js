/**
 *  Javascript Ajax Select Picker
 *
 *  Prequisites :
 *  - Bootstrap select must be loaded
 *  - Boostrap ajax select picker must be loaded
 *  - The select element must be initialized by bootstrap select picker first.
 *
 *  Select element must have these attributes :
 *  - data-ajax-url         : (string) the ajax url to point ajax request to
 *  - data-ajax-nonce       : (string) Wordpress nonce to check the ajax request against
 *  - data-ajax-locale      : (json) The string locale translation
 *  - data-ajax-object      : (string) The VTCore Ajax processor object name or alias
 *  - data-ajax-queue       : (json - array) Array of queue to process as used in the ajax processor object
 *
 *  Select element must have class of vt-ajax-picker to be auto initialized via this javascript.
 *
 *  @author jason.xie@victheme.com
 */

(function($) {

    if (!window.VT) {
        window.VT = {};
    }

    VT.AjaxPicker = function(el) {
        this.el = el;
        this.url = el.data('ajax-url');
        this.nonce = el.data('ajax-nonce');
        this.locale = el.data('ajax-locale');
        this.object = el.data('ajax-object');
        this.queue = el.data('ajax-queue');
        this.data = el.data('ajax-data') || '';
        this.count = 0;

        // Auto initializing
        this.init();
    };

    VT.AjaxPicker.prototype = {
        check: function() {
            return (typeof $.fn.ajaxSelectPicker === 'function'
                && typeof $.fn.selectpicker === 'function'
                && this.el.data('selectpicker'));
        },
        attach: function() {

            if (this.el.hasClass('ajax-picker-initialized')) {
                return;
            }

            var that = this;
            this.el.ajaxSelectPicker({
                locale: that.locale,
                ajax: {
                    url: that.url,
                    data: function () {
                        return {
                            data: '',
                            options: that.data,
                            q: '{{{q}}}',
                            nonce: that.nonce,
                            action: 'vtcore_ajax_framework',
                            queue: that.queue,
                            object: that.object
                        };
                    }
                }
            });

            this.el.addClass('ajax-picker-initialized');
        },
        init: function() {
            if (this.check()) {
                this.attach();
            }
            else {
                if (this.count < 100) {
                    var that = this;
                    setTimeout(function () {
                        that.init();
                    }, 800);
                }
            }
        }
    };

    $(document)
        .on('ready.ajaxPickerStart ajaxComplete.ajaxPickerStart', function() {
            $('.vt-ajax-picker').not('.ajax-picker-initialized').each(function() {
                $(this).data('ajaxPicker', new VT.AjaxPicker($(this)));
            });
        });

})(jQuery);