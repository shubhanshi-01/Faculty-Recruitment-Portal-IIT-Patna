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
    
    <form action="./includes/update6.inc.php" method="POST">
        <fieldset>
            
        <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
        <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
            <div class="head">
                <h2>13. Research Supervision:</h2>
                <button id="addDetailsBtn" type="button">Add Details</button>
                
            </div>
            <div class="Emp_de">
               
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable">
                        <thead>
                           
                            <tr>
                                <th >S. No.</th>
                                <th >Type</th>

                                <th>Name of Student/Scholar</th>
                                <th >Title of Thesis</th>
                                <th >Role</th>
                                <th >Ongoing/Completed</th>
                                
                                <th>Ongoing Since/Year of Completion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">PhD Thsis Supervision</option>
                                      <option value="book_chapters">M.Tech/ME/Master's</option>
                                      <option value="book_chapters">B.Tech/BE/Bachelor's</option>
                                    </select>
                                  </td>
                                <td><input type="text" name="Name_of_stu[]"></td>
                                <td><input type="text" name="Title_of_thesis[]"></td>
                                <td><input type="text" name="role2[]"></td>
                                <td><input type="text" name="status4[]"></td>
                                <td><input type="text" name="y_o_comp[]"></td>
                                

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">PhD Thsis Supervision</option>
                                      <option value="book_chapters">M.Tech/ME/Master's</option>
                                      <option value="book_chapters">B.Tech/BE/Bachelor's</option>
                                    </select>
                                  </td>
                                  <td><input type="text" name="Name_of_stu[]"></td>
                                  <td><input type="text" name="Title_of_thesis[]"></td>
                                  <td><input type="text" name="role2[]"></td>
                                  <td><input type="text" name="status4[]"></td>
                                  <td><input type="text" name="y_o_comp[]"></td>
                                
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">PhD Thsis Supervision</option>
                                      <option value="book_chapters">M.Tech/ME/Master's</option>
                                      <option value="book_chapters">B.Tech/BE/Bachelor's</option>
                                    </select>
                                  </td>
                                  <td><input type="text" name="Name_of_stu[]"></td>
                                  <td><input type="text" name="Title_of_thesis[]"></td>
                                  <td><input type="text" name="role2[]"></td>
                                  <td><input type="text" name="status4[]"></td>
                                  <td><input type="text" name="y_o_comp[]"></td>
                                
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>
                                    <select id="sh2">
                                      <option value="book">PhD Thsis Supervision</option>
                                      <option value="book_chapters">M.Tech/ME/Master's</option>
                                      <option value="book_chapters">B.Tech/BE/Bachelor's</option>
                                    </select>
                                  </td>
                                  <td><input type="text" name="Name_of_stu[]"></td>
                                  <td><input type="text" name="Title_of_thesis[]"></td>
                                  <td><input type="text" name="role2[]"></td>
                                  <td><input type="text" name="status4[]"></td>
                                  <td><input type="text" name="y_o_comp[]"></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>

            <div class="Emp_de">
               
                <!-- <form id="personalDetailsForm"> -->
                   <h3 style="color:yellow;">14. Significant Research Contributions and Future Plans (not more than 500 words)</h3>
                   <h4 style="color: white;">(Please provide a Research Statement describing your research plans and one or two specific research projects to be conducted at IIT Patna in 2-3 years time frame)
                </h4>
                   <textarea class="text-box" ></textarea>
                   
                       <h3 style="color:yellow;">15. Significant Teaching Contributions and Future Plans (not more than 500 words)</h3>
                       <h4 style="color: white;">(Please list UG/PG courses that you would like to develop and/or teach at IIT Patna)
                    </h4>
                       <textarea class="text-box" ></textarea>
                       
                           <h3 style="color:yellow;">16. Professional Service: Editorship/Reviewership (not more than 500 words)</h3>
                           
                           <textarea class="text-box" ></textarea>
                           <h3 style="color:yellow;">17. Detailed List of Journal Publications (not more than 500 words)</h3>
                       <h4 style="color: white;">(Including Sr. No., Author's Names, Paper Title, Volume, Issue, Year, Page Nos., Impact Factor (if any), DOI, Status[Published/Accepted] )
                    </h4>
                       <textarea class="text-box" ></textarea>
                       <h3 style="color:yellow;">18. Detailed List of Conference Publications (not more than 500 words)</h3>
                       <h4 style="color: white;">(Including Sr. No., Author's Names, Paper Title, Name of the conference, Year, Page Nos., DOI [If any])
                    </h4>
                       <textarea class="text-box" ></textarea>
                           
                           </div>
                           <input type="submit" id="submi" value="Submit">
                           </fieldset>
                        </form>
                        <script>
                document.getElementById('addDetailsBtn').addEventListener('click', function() {
                // Get the table body
                var tableBody = document.querySelector('#myTable tbody');

                // Create a new row
                var newRow = document.createElement('tr');

                // Populate the row with input fields
                newRow.innerHTML = `
                    <td>${tableBody.rows.length + 1}.</td>
                    <td>
                                    <select id="sh2">
                                      <option value="book">PhD Thsis Supervision</option>
                                      <option value="book_chapters">M.Tech/ME/Master's</option>
                                      <option value="book_chapters">B.Tech/BE/Bachelor's</option>
                                    </select>
                                  </td>
                                <td><input type="text" name="Name_of_stu[]"></td>
                                <td><input type="text" name="Title_of_thesis[]"></td>
                                <td><input type="text" name="role2[]"></td>
                                <td><input type="text" name="status4[]"></td>
                                <td><input type="text" name="y_o_comp[]"></td>
                `;

                // Append the new row to the table body
                tableBody.appendChild(newRow);
            });

            </script>