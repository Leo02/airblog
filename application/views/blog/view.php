<?php
spl_autoload_register(function($class){
    require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});
use \Michelf\Markdown;
?>

<div class="block">
    <div class="page-header">
        <h2><?php echo $blog_item['title'] ?></h2>
        <small>发布于 <?php echo $blog_item['time'] . '. </small>';
            if(isset($user)){echo '<a style="color:#DE4C1C" href="/admin/' .$blog_item['id']. '">编辑</a>';}?>
    </div>
    <?php echo Markdown::defaultTransform($blog_item['body'])?>
</div>

<div class="block">
    <div class="ds-thread" data-thread-key="<?php echo $blog_item['id'] ?>" data-title="<?php echo $blog_item['title'] ?>" ></div>
    <script type="text/javascript">
        var duoshuoQuery = {short_name:"faceair"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = 'http://static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0]
                || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
    </script>
</div>