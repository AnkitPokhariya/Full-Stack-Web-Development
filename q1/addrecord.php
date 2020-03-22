<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['name']." You are Welcome.".'<br>';
 $enrollment = $_POST['enrollment'];
 $username = $_POST['name'];
 $age = $_POST['age'];
 $course = $_POST['course'];
 $branch = $_POST['branch'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `records` (enrollment,name, age, course, branch, contact, email) 
    VALUES ('$enrollment','$name', '$age', '$course','$branch','$contact', '$email')";
    mysqli_query($conn, $sql);
}
else{
    echo "Welcome Guest";
}
?>