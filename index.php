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
    <div class="row">
    <div class="col-12 col-xl-9">
    <h2 class="h4 text-white bg-info mb-0 p-4 rounded-top">Forum category</h2>
    <table class="table table-striped table-bordered table-responsive">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="forum-col">BitcoinForum</th>
          <th scope="col">Topics</th>
          <th scope="col">Posts</th>
          <th scope="col" class="last-post-col">Latest Posts</th>
        </tr>
      </thead>
      
    
      <tbody><?php
        $dbhost = "localhost";
        $dbname = "loginbtcforum";
        $user = "root";
        $password = "";
        try{
        $pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";",$user, $password);
        echo "Du bist verbonden!";
    }catch(PDOException $ex) {
            echo "Disconnected from PHPmyadmin";} //CONNECTION TEST
          
          
        $ExtractionQuery = "SELECT * FROM posts";
        $stm = $pdo->prepare($ExtractionQuery);
        if($stm->execute()){
            $Table = $stm->fetchALL(PDO::FETCH_OBJ);
            
    foreach($Table as $Record){
    echo  "<tr>
            <td>
              <h3><a href='#0'>
               "
                . $Record->auteur . ("<br>") . 
              "
              </a></h3>
              <p>
            "
                . $Record->text . 
            "
                </p>
            </td>
            <td>
              <div>5</div>
            </td>
            <td>
              <div>18</div>
            </td>
            <td>
              <h4 class='h6'><a href='#0'>Post name</a></h4>
              <div>05 Jan 2020, 20:18</div>
            </td>
          </tr>";
       
    }
}
        ?>
        
        
         
      </tbody>
    </table>
    <h2 class="h4 text-white bg-info mb-0 p-4 rounded-top">Forum category</h2>
    <table class="table table-striped table-bordered table-responsive">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="forum-col">BitcoinForum</th>
          <th scope="col">Topics</th>
          <th scope="col">Posts</th>
          <th scope="col" class="last-post-col">Latest Posts</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <h3><a href="#0">FORUM NAME</a></h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </td>
          <td>
            <div>5</div>
          </td>
          <td>
            <div>18</div>
          </td>
          <td>
            <h4 class="h6"><a href="#0">Post name</a></h4>
            <div>05 Jan 2020, 20:18</div>
          </td>
        </tr>
        <tr>
            <td>
              <h3><a href="#0">FORUM NAME</a></h3>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </td>
            <td>
              <div>5</div>
            </td>
            <td>
              <div>18</div>
            </td>
            <td>
              <h4 class="h6"><a href="#0">Post name</a></h4>
              <div>05 Jan 2020, 20:18</div>
            </td>
          </tr>
          <tr>
              <td>
                <h3><a href="#0">FORUM NAME</a></h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </td>
              <td>
                <div>5</div>
              </td>
              <td>
                <div>18</div>
              </td>
              <td>
                <h4 class="h6"><a href="#0">Post name</a></h4>
                <div>05 Jan 2020, 20:18</div>
              </td>
            </tr>
            <tr>
                <td>
                  <h3><a href="#0">FORUM NAME</a></h3>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </td>
                <td>
                  <div>5</div>
                </td>
                <td>
                  <div>18</div>
                </td>
                <td>
                  <h4 class="h6"><a href="#0">Post name</a></h4>
                  <div>05 Jan 2020, 20:18</div>
                </td>
              </tr>
      </tbody>
    </table>
    <h2 class="h4 text-white bg-info mb-0 p-4 rounded-top">Forum category</h2>
    <table class="table table-striped table-bordered table-responsive">
      <thead class="thead-light">
        <tr>
          <th scope="col" class="forum-col">BitcoinForum</th>
          <th scope="col">Topics</th>
          <th scope="col">Posts</th>
          <th scope="col" class="last-post-col">Latest Posts</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <h3><a href="#0">FORUM NAME</a></h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </td>
          <td>
            <div>5</div>
          </td>
          <td>
            <div>18</div>
          </td>
          <td>
            <h4 class="h6"><a href="#0">Post name</a></h4>
            <div>05 Jan 2020, 20:18</div>
          </td>
        </tr>
        <tr>
            <td>
              <h3><a href="#0">FORUM NAME</a></h3>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </td>
            <td>
              <div>5</div>
            </td>
            <td>
              <div>18</div>
            </td>
            <td>
              <h4 class="h6"><a href="#0">Post name</a></h4>
              <div>05 Jan 2020, 20:18</div>
            </td>
          </tr>
          <tr>
              <td>
                <h3><a href="#0">FORUM NAME</a></h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </td>
              <td>
                <div>5</div>
              </td>
              <td>
                <div>18</div>
              </td>
              <td>
                <h4 class="h6"><a href="#0">Post name</a></h4>
                <div>05 Jan 2020, 20:18</div>
              </td>
            </tr>
            <tr>
                <td>
                  <h3><a href="#0">FORUM NAME</a></h3>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </td>
                <td>
                  <div>5</div>
                </td>
                <td>
                  <div>18</div>
                </td>
                <td>
                  <h4 class="h6"><a href="#0">Post name</a></h4>
                  <div>05 Jan 2020, 20:18</div>
                </td>
              </tr>
      </tbody>
    </table>
          </div>
          <div class="col-12 col-xl-3">
            <div class="card">
              <div class="bard-body">
                <h2 class="h4 card-title">Forum statistics</h2>
                <dl>
                  <dt>Total forums:</dt>
                  <dd>11</dd>
          </dl>
          <dl>
          <dt>Total topics:</dt>
            <dd>784</dd>
          </dl>
          <dl>
          <dt>Total members:</dt>
            <dd>164</dd>
          </dl>
          </div>
          <div class="card-footer">
            <div>Newest member:</div>
            <div><a href="#0">Forum member name</div>
            </div>
            <aside>
              <div class="card">
                <div class="card-body">
                  <h2 class="h4 card-title">Members online</h2>
                  <ul class="list-unstyled">
                    <li><a href="#0">Forum member name</a></li>
                    <li><a href="#0">Forum member name</a></li>
                    <li><a href="#0">Forum member name</a></li>
                    <li><a href="#0">Forum member name</a></li>
                    <li><a href="#0">Forum member name</a></li>
                    <li><a href="#0">Forum member name</a></li>
          </ul>
          </aside>
          </div>
          </div>
          <footer class="small">
            <div class="container">
              <ul class="list-inline">
                <li class="list-inline-item">&copy; 2020 HFT Stuttgart,</li>
                <li class="list-inline-item"> All rights reserverd.</li>
                <li class="list-inline-item"><a href="#0"> Terms of use and privacy policy.</li>
              </ul>
          </footer>
          </div>
          </div>
          </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>