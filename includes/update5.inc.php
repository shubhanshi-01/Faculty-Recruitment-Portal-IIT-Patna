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

// $tb1 = sanitize_input($_POST["tb1"]);
// $tb2 = sanitize_input($_POST["tb2"]);
// $tb3 = sanitize_input($_POST["tb3"]);
// $tb4 = sanitize_input($_POST["tb4"]);
// $tb5 = sanitize_input($_POST["tb5"]);

// $tb6 = sanitize_input($_POST["tb6"]);
// $tb7 = sanitize_input($_POST["tb7"]);
//M.Tech/ME/PG---------------------

//10th/12th-------------------
$tableData91 = array();
  $num_rows = count($_POST['n_o_prof']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData91[] = array(
      'n_o_prof' => $_POST['n_o_prof'][$i],
      'status_mem' => $_POST['status_mem'][$i],
      
    );
  }
$tableData92 = array();
$num_rows2 = count($_POST['orga']);  // Get the number of rows
  for ($i = 0; $i < $num_rows2; $i++) {
    $tableData92[] = array(
      'typ_trai' => $_POST['typ_trai'][$i],
      'orga' => $_POST['orga'][$i],
      'yea' => $_POST['yea'][$i],
      'du' => $_POST['du'][$i],
      
    );
  }  
  $tableData93 = array();
  $num_rows3 = count($_POST['n_o_aw']);  // Get the number of rows
    for ($i = 0; $i < $num_rows3; $i++) {
      $tableData93[] = array(
        'n_o_aw' => $_POST['n_o_aw'][$i],
        'awraded_by' => $_POST['awraded_by'][$i],
        'year' => $_POST['year'][$i],
        
        
      );
    } 
    
    $tableData94 = array();
  $num_rows4 = count($_POST['o_c_pro']);  // Get the number of rows
    for ($i = 0; $i < $num_rows4; $i++) {
      $tableData94[] = array(
        'sh2' => $_POST['sh2'][$i],
        'o_c_pro' => $_POST['o_c_pro'][$i],
        'T_o_proje' => $_POST['T_o_proje'][$i],
        'amou' => $_POST['amou'][$i],
        'peri' => $_POST['peri'][$i],
        'rol' => $_POST['rol'][$i],
        'status2' => $_POST['status2'][$i],
        
        
      );
    } 
    $_SESSION["form5_tableData91"] = $tableData91;
    $_SESSION["form5_tableData92"] = $tableData92;
    $_SESSION["form5_tableData93"] = $tableData93;
    $_SESSION["form5_tableData94"] = $tableData94;
  
   
    try {
        // Prepare SQL statement for each row
        $stmt103 = $pdo->prepare("INSERT INTO membership (user_id,name1,membership_stat) VALUES (?,?, ?)");
        // Loop through data and execute statements
      foreach ($tableData91 as $row) {
        $stmt103->bindParam(1, $user_id);
        $stmt103->bindParam(2, $row['n_o_prof']);
        $stmt103->bindParam(3, $row['status_mem']);
        $stmt103->execute();
      }
      
    
      } catch (Exception $e) {
        echo "Error inserting education data: " . $e->getMessage();
      }

      try {
        // Prepare SQL statement for each row
        $stmt104 = $pdo->prepare("INSERT INTO professional_train (user_id,type1, org, yeaa_r,dur) VALUES (?,?, ?, ?, ?)");
        // Loop through data and execute statements
      foreach ($tableData92 as $row) {
        $stmt104->bindParam(1, $user_id);
        $stmt104->bindParam(2, $row['typ_trai']);
        $stmt104->bindParam(3, $row['orga']);
        $stmt104->bindParam(4, $row['yea']);
        $stmt104->bindParam(5, $row['du']);
       
        $stmt104->execute();
      }
      
    
      } catch (Exception $e) {
        echo "Error inserting education data: " . $e->getMessage();
      }

      try {
        // Prepare SQL statement for each row
        $stmt105 = $pdo->prepare("INSERT INTO awards_recog (user_id,name1, awarded_by, year1) VALUES (?,?, ?, ?)");
        // Loop through data and execute statements
      foreach ($tableData93 as $row) {
        $stmt105->bindParam(1, $user_id);
        $stmt105->bindParam(2, $row['n_o_aw']);
        $stmt105->bindParam(3, $row['awraded_by']);
        $stmt105->bindParam(4, $row['year']);
        
        $stmt105->execute();
      }
      
    
      } catch (Exception $e) {
        echo "Error inserting education data: " . $e->getMessage();
      }

      try {
        // Prepare SQL statement for each row
        $stmt106 = $pdo->prepare("INSERT INTO spons_consult (user_id,type2, agency, title, amount, period1, role1,status1) VALUES (?,?, ?, ?, ?, ?, ?,?)");
        // Loop through data and execute statements
      foreach ($tableData94 as $row) {
        $stmt106->bindParam(1, $user_id);
        $stmt106->bindParam(2, $row['sh2']);
        $stmt106->bindParam(3, $row['o_c_pro']);
        $stmt106->bindParam(4, $row['T_o_proje']);
        $stmt106->bindParam(5, $row['amou']);
        $stmt106->bindParam(6, $row['peri']);
        $stmt106->bindParam(7, $row['rol']);
        $stmt106->bindParam(8, $row['status2']);
        $stmt106->execute();
      }
      
    
      } catch (Exception $e) {
        echo "Error inserting education data: " . $e->getMessage();
      }  
  
  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../page6.php");

}else{
    header("Location: ../login.php");
    die();
}

?>