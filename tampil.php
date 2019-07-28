<html>
<head>
<title>Store Data</title>
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

<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Mahasiswa <a class="btn btn-primary text-white" href="index.php"><i class="fa fa-plus"></i></a></h1><br>
            <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No.</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Fakultas</th>
                        <th>Prodi</th>
                        <th>Kelas</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";

                        $sql = "SELECT nim,nama,fakultas,prodi,kelas from mahasiswa";
                        $query = mysqli_query($koneksi,$sql) or die( mysqli_error($koneksi));;
                        $no = 1; 
                        
                        while($r = mysqli_fetch_array($query)){ 
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $r[0]; ?></td>
                        <td><?php echo $r[1]; ?></td>
                        <td><?php echo $r[2]; ?></td>
                        <td><?php echo $r[3]; ?></td>
                        <td><?php echo $r[4]; ?></td>
                        <td>
                            <a class="btn btn-primary text-white" href="update.php?nim=<?php echo $r['nim']; ?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger text-white" href="delete.php?nim=<?php echo $r['nim']; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php 
                        $no++; } 
                        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>