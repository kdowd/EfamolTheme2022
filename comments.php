 
<?php if ($comments): ?>
	
	<div class="comments-wrap">
		<h2 class="heading" style="text-align:left;">Reviews</h2>
	<ul>
  	<?php foreach ($comments as $comment): ?>
		<li id="comment-<?php comment_ID(); ?>">
			<?php if ($comment->comment_approved == '0'): ?>
				<p style="color:crimson">Your comment is awaiting approval</p>
			<?php endif; ?>
	 
			<?php comment_text(); ?>

			<cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?></cite>
		</li>
	<?php endforeach; ?>
	</ul>
</div>
<?php else: ?>
	<h2 class="heading" style="text-align:left;">Reviews</h2>
	<p>No comments yet.</p>
<?php endif; ?>



<?php if (comments_open()): ?>
	<h2 class="heading" style="text-align:left;">Add your comment</h2>
	<?php if (get_option('comment_registration') && !$user_ID): ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(
	get_permalink()
); ?>">logged in</a> to post a comment.</p><?php else: ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ($user_ID): ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
				<?php echo $user_identity; ?></a>. <a href="<?php echo get_option(
	'siteurl'
); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else: ?>
				<p> 
				<input placeholder="Name <?php if ($req) {
    	echo '(required)';
    } ?> " type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
</p>
				 <p>
					 <input type="hidden" name="email" id="email" value="info@efamol.co.nz" size="22" tabindex="2" />
					 <!-- <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /> -->
				<!-- <label for="email"><small>Mail (will not be published) <?php if ($req) {
    	echo '(required)';
    } ?></small></label> -->
	</p> 
			
			<?php endif; ?>
			<label for="rating">Rating</label>
	<fieldset class="comments-rating">
		<span class="rating-container">
			<?php for ($i = 5; $i >= 1; $i--): ?>
				<input type="radio" id="rating-<?php echo esc_attr($i); ?>" name="rating" value="<?php echo esc_attr(
	$i
); ?>" /><label for="rating-<?php echo esc_attr($i); ?>"><?php echo esc_html($i); ?></label>
			<?php endfor; ?>
			<!-- <input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" /><label for="rating-0">0</label> -->
		</span>
	</fieldset>
			<p><textarea placeholder="comment here...." name="comment" id="comment" cols="100%" rows="12" tabindex="4"></textarea></p>
			<p><button role="submit" class="gb-button gb-button-shape-circular gb-button-size-medium" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment">Submit Comment</button>
            <!-- <button type="submit" name="<?php echo $name; ?>">Submit</button> -->
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else: ?>
	<p>The comments are closed.</p>
<?php endif; ?>
<!-- https://code.tutsplus.com/articles/unraveling-the-secrets-of-wordpress-commentsphp-file--net-28 -->