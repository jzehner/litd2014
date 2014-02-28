
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ILF LITD 2014</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/starter-template.css" rel="stylesheet">
    <?php 
      opcache_reset(); 
      include_once("books_controller.php"); 
    ?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">ILF LITD 2014</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="books.php">Books</a></li>
            <li><a href="addbook.php">Add Book</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <div class="well">
          <?php
            $books = new Books();
            $books->getBooks();
          ?>
        </div>
      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
