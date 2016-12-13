<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Categorias'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="categories form">
					<?php echo $this->Form->create('Category', array('type' => 'file')); ?>
						<legend><?php echo __('Editar Categoria'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('name', array('div' => 'form-group', 'label' => 'Nombre', 'class' => 'form-control'));
							echo $this->Form->input('description', array('div' => 'form-group', 'label' => 'Descripción', 'class' => 'form-control'));
							echo $this->Form->input('parent_id', array('div' => 'form-group', 'label' => 'Pertenece a', 'class' => 'form-control', 'options' => $parentCategories, 'empty' => '-- Seleccione Categoria --'));
							echo $this->Form->input('img', array('div' => 'form-group', 'label' => 'Imagen', 'class' => 'form-control input-file', 'type' => 'file', 'accept'=>'image/*'));
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
