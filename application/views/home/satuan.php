							
						<div class="item-blog p-b-80">
							<h4>Data Satuan</h4>
							<div class="item-blog-txt p-t-33">
								<ul>
								<?php foreach ($satuan as $sat): ?>
									<?php 

									if($this->uri->segment(4) == "publikasi") {
										$linkNa = "<a href='../../../karya/publikasi/$sat->id_publikasi'>$sat->nama_publikasi </a>";
									}
									if($this->uri->segment(4) == "satker") {
										$linkNa = "<a href='../../../karya/publikasi/$sat->id_satker'>$sat->nama_satker </a>";
									}
									if($this->uri->segment(4) == "subjek") {
										$linkNa = "<a href='../../../karya/subjek/$sat->id_subjek'>$sat->nama_subjek </a>";
									}

									 ?>
									<li>
										<a href="<?= base_url('')?>"></a>
										<?= $linkNa ?>	
									</li>

								<?php endforeach ?>
								</ul>
							</div>

						</div>


