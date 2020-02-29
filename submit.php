<?php
//**********Ranjan Patel 8622791 ********************************************/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('mysqli_connect.php');
   

    $fname = $lname = $payment = '';
    $fname = strip_tags($_POST['fname']); //using strip_tags to remove any kind of tags in input field
    $lname = strip_tags($_POST['lname']);
    $payment = $_POST['payment'];
    $errfname = $errlname = '';
    if(empty($fname)){ // using empty function for all fields to check input box is empty or it has value
        $errfname = "Please enter Firstname"; // if input box has no value will display this message
    }
    else{
        
        if(preg_match('^[A-Za-z]^',$fname)){ // checking password pattern that says password should be longer than 6 characters and should have special characters
            $fnameF = $fname;
        }
        else
            $errfname = 'characters needed';// if not message wll display
        }
    
   
    if(empty($lname)){ // using empty function for all fields to check input box is empty or it has value
        $errlname = "Please enter Lastname"; // if input box has no value will display this message
    }
    else{
        if(preg_match('^[A-Za-z]^',$lname)){ // checking password pattern that says password should be longer than 6 characters and should have special characters
            $lnameF = $lname;
        }
        else{
            $errlname = 'Character needed';// if not message wll display
        }
    }

    if(isset($fnameF) && isset($lnameF) ){ // if everythings are checked will dispaly success message
        $randomNumber = rand(1,99); // random number for id as i haven't set it auto-increament
        $_SESSION['userid']=$randomNumber; // store userid in session
        
   
   
       $sql = "INSERT INTO `users` (`UID`, `Fname`, `Lname`, `MethodOfPayment`) VALUES ('$randomNumber', '$fnameF', '$lnameF', '$payment');";
            // after passing all validation data will insert in database 
        if ($dbc->query($sql) === TRUE) {
           header('location:orderconfirm.php'); // if data successfully inserted then page will redirect to orderconfirm page
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // will show error insert query has any issue
        }
       
    }




}



?>