 <?php

/* use App\Core\Session;
$arrErrors=[];
if(Session::keyExist("errors")){
    $arrErrors=Session::getSession("errors");
    Session::removeKey("errors");
} */
?> 
  <div class="container" >
  <form method="post" action="<?=WEBROOT."security/seConnecter"?>">
  <?php if(isset($arrErrors['connexion'])): ?>
    <div class="alert alert-danger" role="alert">
       <strong> <?=$arrErrors['connexion']?></strong>
    </div>
   <?php endif ?>
  <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <?php if(isset($arrErrors['login'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['login']?></small>
        <?php endif ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
        <?php if(isset($arrErrors['password'])): ?>
          <small id="emailHelp"  class="form-text text-danger"><?=$arrErrors['password']?></small>
        <?php endif ?>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  

 