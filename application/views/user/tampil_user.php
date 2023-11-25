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
            <form action="<?php echo base_url();?>index.php/user/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="username">Username</label>
                    <input required type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username');?>" placeholder="Username">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Password</label>
                    <input required type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="password">
                </div>
            </div>
        <div class="box-footer">
    </div>
 </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="reset" class="btn btn-default">Reset</button>
</form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Popup untuk tambah -->
<!-- Modal Popup untuk Edit !-->
<!-- Modal Popup untuk delete-->
<!-- Modal Popup untuk tambah -->


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content"> 
			<form class="form-horizontal" id="edit-form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="edit-modal-label">Edit Row</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username');?>" placeholder="Username " required>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="Password " required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal Popup untuk Edit !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">User</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" 
      						data-toggle="modal" data-target="#addModal">
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="username" data-align="left" data-sortable="true">Username</th>
								<th data-field="password" data-align="left" data-sortable="true">Password</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->username ; ?></td>
							<td><?php echo $row->password ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/user/delete/<?php echo $row->id; ?>');">
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a>
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" 
      						data-target="#edit<?php echo $row->id ; ?>">
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;Edit</a>

							</td>
						</tr>
						<div class="modal fade" id="edit<?php echo $row->id ; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						                <h4 class="modal-title" id="myAddLabel">Edit Data</h4>
						            </div>
						            <div class="modal-body">
						            <form action="<?php echo base_url();?>index.php/user/edit/<?php echo $row->id; ?>" method="post" name="submit">
						                <div class="box-body">
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="username">ID</label>
						                    <input required type="text" class="form-control" id="username" name="id" value="<?php echo $row->id ; ?>" disabled>
						                    <input required type="hidden" class="form-control" id="username" name="id" value="<?php echo $row->id ; ?>">
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="username">Username</label>
						                    <input required type="text" class="form-control" id="username" name="username" value="<?php echo $row->username ; ?>" >
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="password">Password</label>
						                    <input required type="text" class="form-control" id="password" name="password" value="<?php echo $row->password ; ?>" >
						                </div>
						            </div>
						        <div class="box-footer">
						    </div>
    
						 </div>
						        <div class="modal-footer">
						            <button type="submit" class="btn btn-primary">Update</button>
						            <button type="reset" class="btn btn-default">Reset</button>
						</form>
						        </div>
						    </div>
						  </div>
						</div>
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

function editRow(id) 
{ 
	if ( 'undefined' != typeof id ) 
	{
	 $.getJSON('user/edit_ajax/' + id, function(obj) 
	 	{ $('#edit-id').val(obj.id);
	 	$('#username').val(obj.username);
	 	$('#password').val(obj.password);
	 	 $('#edit-modal').modal('show') }).fail(function() { alert('Unable to fetch data, please try again later.') }); 
	} else alert('Unknown row id.'); 
} 
</script>

