<?php

//// Add custom meta boxes and meta custom fields 

///////////
// Main function to add custom meta box Percentage
function percentage_add_custom_box()
{
    $screens = ['skills', 'languages'];
    foreach ($screens as $screen) {
        add_meta_box(
            'percentage_box_id',           // Unique ID
            ucfirst($screen) . ' Percentage : ',  // Box title
            'percentage_custom_box_html',  // Content callback, must be of type callable
            $screen,                  // Post type
			'normal', 'high'
			
        );
    }
}

// Add elements of Percentage meta box
function percentage_custom_box_html($post){
	wp_nonce_field( 'percentage_nonce', 'percentage_nonce' ); ?>

	<p>
		<label for="Percentage"><?php _e( 'Percentage :', 'Percentage' ); ?></label><br>
		<input type="number" name="Percentage" id="Percentage" min="0" max="100" value="<?php echo get_post_meta($post->ID, 'Percentage', true); ?>">
	</p><?php
	
}
add_action('add_meta_boxes', 'percentage_add_custom_box');

// Save percentage meta box elements to db

function percentage_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['percentage_nonce'] ) || ! wp_verify_nonce( $_POST['percentage_nonce'], 'percentage_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['Percentage'] ) )
		update_post_meta( $post_id, 'Percentage', esc_attr( $_POST['Percentage'] ) );
}
add_action( 'save_post', 'percentage_save' );

/**************************************************/

// Main function to add custom meta box Period
function period_add_custom_box()
{
    $screens = ['work-experience', 'education'];
    foreach ($screens as $screen) {
        add_meta_box(
            'period_box_id',           // Unique ID
            ucfirst($screen) . ' Period : ',  // Box title
            'period_custom_box_html',  // Content callback, must be of type callable
            $screen,                  // Post type
			'normal', 'high'
			
        );
    }
}

// Add elements of Period meta box
function period_custom_box_html($post){
	wp_nonce_field( 'fromdate_nonce', 'fromdate_nonce' ); 
	wp_nonce_field( 'todate_nonce', 'todate_nonce' ); 
	wp_nonce_field( 'order_nonce', 'order_nonce' ); ?>

	<p>
		<label for="From Date"><?php _e( 'From Date :', 'From Date' ); ?></label><br>
		<input type="text" name="FromDate" id="FromDate" value="<?php echo get_post_meta($post->ID, 'From Date', true); ?>">
	</p>
	<p>
		<label for="To Date"><?php _e( 'To Date :', 'To Date' ); ?></label><br>
		<input type="text" name="ToDate" id="ToDate" value="<?php echo get_post_meta($post->ID, 'To Date', true); ?>">
	</p>
	<p>
		<label for="Order"><?php _e( 'Order #:', 'Order' ); ?></label><br>
		<input type="number" name="Order" id="Order" min="1" value="<?php echo get_post_meta($post->ID, 'Order', true); ?>">
	</p><?php
	
}
add_action('add_meta_boxes', 'period_add_custom_box');


// Save period meta box elements to db

function period_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['fromdate_nonce'] ) || ! wp_verify_nonce( $_POST['fromdate_nonce'], 'fromdate_nonce' ) ) return;
	if ( ! isset( $_POST['todate_nonce'] ) || ! wp_verify_nonce( $_POST['todate_nonce'], 'todate_nonce' ) ) return;
	if ( ! isset( $_POST['order_nonce'] ) || ! wp_verify_nonce( $_POST['order_nonce'], 'order_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['From Date'] ) )
		update_post_meta( $post_id, 'From Date', esc_attr( $_POST['From Date'] ) );
	if ( isset( $_POST['To Date'] ) )
		update_post_meta( $post_id, 'To Date', esc_attr( $_POST['To Date'] ) );
	if ( isset( $_POST['Order'] ) )
		update_post_meta( $post_id, 'Order', esc_attr( $_POST['Order'] ) );
}
add_action( 'save_post', 'period_save' );
