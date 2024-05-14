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
    
    <form action="./includes/update7.inc.php" method="POST">
        <fieldset>
            
        <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
        <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
            <div class="head">
                <h2 style="color:yellow">19. Reprints of 5 Best Research Papers*</h2>
            </div>
            </fieldset>
            
            <div class="photo-section" id="p_s">
                
                <h4 style="color:azure">Upload 5 Best Research Papers in a single PDF < 6MB </h4>
                <label for="updateIdProof" style="color:yellow">Update 5 Best Papers:</label>
                    <input type="file" id="u_i_f1" name="u_i_f1" accept=".pdf">
                    <button type="button" id="viewUploadedFile1">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a1.js">
                    </script>
            </div>
            <div class="photo-section" id="p_s">
                
                <div class="head">
                    <h2 style="color:yellow">20. Check List of the documents attached with the online application*</h2>
                </div>
                <h4 style="color: white">Check List of the documents attached with the online application (Documents should be uploaded in PDF format only):</h4>
                <label for="updateIdProof" style="color:yellow">PHD Certificate:</label>
                    <input type="file" id="u_i_f2" name="u_i_f2" accept=".pdf">
                    <button type="button" id="viewUploadedFile2">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a2.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">PG Documents(Update All semester/year-Marksheets and degree certificate):</label>
                    <input type="file" id="u_i_f3" name="u_i_f3" accept=".pdf">
                    <button type="button" id="viewUploadedFile3">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a3.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">UG Documents(Update All semester/year-Marksheets and degree certificate):</label>
                    <input type="file" id="u_i_f4" name="u_i_f4" accept=".pdf">
                    <button type="button" id="viewUploadedFile4">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a4.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">12th/HSC/Diploma Documents :</label>
                    <input type="file" id="u_i_f5" name="u_i_f5" accept=".pdf">
                    <button type="button" id="viewUploadedFile5">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a5.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">10th/SSC Documents:</label>
                    <input type="file" id="u_i_f6" name="u_i_f6" accept=".pdf">
                    <button type="button" id="viewUploadedFile6">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a6.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">Pay Slip:</label>
                    <input type="file" id="u_i_f7" name="u_i_f7" accept=".pdf">
                    <button type="button" id="viewUploadedFile7">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a7.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">NOC or Undertaking:(Undertaking-in case, NOC is not available at the time of application but will be provided at the time of interview)

                    </label>
                    
                    <input type="file" id="u_i_f8" name="u_i_f8" accept=".pdf">
                    <button type="button" id="viewUploadedFile8">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a8.js">
                    </script>
                    <label for="updateIdProof" style="color:yellow">Post phd Experience Certificate/All Experience Certificates/ Last Pay slip/:</label>
                    <input type="file" id="u_i_f9" name="u_i_f9" accept=".pdf">
                    <button type="button" id="viewUploadedFile9">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a9.js">
                    </script>

                    <label for="uniq" style="color:yellow">Upload any other relevant document in a single PDF (For example award certificate, experience certificate etc) . If there are multiple documents, combine all the documents in a single PDF) <1MB. </label>
                    <input type="file" id="u_i_f10" name="u_i_f10" accept=".pdf">
                    <button type="button" id="viewUploadedFile10">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a10.js">
                    </script>
                    

                    <label for="uniq" style="color:yellow">Upload your signature(in JPG only) </label>
                    <input type="file" id="u_i_f11" name="u_i_f11" accept=".jpg">
                    
                    
            </div>
            <div class="Emp_de">
               
                <form id="personalDetailsForm">
                    <div class="head">
                        <h2>21. Referees*:</h2>
                    </div>
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th >Name</th>
                                <th >Position</th>

                                <th>Association with Referee</th>
                                <th >Institution/Organization</th>
                                <th >E-mail</th>
                                <th >Contact No.</th>
                                
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                
                                <td><input type="text" name="name1[]"></td>
                                <td><input type="text" name="pos61[]"></td>
                                <td><input type="text" name="ass_w_ref[]"></td>
                                <td><input type="text" name="inst[]"></td>
                                <td><input type="text" name="email[]"></td>
                                <td><input type="text" name="cont[]"></td>
                                

                                
                            </tr>
                            <tr>

                                
                                <td><input type="text" name="name1[]"></td>
                                <td><input type="text" name="pos61[]"></td>
                                <td><input type="text" name="ass_w_ref[]"></td>
                                <td><input type="text" name="inst[]"></td>
                                <td><input type="text" name="email[]"></td>
                                <td><input type="text" name="cont[]"></td>
                                
                            </tr>
                            <tr>
                                
                                
                                <td><input type="text" name="name1[]"></td>
                                <td><input type="text" name="pos61[]"></td>
                                <td><input type="text" name="ass_w_ref[]"></td>
                                <td><input type="text" name="inst[]"></td>
                                <td><input type="text" name="email[]"></td>
                                <td><input type="text" name="cont[]"></td>
                                
                            </tr>
                            <tr>
                                
                                
                                <td><input type="text" name="name1[]"></td>
                                <td><input type="text" name="pos61[]"></td>
                                <td><input type="text" name="ass_w_ref[]"></td>
                                <td><input type="text" name="inst[]"></td>
                                <td><input type="text" name="email[]"></td>
                                <td><input type="text" name="cont[]"></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                    <input type="submit" id="submi" value="Submit">
                </form>
            </div>