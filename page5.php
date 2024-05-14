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
    <form action="./includes/update5.inc.php" method="POST">
        <fieldset>
            
        <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
        <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
            <div class="Emp_de">
                <div class="head">
                    <h2>9. Membership of Professional Societies*</h2>
                    <button id="addDetailsBtn1" type="button">Add Details</button>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Name of the Professional Society</th>
                                <th>Membership Status(Lifetime/Annual)</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="n_o_prof[]"></td>
                                <td><input type="text" name="staus_mem[]"></td>
                                

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="n_o_prof[]"></td>
                                <td><input type="text" name="staus_mem[]"></td>
                                
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><input type="text" name="n_o_prof[]"></td>
                                <td><input type="text" name="staus_mem[]"></td>
                                
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><input type="text" name="n_o_prof[]"></td>
                                <td><input type="text" name="staus_mem[]"></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <div class="head">
                    <h2>10. Professional Training</h2>
                    <button id="addDetailsBtn2" type="button">Add Details</button>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable11">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Type of Training Received</th>
                                <th>Orgaization</th>
                                <th>Year</th>
                                <th>Duration(in years and months)</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="typ_trai[]"></td>
                                <td><input type="text" name="orga[]"></td>
                                <td><input type="text" name="yea[]"></td>
                                <td><input type="text" name="du[]"></td>
                                

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="typ_trai[]"></td>
                                <td><input type="text" name="orga[]"></td>
                                <td><input type="text" name="yea[]"></td>
                                <td><input type="text" name="du[]"></td>
                                
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><input type="text" name="typ_trai[]"></td>
                                <td><input type="text" name="orga[]"></td>
                                <td><input type="text" name="yea[]"></td>
                                <td><input type="text" name="du[]"></td>
                                
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><input type="text" name="typ_trai[]"></td>
                                <td><input type="text" name="orga[]"></td>
                                <td><input type="text" name="yea[]"></td>
                                <td><input type="text" name="du[]"></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <div class="head">
                    <h2>11. Award(s) and Recognition(s)</h2>
                    <button id="addDetailsBtn3" type="button">Add Details</button>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable2">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Name of Award</th>
                                <th>Awarded by</th>
                                <th>Year</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="n_o_aw[]"></td>
                                <td><input type="text" name="awraded_by[]"></td>
                                <td><input type="text" name="year[]"></td>
                               
                                

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="n_o_aw[]"></td>
                                <td><input type="text" name="awraded_by[]"></td>
                                <td><input type="text" name="year[]"></td>
                                
                                
                            </tr>

                                
                           
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <div class="head">
                    <h2>12. Sponsored Project(s)/Consultancy Deatils</h2>
                    <button id="addDetailsBtn4" type="button">Add Details</button>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                    
                    <table id="myTable3">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Type</th>
                                <th>Organization/Sponsoring agency</th>
                                
                                <th>Title Of Project</th>
                                <th>Sanctioned amount(in Rs.)</th>
                                <th>Period</th>
                                <th>Role</th>
                                
                                
                                <th>Status</th>
                                
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">Sponsored Projects</option>
                                      <option value="book_chapters">Consultancy Projects</option>
                                    </select>
                                  </td>
                                <td><input type="text" name="o_c_pro[]"></td>
                                <td><input type="text" name="T_o_proje[]"></td>
                                <td><input type="text" name="amou[]"></td>
                                
                                <td><input type="text" name="peri[]"></td>
                                <td><input type="text" name="rol[]"></td>
                                <td><input type="text" name="status2[]"></td>
                               

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                
                                <td>
                                    <select id="sh2">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                  <td><input type="text" name="o_c_pro[]"></td>
                                <td><input type="text" name="T_o_proje[]"></td>
                                <td><input type="text" name="amou[]"></td>
                                
                                <td><input type="text" name="peri[]"></td>
                                <td><input type="text" name="rol[]"></td>
                                <td><input type="text" name="status2[]"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                
                                  <td><input type="text" name="o_c_pro[]"></td>
                                  <td><input type="text" name="T_o_proje[]"></td>
                                  <td><input type="text" name="amou[]"></td>
                                  
                                  <td><input type="text" name="peri[]"></td>
                                  <td><input type="text" name="rol[]"></td>
                                  <td><input type="text" name="status2[]"></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <input type="submit" id="submi" value="Submit">
                <!-- </form> -->
            </div>
            </fieldset>
            </form>
            <script>
                document.getElementById('addDetailsBtn1').addEventListener('click', function() {
                // Get the table body
                var tableBody = document.querySelector('#myTable tbody');

                // Create a new row
                var newRow = document.createElement('tr');

                // Populate the row with input fields
                newRow.innerHTML = `
                    <td>${tableBody.rows.length + 1}.</td>
                    <td><input type="text" name="n_o_prof[]"></td>
                                <td><input type="text" name="staus_mem[]"></td>
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
                    <td><input type="text" name="typ_trai[]"></td>
                    <td><input type="text" name="orga[]"></td>
                    <td><input type="text" name="yea[]"></td>
                    <td><input type="text" name="du[]"></td>
                `;

                // Append the new row to the table body
                tableBody.appendChild(newRow);
            });

            </script>
            <script>
                document.getElementById('addDetailsBtn3').addEventListener('click', function() {
                // Get the table body
                var tableBody = document.querySelector('#myTable2 tbody');

                // Create a new row
                var newRow = document.createElement('tr');

                // Populate the row with input fields
                newRow.innerHTML = `
                    <td>${tableBody.rows.length + 1}.</td>
                    <td><input type="text" name="n_o_aw[]"></td>
                    <td><input type="text" name="awraded_by[]"></td>
                    <td><input type="text" name="year[]"></td>
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
                    <td>
                    <select id="sh2">
                            <option value="book">Sponsored Projects</option>
                            <option value="book_chapters">Consultancy Projects</option>
                        </select>
                    </td>
                    <td><input type="text" name="o_c_pro[]"></td>
                    <td><input type="text" name="T_o_proje[]"></td>
                    <td><input type="text" name="amou[]"></td>
                    
                    <td><input type="text" name="peri[]"></td>
                    <td><input type="text" name="rol[]"></td>
                    <td><input type="text" name="status2[]"></td>
                `;

                // Append the new row to the table body
                tableBody.appendChild(newRow);
            });

            </script>            

