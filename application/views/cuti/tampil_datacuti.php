    <style>

    .datepicker{z-index:1151;}

    </style>
<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top:100px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" ariahidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;">Delete</h3>
			</div>
			<div class="modal-body">
        		<h4>Apakah Anda Yakin Ingin Menghapus...?</h4>
      		</div>
			<div class="modal-footer" style="margin:0px; border-top:0px; textalign:center;">
				<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Popup untuk delete-->
<!-- Modal Popup untuk tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myAddLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url();?>index.php/cuti/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="jenis_cuti">Jenis Cuti</label>
                    <select name="jenis_cuti" id="jenis_cuti" class="form-control" value="<?php echo set_value('jenis_cuti');?>">
		              <option value="Tidak Ada">- - -</option>
		              <option value="Cuti Tahunan">Cuti Tahunan</option>
		              <option value="Cuti Sakit">Cuti Sakit</option>
		              <option value="Cuti Bersalin">Cuti Bersalin</option>
		              <option value="Cuti Besar">Cuti Besar</option>
		              <option value="Cuti Dinas">Cuti Dinas</option>
		            </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="keterangan">Keterangan</label>
                    <input required type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo set_value('keterangan');?>" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tanggal_mulai">Tanggal Mulai</label>
                    <input required type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo set_value('tanggal_mulai');?>" placeholder="Tanggal Mulai">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tanggal_selesai">Tanggal Selesai</label>
                    <input required type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php echo set_value('tanggal_selesai');?>" placeholder="Tanggal Selesai">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lama_cuti">Lama Cuti</label>
                    <input required type="text" class="form-control" id="lama_cuti"name="lama_cuti" value="<?php echo set_value('lama_cuti');?>" placeholder="Lama Cuti">
                </div>
            </div>
        <div class="box-footer">
    </div>
 </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
</form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Popup untuk Tambah !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Cuti</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    <th data-field="id" data-align="center" data-sortable="true">Id</th>
							<th data-field="jenis_cuti" data-align="left" data-sortable="true">Jenis Cuti</th>
							<th data-field="keterangan" data-align="left" data-sortable="true">Keterangan</th>
							<th data-field="tanggal_mulai" data-align="left" data-sortable="true">Tanggal Mulai</th>
							<th data-field="tanggal_selesai" data-align="left" data-sortable="true">Tanggal Selesai</th>
							<th data-field="lama_cuti" ddata-align="left" data-sortable="true">Lama Cuti</th>
							<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->jenis_cuti ;?></td>
							<td><?php echo $row->keterangan ;?></td>
							<td><?php echo $row->tanggal_mulai ;?></td>
							<td><?php echo $row->tanggal_selesai ;?></td>
							<td><?php echo $row->lama_cuti ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/cuti/delete/<?php echo $row->id; ?>');">
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a> 
							<a href="<?php echo base_url();?>index.php/cuti/edit/<?php echo $row->id;?>" >
								<button type="button" class="btn btn-info btn-sm">
          							<span class="glyphicon glyphicon-edit"></span>Edit
        						</button>
							</a>
							</td>
							</tr>
						<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>
<script>
$(function(){
$("#tanggal_mulai").datepicker({
format:’yyyy/dd/mm’
});
});
</script>