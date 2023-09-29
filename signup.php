<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    
    <div class="container">

        <h1>Create an account</h1>
        <div class="signupbox">
            <div class="leftbox">
                <form action='signup_process.php' method='POST'>
                    <input type="text" id="f_name" name="firstname" placeholder="First name" required> <br> <br>

                    <input type="text" id="l_name" name="surname" placeholder="Surname" required> <br> <br>

                    <textarea name="email" id="email" placeholder="Email"></textarea> <br> <br>

                    <input type="text" id="contact" name="contact" placeholder="Contacts" required> <br> <br>


                    <input type="password" id="password" name="password" placeholder="Password"> <br> <br>

                    <input type="password" id="password" name="password" placeholder=" Confirm Password"> <br> <br> 

                    <p>Date of birth :</p>
                    <input type="date" name=""> <br> <br>
                    <input type="checkbox" id="terms" required>
                    <label for="terms"  >I agree to the terms and conditions</label><br><br>

                    <button type="submit">Sign Up</button>

                    &nbsp;

                    <button type="reset"> Clear info</button>  <br> <br>
                </form>
            </div>
            <div class="rightbox">
               <button><a href="https://accounts.google.com/v3/signin/identifier?ifkv=AYZoVhcmnMXgaXyZKVLNVScnxSJ8FfrLAtvSRMc3alfoUV5LA0HjErg0ZfwxoOEei2sJcVJYvJ4y&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1929431119%3A1695995083262874&theme=glif"><i class="fa fa-google" aria-hidden="true"></i> Sign up with google</a></button> <br> <br>
               <button><a href="https://support.apple.com/en-ke/HT204053"><i class="fa fa-apple"></i>  Sign up with apple</a></button><br> <br>
                <button><a href="https://www.facebook.com/login/"><i class="fa fa-facebook-square" ></i> Sign up with facebook</a></button>
                
            </div>
        </div>

        <div class="signin">
                <p>
                    All rights reserved |2023 <br>
                    Mwende Links Photography   &nbsp; <sup>&copy;</sup>
                </p>

        </div>
    </div>

</body>
</html>