<!DOCTYPE html>

<?php
    include 'keloladata.php';
?>

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
            <!-- Small boxes (Stat box) -->
            <div class="container-fluid">
              <div class="row">
                <form
                  id="myForm"
                  method="post"
                  action="proses.php"
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
                        value="<?php echo $nobuku ?>"
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
                        value="<?php echo $judul ?>"
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
                        value="<?php echo $penulis ?>"
                        aria-describedby="penulishelp"
                        placeholder="isi penulis...."
                      />
                    </div>                    
                        <button type="submit" name="aksi" class="btn btn-primary mt-3">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
    </div>
    
    <!-- main js -->
    <script src="js/main.js"></script>
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
