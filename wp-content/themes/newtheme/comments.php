<div class="blog-comments">
    <h3 class="mb-5"><?php comments_number(); ?> Comments</h3>
    <div id="comment-blog">
        <ul class="comment-list">
            <li class="comment">
                <?php foreach ($comments as $comment) { ?>

                    <?php get_avatar($comment, 60, '', '');  ?>
                    <div class="avatar"><img alt="" src="<?php echo get_bloginfo('template_url') ?> /assets/images/avatar-01.jpg" class="avatar"></div>

                    <div class="comment-container">
                        <h5 class="comment-author"><a href="#"><?php comment_author();  ?></a></h5>
                        <div class="comment-meta">
                            <a href="#" class="comment-date link-style1"><?php echo get_the_date('F j, Y'); ?></a>
                            <a class="comment-reply-link link-style3" href="#respond">Reply »</a>
                        </div>
                        <div class="comment-body">
                            <p><?php comment_text();  ?></p>
                        </div>
                    </div>
            </li>
        </ul>
    </div>
</div>
<?php }
                the_comments_pagination();
?>
<!-- END comment-list -->
<?php

comment_form([
    'comment_field' => '',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'fields' => [
        'author' =>
        '<div class="comment-form-main">
        <div class="row">
        <div class="col-md-4 ">
        <div class="form-group">
        <label>' . __('', 'udemy') . '</label>
        <input type="text" name="author" class="form-control" placeholder="Name" id="commenter-name" aria-required="true"/>
        </div></div>',
        'email' =>
        '<div class="col-md-4 ">
        <div class="form-group">
        <label>' . __('', 'udemy') . '</label>
        <input type="text" name="email" class="form-control" placeholder="Email" id="commenter-email" aria-required="true"/>
        </div></div>',
        'url' =>
        '<div class="col-md-4">
        <div class=" form-group">
        <label>' . __('', 'udemy') . '</label>
        <input type="text" name="url" class="form-control" placeholder="Website URL" id="commenter-url" aria-required="true" />
        </div></div>
        </div>',
        'comment_field' => '<div class="clear"></div>
    <div class="form-group">
        <label class="mb-5"></label>
        <textarea name="comment" cols="30" rows="2" class="form-control" placeholder="Message" id="commenter-message" aria-required="true"></textarea>
    </div></div>'
    ],
    'class_submit' => 'hover-btn-new orange',
    'label_submit' => __('Post Comment', 'udemy'),
    'title_reply' => __('Leave a <span>Comment</span>', 'udemy')

]);

?>

</div>

<?php
add_filter('comment_form_default_fields', 'tu_comment_form_change_cookies_consent');
function tu_comment_form_change_cookies_consent($fields)
{
    $commenter = wp_get_current_commenter();

    $consent   = empty($commenter['comment_author_email']) ? '' : ' checked="checked"';

    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
        '<label for="wp-comment-cookies-consent">Your modified text here</label></p>';
    return $fields;
}
?>

<!-- <div class="comments-form">
    <h4>Leave a comment</h4>
    <div class="comment-form-main">
        <form action="#">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-12 post-btn">
                    <button class="hover-btn-new orange"><span>Post Comment</span></button>
                </div>
            </div>
        </form>
    </div>
</div> -->