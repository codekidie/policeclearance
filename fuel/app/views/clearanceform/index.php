<h2>Listing <span class='muted'>Clearanceforms</span></h2>
<br>
<?php if ($clearanceforms): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Fileno</th>
			<th>Orno</th>
			<th>Firstname</th>
			<th>Middlename</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Sex</th>
			<th>Civilstatus</th>
			<th>Dateofbirth</th>
			<th>Placeofbirth</th>
			<th>Comtaxno</th>
			<th>Issuedat</th>
			<th>Issuedon</th>
			<th>Purpose</th>
			<th>Contactnumber</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($clearanceforms as $item): ?>		<tr>

			<td><?php echo $item->fileno; ?></td>
			<td><?php echo $item->orno; ?></td>
			<td><?php echo $item->firstname; ?></td>
			<td><?php echo $item->middlename; ?></td>
			<td><?php echo $item->lastname; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->sex; ?></td>
			<td><?php echo $item->civilstatus; ?></td>
			<td><?php echo $item->dateofbirth; ?></td>
			<td><?php echo $item->placeofbirth; ?></td>
			<td><?php echo $item->comtaxno; ?></td>
			<td><?php echo $item->issuedat; ?></td>
			<td><?php echo $item->issuedon; ?></td>
			<td><?php echo $item->purpose; ?></td>
			<td><?php echo $item->contactnumber; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('clearanceform/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('clearanceform/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('clearanceform/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Clearanceforms.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('clearanceform/create', 'Add new Clearanceform', array('class' => 'btn btn-success')); ?>

</p>
