var categoryMenu = document.querySelector('.category_nav');
var dropMenu = document.querySelector('.drop_menu');
var drop = false;
categoryMenu.addEventListener("click", () => {
    drop = !drop;
    console.log("QUAN")
    if(drop == false){
        dropMenu.style.display = "none";
    }else if(drop == true){
        dropMenu.style.display = "block";
    }
})