<?php
    $connection = mysqli_connect('localhost','root','','regist_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $course = $_POST['course'];
        $number = $_POST['number'];

        $request = " insert into regist_form(name, email, phone, address, course, number) values('$name','$email','$phone','$address','$course','$number')";

        mysqli_query($connection, $request);

        header('location:regist.php');
    } else {
        echo 'something went wrong try again';
    };
?>