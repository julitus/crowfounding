<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Estados/Regiones'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="states view">
					<h3><?php echo h($state['State']['name']); ?></h3>
						<dl>
							<dt class="th-class"><?php echo __('Estado/Región'); ?></dt>
							<dd>
								<?php echo h($state['State']['name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('País'); ?></dt>
							<dd>
								<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
								&nbsp;
							</dd>
						</dl>
						<?= $this->Html->link(__('Editar'), array('action' => 'edit', $state['State']['id']), array('class' => 'btn btn-success')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $state['State']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $state['State']['name']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

