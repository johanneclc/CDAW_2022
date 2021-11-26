"use strict";

function changeEvent(e){
    let id = ""+e.target.id;
    let idb = ( e.target.id=="b1" ? "b2" : "b1"); 
    document.getElementById(id).removeEventListener("click",changeEvent); 
    alert("bouton clic"); 
    document.getElementById(idb).addEventListener("click",changeEvent);
}

document.getElementById("b1").addEventListener("click",changeEvent);