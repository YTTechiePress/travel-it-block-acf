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
        <span class="day"><?php echo esc_attr($daytime); ?></span>
    </div>

    <div class="img">
        <?php echo wp_get_attachment_image( $image['id'], 'full' )?>
    </div>

    <div class="content-info">

        <?php if( !empty($days_activity_title) ) {?>
            <p><?php echo esc_attr($days_activity_title); ?></p>
        <?php } ?>

        <?php if( !empty($am_decription) ) {?>
            <p><strong>AM/ </strong><?php echo esc_attr($am_decription); ?></p>
        <?php } ?>

        <?php if( !empty($pm_decription) ) {?>
            <p><strong>PM/ </strong><?php echo esc_attr($pm_decription); ?></p>
        <?php } ?>

        <?php if( !empty($overnight) ) {?>
            <p><strong>Overnight/ </strong><?php echo esc_attr($overnight); ?></p>
        <?php } ?>

    </div>
    <div class="services-info">

        <?php 
            if( $available_service['breakfast'] == 1 ) {
                $bclass = 'available';
            } else {
                $bclass = 'unavailable';
            }

            if( $available_service['lunch'] == 1 ) {
                $lclass = 'available';
            } else {
                $lclass = 'unavailable';
            }

            if( $available_service['dinner'] == 1 ) {
                $dclass = 'available';
            } else {
                $dclass = 'unavailable';
            }

        ?>

        <p>Breakfast<span class="<?php echo $bclass; ?>"></span></p>
        <p>Lunch<span class="<?php echo $lclass; ?>"></span></p>
        <p>Dinner<span class="<?php echo $dclass; ?>"></span></p>
        
    </div>
 </div>
