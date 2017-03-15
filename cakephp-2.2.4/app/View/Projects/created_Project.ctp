<h1> Created Project</h1>
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
 </tr>
 <tr>
    <td><?php echo $Project['Project']['project_name'];?></td>
    <td><?php echo Project::type($Project['Project']['project_type']);?></td>
    <td><?php echo Project::location($Project['Project']['project_location']);?></td>
    <td><?php echo Project::skills($Project['Project']['project_skills']);?></td>
    <td><?php $date_string = date('Y-m-d', mktime($Project['Project']['project_start_date']['year'], $Project['Project']['project_start_date']['month'], $Project['Project']['project_start_date']['day']));;
    echo $date_string?></td>
    <td><?php $date_string = date('Y-m-d', mktime($Project['Project']['project_end_date']['year'], $Project['Project']['project_end_date']['month'], $Project['Project']['project_end_date']['day']));;
    echo $date_string?></td>
    <td><?php echo $Project['Project']['project_budget'];?></td>
    <td><?php echo $Project['Project']['project_description'];?></td>
 </tr>
</table>