<?php

// Include database connection file 
require_once('dbh.inc.php');
require_once('session_start.inc.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {

// Function to sanitize user input (prevent SQL injection)
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Get user ID from the session (assuming it's stored as 'user_id')
$user_id = $_SESSION["user_id"];

// Get form data (sanitize to prevent security risks)
$first_name = sanitize_input($_POST["firstName"]);
$middle_name = sanitize_input($_POST["middleName"]);
$last_name = sanitize_input($_POST["lastName"]);
$nationality = sanitize_input($_POST["nationality"]);
$dob = sanitize_input($_POST["dob"]);
$gender = sanitize_input($_POST["gender"]);
$maritalStatus = sanitize_input($_POST["maritalStatus"]);
$category = sanitize_input($_POST["category"]);
$father_name = sanitize_input($_POST["fathersName"]);
$idproof = sanitize_input($_POST["idproof"]);
$streetC = sanitize_input($_POST["streetC"]);
$cityC = sanitize_input($_POST["cityC"]);
$stateC = sanitize_input($_POST["stateC"]);
$countryC = sanitize_input($_POST["countryC"]);
$postalCodeC = sanitize_input($_POST["postalCodeC"]);
$streetP = sanitize_input($_POST["streetP"]);
$cityP = sanitize_input($_POST["cityP"]);
$stateP = sanitize_input($_POST["stateP"]);
$countryP = sanitize_input($_POST["countryP"]);
$postalCodeP = sanitize_input($_POST["postalCodeP"]);
$mobileNumber = $_POST["mobileNumber"];
$alternateMobile = $_POST["alternateMobile"];
$landline = $_POST["landline"];
$email = $_POST["email"];
$alternateEmail = $_POST["alternateEmail"];


//for applicant_details table
$advertisementNumber = sanitize_input($_POST["advertisementNumber"]);
$dob1 = sanitize_input($_POST["dob1"]);
$applicationNumber = sanitize_input($_POST["applicationNumber"]);
$postAppliedFor = sanitize_input($_POST["postAppliedFor"]);
$departmentSchool = sanitize_input($_POST["departmentSchool"]);

$_SESSION["form1_data"] = [
  "first_name" => $first_name,
  "middle_name" => $middle_name,
  "last_name" => $last_name,
  "nationality" => $nationality,
  "dob" => $dob,
  "gender" => $gender,
  "maritalStatus" => $maritalStatus,
  "category" => $category,
  "father_name" => $father_name,
  "idproof" => $idproof,
  "streetC" => $streetC,
  "cityC" => $cityC,
  "stateC" => $stateC,
  "countryC" => $countryC,
  "postalCodeC" => $postalCodeC,
  "streetP" => $streetP,
  "cityP" => $cityP,
  "stateP" => $stateP,
  "countryP" => $countryP,
  "postalCodeP" => $postalCodeP,
  "mobileNumber" => $mobileNumber,
  "alternateMobile" => $alternateMobile,
  "landline" => $landline,
  "email" => $email,
  "alternateEmail" => $alternateEmail,
  "advertisementNumber" => $advertisementNumber,
  "dob1"=>$dob1,
  "applicationNumber"=>$applicationNumber,
  "postAppliedFor"=>$postAppliedFor,
  "departmentSchool"=>$departmentSchool

];
$base_path = $_SERVER['DOCUMENT_ROOT']; // Gets the root directory of your web server



// Handle file upload (if applicable)
$upload_successful = false;
$upload_error_message = "";

if (isset($_FILES["updateIdProof"])) {
  // Get file details
  $file_name = $_FILES["updateIdProof"]["name"];
  $file_tmp_name = $_FILES["updateIdProof"]["tmp_name"];
  $file_error = $_FILES["updateIdProof"]["error"];
  $file_size = $_FILES["updateIdProof"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error !== UPLOAD_ERR_OK) {
    $upload_error_message = "File upload failed with error code: " . $file_error;
  } else {
    // Check file extension
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension), $allowed_extensions)) {
      $upload_error_message = "Invalid file type. Only " . implode(", ", $allowed_extensions) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name = uniqid("", true) . "." . $file_extension;

      // Define upload path (modify as needed)
      $upload_path = $base_path.'/'."includes/uploads/idProofs/";
      echo "Upload path for ID proof: " . $upload_path . "<br>";
      var_dump($upload_path);
      echo "<br>";

      // Upload the file
      $upload_successful = move_uploaded_file($file_tmp_name, $upload_path . $new_file_name);
      if (!$upload_successful) {
        $upload_error_message = "File upload failed.";
      }else {
        echo "File uploaded successfully. Path: " . $upload_path . $new_file_name . "<br>";
    }
    }
  }
}

$upload_successful2 = false;
$upload_error_message2 = "";

