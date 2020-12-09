const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        icon: 'success',
        title: 'Data Mahasiswa',
        text: 'Berhasil' + flashData
    });
}