<?php  
 /**
  * 
  */
session_start();
class Auth 
{
 	public static function handleAuth()
 	{
		$jwt = new PhpJwt();
		if (isset($_GET["url"])) {
			if ($_GET["url"] === "auth" && isset($_GET["access_token"]) && !empty($_GET["access_token"]) ) {
				$validate = $jwt->validate($_GET["access_token"]);
				if ($validate === false) {
					session_destroy();
					return 0;
				 } else {
				 	$_SESSION['jwt'] 		   = $validate;
				 	$_SESSION['access_token']  = $_GET["access_token"];
					$_SESSION['refresh_token'] = $_GET["refresh_token"];
					header("location: ".URL."home");
					return 1;
				}
			} else if (!isset($_SESSION['jwt'])) {
				return 0;
			}else {
				return 1;
			}
		} else if (!isset($_SESSION['jwt'])) {	
			session_destroy();
			return 0;
		}else{
			return 1;
		}
 	}
  
}
