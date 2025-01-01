$(document).ready(function () {

    $('.sidebar-menu').tree();

    //icheck
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });

    //delete
    $('.delete').click(function (e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "تأكيد الحذف",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("نعم", 'btn btn-success mr-2', function () {
                    that.closest('form').submit();
                }),

                Noty.button("لا", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });

        n.show();

    });//end of delete

    // // image preview
    $(".image").change(function () {

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }

    });

    CKEDITOR.config.language =  "{{ app()->getLocale() }}";

});//end of ready
