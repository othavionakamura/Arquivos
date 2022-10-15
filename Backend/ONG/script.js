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