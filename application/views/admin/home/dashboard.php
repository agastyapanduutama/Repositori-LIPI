
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Karya Terpublikasi</h4>
                  </div>
                  <div class="card-body">
                    <?= $to_pub ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kontributor</h4>
                  </div>
                  <div class="card-body">
                    <?= $to_kontrib ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pustakawan</h4>
                  </div>
                  <div class="card-body">
                    <?= $to_pusta ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Karya belum terkonfirmasi</h4>
                  </div>
                  <div class="card-body">
                    <?= $to_non_pub?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Karya Terbaru</h4>
                  </div>
                </div>
               <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table id="list_karya" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Judul</th>
                                  <th>Penulis</th>
                                  <th>Tahun</th>
                                  <th>No Arsip</th>
                                  <th>Author</th>
                                  <!-- <th>Aksi</th> -->
                              </tr>
                          </thead>

                          <tbody>
                              <?php $no=1; foreach ($karya as $k): ?>
                                  <tr>
                                      <td><?= $no++?></td>
                                      <td><?=$k->judul_karya ?></td>
                                      <td><?=$k->penulis ?></td>
                                      <td><?=$k->tahun ?></td>
                                      <td><?=$k->no_arsip ?></td>
                                      <td><?=$k->nama_user ?></td>
                                      <!-- <td></td> -->
                                  </tr>
                              <?php endforeach ?>
                          </tbody>

                      </table>
                  </div>
              </div>
          </div>
          </div>
          </div>
          