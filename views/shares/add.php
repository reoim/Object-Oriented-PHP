<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
  	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  		<div class="form-group">
  			<label>Share Title</label>
  			<input type="text" name="title" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Body</label>
  			<textarea name="body" class="form-control"></textarea>
  		</div>
  		<div class="form-group">
  			<label>Link</label>
  			<input type="text" name="link" class="form-control">
  		</div>
  		<input type="submit" name="submit" class="btn btn-primary" value="Submit">
  		<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
  	</form>
  </div>
</div>