<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title "><?php echo $page_title; ?></h4>
            <p class="card-category"> Tambahkan barang kedalam daftar dengan informasi yang lengkap</p>
          </div>
          <div class="card-body">
            <form action="{{ base_url('barang/store') }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title" >Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo set_value('nama_barang') ?>" required>
                <div class="invalid-feedback">Masukkan nama barang.</div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <select class="custom-select" name="jenis_barang">
                      <option selected value="">Pilih Jenis Barang</option>
                      <?php foreach ($jenis_barang as $row): ?>
                        <option value="<?php $row->id_jenis_barang ?>">
                          <?php echo $row->nama_jenis_barang; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <!-- @if($errors->has('id_level'))
                    <small class="text-danger">{{ $errors->first('id_level') }}</small>
                    @endif -->
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="kondisi_model">Kondisi Barang</label>
                    <select class="custom-select" name="kondisi">
                      <option selected value="">Pilih Kondisi Barang</option>
                      <?php foreach ($kondisi as $row): ?>
                        <option value="<?php $row->id_kondisi ?>">
                          <?php echo $row->nama_kondisi; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="harga" >Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo set_value('harga') ?>" required>
                <div class="invalid-feedback">Masukkan Harga barang.</div>
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="text" rows="3" required><?php echo set_value('keterangan') ?></textarea>
                <div class="invalid-feedback">Isi keterangan barang</div>
              </div>

              <div class="form-group">
    						<label for="gambar">Gambar Barang</label>
    						<input type="file" class="form-control-file" name="barang">
    					</div>
              <label class="file">
                <input type="file">
                <span class="file-custom"></span>
              </label>
              <div class="form-group">
                <input class="btn btn-info" type="submit" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>