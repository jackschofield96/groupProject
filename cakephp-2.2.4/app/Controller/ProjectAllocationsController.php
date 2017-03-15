<?php

class ProjectAllocationsController extends AppController {

     public $components = array('Session') ;
     

     public function add($staffid) {
          $this->set('title', "Allocation");
        $this->set('text', "Add a member of staff to a project");
         $this->layout = 'owner' ;
         $this->loadModel('Project') ;


         $this->set('staffid',$staffid) ;
         $this->layout = 'owner' ;
         $staffid = $this->Session->read('User.staffid') ;
         $ownedprojects = $this->Project->findAllByproject_owner_id($staffid) ;
         $this->set('ownedprojects', $ownedprojects) ;
     }

     public function allocate($projectid,$staffid){
          $this->loadModel('Project') ;
          $this->ProjectAllocation->set(array(
          'project_id' => $projectid,
           'staff_id' => $staffid,
           'time_share' => 1
        ));
          if($this->ProjectAllocation->save()){
            $this->Session->setFlash('Staff Allocated') ;
             $this->redirect(array('controller'=>'Projects', 'action' => 'viewOwnedProjects')) ;
          }
          

          
            
       
     }






}
?>