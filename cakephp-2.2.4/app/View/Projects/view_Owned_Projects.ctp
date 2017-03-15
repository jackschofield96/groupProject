<head>
<?php 
echo $this->Html->css('table') ; 
echo $this->Html->script('tablejs') ; ?>
</head>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for type..">
<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for location..">
<br><br>




<h1> Currently Managed Projects</h1>

<table id="myTable">
<tr>
    <th>Project Name</th>
    <th>Project Type</th>
    <th>Project Location</th>
    <th>Project Skills</th>
    <th>Project Start Date</th>
    <th>Project End Date</th>
    <th>Project Budget</th>
    <th>Project Description</th>
    <th>Edit</th>
 </tr>
 <?php foreach($ownedprojects as $ownedprojects) : ?>
 <tr>
    <td><?php echo $this->HTML->link($ownedprojects['Project']['project_name'], array('controller' => 'Projects', 'action' => 'view', $ownedprojects['Project']['project_id']));?></td>
    <td><?php echo Project::type($ownedprojects['Project']['project_type']);?></td>
    <td><?php echo Project::location($ownedprojects['Project']['project_location']);?></td>
    <td><?php echo Project::skills($ownedprojects['Project']['project_skills']);?></td>
    <td><?php echo $ownedprojects['Project']['project_start_date'];?></td>
    <td><?php echo $ownedprojects['Project']['project_end_date'];?></td>
    <td><?php echo $ownedprojects['Project']['project_budget'];?></td>
    <td><?php echo $ownedprojects['Project']['project_description'];?></td>
    <td><?php echo $this->HTML->link('Edit', array('controller' => 'Projects', 'action' => 'edit', $ownedprojects['Project']['project_id']));?></td>
 </tr>
<?php endforeach; ?>
<?php unset($ownedprojects); ?>
</table>
