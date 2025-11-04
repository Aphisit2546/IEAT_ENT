<header class="header header-diw-app p-0">
  <div class="container-fluid header-container">
    <button
      class="header-toggler"
      type="button"
      onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        fill="currentColor"
        class="bi bi-list"
        viewBox="0 0 16 16">
        <path
          fill-rule="evenodd"
          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
      </svg>
    </button>

    <div class="header-nav mx-auto">
      <div class="header-nav-diw">
        <div class="header-nav-diw__name">
          <font style="color:#115DBF; font-size:25px;"><b>ALL CONNECT ระบบบริหารจัดการด้านยุทธศาสตร์</b></font>
        </div>
      </div>
    </div>
    <div class="header-nav display-pc">
      <font style="color:#115DBF; font-size:18px;"><b><?php echo session('GroupName'); ?></b></font>
      &nbsp;&nbsp;&nbsp;
      <div class=" header-nav-button">
        <!--
        <a
          class="nav-link py-0 pe-0"
          data-coreui-toggle="dropdown"
          href="javascript:void(0)"
          role="button"
          aria-haspopup="true"
          aria-expanded="false">
          <div class="avatar avatar-md">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="100%"
              height="100%"
              fill="currentColor"
              class="bi bi-person-circle"
              viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
              <path
                fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
            </svg>
          </div>
        </a>
        -->
        <a
          class="btn btn-navbar-button"
          href="<?php echo base_url('dashboard'); ?>"
          role="button">
          <svg
            width="24px"
            height="24px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3.99999 10L12 3L20 10L20 20H15V16C15 15.2044 14.6839 14.4413 14.1213 13.8787C13.5587 13.3161 12.7956 13 12 13C11.2043 13 10.4413 13.3161 9.87868 13.8787C9.31607 14.4413 9 15.2043 9 16V20H4L3.99999 10Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg>
          Home
        </a>
        <a
          class="btn btn-navbar-button"
          href="<?php echo base_url('/'); ?>">
          <svg
            width="24px"
            height="24px"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            fill="none">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1"></path>
          </svg>
          Logout
        </a>
      </div>
    </div>
  </div>
  <!--
  <div class="container-fluid px-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0">
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">
            <i class="bi bi-house-door-fill"></i>
          </a>
        </li>
        <li class="breadcrumb-item active"><span>Dashboard</span></li>
      </ol>
    </nav>
  </div>
  -->
</header>