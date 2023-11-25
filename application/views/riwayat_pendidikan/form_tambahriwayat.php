<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cuti</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">

<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>
<?php 
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/riwayat_pendidikan/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tingkat Pendidikan</label>
        <div class="col-sm-5">          
            <select name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control" value="<?php echo $tingkat_pendidikan; ?>">
              <option value="- - -">- - -</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMK">SMK</option>
              <option value="SMA">SMA</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4">D4</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
              <option value="SP1">SP1</option>
              <option value="SP2">SP2</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Kota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="kota" id="kota" placeholder="Kota" class="form-control" value="<?php echo $kota;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Jurusan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="jurusan" id="jurusan" placeholder="Jurusan" class="form-control" value="<?php echo $jurusan;?>">
        </div>
    </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="fieldtwo">Tanggal Ijazah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tanggal_ijazah" id="tanggal_ijazah" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo $tanggal_ijazah;?>">
        </div>
    </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="fieldtwo">Tahun Masuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tahun_masuk" id="tahun_masuk" placeholder="Tahun Masuk" class="form-control" value="<?php echo $tahun_masuk;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tahun Lulus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" class="form-control" value="<?php echo $tahun_lulus;?>">
        </div>
    </div>
    <div><br>
            <button type="reset" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-refresh"></span>Refresh
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Simpan
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/riwayat_pendidikan" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>

    <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/chart.min.js"></script>
    <script src="<?php echo base_url();?>js/chart-data.js"></script>
    <script src="<?php echo base_url();?>js/easypiechart.js"></script>
    <script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-table.js"></script>
    <script type="text/javascript">
        $('#tanggal_ijazah').datepicker({
      format: 'yyyy-mm-dd'
    });
    </script>
</body>

</html>

