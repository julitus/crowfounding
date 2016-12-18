<div class="images form">
<?php echo $this->Form->create('Image'); ?>
	<fieldset>
		<legend><?php echo __('Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('slug');
		echo $this->Form->input('file_0');
		echo $this->Form->input('file_1');
		echo $this->Form->input('file_2');
		echo $this->Form->input('file_3');
		echo $this->Form->input('file_4');
		echo $this->Form->input('file_5');
		echo $this->Form->input('file_6');
		echo $this->Form->input('file_7');
		echo $this->Form->input('file_8');
		echo $this->Form->input('file_9');
		echo $this->Form->input('path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Image.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Image.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
