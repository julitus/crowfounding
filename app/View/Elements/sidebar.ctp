<nav class="navbar-default navbar-side" role="navigation">
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!--form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form-->
		<div class="form-group">
			
		</div>
		<ul class="nav menu">
			<li>
				<?= $this->Html->link('<svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg> Usuarios', array('controller' => 'users', 'action' => 'index'), array('escape' => false)) ?>
			</li>
			<li>
				<?= $this->Html->link('<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Campañas', array('controller' => 'campaigns', 'action' => 'index'), array('escape' => false)) ?>
			</li>
			<li>
				<?= $this->Html->link('<svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Categorias', array('controller' => 'categories', 'action' => 'index'), array('escape' => false)) ?>
			</li>
			<li class="parent ">
				<a data-toggle="collapse" href="#sub-item-1">
					<svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Ubigeo 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<?= $this->Html->link('<svg class="glyph stroked map"><use xlink:href="#stroked-map"></use></svg> Paises', array('controller' => 'countries', 'action' => 'index'), array('escape' => false)) ?>
					</li>
					<li>
						<?= $this->Html->link('<svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"></use></svg> Estados/Regiones', array('controller' => 'states', 'action' => 'index'), array('escape' => false)) ?>
					</li>
					<li>
						<?= $this->Html->link('<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> Ciudades', array('controller' => 'cities', 'action' => 'index'), array('escape' => false)) ?>
					</li>
				</ul>
			</li>
			<!--li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li-->
			<!--li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a data-toggle="collapse" href="#sub-item-1">
					<svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li-->
		</ul>

	</div><!--/.sidebar-->
</nav>