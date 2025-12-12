<header class="navbar-header">
  <div class="page-container topbar-menu">
    <div class="d-flex align-items-center gap-2">

   

      <!-- Sidebar Mobile Button -->
      <a id="mobile_btn" class="mobile-btn" href="#sidebar">
        <i class="ti ti-menu-deep fs-24"></i>
      </a>

      <button class="sidenav-toggle-btn btn border-0 p-0" id="toggle_btn2">
        <i class="ti ti-arrow-bar-to-right"></i>
      </button>

      <!-- Optional Left Searchbar -->
      <div class="me-auto d-flex align-items-center header-search d-lg-flex d-none">
        <div class="input-icon position-relative me-2">
          <input type="text" class="form-control" placeholder="Search Keyword">
          <span class="input-icon-addon d-inline-flex p-0 header-search-icon"><i class="ti ti-search"></i></span>
        </div>
      </div>

    </div>

    <!-- Right Section -->
    <div class="d-flex align-items-center">

      <!-- Full Screen Button -->
      <div class="header-item me-2">
        <button class="btn topbar-link btnFullscreen" type="button">
          <i class="ti ti-maximize fs-16"></i>
        </button>
      </div>

      <!-- Light / Dark Mode -->
      <div class="header-item me-3">
        <button class="btn topbar-link" id="light-dark-mode" type="button">
          <i class="ti ti-moon fs-16"></i>
        </button>
      </div>

      <!-- Profile Dropdown -->
      <div class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
        <a href="#" class="topbar-link dropdown-toggle drop-arrow-none position-relative" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/img/users/user-40.jpg" width="38" class="rounded-1 d-flex" alt="user-image">
          <span class="online text-success">
            <i class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i>
          </span>
        </a>

        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
          <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
            <img src="assets/img/users/user-40.jpg" class="rounded-circle" width="42" height="42" alt="User">
            <div class="ms-2">
              <p class="fw-medium text-dark mb-0">
                <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'User'; ?>
              </p>
              <span class="d-block fs-13 text-muted">
                <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>
              </span>
            </div>
          </div>

          <!-- Sign Out -->
          <div class="pt-2 mt-2 border-top">
            <a href="logout.php" class="dropdown-item text-danger">
              <i class="ti ti-logout me-1 fs-17 align-middle"></i>
              <span class="align-middle">Sign Out</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>
