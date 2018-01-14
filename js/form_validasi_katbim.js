
$(function() {
        $("form[name='form_katbimbingan']").validate({
                rules: {
                        id: {
                                required:true,
                                maxlength:5,
                        },
                        nama:"required",
                },

                messages: {
                        id: {
                                required: "Kode Wajib diisi",
                                maxlength: "Maksimum 5 character!!"
                        },
                        nama: "Nama Wajib diisi!"
                },

                submitHandler: function(form){
                        form.submit();
                }
        });
});
