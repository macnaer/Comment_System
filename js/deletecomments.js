function deleteComment(id)
{ 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "/controller/UserController.php?del_comment="+id, false);
    xmlhttp.send(null);
   
}