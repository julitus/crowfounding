<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Ciudades'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="cities view">
					<h3><?php echo h($city['City']['name']); ?></h3>
						<dl>
							<dt class="th-class"><?php echo __('Ciuadad'); ?></dt>
							<dd>
								<?php echo h($city['City']['name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Estado/Región'); ?></dt>
							<dd>
								<?php echo $this->Html->link($city['State']['name'], array('controller' => 'states', 'action' => 'view', $city['State']['id'])); ?>
								&nbsp;
							</dd>
						</dl>
						<?= $this->Html->link(__('Editar'), array('action' => 'edit', $city['State']['id']), array('class' => 'btn btn-success')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $city['State']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $city['State']['name']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
