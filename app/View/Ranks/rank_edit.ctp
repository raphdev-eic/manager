<?php $this->Start('head'); ?>
<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="#" class="glyphicons dashboard"><i></i> Manager EiC</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Pages</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Ranks</li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Add Ranks</li>
</ul>

<!-- Heading -->
<div class="heading-buttons">
	<h1>Ranks EiC <span>Add Ranks</span></h1>
	<div class="buttons pull-right">
		<a href="<?php echo $this->Html->url(array('controller' => 'Ranks', 'action' => 'RankList')); ?>" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> return to List</a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<?php $this->end(); ?>
<div class="innerLR">
	<?php echo $this->Form->create('Rank'); ?>
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
							<strong>Nom du Grade</strong>
							<p class="muted">Ajouter le nom du Grade (son sigle).</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Nom du grade</label>
							<?php echo $this->Form->input('name',array('id'=>'inputTitle','class'=>'span6','placeholder'=>'Entrer du grade...','label'=>false)); ?>
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
							<strong>Le Niveau du grade</strong>
							<p class="muted">Ajouter le Niveau(1,2,3...)</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Niveau du grade</label>
							<?php echo $this->Form->input('etoile',array('id'=>'etoile','class'=>'span6','placeholder'=>'Ajouter le Niveau','label'=>false)); ?>
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
							<strong>Minimum des parts du grade</strong>
							<p class="muted">Ajouter le Minimum des parts du grade.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Minimum</label>
					    <?php echo $this->Form->input('Min',array('id'=>'Min','class'=>'span6','label'=>false)); ?>
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
							<strong>Maximum des parts du grade</strong>
							<p class="muted">Ajouter le Maximum des parts du grade.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Maximum</label>
					    <?php echo $this->Form->input('max',array('id'=>'max','class'=>'span6','label'=>false)); ?>
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
							<strong>Prix d'adhesion du grade</strong>
							<p class="muted">Ajouter le prix d'adhesion du grade.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Prix</label>
					    <?php echo $this->Form->input('price',array('id'=>'price','class'=>'span6','label'=>false)); ?>
							<div class="separator"></div>
						</div>
						<!-- // Column END -->
					</div>
					<!-- // Row END -->
					<div class="row-fluid">
						<!-- Column -->
						<div class="span3">
							<strong>Prix du membership</strong>
							<p class="muted">Ajouter le prix du membership.</p>
						</div>
						<!-- // Column END -->
						
						<!-- Column -->
						<div class="span9">
							<label for="inputTitle">Prix</label>
					    <?php echo $this->Form->input('membership',array('id'=>'price','class'=>'span6','label'=>false)); ?>
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
