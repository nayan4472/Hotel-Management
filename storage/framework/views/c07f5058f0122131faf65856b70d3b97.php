<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="Css/index.css">
  <link rel="icon" type="text/css" href="Css/image/logo.jpg">
  <style>
    body{
      background: url("image/hd.jpg");
      position: relative;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100%;  
}
div{
  background: white;
  height: 430px;
  width: 385px;
  margin-top: 200px;
  padding: 15px;
  border-radius: 20px;
  border: 2px solid black;
  opacity: 100%;
  
}
.div1 h1{
  text-transform: uppercase;
  color: black;

}
.box input[type="text"],.box input[type="password"]{
  border-radius: 25px;
  transition: 0.25px;
  border: 2px solid blue;
  padding-left: 15px;
  font-size: 17px;
}
.box input[type="text"]{
  text-align: left;
  margin-top:30px ;
  height: 35px;
  width: 260px; 
}
.box input[type="password"]
{
  text-align: left;
  height: 35px;
  width: 260px;
}
.box input[type="submit"],.box input[type="reset"]
{
  text-align: center;
  height: 35px;
  width: 260px;
  border-radius: 24px;
  background: lightblue;
  font-size: 20px;

}

.box input[type="text"]:focus,.box input[type="password"]:focus{
  border-color: yellow;
}

.login:hover {
            transform: translateY(-5px);
            background: #6c5ce7;
        }

  </style>

</head>
<body>
<center>
<div class="div1">
  <h1>Login</h1>
  <hr>
<form  action="check" class="box" method="POST">
  <?php echo csrf_field(); ?>
  <input type="text" name="email" id="email" placeholder="Enter email" required /><br><br>
  <input type="password" name="password" id="pass" placeholder="Enter password" required />
  <br><br>
  <hr><br>
  <input type="submit" name="sm" value="Login" class="login"><br><br>
  If you  don't have an account <a href="register">Register Here</a>
</form>

</div>
</center>
</body>

</html><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/login.blade.php ENDPATH**/ ?>