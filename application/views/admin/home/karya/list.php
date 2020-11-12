
<div class="row">
	<div class="col-md-2">		
		<p><a href="<?= base_url('backend/tambah_artikel')?>" class="btn btn-success">
		<i class="fa fa-plus"> Tambahkan Karya</i></a></p>	
	</div>
	<div class="col-md-7">

			<?php
			if ($this->session->flashdata('sukses')) {
		        echo '<div class="alert alert-sm alert-success">';
		        echo $this->session->flashdata('sukses');
		        echo '</div>';
		      }
			?>
	</div>
</div>
<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               	<thead>
		<tr>
			<th style="width: 5px">No</th>
			<th style="width: 250px">Judul</th>
			<th style="width: 150px">Penulis</th>
			<th style="width: 50px">Tahun</th>
			<!-- <th style="width: 250px">ISSN / ISBN / IBSN</th> -->
			<th style="width: 50px" >No Arsip</th>
			<th style="width: 50px" >Status</th>
			<th style="width: 50px" >Author</th>
			<th style="width: 50px">Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $no=1; foreach ($repo as $list ) { ?>

			<?php 
            $kalimat = $list->tag_penulis;

            $data = explode(",", $kalimat);
            ?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?= $list->judul_artikel?></td>
				<td><?= $list->penulis?></td>
				<td><?= $list->tahun?></td>
				<!-- <td><?= $list->issn?></td> -->
				<td><?= $list->no_arsip?></td>
				<td>
					<?php
						if ($list->status == 0) {
							echo "DIsimpan Draf";
						}elseif ($list->status == 1) {
							echo "Belum Dikonfirmasi";
						}elseif ($list->status == 2) {
							echo "Dipublikasikan";
						}else{
							echo "";
						}
					 ?>
				</td>

				<td><?= $list->nama_user?></td>

				

				<td>
					<?php if ($_SESSION['level'] == '1' || $_SESSION['level'] == '3'): ?>
					<a href="<?= base_url('backend/update_karya/'.$list->id_artikel)?>" style="width: 80px" class="btn btn-success btn-xs" ><i class="fa fa-lock"></i> Konfirmasi </a>
					<?php endif ?>
					<a href="<?= base_url('backend/edit_artikel/'.$list->id_artikel)?>" style="width: 80px" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
					<a href="<?= base_url('frontend/detail_info/'.$list->id_artikel)?>/<?= $list->id_satker ?>/<?= $data[0] ?>" style="width: 80px" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> Lihat</a>
					<a href="<?= base_url('backend/hapus_artikel/'.$list->id_artikel)?>"  onclick="javascript: return confirm('Anda yakin hapus ?')" style="width: 80px" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
		<?php } ?>
		
	</tbody>
</table>




            </div>
            <!-- /.box-body -->
          </div>


