<?php

class ProjectsController extends AppController {

     public $components = array('Session') ;
     

     public function index(){
        
        $this->redirect('viewOwnedProjects') ;

    }



     public function edit($project_id) {
          $this->set('title', "Edit Projects");
        $this->set('text', "Edit the project details");
        $this->layout = 'owner' ;
        $data = $this->Project->findByproject_id($project_id) ;
        //$this->set('data', $data) ;

        if ($this->request->is(array('post', 'put'))){
            $this->request->data['Project']['project_id'] = $project_id ;
            if($this->Project->save($this->request->data)){
            	$this->Session->setFlash('Edited') ;
               
            	$this->redirect('viewOwnedProjects') ;
            }

        }
        
         $pending = $this->Project->query("SELECT staff_first_name FROM staff,users WHERE staff.user_id = users.id AND users.role = 0") ;
         $list =array();
        $i = 0; 
        for($i;$i<count($pending);$i++){
            array_push($list,$pending[$i]['staff']['staff_first_name']) ;
          }
         
         $this->set('staff',$list) ;
        $this->set('id',$this->Session->read('User.staffid'));


        if (!$this->request->data){
            $this->request->data = $data ;
        }

    }

     public function viewOwnedProjects(){
           $this->set('title', "Your Projects");
        $this->set('text', "Leidos projects you are currently managing");
         $this->set('title', "Owned Projects") ;
         $this->layout = 'owner' ;
         $staffid = $this->Session->read('User.staffid') ;
         $ownedprojects = $this->Project->findAllByproject_owner_id($staffid) ;
         $this->set('ownedprojects', $ownedprojects) ;
     }


     public function view($project_id) {
          $this->set('title', "Project");
        $this->set('text', "View project details");
         $this->set('title', "Owned Projects") ;
        $this->layout = 'owner' ;
     	$project = $this->Project->find('first', array(
        'conditions' => array('Project.project_id' => $project_id)
    ));
        $staff = $this->Project->query("SELECT * FROM staff,project_allocation WHERE staff.staff_id = project_allocation.staff_id AND project_allocation.project_id = $project_id") ;

     	$this->set('project', $project) ;
     	$this->set('staff', $staff) ;
     }

     public function resources() {

        
     }


     public function viewProjects() {
          $this->set('title', "Projects");
        $this->set('text', "View current Leidos projects");
        $this->set('title', "All Leidos Projects") ;
        $this->layout ='owner' ;
       $allprojectsdata = $this->Project->find('all') ;
       $this->set('Projects', $allprojectsdata) ;


     }



     public function createdProject() {
           $this->set('title', "Profile");
        $this->set('text', "Your user profile.");
          $this->set('title', "Owned Projects") ;
         $this->layout = 'owner' ;
         $data = $this->Session->read('User.createdProject');
         $this->set('Project', $data) ;

     }




     public function add() {
           $this->set('title', "Create a Project");
        $this->set('text', "Inout details below to create a new project");
         $this->layout = 'owner' ;
           if($this->request->is('post')) {

           
             
              $this->Project->create();
              if($this->Project->save($this->request->data)) {
                    $this->Session->setFlash('Project Created') ;
                    $this->Session->write('User.createdProject', $this->request->data);
                    $this->redirect(array('controller' => 'Projects', 'action' => 'viewOwnedProjects'));

              }

           }

         $pending = $this->Project->query("SELECT staff_first_name FROM staff,users WHERE staff.user_id = users.id AND users.role = 0") ;
         $list =array();
         $i = 0; 
        for($i;$i<count($pending);$i++){
            array_push($list,$pending[$i]['staff']['staff_first_name']) ;
          }
         
         $this->set('staff',$list) ;
         $this->set('id',$this->Session->read('User.staffid'));
     }




    public function viewProfile() {
      $this->loadModel('Project') ;
   
      $this->redirect(array('controller'=>'Staff', action => 'viewProfile')) ;

    }

    public function viewStaff() {
        $this->set('title', "Staff");
        $this->set('text', "View all Leidos staff");
      $this->layout='owner' ;
      $this->loadModel('Staff') ;
       $allstaffdata = $this->Staff->find('all') ;
       $this->set('Staff', $allstaffdata) ;

    }



}
?>