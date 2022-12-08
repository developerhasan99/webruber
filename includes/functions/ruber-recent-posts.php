<?php 

class ListPosts extends WP_Widget {

    /*  Constructor
    /* ------------------------------------ */
      function __construct() {
        parent::__construct( false, esc_html__( 'Ruber List Posts', 'ruber' ), array('description' => esc_html__( 'Display posts from a category', 'ruber' ), 'classname' => 'widget_ruber_posts', 'customize_selective_refresh' => true ) );
      }
      public function ruber_get_defaults() {
        return array(
          'title'     => '',
          // Posts
          'posts_thumb' => 1,
          'posts_category'=> 1,
          'posts_date'  => 1,
          'posts_num'   => '4',
          'posts_cat_id'  => '0',
          'posts_orderby' => 'date',
          'posts_time'  => '0',
        );
      }
    
    /*  Widget
    /* ------------------------------------ */
      public function widget($args, $instance) {
        extract( $args );
    
        $defaults = $this -> ruber_get_defaults();
    
        $instance = wp_parse_args( (array) $instance, $defaults );
    
        $title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
        $output = $before_widget."\n";
        if($title)
          $output .= $before_title.$title.$after_title;
        ob_start();
    ?>
    <?php
        $posts = new WP_Query( array(
            'post_type'       => array( 'post' ),
            'showposts'       => absint( $instance['posts_num'] ),
            'cat'         => absint( $instance['posts_cat_id'] ),
            'ignore_sticky_posts' => true,
            'orderby'       => esc_attr( $instance['posts_orderby'] ),
            'order'         => 'dsc',
            'date_query' => array(
                array(
                'after' => esc_attr( $instance['posts_time'] ),
                ),
            ),
        ) );
    ?>
    <div class="ruber-list-posts">
        <?php while ($posts->have_posts()): $posts->the_post(); ?>
        <div class="ruber-list-post">
            <div class="wb">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="post-date"><?php the_time( get_option('date_format') ); ?></span>
            </div>
            <div class="wi">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(  ); ?>
                </a>
            </div>
        </div>            
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    
    <?php
        $output .= ob_get_clean();
        $output .= $after_widget."\n";
        echo $output;
      }
    
    /*  Widget update
    /* ------------------------------------ */
      public function update($new,$old) {
        $instance = $old;
        $instance['title'] = sanitize_text_field($new['title']);
      // Posts
        $instance['posts_thumb'] = $new['posts_thumb']?1:0;
        $instance['posts_category'] = $new['posts_category']?1:0;
        $instance['posts_date'] = $new['posts_date']?1:0;
        $instance['posts_num'] = absint($new['posts_num']);
        $instance['posts_cat_id'] = absint($new['posts_cat_id']);
        $instance['posts_orderby'] = sanitize_text_field($new['posts_orderby']);
        $instance['posts_time'] = sanitize_text_field($new['posts_time']);
        return $instance;
      }
    
