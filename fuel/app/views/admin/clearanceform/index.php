<h2>Listing Clearance forms</h2>
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
			<th>Purpose</th>
			<th>Contactnumber</th>
			<th></th>
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
			<td><?php echo $item->purpose; ?></td>
			<td><?php echo $item->contactnumber; ?></td>
			<td>
				<?php echo Html::anchor('admin/clearanceform/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/clearanceform/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/clearanceform/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Clearanceforms.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/clearanceform/create', 'Add new Clearanceform', array('class' => 'btn btn-success')); ?>

</p>
