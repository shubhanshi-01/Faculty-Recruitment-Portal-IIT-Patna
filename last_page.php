<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update your personal details</title>
    <link rel="stylesheet" href="./style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <h1>INDIAN INSTITUTE OF TECHNOLOGY PATNA</h1>
    </div>
    <div class="head">
        <h2>FACULTY RECRUITMENT PORTAL</h2>
    </div>
    
    <form >
        <fieldset>
            
        <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
        <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
            <div class="Emp_de">
               
                <!-- <form id="personalDetailsForm"> -->
                    <div class="head">
                        <h2>22. Final Declaration:</h2>
                    </div>
                    <div class="declaration-container">
                        <textarea class="declaration-text" id="dec" readonly>I hereby declare that I have carefully read and understood the instructions and particulars mentioned in the advertisement and this application form. I further declare that all the entries along with the attachments uploaded in this form are true to the best of my knowledge and belief.
                        </textarea>
                        <label for="checkbox" id="c_b">I agree:</label>
                        <input type="checkbox" name="checkbox" id="checkbox">
                      </div>
                      <h3 style="color:greenyellow">Note: The form can be edited till the cutoff date of the rolling advertisment.</h3>
                      <input type="button"  id="saveAndSubmit" class="savez" name="saveand" value="SAVE & SUBMIT">
                    </div>
                    </fieldset>
    </form>
    <script>
    document.getElementById("saveAndSubmit").addEventListener("click", function() {
        // Perform any validation checks here
        
        // If validation passes, generate PDF
        generatePDF();
    });

    function generatePDF() {
        // You can use AJAX to call the PHP script that generates the PDF
        // For simplicity, I'm redirecting to the PHP script using window.location
        window.location.href = "./includes/generate_pdf.php";
    }
    </script>
                    </body>
                    </html>