  <!-- partial:../../partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/services')}}">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/orders')}}">Commandes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/sliders')}}">Slides</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/tariffs')}}">Tariffs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin')}}">Utilisateurs</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Mifi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/admin/mifis')}}">Mifi</a></li>               
          </ul>
        </div>
      </li>
  
    </ul>
  </nav>
