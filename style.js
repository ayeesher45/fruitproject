













let bars = document.querySelector(".bar");
let ul = document.querySelector("#ul-mobile");
let aysha = true;
bars.addEventListener("click",()=>{
if(!!aysha){
    ul.style.height="145px";
    aysha = false;
}else{
    ul.style.height="0px";
    aysha = true;
}
});