<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

      <?php
      date_default_timezone_set('Asia/Jakarta');

      $days = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
      );

      $months = array(
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
      );

      $day = date("l"); 
      $date = date("j"); 
      $month = date("F"); 
      $year = date("Y"); 

      $today = $days[$day];
      $now_month = $months[$month];

      ?>
      <div class="h3 mb-0 text-gray-800">Update Hari Ini <?= $today ?>, <?= $date ?> <?= $now_month ?> <?= $year ?></div>

      <!-- <h1 class="h3 mb-0 text-gray-800">Update Hari Ini <?= $today ?>, <?= $date ?> <?= $now_month ?> <?= $year ?></h1> -->
      <!-- <a href="<?= base_url('gmp_patrol/report_gmp')?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

<!--     <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Jumlah Saran Masuk PDQC</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php if ($count_PDQC > 0): ?>
                    <p><?php echo $count_PDQC; ?> Saran</p>
                  <?php else: ?>
                    <p>Belum ada saran masuk.</p>
                    <?php endif; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-cubes fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                    Jumlah Saran Masuk Engineering</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php if ($count_ENG > 0): ?>
                        <p><?php echo $count_ENG; ?> Saran</p>
                      <?php else: ?>
                        <p>Belum ada saran masuk.</p>
                        <?php endif; ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-cubes fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Saran Masuk PGA</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php if ($count_PGA > 0): ?>
                            <p><?php echo $count_PGA; ?> Saran</p>
                          <?php else: ?>
                            <p>Belum ada saran masuk.</p>
                            <?php endif; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           Jumlah Saran Masuk PPIC</div>
                           <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if ($count_PPIC > 0): ?>
                              <p><?php echo $count_PPIC; ?> Saran</p>
                            <?php else: ?>
                              <p>Belum ada saran masuk.</p>
                              <?php endif; ?></div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  
                </div>
              </div>
            </body>
            </html>

            <style type="text/css">
              table {
                border-collapse: collapse;
                width: 100%;
              }

              .text-xs {
                font-size: 17px;
              }
              p {
                font-size: 17px;
              }
              li {
                font-size: 17px;
              }
              .h3{
                font-size: 23px;
                font-weight: bold;
                font-style: italic;
              }
              .chart2 {
                padding: 5px;
              }
              #chart {
                width: 100%;
              }
              canvas {
                cursor: pointer;
              }
            </style>

