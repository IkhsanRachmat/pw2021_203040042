// Ikhsan-203040042
// tubes PW(Pemrograman Web)
// Js code

// Preview Image Untuk Tambah dan Ubah
function previewImage() {
    const gambar = document.querySelector('.fotobarang');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}