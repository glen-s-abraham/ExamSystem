<?php if($msg!="")
    echo '<div class="alert alert-danger" role="alert">Invalid user</div>'
?>
<div class="container jumbotron">
<form action="<?php echo base_url();?>Login/login_check" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
    <a  class="btn btn-outline-primary" href="<?php echo base_url();?>Login/register">Register If Not A Member</a>
</form>
    </div>