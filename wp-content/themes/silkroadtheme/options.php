<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */



function optionsframework_option_name() {



	// This gets the theme name from the stylesheet (lowercase and without spaces)

	$themename = wp_get_theme(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );

	

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	

	// echo $themename;

}



/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */



function optionsframework_options() {

	

	// Background Defaults

	

	$body_background_defaults = array(
	'color' => '#fcfcfc',
	'image' => 'wp-content/themes/skeleton/images/border_top.png',
	'repeat' => 'repeat-x',
	'position' => 'top center',
	'attachment'=>'fixed');

	

		

	// If using image radio buttons, define a directory path

	$imagepath =  get_bloginfo('template_directory') . '/images/';

		

	$options = array();

	

	$options[] = array( "name" => "Basic Settings",
	"type" => "heading");

	

	$options[] = array( "name" => "Your Details",
	"desc" => "The following options allow you to apply basic settings to your site.",
	"type" => "info");


	$options[] = array( "name" => "Footer Fine Print",
	"desc" => "your address or contact details to be inserted into the very bottom of the site.",
	"id" => "footer_text",
	"std" => "",
	"type" => "textarea"); 

					
	$options[] = array( "name" => "Facebook Address",
	"desc" => "Company Facebook Address.",
	"id" => "facebook_adr",
	"std" => "https://www.facebook.com/",
	"type" => "text");

	$options[] = array( "name" => "Instagram Address",
	"desc" => "Company Instagram Address.",
	"id" => "instagram_adr",
	"std" => "https://www.instagram.com/",
	"type" => "text");

	$options[] = array( "name" => "Pinterest Address",
	"desc" => "Company Pinterest Address.",
	"id" => "pinterest_adr",
	"std" => "https://www.pinterest.com/",
	"type" => "text");


	$options[] = array( "name" => "Footer Scripts",
	"desc" => "Add custom footer scripts such as Google Analytics. Do not include the &lt;script&gt; tag. This is already done for you.",
	"id" => "footer_scripts",
	"std" => "",
	"type" => "textarea");




	return $options;

}
