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
					<div class="cities form">
					<?php echo $this->Form->create('City'); ?>
						<legend><?php echo __('Editar City'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('name', array('div' => 'form-group', 'label' => 'Nombre', 'class' => 'form-control'));
							echo $this->Form->input('state_id', array('div' => 'form-group', 'label' => 'Estado/Región', 'class' => 'form-control', 'empty' => '-- Seleccione Estado/Región --'));
						?>
						<?= $this->Form->button('Guardar', array('class' => 'btn btn-primary')); ?>
                        <?= $this->Html->link(__('Cancelar'), array('action' => 'index'), array('class' => 'btn btn-warning')) ?>
					<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>