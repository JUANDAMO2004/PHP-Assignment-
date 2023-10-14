<?php include_once 'database.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assigment 1 | Data Section </title>
        <meta name="description" content="This will be the file called add.php where we are going to add the confirmation of the LOG IN">
        <!-- External CSS -->
        <link rel="stylesheet" href="./css/view.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
        <!--Google Font 1-->
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Pacifico&display=swap" rel="stylesheet">
        <!--Google Font 2-->
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Outfit:wght@300&display=swap" rel="stylesheet">
        <!--Google Font 3-->
        <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@500&display=swap" rel="stylesheet">
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

                <div class="container">
        <div class="row">
                <table class="table">
            <?php
                
                $query = 'SELECT * FROM players_login';
                $result = $database->getData($query);
            ?>
            <!-- add our table headings -->

            <h1> Players Registration </h1>
            <tr>
                <th>Name</th>
                <th>Last Name </th>
                <th> Email</th>
                <th> Password </th>
            </tr>
            <!-- now run our loop to display our query -->
            <?php
                foreach($result as $key => $res){
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['lastname']."</td>";
                echo "<td>".$res['email']."</td>";
                echo"<td>".$res['password']."</td>";
                echo "</tr>";
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>
