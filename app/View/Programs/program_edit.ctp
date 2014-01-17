<?php $this->Start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> Manager EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Pages</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Programme</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add Programme</li>
</ul>

<!-- Heading -->
<div class="heading-buttons">
	<h1>Programme EiC <span>Add programme</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Programs', 'action' => 'ProgramList')); ?>" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> return to List</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<?php $this->end(); ?>
<div class="innerLR">
	<?php echo $this->Form->create('Program'); ?>
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
							<strong>Nom du programme</strong>
							<p class="muted">Ajouter le nom du programme (son sigle).</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Title</label>
							<?php echo $this->Form->input('name',array('id'=>'inputTitle','class'=>'span6','placeholder'=>'Entrer le nom du programme...','label'=>false)); ?>
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
							<strong>Prix minimum</strong>
							<p class="muted">Ajouter le prix minimum du programme.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Prix Minimum</label>
							<?php echo $this->Form->input('price_default',array('id'=>'inputprice_default','class'=>'span6','placeholder'=>'0000,000','label'=>false)); ?>
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
							<strong>Prix maximum</strong>
							<p class="muted">Ajouter le nom du programme (son sigle).</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Prix maximum</label>
							<?php echo $this->Form->input('price_max',array('id'=>'price_max','class'=>'span6','placeholder'=>'0000,000','label'=>false)); ?>
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
							<strong>Description</strong>
							<p class="muted">Renseignez la description du programme.</p>
						</div>
						<!-- // Column END -->
						<!-- Column -->
						<div class="span9">
							<label for="textDescription">Description</label>
							<?php echo $this->Form->textarea('description',array('id'=>'textDescription','class'=>'wysihtml5','style'=>'width: 96%;','rows'=>5,'label'=>false));?>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
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
