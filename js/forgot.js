$(document).ready(function(){
	$("#pchange").hide();
	$("#question").hide();
	$("#i").hide();
	$("#j").hide();
	$("#k").hide();
		
		function verify(){
		$("#i").show();
			var username = $("#username").val();
		$.post("forgot.php",{"mode":"first","username":username},function(data){
			if (data=="<p class='alert alert-warning' role='alert'>Username Not Found In Our Database</p>") {
				$("#update").html(data);
			}else{
				$("#user").hide();	
			$("#update").hide();
			$("#question").show();
			$("select").append("<option>"+data+"</option");
			
				}
		});
		
		}
		//function for sequrity question
		function check(){
		$("#j").show();
						var securitya = $("#securitya").val();
			$.post("forgot.php",{"mode":"second","securitya":securitya}, function(data){
			$("#securityya").after("<img src='img/load.gif' />");
					if (data !=='True') {
						$("#update").show();
							$("#update").html(data);
					}else{
						$("#question").hide();
						$("#pchange").show();
						$("#update").html("<p class='alert alert-info' role='alert'>Please Fill In Your New Password</p>");
						
					}
			});
			
		}

		// Function For Change Password
		function change(){
					$("#k").show();
					var fpass = $("#password").val();
						var spass = $("#passwordv").val();
					if (fpass != spass) {
						$("#update").html("<p class='alert alert-warning' role='alert'>Password Does Not Match</p>");
					}else if(fpass == spass) {
						$.post("forgot.php",{"mode":"third","pass":spass}, function(data){
								$("#update").html(data);
								$("#pchange").hide();
								
						});
					}
					
		}
	$("#username").keyup(verify);
	$("#verify").click(verify);
	$("#securitya").keyup(check);
	$("#confirm").click(check);			
	$("#passwordv").keyup(change);
	$("#change").click(change);

				


	






		
		
			
			









});