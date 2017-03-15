<head> 
<?php 
echo $this->Html->css('progress') ; 
echo $this->Html->css('table') ;
echo $this->Html->script('tablejs2') ;
 
?> </head>
<div align="right">
<div class="container">
    <div class="row">                   
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
            </div>
            <span class="progress-type">UML</span>
            <span class="progress-completed">60%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
            <span class="progress-type">HTML</span>
            <span class="progress-completed">40%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete (info)</span>
            </div>
            <span class="progress-type">PHP</span>
            <span class="progress-completed">20%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
            </div>
            <span class="progress-type">JavaScript / jQuery</span>
            <span class="progress-completed">60%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span>
            </div>
            <span class="progress-type">CSS</span>
            <span class="progress-completed">80%</span>
        </div>
</div>

<div align ="left">

<label> Project Title : </label>
<?php 
echo $project['Project']['project_name'] ; 
?>
<br><br>
<label> Project Type : </label>
<?php 
echo Project::type($project['Project']['project_type']);
?>
<br><br><label> Project Location : </label>
<?php 
echo Project::location($project['Project']['project_location']);
?>
<br><br><label> Project Skills  : </label>
<?php 
echo Project::skills($project['Project']['project_skills']);
?>
<br><br><label> Project Start Date : </label>
<?php 
echo $project['Project']['project_start_date'];
?>
<br><br><label> Project End Date : </label>
<?php 
echo $project['Project']['project_end_date'];
?>
<br>
<br><label> Project Budget : </label>
<?php 
echo $project['Project']['project_budget'];
?>
<br><br><label> Project Description : </label>
<?php 
echo $project['Project']['project_description'];
?>
<br><br><label> Project Owner : </label>
<?php 
echo $project['Project']['project_owner_id'];
?>
<br> <br> <br>
</div>
<div id="div" align="left">
<label> Assigned Staff </label>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for type..">
<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for location..">
<br><br>
<table id="myTable">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Preferred Location</th>
    <th>Skills</th>
    <th>Type</th>
    <th>Salary</th>
 </tr>
 <?php foreach($staff as $staff) : ?>
 <tr>
    <td><?php echo $this->HTML->link($staff['staff']['staff_first_name'], array('controller' => 'staff', 'action' => 'view', $staff['staff']['staff_id']));?></td>
    <td><?php echo $staff['staff']['staff_last_name'];?></td>
    <td><?php echo Staff::locations($staff['staff']['staff_pref_location']);?></td>
    <td><?php echo Staff::skills($staff['staff']['staff_skills']);?></td>
    <td><?php echo Staff::type($staff['staff']['staff_type']);?></td>
    <td><?php echo $staff['staff']['staff_salary'];?></td>
 </tr>
<?php endforeach; ?>
<?php unset($staff); ?>
</table>
</div>
