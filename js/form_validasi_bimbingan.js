/*+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
| id | tanggal    | bimbingan_presensi                 | bimbingan_keuangan | bimbingan_akademik          | kategori_id | semester | nim       |
+----+------------+------------------------------------+--------------------+-----------------------------+-------------+----------+-----------+
*/
$(function() {
        $("form[name='form_bimbingan']").validate({
                rules: {
                        id: {
                                required:true,
                                maxlength:11,
                        },
                        tanggal: "required",
                        bimbingan_presensi: "required",
                        bimbingan_keuangan: "required",
                        bimbingan_akademik:"required",
                        kategori_id:"required",
                        semester:"required",
                        nim:"required"
                },

                messages: {
                        id: {
                                required: "id Wajib diisi",
                                maxlength: "Maksimum 11 character!!"
                        },
                        tanggal: "tanggal Wajib diisi!",
                        bimbingan_presensi: "Bimbingan Presensi Wajib diisi!",
                        bimbingan_keuangan: "Bimbingan Keuangan Wajib diisi!",
                        bimbingan_akademik:"Bimbingan Akademik wajib diisi!",
                        kategori_id:"ID kategori wajib Diisi!",
                        semester:"Semester wajib Diisi!",
                        nim:"NIM wajib Diisi!"
                },

                submitHandler: function(form){
                        form.submit();
                }
        });
});
