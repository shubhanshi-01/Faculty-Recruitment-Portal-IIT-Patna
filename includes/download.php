<?php
require_once('dbh.inc.php');
require_once('session_start.inc.php');

    // Retrieve user_id from session data
    echo $_SESSION['user_id'];
    $user_id = $_SESSION['user_id'];

    // Fetch PDF content from the database based on user_id
    $sql = "SELECT pdf_content FROM pdf_files WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $pdf_content = $stmt->fetchColumn();

    // Check if PDF content is retrieved
    if ($pdf_content) {
        // Clear any previous output
        ob_clean();

        // Set headers
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="generated_pdf.pdf"');
        header('Content-Length: ' . strlen($pdf_content));

        // Output PDF content
        echo $pdf_content;
        exit();
    } else {
        // Handle case where PDF content is not found
        echo "PDF content not found.";
    }

?>
