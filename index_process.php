<?php
/*

//define variables and set to empty values
$name_error = $email_error = "";
$name_error = $email_error = "";

//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $name_error = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
        //check if name only contain letters and whitespace
        if(preg_match("/^[a-zA-A-Z]*$/",$name)){
            $name_error = "Only letters and white sapce allowed";
        }
    }

}

*/
if(isset($_POST['btn-send'])){
     echo'working';

}
?>