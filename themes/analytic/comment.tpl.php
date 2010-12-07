<?php
// $Id: comment.tpl.php,v 1.1.2.2 2010/05/17 16:44:34 troy Exp $
?>

<div class="clear-block comment<?php if ($comment->status == COMMENT_NOT_PUBLISHED) print ' comment-unpublished'; ?>">
<?php if ($picture) { print $picture; } ?>
<span class="submitted"><?php print $submitted; ?></span>&nbsp;<span class="this-link 	 <?php if ($new != '') { ?>new <?php } ?>"><?php echo "<a href=\"$node_url#comment-$comment->cid\">#</a>"; ?></span>

<?php if ($title): ?>
    <h3><?php print $title ;?></h3>
    <?php endif; ?>

<div class="content"><?php print $content; ?></div>
<div class="links-comment "><?php print $links; ?></div> &nbsp;</div>
