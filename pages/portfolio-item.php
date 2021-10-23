<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>
	<div id="primary" class="content-area column two-thirds single-portfolio">
		<main id="main" class="site-main">
		
			<article class="portfolio hentry">
				<header class="entry-header">
					<div class="entry-thumbnail">
						<img width="800" height="533" src="https://via.placeholder.com/128" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/>
					</div>
					<h1 class="entry-title">Sunset Beach</h1>
					<a class='portfoliotype' href='portfolio-category.html'>summer</a>
					<a class='portfoliotype' href='portfolio-category.html'>woman</a>
					<a class='portfoliotype' href='portfolio-category.html'>yellow</a>
				</header>
				<div class="entry-content">
					<p>
						Beautiful young woman in a green dress with curly long hair.
					</p>
					<p>
						There was no possibility of taking a walk that day. We had been wandering, indeed, in the leafless shrubbery an hour in the morning.
					</p>
					<blockquote>
						<p>
							I was glad of it: I never liked long walks, especially on chilly afternoons: dreadful to me was the coming home in the raw twilight, with nipped fingers and toes, and a heart saddened by the chidings of Bessie, the nurse, and humbled by the consciousness of my physical inferiority to Eliza, John, and Georgiana Reed.
						</p>
					</blockquote>
					<p>
						The said Eliza, John, and Georgiana were now clustered round their mama in the drawing-room: she lay reclined on a sofa by the fireside, and with her darlings about her (for the time neither quarrelling nor crying) looked perfectly happy.
					</p>
				</div>
			</article>
			
			<nav class="navigation post-navigation" role="navigation">
				<h1 class="screen-reader-text">Post navigation</h1>
				<div class="nav-links">
					<div class="nav-previous">
						<a href="#" rel="prev"> <span class="meta-nav">←</span> Eliza and John</a>
					</div>
					<div class="nav-next">
						<a href="#" rel="next">Sunset Beach <span class="meta-nav">→</span></a>
					</div>		
				</div>
			</nav>
			<!-- .navigation -->
		
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	
	<div id="secondary" class="column third">
		<div class="widget-area">
			<aside class="widget">
				<h4 class="widget-title">Request similar project</h4>
				<form class="wpcf7" method="post" action="contact.php" id="contactform">
					<div class="form">
						<p><input type="text" name="name" placeholder="Name *"></p>
						<p><input type="text" name="email" placeholder="E-mail Address *"></p>
						<p><textarea name="comment" rows="3" placeholder="Message *"></textarea></p>
						<input type="submit" id="submit" class="clearfix btn" value="Send">
					</div>
				</form>
				<div class="done">								
					Your message has been sent. Thank you!
				</div>
			</aside>
		</div>
	</div>
	<script src='<?=SITE_TEMPLATE_PATH?>/js/validate.js'></script>
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');?>