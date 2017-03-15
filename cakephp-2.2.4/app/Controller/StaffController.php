<?php

class StaffController extends AppController {

     public $components = array('Session') ;
     
    
     public function add() {
            $this->set('title', "Create your user profile");
        $this->set('text', "Fill in details for your user profile");      
           $this->layout = 'staff' ;
           $this->set('id',$this->Auth->user('id')) ;        
           if($this->request->is('post')) {
             
           
              $this->Staff->create();
              if($this->Staff->save($this->request->data)) {
                    $this->Session->setFlash('Staff Created') ;
                    $this->Session->write('User.createdStaff', $this->request->data);
                    $this->redirect(array('controller' => 'Staff', 'action' => 'viewStaff'));

              } 

           }
             
            
     }

     public function index(){
             

         if(empty($this->Staff->findByuser_id($this->Auth->user('id')))){
            $this->redirect('add') ;
         }
         else {
            $this->redirect('viewProfile') ;
         }
         
     }

     public function viewProfile() {
        $this->set('title', "Profile");
        $this->set('text', "Your user profile.");
        
        $id = $this->Auth->user('id') ;
        $role = $this->Staff->query("SELECT role FROM users WHERE id = $id") ;
        if ($role[0]['users']['role']) {
           
           $this->layout = 'staff' ;
        }
        else {
           
           $this->layout = 'owner' ;
        }
       
        
        $staffid = $this->Session->read('User.staffid') ;
        $data = $this->Staff->findByuser_id($id) ;
        $this->set('data', $data) ;
        $this->set('staffid',$staffid) ;
        
        $assignedprojects = $this->Staff->query("SELECT * FROM project_allocation, projects WHERE project_allocation.staff_id = $staffid AND project_allocation.project_id = projects.project_id") ;
        $this->set('assignedprojects', $assignedprojects) ;
        
     }

     public function flag() {
     
      $this->Session->setFlash('Project Flagged');

      $this->redirect('viewProfile') ;
     }



      public function edit($staff_id) {
          $this->set('title', "Edit");
        $this->set('text', "Edit your user profile details");

        $this->layout = 'staff' ;
        
        $data = $this->Staff->findBystaff_id($staff_id) ;
        //$this->set('data', $data) ;

        if ($this->request->is(array('post', 'put'))){
            $this->request->data['Staff']['staff_id'] = $staff_id ;
            if($this->Staff->save($this->request->data)){
            	$this->Session->setFlash('Edited') ;
               
            	$this->redirect('viewProfile') ;
            }

        } 
        if (!$this->request->data){
            $this->request->data = $data ;
        }

    }

     
     public function view($staff_id) {
        $this->set('title', "Profile");
        $this->set('text', "View a user profile");
      $this->layout = "staff" ;
     	$staff = $this->Staff->find('first', array(
        'conditions' => array('Staff.staff_id' => $staff_id)
    ));
        $projects = $this->Staff->query("SELECT * FROM projects,project_allocation WHERE projects.project_id = project_allocation.project_id AND project_allocation.staff_id = $staff_id") ;

     	$this->set('data', $staff) ;
     	$this->set('assignedprojects', $projects) ;
     }



     public function viewStaff() {
          $this->set('title', "Staff");
        $this->set('text', "All staff");
        $this->layout='staff' ;
     
       $allstaffdata = $this->Staff->find('all') ;
       $this->set('Staff', $allstaffdata) ;


     }

     
     
      public function viewProjects() {
         $this->set('title', "Projects");
        $this->set('text', "Ongoing Leidos projects");      
       $this->layout = 'staff' ;
       $this->loadModel('Project') ;
       $allprojectsdata = $this->Project->find('all') ;
       $this->set('Projects', $allprojectsdata) ;


     }


     public function viewProject($project_id) {
        $this->set('title', "Project");
        $this->set('text', "Details for project");
        $this->layout = 'staff' ;
        $this->loadModel('Project') ;
        $project = $this->Project->find('first', array(
        'conditions' => array('Project.project_id' => $project_id)
    ));
        $staff = $this->Project->query("SELECT * FROM staff,project_allocation WHERE staff.staff_id = project_allocation.staff_id AND project_allocation.project_id = $project_id") ;

        $this->set('project', $project) ;
        $this->set('staff', $staff) ;
     }


}





?>