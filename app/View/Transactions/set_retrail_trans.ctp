        <div class="row">
            <div class="col-sm-12">
                <?php $this->Session->flash(); ?>
                <section class="panel">
                    <div class="panel-body">
                        <h2>Bordereau de versement</h2>
                        <?php if(!empty($bordero)): ?>
                        <a href="<?php echo Configure::read('platform').DS.$bordero['Bordero']['url'].DS.$bordero['Bordero']['name']; ?>"><img src="<?php echo Configure::read('platform').DS.$bordero['Bordero']['url'].DS.$bordero['Bordero']['name']; ?>" alt="" width="50%"></a>
                        <?php else: ?>
                        <p>Pas de bordereau de versement fournir par <strong><?php echo ucfirst($detail['User']['lastname']).' '.ucfirst($detail['User']['firstname']); ?></strong></p>
                        <?php endif; ?>
                    </div>
                    <div class="panel-body invoice">
                        <div class="invoice-header">
                            <div class="invoice-title col-md-3 col-xs-12">
                                    <h1>Facture</h1>
                            </div>
                            <div class="invoice-info col-md-9 col-xs-12">
                                <div class="col-md-4 col-sm-4">
                                    <?php echo $this->Html->image('logo-2.png'); ?>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p>Codody - Rivera 2<br>
                                        Pharmarcie Attoban st-bernard</p>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                   <p>Phone: +00 225 00225 22437577 <br>
                                       Email : infos@eic-corporation.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="row invoice-to">
                            <div class="col-md-4 col-sm-4">
                                <h4>Facture de :</h4>
                                <h2><?php echo ucfirst($detail['User']['lastname']).' '.ucfirst($detail['User']['firstname']); ?></h2>
                                <p>
                                    Operation : <?php echo ucfirst($detail['Operation']['name']); ?> <br>
                                    Signature: <?php echo $detail['User']['key_auth']; ?><br>
                                    Email : <?php echo $detail['User']['email']; ?>
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-5 pull-right">
                                <div class="row">
                                    <div class="col-md-4 col-sm-5 inv-label">Numero #</div>
                                    <div class="col-md-8 col-sm-7"><?php echo $detail['Transaction']['numero']; ?></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 col-sm-5 inv-label">Date #</div>
                                    <div class="col-md-8 col-sm-7"><?php echo $detail['Transaction']['created']; ?></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12 inv-label">
                                            <h3>TOTAL DUE</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h1 class="amnt-value"><?php echo 'XOF '.$total; ?></h1>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <table class="table table-invoice" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item Description</th>
                                    <th class="text-center">VL d'achat</th>
                                    <th class="text-center">Quantité</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $detail['Transaction']['id']; ?></td>
                                    <td>
                                        <h4>Achat de parts</h4>
                                        <p><?php echo $detail['Transaction']['libelle']; ?></p>
                                    </td>
                                    <td class="text-center"><?php echo $detail['Transaction']['price']; ?></td>
                                    <td class="text-center"><?php echo $detail['Transaction']['quantity']; ?></td>
                                    <td class="text-center"><?php echo 'XOF '.$subtotal = $detail['Transaction']['price'] * $detail['Transaction']['quantity']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-9 payment-method">
                                <h4>Methode de payement:</h4>
                                <p>1. Virement bancaire.</p>
                                <p>2. Payement electronique par cartes.</p>
                                <br>
                                <h3 class="inv-label itatic">Merci pour votre achat</h3>
                            </div>
                            <div class="col-md-3 invoice-block pull-right">
                                <ul class="unstyled amounts">
                                    <li>Sub - Total amount : <?php echo $subtotal; ?></li>
                                    <li>Discount : XOF 1100</li>
                                    <li>TAX (0.00%) ----- </li>
                                    <li class="grand-total">Grand Total : <?php echo 'XOF '.$total; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center invoice-btn">
                            <a class="btn btn-success" href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'ActiveAccounts',$detail['Transaction']['id'],$detail['Transaction']['user_id'])); ?>"><i class="fa fa-check"></i> Activer </a>
                            <a class="btn btn-danger" href="<?php echo $this->Html->url(array('controller' => 'Transactions', 'action' => 'ActiveAccounts',$detail['Transaction']['id'])); ?>"><i class="fa fa-times-circle-o"></i> Decliner </a>
                            <a class="btn btn-info"><i class="fa fa-bitbucket"></i> Cashflow </a>
                            <!--<a onclick="javascript:window.print();" class="btn btn-primary"><i class="fa fa-print"></i> Print </a>-->
                        </div>
                    </div>
                </section>
            </div>
        </div>