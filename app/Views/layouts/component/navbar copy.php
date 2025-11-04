<header class="header header-sticky p-0 mb-4">
    <div class="container-fluid border-bottom px-4">
        <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
                <use xlink:href="<?php echo base_url('themes/core-ui/dist/vendors/@coreui/icons/svg/free.svg#cil-menu'); ?>"></use>
            </svg>
        </button>
        <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item"><a class="nav-link" href="#">ระบบบริหารจัดการด้านยุทธศาสตร์</a></li>

        </ul>
        <ul class="header-nav  ms-auto">
          
          <li class="nav-item py-1">
              <div class="">name : name</div>
              <div class="">id : D0001</div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-md"><img class="avatar-img" src="<?php echo base_url('themes/core-ui/dist/assets/img/avatars/user.png'); ?>" alt="user@email.com"></div>
              </a>
             
          </li>

          <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
          </li>
      </ul>
        <ul class="header-nav">
            <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="<?php echo base_url('themes/core-ui/dist/vendors/@coreui/icons/svg/free.svg#cil-bell'); ?>"></use>
                    </svg></a></li>
          
            <li class="nav-item"><a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="<?php echo base_url('themes/core-ui/dist/vendors/@coreui/icons/svg/free.svg#cil-exit-to-app'); ?>"></use>
                    </svg></a></li>
        </ul>
       
    </div>
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
                <li class="breadcrumb-item"><a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span>
                </li>
            </ol>
        </nav>
    </div>
</header>