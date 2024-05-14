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


//Summary of journals--------------------

$tb1 = sanitize_input($_POST["tb1"]);
$tb2 = sanitize_input($_POST["tb2"]);
$tb3 = sanitize_input($_POST["tb3"]);
$tb4 = sanitize_input($_POST["tb4"]);
$tb5 = sanitize_input($_POST["tb5"]);
$tb6 = sanitize_input($_POST["tb6"]);
$tb7 = sanitize_input($_POST["tb7"]);
$tb10 = sanitize_input($_POST["tb10"]);
//M.Tech/ME/PG---------------------
$_SESSION["form4_tb"] = [
  "tb1" => $tb1,
  "tb2" => $tb2,
  "tb3" => $tb3,
  "tb4" => $tb4,
  "tb5" => $tb5,
  "tb6" => $tb6,
  "tb7" => $tb7,
  "tb10" => $tb10
  // Add more fields as needed
];

$tableData9 = array();
  $num_rows = count($_POST['auth']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData9[] = array(
      'auth' => $_POST['auth'][$i],
      'tit' => $_POST['tit'][$i],
      'n_o_j_c' => $_POST['n_o_j_c'][$i],
      'y_v_p' => $_POST['y_v_p'][$i],
      'imp_f' => $_POST['imp_f'][$i],
      'd_o_i' => $_POST['d_o_i'][$i],
      'st' => $_POST['st'][$i],
    );
  }
  $_SESSION["form4_tableData9"] = $tableData9;
$tableData10 = array();
$num_rows2 = count($_POST['inven']);  // Get the number of rows
  for ($i = 0; $i < $num_rows2; $i++) {
    $tableData10[] = array(
      'inven' => $_POST['inven'][$i],
      'title_pat' => $_POST['title_pat'][$i],
      'count_pat' => $_POST['count_pat'][$i],
      'Pat_no' => $_POST['Pat_no'][$i],
      'd_f' => $_POST['d_f'][$i],
      'd_p' => $_POST['d_p'][$i],
      'sattus' => $_POST['sattus'][$i],
    );
  } 
  $_SESSION["form4_tableData10"] = $tableData10; 
  $tableData11 = array();
  $num_rows3 = count($_POST['author']);  // Get the number of rows
    for ($i = 0; $i < $num_rows3; $i++) {
      $tableData11[] = array(
        'typ' => $_POST['typ'][$i],
        'author' => $_POST['author'][$i],
        'title' => $_POST['title'][$i],
        'y_o_p' => $_POST['y_o_p'][$i],
        'isbn' => $_POST['isbn'][$i],
        
      );
    }  
    $_SESSION["form4_tableData11"] = $tableData11;
  
    


try {
// Prepare SQL query for PHD
$sqlsummary = "INSERT INTO summary_of_publication (
    user_id,
    no_of_journal_international,
    no_of_journal_national ,
    no_of_conference_international	,
    no_of_conference_national,
    number_of_patents,
    no_of_books,
    no_of_book_chapters,
    google_scholar_link

  ) VALUES (
    :user_id,
    :no_of_journal_international,
    :no_of_journal_national ,
    :no_of_conference_international	,
    :no_of_conference_national,
    :number_of_patents,
    :no_of_books,
    :no_of_book_chapters,
    :google_scholar_link


  );";
  
  
    // Prepare PDO statement
    $stmt13 = $pdo->prepare($sqlsummary);
  
    // Bind parameters
    $stmt13->bindParam(":user_id", $user_id);
    $stmt13->bindParam(":no_of_journal_international", $tb1);
    $stmt13->bindParam(":no_of_journal_national", $tb2);
    $stmt13->bindParam(":no_of_conference_international", $tb3);
    $stmt13->bindParam(":no_of_conference_national", $tb4);
    $stmt13->bindParam(":number_of_patents", $tb5);
    $stmt13->bindParam(":no_of_books", $tb6);  
    $stmt13->bindParam(":no_of_book_chapters", $tb7); 
    $stmt13->bindParam(":google_scholar_link", $tb10);  
  
    // Execute the query
    $stmt13->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting PHD data: " . $e->getMessage();
  }

  try {
    // Prepare SQL statement for each row
    $stmt14 = $pdo->prepare("INSERT INTO best10_publications (user_id,inventor, title_of_patent, country_of_patent, patent_number, date_of_filing, date_published,status) VALUES (?,?, ?, ?, ?, ?, ?,?)");
    // Loop through data and execute statements
  foreach ($tableData9 as $row) {
    $stmt14->bindParam(1, $user_id);
    $stmt14->bindParam(2, $row['auth']);
    $stmt14->bindParam(3, $row['tit']);
    $stmt14->bindParam(4, $row['n_o_j_c']);
    $stmt14->bindParam(5, $row['y_v_p']);
    $stmt14->bindParam(6, $row['imp_f']);
    $stmt14->bindParam(7, $row['d_o_i']);
    $stmt14->bindParam(8, $row['st']);
    $stmt14->execute();
  }
  

  } catch (Exception $e) {
    echo "Error inserting education data: " . $e->getMessage();
  }
  try {
    // Prepare SQL statement for each row
    $stmt15 = $pdo->prepare("INSERT INTO patents (user_id,inventor, title_of_patent, country_of_patent, patent_number, date_of_filing, date_published,status) VALUES (?,?, ?, ?, ?, ?, ?,?)");
    // Loop through data and execute statements
  foreach ($tableData10 as $row) {
    $stmt15->bindParam(1, $user_id);
    $stmt15->bindParam(2, $row['inven']);
    $stmt15->bindParam(3, $row['title_pat']);
    $stmt15->bindParam(4, $row['count_pat']);
    $stmt15->bindParam(5, $row['Pat_no']);
    $stmt15->bindParam(6, $row['d_f']);
    $stmt15->bindParam(7, $row['d_p']);
    $stmt15->bindParam(8, $row['sattus']);
    $stmt15->execute();
  }
  

  } catch (Exception $e) {
    echo "Error inserting education data: " . $e->getMessage();
  }
  try {
    // Prepare SQL statement for each row
    $stmt16 = $pdo->prepare("INSERT INTO books (user_id,type, author, title_of_book, year, isbn) VALUES (?,?, ?, ?, ?, ?)");
    // Loop through data and execute statements
  foreach ($tableData11 as $row) {
    $stmt16->bindParam(1, $user_id);
    $stmt16->bindParam(2, $row['typ']);
    $stmt16->bindParam(3, $row['author']);
    $stmt16->bindParam(4, $row['title']);
    $stmt16->bindParam(5, $row['y_o_p']);
    $stmt16->bindParam(6, $row['isbn']);
    $stmt16->execute();
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
  header("Location: ../page5.php");

}else{
    header("Location: ../login.php");
    die();
}

?>