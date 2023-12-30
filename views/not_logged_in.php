
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
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo '<span class="error-msg">'.$error.'</span>';
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo '<span class="error-msg">'.$message.'</span>';
        }
    }
}
?>


<div class="form-container">
<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <h3>login now</h3>

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" class="form-btn"/>

    <p>don't have an account? <a href="register.php">Register new account</a></p>

</form>



</div>