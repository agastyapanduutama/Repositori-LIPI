							
						<div class="item-blog p-b-80">
							<h4>Data Satuan</h4>
							<div class="item-blog-txt p-t-33">
								<ul>
								<?php foreach ($satuan as $sat): ?>
									<?php 


									if($this->uri->segment(4) == "publikasi") {
										$linkNa = "<a href='../../../karya/publikasi/$sat->id_publikasi/1'>$sat->nama_publikasi ($sat->total)</a>";
									}
									if($this->uri->segment(4) == "satker") {
										$linkNa = "<a href='../../../karya/publikasi/$sat->id_satker/1'>$sat->nama_satker ($sat->total)</a>";
									}
									if($this->uri->segment(4) == "subjek") {
										$linkNa = "<a href='../../../karya/subjek/$sat->id_subjek/1'>$sat->nama_subjek ($sat->total)</a>";
									}
									if($this->uri->segment(4) == "tahun") {
										$linkNa = "<a href='../../../karya/tahun/$sat->tahun/1'>$sat->tahun ($sat->total)</a>";
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


