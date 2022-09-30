<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title></title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="../assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <span class="nav-link-inner--text">Logout</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="header pb-6 d-flex align-items-center mt--6" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white">Hello <?= $username; ?></h1>
        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--9">
  <div class="row justify-content-center">
    <div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Personal Data Form </h3>
            </div>
            <div class="col-4 text-right">
              <a href="#!" class="btn btn-sm btn-warning">Cancel</a>
            </div>
          </div>
          <!--session message-->
          <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible fade show col-lg-12 mt-1" role="alert">
              <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
              ?>
            </div>
          <?php endif; ?><!--end of session message-->
        </div>
        <div class="card-body">
          <form role="form" action="register-contr.php" method="post">
            <h6 class="heading-small text-muted mb-4">Your information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Account ID</label>
                    <input type="text" class="form-control" placeholder="First name" name="accounts_id" value="123" required/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">USER ID</label>
                    <input type="text" class="form-control" placeholder="First name" name="users_id" value="123456">
                  </div>
                </div>


                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">First name</label>
                    <input type="text" class="form-control" placeholder="First name" name="firstname" required/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Middle name</label>
                    <input type="text"  class="form-control" placeholder="Last name" name="middlename" required/>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Last name</label>
                    <input type="text" class="form-control" placeholder="First name" name="lastname" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Name Extension</label>
                    <input type="text" class="form-control" placeholder="(eg: Jr)" name="name_ext" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Date of Birth</label>
                    <input type="text"  class="form-control" placeholder="Date of Birth" name="DOB" required/>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Age</label>
                    <input type="number"  class="form-control" placeholder="Age" name="age" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Gender</label>
                    <input type="text" class="form-control" placeholder="Gender" name="gender" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Status</label>
                    <input type="text" class="form-control" placeholder="Status" name="status" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Citizenship</label>
                    <input type="text" class="form-control" placeholder="Citizenship" name="citizen" required/>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <!--h6 class="heading-small text-muted mb-4">Course Data</h6>
            <div class="pl-lg-4">
              <div class="row">
              <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Course</label>
                    <select class="form-control" name="course" id="" required>
                        <option value="">--Select Course--</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BTLED">BTLED</option>
                        <option value="BSCRIM">BSCRIM</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSED">BSED</option>
                        <option value="BSFI">BSFI</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Course Description</label>
                    <input type="text" id="input-last-name" class="form-control" placeholder="e.g : Bachelor of Science in Information Technology" name="course_desc" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Year</label>
                    <select class="form-control" name="course_year" id="" required>
                        <option value="">--Select Year--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Section</label>
                    <select class="form-control" name="section" id="" required>
                        <option value="">--Select Section--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Major</label>
                    <input type="text" id="input-last-name" class="form-control" placeholder="" name="major" required/>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Semester</label>
                    <select class="form-control" name="semester" id="" required>
                        <option value="">--Select Semester--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                  </div>
                </div>
              </div>
            </div!-->

            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Present Address</label>
                    <input id="input-address" class="form-control" placeholder="Street, Brgy Municipality/City Province" name="present_add" type="text" required/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Contact Number</label>
                    <input id="" class="form-control" placeholder="+63" name="contact" type="number" required/>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">About me</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">About Me (optional)</label>
                <textarea rows="4" class="form-control" name="about_you" placeholder="A few words about you ...">A few words about you ...</textarea>
              </div>
            </div>
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">Agree in Terms and Condition </h3>
                    </div>
                    <div class="col-4 text-right">
                        <button name="register_data" type=submit class="btn btn-sm btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
         
        </div>
      </div>
    </div>
  </div>