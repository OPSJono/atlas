(function($) {

    'use strict';

    const SimpleModal = function () {

        const _this = this;

        const simpleModal = '#simpleModal';
        //store the default modal content in a variable so that we can reset the modal if it gets closed.
        let simpleModalContent = '';
        let modalClass = '';

        const storeSimpleModalTemplate = function () {
            if (simpleModalContent === '') {
                simpleModalContent = $('#simpleModal .modal-content').html();
            }
        };

        const modalEvents = function () {
            // change the default bootstrap behaviour to remove any data that was attached to the modal
            $('body').on('hidden.bs.modal', '.modal', function (e) {
                $(this).removeData('bs.modal');
                $(simpleModal).removeClass(modalClass);
            });
            $(simpleModal).on('show.bs.modal', function (e) {
                storeSimpleModalTemplate();
            });
            $(simpleModal).on('loaded.bs.modal', function (e) {
                storeSimpleModalTemplate();
            });
            $(simpleModal).on('hidden.bs.modal', function (e) {
                $(simpleModal + ' .modal-dialog').removeClass().addClass('modal-dialog');
                $(simpleModal + ' .modal-content').html(simpleModalContent);
            });
        };

        this.closeModal = function () {
            $(simpleModal).modal('hide');
        };

        /**
         * Load the simple modal manually rather than using the automatic bootstrap method
         * * Usage: Add a class of js-simple-modal to any link / button
         */
        const manualModal = function () {

            $('body').on('click', '.js-simple-modal', function (e) {
                e.preventDefault();
                storeSimpleModalTemplate();

                const $element = $(this);

                let ajaxUrl = $element.data('url');
                if (ajaxUrl === undefined) {
                    ajaxUrl = $element.attr('href');
                }
                let dataType = $element.data('type');
                if (dataType === undefined) {
                    dataType = 'json';
                }

                // Get the contents of the specified page and update the modal content
                $.ajax({
                    url: ajaxUrl,
                    method: 'GET',
                    dataType: dataType,
                }).done(function (response) {
                    if (response.html > '') {
                        $(simpleModal + ' .modal-content').html(response.html);
                    }
                }).fail(function (response, xhr, textStatus, errorThrown) {
                    $.error('Request Failed: ' + textStatus);
                    console.log(errorThrown);
                });

                $('#simpleModal').modal({
                    'show': true,
                    'backdrop': 'static',
                    'keyboard': true
                });
            });

        };

        /**
         * Submit a form loaded within the simple modal without having to add any js to the file
         * * Usage: Add a class of js-simple-modal-form-submit to the form
         */
        this.submitModalForm = function($form) {

            $(simpleModal + ' .modal-footer button:submit').prop('disabled', true);
            const submitBtnHtml = $(simpleModal + ' .modal-footer button:submit').html();
            $(simpleModal + ' .modal-footer button:submit').html('<i class="fas fa-circle-notch fa-spin" aria-hidden="true"></i> Saving...');

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                dataType: 'JSON'

            }).done(function(response) {
                const data = $.extend({
                    replaceHtml: true
                }, response || {});

                if (data.reload !== undefined) {
                    $(simpleModal + ' .modal-content').html('');
                    window.location.reload();
                } else if (data.redirect !== undefined) {
                    window.location.replace(data.redirect);
                    if(data.redirect.indexOf("#") !== -1) {
                        window.location.reload();
                    }
                } else if (data.location !== undefined) {
                    window.location.replace(data.location);
                } else if (data.html > '' && data.replaceHtml !== false) {
                    $(simpleModal + ' .modal-content').html(data.html);
                }
                $(simpleModal + ' .modal-footer button:submit').html(submitBtnHtml).prop('disabled', false);
            }).fail(function(data, xhr, textStatus, errorThrown) {
                $.error('Request Failed: ' + textStatus);
                console.error(errorThrown);
            });
        };

        /**
         * Public Methods
         */
        this.init = function() {
            modalEvents();
            manualModal();
            $(simpleModal).on('submit', '.js-simple-modal-form-submit', function (e) {
                e.preventDefault();
                _this.submitModalForm($(this));
            });
        };
    };


    //return the object for global use
    $.SimpleModal = function() {
        return new SimpleModal();
    };

})(jQuery);

window.simpleModal = $.SimpleModal();

window.simpleModal.init();