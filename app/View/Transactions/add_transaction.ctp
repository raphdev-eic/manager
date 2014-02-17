            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Formulaire d'ajout de transaction
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <?php echo $this->Form->create('Transaction',array('class'=>'cmxform form-horizontal','id'=>'formActive')); ?>
                                    <?php echo $this->Form->input('numero',array('type'=>'hidden')); ?>
                                    <?php echo $this->Form->input('status',array('type'=>'hidden')); ?>
                                    <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                                    <div class="form-group">
                                        <label for="libelle" class="control-label col-lg-3">Intitulé</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('libelle',array('class'=>'form-control','label'=>false,'placeholder'=>'Intitulé de la transaction')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="quantity" class="control-label col-lg-3">Nombre de parts</label>
                                        <div class="col-lg-2">
                                         <?php echo $this->Form->input('quantity',array('class'=>'form-control','label'=>false,'type'=>'text'));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="price" class="control-label col-lg-3">Vl d'achat</label>
                                        <div class="col-lg-2">
                                         <?php echo $this->Form->input('price',array('class'=>'form-control','label'=>false,'type'=>'text'));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="created" class="control-label col-lg-3">Date d'achat</label>
                                        <div class="col-lg-3">
                                              <?php echo $this->Form->input('created',array('class'=>'form-control','label'=>false,
                                                'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));
                                              ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="updated" class="control-label col-lg-3">Date de modification</label>
                                        <div class="col-lg-3">
                                        <?php echo $this->Form->input('updated',array('class'=>'form-control','label'=>false,'minYear' => date('Y') - 70,'maxYear' => date('Y') + 35));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="year_id" class="control-label col-lg-3">Année d'investissement</label>
                                        <div class="col-lg-2">
                                            <?php echo $this->Form->input('year_id',array('class'=>'form-control','label'=>false,'options'=>$years));?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="operation_id" class="control-label col-lg-3">Type d'operation</label>
                                        <div class="col-lg-2">
                                        <?php echo $this->Form->input('operation_id',array('class'=>'form-control','id'=>'rank_id','label'=>false,'options'=>$operations));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <?php echo $this->Form->button('Etape 2',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
                                            <?php echo $this->Form->button('Cancel',array('class'=>'btn btn-icon btn-default glyphicons circle_remove','type'=>'reset')); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>