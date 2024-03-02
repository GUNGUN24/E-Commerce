<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <!---we had linked our css file----->
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='http://phenixshop.me'>PHENIX</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Clothing</a></li>
                    <li><a href='contact.htm'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="validate.php" method="post">
                    <input type='email'class='input-field'placeholder='Email Id'name='email' required >
		    <input type='password'class='input-field'placeholder='Enter Password' name='password'required>
		    <input type='checkbox'class='check-box'><span style="color: white">Remember Password</span>
		    <button type='submit'class='log-btn'>Log in</button>
		 </form>
		 <form id='register' class='input-group-register' method="post" action="registration.php">
		     <input type='text'class='input-field'placeholder='First Name' name='firstname' required>
		     <input type='text'class='input-field'placeholder='Last Name ' name='lastname' required>
		     <input type='email'class='input-field'placeholder='Email Id' name='email' required>
		     <input type='password'class='password'placeholder='Enter Password'name='password' required>
		     <input type='password'class='confirmpassword'placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box' required><span style="color: white">I agree to the terms and conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display="none";
            }
        }
    </script>
    <script>
    document.querySelector('.submit-btn').onclick = function(){
        var password = document.querySelector('.password').value,
            confirmPassword = document.querySelector('.confirmpassword').value;
        if(password != confirmPassword){
            alert("Please check your password! \n Confirm Password must be same as Enter Password.");
            return false
        }
    }
    </script>
</body>
</html>