<?php

// https://www.cssigniter.com/add-rating-wordpress-comment-system/
//Create the rating interface.
add_action('comment_form_logged_in_after', 'ci_comment_rating_rating_field');
add_action('comment_form_after_fields', 'ci_comment_rating_rating_field');
function ci_comment_rating_rating_field()
{
	?>
	<label for="rating">Rating</label>
 
		<span class="rating-container">
			<?php for ($i = 5; $i >= 1; $i--): ?>
				<input type="radio" id="rating-<?php echo esc_attr($i); ?>" name="rating" value="<?php echo esc_attr(
	$i
); ?>" /><label for="rating-<?php echo esc_attr($i); ?>"><?php echo esc_html($i); ?></label>
			<?php endfor; ?>
			<input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" /><label for="rating-0">0</label>
		</span>
 
	<?php
}

//Save the rating submitted by the user.
add_action('comment_post', 'ci_comment_rating_save_comment_rating');
function ci_comment_rating_save_comment_rating($comment_id)
{
	if (isset($_POST['rating']) && '' !== $_POST['rating']) {
		$rating = intval($_POST['rating']);
	}
	add_comment_meta($comment_id, 'rating', $rating);
}

//Display the rating on a submitted comment.
add_filter('comment_text', 'ci_comment_rating_display_rating');
function ci_comment_rating_display_rating($comment_text)
{
	if ($rating = get_comment_meta(get_comment_ID(), 'rating', true)) {
		$stars = '<p class="stars">';
		for ($i = 1; $i <= $rating; $i++) {
			$stars .=
				'<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path fill="#ffaa00" fill-rule="nonzero" d="M15 23.65l-7.07 3.597A1 1 0 0 1 6.489 26.2l1.235-7.836-5.605-5.613a1 1 0 0 1 .55-1.694l7.834-1.246 3.606-7.066a1 1 0 0 1 1.782 0l3.606 7.066 7.834 1.246a1 1 0 0 1 .55 1.694l-5.605 5.613L23.51 26.2a1 1 0 0 1-1.44 1.047L15 23.65z"/></svg>';
		}
		$stars .= '</p>';
		$comment_text = $comment_text . $stars;
		return $comment_text;
	} else {
		return $comment_text;
	}
}
