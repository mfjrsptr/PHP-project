/*
" (nim,nama,tgl_lahir,jk,prodi_id,thnmasuk,rombel_id) ".
*/
$(function() {
        $("form[name='formmahasiswa']").validate({
                rules: {
                        nim: {
                                required:true,
                                maxlength:10,
                        },
                        nama: "required",
                        tgl_lahir: "required",
                        jk: "required",
                        prodi_id:"required",
                        thnmasuk:"required",
                        rombel_id:"required",
                },

                messages: {
                        kode: {
                                required: "NIM Wajib diisi",
                                maxlength: "Maksimum 10 character!!"
                        },
                        nama: "Nama Wajib diisi!",
                        tgl_lahir: "Tanggal Lahir Wajib diisi!",
                        jk: "Jenis Kelamin Wajib diisi!",
                        prodi_id:"Prodi ID wajib diisi!",
                        thnmasuk:"Tahun Masuk wajib Diisi!",
                        rombel_id:"Rombel ID wajib Diisi!"
                },

                submitHandler: function(form){
                        form.submit();
                }
        });
});
