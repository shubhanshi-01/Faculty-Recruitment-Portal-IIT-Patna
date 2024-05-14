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




$upload_successful2 = false;
$upload_error_message2 = "";

if (isset($_FILES["u_i_f1"])) {
  // Get file details
  $file_name2 = $_FILES["u_i_f1"]["name"];
  $file_tmp_name2 = $_FILES["u_i_f1"]["tmp_name"];
  $file_error2 = $_FILES["u_i_f1"]["error"];
  $file_size2 = $_FILES["u_i_f1"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions2 = ["doc", "docx", "pdf"];

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
      $upload_path2 = "./uploads/PHDCertificate/";

      // Upload the file
      $upload_successful2 = move_uploaded_file($file_tmp_name2, $upload_path2 . $new_file_name2);
      if (!$upload_successful2) {
        $upload_error_message2 = "File upload failed.";
      }
    }
  }
}

$upload_successful3 = false;
$upload_error_message3 = "";

if (isset($_FILES["u_i_f2"])) {
  // Get file details
  $file_name3 = $_FILES["u_i_f2"]["name"];
  $file_tmp_name3 = $_FILES["u_i_f2"]["tmp_name"];
  $file_error3 = $_FILES["u_i_f2"]["error"];
  $file_size3 = $_FILES["u_i_f2"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions3 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error3 !== UPLOAD_ERR_OK) {
    $upload_error_message3 = "File upload failed with error code: " . $file_error3;
  } else {
    // Check file extension
    $file_extension3 = pathinfo($file_name3, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension3), $allowed_extensions3)) {
      $upload_error_message3 = "Invalid file type. Only " . implode(", ", $allowed_extensions3) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name3 = uniqid("", true) . "." . $file_extension3;

      // Define upload path (modify as needed)
      $upload_path3 = "./uploads/PGDocuments/";

      // Upload the file
      $upload_successful3 = move_uploaded_file($file_tmp_name3, $upload_path3 . $new_file_name3);
      if (!$upload_successful3) {
        $upload_error_message3 = "File upload failed.";
      }
    }
  }
}

$upload_successful4 = false;
$upload_error_message4 = "";

if (isset($_FILES["u_i_f3"])) {
  // Get file details
  $file_name4 = $_FILES["u_i_f3"]["name"];
  $file_tmp_name4 = $_FILES["u_i_f3"]["tmp_name"];
  $file_error4 = $_FILES["u_i_f3"]["error"];
  $file_size4 = $_FILES["u_i_f3"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions4 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error4 !== UPLOAD_ERR_OK) {
    $upload_error_message4 = "File upload failed with error code: " . $file_error4;
  } else {
    // Check file extension
    $file_extension4 = pathinfo($file_name4, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension4), $allowed_extensions4)) {
      $upload_error_message4  = "Invalid file type. Only " . implode(", ", $allowed_extensions4) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name4 = uniqid("", true) . "." . $file_extension4;

      // Define upload path (modify as needed)
      $upload_path4 = "./uploads/UGDocuments/";

      // Upload the file
      $upload_successful4 = move_uploaded_file($file_tmp_name4, $upload_path4 . $new_file_name4);
      if (!$upload_successful4 ) {
        $upload_error_message4  = "File upload failed.";
      }
    }
  }
}



$upload_successful5 = false;
$upload_error_message5 = "";

if (isset($_FILES["u_i_f4"])) {
  // Get file details
  $file_name5 = $_FILES["u_i_f4"]["name"];
  $file_tmp_name5 = $_FILES["u_i_f4"]["tmp_name"];
  $file_error5 = $_FILES["u_i_f4"]["error"];
  $file_size5 = $_FILES["u_i_f4"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions5 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error5 !== UPLOAD_ERR_OK) {
    $upload_error_message5 = "File upload failed with error code: " . $file_error5;
  } else {
    // Check file extension
    $file_extension5 = pathinfo($file_name5, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension5), $allowed_extensions5)) {
      $upload_error_message5 = "Invalid file type. Only " . implode(", ", $allowed_extensions5) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name5 = uniqid("", true) . "." . $file_extension5;

      // Define upload path (modify as needed)
      $upload_path5 = "./uploads/12Doc/";

      // Upload the file
      $upload_successful5 = move_uploaded_file($file_tmp_name5, $upload_path5 . $new_file_name5);
      if (!$upload_successful5) {
        $upload_error_message5 = "File upload failed.";
      }
    }
  }
}


