<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.09126200 1381132596";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\Casopis\default.latte";i:2;i:1373116138;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\Casopis\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'fovbh68szd')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb571b7f6c2d_title')) { function _lb571b7f6c2d_title($_l, $_args) { extract($_args)
;echo Nette\Templating\Helpers::escapeHtml($journal->title, ENT_NOQUOTES) ?>&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($journal->year, ENT_NOQUOTES) ?>
-<?php echo Nette\Templating\Helpers::escapeHtml($journal->volume, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcb61e69abd_content')) { function _lbcb61e69abd_content($_l, $_args) { extract($_args)
?><div id="mainpage">
	<h2>Aktuální číslo &#8211; <?php echo Nette\Templating\Helpers::escapeHtml($journal->title, ENT_NOQUOTES) ?>
&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($journal->volume, ENT_NOQUOTES) ?>
&nbsp;(<?php echo Nette\Templating\Helpers::escapeHtml($journal->year, ENT_NOQUOTES) ?>)</h2>

<?php $countArticles = 0 ;$countDiscussions = 0 ;$countReviews = 0 ;$iterations = 0; foreach ($articles as $count): ?>
		<?php if ($count->name == 'Article'): ?> <?php $countArticles = $countArticles + 1 ?>
 <?php endif ?>

		<?php if ($count->name == 'Discussion'): ?> <?php $countDiscussions = $countDiscussions + 1 ?>
 <?php endif ?>

		<?php if ($count->name == 'Book Review'): ?> <?php $countReviews = $countReviews + 1 ?>
 <?php endif ?>

<?php $iterations++; endforeach ?>

	<table>
<?php $compareName = 'firstItem' ;$iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($articles) as $article): ?>
	<tr><td colspan="3"><h3><?php if ($compareName != $article->name): ?>

	 							<?php if ($article->name == 'Article' and $countArticles == 1): ?> <?php echo Nette\Templating\Helpers::escapeHtml($article->name, ENT_NOQUOTES) ?>
 <?php endif ?>

								<?php if ($article->name == 'Discussion' and $countDiscussions == 1): ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($article->name, ENT_NOQUOTES) ?>
 <?php endif ?>

								<?php if ($article->name == 'Book Review' and $countReviews == 1): ?> <?php echo Nette\Templating\Helpers::escapeHtml($article->name, ENT_NOQUOTES) ?>
 <?php else: ?> <?php echo Nette\Templating\Helpers::escapeHtml($article->names, ENT_NOQUOTES) ?>
 <?php endif ?>

<?php $compareName = $article->name ?>
	 						<?php endif ?></h3></td></tr>
	<tr<?php if ($_l->tmp = array_filter(array($iterator->isOdd() ? 'odd' : 'even'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><td rowspan="2"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/right-arrow.png" height="36px" width="32px" /></td><td><?php echo Nette\Templating\Helpers::escapeHtml($article->author, ENT_NOQUOTES) ?></td>
		<td rowspan="2"><a href="<?php echo htmlSpecialChars($basePath) ?>/issue/<?php echo htmlSpecialChars($article->file) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/pdf-icon.png" width="30px" height="32px" /></a></td></tr>
	<tr<?php if ($_l->tmp = array_filter(array($iterator->isOdd() ? 'odd' : 'even'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><td title="<?php echo htmlSpecialChars($article->abstract) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?></td></tr>	
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>

</div>	<!-- /mainpage -->


<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbb88e1c93a5_scripts')) { function _lbb88e1c93a5_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>
<script src="http://jush.sourceforge.net/jush.js"></script>
<script>
	jush.create_links = false;
	jush.highlight_tag('code');
	$('code.jush').each(function(){ $(this).html($(this).html().replace(/\x7B[/$\w].*?\}/g, '<span class="jush-latte">$&</span>')) });

	$('a[href^=#]').click(function(){
		$('html,body').animate({ scrollTop: $($(this).attr('href')).show().offset().top - 5 }, 'fast');
		return false;
	});
</script>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>


