<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Css/register.css">
    <link rel="icon" type="text/css" href="Css/image/logo.jpg">
    <style type="text/css">
        body {
            background: url("h1.jpeg");
            position: relative;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
        }

        div {
            background: lightyellow;
            height: 470px;
            width: 385px;
            margin-top: 150px;
            padding: 15px;
            border-radius: 20px;
            border: 2px solid black;
        }

        .div1 h1 {
            text-transform: uppercase;
            color: black;
        }

        .div1 p {
            font-size: 17px;
        }

        .box input[type="text"],
        .box input[type="password"] {
            text-align: center;
            border-radius: 24px;
            transition: 0.25px;
            border: 2px solid blue;
            padding-left: 15px;
            font-size: 15px;
        }

        .box input[type="text"] {
            text-align: left;
            margin-top: 20px;
            height: 30px;
            width: 260px;
        }

        .box input[type="password"] {
            text-align: left;
            margin-top: 20px;
            height: 30px;
            width: 260px;
        }

        .box input[type="submit"],
        .box input[type="reset"] {
            text-align: center;
            height: 35px;
            width: 160px;
            border-radius: 24px;
            background: lightblue;
            font-size: 20px;

        }
    </style>
</head>

<body style="background: lightcoral;">
    <center>
      <?php if($errors->any()): ?>
      {
        <span style="color:red"><h3><?php echo e($errors->first()); ?></h3></span>
      }
      <?php endif; ?>
        <div class="div1">
            <h1>Register</h1>
            <hr>
            <form class="box" action="/add" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="username" id="user" value="<?php echo e(old('username')); ?>"
                    placeholder="Username" required />
                <br>
                <input type="text" name="email" id="email" placeholder="Email" value="<?php echo e(old('email')); ?>"
                    required />
                <br>
                <input type="password" name="password" placeholder="Enter password" required />
                <br>
                <input type="password" name="password_confirmation" placeholder="Comfirm password" required />
                <br><br>
                <hr>
                <input type="submit" name="sm" /><br><br>
                <input type="reset" name="rs" />
            </form>
            <p>you have a account <a href="login">Login now</a></p>
        </div>
        
    </center>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/register.blade.php ENDPATH**/ ?>