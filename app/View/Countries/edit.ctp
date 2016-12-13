<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Paises'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="countries form">
					<?php echo $this->Form->create('Country'); ?>
						<legend><?php echo __('Editar País'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('name', array('div' => 'form-group', 'label' => 'Nombre', 'class' => 'form-control'));
							echo $this->Form->input('sortname', array('div' => 'form-group', 'label' => 'Abrev.', 'class' => 'form-control'));
						?>
						<div class="form-group checkbox">
							<label>
						<?php
							echo $this->Form->checkbox('active', array('value' => true));
						?>
							Activo?
							</label>
						</div>
						<?= $this->Form->button('Guardar', array('class' => 'btn btn-primary')); ?>
                        <?= $this->Html->link(__('Cancelar'), array('action' => 'index'), array('class' => 'btn btn-warning')) ?>
					<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
