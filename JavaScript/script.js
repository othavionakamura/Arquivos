const list = document.querySelectorAll('.list');

function activeLink() {
    list.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) => item.addEventListener('click', activeLink));



function changeBg(){
    var navbar = document.getElementById('nav');
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    
    if(scrollValue < 637){
        navbar.classList.remove('bgColor');
    } 
    else if (scrollValue >= 3800) {
        navbar.classList.remove('bgColor');
    }
    else {
        navbar.classList.add('bgColor');
    }
}

window.addEventListener('scroll', changeBg);



const progressBar = document.getElementsByClassName('progress-bar')[0]

setTimeout(function() {
    console.log(
        setInterval (() => {
            const computedStyle = getComputedStyle(progressBar)
            const width = parseFloat(computedStyle.getPropertyValue('--width')) || 100
        
            progressBar.style.setProperty('--width', width + 10)
        }, 10)
    )
}, 1000)






const navigation = document.getElementById('navigation');
const menu_itens_left = document.getElementById('itens-menu-left')
const menu_itens_right = document.getElementById('itens-menu-right')
const menu_itens = document.getElementById('itens-menu')


function display_block() {
    menu_itens_left.style.transform = 'translateX(-100%)'
    menu_itens_right.style.transform = 'translateX(100%)'
    setTimeout(() => {menu_itens.style.zIndex = '-10'}, 300);
}

function display_none(){
    menu_itens_left.style.transform = 'translateX(0)'
    menu_itens_right.style.transform = 'translateX(0)'
    menu_itens.style.zIndex = '500'
}