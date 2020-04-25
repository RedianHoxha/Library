<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(76, 139, 175);
  color: rgb(255, 255, 255);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
 
}
</style>
</head>
<body style="background-color:rgb(230, 200, 176);">
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/l.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<div class="imgcontainer">
						<img src="data:image/png;base64,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" alt="Avatar" class="avatar">
					  </div>
					<span class ="login100-form-title p-b-53">
						Mund te logoheni si me poshte:
					</span>

					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email-i i perdoruesit.
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Emaili juaj:">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							<a href="password.html" class="txt2 bo1 m-l-5">E keni harruar? </a>	
							
						</a>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Passwordi gjithashtu eshte i detyrueshem.">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Logohu !
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Nuk jeni nje anetar?
						</span>

						<a href="#" class="txt2 bo1">
                <a href="rregjistrohu.html" class="txt2 bo1">Rregjistrohu tani </a>
				
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
						</form>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	

</body>
</html>