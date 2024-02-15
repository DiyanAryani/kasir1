<div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <form action="" class="form-signin" method="post"> 
              <h3 class="">Tambah Barang</h3>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="mb-3 mt-3">
                    <table for="" class="form-label">id</table>
                      <input type="number" name="idproduk" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <table for="" class="form-label">Nama</table>
                      <input type="text" name="name" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="" class="form-label">harga</label>
                      <input type="number" name="harga" class="form-control" require autofocus >
                    </div>
                    <div class="mb-3 mt-3">
                    <table for="" class="form-label">stok</table>
                      <input type="number" name="stok" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3">
                            <label for="foto" class="form-label">Foto<span style="color: red;"> *</span></label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                            <p style="color: red;">Hanya bisa menginput foto dengan ekstensi PNG, JPG, JPEG, SVG</p>
                        </div>
                    
                      <button name="daftar" class="btn btn-primary">Daftar</button>
                      
                    </div> 
                  </form>
                  <?php 
			include '../koneksi/koneksi.php';
				if(isset($_POST['daftar'])){
          $id = $_POST['ProdukID'];
          $id = $_POST['PenjualanID'];
          $id = $_POST['harga']
          $stok = $_POST['Stok'];
          $nama = $_POST['Terjual'];
          $nama = $_POST['Foto'];
        
          $target = "../Foto/";
          $time = date('dmYHis');
          $type = strtolower(pathinfo($_FILES["Foto"]["name"], PATHINFO_EXTENSION));
          $targetfile = $target . $time . '.' . $type;
          $filename = $time . '.' . $type;
          
          $uploadOk = 1;
        
          if (move_uploaded_file($_FILES["Foto"]["tmp_name"], $targetfile)) {
              $sql = "INSERT INTO produk (ProdukID, nama, harga, Stok, Foto) VALUES ('$id','$nama', '$harga', $stok, '$filename')";
              if ($koneksi->query($sql) === TRUE) {
                  echo "<script>alert('Berhasil menambahkan produk');window.location.href='?page=stok';</script>";
                  exit();
              } else {
                  echo "Error: " . $sql . "<br>" . $koneksi->error;
              }
          } else {
              echo "Maaf, terjadi kesalahan saat mengupload file gambar.";
          }
        
          $koneksi->close();
        }
        
        ?>

					