<?php
/*
Plugin Name: Lowercase "I" Dangit
Plugin URI: https://mattonomics.com/lowercase-i-dangit
Description: Replaces "Internet" with "internet" per the AP Style Guide
Version: 0.1.0
Author: Matt Gross
Author URI: http://mattonomics.com
*/

function lowercase_i_dangit( $text ) {
	$current_filter = current_filter();
	if ( 'the_title' === $current_filter || 'wp_title' === $current_filter )
		return str_replace( 'Internet', 'internet', $text );
}

add_filter( 'the_title', 'lowercase_i_dangit', 11 );
add_filter( 'the_content', 'lowercase_i_dangit', 11 );
add_filter( 'comment_text', 'lowercase_i_dangit', 31 );