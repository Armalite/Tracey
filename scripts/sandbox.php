<?php 

# Test out functions by including them and executing here.

include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_connect.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sanitize.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/functions.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/headers.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/footers.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/formfunctions.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_userfunctions.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_projectfunctions.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_other.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_checks.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sql_prepared.php');

	echo "<B> TRACEY SANDBOX </B> <BR /><BR />";
	
	$email = "ttc_rulz@hotmail.com";
	$result = createProject("test33", $email);	
	
	echo $result;
	/*
	$id = "2";
	$email = "ttc_rul6@hotmail.com";
	$result = getUserById($id);
	

	
	#test getUserById() 
	if (!empty($result)) {
		echo "Results: (TESTING: getUserById())<BR />";
		echo "<B>FirstName:</B> " . $result['FirstName'] . "<BR />";
		echo "<B>LastName:</B>  " .  $result['LastName']. "<BR />";
		echo "<B>Nickname:</B>  " . $result['Nickname']. "<BR />";
	} else {
		
		echo "Email not found <BR />";
	}
	
	echo "<BR /><BR />";
	
	
	#test createUser()
	$fName = "Johnny";
	$lName = "Depp";
	$email = "johnny@depp.com";
	$phone = "12345678";
	$nick = "Jack";
	$password = "hi";
	$type = 1;
	
	$result2 = createUser($fName, $lName, $email, $phone, $nick, $password, $type);
	
	if (!empty($result2)) {
		
		echo "RESULTS 2 (TESTING: createUser()): <BR />";
		echo "<B> Registered UserID: </B>" . $result2['UserId'] . "<BR />";
		echo "<B> email: </B>" . $result2['Email'] . "<BR />";
		echo "<B> Nickname: </B>" . $result2['Nickname'] . "<BR />";
		echo "<B> Phone: </B>" . $result2['Phone'] . "<BR />";
	}
	
	// testing the checkPass()
	
	checkPass("hi","johnny@depp.com");
	
	
	
	echo "<BR /><BR />";
	
	
	#test registration
	
	
	
	*/
/*
<!DOCTYPE html>  
  
<html lang="en">  
<head>  
   <meta charset="utf-8">  
   <title>Tracey Sandbox</title>  
</head>  
<body>  

</body>  
</html>  
*/

?>
