<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>View user</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>user name</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
        ini_set('display_errors','1');
        include ("dbconnect.php");
        $select="SELECT * FROM useraccount";
        $exe=mysqli_query($connet ,$select);
       
       while( $row_user= mysqli_fetch_array($exe)){
        $user_id=$row_user['id'];
        $user_name=$row_user['username'];
        $user_mail=$row_user['email'];
        ?>
      <tr>
        <td><?php echo $user_id ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo $user_mail ?></td>
        <td><a href="view.php?del= <?php  echo $user_id ?> ">Delete</a> </td>
        
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<?php
 include ("dbconnect.php");
 if(isset($_GET['del'])){
 $del_id=$_GET['del'];
 $delete="DELETE FROM useraccount WHERE id='$del_id' ";
 $excute=mysqli_query($connet ,$delete);
 if($excute=== true){
  echo "deleted";
 }
 else{
  echo "error";
 }
 }
?>
</body>
</html>
