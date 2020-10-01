<form method="post" action="">
	
	Nama Barang : <input type="text" name="nama_barang" value="<?php echo $barang->nama_barang; ?>"><br><br>
	Harga : <input type="text" name="harga" value="<?php echo $barang->harga; ?>"><br><br>
	Jumlah: <input type="number" name="jumlah" value="<?php echo $barang->jumlah; ?>"><br><br>



	<input type="submit" name="update" value="Update">
</form>