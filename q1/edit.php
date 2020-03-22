<?php
include('config.php');
?>
<?php $id=$_GET['id'];
?>

<?php
    $sql = "SELECT * FROM `records` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $enrolment = $data['enrollment'];
    $name = $data['name'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
    $enrolment = $_POST['enrollment'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `details` SET enrollment='$enrolment',name='$name', age='$age',course='$course',branch='$branch', contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit1.php?id=<?php echo $id ?>" method="post">
      Enrolment: <input type="text" name="enrollment" value="<?php echo $enrolment; ?>"placeholder="Enter enrollment"><br>
      Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Age"><br>
      course: <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Course"><br>
      branch: <input type="text" name="branch" value="<?php echo $branch; ?>" placeholder="Branch"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Contact"><br>
      Email: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="abc@xyz.com"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>