    /*  Widget form
    /* ------------------------------------ */
      public function form($instance) {
        // Default widget settings
        $defaults = array(
          'title'       => '',
        // Posts
          'posts_thumb'     => 1,
          'posts_category'  => 1,
          'posts_date'    => 1,
          'posts_num'     => '4',
          'posts_cat_id'    => '0',
          'posts_orderby'   => 'date',
          'posts_time'    => '0',
        );
        $instance = wp_parse_args( (array) $instance, $defaults );
    ?>
    
      <div class="ruber-options-posts">
        <p>
          <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e( 'Title:', 'ruber' ); ?></label>
          <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance["title"] ); ?>" />
        </p>
        <h4><?php esc_html_e( 'List Posts', 'ruber' ); ?></h4>
        <p>
          <input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id('posts_thumb') ); ?>" name="<?php echo esc_attr( $this->get_field_name('posts_thumb') ); ?>" <?php checked( (bool) $instance["posts_thumb"], true ); ?>>
          <label for="<?php echo esc_attr( $this->get_field_id('posts_thumb') ); ?>"><?php esc_html_e( 'Show thumbnails', 'ruber' ); ?></label>
        </p>
        <p>
          <label style="width: 55%; display: inline-block;" for="<?php echo esc_attr( $this->get_field_id("posts_num") ); ?>"><?php esc_html_e( 'Items to show', 'ruber' ); ?></label>
          <input style="width:20%;" id="<?php echo esc_attr( $this->get_field_id("posts_num") ); ?>" name="<?php echo esc_attr( $this->get_field_name("posts_num") ); ?>" type="text" value="<?php echo absint($instance["posts_num"]); ?>" size='3' />
        </p>
        <p>
          <label style="width: 100%; display: inline-block;" for="<?php echo esc_attr( $this->get_field_id("posts_cat_id") ); ?>"><?php esc_html_e( 'Category:', 'ruber' ); ?></label>
          <?php wp_dropdown_categories( array( 'name' => $this->get_field_name("posts_cat_id"), 'selected' => $instance["posts_cat_id"], 'show_option_all' => esc_html__( 'All', 'ruber' ), 'show_count' => true ) ); ?>
        </p>
        <p style="padding-top: 0.3em;">
          <label style="width: 100%; display: inline-block;" for="<?php echo esc_attr( $this->get_field_id("posts_orderby") ); ?>"><?php esc_html_e( 'Order by:', 'ruber' ); ?></label>
          <select style="width: 100%;" id="<?php echo esc_attr( $this->get_field_id("posts_orderby") ); ?>" name="<?php echo esc_attr( $this->get_field_name("posts_orderby") ); ?>">
            <option value="date"<?php selected( $instance["posts_orderby"], "date" ); ?>><?php esc_html_e( 'Most recent', 'ruber' ); ?></option>
            <option value="comment_count"<?php selected( $instance["posts_orderby"], "comment_count" ); ?>><?php esc_html_e( 'Most commented', 'ruber' ); ?></option>
            <option value="rand"<?php selected( $instance["posts_orderby"], "rand" ); ?>><?php esc_html_e( 'Random', 'ruber' ); ?></option>
          </select>
        </p>
        <p style="padding-top: 0.3em;">
          <label style="width: 100%; display: inline-block;" for="<?php echo esc_attr( $this->get_field_id("posts_time") ); ?>"><?php esc_html_e( 'Posts from:', 'ruber' ); ?></label>
          <select style="width: 100%;" id="<?php echo esc_attr( $this->get_field_id("posts_time") ); ?>" name="<?php echo esc_attr( $this->get_field_name("posts_time") ); ?>">
            <option value="0"<?php selected( $instance["posts_time"], "0" ); ?>><?php esc_html_e( 'All time', 'ruber' ); ?></option>
            <option value="1 year ago"<?php selected( $instance["posts_time"], "1 year ago" ); ?>><?php esc_html_e( 'This year', 'ruber' ); ?></option>
            <option value="1 month ago"<?php selected( $instance["posts_time"], "1 month ago" ); ?>><?php esc_html_e( 'This month', 'ruber' ); ?></option>
            <option value="1 week ago"<?php selected( $instance["posts_time"], "1 week ago" ); ?>><?php esc_html_e( 'This week', 'ruber' ); ?></option>
            <option value="1 day ago"<?php selected( $instance["posts_time"], "1 day ago" ); ?>><?php esc_html_e( 'Past 24 hours', 'ruber' ); ?></option>
          </select>
        </p>
        <hr>
        <h4><?php esc_html_e( 'Post Info', 'ruber' ); ?></h4>
        <p>
          <input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id('posts_category') ); ?>" name="<?php echo esc_attr( $this->get_field_name('posts_category') ); ?>" <?php checked( (bool) $instance["posts_category"], true ); ?>>
          <label for="<?php echo esc_attr( $this->get_field_id('posts_category') ); ?>"><?php esc_html_e( 'Show categories', 'ruber' ); ?></label>
        </p>
        <p>
          <input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id('posts_date') ); ?>" name="<?php echo esc_attr( $this->get_field_name('posts_date') ); ?>" <?php checked( (bool) $instance["posts_date"], true ); ?>>
          <label for="<?php echo esc_attr( $this->get_field_id('posts_date') ); ?>"><?php esc_html_e( 'Show dates', 'ruber' ); ?></label>
        </p>
        <hr>
      </div>
    <?php
    
    }
}
// Register widget
/* ------------------------------------ */
if ( ! function_exists( 'list_register_widget_posts' ) ) {

    function list_register_widget_posts() {
    register_widget( 'ListPosts' );
    }

}
add_action( 'widgets_init', 'list_register_widget_posts' );

?>