<?php
include 'data-conection.php';



// Get method from POST request
$method = isset($_POST['method']) ? $_POST['method'] : '';

if ($method === "ourUser") {

    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $sql = mysqli_query($con, "SELECT * FROM user WHERE userid='$user'AND password='$password'");
    $row = mysqli_fetch_assoc($sql);
    if($row){
        echo "Login";
    }else{
        echo "No login";
    }
 
} else {
    echo "Invalid method";
}
?>
