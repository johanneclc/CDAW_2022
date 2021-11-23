"use strict";

function modify(e)
{
    alert(e.type +" on modify for "+ e.currentTarget.parentNode.id+" !");
}

function deleter(e)
{
    alert(e.type +" on remove for "+ e.currentTarget.parentNode.id+" !");
}

function newComment(id){
    return "<div id='user"+id+"'><h4>Yumi Sawamura</h4><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <button class=\"modify\" onclick=\"editComment('user"+id+"')\">Modify Comment</button><button class=\"remove\" onclick=\"removeComment('user"+id+"')\">Remove Comment</button></div>"

}

function removeComment(id){
    document.getElementById(id).remove(); 
}

function editComment(id){
    let comment = document.getElementById(id);
    let p = comment.getElementsByTagName('p');
    document.getElementById('id_comm').innerHTML = id; 
    document.getElementById('editComm').innerHTML  = p[0].innerHTML;
}

function updateComment(){
    if(document.getElementById('editComm').innerText==""){
        alert("Commentaire non valide"); 
    }
    else{
        let comment = document.getElementById(document.getElementById('id_comm').innerHTML);
        let p = comment.getElementsByTagName('p');
        p.innerHTML = document.getElementById('editComm').innerHTML; 
        document.getElementById('editComm').innerHTML = "";
    }
}

function addCommentNul(){
    let users = document.getElementById('users');
    users.innerHTML += "<div id='user3'><h4>Yumi Sawamura</h4><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <button class=\"modify\" onclick=\"editComment('user3')\">Modify Comment</button><button class=\"remove\" onclick=\"removeComment('user3')\">Remove Comment</button></div>"
}

function addComment(){
    let users = document.getElementById('users');
    users.innerHTML += newComment(users.lastChild.nodeType+1);
}

document.getElementById("addNew").addEventListener("click",addComment);

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));

document.forms[0].addEventListener("submit", updateComment);