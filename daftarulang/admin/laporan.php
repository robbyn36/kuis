<table border="1" class="table table-striped table-bordered table-hover" id="contoh">
							<thead>
								<tr>
									<td>ID</td>
									<td>Nama Siswa</td>
									<td>Nisn</td>
									<td>Tempat Tanggal Lahir</td>
									<td>Kewarganegaraan</td>
									<td>Cetak Data</td>
							</thead>
							<tbody>
					
                        <?php
						
						$query = mysql_query("SELECT * FROM registrasi");
						while ($data= mysql_fetch_array($query)){?>
						
							<tr>
								<td><?php echo $data['id'] ?></td>
								<td><?php echo $data['nama_siswa'] ?></td>
								<td><?php echo $data['nisn'] ?></td>
								<td><?php echo $data['ttl'] ?></td>
								<td><?php echo $data['kewarganegraan'] ?></td>
								<td align="">	
									<a href="cetak_pdf.php?id=<?php echo $data['id']?>"  ><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Cetak</a>
								</td>
								
							</tr>
						
						
						<?php 
						}
						?>
						</tbody>
						</table>
						<a href="export.php"class="btn btn-info">Cetak Data Keseluruhan(.xls)</a>	