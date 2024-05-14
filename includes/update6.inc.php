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
  $num_rows = count($_POST['Name_of_stu']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData91[] = array(
      'sh2' => $_POST['Name_of_stu'][$i],
      'Name_of_stu' => $_POST['Name_of_stu'][$i],
      'Title_of_thesis' => $_POST['Title_of_thesis'][$i],
      'role2' => $_POST['role2'][$i],
      'status4' => $_POST['status4'][$i],
      'y_o_comp' => $_POST['y_o_comp'][$i],
      
    );
  }
  $_SESSION["form6_tableData91"] = $tableData91;

  $sig_r_f = sanitize_input($_POST["sig_r_f"]);
  $teac_ex = sanitize_input($POST["teac_exp"]);
  $prof_sr = sanitize_input($POST["prof_sr"]);
  $det_l = sanitize_input($POST["det_l"]);
  $d_con = sanitize_input($POST["d_con"]); 
  // $_SESSION["form6_text"] = [
  //   "sig_r_f" => $sig_r_f,
  //   "teac_ex" => $teac_ex,
  //   "prof_sr" => $prof_sr,
  //   "det_l" => $det_l,
  //   "d_con" => $d_con
  //   // Add more fields as needed
  // ];
  $_SESSION["sig_r_f"]=$sig_r_f;
  $_SESSION["teac_ex"]=$teac_ex;
  $_SESSION["prof_sr"]=$prof_sr;
  $_SESSION["det_l"]=$det_l;
  $_SESSION["d_con"]=$d_con;
  
  
   


  try {
    // Prepare SQL statement for each row
    $stmt100 = $pdo->prepare("INSERT INTO research_superv (user_id,Type1, name_of_stu, title_thesis, role1, ongoing, ongoing_since) VALUES (?,?, ?, ?, ?, ?, ?)");
    // Loop through data and execute statements
  foreach ($tableData91 as $row) {
    $stmt100->bindParam(1, $user_id);
    $stmt100->bindParam(2, $row['sh2']);
    $stmt100->bindParam(3, $row['Name_of_stu']);
    $stmt100->bindParam(4, $row['Title_of_thesis']);
    $stmt100->bindParam(5, $row['role2']);
    $stmt100->bindParam(6, $row['status4']);
    $stmt100->bindParam(7, $row['y_o_comp']);
    $stmt100->execute();
  }
  

  } catch (Exception $e) {
    echo "Error inserting education data: " . $e->getMessage();
  }


  try {
    // Prepare SQL query for PHD
    $sqlsignificant = "INSERT INTO significant (
        user_id,
        research,
        teaching,
        professional,
        journal,
        conference
    
      ) VALUES (
        :user_id,
        :research,
        :teaching,
        :professional,
        :journal,
        :conference
    
      );";
      
      
        // Prepare PDO statement
        $stmt101 = $pdo->prepare($sqlsignificant);
      
        // Bind parameters
        $stmt101->bindParam(":user_id", $user_id);
        $stmt101->bindParam(":research", $sig_r_f);
        $stmt101->bindParam(":teaching", $teac_ex);
        $stmt101->bindParam(":professional", $prof_sr);
        $stmt101->bindParam(":journal", $det_l);
        $stmt101->bindParam(":conference", $d_con);
        
      
        // Execute the query
        $stmt101->execute();
      
      
      } catch (PDOException $e) {
        echo "Error inserting PHD data: " . $e->getMessage();
      }   

  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../page7.php");

}else{
    header("Location: ../login.php");
    die();
}

?>