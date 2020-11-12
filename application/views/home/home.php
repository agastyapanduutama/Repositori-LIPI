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
