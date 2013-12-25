<?php snippet('header') ?>
<?php snippet('top-bar') ?>

<header class="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1>Case Studies</h1>
			<h4>Take a look behind the scenes</h4>
		</div>
	</div>
</header>
	
<article class="row">
	<div class="large-10 push-2 columns">
			<h2><?php echo html($page->title()) ?></h2>
			<h5 class="subheader"><?php echo html($page->subtitle()) ?></h5>
  		<?php echo kirbytext($page->text()) ?>
	</div>
	<div class="large-2 pull-10 columns">
		<?php snippet('side-nav') ?>
	</div>

</article>

<?php snippet('footer') ?>