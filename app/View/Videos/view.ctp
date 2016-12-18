<div class="videos view">
<h2><?php echo __('Video'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($video['Video']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 0'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_0']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 1'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 2'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 3'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 4'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 5'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 6'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 7'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 8'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video 9'); ?></dt>
		<dd>
			<?php echo h($video['Video']['url_video_9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($video['Video']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($video['Video']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Video'), array('action' => 'edit', $video['Video']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Video'), array('action' => 'delete', $video['Video']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $video['Video']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('action' => 'add')); ?> </li>
	</ul>
</div>
