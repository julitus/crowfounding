<div class="videos form">
<?php echo $this->Form->create('Video'); ?>
	<fieldset>
		<legend><?php echo __('Edit Video'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('url_video_0');
		echo $this->Form->input('url_video_1');
		echo $this->Form->input('url_video_2');
		echo $this->Form->input('url_video_3');
		echo $this->Form->input('url_video_4');
		echo $this->Form->input('url_video_5');
		echo $this->Form->input('url_video_6');
		echo $this->Form->input('url_video_7');
		echo $this->Form->input('url_video_8');
		echo $this->Form->input('url_video_9');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Video.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Video.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?></li>
	</ul>
</div>
