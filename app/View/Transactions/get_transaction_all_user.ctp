<!--dynamic table-->
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_page',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/advanced-datatable/media/css/demo_table',null,array('inline'=>false)); ?>
<?php  echo $this->Html->css('assets/data-tables/DT_bootstrap',null,array('inline'=>false)); ?>
<div class="row">
            <div class="col-sm-12">
                <?php $this->Session->flash(); ?>
                <section class="panel">
                    <header class="panel-heading">
                        Operation non validées
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Date de depôt</th>
                                    <th>Commandes</th>
                                    <th>Parts Actuelles</th>
                                    <th>Operation</th>
                                    <th class="hidden-phone">VL d'achat</th>
                                    <th class="hidden-phone">Détail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaction as $v => $t): ?>
                                    <tr>
                                        <td><?php echo ucfirst($t['User']['lastname']).' '.ucfirst($t['User']['firstname']); ?></td>
                                        <td><?php echo $t['User']['email']; ?></td>
                                        <td><?php echo $t['Transaction']['created']; ?></td>
                                        <td><?php echo $t['Transaction']['quantity']; ?></td>
                                        <td><?php echo $t['User']['parts']; ?></td>
                                        <td><?php echo $t['Operation']['name']; ?></td>
                                        <td class="center hidden-phone"><?php echo $t['Transaction']['price']; ?></td>
                                        <td class="center hidden-phone"><a href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'SetRetrailTrans', $t['Transaction']['id'], $t['Transaction']['user_id'])); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Detail</a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Date de depôt</th>
                                    <th>Commandes</th>
                                    <th>Parts Actuelles</th>
                                    <th>Operation</th>
                                    <th class="hidden-phone">VL d'achat</th>
                                    <th class="hidden-phone"><a href="#"><i class="fa fa-plus"></i> Detail</a></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
<!--dynamic table-->
<?php  echo $this->Html->script('assets/advanced-datatable/media/js/jquery.dataTables', array('inline'=>false)); ?>
<?php  echo $this->Html->script('assets/data-tables/DT_bootstrap', array('inline'=>false)); ?>
