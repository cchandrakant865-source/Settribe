<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
     <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    display: flex;
    height: 100vh;
    padding: 10px;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
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

     </style>
</head>
<body>
    <div class="container">
      <?php  include 'footer.php' ?>
        <div class="title">Login</div>
        <form method="post" action="login_db.php">
            <div class="user-details">
                
               <div class="input-box">
                    <span-details>user_name</span-details>
                    <input type="text" name="user_name" placeholder="Enter Your User_Name" required>
                </div>
                
                <div class="input-box">
                    <span-details>password</span-details>
                    <input type="text" name="password" placeholder="Enter Your Password " required>
                </div>
              
            <div class="button">
                <input type="submit" name="login"  value="login" class="btn btn-primary">
                <br>
                <br>
                <p><a href="registration.php "class="btn btn-primary">Registration page</a></p>
            </div>
            
            
        </form>
        
    </div>
</body>
</html>