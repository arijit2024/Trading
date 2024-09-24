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
} else if($method === "register"){
    $numberUser = isset($_POST['numberUser']) ? $_POST['numberUser'] : '';
    $passUser = isset($_POST['passUser']) ? $_POST['passUser'] : '';

    $sql = mysqli_query($con, "INSERT INTO user (userid, password) VALUES ('$numberUser','$passUser')");
    if($sql){
        echo "Succcess";
    }else{
        echo "Not Succcess";
    }
} else if($method === "dataOne"){
    $entry = isset($_POST['entry']) ? $_POST['entry'] : '';
    $stoploss = isset($_POST['stoploss']) ? $_POST['stoploss'] : '';
    $exit = isset($_POST['exit']) ? $_POST['exit'] : '';
    $profit = isset($_POST['profit']) ? $_POST['profit'] : '';
    $loss = isset($_POST['loss']) ? $_POST['loss'] : '';

    $sql = mysqli_query($con, "INSERT INTO dataone(entry, stoploss, exits, profit, loss) VALUES ('$entry','$stoploss','$exit','$profit','$loss')");
    if($sql){
        echo "Succcess";
    }else{
        echo "Not Succcess";
    }
} 
else {
    echo "Invalid method";
}
?>
