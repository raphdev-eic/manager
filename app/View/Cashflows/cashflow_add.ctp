            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Formulaire d'ajout d'ajout de cashflow
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <?php echo $this->Form->create('Cashflow',array('class'=>'cmxform form-horizontal','id'=>'formActive')); ?>
                                    <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                                    <div class="form-group">
                                        <label for="value" class="control-label col-lg-3">Valeur du cash</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('value',array('class'=>'form-control','label'=>false,'placeholder'=>'valeur du cashflow')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="action_id" class="control-label col-lg-3">Type de cashflow</label>
                                        <div class="col-lg-2">
                                         <?php echo $this->Form->input('action_id',array('class'=>'form-control','label'=>false,'options'=>$actions));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <?php echo $this->Form->button('Crediter',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?> ou
                                            <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'AllListUser')); ?>" class="btn btn-success"> Terminer</a>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>