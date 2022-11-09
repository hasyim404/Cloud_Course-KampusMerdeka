<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/dashboard') || Request::is('admin') ? "" : "collapsed" }}" 
          href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Kelola Data</li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/kelola-user') ? "" : "collapsed" }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse{{ Request::is('admin/kelola-user') ? " show" : "" }} " data-bs-parent="#sidebar-nav">
          <li>
            <a class="{{ Request::is('admin/kelola-user') ? "active" : "" }}" href="{{ url('admin/kelola-user') }}">
              <i class="bi bi-circle"></i><span>Kelola User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside>