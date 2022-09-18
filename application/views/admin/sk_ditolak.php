<div>
	<fieldset class="border-primary">
		<div class="table">
			<div class="row">
				<div class="text-capitalize text-center col-md-12">
					<img src="<?= base_url('/public/img/') ?>nu_logo.png" width="205px" class=" p-2 float-left">
					<img src="<?= base_url('assets/img/') ?>images.jpg" width="225px" alt="Logo Tuv" class="p-2 float-right">
					<p class="h4 font-weight-bold mt-3">PENERIMAAN PESERTA DIDIK (PPD)</p>
					<p class="h5 font-weight-bold">SMK MA'ARIF NU 1 AJIBARANG </p>
					<p class="h5 font-weight-bold">TAHUN AJARAN 2020/2021</p>
					<p class="text-muted">
						<i class="text-sm-left">Jl.Ajibarang-Tegal Km 1, Ajibarang , Banyumas , 53163 , Jawa Tengah , Indonesia , Telp/Fax (0281)571284 , E-mail : SMKMANUSA_Ajibarang@yahoo.co.id , Website <span class="text-lowercase"><a href="http://smkmanusa-ajb.sch.id">http://smkmanusa-ajb.sch.id</a></i>
					</p>
					<span class="font-weight-bold">====================================================================================================================================</span>
				</div>
				<div class="col-md-12 text-uppercase text-center">
					<ul class="list-unstyled mt-4 mb-4">
						<li>
							<span class="mt-3 font-weight-bold">
								<u>
									<h3>KEPUTUSAN PANITIA PPD</h3>
								</u>
								<span>
						</li>
						<li>
							<span class="text-center">NOMOR :
								SMK/PPDB/PPDBMRF-002
							</span>
						</li>
					</ul>
					</span>
				</div>
				<div class="col-md-12 text-uppercase text-center">
					<ul class="list-unstyled mt-4 mb-4">
						<li>
							<span class="mt-3 font-weight-bold">
								PANITIA PPD SMK MA'ARIF NU 1 AJIBARANG
								<span>
						</li>
						<li>
							<span class="font-weight-bold">
								TAHUN AJARAN 2020 / 2021
							</span>
						</li>
					</ul>
					</span>
				</div>
				<div class="col-md-12 ">
					<table>
						<tr class="text-justify">
							<td><b>Mengingat</b></td>
							<td> : </td>
							<td align="left">Keputusan Kepala SMK MA'ARIF NU 1 Ajibarang tentang proyeksi daya tampung sekolah Tahun Pelajaran 2020 / 2021.</td>
						</tr>
						<tr class="text-justify">
							<td><b>Menimbang</b></td>
							<td> : </td>
							<td align="left">Hasil Seleksi Administrasi, Nilai Raport Mapel UN, Tes Wawancara dan Kesehatan serta Prestasi PPD SMK MA'ARIF NU 1 Ajibarang Tahun Pelajaran 2018/2019.</td>
						</tr>
					</table>
				</div>
				<div class="mx-auto mb-4 col-md-12 text-center">
					<fieldset class="border">
						<p class=" mt-4">
						<h3><strong>MEMUTUSKAN </strong></h3>
						</p>
						<p>
						<h3 class="font-weight-bold"><strike>Diterima</strike> / <u>Tidak Diterima</u></h3>
						</p>
					</fieldset>
				</div>
				<div class="col-md-12 ">
					<table class="table">
						<tr class="text-justify">
							<td><b>Menetapkan</b></td>
							<td> : </td>
							<td>
								<ol class="text-justify">
									<li>
										<?php foreach ($detail as $dt) : ?>
											<p>Nama : <b class="text-uppercase"><?= $dt->nama_lengkap ?></b></p>
											<p>Nomor Pendaftaran :
												<b>
													<?= $dt->kode_pendaftaran ?>
												</b>
											</p>
											<p> Jurusan : </p>
											<p>
												<?php if ($dt->jurusan == 'tav') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK AUDIO VIDEO (TAV)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tei') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK ELEKTRONIKA INDUSTRI (TEI)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tkro') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK KENDARAAN RINGAN DAN OTOMOTOTIF (TKRO)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tbsm') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK BISNIS DAN SEPEDA MOTOR (TBSM)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tkj') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK KOMPUTER DAN JARINGAN (TKJ)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'rpl') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													REKAYASA PERANGKAT LUNAK (RPL)
												</p>
											</fieldset>
										<?php } else {
													echo 'Jurusan TIdak Tersedia';
												} ?>
										</p>
									</li>
								<?php endforeach ?>
								<li>
									<p>Bagi calon peserta didik yang dinyatakan <b><i>DITERIMA</i> wajib membayar sebagian biaya daftar ulang,</b> dengan ketentuan sebagai berikut :</p>
									<p>
									<ul type="a">
										<li>Rp 1.200.000 , berhak mendapatkan seragam sekolah, <b>ATAU</b></li>
										<li>Rp 500.000 , tanda jadi diterima (belum mendapatkan seragam) </li>
										<li>Waktu pembayaran 2 poin <b>a</b> atau <b>b</b> dilakukan sejak SK ini diterbitkan sampai 7 (tujuh) hari dari tanggal SK</li>
										<li>Daftar ulang penuh dapat dilakukan setelah ada rincian biaya lengkap.</li>
									</ul>
									</p>
								</li>
								<li>
									<p>Seluruh calon peserta didik yang sudah mendaftar ulang wajib hadir di SMK Ma'arif NU 1 Ajibarang pada hari <b>Sabtu</b>, Tanggal <b>14 Juli 2020</b> Pukul 08.00 WIB dengan memakai seragam OSIS SMP/Mts. </p>
								</li>
								<li>
									<p>
										Bagi calon peserta didik yang <b>TIDAK MENDAFTAR ULANG dan tidak ada konfirmasi</b> sesuai dengan keterangan no <b>2</b> poin <b>c</b> maka Surat Keputusan Penerimaan ini ditunda mengacu pada kuota yang tersedia.
									</p>
								</li>
								<li>
									<p>
										Jika dikemudian hari terdapat kekeliruan dalam keputusan ini akan segera ditinjau kembali untuk diadakan pembetulan sebagaimana mestinya.
									</p>
								</li>
								</ol>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 ">
				<ul class="list-unstyled float-right mr-4 text-justify">
					<li>Ditetapkan di : Ajibarang</li>
					<li>Tanggal : <b><?= date('d F Y') ?></b></li>
				</ul>
			</div>
		</div>
		<div class="text-center">
			<div class="row mt-4 ">
				<div class="col-md-6">
					<p class="text-center ml-5">Mengetahui ,</p>
				</div>
			</div>
			<div class="row mb-5 ml-2 mr-2">
				<div class="col-md-6">
					<p class="mb-5 pb-5">Kepala SMK Ma'arif NU 1 Ajibarang,</p>
					<p class="mb-1 mt-5"><b>Zaenudin, S.Pd.,M.Si</b></p>
					<span class="float-left text-left ml-4 text-muted mt-3 mb-2"><strong>Contact Konfirmasi Panitia : 0813 2705 1820 (Tosirin,S.pd)</strong></span>
				</div>
				<div class="col-md-6">
					<p class="mb-5 pb-5">Ketua Panitia PPD,</p>
					<p class="mb-1 mt-5"><b>Mugi Heriyadi, S.Pd</b></p>
				</div>
			</div>
		</div>
		<div class="table">
			<div class="row">
				<div class="text-capitalize text-center col-md-12">
					<img src="<?= base_url('/public/img/') ?>nu_logo.png" width="205px" class=" p-2 float-left">
					<img src="<?= base_url('assets/img/') ?>images.jpg" width="250px" alt="Logo Tuv" class="p-2 float-right">
					<p class="h4 font-weight-bold mt-3">PENERIMAAN PESERTA DIDIK (PPD)</p>
					<p class="h5 font-weight-bold">SMK MA'ARIF NU 1 AJIBARANG </p>
					<p class="h5 font-weight-bold">TAHUN AJARAN 2020/2021</p>
					<p class="text-muted">
						<i class="text-sm-left">Jl.Ajibarang-Tegal Km 1, Ajibarang , Banyumas , 53163 , Jawa Tengah , Indonesia , Telp/Fax (0281)571284 , E-mail : SMKMANUSA_Ajibarang@yahoo.co.id , Website <span class="text-lowercase"><a href="http://smkmanusa-ajb.sch.id">http://smkmanusa-ajb.sch.id</a></i>
					</p>
					<span class="font-weight-bold">====================================================================================================================================</span>
				</div>
				<div class="col-md-12 text-uppercase text-center">
					<ul class="list-unstyled mt-4 mb-4">
						<li>
							<span class="mt-3 font-weight-bold">
								<u>
									<h3>KEPUTUSAN PANITIA PPD</h3>
								</u>
								<span>
						</li>
						<li>
							<span class="text-center">NOMOR :
								SMK/PPDB/PPDBMRF-002
							</span>
						</li>
					</ul>
					</span>
				</div>
				<div class="col-md-12 text-uppercase text-center">
					<ul class="list-unstyled mt-4 mb-4">
						<li>
							<span class="mt-3 font-weight-bold">
								PANITIA PPD SMK MA'ARIF NU 1 AJIBARANG
								<span>
						</li>
						<li>
							<span class="font-weight-bold">
								TAHUN AJARAN 2020 / 2021
							</span>
						</li>
					</ul>
					</span>
				</div>
				<div class="col-md-12 ">
					<table>
						<tr class="text-justify">
							<td><b>Mengingat</b></td>
							<td> : </td>
							<td align="left">Keputusan Kepala SMK MA'ARIF NU 1 Ajibarang tentang proyeksi daya tampung sekolah Tahun Pelajaran 2020 / 2021.</td>
						</tr>
						<tr class="text-justify">
							<td><b>Menimbang</b></td>
							<td> : </td>
							<td align="left">Hasil Seleksi Administrasi, Nilai Raport Mapel UN, Tes Wawancara dan Kesehatan serta Prestasi PPD SMK MA'ARIF NU 1 Ajibarang Tahun Pelajaran 2018/2019.</td>
						</tr>
					</table>
				</div>
				<div class="mx-auto mb-4 col-md-12 text-center">
					<fieldset class="border">
						<p class=" mt-4">
						<h3><strong>MEMUTUSKAN </strong></h3>
						</p>
						<p>
						<h3 class="font-weight-bold"><strike>Diterima</strike> / <u>Tidak Diterima</u></h3>
						</p>
					</fieldset>
				</div>
				<div class="col-md-12 ">
					<table class="table">
						<tr class="text-justify">
							<td><b>Menetapkan</b></td>
							<td> : </td>
							<td>
								<ol class="text-justify">
									<li>
										<?php foreach ($detail as $dt) : ?>
											<p>Nama : <b class="text-uppercase"><?= $dt->nama_lengkap ?></b></p>
											<p>Nomor Pendaftaran :
												<b>
													<?= $dt->kode_pendaftaran ?>
												</b>
											</p>
											<p> Jurusan : </p>
											<p>
												<?php if ($dt->jurusan == 'tav') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK AUDIO VIDEO (TAV)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tei') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK ELEKTRONIKA INDUSTRI (TEI)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tkro') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK KENDARAAN RINGAN DAN OTOMOTIF (TKRO)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tbsm') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK BISNIS DAN SEPEDA MOTOR (TBSM)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'tkj') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													TEKNIK KOMPUTER DAN JARINGAN (TKJ)
												</p>
											</fieldset>
										<?php } elseif ($dt->jurusan == 'rpl') { ?>
											<fieldset class="border">
												<p class="mt-2 h3 text-center font-weight-bold">
													REKAYASA PERANGKAT LUNAK (RPL)
												</p>
											</fieldset>
										<?php } else {
													echo 'Jurusan TIdak Tersedia';
												} ?>
										</p>
									</li>
								<?php endforeach ?>
								<li>
									<p>Bagi calon peserta didik yang dinyatakan <b><i>DITERIMA</i> wajib membayar sebagian biaya daftar ulang,</b> dengan ketentuan sebagai berikut :</p>
									<p>
									<ul type="a">
										<li>Rp 1.200.000 , berhak mendapatkan seragam sekolah, <b>ATAU</b></li>
										<li>Rp 500.000 , tanda jadi diterima (belum mendapatkan seragam) </li>
										<li>Waktu pembayaran 2 poin <b>a</b> atau <b>b</b> dilakukan sejak SK ini diterbitkan sampai 7 (tujuh) hari dari tanggal SK</li>
										<li>Daftar ulang penuh dapat dilakukan setelah ada rincian biaya lengkap.</li>
									</ul>
									</p>
								</li>
								<li>
									<p>Seluruh calon peserta didik yang sudah mendaftar ulang wajib hadir di SMK Ma'arif NU 1 Ajibarang pada hari <b>Sabtu</b>, Tanggal <b>14 Juli 2020</b> Pukul 08.00 WIB dengan memakai seragam OSIS SMP/Mts. </p>
								</li>
								<li>
									<p>
										Bagi calon peserta didik yang <b>TIDAK MENDAFTAR ULANG dan tidak ada konfirmasi</b> sesuai dengan keterangan no <b>2</b> poin <b>c</b> maka Surat Keputusan Penerimaan ini ditunda mengacu pada kuota yang tersedia.
									</p>
								</li>
								<li>
									<p>
										Jika dikemudian hari terdapat kekeliruan dalam keputusan ini akan segera ditinjau kembali untuk diadakan pembetulan sebagaimana mestinya.
									</p>
								</li>
								</ol>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 ">
				<ul class="list-unstyled float-right mr-4 text-justify">
					<li>Ditetapkan di : Ajibarang</li>
					<li>Tanggal : <b><?= date('d F Y') ?></b></li>
				</ul>
			</div>
		</div>
		<div class="text-center">
			<div class="row mt-4 ">
				<div class="col-md-6">
					<p class="text-center ml-5">Mengetahui ,</p>
				</div>
			</div>
			<div class="row mb-5 ml-2 mr-2">
				<div class="col-md-6">
					<p class="mb-5 pb-5">Kepala SMK Ma'arif NU 1 Ajibarang,</p>
					<p class="mb-1 mt-5"><b>Zaenudin, S.Pd.,M.Si</b></p>
					<span class="float-left text-left ml-4 text-muted mt-3 mb-2"><strong>Contact Konfirmasi Panitia : 0813 2705 1820 (Tosirin,S.pd)</strong></span>
				</div>
				<div class="col-md-6">
					<p class="mb-5 pb-5">Ketua Panitia PPD,</p>
					<p class="mb-1 mt-5"><b>Mugi Heriyadi, S.Pd</b></p>
				</div>
			</div>
		</div>
	</fieldset>
</div>

<script type="text/javascript">
	window.print();
</script>