<div class="campaigns view">
<h2><?php echo __('Campaign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money Goal'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['money_goal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Money Now'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['money_now']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Video'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['url_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 1'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['file_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 2'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['file_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 3'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['file_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 4'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['file_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File 5'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['file_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Begin Date'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['begin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['Country']['name'], array('controller' => 'countries', 'action' => 'view', $campaign['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['State']['name'], array('controller' => 'states', 'action' => 'view', $campaign['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['City']['name'], array('controller' => 'cities', 'action' => 'view', $campaign['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['Category']['name'], array('controller' => 'categories', 'action' => 'view', $campaign['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campaign['User']['id'], array('controller' => 'users', 'action' => 'view', $campaign['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $campaign['Campaign']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
