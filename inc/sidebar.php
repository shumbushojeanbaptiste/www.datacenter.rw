<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"></i>
  </a>

  <nav class="vertnav navbar navbar-light">

    <!-- Logo -->
    <div class="w-100 mb-3 d-flex">
      <a class="navbar-brand mx-auto mt-2 text-center" href="?file=dashboard">
        <img src="../img/datacenter.png" width="30%">
      </a>
    </div>

    <h6 class="text-center mb-3">
      <small>DATA CENTER</small>
    </h6>

  

    <ul class="navbar-nav flex-fill w-100">
  
      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="home">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>

      

    
<?php if ($role == '1') { ?>
      <!-- Reports -->
      <li class="nav-item dropdown">
        <a href="#reports" data-toggle="collapse" class="dropdown-toggle nav-link">
          <i class="fe fe-bar-chart fe-16"></i>
          <span class="ml-3">Reports & Analytics</span>
        </a>
        <ul class="collapse list-unstyled pl-4" id="reports">
          <li class="nav-item"><a class="nav-link" href="statistics">Anually Statistics</a></li>
          <li class="nav-item"><a class="nav-link" href="audit-history">logs Audit</a></li>
          <li class="nav-item"><a class="nav-link" href="predictions">Hourly Predictions</a></li>
        </ul>
      </li>
   <?php } ?>
      <!-- Logout -->
      <li class="nav-item">
        <a class="nav-link text-danger" href="../logout">
          <i class="fe fe-power fe-16"></i>
          <span class="ml-3">Logout</span>
        </a>
      </li>

    </ul>
 

  </nav>
</aside>
