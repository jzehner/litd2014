
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ILF LITD 2014</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/starter-template.css" rel="stylesheet">
  </head>

  <body>
    <?php
      
      if (isset($_POST['booktitle']) && isset($_POST['bookauthor'])) {
        include_once("books_controller.php");
        $bookCon = new Books();
        $bookCon->saveBook($_POST['booktitle'],$_POST['bookauthor'],$_POST['bookprice'],$_POST['bookisbn']);
        $bookAdded = true;
      }
    ?>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">ILF LITD 2014</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li class="active"><a href="addbook.php">Add Book</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        
          <?php
            if(isset($bookAdded)){
              echo "<div class='well'>";
              echo "Book saved to database";
              echo "</div>";
            }
          ?>
          
      
        <form name="addbook" method="POST" action="" class="well">
          <div><label>Add a book</label></div>
          <div><input type="text" name="booktitle" id="booktitle" value="" class="span3" placeholder="Book Title" required/></div>
          <div><input type="text" name="bookauthor" id="bookauthor" value="" class="span3" placeholder="Book Author" required/></div>
          <div><input type="text" name="bookprice" id="bookprice" value="" class="span3" placeholder="Book Price"/></div>
          <div><input type="text" name="bookisbn" id="bookisbn" value="" 
            class="span3" placeholder="ISBN"/></div>

          <div><input type="submit"></div>
          
        </form> 

      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
