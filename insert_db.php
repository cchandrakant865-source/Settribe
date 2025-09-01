<?php
include 'connect.php';
if(isset($_POST['submit'])){

   $id= $_POST['id'];
   $full_name   = $_POST['name'];
    $user_name  = $_POST['user_name'];
    $email      = $_POST['email'];
    $contact    = $_POST['contact'];
    $password   = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $gendar     = $_POST['gendar'];
    
   

  //insert

 $sql = mysqli_query($con,"insert into `student`(full_name,user_name,email,contact,password,cpassword,gendar) values('$full_name','$user_name','$email','$contact','$password','$cpassword','$gendar')") or die($con->error);
// $data=mysqli_query($con,$sql) or die($con->error);
if($sql){
      $_SESSION['status'] = "Registerd/Inserted Successfully";
        $_SESSION['status_code'] = "success";

        header("Location: view.php");
        exit(0);

    
 }
 else{
     
      $_SESSION['status'] = "Data not Registerd/Inserted";
        $_SESSION['status_code'] = "error";

            header("Location: view.php");
            exit(0);

 }
 
}



//update
if(isset($_POST['update'])){

    $id= $_POST['id'];
   $full_name   = $_POST['full_name'];
    $user_name  = $_POST['user_name'];
    $email      = $_POST['email'];
    $contact    = $_POST['contact'];
    $password   = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $gendar     = $_POST['gendar'];
    
    
   

  


 $query= "UPDATE student SET full_name='$full_name',user_name='$user_name',email='$email',contact='$contact', password='$password',cpassword='$cpassword',gendar='$gendar' WHERE id='$id'";
 $data=mysqli_query($con,$query) or die($con->error);
 if($data){
      $_SESSION['status'] = "Data Updated Successfully";
                $_SESSION['status_code'] = "success";

        header(header: "Location: view.php");
        exit(0);

    
 }
 else{
     $_SESSION['status'] = "Data Not Updated";
                $_SESSION['status_code'] = "error";

        header("Location: view.php");
        exit(0);

 }

 
}

//delete
$id=$_GET['id'];

$query="DELETE from student WHERE id='$id'";
$data=mysqli_query($con,$query) or die($con->error);
if($data){
    $_SESSION['status'] = "Data Deleted Successfully";
        $_SESSION['status_code'] = "success";
        header("Location: view.php");
        exit(0);

    
 }
 else{
    $_SESSION['message'] = "Data Not Deleted";
                $_SESSION['message_code'] = "error";

        header("Location: view.php");
        exit(0);

 }

?>
