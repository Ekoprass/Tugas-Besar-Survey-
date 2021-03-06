<?php $this->view('navbar') ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="container center-block">

            
        <div class="card mb-3">
	        <div class="card-header">
	          <i class="fa fa-table"></i> Data Table Users
	      	</div>
	        <div class="card-body">
	          <div class="table-responsive">       

		
		<table class="datatable-1 table table-bordered" id="dataTable" width="100%" cellspacing="0">
	    <thead>
			<tr class="odd gradeX">
    			<th>ID</th>
    			<th>NIK</th>
		        <th>Nama</th>
		        <th>Username</th>
		        <th>Status</th>
		        <th>Aksi</th>
			</tr>
    	</thead>
    	<tbody>     
    		<?php foreach ($users as $key) {?>
		    <tr>
		        <td><?php echo $key['id_user'] ?></td>
		        <td><?php echo $key['NIK'] ?></td>
		        <td><?php echo $key['nama'] ?></td>
		        <td><?php echo $key['username'] ?></td>
		        <td><?php echo $key['status_user']." / ".$key['status'] ?></td>
		        <td>
		        	<?php 	echo anchor('/datauser/detail/'.$key['id_user'].'', 'Detail', "class='btn btn-primary'")."&nbsp"; 
							echo anchor('/datauser/edit/'.$key['id_user'].'', 'Edit', "class='btn btn-info'")."&nbsp"; 
							echo anchor('/datauser/delete/'.$key['id_user'].'', 'Delete', "class='btn btn-danger'")."&nbsp"; 
		        	?>
		        </td>
		    </tr>
		<?php } ?>
    	</tbody>
		</table>
	</div>
	</div>
</div>
</div>
</div>

  <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
<?php $this->view('footer') ?>

