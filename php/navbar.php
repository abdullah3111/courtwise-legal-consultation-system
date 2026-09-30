 <?php
 $current_page = basename($_SERVER['PHP_SELF']);
 ?>
  <div class="site-wrap">

<div class="site-navbar mt-4">
    <div class="container py-1">
      <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-3">
          <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong class="text-uppercase">COURTW<span class="text-primary">I</span>SE</strong></a></h1>
        </div>
        <div class="col-4 col-md-4 col-lg-9">
          <nav class="site-navigation text-right text-md-right" role="navigation">

            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">
                <a href="index.php" >Home</a>
              </li>
              <li class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">
                <a href="about.php">About</a>
            </li>
              <li class="<?= ($current_page == 'practice-single.php') ? 'active' : '' ?>">
                <a href="practice-single.php">Practice Area</a></li>
              <li class="<?= ($current_page == 'case-studies.php') ? 'active' : '' ?>" ><a href="case-studies.php">Case Studies</a></li>
              <li class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>" ><a href="contact.php">Contact</a></li>
              <li> <?php if (!isset($_SESSION['username'])): ?>
    <a href="php/login.php">Login</a> <a href="php/register.php">Register</a>
<?php else: ?>
    <?php
    if ($_SESSION['role'] == 'admin'): ?>
        <a href="php/admin_dashboard.php">My Dashboard</a>
    <?php elseif ($_SESSION['role'] == 'customer'): ?>
        <a href="php/customer_dashboard.php">My Dashboard</a>
    <?php elseif ($_SESSION['role'] == 'lawyer'): ?>
        <a href="php/lawyer_dashboard.php">My Dashboard</a>
    <?php endif; ?>
    <a href="php/logout.php">Logout</a>
<?php endif; ?></li>
            </ul>
          </nav>
        </div>
       

      </div>
    </div>
  </div>
</div>