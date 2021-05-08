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
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/main")?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/main")?>">Subscribers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="#">Donatiors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-font text-white" href="<?=site_url("/admin/sponsers")?>">Sponsers</a>
      </li>
    </ul>
    <span class="navbar-text">
    <a class="nav-link nav-font text-white" href="#">Logout</a>
    </span>
  </div>
</nav>

<div class="container" style="cursor:pointer;" >
  <h2>Subscribers Data</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th>no.</th>
        <th>email</th>
        <th>status</th>
        <th>Creation Date</th>
      </tr>
    </thead>
    <tbody>
    <?php $count=1?>
      <?php foreach($subscribersData as $data): ?>
      <tr>
      <td><?=$count++;?></td>  
        <td><?=$data['email']?></td>
        <td><?=$data['status']?></td>
        <td><?=$data['created_at']?></td>
      </tr>
      <?php endforeach; ?>
      
    </tbody>
  </table>
</div>



</body>

</html>