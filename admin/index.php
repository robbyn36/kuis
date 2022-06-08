<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">
	    <!-- TABLE STYLES-->
    <link href="dataTables.bootstrap.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
	<?php include "nav.php" ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Data Calon Siswa</h1>
						<?php
							include "../config.php";
							$query = mysql_query("SELECT COUNT(id) from calon_siswa");
							while($data = mysql_fetch_array($query)){
							$jml_siswa = $data['COUNT(id)'];
							}
						?>
						<h3>Saat ini ada <?php echo $jml_siswa ?> Calon siswa yang terdaftar,</h3>
						<br>
						<table border="1" class="table table-striped table-bordered table-hover" id="contoh">
							<thead>
								<tr>
									<td>ID</td>
									<td>Nama</td>
									<td>Nisp</td>
									<td>Nilai</td>
									<td>Cetak</td>
									<td>Aksi</td>
							</thead>
							<tbody>
					
                        <?php
						
						$query = mysql_query("SELECT * FROM calon_siswa where cetak='belum'");
						while ($data= mysql_fetch_array($query)){?>
						
							<tr>
								<td><?php echo $data['id'] ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['nisp'] ?></td>
								<td><?php echo $data['nilai'] ?></td>
								<td><?php echo $data['cetak'] ?></td>
								<td align="">	
									<a href="cetak.php?id=<?php echo $data['id']?>"  ><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Cetak</a>
								</td>
								
							</tr>
						
						
						<?php 
						}
						?>
						</tbody>
						</table>
						
                        <a href="cetak_data.php" class="btn btn-info" >Cetak Semua Data</a>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	 <!-- DATA TABLE SCRIPTS -->
    <script src="dataTables/jquery.dataTables.js"></script>
    <script src="dataTables/dataTables.bootstrap.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script>
            $(document).ready(function () {
                $('#contoh').dataTable();
            });
    </script>
</body>

</html>