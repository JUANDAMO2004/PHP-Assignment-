<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assigment 1 | Data Section </title>
        <meta name="description" content="This will be the file called add.php where we are going to add the data from the LOG IN">
        <!-- External CSS -->
        <link rel="stylesheet" href="./css/add.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
        <!--Google Font 1-->
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Outfit:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@500&display=swap" rel="stylesheet">
  </head>
    
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
  <body>
    <main>
        <?php
            include_once('validate.php');
            include_once('database.php');


            $valid = new validate();

            if(!empty($_POST['Submit'])){

                $name = $_POST['name']; //So, What I'm doing here is send the data to a the server using the method POST and this information it's been stored in the variable $name.
                $lastname = $_POST['lastname']; // It's important to know that I'm targeting is the attribute |name| from the input tag with the value of lastname.
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                //Here, I start to work on linking the validation section, I've already called the file above.
            $msg = $valid->checkEmpty($_POST, array('name', 'lastname','email', 'password'));
            $checkName = $valid->validName($_POST['name']);
            $checkLastname = $valid->validLastname($_POST['lastname']);
            $checkEmail = $valid->validEmail($_POST['email']);
            $checkPassword = $valid->validPassword($_POST['password']);

            if($msg != []){
                echo $msg;
              
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
              }elseif(!$checkName){
                echo '<p>This is not a valid input for this field, please try again.</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
              }elseif(!$checkLastname){
                echo '<p>This is not a valid input for this field, please try again.</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
              }elseif(!$checkEmail ){
                echo '<p>This is not a valid input for this field, please try again.<p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
              } elseif(!$checkPassword){
                echo '<p>This is not a valid input for this field, please try again.<p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
              } else{
                
                $result = $database->execute("INSERT INTO players_login(name,lastname,email, password) VALUES('$name',' $lastname','$email','$password')");
                if($result){
                  echo "<p> Congratulations, your information has been surely saved in our system.<br> Please, click on view to see your data</p>";
                  echo "<a href='view.php'>View Result</a>";
                }
             }
            }
        ?>
    </main>
  </body>
</html>