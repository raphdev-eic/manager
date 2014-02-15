<?php
App::uses('CakeEventListener', 'Event');
class UsersEventListener implements CakeEventListener {
/**
 * event lier au niveau d'investissement
 */

        public function implementedEvents() {
  	        return array(
               'Model.Transaction.updatedPart'=> 'UpdateUserPart'
  	        );
        }

        public function UpdateUserPart($event){
         debug($event);
         die();
        }

}