<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h2>questo è un sito in htm e php </h2>

    <ul>

    <?php  

      $arr = ["mela" ,"kiwi", "pera"];

      for ($i=0; $i < count($arr); $i++) 
        { 
          echo '<li>'. $arr[$i] .'</li>';
        }

    ?>

    </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js.map" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>