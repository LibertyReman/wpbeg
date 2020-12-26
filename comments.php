<div class="p-comment">
    <?php if( have_comments() ): ?>
        <h2 id="comments" class="p-comment__ttl">Comment</h2>
        <ul class="p-comment__list">
            <?php wp_list_comments( 'avatar_size=60' ); ?>
        </ul>
    <?php endif; ?>
</div>
