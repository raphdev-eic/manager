<?php $this->Start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> Manager EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Pages</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Cities</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add City</li>
</ul>

<!-- Heading -->
<div class="heading-buttons">
	<h1>City EiC <span>Add City</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Cities', 'action' => 'CityList')); ?>" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> return to List</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<?php $this->end(); ?>
<div class="innerLR">
	<?php echo $this->Form->create('City'); ?>
	<?php echo $this->Form->input('id'); ?>
	<!-- Widget -->
	<div class="widget widget-tabs widget-tabs-gray">
	
		<!-- Widget heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a></li>
			</ul>
		</div>
		<!-- // Widget heading END -->
		<div class="widget-body">
			<div class="tab-content">
				<!-- Description -->
				<div class="tab-pane active" id="productDescriptionTab">
					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Nom de la Ville</strong>
							<p class="muted">Ajouter le nom de la villes (son sigle).</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Name</label>
							<?php echo $this->Form->input('name',array('id'=>'inputTitle','class'=>'span6','placeholder'=>'Entrer la ville...','label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->

					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Latitude</strong>
							<p class="muted">Ajouter la latitude du pays</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">latitude</label>
							<?php echo $this->Form->input('lat',array('id'=>'lat','class'=>'span6','placeholder'=>'Ajouter la latitude','label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>longitude</strong>
							<p class="muted">Ajouter la longitude du pays.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">longitude</label>
							<?php echo $this->Form->input('lng',array('id'=>'lng','class'=>'span6','placeholder'=>'Ajouter la longitude','label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->

					<!-- Row -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Nom du pays</strong>
							<p class="muted">Selectionnez le pays correspondant.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Nom du pays</label>
							<?php echo $this->Form->input('country_id',array('id'=>'country_id','class'=>'span6','options'=>$list,'label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<hr class="separator bottom" />
					<!-- Row -->
				</div>
				<!-- // Description END -->
			</div>
		</div>
	</div>

	<!-- Bottom buttons -->
	<div class="heading-buttons">
		<div class="buttons pull-right" style="margin: 0;">
			<?php echo $this->Form->button('Cancel',array('type'=>'reset','class'=>'btn btn-default btn-icon glyphicons share')); ?><i></i>
			<?php echo $this->Form->button('Save',array('class'=>'btn btn-primary btn-icon glyphicons ok_2')); ?><i></i>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- // Bottom buttons END -->
	<?php echo $this->Form->end(); ?>
</div>
