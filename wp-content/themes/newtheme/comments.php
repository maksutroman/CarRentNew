<div class="blog-comments">
    <h4 class="mb-5"><?php comments_number(); ?> </h4>
    <div id="comment-blog">
        <?php foreach ($comments as $comment) { ?>
            <ul class="comment-list">
                <li class="comment">

                    <!-- ?php get_avatar($comment, 60, '', '');  ? -->
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

        <?php }
        the_comments_pagination();
        ?>
    </div>

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
        'submit_button'         =>  '<div class="col-md-12 post-btn">
                                        <button class="hover-btn-new orange"><span>Post Comment</span></button>
                                     </div>',
        'label_submit' => __('Post Comment', 'udemy'),
        'title_reply' => __('Leave a <span>Comment</span>', 'udemy')

    ]);

    ?>

</div>