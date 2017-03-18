<section class="content">


<?php if ($clearanceforms): ?>
<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Listing Clearance Applicants</h3>
            </div>
            <div class="box-body">

  <div class="table-responsive">         
<table class="table table-striped" id="tbl1">
	<thead>
		<tr>
			<th>Fileno</th>
			<th>Orno</th>
			<th>Firstname</th>
			<th>Middlename</th>
			<th>Lastname</th>
			<th>Purpose</th>
			<th>Schedule</th>
			<th>Created At</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($clearanceforms as $item): ?>
<?php

					$today =date_create(date("Y-m-d"));
					$date = date_create($item->schedule);
					$diff=date_diff($today,$date);

			 		if ($diff->days > 3 && $diff->m == 0) {
			 			$highlight = "warning";
			 		}
			 		else{
			 			$highlight = "success";

			 		}


			 ?>
			<tr class="<?php echo $highlight; ?>">
			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->orno; ?></td>
			<td><?php echo $item->firstname; ?></td>
			<td><?php echo $item->middlename; ?></td>
			<td><?php echo $item->lastname; ?></td>
			<td><?php echo $item->purpose; ?></td>
			<td><?php echo $item->schedule; ?></td>
			<td><?php echo Date::time_ago($item->created_at); ?></td>
			<td>
				<?php echo Html::anchor('admin/clearanceform/view/'.$item->id, '<i class="fa fa-fw fa-eye"></i>'); ?> |
				<?php echo Html::anchor('admin/clearanceform/edit/'.$item->id, '<i class="fa fa-fw fa-edit"></i>'); ?> |
				<?php echo Html::anchor('admin/clearanceform/delete/'.$item->id, '<i class="fa fa-fw fa-trash-o"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
</div>
<?php else: ?>
<p>No Clearanceforms.</p>

<?php endif; ?><p>
	<?php //echo Html::anchor('admin/clearanceform/create', 'Add new Clearanceform', array('class' => 'btn btn-success')); ?>

</p>
 </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</section>
