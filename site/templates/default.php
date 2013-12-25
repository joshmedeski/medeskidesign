<?php snippet('header') ?>
<?php snippet('top-bar') ?>

<header class="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php echo html($page->title()) ?></h1>
			<h4><?php echo html($page->subtitle()) ?></h4>
		</div>
	</div>
</header>
	
<article class="row">
	<div class="small-12 columns">
  	<?php echo kirbytext($page->text()) ?>
	</div>
</article>

<?php snippet('footer') ?>