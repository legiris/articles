<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.66504800 1381132586";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\@layout.latte";i:2;i:1373118465;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: E:\xampp\htdocs\web\danube-new\sandbox\app\FrontModule\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd1kael5oh3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbf4b7748bf9_head')) { function _lbf4b7748bf9_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbefcc4893b0_scripts')) { function _lbefcc4893b0_scripts($_l, $_args) { extract($_args)
?>	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="Danube: Law and Economics Review" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
	<meta name="keywords" content="danube, economic reviews, eaco, European Association Comenius" />

	<title>Danube: <?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'title', $template->getParameters()) ?></title>
	<!-- <title>Danube: Law and Economics Review</title>-->

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" />
	<link rel="stylesheet" media="all" href="<?php echo htmlSpecialChars($basePath) ?>/css/main.css" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
	<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
<div id="wrapper">
	<script> document.body.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>


<div id="header">
<h1 title="Danube: Law and Economics Review"><a href="<?php echo htmlSpecialChars($basePath) ?>/">Danube: Law and Economics Review</a></h1>
</div>	<!-- /header -->

<!-- TODO route /casopis/2013-1/ -->
<div id="sidebar">
	<h4>Přehled čísel</h4>
	 <div id="rightmenu">
		<ul>
<?php $iterations = 0; foreach ($issues as $issue): ?>
			<li><a href="<?php echo htmlSpecialChars($basePath) ?>/casopis/<?php echo htmlSpecialChars($issue->year) ?>
-<?php echo htmlSpecialChars($issue->volume) ?>/"><?php echo Nette\Templating\Helpers::escapeHtml($issue->journal, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; endforeach ?>
		</ul>
		<ul>
			<li><a href="<?php echo htmlSpecialChars($basePath) ?>/archiv">Archiv</a></li>
		</ul>
		<ul>
			<li><a href="<?php echo htmlSpecialChars($basePath) ?>/clanky-ke-stazeni">Přehled všech článků</a></li>
		</ul>
		<p><strong>Danube: Law and Economics Review</strong> je časopis, který navazuje na tradici původního časopisu pod názvem
		DUNAJ, jehož zveřejnění bylo násilně přerušeno během druhé světové války.<br />
		 Časopis je vydáván čtvrtletně pod záštitou Evropské asociace Komenského (<a href="http://www.eaco.eu/">EACO</a>).
		</p>
	 </div>	
		
</div>	<!-- /left sidebar -->

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>


<div id="footer">
<p>2013&nbsp;&copy;&nbsp;<a href="http://www.sovaplus.cz/" title="sovaplus.cz">sovaplus.cz</a></p>
</div>

</div>	<!-- /wrapper -->
	
</body>
</html>
