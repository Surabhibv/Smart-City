
<?php

include 'book.php';
?>
<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $homestay=$_POST['homestay'];
    $guests=$_POST['guests'];
    $arrival=$_POST['arrival'];
    $leaving=$_POST['leaving'];

$request = " INSERT INTO book_form(name, email, phone, address, homestay , guests, arrival, leaving) VALUES
('$name','$email','$phone','$address','$homestay','$guests','$arrival','$leaving')";

$query=mysqli_query($connection, $request);

if($query){
?>
    <script>

    swal({

        title: "Thank you for Registration!!",
        text: "Data inserted Successfully.",
        icon: "success",
      });
   
    </script>
<?php
}

header('location:book.php');

}
else{

   
    echo 'smthng went wrong';
}

?>