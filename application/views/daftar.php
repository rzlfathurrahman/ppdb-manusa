<div class="container-fluid">
    <div class="card m-3 ">
      <div class="card-header text-center">
        <a href="#" class="h4"><i class="fa fa-user-graduate"></i> <b>Selamat Datang !</b></a>
      </div>
      <div class="card-body">
        <div class="alert alert-primary text-center">
          <strong><i class="fas fa-book mr-2"></i> FORM PPDB ONLINE SMK MA'ARIF NU 1 AJIBARANG</strong>
        </div>
        <div class="alert alert-warning text-center">
          <strong><i class="fas fa-info mr-2"></i> Mohon Isi Dengan Data Yang Benar !</strong>
        </div>
        <form class="needs-validation" novalidate action="<?php echo base_url('ppdb/daftar_aksi') ?>" method="post">     
          <div class="form-group">
            <label>Nama Lengkap</label>
            <?php 
                // $cekKode = $this->db->select('kode_pendaftaran')->from('peserta')->limit(1)->order_by('kode_pendaftaran',"DESC")->get()->result();
                // var_dump($cekKode);
             ?><!-- 
             <?php echo $kode;
              ?> -->
             <input type="hidden" name="kode_pendaftaran" value="<?php echo $kode?>">
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            <?php echo form_error('nama_lengkap','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" placeholder="Masukan Nomor Induk Siswa">
            <?php echo form_error('nis','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Nomor HP</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp">
            <?php echo form_error('no_hp','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
            <?php echo form_error('alamat','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
            <?php echo form_error('asal_sekolah','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" placeholder="Tempat Lahir" class="form-control" name="tmp_lahir">
            <?php echo form_error('tmp_lahir','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" placeholder="Tanggal Lahir (misal : 27 November 2003)" class="form-control" name="tgl_lahir">
            <?php echo form_error('tgl_lahir','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control">
              <option value="">== Pilih Jurusan ===</option>
              <option value="tav">TAV (Teknik Audio dan Video)</option>
              <option value="tei">TEI (Teknik Elektronika Industri)</option>
              <option value="tkro">TKRO (Teknik Kendaraan Ringan dan Otomotif)</option>
              <option value="tbsm">TBSM (Teknik Bisnis dan Sepeda Motor)</option>
              <option value="tkj">TKJ (Teknik Komputer dan Jaringan)</option>
              <option value="rpl">RPL (Rekayasa Perangkat Lunak)</option>
            </select>
            <?php echo form_error('jk','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
              <option value="laki-laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jk','<div class="text-danger small ml-2 mt-2">','</div>') ?>
          </div>
          <div class="form-group">
            <label>Agama</label>
            <input value="Islam" readonly="" type="text" placeholder="Agama"  class="form-control" name="agama">
          </div>
          
          <input type="hidden" name="nilai_bindo" value="0">
          <input type="hidden" name="nilai_mtk" value="0">
          <input type="hidden" name="nilai_ipa" value="0">
          <input type="hidden" name="nilai_bing" value="0">
          
          <button type="submit" class="btn btn-primary btn-block  ">Daftar</button>
       </form>
      </div>
      <!-- /.form-box -->
    </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>