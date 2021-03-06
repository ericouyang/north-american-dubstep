<h2>Item Inventory</h2>
<br>
<?php if ($items): ?>
<table class="table table-striped">
	<thead>
		<tr>
		  <th>ID</th>
			<th>Cost</th>
			<th>Name</th>
			<th>Description</th>
			<th>Qty</th>
			<th>UPC</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item): ?>		<tr>
      <td><?php echo $item->id; ?></td>
			<td>$<?php echo sprintf("%01.2f",$item->cost/100.0); ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->qty; ?></td>
			<td><?php echo $item->upc; ?></td>
			<td>
				<?php echo Html::anchor('admin/item/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/item/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/item/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure you want to delete?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Items.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/item/create', 'Add new Item', array('class' => 'btn btn-success')); ?>

</p>
