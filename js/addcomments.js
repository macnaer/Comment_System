function addComment()
{ 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "/controller/UserController.php?new_comment="+document.getElementById('commentAdd').value, false);
    xmlhttp.send(null);
   
}



