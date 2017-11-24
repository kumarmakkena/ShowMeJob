<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 5%;
    border: double;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: left;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: none;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Welcome to Login Page</h2>

<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="login_img.gif" alt="Login_Img" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label> <br>
    <input type="text" placeholder="Enter Username" name="Username" required> <br>

    <label><b>Password</b></label> <br>
    <input type="password" placeholder="Enter Password" name="Password" required> <br>
  </div>
  <div class="container">
    <span class="psw">Forgot <a href="#">password?</a></span>
	<input type="checkbox" checked="checked"> Remember me
  </div>
 <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
	<button type="submit">Login</button>
  </div>
</form>

</body>
</html>
