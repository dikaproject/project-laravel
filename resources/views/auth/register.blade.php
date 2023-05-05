<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>

	<style>
		body{
    background-image: url("{{ asset('frontend/images/background.jpg') }}");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
	</style>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
            <a href=""><span>Have an account?</span></a>
            <header>Register</header>
        </div>

		<form method="POST" action="{{ route('register') }}">
            @csrf
		<div class="input-field">
            <input type="text" class="input" placeholder="Name" id="name" name="name">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="email" class="input" placeholder="Email" id="email" aria-describedby="emailHelp" name="email">
            <i class='bx bx-envelope'></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="password" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder=" Repeat Password" id="password_confirmation" name="password_confirmation">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <button type="submit" class="submit">Register</button>
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
		</form>
    </div>
</div>  
</body>
</html>