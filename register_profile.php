<?php
$root = "./";  
include('config/config.inc.php');
$root='./';
is_login($root); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Profile</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'include/sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'include/topbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Register Profile</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-md-3">
              <ul class="">
                <li class="nav-link"><a href="#aboutme" data-toggle="collapse">About Me</a></li>
                <li class="nav-link"><a href="#education" data-toggle='collapse'>Education & Career</a></li>
                <li class="nav-link"><a href="#familydetails" data-toggle='collapse'>Family Details</a></li>
                <li class="nav-link"><a href="#horoscope" data-toggle='collapse'>Horoscope Details</a></li>
                <li class="nav-link"><a href="#identity" data-toggle='collapse'>Identity & Contact Details</a></li>
                <li class="nav-link"><a href="#looks" data-toggle='collapse'>Looks & Lifestyle</a></li>
                <li class="nav-link"><a href="#partner" data-toggle='collapse'>Partner Preference</a></li>
                <li class="nav-link"><a href="#calling" data-toggle='collapse'>Calling Status</a></li>
                <li class="nav-link"><a href="#lead" data-toggle='collapse'>Lead Generation</a></li>
                <li class="nav-link"><a href="#meeting" data-toggle='collapse'>Meeting Details</a></li>
                <li class="nav-link"><a href="#subscription" data-toggle='collapse'>Subscription Status</a></li>
                <li class="nav-link"><a href="#miscellaneous" data-toggle='collapse'>Miscellaneous</a></li>
              </ul>
            </div>
            <div class="col-md-9">
                <div id='aboutme' class='collapse'>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Data Taken From</label>
                        <select class="browser-default custom-select" name="source" id="source">
                          <option>JS</option>
                          <option>Shaadi.com</option>
                          <option>BM</option>
                          <option>LV</option>
                          <option>A2Z</option>
                          <option>Sheetal</option>
                          <option>Other Matrimony alliance</option>
                          <option>Newspaper</option>
                          <option>Sulekha</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Profile Id</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="browser-default custom-select">
                          <option>Female</option>
                          <option>Male</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Height</label>
                        <input type="text" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-md-3">
                      
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Marital Status</label>
                        <select class="browser-default custom-select">
                          <option>Never Married</option>
                          <option>Divorced</option>
                          <option>Annulled</option>
                          <option>Widowed</option>
                          <option>Awaiting Divorce</option>
                          <option>Married</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Annual Income</label>
                        <input type="text" class="form-control"/>
                      </div>  
                      <div class="form-group">
                        <label>Has Children</label>
                        <select class="browser-default custom-select">                          
                          <option>None</option>
                          <option>Yes, Living Seperately</option>
                          <option>Yes, Staying together</option>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label>Residential Status</label>
                        <select class="browser-default custom-select">
                          <option>--Select--</option>
                          <option>Citizen</option>
                          <option>Permanent Resident</option>
                          <option>Work Permit</option>
                          <option>Student Visa</option>
                          <option>Temporary Visa</option>
                        </select>
                      </div>               
                    </div>
                    <div class="col-md-3">
                      
                      <div class="form-group">
                        <label>Country of Residence</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>State of Residence</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>CITY</label>
                        <input type="text" class="form-control"/>
                      </div>
                      
                      <div class="form-group">
                        <label>Pincode</label>
                        <input type="number" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Mother Tongue</label>
                        <select class="browser-default custom-select">
                          <option>--Select--</option>
                          <option>Hindi-Delhi</option>
                          <option>Hindi-UP</option>
                          <option>Punjabi</option>
                          <option>Hindi-MP/CG</option>
                          <option>Hindi- Bihar/Jharkhand</option>
                          <option>Hindi-Rajasthan</option>
                          <option>Haryanvi</option>
                          <option>Himachali</option>
                          <option>Kashmiri</option>
                          <option>Sindhi</option>
                          <option>Urdu</option>
                          <option>Marathi</option>
                          <option>Gujrati</option>
                          <option>Kutchi</option>
                          <option>Hindi-MP/CG</option>
                          <option>Konkani</option>
                          <option>Sindhi</option>
                          <option>Tamil</option>
                          <option>Telgu</option>
                          <option>Kannada</option>
                          <option>Malayalam</option>
                          <option>Tulu</option>
                          <option>Udu</option>
                          <option>Bengali</option>
                          <option>Oriya</option>
                          <option>assamese</option>
                          <option>Sikkim/Nepali</option>
                          <option>English</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Religion</label>
                        <select class="browser-default custom-select">
                          <option>--Select--</option>
                          <option>Muslim</option>
                          <option>Hindu</option>
                          <option>Sikh</option>
                          <option>Buddhist</option>
                          <option>Christian</option>
                          <option>Jain</option>
                          <option>Other</option>
                          <option>Parsi</option>
                          <option>Jewish</option>
                          <option>Bahai</option>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                    
                      
                      <div class="form-group">
                        <label>Caste</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Sub-Caste</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>About</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Criminal Record</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Special Case</label>
                        <input type="text" class="form-control"/>
                      </div>
                    </div>
                  
                  </div>
                </div>
              <div>
              <div id='education' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Education</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>College</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Employed In</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Private Sector</option>
                        <option>Government/Public Sector</option>
                        <option>Civil Services</option>
                        <option>Defense</option>
                        <option>Business/Self Employed</option>
                        <option>Not working</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Employed As</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Software Professional</option>
                        <option>Hotels / Hospitality Professional</option>
                        <option>Non – IT Engineer</option>
                        <option>Sales Professional</option>
                        <option>Banking Professional</option>
                        <option>Govt. - Product manager</option>
                        <option>Govt. - Doctor</option>
                        <option>Electronics Engineer</option>
                        <option>Chartered Accountant</option>
                        <option>Cyber / Network Security</option>
                        <option>Business - Lawyer & Legal Professional</option>
                        <option>Analyst</option>
                        <option>Sr. Manager /  Manager</option>
                        <option>Project Manager - IT</option>
                        <option>Project Lead - IT</option>
                        <option>Corporate Planning</option>
                        <option>Hardware / Telecom Engineer</option>
                        <option>Marketing Professional</option>
                        <option>Business - Business Owner /  Entrepreneur</option>
                        <option>Defence - Air Force</option>
                        <option>Subject Matter Expert</option>
                        <option>Business - Hotels / Hospitality Professional</option>
                        <option>Quality Assurance Engineer - IT</option>
                        <option>Others</option>
                        <option>Business - Others</option>
                        <option>Research Professional</option>
                        <option>Govt. - Security Professional</option>
                        <option>Project Manager - Non IT</option>
                        <option>Scientist</option>
                        <option>Operations Management</option>
                        <option>Govt. - Professor / Lecturer</option>
                        <option>Govt. - Operator / Technician</option>
                        <option>Accounting Professional</option>
                        <option>Consultant</option>
                        <option>Govt. - Software Professional</option>
                        <option>Medical /  Healthcare Professional</option>
                        <option>Business - Businessperson</option>
                        <option>Operator / Technician</option>
                        <option>Govt. - Airline Professional</option>
                        <option>Govt. - Law Enforcement Officer</option>
                        <option>Advertising Professional</option>
                        <option>Auditor</option>
                        <option>Architect</option>
                        <option>Doctor</option>
                        <option>Govt. - Research Professional</option>
                        <option>HR Professional</option>
                        <option>Quality Assurance Engineer</option>
                        <option>Govt. - Scientist</option>
                        <option>Govt. - Research Assistant</option>
                        <option>Education Professional</option>
                        <option>Research Assistant</option>
                        <option>Business - Interior Designer</option>
                        <option>Admin Professional</option>
                        <option>Govt. - Corporate Planning</option>
                        <option>Govt. - Education Professional</option>
                        <option>Student</option>
                        <option>Govt. - Non – IT Engineer</option>
                        <option>Business - Advertising Professional</option>
                        <option>Govt. - Project Manager - IT</option>
                        <option>UI / UX designer</option>
                        <option>Professor / Lecturer</option>
                        <option>Flight Attendant</option>
                        <option>Govt. - Consultant</option>
                        <option>Film /  Entertainment Professional</option>
                        <option>Lawyer & Legal Professional</option>
                        <option>Program Manager</option>
                        <option>Web / Graphic Designer</option>
                        <option>Finance Professional</option>
                        <option>Pilot</option>
                        <option>Govt. - Operations Management</option>
                        <option>Science Professional</option>
                        <option>Business - Broker</option>
                        <option>Product manager</option>
                        <option>Airline Professional</option>
                        <option>Security Professional</option>
                        <option>Media Professional</option>
                        <option>Pharmacist</option>
                        <option>Govt.</option>
                        <option>Business - CxO /  Chairman /  President /  Director</option>
                        <option>Govt. - Banking Professional</option>
                        <option>Customer Service</option>
                        <option>Business - Agriculture Professional</option>
                        <option>Not working</option>
                        <option>Govt. - Quality Assurance Engineer</option>
                        <option>CxO /  Chairman /  President /  Director</option>
                        <option>Govt. - Dentist</option>
                        <option>Govt. - Others</option>
                        <option>Business - Travel Professional</option>
                        <option>Business</option>
                        <option>Business - Social Services /  NGO /  Volunteer</option>
                        <option>Govt. - BPO / ITes Professional</option>
                        <option>Defence - Defence Services</option>
                        <option>Looking for job</option>
                        <option>VP /  AVP /  GM /  DGM</option>
                        <option>Govt. - Project Lead - IT</option>
                        <option>Nurse</option>
                        <option>Govt. - Analyst</option>
                        <option>Defence - Navy</option>
                        <option>Farming</option>
                        <option>Teacher</option>
                        <option>Govt. - Finance Professional</option>
                        <option>Govt. - Medical /  Healthcare Professional</option>
                        <option>BPO / ITes Professional</option>
                        <option>Physiotherapist</option>
                        <option>Govt. - Admin Professional</option>
                        <option>Agent</option>
                        <option>Govt. - Lawyer & Legal Professional</option>
                        <option>Govt. - Clerk</option>
                        <option>Business - Subject Matter Expert</option>
                        <option>Singer</option>
                        <option>Corporate Communication</option>
                        <option>Business - Media Professional</option>
                        <option>Govt. - Media Professional</option>
                        <option>Govt. - Accounting Professional</option>
                        <option>Business - Physiotherapist</option>
                        <option>Govt. - HR Professional</option>
                        <option>Merchant Naval Officer</option>
                        <option>Civil Services (IAS/ IPS/ IRS/ IES/ IFS)</option>
                        <option>Business - Education Professional</option>
                        <option>Defence - Law Enforcement Officer</option>
                        <option>Govt. - Hotels / Hospitality Professional</option>
                        <option>Interior Designer</option>
                        <option>Govt. - Sales Professional</option>
                        <option>Govt. - Physiotherapist</option>
                        <option>Govt. - Corporate Communication</option>
                        <option>Govt. - Customer Service</option>
                        <option>Business - Research Professional</option>
                        <option>Agriculture Professional</option>
                        <option>Paramedic</option>
                        <option>Actor / Model</option>
                        <option>Business - Doctor</option>
                        <option>Defence - Operator / Technician</option>
                        <option>Business - Educational Institution Owner</option>
                        <option>Clerk</option>
                        <option>Govt. - Hardware / Telecom Engineer</option>
                        <option>Govt. - Cyber / Network Security</option>
                        <option>Social Services /  NGO /  Volunteer</option>
                        <option>Govt. - Architect</option>
                        <option>Defence - Cyber / Network Security</option>
                        <option>Business - Chartered Accountant</option>
                        <option>Govt. - Nurse</option>
                        <option>Govt. - Surgeon</option>
                        <option>Travel Professional</option>
                        <option>Artist</option>
                        <option>Business - Architect</option>
                        <option>Govt. - Electronics Engineer</option>
                        <option>Govt. - Police</option>
                        <option>Business - Sportsperson</option>
                        <option>Dentist</option>
                        <option>Defence - Army</option>
                        <option>Govt. - Quality Assurance Engineer - IT</option>
                        <option>Business - Paramedic</option>
                        <option>Business - Nurse</option>
                        <option>Fashion Designer</option>
                        <option>Govt. - Agriculture Professional</option>
                        <option>Business - Actor / Model</option>
                        <option>Business - Farming</option>
                        <option>Mariner</option>
                        <option>Fitness Professional</option>
                        <option>Secretary / Front Office</option>
                        <option>Business - Writer</option>
                        <option>Defence - Quality Assurance Engineer</option>
                        <option>Govt. - Secretary / Front Office</option>
                        <option>Business - Artist</option>
                        <option>Business - Agent</option>
                        <option>Govt. - Science Professional</option>
                        <option>Journalist</option>
                        <option>Business - Teacher</option>
                        <option>Govt. - Sr. Manager /  Manager</option>
                        <option>PR Professional</option>
                        <option>Defence - Teacher</option>
                        <option>Business - Professor / Lecturer</option>
                        <option>Business - Film /  Entertainment Professional</option>
                        <option>Broker</option>
                        <option>Govt. - Marketing Professional</option>
                        <option>Govt. - Flight Attendant</option>
                        <option>Defence - Clerk</option>
                        <option>Retired</option>
                        <option>Animator</option>
                        <option>Govt. - Project Manager - Non IT</option>
                        <option>Educational Institution Owner</option>
                        <option>Govt. - Film /  Entertainment Professional</option>
                        <option>Defence - Electronics Engineer</option>
                        <option>Business - Surgeon</option>
                        <option>Beautician</option>
                        <option>Business - VP /  AVP /  GM /  DGM</option>
                        <option>Govt. - Auditor</option>
                        <option>Govt. - Program Manager</option>
                        <option>Govt. - Paramedic</option>
                        <option>Govt. - Teacher</option>
                        <option>Sportsperson</option>
                        <option>Writer</option>
                        <option>Govt. - PR Professional</option>
                        <option>Defence - Admin Professional</option>
                        <option>Govt. - Pharmacist</option>
                        <option>Defence - Paramedic</option>
                        <option>Surgeon</option>
                        <option>Business - Singer</option>
                        <option>Business - Medical /  Healthcare Professional</option>
                        <option>Govt. - Advertising Professional</option>
                        <option>Govt. - Mariner</option>
                        <option>Defence - Pilot</option>
                        <option>Defence - Mariner</option>
                        <option>Govt. - CxO /  Chairman /  President /  Director</option>
                        <option>Business - Dentist</option>
                        <option>Defence - Non – IT Engineer</option>
                        <option>Business - Beautician</option>
                        <option>Business - Psychologist</option>
                        <option>Govt. - VP /  AVP /  GM /  DGM</option>
                        <option>Librarian</option>
                        <option>Business - Science Professional</option>
                        <option>Govt. - Merchant Naval Officer</option>
                        <option>Govt. - Chartered Accountant</option>
                        <option>Govt. - Pilot</option>
                        <option>Business - Scientist</option>
                        <option>Psychologist</option>
                        <option>Defence - Doctor</option>
                        <option>Business - Research Assistant</option>
                        <option>Govt. - Animator</option>
                        <option>Business - Fashion Designer</option>
                        <option>Business - Pharmacist</option>
                        <option>Govt. - Politician</option>
                        <option>Business - Animator</option>
                        <option>Business - Fitness Professional</option>
                        <option>Businessperson</option>
                        <option>Business - Veterinary Doctor</option>
                        <option>Govt. - Veterinary Doctor</option>
                        <option>Govt. - Psychologist</option>
                        <option>Govt. - Interior Designer</option>
                        <option>Govt. - Subject Matter Expert</option>
                        <option>Defence - Software Professional</option>
                        <option>Govt. - Social Services /  NGO /  Volunteer</option>
                        <option>Defence - Scientist</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Employed With</label>
                      <input type="text" class="form-control"/>
                    </div>
                    
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>School Name</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>UG</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>PG</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>UG College</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>PG College</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div id='familydetails' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Father Occupation</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Service -Private</option>
                        <option>Service- Government /PSU</option>
                        <option>Civil Services</option>
                        <option>Army/Armed Forces</option>
                        <option>Business/Self Employed</option>
                        <option>Rretired</option>
                        <option>Expired</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Mother is</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Service -Private</option>
                        <option>Service- Government /PSU</option>
                        <option>Civil Services</option>
                        <option>Army/Armed Forces</option>
                        <option>Business/Self Employed</option>
                        <option>Rretired</option>
                        <option>Expired</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Family Value</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Liberal</option>
                        <option>Moderate</option>
                        <option>Orthodox</option>
                        <option>Conservative</option>
                        <option>Conservative</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Affluence Level</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Affluence Level</option>
                        <option>Upper Middle</option>
                        <option>Not filled in</option>
                        <option>Rich/Affluent</option>
                        <option>Middle Class</option>
                      </select>

                    </div>
                    <div class="form-group">
                      <label>Native Country</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Native State</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Unmarried Sisters</label>
                      <select class="browser-control custom-select">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Married Sisters</label>
                      <select class="browser-control custom-select">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Unmarried Brothers</label>
                      <select class="browser-control custom-select">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Married Brothers</label>
                      <select class="browser-control custom-select">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Other Property Details</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Square Yards</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Vehicles</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Net Worth</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Industry Type</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Based out of</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Income</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Type</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Joint Family</option>
                        <option>Nuclear family</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>About Family</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div id='horoscope' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>DOB</label>
                      <input type="date" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Birth Place</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Birth Time</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Manglik</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Manglik</option>
                        <option>Angshik</option>
                        <option>Non-manglik</option>
                        <option>Don’t know</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Believes in Horoscope</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Must</option>
                        <option>Not Necessary</option>

                      </select>
                    </div>
                    </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Gotra</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Star</label>
                      <input type="text" class="form-control"/>
                    </div>
                  
                    <div class="form-group">
                      <label>Raasi</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='identity' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Alternate Phone Number</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>WhatsApp Number</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Residence Address</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Permanent Address</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Aadhar Verified</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Mobile Verified</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Email Id Verified</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Aadhar Proof</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Given</option>
                        <option>Not Given</option>                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Instagram Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Facebook Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Linkedin Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='looks' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Body Type</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Athletic</option>
                        <option>Slim</option>
                        <option>Average</option>
                        <option>Heavy</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Food Habits</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Eggetarian</option>
                        <option>Jain</option>
                        <option>Non Veg</option>
                        <option>Vegetarian</option>
                        <option>Fishetarian</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Drink</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Drinks occasionally</option>
                        <option>Doesn't drink</option>
                        <option>Drinks</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Smoke</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Doesn't smoke</option>
                        <option>Smokes</option>
                        <option>Smokes occasionally</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Complexion</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Fair</option>
                        <option>Wheatish</option>
                        <option>Dark</option>
                        <option>Very Fair</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Weight</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Hair Type</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Bald</option>
                        <option>Semi- Bald</option>
                        <option>Normal Hair</option>
                        <option>Good Hair</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Looks</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Extraordinary</option>
                        <option>Classy</option>
                        <option>Average</option>
                        <option>Below Average</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Specs</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Wear Specs</option>
                        <option>Normal Eyesight</option>
                        <option>Wear Lenses</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Communication</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Classy</option>
                        <option>Good</option>
                        <option>Average</option>
                        <option>Normal</option>
                        <option>Bad</option>
                      </select>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='partner' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>SMOKER</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Doesn'T Smoke</option>
                          <option>Smokes</option>
                          <option>Smokes Occasionally</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>DRINKER</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Drinks Occasionally</option>
                          <option>Doesn'T Drink</option>
                          <option>Drinks</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>VEG/NON VEG</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Eggetarian</option>
                          <option>Jain</option>
                          <option>Non Veg</option>
                          <option>Vegetarian</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>FROMAGE</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>TOAGE</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>CASTE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>EDUCATION QUALIFICATION</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MIN HEIGHT</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MAX HEIGHT</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MOTHER TONGUE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>RELIGION</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MANGLIK</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>INCOME</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>BODY TYPE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Complexion</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>CHALLENGED</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MARITAL STATUS</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>COUNTRY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>STATE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>HAVE CHILDREN</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>EMPLOYED AS</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>About Partner</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Cant Get married to</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='calling' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Last Calling date</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Calling for</label>
                      <select class="browser-control custom-select">
                        <option></option>
                        <option>Lead</option>
                        <option>Sample Profile Status</option>
                        <option>Profile Shared</option>
                        <option>Meeting Confirmation</option>
                        <option>Lead Payment</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Calling Status</label>
                      <select class="browser-control custom-select"></select>
                        <option></option>
                        <option>Pending</option>
                        <option>Follow Up</option>
                        <option>Profile Rejected</option>
                        <option>Don’T Call</option>
                        <option>Accepted</option>
                        <option>Wrong Number</option>
                        <option>Already Married</option>

                    </div>
                    <div class="form-group">
                      <label>Calling Comments</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Profile Shortlisted for id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Response of shared Profile</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='lead' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-Date of calling</label>
                        <input type="date" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead-Follow up date</label>
                        <input type="date" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Follow Up time </label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead-Status</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Pending</option>
                          <option>Paid Client</option>
                          <option>Rejected</option>
                          <option>Follow Up</option>
                          <option>Post Sample Will Decide</option>
                          <option>Pay When You Marry</option>
                          <option>Pay On Meeting</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>lead-comment</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-shared profile ids</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>lead shortlisted profile ids</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Biodata received</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Yes</option>
                          <option>No</option>
                          <option>Would Share Soon</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Lead-Matrimony Picture</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Yes</option>
                          <option>No</option>
                          <option>Would Share Soon</option>
                        </select>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='meeting' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING FINALISED BY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting Type</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Telephonic</option>
                          <option>Face To Face</option>
                          <option>Video Call</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>MEETING DATE</label>
                        <input type="date" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING TIME</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING PLACE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING LVM ID</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting Status</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Done</option>
                          <option>Postponed</option>
                          <option>Rejected</option>
                          <option>Follow Up</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>Rejection reason</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Looks</option>
                          <option>Personality</option>
                          <option>Financial</option>
                          <option>Family Type</option>
                          <option>Other Criteria</option>
                          <option>Religion And Caste</option>
                          <option>Family Values</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>Rejection Reason Comments</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='subscription' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>CLIENT TYPE</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Lead</option>
                          <option>Paid</option>
                          <option>Meeting</option>
                          <option>Post Meeting -Will Decide</option>
                          <option>Post Sample Will Decide</option>
                          <option>Rejected Completely</option>
                          <option>Pay At Roka</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>REGISTRATION FEE</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING FEE</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ROKA CHARGE</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>DURATION</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>1 Month</option>
                          <option>3 Month</option>
                          <option>6 Month</option>
                          <option>1 Year</option>
                          <option>Till You Marrry</option>

                        </select>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>PACKAGE TYPE</label>
                        <select class="browser-control custom-select">
                          <option></option>
                          <option>Luv 2 Register -3 Month</option>
                          <option>Luv 2 Register -6 Months</option>
                          <option>Till Your Roka</option>
                          <option>Luv 2 Meet</option>
                          <option>Pay At Your Roka</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>SOLD BY</label>
                        <input type="text" class="form-control"/>
                        
                  </div>
                  <div class="form-group">
                        <label>Subscription Type</label>
                        <input type="text" class="form-control"/>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                        <label>Payment Given</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Payment Remaining</label>
                        <input type="number" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Next Payment Due Date</label>
                        <input type="date" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Payment Comments</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='miscellaneous' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>PIDIndex</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ADDED DATE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ADDED BY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>WEEKLY PROFILE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'include/footer.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 <?php include 'include/footer_main.php';?>
 <script src="scripts/js/registerprofile.js"></script>


</body>

</html>
