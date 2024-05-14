<?php
require_once('dbh.inc.php');
require_once('session_start.inc.php');
require_once('../tcpdf.php');

// Extend TCPDF to create custom header and footer
class MYPDF extends TCPDF {
    // Page header
    public function Header() {
        // Set font
        $this->SetFont('helvetica', '', 10);
        // Title
        $this->Cell(0, 10, 'Indian Institute of Technology ,Patna', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        // Line break
        $this->Ln(10);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
try{
// Create new PDF document
$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Indian Institute Of Technology, Patna');
$pdf->SetTitle('IIT Patna');
$pdf->SetSubject('IIT Patna');
$pdf->SetKeywords('TCPDF, PDF, CV, curriculum vitae');

// Set default header data
$pdf->SetHeaderData('', 0, 'IIT Patna', '');

// Set header and footer fonts
$pdf->setHeaderFont(Array('helvetica', '', 12));
$pdf->setFooterFont(Array('helvetica', '', 8));

// Set margins
$pdf->SetMargins(15, 25, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();
$base_url = 'http://localhost/DBMS/includes';
// Add a download link within the PDF
// Add a clickable link within the PDF
$pdf->SetFont('helvetica', '', 10); // Set font to Helvetica, size 10
$pdf->Cell(0, 10, 'Click here to download the PDF:', 0, 1, 'C');
$pdf->Cell(0, 10, 'Download PDF', 0, 1, 'C', 0, $base_url . '/download.php');


//$pdf->Write(0, 'Click here to download the PDF:', $base_url . '/download.php'); // Write text with link


// Set some content to display
$content = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight:bold;
        }
        
      
    </style>
</head>
<body>';

// Check if the session variable is set
if (isset($_SESSION["form1_data"])) {
    // Access the data from the session variable
    $form1_data = $_SESSION["form1_data"];

    // Access individual fields from the session data
    $advertisementNumber = $form1_data["advertisementNumber"];
    $dob1 = $form1_data["dob1"];
    $applicationNumber = $form1_data["applicationNumber"];
    $last_name = $form1_data["last_name"];
    $middle_name = $form1_data["middle_name"];
    $first_name = $form1_data["first_name"];
    $postAppliedFor = $form1_data["postAppliedFor"];
    $departmentSchool = $form1_data["departmentSchool"];
    $nationality = $form1_data["nationality"];
    $dob = $form1_data["dob"];
    $gender = $form1_data["gender"];
    $maritalStatus = $form1_data["maritalStatus"];
    $category = $form1_data["category"];
    $idproof = $form1_data["idproof"];
    $father_name = $form1_data["father_name"];
    $streetC = $form1_data["streetC"];
    $cityC = $form1_data["cityC"];
    $stateC = $form1_data["stateC"];
    $countryC = $form1_data["countryC"];
    $postalCodeC = $form1_data["postalCodeC"];
    $streetP = $form1_data["streetP"];
    $cityP = $form1_data["cityP"];
    $stateP = $form1_data["stateP"];
    $countryP = $form1_data["countryP"];
    $postalCodeP = $form1_data["postalCodeP"];
    $mobileNumber = $form1_data["mobileNumber"];
    $alternateMobile = $form1_data["alternateMobile"];
    $landline = $form1_data["landline"];
    $email = $form1_data["email"];
    $alternateEmail = $form1_data["alternateEmail"];

    // Include the data in your HTML content
    $content .= '
    <h2 style="color:red;">'. $first_name.' '. $last_name . '</h2>
    <br>
    <p><strong>Advertisement Number:</strong> ' . $advertisementNumber . '</p>
    <p><strong>Date of Application:</strong> ' . $dob1 . '</p>
    <p><strong>Post Applied for:</strong> ' . $postAppliedFor . '</p>
    <p><strong>Department:</strong> ' . $departmentSchool . '</p>
    <p><strong>Application Number:</strong> ' . $applicationNumber . '</p>
    <!-- Include other fields here -->
    ';
} 
// Continue adding the rest of your HTML content
$content .= '

    <h2 style="color:red;">1. Personal Details</h2>
    <table>
        <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        </tr>
        <tr>
        <td>'.$first_name.'</td>
        <td>'.$middle_name.'</td>
        <td>'.$last_name.'</td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table>
      <tr>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Marital Status</th>
        <th>Category</th>
        <th>Nationality</th>
        <th>ID Proof</th>
        <th>Father Name</th>
      </tr>
      <tr>
        <td>'.$dob.'</td>
        <td>'.$gender.'</td>
        <td>'.$maritalStatus.'</td>
        <td>'.$category.'</td>
        <td>'.$nationality.'</td>
        <td>'.$idproof.'</td>
        <td>'.$father_name.'</td>
      </tr>
    </table>
  <br>
  <br>
  <br>
    <table>
        <tr>
        <th>Current Address</th>
        <th>Permanent Address</th>
        
        </tr>
        <tr>
        
        <td>'.$streetC.'</td>
        <td>'.$streetP.'</td>
        
        </tr>
        <tr>
        
            <td>'.$cityC.'</td>
            <td>'.$cityP.'</td>
            
        </tr>
        <tr>
        
            <td>'.$stateC.'</td>
            <td>'.$stateP.'</td>
            
        </tr>
        <tr>
        
            <td>'.$countryC.'</td>
            <td>'.$countryP.'</td>
            
        </tr>
        <tr>
        
            <td>'.$postalCodeC.'</td>
            <td>'.$postalCodeP.'</td>
                    
      </tr>
      </table>
      <br> 
      <br>
      <br>
      <table>
        
        <tr>
          <td>Mobile</td>
          <td>'.$mobileNumber.'</td>
        </tr>
        <tr>
          <td>Alternate Mobile</td>
          <td>'.$alternateMobile.'</td>
        </tr>
        <tr>
          <td>Landline Phone Number</td>
          <td>'.$landline.'</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>'.$email.'</td>
        </tr>
        <tr>
          <td>Alternate Email</td>
          <td>'.$alternateEmail.'</td>
        </tr>
      </table>
      ';

// Check if the session variable is set
if (isset($_SESSION["form2_data"])) {
    // Access the data from the session variable
    $form2_data = $_SESSION["form2_data"];

    // Access individual fields from the session data
    $univ = $form2_data["univ"];
    $dept = $form2_data["dept"];
    $super = $form2_data["super"];
    $yoj = $form2_data["yoj"];
    $title1 = $form2_data["title1"];
    $doa = $form2_data["doa"];
    $dost = $form2_data["dost"];
}  
    // Include the data in your HTML content
    $content .= '

    <h2 style="color:red;">2. Educational Qualifications</h2>
    <h4 style="color:blue;">(A) Ph.D. Details</h4>
    <table>
        <tr>
        <th>University/Institute</th>
        <th>Department</th>
        <th>Name of Ph.D. Superviser</th>
        <th>Year of joining</th>
        <th>Dateof successful thesis</th>
        <th>Date of Award</th>
        <th>Title of Ph.D. Thesis</th>
        </tr>
        <tr>
        <td>'.$univ.'</td>
        <td>'.$dept.'</td>
        <td>'.$super.'</td>
        <td>'.$yoj.'</td>
        <td>'.$dost.'</td>
        <td>'.$doa.'</td>
        <td>'.$title1.'</td>
        </tr>
    </table>';

    // Check if the session variable is set
if (isset($_SESSION["form3_data"])) {
    // Access the data from the session variable
    $form3_data = $_SESSION["form3_data"];

    // Access individual fields from the session data
    $degree1 = $form3_data["degree1"];
    $un = $form3_data["un"];
    $br = $form3_data["br"];
    $yoj1 = $form3_data["yoj1"];
    $yoc = $form3_data["yoc"];
    $dur = $form3_data["dur"];
    $cgpa = $form3_data["cgpa"];
    $div = $form3_data["div"];
}
    // Include the data in your HTML content
    $content .= '
<h4 style="color:blue;">(B) Academic Details-PG</h4>
<table>
    <tr>
      <th>Degree</th>
      <th>University/Institute</th>
      <th>Subjects</th>
      <th>Year of joining</th>
      <th>Year of graduation</th>
      <th>Duartion(in yrs)</th>
      <th>Percentage/CGPA</th>
      <th>Division/Class</th>
    </tr>
    <tr>
      <td>'.$degree1.'</td>
      <td>'.$un.'</td>
      <td>'.$br.'</td>
      <td>'.$yoj1.'</td>
      <td>'.$yoc.'</td>
      <td>'.$dur.'</td>
      <td>'.$cgpa.'</td>
      <td>'.$div.'</td>
    </tr>
  </table>';

  // Check if the session variable is set
if (isset($_SESSION["form4_data"])) {
  // Access the data from the session variable
  $form4_data = $_SESSION["form4_data"];

  // Access individual fields from the session data
  $degree2 = $form4_data["degree2"];
  $un2 = $form4_data["un2"];
  $br2 = $form4_data["br2"];
  $yoj12 = $form4_data["yoj12"];
  $yoc2 = $form4_data["yoc2"];
  $dur2 = $form4_data["dur2"];
  $cgpa2 = $form4_data["cgpa2"];
  $div2 = $form4_data["div2"];
}
  // Include the data in your HTML content
  $content .= '
  <h4 style="color:blue;">(C) Academic Details-UG</h4>
  <table>
      <tr>
        <th>Degree</th>
        <th>University/Institute</th>
        <th>Subjects</th>
        <th>Year of joining</th>
        <th>Year of graduation</th>
        <th>Duartion(in yrs)</th>
        <th>Percentage/CGPA</th>
        <th>Division/Class</th>
      </tr>
      <tr>
      <td>'.$degree2.'</td>
      <td>'.$un2.'</td>
      <td>'.$br2.'</td>
      <td>'.$yoj12.'</td>
      <td>'.$yoc2.'</td>
      <td>'.$dur2.'</td>
      <td>'.$cgpa2.'</td>
      <td>'.$div2.'</td>
      </tr>
    </table>


    
<h4 style="color: blue;" id="s_d">(D) Academic Details-School* </h4>

<table>
    <tr>
        <th>Examination</th>
        <th>School/College</th>
        <th>Year of Passing</th>
        <th>Percentage</th>
        <th>Division/Class</th>
    </tr>';

// Retrieve data from session
if (isset($_SESSION["form5_data"])) {
    $tableData = $_SESSION["form5_data"];
    foreach ($tableData as $row) {
        $content .= '
        <tr>
            <td>' . $row['tenthTwelfth'] . '</td>
            <td>' . $row['school'] . '</td>
            <td>' . $row['yearPassing'] . '</td>
            <td>' . $row['percentage'] . '</td>
            <td>' . $row['divisionClass'] . '</td>
        </tr>';
    }
}

$content .= '
</table>



    
    

</div>

<div class="addi">
<h4 style="color: blue;" id="a_d">(E) Additional Qualifications(if any) </h4>

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
        <tbody>';

        // Retrieve data from session
        if (isset($_SESSION["form6_data"])) {
            $tableData2 = $_SESSION["form6_data"];
            foreach ($tableData2 as $row) {
                $content .= '
                <tr>
                    <td>' . $row['degree'] . '</td>
                    <td>' . $row['university'] . '</td>
                    <td>' . $row['branch'] . '</td>
                    <td>' . $row['duration'] . '</td>
                    <td>' . $row['percentage'] . '</td>
                    <td>' . $row['division'] . '</td>
                </tr>';
            }
        }
        
        $content .= '
    </table>';

        // Check if the session variable is set
    if (isset($_SESSION["form3_present_employment"])) {
        // Access the data from the session variable
        $form3_present_employment = $_SESSION["form3_present_employment"];
    
        // Access individual fields from the session data
        $pos = $form3_present_employment["posz"];
        $org = $form3_present_employment["orgz"];
        $sta = $form3_present_employment["sta"];
        $doj = $form3_present_employment["dojz"];
        $dol = $form3_present_employment["dolz"];
        $dur_t = $form3_present_employment["dur_t"];
       
    }
        // Include the data in your HTML content
        $content .= '
        <h2 style="color:red;">3. Employment Details</h2>
        <h4 style="color:blue;">(A) Present Employment</h4>
        <table>
            <tr>
              <th>Position</th>
              <th>Organization</th>
              <th>Date of joining</th>
              <th>Date of leaving</th>              
              <th>Duration</th>
            </tr>
            <tr>
              <td>'.$pos.'</td>
              <td>'.$org.'</td>
              <td>'.$doj.'</td>
              <td>'.$dol.'</td>
              <td>'.$dur_t.'</td>
              
            </tr>
        </table>
          <h4 style="color:blue;">(B) Employment History(After PhD)</h4>
          <table>
              <tr>
                <th>Position</th>
                <th>Organization</th>
                <th>Date of joining</th>
                <th>Date of leaving</th>                      
                <th>Duration</th>
              </tr>';

              // Retrieve data from session
              if (isset($_SESSION["form3_employment_history"])) {
                  $tableData21 = $_SESSION["form3_employment_history"];
                  foreach ($tableData21 as $row) {
                      $content .= '
                      <tr>
                          <td>' . $row['position'] . '</td>
                          <td>' . $row['org'] . '</td>
                          <td>' . $row['d_o_j'] . '</td>
                          <td>' . $row['d_o_l'] . '</td>
                          <td>' . $row['duration'] . '</td>
                      </tr>';
                  }
              }
              
              $content .= '
              
            </table>
            <h4 style="color:blue;">(C) Teaching Experience(After PhD)</h4>
            <table>
                <tr>
                    <th>Position</th>
                    <th>Employer</th>
                    <th>Course taught</th>
                    <th>UG/PG</th>
                    <th>No. of students</th>
                    <th>Duration</th>
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form3_teaching_experience"])) {
                    $tableData22 = $_SESSION["form3_teaching_experience"];
                    foreach ($tableData22 as $row) {
                        $content .= '
                        <tr>
                            <td>' . $row['pos'] . '</td>
                            <td>' . $row['empl'] . '</td>
                            <td>' . $row['cou_tau'] . '</td>
                            <td>' . $row['UG'] . '</td>
                            <td>' . $row['No_s'] . '</td>
                            <td>' . $row['Duration'] . '</td>
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h4 style="color:blue">(D) Research Experience</h4>
            <table>
                <tr>
                    <th>Position</th>
                    <th>Institute</th>
                    <th>Supervisor</th>                  
                    <th>Date of leaving</th>
                    <th>Date of joining</th>
                    <th>Duration</th>
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form3_research_experience"])) {
                    $tableData23 = $_SESSION["form3_research_experience"];
                    foreach ($tableData23 as $row) {
                        $content .= '
                        <tr>
                            <td>' . $row['posn'] . '</td>
                            <td>' . $row['insti'] . '</td>
                            <td>' . $row['superv'] . '</td>
                            <td>' . $row['doj'] . '</td>
                            <td>' . $row['dol'] . '</td>
                            <td>' . $row['duratio'] . '</td>
                            
                        </tr>';
                    }
                }
                
                $content .= '
                </table>
                <h4 style="color:blue;">(E) Industrial Experience</h4>
                <table>
                    <tr>
                        <th>Organization</th>
                        <th>Work Profile</th>          
                        <th>Date of leaving</th>
                        <th>Date of joining</th>
                        <th>Duration</th>
                    </tr>';

                    // Retrieve data from session
                    if (isset($_SESSION["form3_industrial_experience"])) {
                        $tableData24 = $_SESSION["form3_industrial_experience"];
                        foreach ($tableData24 as $row) {
                            $content .= '
                            <tr>
                                
                                <td>' . $row['instit'] . '</td>
                                <td>' . $row['work_p'] . '</td>
                                <td>' . $row['doj1'] . '</td>
                                <td>' . $row['dol1'] . '</td>
                                <td>' . $row['duratio1'] . '</td>
                                
                            </tr>';
                        }
                    }
                    
                    $content .= '
                </table>
                <h2 style="color:red;">4. Area(s) of specialization and Area(s) of Research</h2>
                <table>
                <tr>
                  <td style="color:blue;">Area of specialization</td>
                  <td>'.$_SESSION["txt1"].'</td>
                </tr>
                <tr>
                  <td style="color:blue;">Current area of Research</td>
                  <td>'.$_SESSION["txt2"].'</td>
                </tr>
                    
              </table>
              <h2 style="color:red">5. Summary of Publications</h2>
              <table>
              <tr>
                <td style="font-weight:bold">Number of International Journal Papers</td>
                <td>'.$_SESSION["form4_tb"]["tb1"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of national Journal Papers</td>
                <td>'.$_SESSION["form4_tb"]["tb2"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of International Conference Papers</td>
                <td>'.$_SESSION["form4_tb"]["tb3"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of national Conference Papers</td>
                <td>'.$_SESSION["form4_tb"]["tb4"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of Patents</td>
                <td>'.$_SESSION["form4_tb"]["tb5"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of Books</td>
                <td>'.$_SESSION["form4_tb"]["tb6"].'</td>
              </tr>
              <tr>
                <td style="font-weight:bold">Number of Book Chapters</td>
                <td>'.$_SESSION["form4_tb"]["tb7"].'</td>
              </tr>
                  
            </table>
            <h2 style="color:red;">6. List of 10 Best Research Publication ( Journal/Conference )</h2>
            <table>
                <tr>
                    <th>Author</th>
                    <th>Title</th>          
                    <th>Name of Journal</th>
                    <th>Year,Vol.,Page</th>
                    <th>Impact Factor</th>
                    <th>DOI</th>
                    <th>Status</th>
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form4_tableData9"])) {
                    $tableData9 = $_SESSION["form4_tableData9"];
                    foreach ($tableData9 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['auth'] . '</td>
                            <td>' . $row['tit'] . '</td>
                            <td>' . $row['n_o_j_c'] . '</td>
                            <td>' . $row['y_v_p'] . '</td>
                            <td>' . $row['imp_f'] . '</td>
                            <td>' . $row['d_o_i'] . '</td>
                            <td>' . $row['st'] . '</td>
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">7. List of Patent(s), Book(s), Book Chapter(s)</h2>
            <h4 style="color:blue;font-weight:bold;">A. Patent(s)</h4>
            <table>
                
                <tr>
                    <th>Inventor(s)</th>
                    <th>Title of Patent</th>          
                    <th>Country of Patent</th>
                    <th>Patent Number</th>
                    <th>Date of Filing</th>
                    <th>Date of Published</th>
                    <th>Status (Filed/PUblished)</th>
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form4_tableData10"])) {
                    $tableData10 = $_SESSION["form4_tableData10"];
                    foreach ($tableData10 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['inven'] . '</td>
                            <td>' . $row['title_pat'] . '</td>
                            <td>' . $row['count_pat'] . '</td>
                            <td>' . $row['Pat_no'] . '</td>
                            <td>' . $row['d_f'] . '</td>
                            <td>' . $row['d_p'] . '</td>
                            <td>' . $row['sattus'] . '</td>
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h4 style="color:blue;font-weight:bold;">B. Book(s) & Book Chapter(s)</h4>
            <table>
                
                <tr>
                    <th>Type(Book/Book Chapter)</th>
                    <th>Author</th>          
                    <th>Title of the Book</th>
                    <th>Year of Publication</th>
                    <th>ISBN</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form4_tableData11"])) {
                    $tableData11 = $_SESSION["form4_tableData11"];
                    foreach ($tableData11 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['typ'] . '</td>
                            <td>' . $row['author'] . '</td>
                            <td>' . $row['title'] . '</td>
                            <td>' . $row['y_o_p'] . '</td>
                            <td>' . $row['isbn'] . '</td>
                            
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red">8. Google Scholar Link</h2>
            <table>
              <tr>
                <td style="font-weight:bold;color:blue">URL</td>
                
              </tr>
              <tr>
                <td>'.$_SESSION["form4_tb"]["tb10"].'</td>
              </tr>              
                  
            </table>
            <h2 style="color:red;">9. Membership of Professional Societies</h2>
            <table>
                
                <tr>
                    <th>Name of Professional Society</th>
                    <th>Membership Status(Lifetime/Annual)</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form5_tableData91"])) {
                    $tableData91 = $_SESSION["form5_tableData91"];
                    foreach ($tableData91 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['n_o_prof'] . '</td>
                            <td>' . $row['status_mem'] . '</td>                          
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">10. Professional Training</h2>
            <table>
                
                <tr>
                    <th>Type of Training Recieved</th>
                    <th>Organization</th>
                    <th>Year</th>
                    <th>Duration</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form5_tableData92"])) {
                    $tableData92 = $_SESSION["form5_tableData92"];
                    foreach ($tableData92 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['typ_trai'] . '</td>
                            <td>' . $row['orga'] . '</td>  
                            <td>' . $row['yea'] . '</td>                         
                            <td>' . $row['du'] . '</td> 
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">11. Award(s) & Recognitions(s)</h2>
            <table>
                
                <tr>
                    <th>Name of Award</th>
                    <th>Awarded By</th>
                    <th>Year</th>
                    
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form5_tableData93"])) {
                    $tableData93 = $_SESSION["form5_tableData93"];
                    foreach ($tableData93 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['n_o_aw'] . '</td>
                            <td>' . $row['awraded_by'] . '</td>  
                            <td>' . $row['year'] . '</td> 
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">12. Sponsored Projects/ Consultancy Details</h2>
            <table>
                
                <tr>
                    <th>Type ( Sponsored Project/ Consultancy Project ) </th>
                    <th>Organization/Sponsoring Agency</th>
                    <th>Title of Project</th>
                    <th>Amount</th>
                    <th>Period</th>
                    <th>Role</th>
                    <th>Status</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form5_tableData94"])) {
                    $tableData94 = $_SESSION["form5_tableData94"];
                    foreach ($tableData94 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['sh2'] . '</td>
                            <td>' . $row['o_c_pro'] . '</td>  
                            <td>' . $row['T_o_proje'] . '</td>                         
                            <td>' . $row['amou'] . '</td>
                            <td>' . $row['peri'] . '</td> 
                            <td>' . $row['rol'] . '</td>
                            <td>' . $row['status2'] . '</td>
                            
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">13. Research Supervision</h2>
            <table>
                
                <tr>
                    <th>Type </th>
                    <th>Name of Student/Research Scholar</th>
                    <th>Title of Thesis</th>
                    <th>Role</th>
                    <th>Ongoing/Completed</th>
                    <th>Ongoing Since/ Year of Completion</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form6_tableData91"])) {
                    $tableData691 = $_SESSION["form6_tableData91"];
                    foreach ($tableData691 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['sh2'] . '</td>
                            <td>' . $row['Name_of_stu'] . '</td>  
                            <td>' . $row['Title_of_thesis'] . '</td>                         
                            <td>' . $row['role2'] . '</td>
                            <td>' . $row['status4'] . '</td> 
                            <td>' . $row['y_o_comp'] . '</td>
                             
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">14. Significant Research Contributions and Future Plans</h2>
            <p>'.$_SESSION["sig_r_f"].'</p>
            <h2 style="color:red;">15. Significant Teaching Contributions and Future Plans</h2>
            <p>'.$_SESSION["teac_ex"].'</p>
            <h2 style="color:red;">16. Professional Service: Editorship/Reviewership</h2>
            <p>'.$_SESSION["prof_sr"].'</p>
            <h2 style="color:red;">17. Detailed List of Journal Publications</h2>
            <p>'.$_SESSION["det_l"].'</p>
            <h2 style="color:red;">18. Detailed List of Conference Publications</h2>
            <p>'.$_SESSION["d_con"].'</p>


            <h2 style="color:red;">19. Check LIst of Documents attached with the online application</h2>
            <p>1. PHD Certificate</p>
            <p>2. PG Certificate</p>
            <p>3. UG Certificate</p>
            <p>4. 12th/HSC/Diploma</p>
            <p>5. 10th/SSC Certificate</p>
            <p>6. 10 Years post PHD Experience Certificate</p>
            <p>7. Any other relevant documents(Experience Certificate , Award Certificate, etc.)</p>

            <h2 style="color:red;">20. Referees</h2>
            <table>
                
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Association with Referee</th>
                    <th>Institution/Organization</th>
                    <th>E-mail</th>
                    <th>Contact No.</th>
                    
                </tr>';

                // Retrieve data from session
                if (isset($_SESSION["form7_tableData91"])) {
                    $tableData791 = $_SESSION["form7_tableData91"];
                    foreach ($tableData791 as $row) {
                        $content .= '
                        <tr>
                            
                            <td>' . $row['name1'] . '</td>
                            <td>' . $row['pos61'] . '</td>  
                            <td>' . $row['ass_w_ref'] . '</td>                         
                            <td>' . $row['inst'] . '</td>
                            <td>' . $row['email'] . '</td> 
                            <td>' . $row['cont'] . '</td>
                             
                        </tr>';
                    }
                }
                
                $content .= '
            </table>
            <h2 style="color:red;">21. Final Declaration</h2>
            <p>I hereby declare that I have carefully read and understood the instructions and particulars mentioned in the advertisement and this application form. I further declare that all the entries along with the attachments uploaded in this form are true to the best of my knowledge and belief.
            </p>
            






    
</body>
</html>

';

// Write HTML content
$pdf->writeHTML($content, true, false, true, false, '');
$pdf_content = $pdf->Output('', 'S');

// Assuming you have the user_id available in your session
$user_id = $_SESSION['user_id'];

// Upload PDF to database
$sql = "INSERT INTO pdf_files (user_id, pdf_content) VALUES (:user_id, :pdf_content)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindParam(':pdf_content', $pdf_content, PDO::PARAM_LOB);
$stmt->execute();

// // Get the last inserted ID to use in the download link
// $pdf_id = $pdo->lastInsertId();

try {
    // // Base URL for local development
    // $base_url = 'http://localhost/DBMS/includes';

    // // Add a download button within the PDF
    // $pdf->Write(0, 'Click to download the PDF: ');
    // $pdf->SetFont('', 'U');
    // $pdf->SetTextColor(0, 0, 255);
    // $pdf->Write(0, 'Download PDF', $base_url . '/download.php');




    // Add a download link within the PDF
    //$pdf->Write(0, 'Download PDF now: ');
    // $pdf->SetFont('', 'U');
    // $pdf->SetTextColor(0, 0, 255);
    // $pdf->Write(0, $base_url . '/download.php');
    

    // Close and output PDF document
    $pdf->Output('generated_pdf.pdf', 'I');
    echo '<a href="' . $base_url . '/download.php">Download PDF</a>';
    
} catch (Exception $e) {
    // Handle any exceptions
    echo 'Error: ' . $e->getMessage();
}

} catch (Exception $e) {
// Handle any exceptions
echo 'Error: ' . $e->getMessage();
}




// Close and output PDF document
// Specify the relative path to the directory where you want to save the PDF file
// $pdfDirectory = './uploads/';
// $pdfFilename = 'your_file_name.pdf';
// $pdfPath = $pdfDirectory . $pdfFilename;

// // Check if the directory exists and is writable
// if (!is_dir($pdfDirectory) || !is_writable($pdfDirectory)) {
//     die('Error: The specified directory is not writable.');
// }

// // Save PDF to a file
// $pdf->Output($pdfPath, 'F');

// // Provide download link
// echo '<a href="' . $pdfPath . '" download="' . $pdfFilename . '">Download PDF</a>';






?>
