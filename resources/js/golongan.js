(function () {
    console.log('[GOLONGAN.JS IS RENDER COK]');

    /**
     * for handle function toast
     * show sukses informnation blablabla
     */
    function isSuccessToast(strValue) {
        const _opt = {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
            onHidden: function() {
                window.location.reload();
            },
        };

        toastr.success(strValue, 'Wohoooo!', _opt);
    }

    /**
     * This is function for handle golongan add form submit
     * methd post
     */
    function golonganOnSavehandler() {
        const formGolongan = $('form#saveGolongan');
        formGolongan.on("submit", function(event) {
            event.preventDefault();

            const _this = $(this);

            // Diasbled btn on submit
            let btnSubmit = _this.find('button[type=submit]');
            btnSubmit.prop('disabled', true);

            $.ajax({
                type: _this.attr('method'),
                data: _this.serialize(),
                url: _this.attr('action'),
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(data) {
                    isSuccessToast(data.success);
                },
                error: function(data) {
                    btnSubmit.prop('disabled', false);
                    const errors = data.responseJSON.errors;
                    let errorsHtml = '';
                    $.each(errors, function(_key, value) {
                        errorsHtml += '<p>- ' + value[0] + '</p>';
                    });
                    toastr.error(errorsHtml, 'Whoops!');
                }
            });
        });
    }

    /**
     * show data edsit
     */
    function onEditHandler() {
        const formAction = $('form[id="actionDelete"]');

        /**
         * Modal show edit golongan
         */
        function modalShowEditGolongan(data) {
            const editGolongan = $('#editGolongan');
            editGolongan.find('#id_golongan').val(data.id_golongan);
            editGolongan.find('#nm_golongan').val(data.nm_golongan);
            editGolongan.find('#ket_golongan').val(data.ket_golongan);
            editGolongan.modal('show');
        }

        /**
         * handler post update
         */
        function updateHandler(data) {
            const updateForm = $('form[id="dataGolongan"]');
            updateForm.on('submit', function(event) {
                event.preventDefault();
                const _this = $(this);
                const btnSubmit = _this.find('button[type="submit"]');
                btnSubmit.prop('disabled', true);

                $.ajax({
                    type: _this.attr('method'),
                    data: _this.serialize(),
                    url: _this.attr('action') + "/" + data.id_golongan,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        isSuccessToast(data.success);
                    },
                    error: function(data) {
                        btnSubmit.prop('disabled', false);
                        let errors = data.responseJSON.errors;
                        let errorsHtml = '';
                        $.each(errors, function(_key, value) {
                            errorsHtml += '<p>- ' + value[0] + '</p>';
                        });
                        toastr.error(errorsHtml, 'Whoops!');
                    },
                });
            });
        }

        $(formAction.find('a#edit'))
            .on('click', function(event) {
                event.preventDefault();
                const _this = $(this);
                $.ajax({
                    url: _this.attr('href'),
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        updateHandler(data);
                        modalShowEditGolongan(data);
                    },
                    error: function () {
                        alert('Something error');
                    },
                });
            });
    }

    /**
     * Run app on dokumen ready
     */
    $(document).ready(function() {
        golonganOnSavehandler();
        onEditHandler();
    });
})();
