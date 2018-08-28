$(document).ready(()=>{
	  $(function(){
	  	var logog;
        var field = new Array("login", "password","password_v", "email");//поля обязательные 
         function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-0-9A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u);
        return pattern.test(emailAddress);
    }   
    	function isGoodlogin(logon) {
    		logon.trim();
    		var logincheck = new RegExp(/^([a-zA-Z0-9 ]+)$/);
    		return logincheck.test(logon);
    	}
    	
        $("form").submit(function() {// обрабатываем отправку формы    
            var error=0;
            var email = $("#email").val();
            var loginABC = $("#login").val();
            var loginlength = $("#login").val(); // индекс ошибки
            $("form").find(":input").each(function() {// проверяем каждое поле в форме
                for(var i=0;i<field.length;i++){
                  // если поле присутствует в списке обязательных
                    if($(this).attr("name")==field[i]){ //проверяем поле формы на пустоту
                                             
							if(!isValidEmailAddress(email)){
        						$('#email').css('border', 'red 2px solid');	
        							error=2;                       
                        		}
                        	if($('#pass1').val()!=$('#pass2').val()){
                        		$('#pass2').css('border', 'red 2px solid');
                        			error = 5;
                        	}		
                            if(($('#pass1').val().length>30)||($('#pass1').val().length<7)){
                            	$('#pass1').css('border', 'red 2px solid');
                            		error = 6;
                            }
                        	if(((loginlength.length>15)||(loginlength.length<3))&&($("#login").val())){
                            	$('#login').css('border', 'red 2px solid');	
                            		error = 4;
                            }
                        	if((!isGoodlogin(loginABC))&&($("#login").val())){ //!!!!!!!! СДЕЛАТЬ СО SWITCH1!!!!!!
                            	$('#login').css('border', 'red 2px solid');	
                            		error=3;
                             
                            }
							if(!$(this).val()){// если в поле пустое
                            $(this).css('border', 'red 2px solid');// устанавливаем рамку красного цвета
                            error=1;// определяем индекс ошибки
                            }      
                        	
                        else{
                            $(this).css('border', '#27ae60 2px solid');// устанавливаем рамку обычного цвета
                        }
                        
                    }               
                }
           });
           
            if(error==0){ // если ошибок нет то отправляем данные
                return true;
            }
            else{
            if(error==2) var err_text = "Введен некорректный e-mail!";
            if(error==5)  err_text="Пароли не совпадают";
            if(error==6)  err_text="В пароле должно быть от 7 до 30 символов";
            if(error==4)  err_text="В логине должно быть от 3 до 15 символов";
			if(error==3)  err_text="В логине могут быть только латинские символы и цифры";
			if(error==1)  err_text="Не все обязательные поля заполнены!";
            $("#messenger").html(err_text); 
            $("#messenger").fadeIn("slow"); 
            return false; //если в форме встретились ошибки , не  позволяем отослать данные на сервер.
            }
            
            
                
        })
    });


});