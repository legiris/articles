<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.69537700 1381132617";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\Archiv\default.latte";i:2;i:1373048390;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\Archiv\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'v60ecyc058')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb0e7cb4b441_title')) { function _lb0e7cb4b441_title($_l, $_args) { extract($_args)
?>Archiv čísel<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb2821cd5ff_content')) { function _lbb2821cd5ff_content($_l, $_args) { extract($_args)
?><div id="mainpage">

<div id="top-bar">
<?php $iterations = 0; foreach ($years as $journal): if ($activeYear == $journal->year): ?>
		<a href="<?php echo htmlSpecialChars($basePath) ?>/archiv/<?php echo htmlSpecialChars($journal->year) ?>" id="archiv-main-active">
<?php else: ?>
		<a href="<?php echo htmlSpecialChars($basePath) ?>/archiv/<?php echo htmlSpecialChars($journal->year) ?>" id="archiv-main-pasive">
<?php endif ?>
	<?php echo Nette\Templating\Helpers::escapeHtml($journal->year, ENT_NOQUOTES) ?></a>
<?php $iterations++; endforeach ?>
</div>	<!-- /top-bar -->	

<table>
<?php $firstItem = 'xxx' ;$iterations = 0; foreach ($articles as $article): $journalTitle = $article->journalTitle . $article->volume . $article->year ?>
	<?php if ($firstItem != $journalTitle): ?> <tr><td colspan="3"><h1 class="master">
		<a href="<?php echo htmlSpecialChars($basePath) ?>/casopis/<?php echo htmlSpecialChars($article->year) ?>
-<?php echo htmlSpecialChars($article->volume) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($article->journalTitle, ENT_NOQUOTES) ?>
:&nbsp;<?php echo Nette\Templating\Helpers::escapeHtml($article->volume, ENT_NOQUOTES) ?>
/<?php echo Nette\Templating\Helpers::escapeHtml($article->year, ENT_NOQUOTES) ?></a></h1></td></tr>
<?php $firstItem = $journalTitle ;endif ?>
	<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($article->articleTitle, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($article->author, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($article->name, ENT_NOQUOTES) ?></td></tr>
<?php $iterations++; endforeach ?>
</table>

</div>	<!-- /mainpage -->


<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb89dc036fd0_scripts')) { function _lb89dc036fd0_scripts($_l, $_args) { extract($_args)
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


