<nav class="main-sidebar ps-menu">
  <div class="sidebar-toggle action-toggle">
    <a href="#">
      <i class="fas fa-bars"></i>
    </a>
  </div>

  <div class="sidebar-opener action-toggle">
    <a href="#">
      <i class="ti-angle-right"></i>
    </a>
  </div>

  <div class="sidebar-header">
    <div class="text">AR</div>

    <div class="close-sidebar action-toggle">
      <i class="ti-close"></i>
    </div>
  </div>

  <div class="sidebar-content">
    <ul>
      <li class="{{ Request::is('home') ? 'active' : '' }}">
        <a href="/home" class="link">
          <i class="ti-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      @can('read configuration')
        <li>
          <a href="#" class="main-menu has-dropdown">
            <i class="ti-desktop"></i>
            <span>Konfigurasi</span>
          </a>
          
          <ul class="sub-menu ">
            @can('read role')
            <li><a href="/roles" class="link"><span>Roles</span></a></li>
            @endcan
          </ul>
      </li>
      @endcan

      <li class="{{ Request::is('siswa*') ? 'active' : '' }}">
        <a href="#" class="main-menu has-dropdown">
          <i class="ti-desktop"></i>
          <span>Data Siswa</span>
        </a>

        <ul class="sub-menu ">
          <li><a href="/siswa" class="link"><span>Show</span></a></li>
          <li><a href="/siswa/create" class="link"><span>Add</span></a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="main-menu has-dropdown">
          <i class="ti-book"></i>
          <span>Data Guru</span>
        </a>

        <ul class="sub-menu ">
          <li><a href="form-element.html" class="link">
              <span>Form Element</span></a>
          </li>

          <li><a href="form-datepicker.html" class="link">
              <span>Datepicker</span></a>
          </li>

          <li><a href="form-select2.html" class="link">
              <span>Select2</span></a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="main-menu has-dropdown">
          <i class="ti-notepad"></i>
          <span>Data Pelanggaran</span>
        </a>

        <ul class="sub-menu">
          <li><a href="error-404.html" target="_blank" class="link"><span>Jenis Pelanggaran</span></a></li>
          <li><a href="error-403.html" target="_blank" class="link"><span>Error 403</span></a></li>
          <li><a href="error-500.html" target="_blank" class="link"><span>Error 500</span></a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="main-menu has-dropdown">
          <i class="ti-layers-alt"></i>
          <span>Penilaian</span>
        </a>

        <ul class="sub-menu ">
          <li><a href="pages-blank.html" class="link"><span>Blank</span></a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="main-menu has-dropdown">
          <i class="ti-power-off"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>
</nav>