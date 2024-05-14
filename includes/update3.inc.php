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


//Present Employement--------------------

$pos = sanitize_input($_POST["posz"]);
$org = sanitize_input($_POST["orgz"]);
$sta = sanitize_input($_POST["sta"]);
$doj = sanitize_input($_POST["dojz"]);
$dol = sanitize_input($_POST["dolz"]);
$dur_t = sanitize_input($_POST["dur_t"]);

$_SESSION["form3_present_employment"] = [
  "posz" => $pos,
  "orgz" => $org,
  "sta" => $sta,
  "dojz" => $doj,
  "dolz" => $dol,
  "dur_t" => $dur_t,
  // Add more fields as needed
];



//Employement History-------------------
$tableData = array();
  $num_rows = count($_POST['position']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData[] = array(
      'position' => $_POST['position'][$i],
      'org' => $_POST['org'][$i],
      'd_o_j' => $_POST['d_o_j'][$i],
      'd_o_l' => $_POST['d_o_l'][$i],
      'duration' => $_POST['duration'][$i],
    );
  }
  $_SESSION["form3_employment_history"] = $tableData;

//Teaching Experience-------------------
  $tableData2 = array();
  $num_rows2 = count($_POST['pos']);  // Get the number of rows
  for ($i = 0; $i < $num_rows2; $i++) {
    $tableData2[] = array(
      'pos' => $_POST['pos'][$i],
      'empl' => $_POST['empl'][$i],
      'cou_tau' => $_POST['cou_tau'][$i],
      'UG' => $_POST['UG'][$i],
      'Duration' => $_POST['Duration'][$i],
      'No_s' => $_POST['No_s'][$i],
    );
  } 
  $_SESSION["form3_teaching_experience"] = $tableData2; 

  $tableData3 = array();
  $num_rows3 = count($_POST['posn']);  // Get the number of rows
  for ($i = 0; $i < $num_rows3; $i++) {
    $tableData3[] = array(
      'posn' => $_POST['posn'][$i],
      'insti' => $_POST['insti'][$i],
      'superv' => $_POST['superv'][$i],
      'doj' => $_POST['doj'][$i],
      'dol' => $_POST['dol'][$i],
      'duratio' => $_POST['duratio'][$i],
    );
  }
  $_SESSION["form3_research_experience"] = $tableData3;  

  $tableData4 = array();
  $num_rows4 = count($_POST['instit']);  // Get the number of rows
  for ($i = 0; $i < $num_rows4; $i++) {
    $tableData4[] = array(
      'instit' => $_POST['instit'][$i],
      'work_p' => $_POST['work_p'][$i],
      'doj1' => $_POST['doj1'][$i],
      'dol1' => $_POST['dol1'][$i],
      'duratio1' => $_POST['duratio1'][$i],
    );
  }  
  $_SESSION["form3_industrial_experience"] = $tableData4; 
  
//Area of specialization
$txt1 = $_POST["txt1"];
$txt2 = $_POST["txt2"];

$_SESSION["txt1"] = $txt1;
$_SESSION["txt2"] = $txt2;

