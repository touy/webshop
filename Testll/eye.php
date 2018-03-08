<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
  <div class="text-center">           
      <div class="col-lg-6">
        <h2>Password show / hide click</h2> 
        <div class="input-group">
          <input type="password" class="form-control pwd" value="iamapassword">
          <span class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>          
        </div>
      </div>
  </div>  
</div>

<script>
    $(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
</script>