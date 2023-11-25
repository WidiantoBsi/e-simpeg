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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/pegawai/simpan/<?php echo isset($id)?$id:''; ?>" onsubmit="return cekform();"><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="nip" id="nip" placeholder="NIP" class="form-control" value="<?php echo $nip;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama Pegawai</label>
        <div class="col-sm-5">
            <input required type="text" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" class="form-control" value="<?php echo $nama_pegawai;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Jenis Kelamin&nbsp;</label>
        <div class="col-sm-5">          
            <select name="jk" id="jk" class="form-control" value="<?php echo $jk; ?>">
              <option value="Tidak Ada">- - -</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-Laki">Laki-Laki</option>
            </select>
        </div>
    </div>
   <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">          
            <select name="status" id="status" class="form-control" value="<?php echo $status; ?>">
              <option value="Tidak Ada">- - -</option>
              <option value="Tetap">Tetap</option>
              <option value="Kontrak">Kontrak</option>
              <option value="Honorer">Honorer</option>
              <option value="Magang">Magang</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Agama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="agama" id="agama" placeholder="Agama" class="form-control" value="<?php echo $agama;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tempat Lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control" value="<?php echo $tempat_lahir;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Tanggal Lahir&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo $tanggal_lahir;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" value="<?php echo $alamat;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-5">
            <input required type="text" name="telepon" id="telepon" placeholder="telepon" class="form-control" value="<?php echo $telepon;?>">
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
        <a href="<?php echo base_url();?>index.php/pegawai" class="btn btn-primary btn-small">Tutup</a>
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
        $('#tanggal_lahir').datepicker({
      format: 'yyyy-mm-dd'
    });
    </script>
</body>

</html>
