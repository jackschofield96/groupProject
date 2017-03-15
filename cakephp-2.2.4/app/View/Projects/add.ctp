<h1>Create Project</h1>
<?php
    
    
    echo $this->Form->create('Project') ;
    echo $this->Form->input('project_name') ;
    echo $this->Form->input('project_type', array('options' => Project::type()));
    echo $this->Form->input('project_location', array('options' => Project::location()));
    echo $this->Form->input('project_skills', array(
    'type' => 'select',
    'options'=>Project::Skills(),
));
    echo $this->Form->input('project_start_date') ;
    echo $this->Form->input('project_end_date') ;
    echo $this->Form->input('project_budget') ;
    echo $this->Form->input('project_description', array('type' => 'textarea'));;
    echo $this->Form->input('Project.project_owner_id',array('type'=>'hidden','value'=>$id)); 
    
    echo $this->Form->end('Create Project') ;

    ?>