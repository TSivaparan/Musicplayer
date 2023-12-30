<style>

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input {
   width: 100%;
   padding:15px 10px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
   
}

.form-container form label {
   width: 100%;
   padding:15px 10px;
   font-size: 17px;
   margin:8px 0;
   
}



.form-container form .form-btn{
   background: #8e44ad;
   color:white;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #2c3e50;;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:#8e44ad;
}

.error-msg {
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}


   </style>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo '<span class="error-msg">'.$error.'</span>';
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo '<span class="error-msg">'.$message.'</span>';
        }
    }
}
?>

<div class="form-container">
<!-- register form -->
<form method="post" action="register.php" name="registerform">

    <h3>Register now</h3>

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username </label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="only letters and numbers, 2 to 64 characters"/>

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Password</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" required placeholder="min. 6 characters" />

    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit"  name="register" value="Register" class="form-btn"/>

    <p><a href="index.php">Back to Login Page</a></p>
</form>

</div>

<!-- backlink -->

