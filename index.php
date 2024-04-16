<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />

    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
      />
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css" />

      <!-- css -->
      <link rel="stylesheet" href="style/style.css">
    </head>
    
    <body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Jumlah buku -->
            <div class="row">
              <div class="col-6 offset-md-3 text-center">
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Jumlah Buku Tersedia</p>
                    <?php
                      include 'totalbuku.php';
                    ?>
                    <h3>
                      <?php
                      echo $hitungdata;
                      ?>
                    </h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- tambah buku -->
          <div class="container-fluid justify-content-center">
              <div class="row">
                <form
                  id="myForm"
                  action="insert.php"
                  method="post"
                  class="text-center"
                  onsubmit="return validateForm()"
                >
                  <!-- input no buku -->
                  <div class="col-6 offset-md-3">
                    <div class="mb-3">
                      <label>Nomor Buku</label>
                      <input
                        class="form-control"
                        id="nobuku"
                        name="nobuku"
                        aria-describedby="nobukuhelp"
                        placeholder="isi nomor buku...."
                      />
                    </div>
                  </div>
                  <!-- input judul -->
                  <div class="col-6 offset-md-3">
                    <div class="mb-3">
                      <label>Judul Buku</label>
                      <input
                        class="form-control"
                        id="judul"
                        name="judul"
                        aria-describedby="judulhelp"
                        placeholder="isi judul...."
                      />
                    </div>
                  </div>
                  <!-- input penulis -->
                  <div class="col-6 offset-md-3">
                    <div class="mb-3">
                      <label>Penulis</label>
                      <input
                        class="form-control"
                        id="penulis"
                        name="penulis"
                        aria-describedby="penulishelp"
                        placeholder="isi penulis...."
                      />
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          <!-- data buku -->
          <div class="container-fluid">
            <div class="row">
              <!-- searchbox -->
            <div class="col-4 offset-md-4">
              <input
                class="form-control mb-3 mt-3"
                type="text"
                id="searchInput"
                placeholder="Cari Judul...."
              />
            </div>
              <div class="row">
                <table id="myTable" class="table table-bordered table-hover col-6 offset-md-3">
                  <thead>
                    <tr>
                      <th class="text-center">No Buku</th>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <?php
                    include 'tampildata.php';
                    
                    while($result = mysqli_fetch_assoc($sql)){
                  ?>
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <?php echo $result['no_buku']; ?>
                      </td>
                      <td>
                        <?php echo $result['judul']; ?>
                      </td>
                      <td>
                        <?php echo $result['penulis']; ?>
                      </td>
                      <td class="text-center">
                        <a href="kelola.php?ubah=<?php echo $result['no_buku']; ?>" type="button" class="btn btn-warning">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="proses.php?hapus=<?php echo $result['no_buku']; ?>" type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus?')">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <?php
                    }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    

    <!-- main js -->
    <script src="js/main.js"></script>
    <script src="js/caridata.js"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
  </body>
</html>
