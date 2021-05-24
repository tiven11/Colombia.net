<?php

    include("classes/connect.php");
    include("classes/signup.php");

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $signup = new Signup();
        $result=$signup->evaluate($POST);
        
        echo $result;

        
        //echo "<pre>";
        //print_r($_POST); 
        //echo "</pre>";
    }
   

?>

<html>

<head>

<title>Colombia.net / Sign up</title>


</head>

<style>

#bar{

    height: 100px;
    background-color: #405d9b; 
    color:white; 
    padding: 4px;


}

#signup_button{

background-color: green;
width: 70px;
text-align: center;
padding: 4px;
border-radius: 4px;
float: right;


}

#bar2{

    background-color: whitesmoke;
    width: 800px;
    
    margin:auto;
    margin-top:50px;
    padding: 10px;
    padding-top: 50px;
    text-align: center;
    font-weight: bold;
    

}

#text{

    height: 40px;
    width: 300px;
    border-radius: 4px;
    border: solid 1px #ccc;
    padding: 4px;
    font-size: 14px;
}

#button{

    width: 300px;
    height: 40px;
    border-radius: 4px;
    font-weight: bold;
    border: none;
    background-color: #405d9b;
    color: white;
}

</style>

<body style="font-family: tahoma; background-color: #e9ebee;">
    
    <div id="bar"> 
        <div style="font-size:40px;"> Colombia Net</div>  
        <div id="signup_button">Log in</div> 
    </div>

    <div id="bar2">
        Sign up to Colombia Net<br><br>

        <form method="post" action="">

            <input name="first_name" type="text" id="text" placeholder="First Name"><br><br>
            <input name="last_name" type="text" id="text" placeholder="Last Name"><br><br>
            
            <span style="font-weight: bolder;">Gender:</span> <br>
        
            <Select name="gender" id="text">
            
            <option>Male</option>
            <option>Female</option>
            
            </Select> <br> <br>

            <input name="email" type="text" id="text" placeholder="Email"><br><br>
            <input name="password1" type="Password" id="text" placeholder="Password"><br><br>
            <input name="password2" type="Password" id="text" placeholder=" Retry Password"><br><br>

            <input type="submit" id="button" value="Sign Up">

        </form>

    </div>

</body>

 

</html>