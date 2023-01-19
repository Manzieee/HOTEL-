<?php      
    include('db.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM adminn WHERE Username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //pop up alert message
            //then redirect to user home page
            echo "<script>alert('User login successful!');
            window.location.href='index.html';
            </script>"; 
        }  
        else{  
            echo "<script>alert('User login failed! Invalid username or password! Please try again!');
            window.location.href='index.html';
            </script>"; 
        }     
?>