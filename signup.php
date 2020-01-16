<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BitcoinForum - Board overview</title>

    <style type="text/css">
        .forum-col {
          min-width: 16em;
        }
        .last-post-col {
          min-width: 12em;
        }

    </style>
        <nav class="navbar navbar-dark bg-dark">
        <a class="header-logo" href="index.php">
            <img src="images/Bitcoin_logo.png" alt="logo">
        </a>
        <h1><a href="0" class="navbar-brand"></a></h1>
    </nav>

  </head>


      

<body>
<main>
    
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Füllen Sie alle Felder aus</p>';
                    }
                    else if ($_GET["error"] == "invaliduidmail") {
                        echo '<p class="signuperror">Ungültiger Benutzername und Email</p>';
                    }
                    else if ($_GET["error"] == "invaliduid") {
                        echo '<p class="signuperror">Ungültiger Benutzername</p>';
                    }
                    else if ($_GET["error"] == "invalidmail") {
                        echo '<p class="signuperror">Ungültige Email</p>';
                    }
                    else if ($_GET["error"] == "passwordcheck") {
                        echo '<p class="signuperror">Ihre Passwörter stimmt nicht überein</p>';
                    }
                    else if ($_GET["error"] == "usertaken") {
                        echo '<p class="signuperror">Benutzername ist bereits vergeben</p>';
                    }
                }
                ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>    
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>