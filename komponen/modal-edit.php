<!-- Button trigger modal -->
<a class="card-text text-decoration-none text-success fs-6" data-bs-toggle="modal" data-target="#editkaryawan<?php echo $penduduk['id']?>" href="#EditPenduduk<?php echo $penduduk['id_penduduk']?>"><i class="fas fa-edit"></i></a>

<!-- Modal -->
<div class="modal fade" id="EditPenduduk<?php echo $penduduk['id_penduduk']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditPenduduk<?php echo $penduduk['id_penduduk']?>Label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">

			<!-- header -->
			<div class="modal-header">
				<h5 class="modal-title fw-bolder" id="EditPenduduk<?php echo $penduduk['id_penduduk']?>Label">Form Edit Data Penduduk</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- end header -->

			<div class="modal-body ps-4">

				<form action="action/action-penduduk.php?opsi=edit" method="POST">

					<input name="id" id="id"  class="form-control bg-light" type="number" value="<?php echo $penduduk['id_penduduk'];?>" hidden required>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="no_kk" class="mb-2 col-3 pt-2 pb-2 text-start">Nomor KK</label>

						<input name="no_kk" id="no_kk"  class="form-control bg-light" type="text" value="<?php echo $penduduk['no_kk'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="nama" class="mb-2 col-3 pt-2 pb-2 text-start">Nama</label>

						<input name="nama" id="nama"  class="form-control bg-light" type="text" value="<?php echo $penduduk['nama'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="nik" class="mb-2 col-3 pt-2 pb-2 text-start">NIK</label>

						<input name="nik" id="nik"  class="form-control bg-light" type="text" value="<?php echo $penduduk['nik'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="dusun" class="mb-2 col-3 pt-2 pb-2 text-start">Dusun</label>

						<select id="dusun" class="form-control bg-light" name="dusun" required>
							<option value="UTARA" <?php echo ($penduduk['dusun']=="UTARA") ? "selected" : "" ?> >UTARA</option>
							<option value="TENGGARA" <?php echo ($penduduk['dusun']=="TENGGARA") ? "selected" : "" ?> >TENGGARA</option>
							<option value="SELATAN" <?php echo ($penduduk['dusun']=="SELATAN") ? "selected" : "" ?> >SELATAN</option>
						</select>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="rt" class="mb-2 col-3 pt-2 pb-2 text-start">RT</label>

						<input name="rt" id="rt"  class="form-control bg-light" type="text" value="<?php echo $penduduk['rt'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="rw" class="mb-2 col-3 pt-2 pb-2 text-start">RW</label>

						<input name="rw" id="rw"  class="form-control bg-light" type="text" value="<?php echo $penduduk['rw'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="tmpt_lahir" class="mb-2 col-3 pt-2 pb-2 text-start">Tempat Lahir</label>

						<input name="tmpt_lahir" id="tmpt_lahir"  class="form-control bg-light" type="text" value="<?php echo $penduduk['tmpt_lahir'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="tgl_lahir" class="mb-2 col-3 pt-2 pb-2 text-start">Tanggal Lahir</label>

						<input name="tgl_lahir" id="tgl_lahir"  class="form-control bg-light" type="date" value="<?php echo $penduduk['tgl_lahir'];?>" required>
					</div>


					<div class="form-group mb-1 d-flex align-items-center">
						<label for="jk" class="mb-2 col-3 pt-2 pb-2 text-start">Jenis Kelamin</label>
						<div class="form-check">
							<input type="radio" class="form-check-input" value="L" id="laki-laki" name="jk" <?php echo ($penduduk['jk']=="L") ? "checked" : "" ?> required>
							<label for="laki-laki" class="form-check-label me-4">Laki-Laki</label>
						</div>
						<div class="form-check disabled">
							<input type="radio" class="form-check-input" value="P" id="perempuan" name="jk" <?php echo ($penduduk['jk']=="P") ? "checked" : "" ?> required>
							<label for="perempuan" class="form-check-label">Perempuan</label>
						</div>
					</div>

					<div class="form-group mb-1 d-flex align-items-center" py-1>

						<label for="shdk" class="mb-2 col-3 pt-2 pb-2 text-start">SHDK</label>

						<select id="shdk" class="form-control bg-light" name="shdk" required>

							<option value="KEPALA KELUARGA" <?php echo ($penduduk['shdk'] == "KEPALA KELUARGA") ? "selected" : "" ?> >KEPALA KELUARGA</option>
							<option value="ISTRI" <?php echo ($penduduk['shdk'] == "ISTRI") ? "selected" : "" ?> >ISTRI</option>
							<option value="ANAK" <?php echo ($penduduk['shdk'] == "ANAK") ? "selected" : "" ?> >ANAK</option>
							<option value="CUCU" <?php echo ($penduduk['shdk'] == "CUCU") ? "selected" : "" ?> >CUCU</option>
							<option value="ORANG TUA" <?php echo ($penduduk['shdk'] == "ORANG TUA") ? "selected" : "" ?> >ORANG TUA</option>
							<option value="MERTUA" <?php echo ($penduduk['shdk'] == "MERTUA") ? "selected" : "" ?> >MERTUA</option>
							<option value="MENANTU" <?php echo ($penduduk['shdk'] == "MENANTU") ? "selected" : "" ?> >MENANTU</option>
							<option value="FAMILI LAIN" <?php echo ($penduduk['shdk'] == "FAMILI LAIN") ? "selected" : "" ?> >FAMILI LAIN</option>
							<option value="LAINNYA" <?php echo ($penduduk['shdk'] == "LAINNYA") ? "selected" : "" ?> >LAIN-NYA</option>
						</select>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="nikah" class="mb-2 col-3 pt-2 pb-2 text-start">Status Nikah</label>

						<select id="nikah" class="form-control bg-light" name="nikah" required>
							<option value="-" <?php echo ($penduduk['nikah'] == "-") ? "selected" : "" ?> > - Pilih</option>
							<option value="BELUM KAWIN" <?php echo ($penduduk['nikah'] == "BELUM KAWIN") ? "selected" : "" ?> >BELUM KAWIN</option>
							<option value="KAWIN" <?php echo ($penduduk['nikah'] == "KAWIN") ? "selected" : "" ?> >KAWIN</option>
							<option value="CERAI MATI" <?php echo ($penduduk['nikah'] == "CERAI MATI") ? "selected" : "" ?> >CERAI MATI</option>
							<option value="CERAI HIDUP" <?php echo ($penduduk['nikah'] == "CERAI HIDUP") ? "selected" : "" ?> >CERAI HIDUP</option>
						</select>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="agama" class="mb-2 col-3 pt-2 pb-2 text-start">Agama</label>

						<select id="agama" class="form-control bg-light" name="agama" required>

							<option value="ISLAM" <?php echo ($penduduk['agama']== "ISLAM") ? "selected" : "" ?> >ISLAM</option>
							<option value="KRISTEN" <?php echo ($penduduk['agama']== "KRISTEN") ? "selected" : "" ?> >KRISTEN</option>
							<option value="KATHOLIK" <?php echo ($penduduk['agama']== "KATHOLIK") ? "selected" : "" ?> >KATHOLIK</option>
							<option value="HINDU" <?php echo ($penduduk['agama']== "HINDU") ? "selected" : "" ?> >HINDU</option>
							<option value="BUDHA" <?php echo ($penduduk['agama']== "BUDHA") ? "selected" : "" ?> >BUDHA</option>
							<option value="KHONGHUCU" <?php echo ($penduduk['agama']== "KHONGHUCU") ? "selected" : "" ?> >KHONGHUCU</option>
							<option value="KEPERCAYA AN" <?php echo ($penduduk['agama']== "KEPERCAYA AN") ? "selected" : "" ?> >KEPERCAYA AN</option>

						</select>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="pekerjaan" class="mb-2 col-3 pt-2 pb-2 text-start">Pekerjaan</label>

						<input name="pekerjaan" id="pekerjaan"  class="form-control bg-light" type="text" value="<?php echo $penduduk['pekerjaan'];?>" required>
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="pendidikan" class="mb-2 col-3 pt-2 pb-2 text-start">Pendidikan</label>

						<select id="pendidikan" class="form-control bg-light" name="pendidikan" required>

							<option value="TIDAK/BELUM SEKOLAH" <?php echo ($penduduk['pendidikan']== "TIDAK/BELUM SEKOLAH") ? "selected" : "" ?> >TIDAK/BELUM SEKOLAH</option>
							<option value="BELUM TAMAT SD/SEDERAJAT" <?php echo ($penduduk['pendidikan']== "BELUM TAMAT SD/SEDERAJAT") ? "selected" : "" ?> >BELUM TAMAT SD/SEDERAJAT</option>
							<option value="TAMAT SD/SEDERAJAT" <?php echo ($penduduk['pendidikan']== "TAMAT SD/SEDERAJAT") ? "selected" : "" ?> >TAMAT SD/SEDERAJAT</option>
							<option value="SLTP/SEDERAJAT" <?php echo ($penduduk['pendidikan']== "SLTP/SEDERAJAT") ? "selected" : "" ?> >SLTP/SEDERAJAT</option>
							<option value="SLTA/SEDERAJAT" <?php echo ($penduduk['pendidikan']== "SLTA/SEDERAJAT") ? "selected" : "" ?> >SLTA/SEDERAJAT</option>
							<option value="DIPLOMA I/II" <?php echo ($penduduk['pendidikan']== "DIPLOMA I/II") ? "selected" : "" ?> >DIPLOMA I/II</option>
							<option value="DIPLOMA III" <?php echo ($penduduk['pendidikan']== "DIPLOMA III") ? "selected" : "" ?> >DIPLOMA III</option>
							<option value="DIPLOMA IV/STRATA I" <?php echo ($penduduk['pendidikan']== "DIPLOMA IV/STRATA I") ? "selected" : "" ?> >DIPLOMA IV/STRATA I</option>
							<option value="AKADEMI/DIPLOMA III/SARJANA MUDA" <?php echo ($penduduk['pendidikan']== "AKADEMI/DIPLOMA III/SARJANA MUDA") ? "selected" : "" ?> >AKADEMI/DIPLOMA III/SARJANA MUDA</option>

							<option value="STRATA-II" <?php echo ($penduduk['pendidikan']== "STRATA-II") ? "selected" : "" ?> >STRATA-II</option>
							<option value="STRATA-III" <?php echo ($penduduk['pendidikan']== "STRATA-III") ? "selected" : "" ?> >STRATA-III</option>

						</select>

					</div>
					<div class="form-group mb-1 d-flex align-items-center">
						<label for="nm_ayah" class="mb-2 col-3 pt-2 pb-2 text-start">Nama Ayah</label>

						<input name="nm_ayah" id="nm_ayah"  class="form-control bg-light" type="text" value="<?php echo $penduduk['nm_ayah'];?>">
					</div>

					<div class="form-group mb-1 d-flex align-items-center">
						<label for="nm_ibu" class="mb-2 col-3 pt-2 pb-2 text-start">Nama Ibu</label>

						<input name="nm_ibu" id="nm_ibu"  class="form-control bg-light" type="text" value="<?php echo $penduduk['nm_ibu'];?>">
					</div>

				</div>
				<!-- end modal body -->

				<!-- footer -->
				<div class="modal-footer justify-content-center">
					<input type="submit" name="submit" value="Edit Data" class="btn btn-info text-white col-11 p-2">
				</div>
				<!-- end footer -->

			</form>
			<!-- end form -->
		</div>
	</div>
</div>