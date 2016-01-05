function editComment(event, id)
{   
    window.num = id;
    
    var form = event.target.parentNode;
    var comment_div = event.target.parentNode.parentNode;
    var comment_p = comment_div.children[1];
    var text = comment_p.innerHTML;
    
    event.target.parentNode.parentNode.children[1].outerHTML = "<textarea id='text1' style='width: 100%'>"+text+"</textarea>";
    var newbutton = document.createElement('button');
    newbutton.innerHTML = "Save";
    newbutton.type='button';
    
    newbutton.onclick = function (event, num)
    {   
        var text = document.getElementById('text1').value;
        $.get('/controller/UserController.php', {id:id, text:text});
        
        function reload()
        {
            location.reload(true);
        }
        setTimeout(reload, 2000);
    };

    
    form.removeChild(event.target.nextElementSibling);
    form.removeChild(event.target);
    form.appendChild(newbutton);
    
     
  
    
   
    
    
}

