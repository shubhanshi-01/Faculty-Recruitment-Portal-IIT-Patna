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
    <form action='./includes/update4.inc.php' method="POST">
        <fieldset>
            
            <a href='./includes/logout.inc.php'><input type="button" id="logout" value="Logout"></a>
            <a href='./change_password.php'><input type="button" id="forgot" value="Change Password"></a>
            <div class="personal-details">
                <div class="head">
                    <h2>5. Summary of Publications*</h2>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                   
                    
                    <label for="pos">Number of International Journal Parers:</label>
                    <input type="text" id="tb1" name="tb1"required>
                    
                    
                    <label for="org" id="m_n">Number of national Journal papers:</label>
                    <input type="text" id="tb2" name="tb2">
                    <label for="sta">Number of International ConferenceParers</label>
                    <input type="text" id="tb3" name="tb3" required>
                    
                    <label for="doj"> Number of national Conference Parers:</label>
                    <input type="text" id="tb4" name="tb4" required>
                
                    <label for="dol">Number of Patent(s) [Filed,Published,Granted]:</label>
                    <input type="text" id="tb5" name="tb5" required>

                    <label for="dol">Number of Book(s):</label>
                    <input type="text" id="tb6" name="tb6" required>
                    <label for="dol">Number of Book Chapter(s):</label>
                    <input type="text" id="tb7" name="tb7" required>
                
                    
            
                   
            
                    
                <!-- </form> -->
            </div>

            <div class="Emp_de">
                <div class="head">
                    <h2>6. List of 10 Best Publications(Journal/Conference)*</h2>
                    <button id="addDetailsBtn" type="button">Add Details</button>
                </div>
                <!-- <form id="personalDetailsForm"> -->
                   
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Name of journal/Conference</th>
                                <th>Year,Vol.,Page</th>
                                <th>Impact factor</th>
                                <th>DOI</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="auth[]"></td>
                                <td><input type="text" name="tit[]"></td>
                                <td><input type="text" name="n_o_j_c[]"></td>
                                <td><input type="text" name="y_v_p[]"></td>
                                <td><input type="text" name="imp_f[]"></td>
                                <td><input type="text" name="d_o_i[]"></td>
                                <td><input type="text" name="st[]"></td>
                               

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="auth[]"></td>
                                <td><input type="text" name="tit[]"></td>
                                <td><input type="text" name="n_o_j_c[]"></td>
                                <td><input type="text" name="y_v_p[]"></td>
                                <td><input type="text" name="imp_f[]"></td>
                                <td><input type="text" name="d_o_i[]"></td>
                                <td><input type="text" name="st[]"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><input type="text" name="auth[]"></td>
                                <td><input type="text" name="tit[]"></td>
                                <td><input type="text" name="n_o_j_c[]"></td>
                                <td><input type="text" name="y_v_p[]"></td>
                                <td><input type="text" name="imp_f[]"></td>
                                <td><input type="text" name="d_o_i[]"></td>
                                <td><input type="text" name="st[]"></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><input type="text" name="auth[]"></td>
                                <td><input type="text" name="tit[]"></td>
                                <td><input type="text" name="n_o_j_c[]"></td>
                                <td><input type="text" name="y_v_p[]"></td>
                                <td><input type="text" name="imp_f[]"></td>
                                <td><input type="text" name="d_o_i[]"></td>
                                <td><input type="text" name="st[]"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            
            <div class="Emp_de">
                <div class="head">
                    <h2>7. List of Patent(s),Book(s),Book Chapter(s)*</h2>
                    
                </div>
                <h2 style="color: white;display:inline-block;" id="p_d">(A) Patent(s)*</h2>
                <button id="addDetailsBtn2" type="button">Add Details</button>
                <!-- <form id="personalDetailsForm"> -->
                    
                    <table id="myTable11">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Inventor</th>
                                <th>Title Of Patent</th>
                                <th>Country of Patent</th>
                                <th>Patent Number</th>
                                <th>Date of Filing</th>
                                <th>Date of Published</th>
                                
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><input type="text" name="inven[]"></td>
                                <td><input type="text" name="title_pat[]"></td>
                                <td><input type="text" name="count_pat[]"></td>
                                <td><input type="text" name="Pat_no"></td>
                                <td><input type="text" name="d_f[]"></td>
                                <td><input type="text" name="d_p[]"></td>
                                <td><input type="text" name="sattus[]"></td>
                               

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><input type="text" name="inven[]"></td>
                                <td><input type="text" name="title_pat[]"></td>
                                <td><input type="text" name="count_pat[]"></td>
                                <td><input type="text" name="Pat_no"></td>
                                <td><input type="text" name="d_f[]"></td>
                                <td><input type="text" name="d_p[]"></td>
                                <td><input type="text" name="sattus[]"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><input type="text" name="inven[]"></td>
                                <td><input type="text" name="title_pat[]"></td>
                                <td><input type="text" name="count_pat[]"></td>
                                <td><input type="text" name="Pat_no"></td>
                                <td><input type="text" name="d_f[]"></td>
                                <td><input type="text" name="d_p[]"></td>
                                <td><input type="text" name="sattus[]"></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <h2 style="color: white;display:inline-block;" id="p_d">(B) Book(s)/Book Chapter(s)*</h2>
                <button id="addDetailsBtn3" type="button">Add Details</button>
                <!-- <form id="personalDetailsForm"> -->
                    
                    <table id="myTable2">
                        <thead>
                            <tr>
                                <th >S. No.</th>
                                <th>Type</th>
                                <th>Author</th>
                                <th>Title Of Book</th>
                                <th>Year of Publication</th>
                                
                                <th>ISBN</th>
                                
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <select id="sh2" name="typ">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                <td><input type="text" name="author[]"></td>
                                <td><input type="text" name="title[]"></td>
                                <td><input type="text" name="y_o_p[]"></td>
                                
                                <td><input type="text" name="isbn[]"></td>
                               

                                
                            </tr>
                            <tr>
                                <td>2.</td>
                                
                                <td>
                                    <select id="sh2" name="typ">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                  <td><input type="text" name="author[]"></td>
                                  <td><input type="text" name="title[]"></td>
                                  <td><input type="text" name="y_o_p[]"></td>
                                  
                                  <td><input type="text" name="isbn[]"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>
                                    <select id="sh2" name="typ">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                
                                  <td><input type="text" name="author[]"></td>
                                  <td><input type="text" name="title[]"></td>
                                  <td><input type="text" name="y_o_p[]"></td>
                                  
                                  <td><input type="text" name="isbn[]"></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                <!-- </form> -->
            </div>
            <div class="Emp_de">
                <div class="head">
                    <h2>8. Google Scholar Link*</h2>
                </div>
                <!-- <form id="personalDetailsForm"> -->

                    
                    <label for="dol">Google Scholar Link:</label>
                    <input type="text" id="tb10" name="tb10" required>
                    
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
        <td><input type="text" name="auth[]"></td>
        <td><input type="text" name="tit[]"></td>
        <td><input type="text" name="n_o_j_c[]"></td>
        <td><input type="text" name="y_v_p[]"></td>
        <td><input type="text" name="imp_f[]"></td>
        <td><input type="text" name="d_o_i[]"></td>
        <td><input type="text" name="st[]"></td>
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
        <td><input type="text" name="inven[]"></td>
        <td><input type="text" name="titl_pat[]"></td>
        <td><input type="text" name="count_pat[]"></td>
        <td><input type="text" name="Pat_no"></td>
        <td><input type="text" name="d_f[]"></td>
        <td><input type="text" name="d_p[]"></td>
        <td><input type="text" name="sattus[]"></td>
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
        <td>
                                    <select id="sh2" name="typ">
                                      <option value="book">Book</option>
                                      <option value="book_chapters">Book Chapters</option>
                                    </select>
                                  </td>
                                <td><input type="text" name="author[]"></td>
                                <td><input type="text" name="title[]"></td>
                                <td><input type="text" name="y_o_p[]"></td>
                                
                                <td><input type="text" name="isbn[]"></td>
    `;

    // Append the new row to the table body
    tableBody.appendChild(newRow);
});

</script>
