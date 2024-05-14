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
    <form action='./includes/update2.inc.php' method="POST">
        <fieldset>
            <div class="head">
                <h2>2. Educational Qualifications</h2>
            </div>
            <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
            <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>


            <div class="personal-details">
            <h2 style="color: white;" id="p_d">(A) Deatils of PhD*</h2>
            <!-- <form id="personalDetailsForm"> -->
            
                <label for="univ">University:</label>
                <input type="text" id="univ" name="univ" placeholder="univ"required>

                <label for="dept" id="m_n">Department:</label>
                <input type="text" id="dept" name="dept">

                <label for="super">PhD Supervisor:</label>
                <input type="text" id="super" name="super" required>

                <label for="yoj">Year of Joining:</label>
                <input type="text" id="yoj" name="yoj" required>

                
                <label for="doa">Date of award:</label>
                <input type="date" id="doa" name="doa" required>

                <label for="title1">Title of thesis:</label>
                <input type="text" id="title1" name="title1" required>

                <label for="dost"> <p>Date of Successful</p>
                    <p>Thesis:</p></label>
                <input type="date" id="dost" name="dost" required>

        
            <!-- </form> -->
            </div>

            <div class="personal-details">
            <h2 style="color: white;" id="p_d">(B) Academic Details-M.Tech/ME/PG Details* </h2>
            <!-- <form id="personalDetailsForm"> -->
            
                <label for="degree">Degree/Certificate:</label>
                <input type="text" id="degree" name="degree1" placeholder="univ"required>

                <label for="un" >University:</label>
                <input type="text" id="un" name="un">

                <label for="br">Branch/Stream:</label>
                <input type="text" id="br" name="br" required>

                <label for="yoj1">Year of Joining:</label>
                <input type="text" id="yoj1" name="yoj1" required>

                
                <label for="yoc">Year of completion:</label>
                <input type="date" id="yoc" name="yoc" required>

                <label for="dur">Duration(in yrs):</label>
                <input type="text" id="dur" name="dur" required>

                <label for="cgpa"> CGPA:</label>
                <input type="text" id="cgpa" name="cgpa" required>

                <label for="div"> Division/Class:</label>
                <input type="text" id="div" name="div" required>

                
            <!-- </form> -->
            </div>
            <div class="personal-details">
            <h2 style="color: white;" id="p_d">(C) Academic Details-B.Tech/BE/UG Details* </h2>
            <!-- <form id="personalDetailsForm"> -->
            
                <label for="degree">Degree/Certificate:</label>
                <input type="text" id="degree" name="degree2" placeholder="univ"required>

                <label for="un" >University:</label>
                <input type="text" id="un" name="un2">

                <label for="br">Branch/Stream:</label>
                <input type="text" id="br" name="br2" required>

                <label for="yoj1">Year of Joining:</label>
                <input type="text" id="yoj1" name="yoj12" required>

                
                <label for="yoc">Year of completion:</label>
                <input type="date" id="yoc" name="yoc2" required>

                <label for="dur">Duration(in yrs):</label>
                <input type="text" id="dur" name="dur2" required>

                <label for="cgpa"> CGPA:</label>
                <input type="text" id="cgpa" name="cgpa2" required>

                <label for="div"> Division/Class:</label>
                <input type="text" id="div" name="div2" required>

                
            <!-- </form> -->
            </div>
            <div class="school">
            <h2 style="color: white;" id="s_d">(D) Academic Details-School* </h2>
            <!-- <form id="personalDetailsForm"> -->
            
            <table id="myTable">
            <thead>
                <tr>
                <th>10th/12th</th>
                <th>School</th>
                <th>Year of passing</th>
                <th>Percentage</th>
                <th>Division/Class</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><input type="text" name="tenthTwelfth[]" id="tenthTwelfth1"></td>
                <td><input type="text" name="school[]" id="school1"></td>
                <td><input type="text" name="yearPassing[]" id="yearPassing1"></td>
                <td><input type="text" name="percentage[]" id="percentage1"></td>
                <td><input type="text" name="divisionClass[]" id="divisionClass1"></td></tr>
                <tr>
                <td><input type="text" name="tenthTwelfth[]" id="tenthTwelfth2"></td>
                <td><input type="text" name="school[]" id="school2"></td>
                <td><input type="text" name="yearPassing[]" id="yearPassing2"></td>
                <td><input type="text" name="percentage[]" id="percentage2"></td>
                <td><input type="text" name="divisionClass[]" id="divisionClass2"></td></tr>
            </tbody>
            </table>


                
                
            <!-- </form> -->
            </div>

            <div class="addi">
            <h2 style="display:inline-block;color: white;" id="a_d">(E) Additional Qualifications(if any) </h2>
            <button id="addDetailsBtn" type="button">Add Details</button>
            <!-- <form id="personalDetailsForm"> -->
            
                <table id="myTable1">
                    <thead>
                        <tr>
                            <th class="d_c">Degree/Certificate</th>
                            <th>University/Institute</th>
                            
                            <th> Branch/Stream</th>
                            <th>Duration(in yrs)</th>
                            <th>Percenatge/CGPA</th>
                            <th>Division/Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="degree[]"></td>
                            
                            
                            <td><input type="text" name="university[]"></td>
                            <td><input type="text" name="branch[]"></td>
                            <td><input type="text" name="duration[]"></td>
                            <td><input type="text" name="percentage[]"></td>
                            <td><input type="text" name="division[]"></td>
                        </tr>
                        
                    </tbody>
                </table>
            <!-- </form> -->
            <input type="submit" id="submi" value="Submit">
            </div>
        </fieldset>
    </form>     
   
    <script>
        // JavaScript code to handle the "Add Details" button click event
        document.getElementById('addDetailsBtn').addEventListener('click', function() {
            // Get the table body
            var tableBody = document.querySelector('#myTable1 tbody');

            // Create a new row
            var newRow = document.createElement('tr');

            // Populate the row with input fields
            newRow.innerHTML = `
                <td><input type="text" name="degree[]"></td>
                <td><input type="text" name="university[]"></td>
                <td><input type="text" name="branch[]"></td>
                <td><input type="text" name="duration[]"></td>
                <td><input type="text" name="percentage[]"></td>
                <td><input type="text" name="division[]"></td>
            `;

            // Append the new row to the table body
            tableBody.appendChild(newRow);
        });
    </script>
</body>
</html>

