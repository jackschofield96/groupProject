<h1>Edit Profile</h1>
<?php
    
    
    echo $this->Form->create('Staff') ;
    echo $this->Form->input('staff_first_name') ;
    echo $this->Form->input('staff_last_name') ;
    echo $this->Form->input('staff_pref_location', array('options' => Staff::locations()));
    echo $this->Form->input('staff_skills', array('options' => Staff::skills()));
    echo $this->Form->input('staff_type', array('options' => Staff::type()));
    echo $this->Form->input('staff_salary') ;
    echo $this->Form->input('staff_personal_statement') ;
    echo $this->Form->end('Edit Profile') ;