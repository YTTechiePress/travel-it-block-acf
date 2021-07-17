<?php
/**
 * Layout of our travel block.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'travel-it-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'travel-it-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$daytime             = get_field('daytime');
$image               = get_field('image');
$days_activity_title = get_field('days_activity_title');
$available_service   = get_field('available_service');
$am_decription       = get_field('am_decription');
$pm_decription       = get_field('pm_decription');
$overnight           = get_field('overnight');

?>

 <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div>
        <span><?php echo esc_attr($daytime); ?></span>
    </div>
    <?php // print_r(  $image ); ?>

    <?php echo wp_get_attachment_image( $image['id'], 'full' )?>
    <!-- <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" srcset=""> -->
    <div class="content-info">
        <p><?php echo esc_attr($days_activity_title); ?></p>
        <p><?php echo esc_attr($am_decription); ?></p>
        <p><?php echo esc_attr($pm_decription); ?></p>
        <p><?php echo esc_attr($overnight); ?></p>
    </div>
    <div class="services-info">
        <p>Breakfast<span></span></p>
        <p>Lunch<span></span></p>
        <p>Dinner<span></span></p>

        <?php // print_r( $available_service ); ?>
    </div>
 </div>
