<?php 
include 'include/models/dbh.php';
include 'include/models/test.php';
include 'include/models/model.php';
include 'include/controller/controller.php';
include 'include/controller/add_new_books.php';
include 'include/controller/add_new_author.php';
include 'include/controller/assign.php';
include 'include/route.php';
include 'routes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Library</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Library</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="add_new_books">Books</a></li>
            <li><a href="add_new_author">Authors</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
            	<div class="input-group">
            		<input type="text" class="form-control" placeholder="Search" name="search">
            		<div class="input-group-btn">
            			<button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                         </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <div class="container-fluid bg-1 text-center">
    	<h1>Books</h1>
  <form action="add-new-books" method="post">
    <label>Book:</label>
    <input  name="booktitle" placeholder="Enter book title"><br>
    <button type="submit">Add new book</button>
  </form>
    </div>
    <div class="container-fluid bg-2 text-center">
    	<h1 class="margin">Authors</h1>
    <form action="add-new-author" method="post">
      <label>Author:</label>
      <input name="name" placeholder="Name"><br>
    <button type="submit">Add Authors</button>
  </form >
  <h1>Assign</h1>
  <form action="assign" method="post">
    <label>Select Author:</label>

    <select name="author">
      <?php
      $tstobj = new test();
      $tstobj->getauthors();
      ?>
    </select><br><br>
    <label>Select Book:</label>
    <select name="book">
      <?php
      $tstobj->getbooks();
      ?>
    </select><br><br>
    <button type="submit">Assign</button>
  </form>
</div>

</body>
</html>