<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Penilaian Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pegawai</label>
                  <select class="form-control select2" id="sel" style="max-width: 50%">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- detail identitas Pegawai -->
                <form id="form-detail">
                  <table>
                    <tr>
                      <th>Nama Penilai</th>
                      <th>:</th>
                      <td>erika</t>
                    </tr>
                    <tr>
                      <th>Nama Pegawai</th>
                      <th>:</th>
                      <td>erika</t>
                    </tr>
                    <tr>
                      <th>NIP</th>
                      <th>:</th>
                      <td>erika</t>
                    </tr>
                  </table>
                </form>
                <!-- form penilaian -->
                <div class="card card-outline card-info" style="margin-top: 50px;">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <?php foreach ($kriteria_1 as $key => $value) {
                          $id_kriteria = $value->id_kriteria;
                          $this->db->select('*');
                          $this->db->from('nilai_kriteria');
                          $this->db->where('id_kriteria', $id_kriteria);
                          $nilai_kriteria = $this->db->get()->result();
                          ?>
                          <div class="form-group">
                          <label for="exampleInputEmail1"><?php echo $value->nama_kriteria ?> - <?php echo $value->keterangan ?></label>
                          <select class="form-control" id="<?php echo $value->nama_kriteria ?>" style="max-width: 100%">
                            <option selected="selected">---Pilih---</option>
                            <?php foreach ($nilai_kriteria as $key => $value) {?>
                            <option value="<?php echo $value->nilai ?>"><?php echo $value->keterangan ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      <?php } ?>
                      </div>
                      <!-- col -->
                      <div class="col-md-6">
                        <?php foreach ($kriteria_2 as $key => $value) {
                          $id_kriteria = $value->id_kriteria;
                          $this->db->select('*');
                          $this->db->from('nilai_kriteria');
                          $this->db->where('id_kriteria', $id_kriteria);
                          $nilai_kriteria_2 = $this->db->get()->result();
                          ?>
                          <div class="form-group">
                          <label for="exampleInputEmail1"><?php echo $value->nama_kriteria ?> - <?php echo $value->keterangan ?></label>
                          <select class="form-control" id="<?php echo $value->nama_kriteria ?>" style="max-width: 100%">
                            <option selected="selected">---Pilih---</option>
                            <?php foreach ($nilai_kriteria_2 as $key => $value) {?>
                            <option value="<?php echo $value->nilai ?>"><?php echo $value->keterangan ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      <?php } ?>
                      </div>
                      <!-- col -->
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>