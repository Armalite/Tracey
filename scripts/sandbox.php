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
	
	//$email = "ttc_rulz@hotmail.com";
	//$result = createProject("test33", $email);	
	
	
	
	global $connection;
	$results = '';
	$projectname = 'Test1';
	$response = '';
	$results = checkProjectExistsByName($projectname);	
	if (empty($results)) { return 'No project with name ' . $projectname . ' found.'; } else { echo 'Project found <BR />'; } 
	
	foreach($results as $row){
			$response = $response . '<tr> ';
			$response = $response . '<td align="center"> ' . $row['ProjectId'] . ' </td>';
			$response = $response . '<td align="center"> ' . $row['ProjectName'] . ' </td>';
			$response = $response . ' </tr>';
	}
	$response = $response . '</table>';	
	
	
	echo $response;
	//$id = "1";
	//$email = "ttc_rul6@hotmail.com";
	//echo "Before function <BR />";
	//$result = getUserById($id);
	//echo "After function <BR />";
	

	//checkPass("hi","johnny@depp.com");
	
	
	
	echo "<BR /><BR />";
	
	
	#test registration
	
	
	
	
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
