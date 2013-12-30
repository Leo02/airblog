<div class="block">
  <div class="page-header">
      <h2>登陆</h2>
  </div>
  <?php echo validation_errors();
  $attributes = array('role' => 'form');
  echo form_open('admin/',$attributes) ?>
    <div class="form-group">
      <label for="user">用户名</label>
      <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">登陆</button>
  </form>
</div>