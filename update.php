<?php include 'connect.php';
$id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data = mysqli_query($con,$select);
$row =mysqli_fetch_array($data);
?>

<style>
    .container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.container .title::before{
    content: ;
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{
    width: calc(100% / 2 - 20px);
    margin-bottom: 15px;
    
}
 .user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
 }
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    /* font-size: 16px; */
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9b59b6;
}
form .gender-details .gendar-title{
    font-size: 20px;
    font-weight: 500;
}
form .gender-details .category{
    width: 80%;
    display: flex;
    margin: 14px 0;
    justify-content: space-between;
}
.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 5px solid transparent;
    transition: all 0.3s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
    background-color: #d9d9d9;
    background: #9b59b6;
}
form input[type="radio"]{
    display: none;
}
form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    width: 100%;
    height: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    letter-spacing: 1px;
    border-radius: 5px;
    font-weight: 500    ;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
form .button input:hover{
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}
button{
    /* width: 100%;
    height: 100%; */
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    letter-spacing: 1px;
    border-radius: 5px;
    font-weight: 500    ;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);

}
</style>
<body style="background: linear-gradient(-135deg, #71b7e6, #9b59b6) ; display: flex; align-items:  center; justify-content: center;"  >
    <div class="container">
        <div class="title">Registration</div>
        <form method="POST" action="insert_db.php">
            <div class="user-details">
                <div class="input-box">
                    <span-details>full_name</span-details>
                    <input type="text" name="full_name" placeholder="Enter Your Name" value="<?php echo $row['full_name'] ?>" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="input-box">
                    <span-details>user_name</span-details>
                    <input type="text" name="user_name" placeholder="Enter Your User_Name" value="<?php echo $row['user_name'] ?>" required>
                </div>
                <div class="input-box">
                    <span-details>email</span-details>
                    <input type="text" name="email" placeholder="Enter Your Mail" value="<?php echo $row['email'] ?>" required>
                </div>
                <div class="input-box">
                    <span-details>contact</span-details>
                    <input type="text" name="contact" placeholder="Enter Your Contact_No " value="<?php echo $row['contact'] ?>" required>
                </div>
                <div class="input-box">
                    <span-details>password</span-details>
                    <input type="text" name="password" placeholder="Enter Your Password" value="<?php echo $row['password'] ?>" required>
                </div>
                <div class="input-box">
                    <span-details>cpassword</span-details>
                    <input type="text" name="cpassword" placeholder="Confirm in Your Password" value="<?php echo $row['cpassword'] ?>" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" value="male" name="gendar" id="dot-1" >
                <input type="radio" value="female" name="gendar" id="dot-2">
                <input type="radio" value="Perfer not to say" name="gendar" id="dot-3">
                <span class="gendar-title">gendar</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gendar" value="Male">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gendar" value="Female">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gendar" value="Perfer not to say">Perfer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <!-- <input type="submit" name="update_btn"   value="update"> -->
                <button type="submit" name="update" value="update">update</button>
            </div>
            <button><a href="view.php">Back</a></button>
        </form>
    </div>
    <?php

if(isset($_POST['update_btn'])){

    $id=$_POST['id'];
   $full_name   = $_POST['full_name'];
    $user_name  = $_POST['user_name'];
    $email      = $_POST['email'];
    $contact    = $_POST['contact'];
    $password   = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $gendar     = $_POST['gendar'];
    
   

  
// echo "insert into `student`(full_Name,user_name,email,password, cpassword,gendar) values('$full_name','$user_name','$email','$password','$cpassword','$gendar')";

 $update="UPDATE  student SET full_name='$full_name',user_name='$user_name',email='$email',contact='$contact', password='$password',cpassword='$cpassword',gendar='$gendar' WHERE id='$id'";
 $data=mysqli_query($con,$update);
 if($data){
    ?>
    <<script>
       echo alert("Successfully Update");
    </script>
    <?php
    
 }
 else{
    ?>
    <<script>
       echo alert("Please try again");
    </script>
    <?php
 }

 
}

?>
</body>