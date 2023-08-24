<?php  
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    $fname = ($conn, $_POST['fname']);
    $lname = ($conn, $_POST['lname']);
    $email = ($conn, $_POST['email']);
    $password = ($conn, $_POST['password']);
    $address = ($conn, $_POST['address']);
    $address2 = ($conn, $_POST['address2']);
    $district = ($conn, $_POST['district']);
    $region = ($conn, $_POST['region']);
    $zip = ($conn, $_POST['zip']);
    $learn = ($conn, $_POST['learn']);
    $ran_id = rand(time(), 100000000);
    $encrypt_pass = md5($password);
   
    
    //CONECTION CODE
    $conn = new mysqli('localhost', 'root', '','mrel');
    IF($conn){
        //echo "connection successfull";
        $sql ="INSERT INTO users (userID, first_name, last_name, email, password, address_1, address_2, district, region, zip, learn)
        VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$address}', '{$address2}', '{$district}', '{$region}', '{$zip}', '{$learn}'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "data entered successfully";
        }else{
            die(mysqli_error($conn));
        }
    }else{
        die(mysqli_error($conn));
    }
    }
?>
