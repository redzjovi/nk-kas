<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <div class="account-info">
    <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID Barang</th>
                                  <th><i class="fa fa-bullhorn"></i> Nama Barang</th>
                                  <th ><i class="fa fa-question-circle"></i> Jumlah </th>
                                  <th><i class="fa fa-bookmark"></i> Harga</th>
                                  </tr>
                                  <tr>
         <td><?php echo $user->id_user; ?></td>
         <td><?php echo $user->username; ?></td>
         <td><?php echo $user->password; ?></td>
         <td><?php echo $user->level; ?></td></tr>
    </div>
</div>
</body>
</html>