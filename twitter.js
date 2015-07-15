function twitter_click (){
  $.ajax({
            url: 'twitter.php',
            dataType: 'json',
            cache: false,
            crossDomain: true,
            success: function(response) {
            for(var i= 0; i< response.statuses.length; i++){
                
                   $('#container').append("<p>"+response.statuses[i].user.screen_name+"</p><br><p>"+response.statuses[i].text+"</p><br>"); 
                
                console.log(response.statuses[i].id);
            console.log(response.statuses[i].user.screen_name);
            }
            console.log(response.statuses[0].text);
            console.log(response.statuses[0].user.screen_name);
            
            }
        });  
}
$(document).ready(function(){

})
