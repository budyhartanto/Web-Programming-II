<?php 
	if ($data_buku['count'] > 0) {
		$no = 0 + $offset;
		foreach ($data_buku['object'] as $buku) {
			$no++;
?>
<tr>
	<td><?=$no?></td>
	<td><?=$buku->judul?></td>
	<td><?=$buku->pengarang?></td>
	<td><?=$buku->penerbit?></td>
	<td><?=$buku->tahun?></td>
	<td><?=$buku->jumlah_buku?></td>
	<td><?=$buku->jumlah_eksemplar?></td>
	<td><?=$buku->kategori?></td>
	<td>
		<a href="#" class="edit-data text-primary" data-id="<?=$buku->id?>">
			<i class="material-icons">edit</i>
		</a>
		<a href="#" class="hapus-data text-danger" data-id="<?=$buku->id?>">
			<i class="material-icons">delete</i>
		</a>
	</td>
</tr>
<?php
		}
	}
?>