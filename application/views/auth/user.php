<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name </th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>

  <tbody>
<?php
if(count($users)) {
$cnt=1;
foreach ($users as $row){
?>
<tr>
<td><?php echo ($cnt);?></td>
<td><?php echo ($row->firstname)?></td>
<td><?php echo ($row->lastname)?></td>
<td><?php echo ($row->email)?></td>
<td><?php echo ($row->password)?></td>
<td><?php echo ($row->number)?></td>
<td><?php echo ($row->address)?></td>

</tr>
<?php
$cnt++;
} // end foreach
} else { ?>
<tr>
<td>No Record found</td>
</tr>
<?php
}
?>
</tbody>
</table>

