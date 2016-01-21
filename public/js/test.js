$(document).ready(function() {
        $('#button2').hide();
        var $question = $('#question_name');
        var $answer1 = $('#answer1');
        var $answer2 = $('#answer2');
        var $answer3 = $('#answer3');
        var $answer4 = $('#answer4');
        var $answer = $('#answer');
        var $limit = 0;
        var $ne;        
     function reload_cart(){
         $.ajax({
                type: 'GET',
                url: '/quiz/test/qqpostget',
                success: function(data){
                    var obj = JSON.parse(data);
                       $question.html( obj[0].question_name ); 
                        $answer1.html( obj[0].answer1); 
                        $answer2.html( obj[0].answer2); 
                        $answer3.html( obj[0].answer3); 
                        $answer4.html( obj[0].answer4);
                        $ne=obj[0].id;
                        
                }
                
            });
     }
    
    
    function send_cart(){
         var formData = {"answer":$('input[name=answer]:checked', '#myform').val(),"qid":$ne};
        $.ajax({
            type: "POST",
            url: '/quiz/test/qqpostget' ,
            data: formData,
            success: function(result){
                   // alert(result);
                }
         }); 
        
    }
    
    
    reload_cart();
    
    $('#button1').click(function() {    
         if($limit<9) 
         {   $limit=$limit+1;
             if ($("input[name='answer']:checked").length > 0){
            send_cart();
            $('#button1').hide();
            $('#button2').show();
            $('#result').html("Answer Submitted Successfully");
            $( "#button2" ).trigger( "click" );
           }
        else{
            alert("select at one input ");
        }
        
    }else 
        alert("test over");
            
    });   
     $('#button2').click(function() {    
         $(document).ajaxStop(function() {  
         $('input[name=answer]:checked', '#myform').prop('checked', false);
            $('#button1').show();
            $('#button2').hide();
            $('#result').html("");
            reload_cart();
             $(this).unbind('ajaxStop');
              });
    });   
});        