$upload_successful6 = false;
$upload_error_message6 = "";

if (isset($_FILES["u_i_f5"])) {
  // Get file details
  $file_name6 = $_FILES["u_i_f5"]["name"];
  $file_tmp_name6 = $_FILES["u_i_f5"]["tmp_name"];
  $file_error6 = $_FILES["u_i_f5"]["error"];
  $file_size6 = $_FILES["u_i_f5"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions6 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error6 !== UPLOAD_ERR_OK) {
    $upload_error_message6 = "File upload failed with error code: " . $file_error6;
  } else {
    // Check file extension
    $file_extension6 = pathinfo($file_name6, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension6), $allowed_extensions6)) {
      $upload_error_message6 = "Invalid file type. Only " . implode(", ", $allowed_extensions6) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name6 = uniqid("", true) . "." . $file_extension6;

      // Define upload path (modify as needed)
      $upload_path6 = "./uploads/10Doc/";

      // Upload the file
      $upload_successful6 = move_uploaded_file($file_tmp_name6, $upload_path6 . $new_file_name6);
      if (!$upload_successful6) {
        $upload_error_message6 = "File upload failed.";
      }
    }
  }
}


$upload_successful7 = false;
$upload_error_message7 = "";

if (isset($_FILES["u_i_f6"])) {
  // Get file details
  $file_name7 = $_FILES["u_i_f6"]["name"];
  $file_tmp_name7 = $_FILES["u_i_f6"]["tmp_name"];
  $file_error7 = $_FILES["u_i_f6"]["error"];
  $file_size7 = $_FILES["u_i_f6"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions7 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error7 !== UPLOAD_ERR_OK) {
    $upload_error_message7  = "File upload failed with error code: " . $file_error7;
  } else {
    // Check file extension
    $file_extension7 = pathinfo($file_name7, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension7), $allowed_extensions7)) {
      $upload_error_message7  = "Invalid file type. Only " . implode(", ", $allowed_extensions7) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name7 = uniqid("", true) . "." . $file_extension7;

      // Define upload path (modify as needed)
      $upload_path7 = "./uploads/Payslip/";

      // Upload the file
      $upload_successful7  = move_uploaded_file($file_tmp_name7, $upload_path7 . $new_file_name7);
      if (!$upload_successful7 ) {
        $upload_error_message7  = "File upload failed.";
      }
    }
  }
}


$upload_successful8 = false;
$upload_error_message8 = "";

if (isset($_FILES["u_i_f7"])) {
  // Get file details
  $file_name8 = $_FILES["u_i_f7"]["name"];
  $file_tmp_name8 = $_FILES["u_i_f7"]["tmp_name"];
  $file_error8 = $_FILES["u_i_f7"]["error"];
  $file_size8 = $_FILES["u_i_f7"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions8 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error8 !== UPLOAD_ERR_OK) {
    $upload_error_message8 = "File upload failed with error code: " . $file_error8;
  } else {
    // Check file extension
    $file_extension8 = pathinfo($file_name8, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension8), $allowed_extensions8)) {
      $upload_error_message8 = "Invalid file type. Only " . implode(", ", $allowed_extensions8) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name8 = uniqid("", true) . "." . $file_extension8;

      // Define upload path (modify as needed)
      $upload_path8 = "./uploads/NOC/";

      // Upload the file
      $upload_successful8 = move_uploaded_file($file_tmp_name8, $upload_path8 . $new_file_name8);
      if (!$upload_successful8) {
        $upload_error_message8 = "File upload failed.";
      }
    }
  }
}

$upload_successful9 = false;
$upload_error_message9  = "";

