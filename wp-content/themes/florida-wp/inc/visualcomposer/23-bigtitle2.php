<?php

vc_map( array(
        'name' =>'Webnus Big Title 2',
        'base' => 'big_title2',
		"description" => "Title with border",
        "icon" => "icon-wpb-wbigtitle2",
        'params'=>array(
					
					array(
							'type' => 'textarea_html',
							'heading' => __( 'BigTitle Content', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'content',
							'value' => 'Bigtitle text',
							'description' => __( 'Enter the Bigtitle content', 'WEBNUS_TEXT_DOMAIN')
					),
		),
		'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        
    ) );


?>