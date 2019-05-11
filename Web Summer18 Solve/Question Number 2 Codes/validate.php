<?php



session_start();


    $email = "";
    $pass = "";
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }

    if (!empty($email) && !empty($pass)) {
        
        try {
            $con = new PDO('mysql:host=localhost;dbname=number-2', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = "select * from user_infp where email='$email' && pass='$pass'";
            $pdostmt = $con->query($stmt);
			 $info=$pdostmt->fetchAll(PDO::FETCH_NUM);

            if ($pdostmt->rowCount() == 1) {
		   
                
                $_SESSION['email'] = $email;
			    $_SESSION['id'] = $info[0];
			
				
			
                echo "<script>window.location.assign('home.php');</script>";

            } else {
                echo "<script>window.location.assign('index.php?status=invalid');</script>";
            }
        } catch (PDOException $ex) {
            echo "<script>window.location.assign('index.php?status=dberror');</script>";
        }
    } else {
        echo "<script>window.location.assign('index.php?status=invalid')</script>";
    }

?>

