<!-- ✅ Simple Sidebar Layout -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-logo">
    <div>
      <a href="index.php" class="logo logo-normal"><img width="100" src="assets/img/logo.png" alt="Logo"></a>
      <a href="index.php" class="logo-small"><img width="70" src="assets/img/logo.png" alt="Logo"></a>
      <a href="index.php" class="dark-logo"><img width="60" src="assets/img/logo.png" alt="Logo"></a>
    </div>

    <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
      <i class="ti ti-arrow-bar-to-left"></i>
    </button>

    <button class="sidebar-close">
      <i class="ti ti-x align-middle"></i>
    </button>
  </div>

  <div class="sidebar-inner" data-simplebar>
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <!-- Title -->
        <li class="menu-title"><span>Main Menu</span></li>

        <!-- Dashboard -->
        <li>
          <a href="index.php">
            <i class="ti ti-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="leads.php">
            <i class="ti ti-chart-arcs"></i>
            <span>Leads</span>
          </a>
        </li>

       

        <!-- Logout -->
        <li>
          <a href="logout.php">
            <i class="ti ti-logout"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
