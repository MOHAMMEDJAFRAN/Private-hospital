<?php
include "dbcon.php";

if (isset($_POST['uname']) && isset($_POST["password"])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST["uname"]);
    $pass = validate($_POST["password"]);

    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {  
        header("Location: login.php?error=Password is required");
        exit();
    } else {
    
        $sql = "SELECT * FROM authontication WHERE user_name ='$uname' AND password='$pass'";

        $result = mysqli_query($connection, $sql);  
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name']===$uname && $row['password']===$pass){
                $SESSION['user_name']=$row['user_name'];
                $SESSION['name']=$row['name'];
                $SESSION['id']=$row['id'];
                header("Location:display.php");
                exit();
            }else{
                header("Location: login.php?error=Incorrect User name or password");
                exit();

            } 
              
         
            header("Location: login.php?error=Incorrect User name or password");
            exit();
        } else {
            header("Location: login.php?error=Incorrect User name or password");
            exit();
            
        }
    }

} else {
    header("Location: login.php");
    exit();
}
?>
