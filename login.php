<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>BitcoinForum - Board overview</title>
  </head>
  <header>
    <nav>
        <a class="logo" href="login.php">
            <img class="logo"src="images/Bitcoin_logo.png" alt="logo">
        </a>    
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="#">Topics</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Latest Posts</a></li>
        </ul>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            }
            else {
                echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
            }
        ?>
        </nav>
</header>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<p class="login-status">You are logged in!</p>';
            }
            else {
                echo '<p class="login-status">You are logged out!</p>';
            }
            ?>
        </section>
    </div>    
</main>

<body>

</body>
</html>