$(function() {


    $('.tombolTambahData').on('click', function() {

        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {

        const id = $(this).data('id');
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form')[0].reset();
        $('.modal-body form')[0].setAttribute('action', 'http://localhost/uasweb1_enjel/public/mahasiswa/ubah');

        $.ajax({
            url: 'http://localhost/uasweb1_enjel/public/mahasiswa/getubah',
            data: { id : id },
            method: 'POST',
            dataType: 'json',
            
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

        });
    });