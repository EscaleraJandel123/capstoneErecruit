@include("head")
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo d-flex
  align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block">NiceAdmin</span> </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index.html">
        <i class="bi bi-house"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html" class="active">
            <i class="bi bi-circle"></i><span>Form 1</span>
          </a>
        </li>
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Form 2</span>
          </a>
        </li>
        <li>
          <a href="forms-layouts.html">
            <i class="bi bi-circle"></i><span>Form 3</span>
          </a>
        </li>
        <li>
          <a href="forms-editors.html">
            <i class="bi bi-circle"></i><span>Form 3</span>
          </a>
        </li>
        <li>
          <a href="forms-validation.html">
            <i class="bi bi-circle"></i><span>Form 5</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="tables-general.html">
            <i class="bi bi-circle"></i><span>General Tables</span>
          </a>
        </li>
        <li>
          <a href="tables-data.html">
            <i class="bi bi-circle"></i><span>Data Tables</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
        <li>
          <a href="charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>ApexCharts</span>
          </a>
        </li>
        <li>
          <a href="charts-echarts.html">
            <i class="bi bi-circle"></i><span>ECharts</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="icons-bootstrap.html">
            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-remix.html">
            <i class="bi bi-circle"></i><span>Remix Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-boxicons.html">
            <i class="bi bi-circle"></i><span>Boxicons</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->
  </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Allianz Forms</h1>
    <nav>
      <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active"><a href="index.html">Home</a></li> -->
        <li class="breadcrumb-item active">LIFE CHANGER</li>
        <li class="breadcrumb-item">AIAL</li>
        <li class="breadcrumb-item">GROUP LIFE INSURANCE</li>
        <li class="breadcrumb-item">AFFIDAVIT OF NON-FILING</li>
        <li class="breadcrumb-item">STATEMENT OF UNDERTAKING</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">LIFE CHANGER FORM</h5>
            <form class="container mt-5">
              <fieldset>
                <div class="form-group">
                  <label for="position">Position applying for:</label>
                  <input type="text" id="position" name="position" class="form-control">
                  <label for="preferredArea">Preferred area:</label>
                  <input type="text" id="preferredArea" name="preferredArea" class="form-control"><br><br>
                </div>
                <div class="form-group">
                  <label>Source:</label><br>
                  <input type="checkbox" id="referral" name="source" value="Referral">
                  <label for="referral">Referral</label>
                  <label for="referralBy">by whom:</label>
                  <input type="text" id="referralBy" name="referralBy" class="form-control">

                  <input type="checkbox" id="onlineAd" name="source" value="Online Advertisement">
                  <label for="onlineAd">Online Advertisement</label>

                  <input type="checkbox" id="walkIn" name="source" value="Walk-In">
                  <label for="walkIn">Walk-In</label>

                  <input type="checkbox" id="others" name="source" value="Others">
                  <label for="others">Others</label><br><br>
                </div>
                <div class="form-group">
                  <h2>Personal information</h2>
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" class="form-control">

                  <label for="nickname">Nickname:</label>
                  <input type="text" id="nickname" name="nickname" class="form-control"><br><br>

                  <label for="birthdate">Birth date:</label>
                  <input type="date" id="birthdate" name="birthdate" class="form-control">

                  <label for="placeOfBirth">Place of birth:</label>
                  <input type="text" id="placeOfBirth" name="placeOfBirth" class="form-control">

                  <label for="gender">Gender:</label>
                  <input type="text" id="gender" name="gender" class="form-control">

                  <label for="bloodType">Blood Type:</label>
                  <input type="text" id="bloodType" name="bloodType" class="form-control"><br><br>

                  <label for="homeAddress">Home address:</label>
                  <input type="text" id="homeAddress" name="homeAddress" class="form-control"><br><br>

                  <label for="mobileNo">Mobile Number:</label>
                  <input type="text" id="mobileNo" name="mobileNo" class="form-control">

                  <label for="landline">Landline:</label>
                  <input type="text" id="landline" name="landline" class="form-control">

                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="email" class="form-control"><br><br>
                </div>
                <div class="form-group">
                  <label for="citizenship">Citizenship:</label><br>
                  <input type="checkbox" id="citizenship" name="source" value="citizenship">
                  <label for="filipino">Filipino</label>
                  <label for="others">Others, please specify</label>
                  <input type="text" id="others" name="others" class="form-control"><br><br>

                  <label for="naturalizationInfo">If naturalized citizen of the Philippines, give date and place of
                    naturalization and attached photocopy of certificate of naturalization:</label>
                  <input type="text" id="naturalizationInfo" name="naturalizationInfo" class="form-control"><br><br>

                  <label for="maritalStatus">Marital Status:</label>
                  <input type="text" id="maritalStatus" name="maritalStatus" class="form-control">

                  <div id="ifMarried">
                    <label for="maidenName">If Married, a) Maiden Name</label>
                    <input type="text" id="maidenName" name="maidenName" class="form-control">

                    <label for="spouseName">b) Name of Spouse:</label>
                    <input type="text" id="spouseName" name="spouseName" class="form-control">
                  </div>

                  <label for="sssNo">SSS No.:</label>
                  <input type="text" id="sssNo" name="sssNo" class="form-control">

                  <label for="tin">Tax Identification No.:</label>
                  <input type="text" id="tin" name="tin" class="form-control"><br><br>

                  <label for="lifeInsuranceExperience">Life Insurance Experience:</label>
                  <input type="checkbox" id="yesLife" name="lifeInsuranceExperience" value="Yes">
                  <label for="yesLife">Yes</label>

                  <input type="checkbox" id="noLife" name="lifeInsuranceExperience" value="No">
                  <label for="noLife">No</label><br><br>

                  <label for="insuranceType">If yes, check the type:</label><br>
                  <input type="checkbox" id="traditional" name="insuranceType" value="Traditional">
                  <label for="traditional">Traditional</label>

                  <input type="checkbox" id="variable" name="insuranceType" value="Variable">
                  <label for="variable">Variable</label><br><br>

                  <label for="recentInsuranceCompany">Most recent Life Insurance Company:</label>
                  <input type="text" id="recentInsuranceCompany" name="recentInsuranceCompany" class="form-control"><br>
                </div>

                <h3>Educational Background</h3>

                <table class="table" border="1">
                  <tr>
                    <th></th>
                    <th style="text-align: center;">SCHOOL</th>
                    <th style="text-align: center;">COURSE</th>
                    <th style="text-align: center;">YEAR GRADUATED</th>
                  </tr>
                  <tr>
                    <td>High School</td>
                    <td><input type="text" name="highSchool" class="form-control"></td>
                    <td><input type="text" name="highSchoolCourse" class="form-control"></td>
                    <td><input type="text" name="highSchoolYear" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>College</td>
                    <td><input type="text" name="college" class="form-control"></td>
                    <td><input type="text" name="collegeCourse" class="form-control"></td>
                    <td><input type="text" name="collegeYear" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Graduate School</td>
                    <td><input type="text" name="graduateSchool" class="form-control"></td>
                    <td><input type="text" name="graduateCourse" class="form-control"></td>
                    <td><input type="text" name="graduateYear" class="form-control"></td>
                  </tr>
                </table>
                <h3>Employment History</h3>
                <table class="table" border="1">
                  <tr>
                    <th style="text-align: center;">NAME AND ADDRESS OF EMPLOYER</th>
                    <th style="text-align: center;">POSITION</th>
                    <th style="text-align: center;" colspan="2">EMPLOYMENT DATE</th>
                    <th style="text-align: center;">REASON FOR LEAVING</th>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName1" class="form-control"></td>
                    <td><input type="text" name="position1" class="form-control"></td>
                    <td><input type="text" name="employmentFrom1" class="form-control" placeholder="From"></td>
                    <td><input type="text" name="employmentTo1" class="form-control" placeholder="To"></td>
                    <td><input type="text" name="reason1" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName2" class="form-control"></td>
                    <td><input type="text" name="position2" class="form-control"></td>
                    <td><input type="text" name="employmentFrom2" class="form-control" placeholder="From"></td>
                    <td><input type="text" name="employmentTo2" class="form-control" placeholder="To"></td>
                    <td><input type="text" name="reason2" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="companyName3" class="form-control"></td>
                    <td><input type="text" name="position3" class="form-control"></td>
                    <td><input type="text" name="employmentFrom3" class="form-control" placeholder="From"></td>
                    <td><input type="text" name="employmentTo3" class="form-control" placeholder="To"></td>
                    <td><input type="text" name="reason3" class="form-control"></td>
                  </tr>
                </table>


                <h3>Most recent employer’s contact details</h3>
                <table class="table" border="1">
                  <tr>
                    <td>Company Name:<input type="text" name="companyName" class="form-control"></td>
                    <td>Position:<input type="text" name="position" class="form-control"></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: center;">Employer’s contact details:</td>
                  </tr>
                  <tr>
                    <td><input type="text" name="contactName" class="form-control" placeholder="Contact Name:"></td>
                    <td><input type="text" name="contactPosition" class="form-control" placeholder="Position:"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="emailAddress" class="form-control" placeholder="Email Address:"></td>
                    <td><input type="text" name="contactNumber" class="form-control" placeholder="Contact Number:"></td>
                  </tr>
                  <tr>
                    <td colspan="2">If currently employed, have you already tendered your resignation?
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="yesCheckbox">Yes</label>
                        <input type="checkbox" name="yes" class="form-check-input" id="yesCheckbox">

                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="noCheckbox">No</label>
                        <input type="checkbox" name="no" class="form-check-input" id="noCheckbox">

                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td colspan="2">1. If answer is No, are we allowed to conduct the employment verification?
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="yesCheckbox">Yes</label>
                        <input type="checkbox" name="yes" class="form-check-input" id="yesCheckbox">

                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="noCheckbox">No</label>
                        <input type="checkbox" name="no" class="form-check-input" id="noCheckbox">

                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" name="additional2" class="form-control"
                        placeholder="2. If answer in number 1 is no, please provide details "></td>
                  </tr>
                </table>
                <input type="submit" value="Submit" class="btn btn-primary">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

@include("foot");