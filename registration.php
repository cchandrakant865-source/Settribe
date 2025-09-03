<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
        <div class="title">Registration</div>
        <form method="post" action="insert_db.php">
            <div class="user-details">
                <div class="input-box">
                    <span-details>ID</span-details>
                    <input type="id" name="id" placeholder="Enter Your Id" required>
                </div>
                <div class="input-box">
                    <span-details>Full_Name</span-details>
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="input-box">
                    <span-details>User_Name</span-details>
                    <input type="text" name="user_name" placeholder="Enter Your User_Name" required>
                </div>
                <div class="input-box">
                    <span-details>Email</span-details>
                    <input type="text" name="email" placeholder="Enter Your Mail" required>
                </div>
                <div class="input-box">
                    <span-details>Contact</span-details>
                    <input type="text" name="contact" placeholder="Enter Your Contact_No " required>
                </div>
                <div class="input-box">
                    <span-details>Password</span-details>
                    <input type="text" name="password" placeholder="Enter Your Password " required>
                </div>
                <div class="input-box">
                    <span-details>Confirm Password</span-details>
                    <input type="text" name="cpassword" placeholder="Confirm in Your Password " required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gendar" id="dot-1">
                <input type="radio" name="gendar" id="dot-2">
                <input type="radio" name="gendar" id="dot-3">
                <span class="gendar-title">Gendar</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gendar">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gendar">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gendar">Perfer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit"  value="Register">
            </div>
            <button><a href="view.php" >View</a></button>
        </form>
    </div>
</body>
</html>