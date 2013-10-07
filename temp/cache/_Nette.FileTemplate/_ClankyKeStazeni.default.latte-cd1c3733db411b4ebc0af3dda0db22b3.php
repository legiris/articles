<?php //netteCache[01]000416a:2:{s:4:"time";s:21:"0.79873300 1381132628";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\ClankyKeStazeni\default.latte";i:2;i:1373048390;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\ClankyKeStazeni\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'h7mw82jkmi')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbe0e62042a8_title')) { function _lbe0e62042a8_title($_l, $_args) { extract($_args)
?>Články ke stažení<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcfad1ce0a2_content')) { function _lbcfad1ce0a2_content($_l, $_args) { extract($_args)
?><div id="mainpage">
	<h2>Články ke stažení</h2>
	<table>
	<tr><th>Typ</th><th><a href="<?php echo htmlSpecialChars($_control->link("order!", array(6, $sort))) ?>
" title="Seřadit podle jména">Autor</a> / <a href="<?php echo htmlSpecialChars($_control->link("order!", array(2, $sort))) ?>" title="Seřadit podle názvu">Název</a></th>
		<th><a href="<?php echo htmlSpecialChars($_control->link("order!", array(7, $sort))) ?>
" title="Seřadit podle kategorie">Kategorie</a></th><th><a href="<?php echo htmlSpecialChars($_control->link("order!", array(8, $sort))) ?>" title="Seřadit podle čísel časopisu">Časopis</a></th></tr>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($articles) as $article): ?>
	<tr<?php if ($_l->tmp = array_filter(array($iterator->isOdd() ? 'odd' : 'even'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
		<td rowspan="2"><a href="<?php echo htmlSpecialChars($basePath) ?>/issue/<?php echo htmlSpecialChars($article->file) ?>">
			<img src="<?php echo htmlSpecialChars($basePath) ?>/images/<?php echo htmlSpecialChars($article->suffix) ?>
.png" height="26px" width="24px" title="<?php echo htmlSpecialChars($article->suffix) ?>" /></a></td>
		<td id="download"><?php echo Nette\Templating\Helpers::escapeHtml($article->author, ENT_NOQUOTES) ?>
</td><td rowspan="2" id="download"><?php echo Nette\Templating\Helpers::escapeHtml($article->name, ENT_NOQUOTES) ?>
</td><td rowspan="2" id="download"><?php echo Nette\Templating\Helpers::escapeHtml($article->journal, ENT_NOQUOTES) ?></td></tr>
	<tr<?php if ($_l->tmp = array_filter(array($iterator->isOdd() ? 'odd' : 'even'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
>	<td title="<?php echo htmlSpecialChars($article->abstract) ?>" id="download"><?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?></td></tr>	
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>

</div>	<!-- /mainpage -->


<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb7b7f9c45b7_scripts')) { function _lb7b7f9c45b7_scripts($_l, $_args) { extract($_args)
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


