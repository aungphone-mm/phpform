    <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$link = mysqli_connect("localhost", "aungphone", "admin", "shopygndb");
 $link = mysqli_connect("localhost", "root", "", "shopygndb");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $del = mysqli_real_escape_string($link, $_REQUEST['delete']);
 $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
// Attempt select query execution
$sql = "delete FROM demo where id='$del'";

//$sql = "INSERT INTO demo (id, first_name, last_name, email, amount) VALUES ('$id', '$first_name', '$last_name', '$email', '$amount')";

if ($link->query($sql) === TRUE) {
	echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
				echo "</tr>";
				echo "<tr>";
                echo "<td>" . $del . "</td>";
                echo "<td>" . $first_name . "</td>";
  
  //Your delete id is ". $del ." and First Name is ".$first_name."";
  
} else {
  echo "Error updating record: " . $link->error;
}

echo "<br>";
echo "<br>";
echo "<form action='index.php' method='post'>";
echo "<button class='btn btn-primary' type=submit'>Home</button>";
echo "</tr>";
echo "<tr>Record delete successfully.</tr>"; 
  echo "</table>";
  
// Close connection
mysqli_close($link);
?>
</body>
</html>