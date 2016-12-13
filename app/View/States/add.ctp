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
					<div class="states form">
					<?php echo $this->Form->create('State'); ?>
						<legend><?php echo __('Agregar Estado/Región'); ?></legend>
						<?php
							echo $this->Form->input('name', array('div' => 'form-group', 'label' => 'Nombre', 'class' => 'form-control'));
							echo $this->Form->input('country_id', array('div' => 'form-group', 'label' => 'País', 'class' => 'form-control', 'empty' => '-- Seleccione País --'));
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