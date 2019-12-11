<?php  

include 'config.php';

date_default_timezone_set('Asia/Dubai');
                      
                       $username = null;
                       $password = null;
                       
                       session_start();
                       if(isset($_POST['log'])) {
                        $username = $_POST['user'];
                        $_SESSION['user'] = $username;
                        $password = $_POST['pass'];

                       }
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $query = "select * from login where username = '$username'";  
        $result = mysqli_query($connection, $query);
        $pass = '';

        while($row = mysqli_fetch_assoc($result)) {
            $pass = $row['password']; 
        }
        $passCheck = password_verify($password,$pass);
        if($passCheck == 1)
        {  
            echo "<script>window.location.href='QP.php'</script>";
        } else {
             echo '<script language="javascript">';
                 echo 'alert("Login Unsuccessful")';
                 echo '</script>';
            echo "<script>window.location.href='index.php'</script>";
        }
        
        
      /*$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
             
            
            echo "<script>window.location.href='QP.php'</script>";
        }  
        else{  
                 echo '<script language="javascript">';
                 echo 'alert("Login Unsuccessful")';
                 echo '</script>';
            echo "<script>window.location.href='index.php'</script>";
        }*/    
                 
                           
                       

?>