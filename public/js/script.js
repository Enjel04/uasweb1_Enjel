$(function() {


    $('.tombolTambahData').on('click', function() {

        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
    });

    $('.tampilModalUbah').on('click', function() {

        const id = $(this).data('id');
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        });
    });