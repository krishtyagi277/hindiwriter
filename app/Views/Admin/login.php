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
  <script>
    localStorage.setItem('auth',JSON.stringify(null));
  </script>
  
</head>
<style>
 body{
  background: #E8D426 !important;
  font-family: 'Muli', sans-serif;
  
}
h1{
  color: #fff;
  padding-bottom: 2rem;
  font-weight: bold;
}
a{
  color: #333;
}
a:hover{
  color: #E8D426;
  text-decoration: none;
}
.form-control:focus {

    color: #000;
    background-color: #fff;
    border:2px solid #E8D426;
    outline: 0;
    box-shadow: none;

}

.btn{
  background: #E8D426;
  border: #E8D426;
}
.btn:hover {
  background: #E8D426;
  border: #E8D426;
}
.logo-login{
      width: 400px;
  }
@media only screen and (max-width: 600px) {
  .logo-login{
      width:200px;
  }
}
</style>

<body style="background:whitesmoke;">

<div class="pt-5">
  <h1 class="text-center">
    <img src="<?=site_url("/img/HWG-LOGO-21.png") ?>" class="img-fluid logo-login" alt="Brand" >
  </h1>
  
<div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                                                    
                            <form id="submitForm" action="<?=site_url("/admin/dologin")?>" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true"  _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username">Username / Email</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username"  name="email" required>
                                </div>                    
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password 
                                        <!-- <a class="ml-auto border-link small-xl" href="/forget-password">Forget?</a> -->
                                        </label>
                                    <input type="password" class="form-control"  id="password" name="password"  required>
                                </div>
                               
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                </div>
                            </form>
                            <!-- <p class="small-xl pt-3 text-center">
                                <span class="text-muted">Not a member?</span>
                                <a href="/signup">Sign up</a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
</div>



</body>

</html>