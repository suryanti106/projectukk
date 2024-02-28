<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?=site_url('list-produk'); ?>">Produk</a>
      </li>
      <li>
      <a href="<?=site_url('list-satuan'); ?>">Satuan</a>
      </li>
      <li>
      <a href="<?=site_url('list-kategori'); ?>">Kategori</a>
      </li>
      <li>
        <a href="<?=site_url('list-user'); ?>">User</a>
      </li>
      </li>
      </li>
      
    </ul>
  </li><!-- End Forms Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?=site_url('form-penjualan');?>">
          <i class="bi bi-circle"></i><span>Penjualan</span>
        </a>
      </li>
</ul>
<li class="nav-item">
        <li class="nav-item">
        <a class="nav-link collapsed" href="<?=site_url('list-laporan');?>">
          <i class="bi bi-file-earmark"></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Blank Page Nav -->

  </aside><!-- End Sidebar-->
  