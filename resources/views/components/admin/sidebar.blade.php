<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">AdminKit</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Main
      </li>

      <!-- <li class="sidebar-item active">
        <a class="sidebar-link" href="index.html">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li> -->

      <!-- <li class="sidebar-item">
        <a class="sidebar-link" href="pages-profile.html">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
        </a>
      </li> -->

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('product.index') }}" >
          <i class="align-middle" data-feather="package"></i> <span class="align-middle">Product</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('post.index') }}">
          <i class="align-middle" data-feather="file"></i> <span class="align-middle">Post</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('region.index') }}">
          <i class="align-middle" data-feather="flag"></i> <span class="align-middle">Region</span>
        </a>
      </li>

      <li class="sidebar-header">
        Settings
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ '#' }}">
          <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
        </a>
      </li>

      <!-- <li class="sidebar-header">
        Plugins & Addons
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="charts-chartjs.html">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="maps-google.html">
          <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
        </a>
      </li> -->
    </ul>

    <!-- <div class="sidebar-cta">
      <div class="sidebar-cta-content">
        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
        <div class="mb-3 text-sm">
          Are you looking for more components? Check out our premium version.
        </div>
        <div class="d-grid">
          <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
        </div>
      </div>
    </div> -->
  </div>
</nav>