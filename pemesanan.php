<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan JWD</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script>
    // Fungsi Untuk Memilih Paket Melalui Combo Box
    function pilihPaket(pkt) {
        var selectedpaket = [];
        // Hitung panjang array
        for (i = 0; i < pkt.paket.length; i++) {
            if (pkt.paket[i].checked) {
                selectedpaket.push(pkt.paket[i].value);
            }
        }
        // Gabungkan hasil array dengan pemisah koma
        document.getElementById("pilihan").value = selectedpaket.join(", ");
    }
</script>

  </head>
  <body>
    <h2 class="text-center">GASS PESAN BOLOOO</h2>

    <!-- gambar beranda -->
    <div class="container mt-4">
      <img src="image/gambar2.jpg" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;" alt="Banner Wisata">
    </div>
    <!-- Tampilan pilihan navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pemesanan.php">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galery.html">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--form pemesanan-->
    <br>
    <form action="kirim_data.php" method="POST">
    <div class="container">
        <div class="row justify-content-center">  
            <div class="col-6">
                <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama">
                </div>
                <div class="mb-3">
                <label for="nohp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nohp" placeholder="Nama Pemesan" name="nohp">
                </div>
                <label for="durasi" class="form-label">Durasi Perjalanan</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi">
                <span class="input-group-text" id="basic-addon2">Hari</span>
                </div>
                <label for="peserta" class="form-label">Jumlah Peserta</label> &nbsp;
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="peserta" name="peserta">
                <span class="input-group-text" id="basic-addon2">Orang</span>
                </div>
                <label for="peserta" class="form-label">Diskon</label> &nbsp;
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="peserta" placeholder="0" name="diskon">
                <span class="input-group-text" id="basic-addon2">%</span>
                </div>
                <label for="peserta" class="form-label">Paket Perjalanan</label><br>
                <div class="form-check form-check-inline">
                <input name="paket" class="form-check-input" type="checkbox" id="penginapan" onclick="pilihPaket(this.form)" value="Penginapan">
                <label class="form-check-label" for="inlineCheckbox1">Penginapan</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="paket" class="form-check-input" type="checkbox" id="transportasi" onclick="pilihPaket(this.form)" value="Transportasi">
                <label class="form-check-label" for="inlineCheckbox2">Transportasi</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="paket" class="form-check-input" type="checkbox" id="makan" onclick="pilihPaket(this.form)" value="Makan">
                <label class="form-check-label" for="inlineCheckbox2">Makan</label>
                </div>
                <div class="mb-3">
                <label for="nohp" class="form-label">Pilihan Anda</label>
                <input type="text" class="form-control" id="pilihan" placeholder="" name="pilihan">
                </div>
                <br><br>    
                <label for="peserta" class="form-label">Harga Paket</label><br>
                <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control" name="harga_paket">
                <span class="input-group-text">.00</span>
                </div>
                <label for="peserta" class="form-label">Jumlah Tagihan</label><br>
                <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control" name="total_biaya">
                <span class="input-group-text">.00</span>
                </div>

                <!--button-->
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary me-2" onclick="window.location.href='tabel_pesanan.php'">Lihat Pesanan</button>
                    <button type="submit" class="btn btn-success me-auto" name="simpan">Simpan</button>
                    <button type="button" class="btn btn-danger ms-auto" onclick="resetForm()">Clear</button>
                </div>

                <!--clear semua inputan-->
                <script>
                     function resetForm() {
                        document.querySelector('form').reset();
                        document.getElementById("pilihan").value = "";
                        }
                </script>
            </div>
        </div>    
    </div>
    </form>



    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
