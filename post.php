<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BitcoinForum</title>
    
    <style type="text/css">
        .forum-col {
          min-width: 16em;
        }
        .last-post-col {
          min-width: 12em;
        }

    </style>

    <nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="header-logo" href="index.php">
            <img src="images/Bitcoin_logo.png" alt="logo">
        </a>
        
          <a href="index.php" name="name" style="color:orange">BitcoinForum</a>
        
        <h1><a href="0" class="navbar-brand"></a></h1>
        <div class="flex">
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
            }
            else {
                echo '
                <form action="signup.php" method="post">
                <button type="submit" name="Signup">Signup</button>
                </form>
                <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
                </form>';
            }
        ?>
        </div>
        </div>
    </nav>
    <body>
    <div class="container">
    <nav class="breadcrumb">
      <span class="breadcrumb-item active"></span>
      
      <?php
            if (isset($_SESSION['userId'])) {
                echo '<p class="login-status">You are logged in!</p>';
            }
            else {
                echo '<p class="login-status">You are logged out!</p>';
            }
            ?>
    </nav>