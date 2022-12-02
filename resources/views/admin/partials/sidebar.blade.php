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
        <a class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/users/*/edit') ? "" : "collapsed" }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse{{ Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/users/*/edit') ? " show" : "" }} " data-bs-parent="#sidebar-nav">
          <li>
            <a class="{{ Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/users/*/edit') ? "active" : "" }}" href="{{ url('admin/users') }}">
              <i class="bi bi-circle"></i><span>Kelola User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kelola User Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/course') || Request::is('admin/course/create') || Request::is('admin/course/*') || Request::is('admin/course/*/edit') ? "" : "collapsed" }}" 
          href="{{ url('admin/course') }}">
          <i class="bi bi-cloud-haze2-fill"></i>
          
          <span>Course</span>
        </a>
      </li>
      <!-- End Course Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/modul') || Request::is('admin/modul/create') || Request::is('admin/modul/*') || Request::is('admin/modul/*/edit') ? "" : "collapsed" }}" 
          href="{{ url('admin/modul') }}">
          <i class="bi bi-files"></i>
          
          <span>Modul</span>
        </a>
      </li>
      <!-- End Testimoni Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/feedback') || Request::is('admin/feedback/create') || Request::is('admin/feedback/*') || Request::is('admin/feedback/*/edit') ? "" : "collapsed" }}" 
          href="{{ url('admin/feedback') }}">
          <i class="bi bi-envelope-fill"></i>
          
          <span>Feedback</span>
        </a>
      </li>
      <!-- End Feedback Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/testimoni') || Request::is('admin/testimoni/create') || Request::is('admin/testimoni/*') || Request::is('admin/testimoni/*/edit') ? "" : "collapsed" }}" 
          href="{{ url('admin/testimoni') }}">
          <i class="bi bi-chat-right-quote"></i>
          
          <span>Testimoni</span>
        </a>
      </li>

      <hr class="px-5">
      <li class="nav-heading">Go To</li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ url('/home') }}">
              <i class="bi bi-house"></i>
              <span>Landingpage</span>
          </a>
      </li>
      
      <!-- End Search Bar -->
      <!-- End Testimoni Nav -->

    </ul>

  </aside>