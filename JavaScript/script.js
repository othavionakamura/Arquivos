const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
    item.addEventListener('click', activeLink));


const botaoAnimar = document.getElementById("animar");
const caixa = document.querySelector(".caixa");

botaoAnimar.addEventListener("click", () => {
    caixa.style.animation = "";
    setTimeout(() => caixa.style.animation = "deslizar 1s linear", 5);
});
