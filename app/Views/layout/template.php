<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Parveen Traders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
 

</head>

<body>


<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Parveen Traders</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-info">
          <span class="user-name">Reza
            <strong>Pahlevi</strong>
          </span>
          <span class="user-role">Member</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Menu</span>
          </li>
          <li>
            <a href="/">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Trading Plan</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/active-plan">Active Plan</a>
                </li>
                <li>
                  <a href="/running-transaction">Running Transaction</a>
                </li>
                <li>
                  <a href="/finish-plan">Finish Plan</a>
                </li>
                <li>
                  <a href="/cancel-plan">Cancel Plan</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-play-circle"></i>
              <span>Education</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/review-trading-plan">Review Trading Plan</a>
                </li>
                <li>
                  <a href="/webinar-record">Webinar Record</a>
                </li>
                <li>
                  <a href="vip-course">VIP Course</a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-rocket"></i>
              <span>Tools</span>
              <span class="badge badge-pill badge-danger">Cooming Soon</span>
            </a>
          </li>

          <li class="header-menu">
            <span>Recommended</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Traders Family</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Broker Terbaik</span>
            </a>
          </li>
          
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Tiktok</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    
  </nav>

<?= $this->renderSection('content'); ?>

<footer class="text-center">
        <div class="mb-2">
          <small>
            © 2022 Parveen Traders <i class="fa fa-chart-line" style="color:black"></i>
          </small>
        </div>
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    
    
</body>

</html>