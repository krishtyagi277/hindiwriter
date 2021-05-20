<!DOCTYPE html>
<html>

<head>
    <title>HWG Web Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=site_url("/css/style.css")?>" />
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
    if(JSON.parse(localStorage.getItem('auth')) == null || JSON.parse(localStorage.getItem('auth')) == ""){
        window.location.replace(`http://${window.location.hostname}/admin/login`);
    }
  </script>
  
</head>
<style>
  #brand {
    margin: 0;
    padding: 0;
    width: 180px;
}
.nav-font{
  font-size:22px;
  
}
</style>

<body style="background:whitesmoke;">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
<a href="/"><img src="<?=site_url("/img/HWG-LOGO-21.png") ?>" class="img-fluid" alt="Brand" id="brand"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/main/".$id)?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/subscribe/".$id)?>">Subscribers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/donations/".$id)?>">Donations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/sponsers/".$id)?>">Sponsers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/registerMembers/".$id)?>">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/contactUs/".$id)?>">Contact Us</a>
      </li>
    </ul>
    <span class="navbar-text">
    <a class="nav-link nav-font text-white" href="<?=site_url("/admin/logout")?>">Logout</a>
    </span>
  </div>
</nav>

<div class="container-fluid" style="cursor:pointer;" >
  <h2 style="text-align:center;">Contact Us Data</h2>
  <table  id="example" class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
        <th>Creation Date</th>
      </tr>
    </thead>
    <tbody>
        <?php $count=1?>
      <?php for ($index = 0; $index < count($contactUsData); $index++) {?>
      <tr>
      <td><?=$count++;?></td>  
      <td><?=$contactUsData[$index]['name']?></td>
      <td><?=$contactUsData[$index]['email']?></td>
      <td><?=$contactUsData[$index]['contactnumber']?></td>
      <td><?=$contactUsData[$index]['subject']?></td>
      <td>
      <a class="btn btn-primary" data-toggle="collapse" href="<?php echo "#multiCollapseExample1-".$index;?>" role="button" aria-expanded="false" aria-controls="<?php echo "multiCollapseExample1-".$index;?>">Message</a>
      <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="<?php echo "multiCollapseExample1-".$index;?>">
      <div class="card card-body">
      <?=$contactUsData[$index]['message']?>
      </div>
    </div>
  </div>
 </div> 
    </td>
       <td>
       <?php
         if($contactUsData[$index]['status']=='success')
         echo "<p style='color:green; font-weight:600;'>Success</p>";
         else if($contactUsData[$index]['status']=='cancel')
         echo "<p style='color:orange; font-weight:600;'>Cancel</p>";
         else 
         echo "<p style='color:red; font-weight:600;'>Fail</p>";
        ?>
       </td>
        <td><?=$contactUsData[$index]['created_at']?></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>

</html>