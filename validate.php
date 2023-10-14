<?php
class validate { //I created a class called validate, which will be doing all the validation process.
    // It's a validation that checks if the field is empty
    public function checkEmpty($data, $fields){
        $msg = [];
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg[] = "<p>$value this field is empty</p>";
        }
      }
      //echo '<pre>'; print_r($msg);die;
      return $msg;
    }

    // It's a validation that checks if the field is a appropiate value of NAME.
    public function validName($name){
        //echo $name; die;
        if(!preg_match("/^[a-zA-Z\s]+$/",$name)){
           
            return false;
        } else {
            return true;
        }
    }

     // It's a validation that checks if the field is a appropiate value of LASTNAME.
    public function validLastname($lastName){
        if(!preg_match("/^[a-zA-Z\s]+$/",$lastName)){
            $ErrMsg = "Please, enter a valid Last name";
            return false;
        } else {
            return true;
        }
    }

     // It's a validation that checks if the field is a appropiate value of EMAIL.
     public function validEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
          return true;
          
        }
        return false;
      }

     // It's a validation that checks if the field is a appropiate value of PASSWORD.
     public function validPassword($password){
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}[\]:;<>,.?~\\-]).{8,}$/',$password)){
            return false;
        } else {
            return true;
        }
     }
}
?>