const inputFile_perfil = document.querySelector('#picture_input_perfil');inputFile_perfil
const pictureImage_perfil = document.querySelector('.picture_image_perfil');
const pictureImageTxt_perfil = "<img src='../imgs/boneco_perfil.jpg'>";
pictureImage_perfil.innerHTML = pictureImageTxt_perfil;

inputFile_perfil.addEventListener('change', function (p) {
    const inputTarget_perfil = p.target;
    const file_perfil = inputTarget_perfil.files[0];

    if (file_perfil) {
        const reader_perfil = new FileReader();

        reader_perfil.addEventListener('load', function (p) {
            const readerTarget_perfil = p.target;

            const img_perfil = document.createElement('img');
            img_perfil.src = readerTarget_perfil.result;
            img_perfil.classList.add('picture_image_perfil');

            pictureImage_perfil.innerHTML = '';

            pictureImage_perfil.appendChild(img_perfil);
        })

        reader_perfil.readAsDataURL(file_perfil);
    } else {
        pictureImage_perfil.innerHTML = pictureImageTxt_perfil;
    }
})