if (isset($_FILES["u_i_f8"])) {
  // Get file details
  $file_name9 = $_FILES["u_i_f8"]["name"];
  $file_tmp_name9 = $_FILES["u_i_f8"]["tmp_name"];
  $file_error9 = $_FILES["u_i_f8"]["error"];
  $file_size9 = $_FILES["u_i_f8"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions9 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error9 !== UPLOAD_ERR_OK) {
    $upload_error_message9 = "File upload failed with error code: " . $file_error9;
  } else {
    // Check file extension
    $file_extension9 = pathinfo($file_name9, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension9), $allowed_extensions9)) {
      $upload_error_message9 = "Invalid file type. Only " . implode(", ", $allowed_extensions9) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name9 = uniqid("", true) . "." . $file_extension9;

      // Define upload path (modify as needed)
      $upload_path9 = "./uploads/postphd/";

      // Upload the file
      $upload_successful9 = move_uploaded_file($file_tmp_name9, $upload_path9 . $new_file_name9);
      if (!$upload_successful9) {
        $upload_error_message9 = "File upload failed.";
      }
    }
  }
}


$upload_successful10 = false;
$upload_error_message10 = "";

if (isset($_FILES["u_i_f9"])) {
  // Get file details
  $file_name10 = $_FILES["u_i_f9"]["name"];
  $file_tmp_name10 = $_FILES["u_i_f9"]["tmp_name"];
  $file_error10 = $_FILES["u_i_f9"]["error"];
  $file_size10 = $_FILES["u_i_f9"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions10 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error10 !== UPLOAD_ERR_OK) {
    $upload_error_message10 = "File upload failed with error code: " . $file_error10;
  } else {
    // Check file extension
    $file_extension10 = pathinfo($file_name10, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension10), $allowed_extensions10)) {
      $upload_error_message10 = "Invalid file type. Only " . implode(", ", $allowed_extensions10) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name10 = uniqid("", true) . "." . $file_extension10;

      // Define upload path (modify as needed)
      $upload_path10 = "./uploads/others/";

      // Upload the file
      $upload_successful10  = move_uploaded_file($file_tmp_name10, $upload_path10 . $new_file_name10);
      if (!$upload_successful10 ) {
        $upload_error_message10  = "File upload failed.";
      }
    }
  }
}


$upload_successful11 = false;
$upload_error_message11  = "";

if (isset($_FILES["u_i_f10"])) {
  // Get file details
  $file_name11 = $_FILES["u_i_f10"]["name"];
  $file_tmp_name11 = $_FILES["u_i_f10"]["tmp_name"];
  $file_error11 = $_FILES["u_i_f10"]["error"];
  $file_size11 = $_FILES["u_i_f10"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions11 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error11 !== UPLOAD_ERR_OK) {
    $upload_error_message11  = "File upload failed with error code: " . $file_error11;
  } else {
    // Check file extension
    $file_extension11 = pathinfo($file_name11, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension11), $allowed_extensions11)) {
      $upload_error_message11  = "Invalid file type. Only " . implode(", ", $allowed_extensions11) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name11 = uniqid("", true) . "." . $file_extension11;

      // Define upload path (modify as needed)
      $upload_path11 = "./uploads/sign/";

      // Upload the file
      $upload_successful11  = move_uploaded_file($file_tmp_name11, $upload_path11 . $new_file_name11);
      if (!$upload_successful11 ) {
        $upload_error_message11  = "File upload failed.";
      }
    }
  }
}

$upload_successful1 = false;
$upload_error_message1 = "";

if (isset($_FILES["u_i_f11"])) {
  // Get file details
  $file_name1 = $_FILES["u_i_f11"]["name"];
  $file_tmp_name1 = $_FILES["u_i_f11"]["tmp_name"];
  $file_error1 = $_FILES["u_i_f11"]["error"];
  $file_size1 = $_FILES["u_i_f11"]["size"];

  // Define allowed file types (modify as needed)
  $allowed_extensions1 = ["doc", "docx", "pdf"];

  // Check for upload errors
  if ($file_error1 !== UPLOAD_ERR_OK) {
    $upload_error_message1 = "File upload failed with error code: " . $file_error1;
  } else {
    // Check file extension
    $file_extension1 = pathinfo($file_name1, PATHINFO_EXTENSION);
    if (!in_array(strtolower($file_extension1), $allowed_extensions1)) {
      $upload_error_message1 = "Invalid file type. Only " . implode(", ", $allowed_extensions1) . " files allowed.";
    } else {
      // Generate a unique filename to prevent overwrites
      $new_file_name1 = uniqid("", true) . "." . $file_extension1;

      // Define upload path (modify as needed)
      $upload_path1 = "./uploads/five_best_research/";

      // Upload the file
      $upload_successful1 = move_uploaded_file($file_tmp_name1, $upload_path1 . $new_file_name1);
      if (!$upload_successful1) {
        $upload_error_message1 = "File upload failed.";
      }
    }
  }
}

