const menu_icon = document.getElementById('menu-icon');
const aside = document.getElementById('sidebar-container');

menu_icon.addEventListener('click', ()=>{
    if(aside.classList.contains('hide_side_bar')){
        aside.classList.remove("hide_side_bar");
        menu_icon.classList.remove("menu_icon_return");
    }else{
        aside.classList.add("hide_side_bar");
        menu_icon.classList.add('menu_icon_return');
    }
})
