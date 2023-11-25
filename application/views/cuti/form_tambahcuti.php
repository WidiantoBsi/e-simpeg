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

<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/cuti/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Jenis Cuti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">          
            <select name="jenis_cuti" id="jenis_cuti" class="form-control" value="<?php echo $jenis_cuti; ?>">
              <option value="Tidak Ada">- - -</option>
              <option value="Cuti Tahunan">Cuti Tahunan</option>
              <option value="Cuti Sakit">Cuti Sakit</option>
              <option value="Cuti Bersalin">Cuti Bersalin</option>
              <option value="Cuti Besar">Cuti Besar</option>
              <option value="Cuti Dinas">Cuti Dinas</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5"> 
            <input required type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $keterangan;?>">
        </div>
    </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tanggal Mulai&nbsp;&nbsp;&nbsp;</label>
            <div class="col-sm-5">
                <input required name="tanggal_mulai" id="tanggal_mulai" type="text" placeholder="yyyy-mm-dd" value="<?php echo $tanggal_mulai;?>" class="datepicker" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Tanggal Selesai</label>
            <div class="col-sm-5">
                <input required name="tanggal_selesai" id="tanggal_selesai" type="text" placeholder="yyyy-mm-dd" value="<?php echo $tanggal_selesai;?>" class="datepicker" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="fieldtwo">Lama Cuti&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="col-sm-5">
                <input required name="lama_cuti" class="form-control" id="lama_cuti" value="<?php echo $lama_cuti;?>" type="text" />
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
        <a href="<?php echo base_url();?>index.php/cuti" class="btn btn-primary btn-small">Tutup</a>
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
        $('#tanggal_selesai').datepicker({
      format: 'yyyy-mm-dd'
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#tanggal_mulai, #tanggal_selesai').on('change textInput input', function () {
        if ( ($("#tanggal_mulai").val() != "") && ($("#tanggal_selesai").val() != "")) {
            var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
            var firstDate = new Date($("#tanggal_mulai").val());
            var secondDate = new Date($("#tanggal_selesai").val());
            var diffDays = Math.round(Math.round((secondDate.getTime() - firstDate.getTime()) / (oneDay)));
            $("#lama_cuti").val(diffDays);
        }
    });
});
</script>
</body>

</html>