$tableData91 = array();
  $num_rows = count($_POST['name1']);  // Get the number of rows
  for ($i = 0; $i < $num_rows; $i++) {
    $tableData91[] = array(
      'name1' => $_POST['name1'][$i],
      'pos61' => $_POST['pos61'][$i],
      'ass_w_ref' => $_POST['ass_w_ref'][$i],
      'inst' => $_POST['inst'][$i],
      'email' => $_POST['email'][$i],
      'cont' => $_POST['cont'][$i],
      
    );
  }
  $_SESSION["form7_tableData91"] = $tableData91;

  
   


try {
$stmt90 = $pdo->prepare("INSERT INTO documents (user_id, best_papers, phd , PG , UG , '12','10', pay_slip , NOC , post_phd , others,sign) VALUES (:user_id,:best_papers,:phd,:PG,:UG,:twelve,:ten,:pay_slip,:noc,:post,:others,:sign) ;");
// Handle optional file upload in binding
$stmt90->bindParam(':user_id', $user_id);
if ($upload_successful1) {
  $loc1=$upload_path1 . $new_file_name1;
  
} else {
  $loc1=NULL;
}
$stmt90->bindParam(':best_papers', $loc1);
  
 
// Handle optional file upload in binding
if ($upload_successful2) {
  $loc2=$upload_path2 . $new_file_name2;
  
} else {
  $loc2=NULL;
}
$stmt90->bindParam(':phd', $loc2);
    

// Handle optional file upload in binding
if ($upload_successful3) {
  $loc3=$upload_path3 . $new_file_name3;
  
} else {
  $loc3=NULL;
}
$stmt90->bindParam(':PG', $loc3);

// Handle optional file upload in binding
if ($upload_successful4) {
  $loc4=$upload_path4 . $new_file_name4;
  
} else {
  $loc4=NULL;
}
$stmt90->bindParam(':UG', $loc4);

// Handle optional file upload in binding
if ($upload_successful5) {
  $loc5=$upload_path5 . $new_file_name5;
  
} else {
  $loc5=NULL;
}
$stmt90->bindParam(':twelve', $loc5);

// Handle optional file upload in binding
if ($upload_successful6) {
  $loc6=$upload_path6 . $new_file_name6;
  
} else {
  $loc6=NULL;
}
$stmt90->bindParam(':ten', $loc6);

// Handle optional file upload in binding
if ($upload_successful7) {
  $loc7=$upload_path7 . $new_file_name7;
  
} else {
  $loc7=NULL;
}
$stmt90->bindParam(':pay_slip', $loc7);


// Handle optional file upload in binding
if ($upload_successful8) {
  $loc8=$upload_path8 . $new_file_name8;
  
} else {
  $loc8=NULL;
}
$stmt90->bindParam(':noc', $loc8);


// Handle optional file upload in binding
if ($upload_successful9) {
  $loc9=$upload_path9 . $new_file_name9;
  
} else {
  $loc9=NULL;
}
$stmt90->bindParam(':post', $loc9);

// Handle optional file upload in binding
if ($upload_successful10) {
  $loc10=$upload_path10 . $new_file_name10;
  
} else {
  $loc10=NULL;
}
$stmt90->bindParam(':others', $loc10);

// // Handle optional file upload in binding
if ($upload_successful11) {
  $loc11=$upload_path11 . $new_file_name11;
  
} else {
  $loc11=NULL;
}
$stmt90->bindParam(':sign', $loc11);

  
  } catch (PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }


  echo "<script>alert('Data inserted successfully!');</script>";
  header("Location: ../last_page.php");

}else{
    header("Location: ../login.php");
    die();
}

?>