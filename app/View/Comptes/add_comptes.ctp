<?php echo $this->Session->flash(); ?>
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Formulaire d'ajout de comptes investisseurs
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <?php echo $this->Form->create('User',array('class'=>'cmxform form-horizontal','id'=>'formActiveUser')) ?>
                                    <h4 class="heading">Informations du Compte bancaire  de investisseur</h4>
                                    <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                                    <div class="form-group">
                                        <label for="number" class="control-label col-lg-3">Numero de comptes</label>
                                        <div class="col-lg-6">
                                           <?php echo $this->Form->input('number',array('class'=>'form-control','id'=>'number','label'=>false,'placeholder'=>'Numero de compte bancaire')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="bank" class="control-label col-lg-3">Nom de la Banque</label>
                                        <div class="col-lg-6">
                                            <?php echo $this->Form->input('bank',array('class'=>'form-control','id'=>'bank','label'=>false,'placeholder'=>'Nom de la banque'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                        <?php echo $this->Form->button('Enregister et Terminer',array('class'=>'btn btn-icon btn-primary glyphicons circle_ok')); ?>
										<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'UserList')); ?>" class="btn btn-icon btn-danger glyphicons circle_ok pull-right">Terminer</a>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>