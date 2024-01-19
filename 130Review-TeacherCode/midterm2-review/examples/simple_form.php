

<?php
// Verify the integrity of the data that are entered in the from
$yourname = check_inputdata($_POST['yourname'],"You must enter your name");
$email    = check_inputdata($_POST['email']);
$likeit   = check_inputdata($_POST['likeit']);

// $comments = check_inputdata($_POST['comments']);
// <img src="troll.gif">


/*
<script>alert('my JS script');</script>
*/

?>

<html>
<!-- File example to validate the element of a form and then process the different elements -->
<head>
<title>Process the form in PHP</title>
<!-- A simple page to process the form -->
</head>
<body>
Your name is: <?php echo $_POST['yourname'] . '<br>'; ?>
Your e-mail: <?php echo $_POST['email'] . '<br>'; ?>
<br>
Do you like web programming? <?php echo $_POST['likeit'] .'<br>'; ?>
<br>
Comments:
<br>
<?php echo $_POST['comments']; ?>
</body>
</html>

<?php


function digitsonly($a)
{
	return preg_match("/\D/",$a);
}

function lettersonly($text)
{
	return preg_match("/[^a-zA-Z]/",$text);
}

function nowhitespace($text)
{
	return preg_match("/\s/",$text);
}


function verify_emailsyntax($email)
{
	 return preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email);
	 // Perform a regular expression
	 // http://php.net/manual/en/function.preg-match.php
}

/*

////////////////////////
// Regular expressions:
////////////////////////


Character		Description
###########################
.              a single character
\s             a whitespace character (space, tab, newline)
\S             non-whitespace character
\d             a digit (0-9)
\D             a non-digit
\w             a word character (a-z, A-Z, 0-9, _)
\W             a non-word character
[aeiou]        matches a single character in the given set
[^aeiou]       matches a single character outside the given set
(foo|bar|baz)  matches any of the alternatives specified

Modifier	Description
#######################
i 		Makes the match case insensitive
m 		Specifies that if the string has newline or carriage return characters, the ^ and $ operators will now
		match against a newline boundary, instead of a string boundary
o 		Evaluates the expression only once
s 		Allows use of . to match a newline character
x 		Allows you to use white space in the expression for clarity
g 		Globally finds all matches
cg 		Allows a search to continue even after a global match fails


Rules with special commands
###########################
p+ It matches any string containing at least one p.
p* It matches any string containing zero or more p's.
p? It matches any string containing zero or one p's.
p{N} It matches any string containing a sequence of N p's
p{2,3} It matches any string containing a sequence of two or three p's.
p{2, } It matches any string containing a sequence of at least two p's.
p$ It matches any string with p at the end of it.
^p It matches any string with p at the beginning of it.

*/


function verify_urlsyntax($url)
{
	return preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i",$url);
}

function check_inputdata($data, $pb='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
/*replace HTML chars like < and > to their HTML version &lt; and &gt :
replace HTML characters that can be used to create HTML inside HTML 
Not possible to run bad HTML or JS script within the field
*/

	if ($pb && strlen($data) == 0) // Empty string = nothing is displayed , pb = string to display when a field is mandatory
    {
        // die($pb); // exit with a msg
		show_error($pb);
    }
    return $data;
}

function show_error($myError)
{
	// We are in PHP
	?> 
	<!-- we re in HTML -->
    <html>
    <body>
    <b>Please correct the following error:</b>
	<br>
    <?php echo $myError; ?>
    </body>
    </html>

<?php
// back to PHP to finish the function !
exit();
}

function sendemail()
{
	$recipient = "hcecotti@csufresno.edu";
	$subject   = "This is a test e-mail";
	$message   = "It is an email sent via PHP";
	
	// redirect the visitor after mail() by printing a 'Location:' header:
	
	mail($recipient, $subject, $message);
	header('Location:bye.html');
}


?>