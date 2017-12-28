<?php include("header.php"); ?>


<table border="2px">
  <thead>
      <tr>
      <th>ID</th>
      <th>USER Name</th>
      <th>Email</th> 
      <th>Image</th>
      <th>Delete</th>
      
    </tr>
  </thead>
  <?php foreach ($data as $user):  ?>
  <tbody>
    <tr>
    <td><?= $user['Id']?></td>
    <td><?= $user['user_name']?></td>
    <td><?= $user['email']?></td>
    <td><?= '<img src="'.base_url('assets/images/').$user['user_image'].'" width="30" height="30"';?></td>
    <td><?=anchor('admin/delete/'.$user['Id'],'Delete',['class'=>'btn btn-default']);?></td> 
  </tr>
  </tbody>
  <?php endforeach;?>
</table>
<?php include("footer.php"); ?>
