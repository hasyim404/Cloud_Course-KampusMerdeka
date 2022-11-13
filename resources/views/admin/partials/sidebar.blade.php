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
        <a class="nav-link {{ Request::is('admin/user') ? "" : "collapsed" }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse{{ Request::is('admin/user') ? " show" : "" }} " data-bs-parent="#sidebar-nav">
          <li>
            <a class="{{ Request::is('admin/user') ? "active" : "" }}" href="{{ url('admin/user') }}">
              <i class="bi bi-circle"></i><span>Kelola User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kelola User Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/course') ? "" : "collapsed" }}" 
          href="{{ url('admin/course') }}">
          <i class="bi bi-grid"></i>
          
          <span>Course</span>
        </a>
      </li>
      <!-- End Course Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/feedback') ? "" : "collapsed" }}" 
          href="{{ url('admin/feedback') }}">
          <i class="bi bi-grid"></i>
          
          <span>Feedback</span>
        </a>
      </li>
      <!-- End Feedback Nav -->

    </ul>

  </aside>