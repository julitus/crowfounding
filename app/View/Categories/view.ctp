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
				<div class="col-md-12">
					<div class="categories view">
					<h3><?php echo h($category['Category']['name']); ?></h3>
						<div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
						<dl>
							<dt class="th-class"><?php echo __('Nombre'); ?></dt>
							<dd>
								<?php echo h($category['Category']['name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Pertenece a'); ?></dt>
							<dd>
								<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Imagen'); ?></dt>
							<dd>
								<?php echo h($category['Category']['file']); ?>
								&nbsp;
							</dd>
						</dl>
							</div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        <dl>
							<dt class="th-class"><?php echo __('Descripción'); ?></dt>
							<dd>
								<?php echo h($category['Category']['description']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Creado'); ?></dt>
							<dd>
								<?php echo h(date("d-m-Y h:i:s A", strtotime($category['Category']['created']))); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Modificado'); ?></dt>
							<dd>
								<?php echo h(date("d-m-Y h:i:s A", strtotime($category['Category']['modified']))); ?>
								&nbsp;
							</dd>
						</dl>
							</div>
						</div>
						<?= $this->Html->link(__('Editar'), array('action' => 'edit', $category['Category']['id']), array('class' => 'btn btn-success')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $category['Category']['name']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
