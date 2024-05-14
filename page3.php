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
    <form action="./includes/update3.inc.php" method="POST">
        <fieldset>
            <div class="head">
                <h2>3. Employment Details</h2>
            </div>
            <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
            <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>


            <div class="personal-details">
                <h2 style="color: white;" id="p_d">(A) Present Employment*</h2>
                <!-- <form id="personalDetailsForm"> -->
                   
                    
                    <label for="pos">Position:</label>
                    <input type="text" id="pos" name="posz" required>
                    
                    
                    <label for="org" id="m_n">Organization:</label>
                    <input type="text" name="org" id="orgz">
                    <label for="sta">Staus:</label>
                    <input type="text" id="sta" name="sta" required>
                    
                    <label for="doj"> Date of Joining:</label>
                    <input type="text" id="doj" name="dojz" required>
                
                    <label for="dol">Date of leaving:</label>
                    <input type="text" id="dol" name="dolz" required>
                
                    
            
                    
                    <label for="dur_t"> <p>Duration(in months</p>
                        <p> & years)</p></label>
                    <input type="text" id="dur_t" name="dur_t" required>
            
                    
                <!-- </form> -->
            </div>
            
            <div class="Emp_de">
                <h2 style="color: white;display:inline-block;" id="emp_d">(B) Employment History(After phD, starting with latest) </h2>
                <button id="addDetailsBtn" type="button">Add Details</button>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Position</th>
                                <th>Organization</th>
                                <th>Date of Joining</th>
                                <th>Date of leaving</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                
                                <td><input type="text" name="position[]"></td>
                                <td><input type="text" name="org[]"></td>
                                <td><input type="text" name="d_o_j[]"></td>
                                <td><input type="text" name="d_o_l[]"></td>
                                <td><input type="text" name="duration[]"></td>
                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="position[]"></td>
                                <td><input type="text" name="org[]"></td>
                                <td><input type="text" name="d_o_j[]"></td>
                                <td><input type="text" name="d_o_l[]"></td>
                                <td><input type="text" name="duration[]"></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
            
                    <input type="text" style="width: 100%; height: 50px; margin-bottom: 5px;" value="Experience: Minimum 6 year's experience of which at least 3 years should be at the level of Assistant Professor Grade I/II  Senior Scientific Officer/Senior Design Engineer." readonly >
                    <label for="yes-no">Select Yes or No:</label>
                    <select id="yes-no" name="yes-no">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                  
                
                    
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <h2 style="color: white;display:inline-block;" id="emp_d">(C) Teaching Experience(After phD) </h2>
                <button id="addDetailsBtn2" type="button">Add Details</button>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable11">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Position</th>
                                <th>Employer</th>
                                <th>Course Taught</th>
                                <th>UG/PG</th>
                                <th>Duration(in years)</th>
                                <th>No. of students</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="pos[]"></td>
                                <td><input type="text" name="empl[]"></td>
                                <td><input type="text" name="cou_tau[]"></td>
                                <td><input type="text" name="UG[]"></td>
                                <td><input type="text" name="Duration[]"></td>
                                <td><input type="text" name="No_s[]"></td>
                               

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                
                                <td><input type="text" name="pos[]"></td>
                                <td><input type="text" name="empl[]"></td>
                                <td><input type="text" name="cou_tau[]"></td>
                                <td><input type="text" name="UG[]"></td>
                                <td><input type="text" name="Duration[]"></td>
                                <td><input type="text" name="No_s[]"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                
                                <td><input type="text" name="pos[]"></td>
                                <td><input type="text" name="empl[]"></td>
                                <td><input type="text" name="cou_tau[]"></td>
                                <td><input type="text" name="UG[]"></td>
                                <td><input type="text" name="Duration[]"></td>
                                <td><input type="text" name="No_s[]"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>

                    <div class="Emp_de">
                        <h2 style="color: white;display:inline-block;" id="emp_d">(D) Research Experience(Post phD, including Post Doctoral) </h2>
                        <button id="addDetailsBtn3" type="button">Add Details</button>
                        <!-- <form id="personalDetailsForm"> -->
                           
                            <table id="myTable2">
                                <thead>
                                    <tr>
                                        <th >S. No.</th>
                                        <th>Position</th>
                                        <th>Institute</th>
                                        <th>Supervisor</th>
                                        <th>Date of joining</th>
                                        <th>Date of leaving</th>
                                        <th>Duration(in years)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td><input type="text" name="posn[]"></td>
                                        <td><input type="text" name="insti[]"></td>
                                        <td><input type="text" name="superv[]"></td>
                                        <td><input type="text" name="doj[]"></td>
                                        <td><input type="text" name="dol[]"></td>
                                        <td><input type="text" name="duratio[]"></td>
                                       
        
                                        
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><input type="text" name="posn[]"></td>
                                        <td><input type="text" name="insti[]"></td>
                                        <td><input type="text" name="superv[]"></td>
                                        <td><input type="text" name="doj[]"></td>
                                        <td><input type="text" name="dol[]"></td>
                                        <td><input type="text" name="duratio[]"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" name="posn[]"></td>
                                        <td><input type="text" name="insti[]"></td>
                                        <td><input type="text" name="superv[]"></td>
                                        <td><input type="text" name="doj[]"></td>
                                        <td><input type="text" name="dol[]"></td>
                                        <td><input type="text" name="duratio[]"></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        <!-- </form> -->
                    </div>

                            <div class="Emp_de">
                                <h2 style="color: white;display:inline-block;" id="emp_d">(E) Industrial Experience</h2>
                                <!-- <form id="personalDetailsForm"> -->
                                <button id="addDetailsBtn4" type="button">Add Details</button>
                                   
                                    <table id="myTable3">
                                        <thead>
                                            <tr>
                                                <th >S. No.</th>
                                                <th>Organization</th>
                                                <th>Work profile</th>
                                                <th>Date of joining</th>
                                                <th>Date of leaving</th>
                                                <th>Duration(in years)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                               
                                        <td><input type="text" name="instit[]"></td>
                                        <td><input type="text" name="work_p[]"></td>
                                        <td><input type="text" name="doj1[]"></td>
                                        <td><input type="text" name="dol1[]"></td>
                                        <td><input type="text" name="duratio1[]"></td>
                                               
                
                                                
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td><input type="text" name="instit[]"></td>
                                        <td><input type="text" name="work_p[]"></td>
                                        <td><input type="text" name="doj1[]"></td>
                                        <td><input type="text" name="dol1[]"></td>
                                        <td><input type="text" name="duratio1[]"></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td><input type="text" name="instit[]"></td>
                                                <td><input type="text" name="work_p[]"></td>
                                                <td><input type="text" name="doj1[]"></td>
                                                <td><input type="text" name="dol1[]"></td>
                                                <td><input type="text" name="duratio1[]"></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td><input type="text" name="instit[]"></td>
                                                <td><input type="text" name="work_p[]"></td>
                                                <td><input type="text" name="doj1[]"></td>
                                                <td><input type="text" name="dol1[]"></td>
                                                <td><input type="text" name="duratio1[]"></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td><input type="text" name="instit[]"></td>
                                                <td><input type="text" name="work_p[]"></td>
                                                <td><input type="text" name="doj1[]"></td>
                                                <td><input type="text" name="dol1[]"></td>
                                                <td><input type="text" name="duratio1[]"></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                <!-- </form> -->
                            </div>
                            <div class="Emp_de">
                                <div class="head">
                                    <h2>4. Area(s) of Specialization and Current Area(s) of Research</h2>
                                </div>
                                <!-- <form id="personalDetailsForm"> -->

                                    <div class="container">
                                        <div class="box">
                                            <h2 id="gh">Areas of Specialization</h2>
                                            <textarea class="text-box" name="txt1" ></textarea>
                                            </div>
                                        <div class="box">
                                            <h2 id="gh">Current Area of Research</h2>
                                            <textarea class="text-box" name="txt2" ></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" id="submi" value="Submit">
                                </div>
                  </fieldset>
    </form>
    <script>
        // JavaScript code to handle the "Add Details" button click event
        document.getElementById('addDetailsBtn').addEventListener('click', function() {
            // Get the table body
            var tableBody = document.querySelector('#myTable tbody');

            // Create a new row
            var newRow = document.createElement('tr');

            // Increment the serial number
            var rowCount = tableBody.rows.length + 1;

            // Populate the row with input fields
            newRow.innerHTML = `
                <td>${rowCount}.</td>
                <td><input type="text" name="position[]"></td>
                <td><input type="text" name="org[]"></td>
                <td><input type="text" name="d_o_j[]"></td>
                <td><input type="text" name="d_o_l[]"></td>
                <td><input type="text" name="duration[]"></td>
            `;

            // Append the new row to the table body
            tableBody.appendChild(newRow);
        });
    </script>
    <script>
    document.getElementById('addDetailsBtn2').addEventListener('click', function() {
    // Get the table body
    var tableBody = document.querySelector('#myTable11 tbody');

    // Create a new row
    var newRow = document.createElement('tr');

    // Populate the row with input fields
    newRow.innerHTML = `
        <td>${tableBody.rows.length + 1}.</td>
        <td><input type="text" name="pos[]"></td>
        <td><input type="text" name="empl[]"></td>
        <td><input type="text" name="cou_tau[]"></td>
        <td><input type="text" name="UG[]"></td>
        <td><input type="text" name="Duration[]"></td>
        <td><input type="text" name="No_s[]"></td>
    `;

    // Append the new row to the table body
    tableBody.appendChild(newRow);
});</script>
<script>
    document.getElementById('addDetailsBtn3').addEventListener('click', function() {
    // Get the table body
    var tableBody = document.querySelector('#myTable2 tbody');

    // Create a new row
    var newRow = document.createElement('tr');

    // Populate the row with input fields
    newRow.innerHTML = `
        <td>${tableBody.rows.length + 1}.</td>
        <td><input type="text" name="posn[]"></td>
        <td><input type="text" name="insti[]"></td>
        <td><input type="text" name="superv[]"></td>
        <td><input type="text" name="doj[]"></td>
        <td><input type="text" name="dol[]"></td>
        <td><input type="text" name="duratio[]"></td>
    `;

    // Append the new row to the table body
    tableBody.appendChild(newRow);
});

</script>
<script>
    document.getElementById('addDetailsBtn4').addEventListener('click', function() {
    // Get the table body
    var tableBody = document.querySelector('#myTable3 tbody');

    // Create a new row
    var newRow = document.createElement('tr');

    // Populate the row with input fields
    newRow.innerHTML = `
        <td>${tableBody.rows.length + 1}.</td>
        <td><input type="text" name="instit[]"></td>
        <td><input type="text" name="work_p[]"></td>
        <td><input type="text" name="doj1[]"></td>
        <td><input type="text" name="dol1[]"></td>
        <td><input type="text" name="duratio1[]"></td>
    `;

    // Append the new row to the table body
    tableBody.appendChild(newRow);
});

</script>

    </body>