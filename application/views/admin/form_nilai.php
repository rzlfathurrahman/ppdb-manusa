 <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Nilai Peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item "><a href="<?php echo base_url('admin/nilai') ?>">Data Nilai</a></li>
              <li class="breadcrumb-item active">Input Nilai</li>
            </ol>
          </div>
        </div>
        <?php echo $this->session->flashdata('pesan'); ?>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
      <?php foreach ($peserta as $p) : ?>
            <div class="btn btn-warning mb-4"><strong>Kode Pendaftaran : <?php echo $p->kode_pendaftaran; ?></strong></div>
          <?php endforeach; ?>
    <div class="card shadow mb-4">
      <div class="card-header">
         <h6 class="m-0 font-weight-bold text-success text-uppercase"> Form Input Nilai </h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form method="post" action="<?php echo base_url('admin/nilai/simpan_nilai') ?>">
           <table  class="table table-hover table-stripped table-bordered" >
               <tr class="text-center">
                  <th>Mata Pelajaran</th>
                  <th>Bahasa Indonesia</th>
                  <th>Matematika</th>
                  <th>IPA</th>
                  <th>Bahasa Inggris </th>
                  <th>Total</th>
               </tr>
              <tr class="text-center">
                  <th>Nilai</th>
                 <?php $jNIlai=0; foreach ($peserta as $ps) : ?>
                 <input type="hidden" name="kode_pendaftaran" value="<?php echo $ps->kode_pendaftaran ?>">
                  <th><input type="text" name="nilai_bindo" class="form-control" value="<?php echo $ps->nilai_bindo ?>"></th>
                  <th><input type="text" name="nilai_mtk" class="form-control" value="<?php echo $ps->nilai_mtk ?>"></th>
                  <th><input type="text" name="nilai_ipa" class="form-control" value="<?php echo $ps->nilai_ipa ?>"></th>
                  <th><input type="text" name="nilai_bing" class="form-control" value="<?php echo $ps->nilai_bing ?>"></th>
                  <th><strong><?php echo $jNilai = $ps->nilai_bindo+$ps->nilai_mtk+$ps->nilai_ipa+$ps->nilai_bing ; ?></strong></th>
                 <?php endforeach; ?>
              </tr>
          </table>
        </div>
      </div>
    </div>
    <button class="btn btn-primary ml-2 mb-3" type="submit">Simpan</button>
   </form>
  </section>
</div>