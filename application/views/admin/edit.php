<div class="block">
	<div class="page-header">
      <h2>编辑</h2>
  </div>
  <?php echo validation_errors();
  $attributes = array('role' => 'form');
  echo form_open('admin/edit',$attributes) ?>

  <input type="hidden" name="id" value="<?php echo $blog_item['id'];?>"/>

  <div class="form-group">
	  <label for="title">标题</label> 
	  <input name="title" type="text" class="form-control" value="<?php echo $blog_item['title'];?>">
  </div>

  <div class="form-group">
	  <label for="body">内容</label>
	  <textarea name="body" class="form-control" rows="18"><?php echo htmlspecialchars($blog_item['body'])?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">提交</button>
</div>