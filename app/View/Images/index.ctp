<div class="images index">
	<h2><?php echo __('Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('file_0'); ?></th>
			<th><?php echo $this->Paginator->sort('file_1'); ?></th>
			<th><?php echo $this->Paginator->sort('file_2'); ?></th>
			<th><?php echo $this->Paginator->sort('file_3'); ?></th>
			<th><?php echo $this->Paginator->sort('file_4'); ?></th>
			<th><?php echo $this->Paginator->sort('file_5'); ?></th>
			<th><?php echo $this->Paginator->sort('file_6'); ?></th>
			<th><?php echo $this->Paginator->sort('file_7'); ?></th>
			<th><?php echo $this->Paginator->sort('file_8'); ?></th>
			<th><?php echo $this->Paginator->sort('file_9'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($images as $image): ?>
	<tr>
		<td><?php echo h($image['Image']['id']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['slug']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_0']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_1']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_2']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_3']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_4']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_5']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_6']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_7']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_8']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['file_9']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['path']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['created']); ?>&nbsp;</td>
		<td><?php echo h($image['Image']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $image['Image']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?></li>
	</ul>
</div>
