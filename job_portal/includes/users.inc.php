<?php

include "../controller/apicontroller.php";

if(isset($_POST["registerAccount"])){ //if a button to add a new user is clicked
    if(isset($_POST["username"])){//if a username was passed, the employer wants to sign up
        //create the instance of the employer
        $newEmployer = new Employer(0, $_POST["firstname"], $_POST["lastname"], $_POST["password"], $_POST["repeatedPassword"], $_POST["companyEmail"], $_POST["companyName"], $_POST["phoneNumber"]);
        $controller = new APIController();
        $controller->registerUser($newEmployer);
    }else if(isset($_POST["firstname"])){

    }

}