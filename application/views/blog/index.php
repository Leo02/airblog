<div class="block">
	<h3 class="list">所有日志</h3>
	<ul class="list-unstyled"> 
	<? foreach ($blog as $blog_item): ?>
		<li>
			<table border="0" width="100%">
				<td width="70%"><div align='left'>
					<?
					if(isset($user)){
						echo '<a style="color:#DE4C1C" href="admin/' .$blog_item['id']. '">编辑</a> ';
					}
					$date = date(DATE_RFC1123,strtotime(substr($blog_item['time'],0,11)));
					$date = substr($date,0,strlen($date)-14);
					?>

					<a href="archives/<?php echo $blog_item['id'] ?>"><?php echo $blog_item['title'] ?></a>
				</div></td> 
				<td width="30%"><div align='right' class="date"><? echo $date; ?></div></td>
			</table>
		</li>
	<?php endforeach ?>
</ul>
</div>