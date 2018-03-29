<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up Interface</title>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <a class="view__more" href="https://mehta-anukul.tumblr.com/" target="_blank">view more</a>
<div class="panel">
  <ul class="panel__menu" id="menu">s
    <hr/>
    <li id="signIn"> <a href="#">Login</a></li>
    <li id="signUp"><a href="#">Sign up</a></li>
  </ul>
  <div class="panel__wrap">
    <div class="panel__box active" id="signInBox">
        <form action="logcus.php" method="post">
      <label>Email
        <input type="email" name="email"/>
      </label>
      <label>Password
        <input type="password" name="password"/>
      </label>
      <input type="submit" name="logbtn" />
        </form>
    </div>
    <div class="panel__box" id="signUpBox">
        <form action="regcus.php" method="post">
      <label>Email
        <input type="email" name="email"/>
      </label>
      <label>Password
        <input type="password" name="password"/>
      </label>
      <label>Confirm password
        <input type="password" name="c_password"/>
      </label>
      <input type="submit" name="signbtn"/>
        </form>
    </div>
  </div>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
