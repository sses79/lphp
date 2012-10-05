<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form Feedback</title>
  </head>
  <body>
  <?php # s2.3.form2.php - handle form 2>
	//Creat a shorthand for the form data:
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$comments = $_REQUEST['comments'];
	
	//Creat the $gender variable:
	if(isset($_REQUEST['gender'])){
		$gender = $_REQUEST['gender'];
	} else {
		$gender = NULL;
	}

	/* Not used:
	$_REQUEST['age'];
	$_REQUEST['submit'];
	*/
	// Print the submitted information:
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";

	//Print a message based upon the gender value:
	if ($gender == 'M'){
		echo '<p><b>Good day, Sir!</b></p>';
	} elseif ($gender == 'F'){
		echo '<p><b>Good day, Madam!</b></p>';
	} else {  // No gender selected.
		echo '<p><b>You forgot to enter your gender!</b></p>';
	}
	
  ?>
  </body>
 </html>