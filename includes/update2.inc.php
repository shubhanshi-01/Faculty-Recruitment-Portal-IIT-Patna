<?php

// Include database connection file 
require_once('dbh.inc.php');
require_once('session_start.inc.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  //   echo "<h3>Form Data:</h3>";
  // var_dump($_POST);
  // echo "<br>";

// Function to sanitize user input (prevent SQL injection)
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Get user ID from the session (assuming it's stored as 'user_id')
$user_id = $_SESSION["user_id"];


//DETAILS OF PHD --------------------

$univ = sanitize_input($_POST["univ"]);
$dept = sanitize_input($_POST["dept"]);
$super = sanitize_input($_POST["super"]);
$yoj = sanitize_input($_POST["yoj"]);
$title1 = sanitize_input($_POST["title1"]);
$doa = sanitize_input($_POST["doa"]);
$dost = sanitize_input($_POST["dost"]);

$_SESSION["form2_data"] = [
  "univ" => $univ,
  "dept" => $dept,
  "super" => $super,
  "yoj" => $yoj,
  "title1" => $title1,
  "doa" => $doa,
  "dost" => $dost,
  // Add more fields as needed
];

//M.Tech/ME/PG---------------------
$degree1 = sanitize_input($_POST["degree1"]);
$un = sanitize_input($_POST["un"]);
$br = sanitize_input($_POST["br"]);
$yoj1 = sanitize_input($_POST["yoj1"]);
$yoc = sanitize_input($_POST["yoc"]);
$dur = sanitize_input($_POST["dur"]);
$cgpa = sanitize_input($_POST["cgpa"]);
$div = sanitize_input($_POST["div"]);

$_SESSION["form3_data"] = [
  "degree1" => $degree1,
  "un" => $un,
  "br" => $br,
  "yoj1" => $yoj1,
  "yoc" => $yoc,
  "dur" => $dur,
  "cgpa" => $cgpa,
  "div" => $div,
  // Add more fields as needed
];

//B.Tech/BE/UG---------------------
$degree2 = sanitize_input($_POST["degree2"]);
$un2 = sanitize_input($_POST["un2"]);
$br2 = sanitize_input($_POST["br2"]);
$yoj12 = sanitize_input($_POST["yoj12"]);
$yoc2 = sanitize_input($_POST["yoc2"]);
$dur2 = $_POST["dur2"];
$cgpa2 = $_POST["cgpa2"];
$div2 = $_POST["div2"];

$_SESSION["form4_data"] = [
  "degree2" => $degree2,
  "un2" => $un2,
  "br2" => $br2,
  "yoj12" => $yoj12,
  "yoc2" => $yoc2,
  "dur2" => $dur2,
  "cgpa2" => $cgpa2,
  "div2" => $div2,
  // Add more fields as needed
];

//10th/12th-------------------
$tableData = array();
  $num_rows = count($_POST['tenthTwelfth']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData[] = array(
      'tenthTwelfth' => $_POST['tenthTwelfth'][$i],
      'school' => $_POST['school'][$i],
      'yearPassing' => $_POST['yearPassing'][$i],
      'percentage' => $_POST['percentage'][$i],
      'divisionClass' => $_POST['divisionClass'][$i],
    );
  }
  $_SESSION["form5_data"] = $tableData;
$tableData2 = array();
$num_rows2 = count($_POST['degree']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData2[] = array(
      'degree' => $_POST['degree'][$i],
      'university' => $_POST['university'][$i],
      'branch' => $_POST['branch'][$i],
      'duration' => $_POST['duration'][$i],
      'percentage' => $_POST['percentage'][$i],
      'division' => $_POST['division'][$i],
    );
  }  
  $_SESSION["form6_data"] = $tableData2;


try {
// Prepare SQL query for PHD
$sqlPHD = "INSERT INTO phd_details (
    user_id,
    university,
    supervisor ,
    year_of_joining,
    title_of_thesis,
    date_of_award,
    date_of_successful_thesis

  ) VALUES (
    :user_id,
    :university,
    :supervisor ,
    :year_of_joining,
    :title_of_thesis,
    :date_of_award,
    :date_of_successfull_thesis

  );";
  
  
    // Prepare PDO statement
    $stmt2 = $pdo->prepare($sqlPHD);
  
    // Bind parameters
    $stmt2->bindParam(":user_id", $user_id);
    $stmt2->bindParam(":university", $univ);
    $stmt2->bindParam(":supervisor", $super);
    $stmt2->bindParam(":year_of_joining", $yoj);
    $stmt2->bindParam(":title_of_thesis", $title1);
    $stmt2->bindParam(":date_of_award", $doa);
    $stmt2->bindParam(":date_of_successfull_thesis", $dost);    
  
    // Execute the query
    $stmt2->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting PHD data: " . $e->getMessage();
  }

try {
// Prepare SQL query for M.Tech/ME/PG
$sqlPG = "INSERT INTO mtech_me_pg_details (
    user_id,
    degree,
    university,
    branch,
    year_of_joining,
    year_of_completion,
    duration,
    cgpa,
    division

  ) VALUES (
    :user_id,
    :degree,
    :university,
    :branch,
    :year_of_joining,
    :year_of_completion,
    :duration,
    :cgpa,
    :division

  );";
  
  
    // Prepare PDO statement
    $stmt3 = $pdo->prepare($sqlPG);
  
    // Bind parameters
    $stmt3->bindParam(":user_id", $user_id);
    $stmt3->bindParam(":degree", $degree1);
    $stmt3->bindParam(":university", $un);
    $stmt3->bindParam(":branch", $br);
    $stmt3->bindParam(":year_of_joining", $yoj1);
    $stmt3->bindParam(":year_of_completion", $yoc);
    $stmt3->bindParam(":duration", $dur);
    $stmt3->bindParam(":cgpa", $cgpa);
    $stmt3->bindParam(":division", $div);    
  
    // Execute the query
    $stmt3->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }  

