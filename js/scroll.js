$(document).ready(function(){
var startFrom = 5;
var inProgress = false;


    $(window).scroll(function() {
        
        if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {
        $.ajax({            
            
            url: '/view/next.php',
            type: 'POST',
            dataType: 'html',
                
            data: {"startFrom" : startFrom},
            beforeSend: function() 
            {
            inProgress = true;
            } ,
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    $("#comm").append(data);
                }
            });
            inProgress = false;
        }
        startFrom += 5;
    });
    
});