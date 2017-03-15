<head>
<?php 
echo $this->Html->css('table') ; 
echo $this->Html->script('tablejs') ; ?>
</head>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for type..">
<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for location..">
<br><br>

<table id="myTable">

<tr>
    <th>Name</th>
    <th>Type</th>
    <th>Location</th>
    <th>Date Started</th>
    <th>Date Ended</th>
    <th>Budget</th>
    <th>Expenditure</th>
    <th>Archives Description</th>
 </tr>
 <?php foreach($Archives as $Archives) : ?>
 <tr>
     <td><?php echo $Archives['Archive']['archive_name'];?></td>
    <td><?php echo Archive::type($Archives['Archive']['archive_type']);?></td>
    <td><?php echo Archive::location($Archives['Archive']['archive_location']);?></td>
    <td><?php echo $Archives['Archive']['archive_start_date'];?></td>
    <td><?php echo $Archives['Archive']['archive_end_date'];?></td>
    <td><?php echo $Archives['Archive']['archive_budget'];?></td>
    <td><?php echo $Archives['Archive']['archive_expenditure'];?></td>
    <td><?php echo $Archives['Archive']['archive_description'];?></td>
    
 </tr>
<?php endforeach; ?>
<?php unset($Archives); ?>
</table>