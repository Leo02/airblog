<div class="block">
	<h3>所有日志</h3>
	<ul> 
	<?php foreach ($blog as $blog_item): ?>
		<li>
			<?php
			if(isset($user)){
				echo '<a style="color:#DE4C1C" href="admin/' .$blog_item['id']. '">编辑</a> ';
			}
			?>
			<a href="archives/<?php echo $blog_item['id'] ?>"><?php echo $blog_item['title'] ?></a>
		</li>
	<?php endforeach ?>
</ul>
</div>