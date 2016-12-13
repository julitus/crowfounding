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
					<div class="countries view">
					<h3><?php echo h($country['Country']['name']); ?></h3>
						<dl>
							<dt class="th-class"><?php echo __('País'); ?></dt>
							<dd>
								<?php echo h($country['Country']['name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Abrev.'); ?></dt>
							<dd>
								<?php echo h($country['Country']['sortname']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Activo'); ?></dt>
							<dd>
								<?php echo h($country['Country']['active']) ? 'Si' : 'No'; ?>
								&nbsp;
							</dd>
						</dl>
						<?= $this->Html->link(__('Editar'), array('action' => 'edit', $country['Country']['id']), array('class' => 'btn btn-success')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $country['Country']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $country['Country']['name']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>