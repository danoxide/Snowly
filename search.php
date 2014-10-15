<?php theme_include('partial/header'); ?>

<main class="container">
	<article>
		<?php if(has_search_results()): ?>
		<header>
			<h1>Results for <b>&ldquo;<?php echo search_term(); ?>&rdquo;</b></h1>
		</header>

		<ul class="list-unstyled">
			<?php $i = 0; while(search_results()): $i++; ?>
			<li>
				<h2>
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
						<?php echo article_title(); ?>
					</a>
				</h2>
			</li>
			<?php endwhile; ?>
		</ul>
	</article>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

	<?php else: ?>
		<article>
			<header>
				<h1>Sorry...</h1>
			</header>

			<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
		</article>
	<?php endif; ?>
</main>

<?php theme_include('partial/footer'); ?>