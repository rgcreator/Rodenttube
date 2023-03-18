<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="nl-NL" dir="ltr">
	<head>
		<title>Zoeken - Nieuw project</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evo 2023.1.3 - www.websitex5.com" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2023-1-3-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2023-1-3-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2023-1-3-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2023-1-3-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?2023-1-3-0-638147349264944233" media="screen,print" />
		<script src="res/jquery.js?2023-1-3-0"></script>
		<script src="res/x5engine.js?2023-1-3-0" data-files-version="2023-1-3-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Uw browser ondersteunt de functies niet die nodig zijn om deze website weer te geven.','Uw browser ondersteunt mogelijk de functies niet die nodig zijn om deze website weer te geven.','[1]Werk uw browser bij[/1] of [2]ga verder zonder bij te werken[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Zoeken - Nieuw project</h1>
						<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectTitle_02"><span id ="imHeader_imObjectTitle_02_text" >Rodenttube</span></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Sla het hoofdmenu over">Ga naar de inhoud</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h2 id="imPgTitle">Zoekresultaten</h2>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search'], ENT_COMPAT) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Herlees deze pagina">Terug naar de inhoud</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Schakel JavaScript in om deze website te kunnen gebruiken.</div></noscript>
	</body>
</html>
