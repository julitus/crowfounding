<div class="videos index">
	<h2><?php echo __('Videos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_0'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_1'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_2'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_3'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_4'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_5'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_6'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_7'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_8'); ?></th>
			<th><?php echo $this->Paginator->sort('url_video_9'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($videos as $video): ?>
	<tr>
		<td><?php echo h($video['Video']['id']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_0']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_1']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_2']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_3']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_4']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_5']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_6']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_7']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_8']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url_video_9']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['created']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $video['Video']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $video['Video']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $video['Video']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $video['Video']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Video'), array('action' => 'add')); ?></li>
	</ul>
</div>
