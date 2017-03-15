

<div class="container">
    <div class="col-md-11">
        <div class="col-md-2 column">
            <img class="img-thumbnail" alt="140x140" src="https://openclipart.org/image/2400px/svg_to_png/177482/ProfilePlaceholderSuit.png" />
        </div>
        <div class="col-md-8 column">
            <blockquote>
                <p>
                     <?php echo $data['Staff']['staff_first_name'] ; ?>
                </p> 
            </blockquote>
        </div>
        <div class="col-md-2 column">
         
                 <button class="btn btn-default btn-block" type="button">
                   <?php echo $this->HTML->link('Edit', array('controller' => 'Staff', 'action' => 'edit', $staffid));?>
                 </button>
              
        </div>
        <br>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="tabbable" id="tabs-444468">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-200304" data-toggle="tab">About</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-200304">
                         <div class="row clearfix">
                            <div class="col-md-8 column">
                                <p>
                                    <br><strong>Personal Statement</strong><br/>
                                    <?php echo $data['Staff']['staff_personal_statement'] ; ?>
                                </p>
                            </div>
                            <div class="col-md-3 column">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Staff Details
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                 First Name: 
                                            </td>
                                            <td>
                                               <?php echo $data['Staff']['staff_first_name'] ; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Last Name: 
                                            </td>
                                            <td>
                                                <?php echo $data['Staff']['staff_last_name'] ; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Location: 
                                            </td>
                                            <td>
                                                <?php echo Staff::locations($data['Staff']['staff_pref_location']) ; ?>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>
                                               Salary: 
                                            </td>
                                            <td>
                                               <?php echo $data['Staff']['staff_salary'] ; ?><br>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>
                                               Skills: 
                                            </td>
                                            <td>
                                               <?php echo Staff::skills($data['Staff']['staff_skills']); ?>
                                            </td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    <div class="col-md-11">
<h3> Currently Assigned Projects</h3>
<br><br>
<table>
<tr>
    <th>Project Name</th>
    <th>Project Type</th>
    <th>Project Location</th>
    <th>Project Skills</th>
    <th>Project Start Date</th>
    <th>Project End Date</th>
    <th>Project Budget</th>
    <th>Project Description</th>
    <th>Project Owner</th>
 </tr>
 <?php foreach($assignedprojects as $assignedprojects) : ?>
 <tr>
 
    <td><?php echo $this->HTML->link($assignedprojects['projects']['project_name'], array('controller' => 'Staff', 'action' => 'viewProject', $assignedprojects['projects']['project_id']));?></td>
    <td><?php echo $assignedprojects['projects']['project_type'];?></td>
    <td><?php echo $assignedprojects['projects']['project_location'];?></td>
    <td><?php echo $assignedprojects['projects']['project_skills'];?></td>
    <td><?php echo $assignedprojects['projects']['project_start_date'];?></td>
    <td><?php echo $assignedprojects['projects']['project_end_date'];?></td>
    <td><?php echo $assignedprojects['projects']['project_budget'];?></td>
    <td><?php echo $assignedprojects['projects']['project_description'];?></td>
    <td><?php echo $assignedprojects['projects']['project_owner_id'];?></td>
     </td>
 </tr>
<?php endforeach; ?>
<?php unset($assignedprojects); ?>
</table>
</div>
        </div>
    </div>





