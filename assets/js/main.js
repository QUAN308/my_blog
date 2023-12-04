var categoryMenu = document.querySelector('.category_nav');
var dropMenu = document.querySelector('.drop_menu');
var preLogout = document.querySelector('.login_suces');
var btnLogout = document.querySelector('#btn_logout');
var drop = false;
var drop_logout = false;
console.log(preLogout);
preLogout.addEventListener("click", () => {
    drop_logout = !drop_logout;
    if(drop_logout == false){
        btnLogout.style.display = "none";
    }else if(drop_logout == true){
        btnLogout.style.display = "block";
    }
})
categoryMenu.addEventListener("click", () => {
    drop = !drop;
    if(drop == false){
        dropMenu.style.display = "none";
    }else if(drop == true){
        dropMenu.style.display = "block";
    }
})

