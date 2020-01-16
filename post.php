<?php
    session_start();
//HIER VERBIND IK MET DE DATABASE
$dbhost = "localhost";
$dbname = "loginbtcforum";
$user = "root";
$password = "";

$auteurnaam = $_POST['txtAuteur'];
$tekst = $_POST['txtTekst'];

try{
    $pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";",$user, $password);
    echo "Du bist verbonden!";
}catch(PDOException $ex) {
        echo "Disconnected from PHPmyadmin";} //CONNECTION TEST
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
    <?php
    $InsertQuery = "INSERT INTO posts (auteur, text) VALUES ('$auteurnaam', '$tekst')";
    $stm = $pdo->prepare($InsertQuery);
    if(isset($_POST['btnVerstuur'])){
        if($stm->execute()){
            echo "Wir haben es geschafft, es in die Datenbank zu stellen!";
            }else echo "Irgendwas ist schief gelaufen! Wird nicht in die Datenbank aufgenommen";
}
        
    ?>
    <div>
        <form action="post.php" method="post">
            <input type="text" name="txtAuteur">
            <input type="text" name="txtTekst">
            <input type="submit" name="btnVerstuur">
        </form>
    </div>
    
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