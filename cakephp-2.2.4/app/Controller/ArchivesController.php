<?php

class ArchivesController extends AppController {

     public $components = array('Session') ;
     


     public function viewArchives() {
          $this->set('title', "Archived Projects");
        $this->set('text', "Completed Leidos projects");
        $id = $this->Auth->user('id') ;
        $role = $this->Archive->query("SELECT role FROM users WHERE id = $id") ;
        if ($role[0]['users']['role']) {
           
           $this->layout = 'staff' ;
        }
        else {
           
           $this->layout = 'owner' ;
        }
        

        $this->set('title', "Owned Projects") ;
        
       $allarchivesdata = $this->Archive->find('all') ;
       $this->set('Archives', $allarchivesdata) ;


     }





}
?>