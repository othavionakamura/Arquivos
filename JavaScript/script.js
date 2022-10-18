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
    
    if(scrollValue < 730){
        navbar.classList.remove('bgColor');
    } else {
        navbar.classList.add('bgColor');
    }
}

window.addEventListener('scroll', changeBg);



const progressBar = document.getElementsByClassName('progress-bar')[0]

setTimeout(function() {
    console.log(
        setInterval (() => {
            const computedStyle = getComputedStyle(progressBar)
            const width = parseFloat(computedStyle.getPropertyValue('--width')) || 10
        
            progressBar.style.setProperty('--width', width + .2)
        }, 0)
    )
}, 1000)





const checkbox = document.getElementById('checkbox');
const navigation = document.getElementById('navigation');

function display_none() {
    navigation.style.display = 'none'
}