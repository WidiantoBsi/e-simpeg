<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/laporan_pensiun/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama</label>
        <div class="col-sm-5">
            <input required type="text" name="nama" id="nama" placeholder="Nama" class="form-control" value="<?php echo $nama; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Keterangan</label>
        <div class="col-sm-5">
            <input required type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $keterangan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tahun Pensiun</label>
        <div class="col-sm-5">
            <input required type="text" name="tahun_pensiun" id="tahun_pensiun" placeholder="Tahun Pensiun" class="form-control" value="<?php echo $tahun_pensiun; ?>">
        </div>
    </div>
    <div><br>
            <button type="reset" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-refresh"></span>Refresh
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Update
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/laporan_pensiun" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>

