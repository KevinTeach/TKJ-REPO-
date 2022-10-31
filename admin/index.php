<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|System</title>
    <link rel="stylesheet" href="../css/ads.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="assetb">
<div class="wrapper">
        <div class="logo">
            <img src="../asset/Logo TKJ.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login&nbsp;Administrator
            <?php if (isset($not_found)) : ?> 
                Password/User&nbsp;Salah
            <?php endif; ?>
        </div>
      <hr>
        <form action="../login.php" method="post">            
            <div class="form-group">
                    <label for="usernames">Username</label>
                    <input type="text" class="form-control"name="usernames" placeholder="Masukkan Username">
            </div>
            <div class="form-group"> 
                    <label for="passwords">Password</label>
                    <input type="password" class="form-control" name="passwords" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-success" name="logins">Login</button>
        </form>
    </div>
</body>
</html>