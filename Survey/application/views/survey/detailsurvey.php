<?php $this->view('navbar') ?>

		<h2>Detail Survey</h2>
	
		<br>
			<div class="container">

			<table class="table table-striped table-hover display">
				<thead>
					<tr>
						<th colspan="2"><h3><center>Data Survey</center></h3></th>
					</tr>
				</thead>
				<tbody>
						<?php foreach ($surveyid as $key) {?>
					<tr>
						<td width="300px"><b>ID Survey</b></td>
						<td>: <?php echo $key['id_survey']?></td>
					</tr>
					<tr>
						<td><b>Nama Survey</b></td>
						<td>: <?php echo $key['nama_survey']?></td>
					</tr><tr>
						<td><b>Deskripsi</b></td>
						<td>: <?php echo $key['deskripsi']?></td>
					</tr><tr>
						<td><b>Waktu Survey</b></td>
						<td>: <?php echo $key['waktu_survey']?></td>
					</tr><tr>
						<td><b>Status</b></td>
						<td>: <?php echo $key['status']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>									
			<?php echo anchor('question/createQuestion/'.$key['id_survey'].'', 'Tambah Pertanyaan', "class='btn btn-success'"); ?>

			</div>
		</div>
	</div>

<?php $this->view('questions/tblquestions') ?>
	
<?php $this->view('footer') ?>