const list = document.querySelectorAll('.list');

function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) => item.addEventListener('click', activeLink));



function changeBg(){
    var navbar = document.getElementById('nav');
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    
    if(scrollValue < 730){
        navbar.classList.remove('bgColor');
    } else {
        navbar.classList.add('bgColor');
    }
}

window.addEventListener('scroll', changeBg);