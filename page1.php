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
    <form action="includes/update_personal_details.inc.php" method="POST" >
        <fieldset>
            <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
            <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
           <div class="class1">
            
            <div class="advertisement-details">
                
                  
                    
                    <label for="advertisementNumber">Advertisement Number:</label>
                    <input type="text" id="advertisementNumber" name="advertisementNumber" placeholder="Advertisement Number" required>
            
                    <label for="dateOfApplication">Date of Application:</label>
                    <input type="date" id="dob1" name="dob1" required>
            
                    <label for="applicationNumber">Application Number:</label>
                    <input type="text" id="applicationNumber" name="applicationNumber" placeholder="Application Number" required>
            
                    <label for="postAppliedFor">Post Applied For:</label>
                    <input type="text" id="postAppliedFor" name="postAppliedFor" placeholder="Post Applied For" required>
            
                    <label for="departmentSchool">Department/School:</label>
                    <input type="text" id="departmentSchool" name="departmentSchool" placeholder="Department/School" required>
                
                
            </div>
            <div class="photo-section">
               
                <label for="photoUpload" id="upload">Update/Upload Photo:</label>
                <img src="./images/profile.png" >
                <input type="file" id="photoUpload" name="photoUpload" accept="image/*" class="file-input"><br>
                
            </div>
        </div>
            <div class="personal-details">
                <h2 style="color: white;" id="p_d">Personal Details</h2>
                <form id="personalDetailsForm">
                    <!-- Your form inputs here -->
               
                    
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
            
                    <label for="middleName" id="m_n">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName">
            
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
            
                    <label for="nationality">Nationality:</label>
                    <input type="text" id="nationality" name="nationality" required>
            
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
            
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
            
                    <label for="maritalStatus" >Marital Status:</label>
                    <select id="maritalStatus" name="maritalStatus" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
            
                    <label for="category" class="r">Category:</label>
                    <select id="category" name="category" required>
                        <option value="general">General</option>
                        <option value="obc">OBC</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                    </select>
            
                    <label for="idProof">ID Proof:</label>
                    <input type="text" id="idProof" name="idproof" required>
            
                    <label for="updateIdProof">Update ID Proof:</label>
                    <!-- <input type="file" id="updateIdProof" name="updateIdProof" accept=".pdf, .doc, .docx"> -->
                    <input type="file" id="updateIdProof" name="updateIdProof" accept=".pdf"> <!-- Input field for uploading PDF files -->
                    <button type="button" id="viewUploadedFile">View Uploaded PDF</button> <!-- Button to trigger viewing the uploaded PDF -->
                    <div id="pdfDisplay"></div> <!-- Display area for the PDF -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                    <!-- Include external JavaScript file -->
                    <script src="a.js">
                    </script>

            
                    <label for="fathersName">Father's Name:</label>
                    <input type="text" id="fathersName" name="fathersName" required>
                    
                </form>
            </div>
                <div class="address-container">
                    <div class="correspondence-address">
                        <h2 style="color: white;" id="corr_add">Correspondence Address</h2>
                        
                            
                            <input type="text" id="street" name="streetC" placeholder="Street" required>
                    
                           
                            <input type="text" id="city" name="cityC" placeholder="City" required>
                    
                            
                            <input type="text" id="state" name="stateC" placeholder="State" required>
                    
                            
                            <input type="text" id="country" name="countryC" placeholder="Country" required>
                    
                            
                            <input type="text" id="postalCode" name="postalCodeC" placeholder="Postal Code" required>
                        
                    </div>
                    <div class="permanent-address">
                        <h2 style="color: white;" id="per_add">Permanent Address</h2>
                        
                            <input type="text" id="street" name="streetP" placeholder="Street" required>
                    
                           
                            <input type="text" id="city" name="cityP" placeholder="City" required>
                    
                            
                            <input type="text" id="state" name="stateP" placeholder="State" required>
                    
                            
                            <input type="text" id="country" name="countryP" placeholder="Country" required>
                    
                            
                            <input type="text" id="postalCode" name="postalCodeP" placeholder="Postal Code" required>
                        
                    </div>
                </div>

                    <div class="contact-details"><br>
                        
                        <!-- <form id="contactDetailsForm"> -->
                            <label for="mobileNumber">Mobile:</label>
                            <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Mobile" required>
                    
                            <label for="alternateMobile">Alternate Mobile:</label>
                            <input type="text" id="alternateMobile" name="alternateMobile" placeholder="Alternate Mobile">
                    
                            <label for="landline">Landline:</label>
                            <input type="text" id="landline" name="landline" placeholder="Landline Number">
                    
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" placeholder="Email" required>
                    
                            <label for="alternateEmail">Other mail:</label>
                            <input type="text" id="alternateEmail" name="alternateEmail" placeholder="Alternate Email">
                        <!-- </form> -->
                        
                        
                    </div>
                    <input type="submit" id="submi" value="Submit">
                    
                    
                    
        </fieldset>
    </form>
</body>
</html>
