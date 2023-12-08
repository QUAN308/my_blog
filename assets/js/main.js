var backGround = document.querySelector('#background_full');
var avatar_click = document.querySelector('.avatar');
var show = document.querySelector('#show_detail_avatar');
var getPostItem = document.querySelectorAll('.post_item');
var length = getPostItem.length;
for(let i=1;i<=length;i++){
    if(i%2==0){
        console.log("Quan");
    }else{
        getPostItem[i].style.paddingLeft = "0px";
    }
}
if(avatar_click){
    avatar_click.addEventListener("click", () => {
        show.style.display = "block";
        backGround.style.display = "block";
    })
    backGround.addEventListener("click", () => {
        show.style.display = "none";
        backGround.style.display = "none";
    })
    
}
