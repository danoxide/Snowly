<?php theme_include('partial/header'); ?>

<?php if(article_custom_field('article_image')): ?>
<div class="img-splash" style="background-image:url('<?php echo article_custom_field('article_image'); ?>')"></div>
<?php endif; ?>

<main class="container">
	<article id="article-<?php echo article_id(); ?>">
		<header>
			<h1><?php echo article_title(); ?></h1>
			<div class="meta">
					<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('d-m-Y H:i', article_time()); ?></time>, <?php echo article_author(); ?>
				</div>
		</header>

		<?php echo article_markdown(); ?>
	</article>

	<?php if(has_comments()): ?>
	<section id="comments">
		<h2><?php echo total_comments(article_id()); ?> comments</h2>
		<ul class="commentlist">
			<?php $i = 0; while(comments()): $i++; ?>
			<li>
				<header>
					<h2 data-id="<?php echo $i; ?>"><?php echo comment_name(); ?></h2>
					<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('d-m-Y H:i', article_time()); ?></time>
				</header>

				<p><?php echo comment_text(); ?></p>
			</li>
			<?php endwhile; ?>
		</ul>
	</section>
	<?php endif; ?>

	<?php if(comments_open()): ?>
	<form id="comment" class="form-horizontal" role="form" method="post" action="<?php echo comment_form_url(); ?>#comment">
		<?php echo comment_form_notifications(); ?>

		<?php echo comment_form_input_name('placeholder="Your name" class="form-control"'); ?>
		<?php echo comment_form_input_email('placeholder="Your email (won’t be published)" class="form-control"'); ?>
		<?php echo comment_form_input_text('placeholder="Your comment" class="form-control"'); ?>
		<button class="btn btn-default">Post Comment</button>
	</form>
	<?php endif; ?>
</main>

<?php theme_include('partial/footer'); ?>