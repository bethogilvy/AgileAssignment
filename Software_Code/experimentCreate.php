<!-- <?php
//
// include 'Includes/header.php';
// require_once "Includes/db.inc.php";
//
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
//   header("location: login.php");
//   exit;
// }
//
// $userID= $_SESSION['id'];
//
// if(isset($_POST['logout'])) {
//   unset($_SESSION['loggedin']);
//   header("location: login.php");
// }
//
//  if(isset($_POST['submit'])){
//    $experimentName = $_POST['experimentName'];
//    $_SESSION['experimentName'] = $experimentName;
//
//    $experimentInfo = $_POST['experimentInfo'];
//    $_SESSION['experimentInfo'] = $experimentInfo;
//
//  if (empty($experimentName)) {
//      echo "The experiment must have a name!";
//  }
//  if (empty($experimentInfo)) {
//      echo "The experiment must have information!";
//  }
//  else {
//    //send to db sql here
//    $_SESSION['experimentID'] = $experimentID;
//    $primaryresearcher = $userID;
//
//    $testsql = "SELECT * FROM experiments WHERE experimentname = '{$experimentName}'";
//    $checkResult = mysqli_query($conn, $testsql);
//
//    if(mysqli_num_rows($checkResult) == 0) { //check if the name of experiment already exists
//      //the experiment name doesn't already exist
//      $sql = "INSERT INTO experiments(experimentname, primaryresearcher, experimentInformation) VALUES ('$experimentName', '$primaryresearcher', '$experimentInfo')";
//      if ($conn->query($sql) === TRUE) {
//        $sql = "SELECT * FROM experiments WHERE experimentname = '$experimentName'"
//        $result = mysqli_query($conn, $sql);
//        $row = mysqli_fetch_array($result);
//        $experimentid = $row['experimentid'];
//        echo $experimentid;
//        $videoPath = "videos/".$experimentid."";
//        if (!mkdir($videoPath, 0700)) {
//          echo $videoPath;
//          die('Failed to create folder');
//        }
//
//        echo "New record created successfully";
//        header("location: experimentList.php");
//      }
//      else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//      }
// } else {
//     // the experiment name already exists
//     echo "That experiment already exists";
// }
// }
//  }
//

 ?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Create Experiment</title> <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header style="height:150px;">
    <img class="img-fluid" src="University-of-Dundee-logo.png" width="300px" style="padding:20px; float: left">
    <form method="POST">
      <input type="submit" value="Log Out" name="logout" style="float: right; margin:20px">
    </form>
  </header>

  <div class="jumbotron text-center">
    <h1 class="text-center" style="float: center ">Create Expleriment</h1>
  </div>
  <div class="container-fluid" style="padding:0">
    <div class="jumbotron" style="margin-bottom:1px;">
    <form method="POST">
        <div class="form-group">
          <label>Enter Name of Experiment</label>
          <input type="text" name="experimentName"><br></br>
        </div>
      <br></br>
        <div class="form-group">
          <label>Enter Description of experiment</label>
          <input type="text" name="experimentInfo"><br></br>
        </div>
      <br></br>
        <input type="submit" value="Create experiment" name="submit" class='btn btn-outline-success'>
      </form>
    </div>
  </div>

  <footer>
        <img class="img-fluid mx-auto d-block" src="University-of-Dundee-logo-small.png" width="100px" style="padding:20px">
  </footer>
</body>

</html>
