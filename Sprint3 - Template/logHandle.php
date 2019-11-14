<?php  
    $userName = $_POST['userName'] ? $_POST['userName'] : null;
    $passWord = $_POST['passWord'] ? $_POST['passWord'] : null;
            
    if ($userName == 'graph' && $passWord == 'pass') {
        setcookie('user', $userName);
        header('Location: index.php');
        exit;
    }
    else {
        require('logIn.php');
        $wrongInfo = "Sorry! The username or password you have entered is incorrect. Please try again.";
        echo "<script type='text/javascript'>alert('$wrongInfo');</script>";
        exit;
    }
?>