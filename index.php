<?php 
include 'config.php';

     
?>



<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="PageStyles.css">
    <title>START</title>
</head>

<body>
   
  <div class="headingtext">
  <img src="intermetal.svg" alt="LOGO" class="logo" height="60px" width="170px" />
  <h1>WELCOME</h1>
  </div>  
  <hr>
  <p class="pgtxt">LOGIN</p>
  <hr>
  
  <div class="flexbox-container">
    <div id=frm>
     <form name="f1" action = "Authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label class="looggin"> Username: </label>&nbsp;  
                <input type = "text" id ="user" name  = "user" required autocomplete="off" />  
            </p>  
            <p>  
                <label class="looggin"> Password: </label>&nbsp;&nbsp;  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" name="log" required autocomplete="off" />  
            </p>  
        </form>  
        
     </div>
   </div>
   
   
   
   <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

</body>
</html>


