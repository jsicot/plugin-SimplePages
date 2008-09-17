<?php head(array('title' => $page['title'], 'body_class' => 'simple-pages-plugin')); ?>
<div id="primary">
    <?php if ($page['is_published']): ?>
    <div id="simple_pages_page">
    <?php if ($page['is_published']): ?>    
        <style type="text/css"><?php echo $page['css'] ?></style> 
        <h2><?php echo $page['title']; ?></h2>
        <?php echo eval('?>' . $page['html']); ?>
    <?php endif; ?>
    </div>
    <?php else: ?>
    <h1>This page is unavailable.</h1>
    <?php endif; ?>
</div>
<?php foot(); ?>