/*var mybtn = document.getElementsByClassName("mybtn")
var itemcount = document.getElementsById("itemcount")
let count = 0;
for (let i=0;i<mybtn.length;i++){
    var button = mybtn[i]
    button.addEventListener("click", function(event){
        count++;
        var btnclick = event.target
        itemcount.textcontent = count;
        btnclick.add()
        
        

    })
}*/

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