<div class="block">
	<div class="page-header">
      <h2>写文章</h2>
  </div>
  <?php echo validation_errors();
  $attributes = array('role' => 'form');
  echo form_open('admin/create',$attributes) ?>

  <div class="form-group">
	  <label for="title">标题</label> 
	  <input name="title" type="text" class="form-control">
  </div>

  <div class="form-group">
	  <label for="body">内容</label>
	  <textarea name="body" class="form-control" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">发布</button>
</div>