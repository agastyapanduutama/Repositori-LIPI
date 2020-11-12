	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									<?= $karya->judul_karya?>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?= $karya->penulis?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?= $karya->tanggal ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?= $karya->nama_subjek?> - <?= $karya->nama_publikasi?> - <?= $karya->nama_satker?>
									</span>
								</div>

								<p class="p-b-25">
									<?= $karya->abstrak?>
								</p>

								
							</div>

							<div class="flex-m flex-w p-t-20">
								<span class="s-text20 p-r-20">
									Tag
								</span>
								<div class="wrap-tags flex-w">
									<?php foreach ($tag as $key => $value): ?>
										<?php if ($value != ''): ?>
											<a href="<?= base_url("karya/tag/$value")?>" class="tag-item">
												<?= $value	?>
											</a>	
										<?php endif ?>
									<?php endforeach ?>
								</div>
							</div>
							<div class="flex-m flex-w p-t-20">
								<span class="s-text20 p-r-20">
									PDF
								</span>
								<div class="wrap-tags flex-w">
									<a href="<?= base_url('assets/upload/karya/')?><?= $karya->file ?>" download="">Klik untuk mengunduh</a>
								</div>
							</div>
							<div class="flex-m flex-w p-t-20">
								<span class="s-text20 p-r-20">
									No Arsip
								</span>
								<div class="wrap-tags flex-w">
									<?= $karya->no_arsip?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
