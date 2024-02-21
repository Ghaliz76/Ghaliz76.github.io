<?php
include "header.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Kasir</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2></h2>

<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Penjualan</th>
					<th>Total Harga</th>
					<th>Tanggal Penjualan</th>
					<th>Id Pelanggan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include '../koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from penjualan");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['PenjualanID']; ?></td>
						<td>Rp. <?php echo $d['TotalHarga']; ?></td>
						<td><?php echo $d['TanggalPenjualan']; ?></td>
						<td><?php echo $d['PelangganID']; ?></td>
					</tr>
                    <?php } ?>
    </tbody>
</table>

<div class="modal-footer">
<a href="laporancetak.php" class="btn btn-danger btn-sm mt-2">cetak</a>
</div>
</body>
</html>
