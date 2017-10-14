$(function(){
		
			 
				$("form#formAjax").submit(function(){
				
					$.ajax({ 					
					url: "envia.php",
					type: "POST" ,
					data: {
						
						id: $('input[name=id]').val()
						email: $('input[name=email]').val()
						session: $('input[name=session]').val()
					}
					
					}).done(function(returnActionPhp){
						
						$("div.receberDados").append(returnActionPhp);
						
					});
					
					return false;																														
		
		});							
	
});