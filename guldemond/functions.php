<?php


register_nav_menus(
  array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
  )
);
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' );
wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);

function get_menu() {
  # Change 'menu' to your own navigation slug.
  $menu_items = wp_get_nav_menu_items('menu');
  foreach($menu_items as $menu_item) {
    // ALTERNATIVE: $slug = get_post_field( 'post_name', $menu_item->object_id );
    $slug = basename( get_permalink($menu_item->object_id) );
    $menu_item->slug = $slug;


  }
  return $menu_items;
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', '/menu', array(
    'methods' => 'GET',
    'callback' => 'get_menu',
  ) );
} );



// Register Custom Post Type
function onderdelen_post_type() {

  $labels = array(
    'name'                  => _x( 'Onderdelen', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Onderdelen', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Onderdelen', 'text_domain' ),
    'name_admin_bar'        => __( 'Onderdelen', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Onderdelen', 'text_domain' ),
    'description'           => __( 'onderdelen', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'onderdelen_type', $args );

}
add_action( 'init', 'onderdelen_post_type', 0 );

// Register Custom Post Type
function fietsen() {

  $labels = array(
    'name'                  => _x( 'fiets', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'fiets', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'fiets', 'text_domain' ),
    'name_admin_bar'        => __( 'fiets', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'fiets', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'  ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'fiets_type', $args );

}
add_action( 'init', 'fietsen', 0 );

// Register Custom Post Type
function kleuren() {

  $labels = array(
    'name'                  => _x( 'kleur', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'kleur', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'kleur', 'text_domain' ),
    'name_admin_bar'        => __( 'kleur', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'kleur', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'  ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'kleur_type', $args );

}
add_action( 'init', 'kleuren', 0 );

// Register Custom Post Type
function frameen() {

  $labels = array(
    'name'                  => _x( 'frame', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'frame', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'frame', 'text_domain' ),
    'name_admin_bar'        => __( 'frame', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'frame', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt'  ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'frame_type', $args );

}
add_action( 'init', 'frameen', 0 );

add_action( 'rest_api_init', 'custom_api_get_all_posts' );
function custom_api_get_all_posts() {

  //let's register our custom route here
  register_rest_route( 'wp/v2', '/page/parent=(?P<post_parent>\d+)', array(
    'methods' => 'GET',
    'callback' => 'answers_by_parent_id_callback',
    'args' => [
      'post_parent'
      ],
    ));
  }

  //here we define our callback function
  function answers_by_parent_id_callback( $request ) {

    //let's initialize our data array
    $posts_data = array();

    // Receive and set the page parameter from the $request for pagination


    //set a parent-post ID, by which to filter child posts here
    $question_id = $request->get_param( 'post_parent' );

    //if the parent post is not set, return null
    $question_id = ( isset( $question_id ) || ! ( empty($question_id) ) ) ? $question_id : null;

    // Get the child posts under a specific parent post
    $posts = get_posts( array(
      'posts_per_page' => 10,
      'order' => 'asc',
      'post_parent' => $question_id,
      'post_type' => 'page',
    )
  );

  // Loop through the posts and push the desired data to the array we've initialized earlier in the form of an object
  foreach( $posts as $post ) {
    $id = $post->ID;
    $post_author = get_user_by( 'ID', $post->post_author );

    // Get author name, and add it to response directly
    $author_display_name = $post_author->display_name;

    //get author avatar and add it directly. You need to install a plugin called "Simple Local Avatars" for this to work here => https://wordpress.org/plugins/simple-local-avatars/
    $posts_data[] = (object) array(
      'id' => $id,
      'slug' => $post->post_name,
      'type' => $post->post_type,
      'title' => $post->post_title,
      'content' => $post->post_content,
      'parent' => $post->post_parent,
      'avatar_url' => $avatar,
      'author_name' => $author_display_name,
      'post_date' => $post->post_date,
      'excerpt' => $post ->post_excerpt,
      'image' => wp_get_attachment_image_src( get_post_thumbnail_id( $post ), full ),
    );
  }
  return $posts_data;
}
?>
