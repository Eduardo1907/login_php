<?php
if(!empy($_POST['name'] && !empty($_POST['email']) && !empty($_POST['password'])){}
$conect = mysqli_connect(hostname:'localhost', username:'root',password:"", database:"login_android");
$name = $_POST['name'];
$email = $_POST['email']
$pasw = password_hash($_POST('password'), algo:PASSWORD_DEFAULT);


if($conect) {
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pasw')";

    if(mysqli_query($conect, $sql)){
    echo "todo weno pa"
    }
    else
    echo "registro fallido"
}
else echo "conneccion fallida"
echo "connecion correcta"
?> 