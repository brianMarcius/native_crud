<html>
<head>
<title>Data Mahasiswa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $sql = "SELECT nim,nama,fakultas,prodi,kelas from mahasiswa where nim='$nim'";
    $query = mysqli_query($koneksi,$sql) or die( mysqli_error($koneksi));                 
    $r = mysqli_fetch_array($query);
?>
<div class="container pt-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Update Data Mahasiswa <a href="tampil.php" class="btn btn-primary text-white"><i class="fa fa-bars"></i></a></h1><br>
            <form method="post" action="edit.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" placeholder="Masukan Nim" value="<?php echo $r['nim'];?>" disabled>
                    <input type="hidden" class="form-control" id="nim" placeholder="Masukan Nim" name="nim" value="<?php echo $r['nim'];?>" >
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukan Name" name="name" value="<?php echo $r['nama'];?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <input type="text" class="form-control" id="fakultas" placeholder="Masukan fakultas" name="fakultas" value="<?php echo $r['fakultas'];?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi:</label>
                    <input type="text" class="form-control" id="prodi" placeholder="Masukan prodi" name="prodi" value="<?php echo $r['prodi'];?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas" value="<?php echo $r['kelas'];?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>