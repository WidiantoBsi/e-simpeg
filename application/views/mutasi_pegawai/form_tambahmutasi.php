<?php 
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/mutasi_pegawai/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Unit Kerja Lama</label>
        <div class="col-sm-5">
            <input required type="text" name="unit_kerja_lama" id="unit_kerja_lama" placeholder="Unit Kerja Lama" class="form-control" value="<?php echo $unit_kerja_lama;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Unit Kerja Baru&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="unit_kerja_baru" id="unit_kerja_baru" placeholder="Unit Kerja Baru" class="form-control" value="<?php echo $unit_kerja_baru;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Jabatan Baru&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">          
            <select name="jabatan_baru" id="jabatan_baru" class="form-control" value="<?php echo $jabatan_baru; ?>">
              <option value="Tidak Ada">- - -</option>
              <option value="Staff">Staff</option>
              <option value="Supervisor">Supervisor</option>
              <option value="Manager">Manager</option>
              <option value="General Manager">General Manager</option>
              <option value="Dinas">Direktur</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $keterangan; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tempat Mutasi&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tempat_mutasi" id="tempat_mutasi" placeholder="Tempat Mutasi" class="form-control" value="<?php echo $tempat_mutasi; ?>">
        </div><br><br>
    <div><br>
            <button type="reset" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-refresh"></span>Refresh
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Simpan
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/mutasi_pegawai" class="btn btn-primary btn-small">Tutup</a>
    </div>
    </center>
</form>

