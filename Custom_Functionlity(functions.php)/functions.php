The functions.php essentially acts like a WordPress plugin, letting you add custom PHP functions, classes, interfaces,
and more. It opens up the entirety of the PHP programming language to your theme.

WordPress automatically loads the functions.php file


The only caveat to that rule is when a child theme is active. In that case, WordPress loads the child theme’s
functions.php just before loading the parent theme’s functions.php.


add_filter( 'default_wp_template_part_areas', 'themeslug_template_part_areas' );

function themeslug_template_part_areas( array $areas ) {
$areas[] = array(
'area' => 'loop',
'area_tag' => 'section',
'label' => __( 'Loop', 'themeslug' ),
'description' => __( 'Custom description', 'themslug' ),
'icon' => 'layout'
);

return $areas;
}