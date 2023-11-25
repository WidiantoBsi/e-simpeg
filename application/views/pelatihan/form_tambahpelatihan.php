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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/pelatihan/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama Pelatihan</label>
        <div class="col-sm-5">
            <input required type="text" name="nama_pelatihan" id="nama_pelatihan" placeholder="Nama Pelatihan" class="form-control" value="<?php echo $nama_pelatihan;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tanggal Mulai&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tanggal_mulai" id="tanggal_mulai" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo $tanggal_mulai;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tanggal Akhir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tanggal_akhir" id="tanggal_akhir" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo $tanggal_akhir;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tempat Diklat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tempat_diklat" id="tempat_diklat" placeholder="Tempat Diklat" class="form-control" value="<?php echo $tempat_diklat;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $keterangan;?>">
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
        <a href="<?php echo base_url();?>index.php/pelatihan" class="btn btn-primary btn-small">Tutup</a>
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
        $('#tanggal_mulai').datepicker({
      format: 'yyyy-mm-dd'
    });
    </script>
    <script type="text/javascript">
        $('#tanggal_akhir').datepicker({
      format: 'yyyy-mm-dd'
    });
    </script>
</body>

</html>

