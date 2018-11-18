<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="A page for Office Pools" />
  <meta name="viewport" content="width=device-width" />
  <meta name="keywords" content="office pool, sports pool, football pool" />
  <meta name="author" content="Carlos Neia" />
  <title>Cool Sports Pool | Welcome</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <div class="container">
      <div id="branding">
      <h1>Cool Sports <span class="highlight">Pool<span/></h1>
      </div>

      <?php
      if (isset($_SESSION['userId'])){
        echo '<ul>
          <li><p>Welcome  '.$_SESSION['userUid'].'</p></li>
          <li><form action="includes/logout.inc.php" method="post">
            <button type="submit" class="button_1" name="logout_btn">Logout</button>
          </form></li>
        </ul>';
      }
      else{
        echo '<ul>
          <li><h2>Sign in</h2></li>
          <li><form action="includes/login.inc.php" method="post">

            <input type="text"  name="mailuid" placeholder="Enter email..." />
            <input type="password" name="pwd" placeholder="Password..." />
            <button type="submit" class="button_1" name="login_btn">Login</button>

          </form></li>
          <li><a href="signup.php"><h2>Register</h2></a></li>
          </ul>';
      }
       ?>


  </div>
  </header>

  <section id="showcase">
    <div class="container">
      <h1>Run your sports pool here</h1>
      <p>Creating and customizing your pool has never been easier.<p/>
    </div>
  </section>


  <section id="menu">
    <div class="container">
    <nav>
      <ul>
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contactus.html">Contact us</a></li>
      </ul>
    </nav>
      </div>
  </section>


  <section id="boxes">
    <div class="container">
      <div class="box">
        <img src="images/championsLeagueLogo.png" />
        <h3>Champions League</h3>
      </div>
      <div class="box">
        <img src="images/premierLeagueLogo.png" />
        <h3>Premier League</h3>
      </div>
      <div class="box">
        <img src="images/fifaLogo.png" />
        <h3>World Cup</h3>
      </div>
    </div>
  </section>
  <footer>
    <p>Carlos Neia web design, Copyright &copy; 2018</p>
  </footer>
</body>

</html>
