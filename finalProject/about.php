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
  <title>Cool Sports Pool | About us</title>
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

  <section id="main">
    <div class="container">
      <article id="main-col">
        <h1 class="page-title">About us</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie, odio nec fermentum maximus, tellus dolor sollicitudin ex, in imperdiet turpis tellus vel quam. Nulla malesuada nisi ligula, facilisis commodo urna eleifend dictum. Etiam sodales, elit facilisis bibendum ornare, dui turpis lobortis enim, id rhoncus enim ipsum vitae lorem. Pellentesque vitae est sodales mi gravida dictum. Cras et scelerisque dui. Cras in lorem molestie, aliquet elit a, sagittis turpis. Pellentesque fermentum feugiat mauris, quis suscipit mauris semper non. Proin fermentum orci eget feugiat blandit. Vestibulum congue est interdum ipsum accumsan varius.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie, odio nec fermentum maximus, tellus dolor sollicitudin ex, in imperdiet turpis tellus vel quam. Nulla malesuada nisi ligula, facilisis commodo urna eleifend dictum. Etiam sodales, elit facilisis bibendum ornare, dui turpis lobortis enim, id rhoncus enim ipsum vitae lorem. Pellentesque vitae est sodales mi gravida dictum. Cras et scelerisque dui. Cras in lorem molestie, aliquet elit a, sagittis turpis. Pellentesque fermentum feugiat mauris, quis suscipit mauris semper non. Proin fermentum orci eget feugiat blandit. Vestibulum congue est interdum ipsum accumsan varius.
        </p>
      </article>
      <aside id="sidebar">
        <div class="dark">
        <h3>What We Do</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie, odio nec fermentum maximus, tellus dolor sollicitudin ex, in imperdiet turpis tellus vel quam. Nulla malesuada nisi ligula, facilisis commodo urna eleifend dictum. Etiam sodales, elit facilisis bibendum ornare, dui turpis lobortis enim, id rhoncus enim ipsum vitae lorem. Pellentesque vitae est sodales mi gravida dictum. Cras et scelerisque dui. Cras in lorem molestie, aliquet elit a, sagittis turpis. Pellentesque fermentum feugiat mauris, quis suscipit mauris semper non.
        </p>
      </div>
      </aside>
    </div>
  </section>

  <section id="menu">
    <div class="container">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="current"><a href="about.php">About</a></li>
        <li><a href="contactus.html">Contact us</a></li>
      </ul>
    </nav>
      </div>
  </section>

  <footer>
    <p>Carlos Neia web design, Copyright &copy; 2018</p>
  </footer>
</body>

</html>
