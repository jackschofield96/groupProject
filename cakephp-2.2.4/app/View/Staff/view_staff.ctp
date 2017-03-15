<head>
<?php 
echo $this->Html->css('table') ; 
echo $this->Html->script('tablejs2') ; ?>
</head>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for skills..">
<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for location..">
<br><br>

<h1> All Staff</h1>


<table id="myTable">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Preferred Location</th>
    <th>Skills</th>
    <th>Type</th>
    <th>Salary</th>
  <!--  <th>Edit</th> -->
 </tr>
 <?php foreach($Staff as $Staff) : ?>
 <tr>
    <td><?php echo $this->HTML->link($Staff['Staff']['staff_first_name'], array('controller' => 'Staff', 'action' => 'view', $Staff['Staff']['staff_id']));?></td>
    <td><?php echo $Staff['Staff']['staff_last_name'];?></td>
    <td><?php echo Staff::locations($Staff['Staff']['staff_pref_location']);?></td>
    <td><?php echo Staff::skills($Staff['Staff']['staff_skills']);?></td>
    <td><?php echo Staff::type($Staff['Staff']['staff_type']);?></td>
    <td><?php echo $Staff['Staff']['staff_salary'];?></td>
  <!--  <td><?php echo $this->HTML->link('Edit', array('controller' => 'Staff', 'action' => 'edit', $Staff['Staff']['staff_id']));?></td> -->
 </tr>
<?php endforeach; ?>
<?php unset($Staff); ?>
</table>
