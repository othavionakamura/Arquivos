const inputFile_perfil = document.querySelector('#picture_input_perfil');inputFile_perfil
const pictureImage_perfil = document.querySelector('.picture_image_perfil');
const pictureImageTxt_perfil = "<img src='boneco_perfil.jpg'>";
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








const inputFile = document.querySelector('#picture_input');
const pictureImage = document.querySelector('.picture_image');
const pictureImageTxt = 'Adicionar uma Imagem +';
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener('change', function (e) {
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function (e) {
            const readerTarget = e.target;

            const img = document.createElement('img');
            img.src = readerTarget.result;
            img.classList.add('picture_image');

            pictureImage.innerHTML = '';

            pictureImage.appendChild(img);
        })

        reader.readAsDataURL(file);
    } else {
        pictureImage.innerHTML = pictureImageTxt;
    }
})









const inputFile2 = document.querySelector('#picture_input2');
const pictureImage2 = document.querySelector('.picture_image2');
const pictureImageTxt2 = 'Adicionar uma Imagem +';
pictureImage2.innerHTML = pictureImageTxt2;

inputFile2.addEventListener('change', function (w) {
    const inputTarget2 = w.target;
    const file2 = inputTarget2.files[0];

    if (file2) {
        const reader2 = new FileReader();

        reader2.addEventListener('load', function (w) {
            const readerTarget2 = w.target;

            const img2 = document.createElement('img');
            img2.src = readerTarget2.result;
            img2.classList.add('picture_image2');

            pictureImage2.innerHTML = '';

            pictureImage2.appendChild(img2);
        })

        reader2.readAsDataURL(file2);
    } else {
        pictureImage2.innerHTML = pictureImageTxt2;
    }
})







const inputFile3 = document.querySelector('#picture_input3');
const pictureImage3 = document.querySelector('.picture_image3');
const pictureImageTxt3 = 'Adicionar uma Imagem +';
pictureImage3.innerHTML = pictureImageTxt3;

inputFile3.addEventListener('change', function (t) {
    const inputTarget3 = t.target;
    const file3 = inputTarget3.files[0];

    if (file3) {
        const reader3 = new FileReader();

        reader3.addEventListener('load', function (t) {
            const readerTarget3 = t.target;

            const img3 = document.createElement('img');
            img3.src = readerTarget3.result;
            img3.classList.add('picture_image3');

            pictureImage3.innerHTML = '';

            pictureImage3.appendChild(img3);
        })

        reader3.readAsDataURL(file3);
    } else {
        pictureImage3.innerHTML = pictureImageTxt3;
    }
})







const inputFile4 = document.querySelector('#picture_input4');
const pictureImage4 = document.querySelector('.picture_image4');
const pictureImageTxt4 = 'Adicionar uma Imagem +';
pictureImage4.innerHTML = pictureImageTxt4;

inputFile4.addEventListener('change', function (y) {
    const inputTarget4 = y.target;
    const file4 = inputTarget4.files[0];

    if (file4) {
        const reader4 = new FileReader();

        reader4.addEventListener('load', function (y) {
            const readerTarget4 = y.target;

            const img4 = document.createElement('img');
            img4.src = readerTarget4.result;
            img4.classList.add('picture_image4');

            pictureImage4.innerHTML = '';

            pictureImage4.appendChild(img4);
        })

        reader4.readAsDataURL(file4);
    } else {
        pictureImage4.innerHTML = pictureImageTxt4;
    }
})