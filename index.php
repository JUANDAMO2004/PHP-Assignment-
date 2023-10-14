
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="Juan David Montana" content="Assignment 1">
	<title> Assigment 1 | LOG IN </title>
	<meta name="description" content="This assigment 1 ">
	<!-- External CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- Google Font 1-->
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@500&display=swap" rel="stylesheet">
    <!--Google Font 2-->
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Outfit:wght@300&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
</head>
    <body>
        <header>
        <nav>
                <i class="fas fa bars"> </i>
            </label>
            <label class="logo"><img src="./images/vikings.png" alt="header logo" height="100" width="100"></a> </label>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="view.php"> View </a></li>
            </ul>
        </nav>
        </header>

    <section>  
  <div class="image-box">
        <img src="../Assigment 1/images/ryu-street-fighter.gif" alt="background" height="643" width="548">
  </div>
  <main class="container">
    <!--<h1> Dear GAMER </h1>
    <h2> Dazzle your eyes with our amazing collection.</h2>-->
        <form method="post" action="add.php" class="form-horizontal col-md-6 col-md-offset-3">

            <legend> <strong> Player Information </strong></legend>
            
                <input required type="text" name="name" placeholder="First Name"> <br>
                <input required type="text" name="lastname" placeholder="Last Name"> <br>
                <input required type="email" name="email" placeholder="Email"> <br>
                <input required type="password" name="password" placeholder="Password"> <br>

                <input class="addButton" type="submit" name="Submit" value="Add">
                <input class="clearButton" type="reset" value="Clear">

        </form>
    </section>
  </main>
</body>
</html>