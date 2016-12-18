<div class="images view">
<h2><?php echo __('Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($image['Image']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($image['Image']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 0'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_0']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 1'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 2'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 3'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 4'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 5'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 6'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 7'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 8'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 9'); ?></dt>
		<dd>
			<?php echo h($image['Image']['file_9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($image['Image']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($image['Image']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($image['Image']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image'), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $image['Image']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('action' => 'add')); ?> </li>
	</ul>
</div>
