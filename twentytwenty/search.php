<div id="searchResults">  

<?php
$args_my_query = array(
    'post_type'    =>    'tuyen-dung',
    'orderby'    => 'title',
);
$my_query = new WP_Query( $args_my_query );
?>

<?php
    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
        <div class="search">
					
					<div class="post">									
					<div class="post-image">									
						<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
						  <?php the_post_thumbnail(); ?>
						</a>
					</div>
					<div class="post-info">
						<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
						<div class="location">Ngày đăng: <i><?php the_time('d/m/Y'); ?></i>, Update: <?php the_modified_time('d/m/Y'); ?> Vào lúc: <?php the_modified_time(); ?> </div>
						<p><?php the_excerpt(); ?> </p>
					</div>
					</div>
					
					
				</div>
				<?php endwhile; else: ?>
				<p>Từ khóa bạn tìm không thấy vui lòng thử lại.</p>
				<?php endif; ?>
			</div>

