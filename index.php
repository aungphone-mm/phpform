<!DOCTYPE html>
<html>
<head>
<title>Aung Phone</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="p:domain_verify" content="90b0f1c3774e686d9a92d205e63143f2"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143832274-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143832274-1');
</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Insert Data
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <form action="insert.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstName">First name</label>
      <input type="text" class="form-control" name="first_name" id="firstName" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastName">Last name</label>
      <input type="text" class="form-control" name="last_name" id="lastName" >
    </div>
    <div class="col-md-4 mb-3">
      <label for="email">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" >@</span>
        </div>
        <input type="text" class="form-control" name="email" id="emailAddress"  aria-describedby="inputGroupPrepend2" >
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="amount">Amount</label>
      <input type="text" class="form-control" name="amount" id="amount" required>
    </div>
  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  -->
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Delete Data
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <form action="confirm.php" method="post">
	<p>
    	<label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
  
    <input type="submit" value="Confirm Data">
</form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Show all Data
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <form action='show.php' method='post'>
	<button class="btn btn-primary" type="submit">Show All Data</button>
</form>
	  </div>
    </div>
  </div>
</div>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$link = mysqli_connect("localhost", "aungphone", "admin", "shopygndb");
//$link = mysqli_connect("localhost", "root", "", "shopygndb");

$host= "ec2-52-200-5-135.compute-1.amazonaws.com";
$dbname = "dbk5cubscsr3i3";
$user = "oixsjrlzkdzkqq";
$password = "91556de58737f1eeda4089bcca863261f3dd2687187e3a0b7044c53a43d4c2cf";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
//db

  //echo 'This is Index Page';

  $sql = 'SELECT * FROM demo';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();

  print_r ($details);
?>

</body>
</html>