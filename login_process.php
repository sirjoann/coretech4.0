<?php include './dbconfig.php';

session_start();
$strSQL = "SELECT * FROM user_login WHERE username='$_POST[txtUsername]' and password='$_POST[txtPassword]'";

$objQuery = mysqli_query($dbconfig, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["username"];
                        $_SESSION["fullname"] = $objResult["fullname"];

			session_write_close();
                        
                        header("location:index.php");
			/*
			if($objResult["role"] == 1)
			{
				header("location:index.php");
			}
			else
			{
				header("location:forms.html");
			}
                         * 
                         */
	}
?>
