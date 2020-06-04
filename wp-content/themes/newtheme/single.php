<?php get_header(); ?>

<div class="all-title-box">
  <div class="container text-center">
    <h1>Blog Single<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
  </div>
</div>

<div id="overviews" class="section wb">
  <div class="container">
    <div class="row">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          global $post;
          $author_ID = $post->post_author;
          $author_URL = get_author_posts_url($author_ID);
      ?>
          <div class="col-lg-9 blog-post-single">
            <div class="blog-item">
              <div class="image-blog">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
              </div>

              <div class="post-content">
                <div class="post-date">
                  <span class="day"><?php echo get_the_date(__('j')); ?></span>
                  <span class="month"><?php echo get_the_date(__('M')); ?></span>
                </div>
              </div>
              <div class="meta-info-blog">
                <span class="fa fa-calendar"> <a href="#">
                    <?php echo get_the_date(); ?> </a></span>
                <span><i class="fa fa-tag"></i> <a href="#">News</a> </span>
                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
              </div>
              <div class="blog-title">
                <h2><a href="#" title=""><?php the_title();  ?></a></h2>
              </div>
              <div class="blog-desc">
                <p> <?php the_content(); ?></p>
                <blockquote class="default">
                  Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.
                </blockquote>
                <p>Phasellus tristique commodo libero, eget dignissim turpis dignissim quis. Morbi sit amet laoreet nibh, gravida scelerisque felis. Phasellus ultrices pellentesque ligula et viverra. Integer elementum, risus et tempor ultricies, libero turpis pellentesque massa, at facilisis erat nunc hendrerit erat. Praesent rhoncus, augue nec condimentum porta, magna dui volutpat augue, vitae blandit magna quam in massa. Fusce a rhoncus diam. Proin nec lacinia nibh. Praesent sed nisi sed purus dictum laoreet.</p>
                <p>Duis at tortor augue. Ut et justo consequat, facilisis lectus facilisis, tincidunt massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel vestibulum urna. Fusce sed magna posuere, vehicula odio vitae, tempor arcu. Pellentesque eget felis sed eros maximus elementum ultrices a elit. Sed ac sodales enim.</p>
              </div>
          <?php
        }
      }
          ?>
            </div>


            <div class="blog-author">
              <div class="author-bio">
                <h3 class="author_name"><a href="#">Tom Jobs</a></h3>
                <h5>CEO at <a href="#">SmartEDU</a></h5>
                <p class="author_det">
                  Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus omnis saperet docendi nec, eos ea alii molestiae aliquand.
                </p>
              </div>
              <div class="author-desc">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/author.jpg" alt="about author">
                <ul class="author-social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>



            <?php
            if (comments_open() || get_comments_number()) {
              comments_template();
            }
            ?>



          </div><!-- end col -->
          <div class="col-lg-3 right-single">
            <div class="widget-search">
              <div class="site-search-area">
                <form method="get" id="site-searchform" action="#">
                  <div>
                    <input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
                    <input id="searchsubmit" value="Search" type="submit">
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-categories">
              <h3 class="widget-title">Categories</h3>
              <ul>
                <li><a href="#">Political Science</a></li>
                <li><a href="#">Business Leaders Guide</a></li>
                <li><a href="#">Become a Product Manage</a></li>
                <li><a href="#">Language Education</a></li>
                <li><a href="#">Micro Biology</a></li>
                <li><a href="#">Social Media Management</a></li>
              </ul>
            </div>
            <div class="widget-tags">
              <h3 class="widget-title">Search Tags</h3>
              <ul class="tags">
                <li><a href="#"><b>business</b></a></li>
                <li><a href="#"><b>jquery</b></a></li>
                <li><a href="#">corporate</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#">css3</a></li>
                <li><a href="#"><b>theme</b></a></li>
                <li><a href="#"><b>html5</b></a></li>
                <li><a href="#"><b>mysql</b></a></li>
                <li><a href="#">multipurpose</a></li>
                <li><a href="#">responsive</a></li>
                <li><a href="#">premium</a></li>
                <li><a href="#">javascript</a></li>
                <li><a href="#"><b>Best jQuery</b></a></li>
              </ul>
            </div>
          </div>
    </div><!-- end row -->
  </div><!-- end container -->
</div><!-- end section -->



<?php get_footer(); ?>