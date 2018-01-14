/*mysql> select *from prodi;
+----+------+---------------------+
| id | kode | nama                |
+----+------+---------------------+
|  1 | SI   | Sistem Informasi    |
|  2 | TP   | Teknik Pertambangan |
|  5 | FK   | fakultas kedokteran |
|  6 |      |                     |
+----+------+---------------------+
4 rows in set (0,00 sec)
*/
$(function() {
        $("form[name='form_prodi']").validate({
                rules: {
                        kode: {
                                required:true,
                                maxlength:10,
                        },
                        nama: "required",
                },

                messages: {
                        kode: {
                                required: "Kode wajib diisi",
                                maxlength: "maksimum 10 character!!"
                        },
                        nama: "Nama wajib diisi!",
                },

                submitHandler: function(form){
                        form.submit();
                }
        });
});