if (isset($_FILES["photoUpload"])) {
  // Get file details
  $file_name2 = $_FILES["photoUpload"]["name"];
  $file_tmp_name2 = $_FILES["photoUpload"]["tmp_name"];
  $file_error2 = $_FILES["photoUpload"]["error"];
  $file_size2 = $_FILES["photoUpload"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions2 = ["jpg", "png", "jpeg"];

  // Check for upload errors
  if ($file_error2 !== UPLOAD_ERR_OK) {
    $upload_error_message2 = "File upload failed with error code: " . $file_error2;
  } else {
    // Check file extension
    $file_extension2 = pathinfo($file_name2, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension2), $allowed_extensions2)) {
      $upload_error_message2 = "Invalid file type. Only " . implode(", ", $allowed_extensions2) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name2 = uniqid("", true) . "." . $file_extension2;

      // Define upload path (modify as needed)
      $upload_path2 = $base_path.'/'."includes/uploads/profilePhoto/";

      // Upload the file
      $upload_successful2 = move_uploaded_file($file_tmp_name2, $upload_path2 . $new_file_name2);
      if (!$upload_successful2) {
        $upload_error_message2 = "File upload failed.";
      }else {
        echo "File uploaded successfully. Path: " . $upload_path2 . $new_file_name2 . "<br>";
    }
    }
  }
}


// Prepare SQL query
$sql = "INSERT INTO application_details (
    user_id,
    post_applied_for,
    application_number,
    advertisement_number ,
    department_school,
    date_of_application

  ) VALUES (
    :user_id,
    :post_applied_for,
    :application_number,
    :advertisement_number,
    :department_school,
    :date_of_application

  );";
  
  try {
    // Prepare PDO statement
    $stmt1 = $pdo->prepare($sql);
  
    // Bind parameters
    $stmt1->bindParam(":user_id", $user_id);
    $stmt1->bindParam(":post_applied_for", $first_name);
    $stmt1->bindParam(":application_number", $mid_name);
    $stmt1->bindParam(":advertisement_number", $last_name);
    $stmt1->bindParam(":department_school", $nationality);
    $stmt1->bindParam(":date_of_application", $dob);
    
  
    // Execute the query
    $stmt1->execute();
  
  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }









// Prepare SQL query
$sql1 = "INSERT INTO user_details (
  user_id,
  first_name,
  mid_name,
  last_name,
  nationality,
  date_of_birth,
  gender,
  marital_status,
  category,
  id_proof_number,
  id_proof_file,
  fathers_name,
  correspondence_street,
  correspondence_city,
  correspondence_state,
  correspondence_country,
  correspondence_postal_code,
  permanent_street,
  permanent_city,
  permanent_state,
  permanent_country,
  permanent_postal_code,
  mobile_number,
  alternate_mobile,
  landline,
  email,
  alternate_email,
  profile_photo
   
) VALUES (
  :user_id,
  :first_name,
  :mid_name,
  :last_name,
  :nationality,
  :date_of_birth,
  :gender,
  :marital_status,
  :category,
  :id_proof_number,
  :id_proof_file,
  :fathers_name,
  :correspondence_street,
  :correspondence_city,
  :correspondence_state,
  :correspondence_country,
  :correspondence_postal_code,
  :permanent_street,
  :permanent_city,
  :permanent_state,
  :permanent_country,
  :permanent_postal_code,
  :mobile_number,
  :alternate_mobile,
  :landline,
  :email,
  :alternate_email,
  :profile_photo 
);";

try {
  // Prepare PDO statement
  $stmt = $pdo->prepare($sql1);

  // Bind parameters
$stmt->bindParam(":user_id", $user_id);
  $stmt->bindParam(":first_name", $first_name);
  $stmt->bindParam(":mid_name", $mid_name);
  $stmt->bindParam(":last_name", $last_name);
  $stmt->bindParam(":nationality", $nationality);
  $stmt->bindParam(":date_of_birth", $dob);
  $stmt->bindParam(":gender", $gender);
  $stmt->bindParam(":marital_status", $maritalStatus);
  $stmt->bindParam(":category", $category);
  $stmt->bindParam(":id_proof_number",$idproof); 
  $loc;

  // Handle optional file upload in binding
  if ($upload_successful) {
    $loc=$upload_path . $new_file_name;
    
  } else {
    $loc=NULL;
  }
  $stmt->bindParam(':id_proof_file', $loc);
  $stmt->bindParam(":fathers_name", $father_name);
  $stmt->bindParam(":correspondence_street", $streetC);
  $stmt->bindParam(":correspondence_city", $cityC);
  $stmt->bindParam(":correspondence_state", $stateC);
  $stmt->bindParam(":correspondence_country", $countryC);
  $stmt->bindParam(":correspondence_postal_code", $postalCodeC);
  $stmt->bindParam(":permanent_street", $streetP);
  $stmt->bindParam(":permanent_city", $cityP);
  $stmt->bindParam(":permanent_state",$stateP);
  $stmt->bindParam(":permanent_country", $countryP);
  $stmt->bindParam(":permanent_postal_code", $postalCodeP);
  $stmt->bindParam(":mobile_number", $mobileNumber);
  $stmt->bindParam(":alternate_mobile", $alternateMobile);
  $stmt->bindParam(":landline", $landline);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":alternate_email", $alternateEmail);
  
  $loc2;
  if ($upload_successful2) {
    $loc2=$upload_path2 . $new_file_name2;
    
  } else {
    $loc2=NULL;
  }
  $stmt->bindParam(':profile_photo', $loc2);

  // Execute the query
  $stmt->execute();
  
//   echo "=================================";
//   echo $stmt->queryString;
//   echo "=================================";

  // Success message (modify as needed)
  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../page2.php");

} catch (PDOException $e) {
  echo "Error inserting data: " . $e->getMessage();
}
}else{
    header("Location: ../login.php");
    die();
}

?>
