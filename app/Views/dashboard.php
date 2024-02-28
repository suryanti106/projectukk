<?=$this->extend('layout/template'); ?>

<?=$this->section('content'); ?>
<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Selamat Datang Di Aplikasi Kasir </h5>
                  </div>
                </div>
          </div>
        </div><!-- End Customers Card -->
            <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Penjualan Hari Ini</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                      <h6>0</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                    <div class="card-body">
                      <h5 class="card-title">Penjualan Bulan Ini</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-currency-dollar"></i>
                           </div>
                          <div class="ps-3">
                          <h6>0</h6>
                       <span class="text-success small pt-1 fw-bold">8%</span>
                      </div>
                    </main><!-- End #main -->

<?=$this->endSection(); ?>