// Prepare SQL query for Present_employment
$sqlpresent = "INSERT INTO present_employment (
    user_id,
    position,
    organization,
    statusnow ,
    date_of_joining,
    date_of_leaving,
    duration

  ) VALUES (
    :user_id,
    :position,
    :organization,
    :statusnow ,
    :date_of_joining,
    :date_of_leaving,
    :duration

  );";
  
  try {
    // Prepare PDO statement
    $stmt7 = $pdo->prepare($sqlpresent);
  
    // Bind parameters
    $stmt7->bindParam(":user_id", $user_id);
    $stmt7->bindParam(":position", $pos);
    $stmt7->bindParam(":organization", $org);
    $stmt7->bindParam(":statusnow", $sta);
    $stmt7->bindParam(":date_of_joining", $doj);
    $stmt7->bindParam(":date_of_leaving", $dol);
    $stmt7->bindParam(":duration", $dur_t);
      
  
    // Execute the query
    $stmt7->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }

  try {
    // Prepare SQL statement for each row
    $stmt8 = $pdo->prepare("INSERT INTO teaching_experience (user_id,position, employer, course_taught	, UG_PG, duration,num_students) VALUES (?, ?, ?, ?, ?,?,?)");

    // Loop through data and execute statements
    foreach ($tableData2 as $row) {
      $stmt8->bindParam(1, $user_id);
      $stmt8->bindParam(2, $row['pos']);
      $stmt8->bindParam(3, $row['empl']);
      $stmt8->bindParam(4, $row['cou_tau']);
      $stmt8->bindParam(5, $row['UG']);
      $stmt8->bindParam(6, $row['Duration']);
      $stmt8->bindParam(6, $row['No_s']);
      $stmt8->execute();
    }

    // Success message
    // echo "Data inserted successfully!";
  } catch (Exception $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
  try {
    // Prepare SQL statement for each row
    $stmt9 = $pdo->prepare("INSERT INTO employment_history (user_id,position, organization,date_of_joining	,date_of_leaving, duration) VALUES (?, ?, ?, ?, ?,?)");

    // Loop through data and execute statements
    foreach ($tableData as $row) {
      $stmt9->bindParam(1, $user_id);
      $stmt9->bindParam(2, $row['position']);
      $stmt9->bindParam(3, $row['org']);
      $stmt9->bindParam(4, $row['d_o_j']);
      $stmt9->bindParam(5, $row['d_o_l']);
      $stmt9->bindParam(6, $row['duration']);
      $stmt9->execute();
    }

    // Success message
    // echo "Data inserted successfully!";
  } catch (Exception $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
  try {
    // Prepare SQL statement for each row
    $stmt10 = $pdo->prepare("INSERT INTO research_experience (user_id,position, institute,supervisor,date_of_joining	,date_of_leaving, duration) VALUES (?, ?, ?, ?, ?,?,?)");

    // Loop through data and execute statements
    foreach ($tableData3 as $row) {
      $stmt10->bindParam(1, $user_id);
      $stmt10->bindParam(2, $row['posn']);
      $stmt10->bindParam(3, $row['insti']);
      $stmt10->bindParam(4, $row['superv']);
      $stmt10->bindParam(5, $row['doj']);
      $stmt10->bindParam(5, $row['dol']);
      $stmt10->bindParam(6, $row['duratio']);
      $stmt10->execute();
    }

    // Success message
    // echo "Data inserted successfully!";
  } catch (Exception $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
  try {
    // Prepare SQL statement for each row
    $stmt11 = $pdo->prepare("INSERT INTO industrial_experience (user_id,organization, work_profile,date_of_joining	,date_of_leaving, duration) VALUES (?, ?, ?, ?, ?,?)");

    // Loop through data and execute statements
    foreach ($tableData4 as $row) {
      $stmt11->bindParam(1, $user_id);
      $stmt11->bindParam(2, $row['instit']);
      $stmt11->bindParam(3, $row['work_p']);
      $stmt11->bindParam(5, $row['doj1']);
      $stmt11->bindParam(5, $row['dol1']);
      $stmt11->bindParam(6, $row['duratio1']);
      $stmt11->execute();
    }

    // Success message
    // echo "Data inserted successfully!";
  } catch (Exception $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
  $sqlspec = "INSERT INTO specialization_research (
    user_id,
    area_of_specialization,
    current_area_of_research    

  ) VALUES (
    :user_id,
    :area_of_specialization,
    :current_area_of_research

  );";
  
  try {
    // Prepare PDO statement
    $stmt12 = $pdo->prepare($sqlspec);
  
    // Bind parameters
    $stmt12->bindParam(":user_id", $user_id);
    $stmt12->bindParam(":area_of_specialization", $txt1);
    $stmt12->bindParam(":current_area_of_research", $txt2);
    
      
  
    // Execute the query
    $stmt12->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
  
//   echo "=================================";
//   echo $stmt->queryString;
//   echo "=================================";

  // Success message (modify as needed)
  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../page4.php");

}else{
    header("Location: ../login.php");
    die();
}

?>
