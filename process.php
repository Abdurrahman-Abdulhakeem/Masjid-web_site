
<?php
/* 
We include the connection parameters from our connect.php file which allow us to access the database.
Then we create variables from each value that was submitted from the form */
require_once 'connect.php';
  $name=$_POST["Name"];
  $email=$_POST["Email"];
  $phone=$_POST["Phone"];
  $sub=$_POST["Subject"];
  $message=$_POST["Comment"];

// string password_hash(string $password, mixed $algo, [array $options])
  //$hash=password_hash($password, PASSWORD_DEFAULT);

//with PDO, always use a try catch for better error handling. 
try{
	$dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
	}
catch (PDOException $e){
	echo $e->getMessage();
	}
/*
Here we prepare our INSERT statement and then execute that statement. Note that the execution of the query is a 2 part process. First, we prepare the statement and then we explicitly execute it.
Also, here I am simply echoing that the record was added successfully.
*/
$sth = $dbh->prepare("INSERT INTO tellus(n_ame,mail,fone,subj,comment)
VALUES ('$name','$email','$phone','$sub','$message')");
$sth->execute();
/*
This next line is PDO's unique way of closing the database connection. Make sure that you note is is simply setting your connection variable to null.
*/
$dbh =null;
header("location:sentmessage.php");
?>
