<?php if($msg!="")
    echo '<div class="alert alert-danger" role="alert">'.$msg.'</div>'
?>
<div class="container jumbotron">
<form action="<?php echo base_url();?>Login/register_user" method="post">
    
    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
    <a  class="btn btn-outline-primary" href="<?php echo base_url();?>Login">If Already Member Login</a>
</form>
    </div>