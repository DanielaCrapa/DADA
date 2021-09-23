const hamburguer = document.querySelector('.menu-hamb');
const menu = document.querySelector('.menu-nav');

console.log(hamburguer)
console.log(menu)

hamburguer.addEventListener('click', () =>{
    menu.classList.toggle("spread")
})

window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != menu && e.target != hamburguer){
        
        menu.classList.toggle("spread")
    }
})