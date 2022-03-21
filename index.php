<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">home</a></li>
      <li><a href="?f=about">about</a></li>
      <li><a href="?f=contact">contact</a></li>
      <li><a href="?f=service">service</a></li>
      <li><a href="?f=blog">blog</a></li>
      <li><a href="?f=account_support">account support</a></li>
      <li><a href="?f=product">Product</a></li>
      <li><a href="?f=admin">admin</a></li>

    </ul>
  </nav>
  <article>
  
  <?php
            if(isset($_GET['f'])){
              if(file_exists($_GET['f'].'.php')){
                print("<h1 class='title-view'>".ucwords($_GET['f'])."<h1>");
                include_once($_GET['f'].'.php');
              }else{
                print("<h1 class='title-view'> sucutity warning</h1>");
                include_once('sucurity.php'); 
              }
            
            }
            else{
                echo "<h1>Home page</h1>";
            }
        ?>
        </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

