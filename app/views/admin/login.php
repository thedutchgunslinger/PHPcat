<!DOCTYPE html>
<?php load::view("admin::template::head") ?>
<?=(isset($error)) ? $error : ""?>
<form method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<?php load::view("admin::template::foot") ?>
