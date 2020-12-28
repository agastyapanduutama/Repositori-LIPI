		<?php if (isset($_GET['pencarian'])) { $pencarian = $_GET['pencarian']; ?>
		<h4> Hasil pencarian dari  "<b><?= $pencarian?></b>" : <br><br></h4>
		<?php } ?>

		<?php 
		
		if (strpos($_SERVER['REQUEST_URI'], 'karya/tag') != '') {
			$tagar = $this->uri->segment(3);
			$tags = str_replace('%20', ' ', $tagar);
			echo '<h4>Menampilkan karya berdasarkan Tag "<b>'.$tags. '</b>" :<br><br></h4> ' ;
		} 
		

		$id = $this->uri->segment(3);
		
		if (strpos($_SERVER['REQUEST_URI'], 'karya/publikasi') != '') {
			$data = $this->db->get_where('t_publikasi',['id_publikasi' => $id])->row();
			echo "<h4>Menampilkan karya berdasarkan Publikasi <b>\"$data->nama_publikasi\"</b><br><br></h4>";
		}
		
		if (strpos($_SERVER['REQUEST_URI'], 'karya/satker') != '') {
			$data = $this->db->get_where('t_satker',['id_satker' => $id])->row();
			echo "<h4>Menampilkan karya berdasarkan Satuan Kerja <b>\"$data->nama_satker\"</b><br><br></h4>";
		}
		
		if (strpos($_SERVER['REQUEST_URI'], 'karya/subjek') != '') {
			$data = $this->db->get_where('t_subjek',['id_subjek' => $id])->row();
			echo "<h4>Menampilkan karya berdasarkan Subjek <b>\"$data->nama_subjek\"</b><br><br></h4>";
		}
		
		if (strpos($_SERVER['REQUEST_URI'], 'karya/tahun') != '') {
			$data = $this->db->get_where('t_karya',['tahun' => $id])->row();
			echo "<h4>Menampilkan karya berdasarkan Tahun <b>\"$data->tahun\"</b><br><br></h4>";
		}

		
		?>


		Menampilkan <?= $awal?> sampai <?= $akhir?> dari <?= $total?> karya
		<?php foreach ($karya as $kar): ?>
							
						<div class="item-blog p-b-80">
							
							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="<?= base_url("karya/lihat/$kar->id_karya")?>" class="m-text24">
										<?= $kar->judul_karya?>
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?= $kar->penulis?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?= $kar->nama_subjek?> - <?= $kar->nama_publikasi?> - <?= $kar->nama_satker?>
									</span>

								</div>

								<p class="p-b-12">
									<?php $karyaNa = substr($kar->abstrak, 0, 200); 
									echo $karyaNa;
									?>
								</p>

								<a href="<?= base_url("karya/lihat/$kar->id_karya")?>" class="s-text20">
									Baca Selengkapnya
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<?php endforeach ?>


						<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">
						<?php if (isset($pagination)): ?>
							<?= $pagination ?>
						<?php endif ?>
					</div>