try {
// Prepare SQL query for B.Tech/BE/UG
$sqlUG = "INSERT INTO btech_be_ug_details (
    user_id,
    degree,
    university,
    branch,
    year_of_joining,
    year_of_completion,
    duration,
    cgpa,
    division

  ) VALUES (
    :user_id,
    :degree,
    :university,
    :branch,
    :year_of_joining,
    :year_of_completion,
    :duration,
    :cgpa,
    :division

  );";
  
  
    // Prepare PDO statement
    $stmt4 = $pdo->prepare($sqlUG);
  
    // Bind parameters
    $stmt4->bindParam(":user_id", $user_id);
    $stmt4->bindParam(":degree", $degree2);
    $stmt4->bindParam(":university", $un2);
    $stmt4->bindParam(":branch", $br2);
    $stmt4->bindParam(":year_of_joining", $yoj12);
    $stmt4->bindParam(":year_of_completion", $yoc2);
    $stmt4->bindParam(":duration", $dur2);
    $stmt4->bindParam(":cgpa", $cgpa2);
    $stmt4->bindParam(":division", $div2);

  
    // Execute the query
    $stmt4->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }   

  try {
    // Prepare SQL statement for each row
    $stmt5 = $pdo->prepare("INSERT INTO school (user_id,qualification, school, year_of_passing, percentag, division_class) VALUES (?, ?, ?, ?, ?, ?)");

    // Loop through data and execute statements
  foreach ($tableData as $row) {
    $stmt5->bindParam(1, $user_id);
    $stmt5->bindParam(2, $row['tenthTwelfth']);
    $stmt5->bindParam(3, $row['school']);
    $stmt5->bindParam(4, $row['yearPassing']);
    $stmt5->bindParam(5, $row['percentage']);
    $stmt5->bindParam(6, $row['divisionClass']);
    $stmt5->execute();
  }
  

  } catch (Exception $e) {
    echo "Error inserting education data: " . $e->getMessage();
  }

  try {
    // Prepare SQL statement for each row
    $stmt6 = $pdo->prepare("INSERT INTO additional_qualification (user_id,degree, university, branch, duration, percentag, division) VALUES (?,?, ?, ?, ?, ?, ?)");
    // Loop through data and execute statements
  foreach ($tableData2 as $row) {
    $stmt6->bindParam(1, $user_id);
    $stmt6->bindParam(2, $row['degree']);
    $stmt6->bindParam(3, $row['university']);
    $stmt6->bindParam(4, $row['branch']);
    $stmt6->bindParam(5, $row['duration']);
    $stmt6->bindParam(6, $row['percentage']);
    $stmt6->bindParam(7, $row['division']);
    $stmt6->execute();
  }
  

  } catch (Exception $e) {
    echo "Error inserting education data: " . $e->getMessage();
  }
  // try {
  //   $stmt = $pdo->prepare("INSERT INTO additional_qualification (degree, university, branch, duration, percentag, division) VALUES (?, ?, ?, ?, ?, ?)");

  //       // Bind parameters
  //   $stmt->bindParam("ssssss", $degree, $university, $branch, $duration, $percentage, $division);

  //       // Set parameters and execute the statement for each row
  //   foreach ($_POST['degree'] as $key => $value) {
  //       $degree = $_POST['degree'][$key];
  //       $university = $_POST['university'][$key];
  //       $branch = $_POST['branch'][$key];
  //       $duration = $_POST['duration'][$key];
  //       $percentage = $_POST['percentage'][$key];
  //       $division = $_POST['division'][$key];

  //       // Execute the statement
  //       $stmt->execute();

  //   } 
  // } catch (Exception $e) {
  //   echo "Error inserting education data: " . $e->getMessage();
  // }
  
  
//   echo "=================================";
//   echo $stmt->queryString;
//   echo "=================================";

  // Success message (modify as needed)
  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../page3.php");

}else{
    header("Location: ../login.php");
    die();
}

?>
