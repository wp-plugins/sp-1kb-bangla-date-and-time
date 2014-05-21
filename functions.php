<?php
/*
Plugin Name: SP 1KB Bangla Date And Time
Plugin URI: http://wordpress.org/plugins/sp-1kb-bangla-date-and-time/
Description: This is just any wordpress site English language all date and time convert to bangla language.
Version: 1.0
Author: Md Abul Bashar
Author URI: http://www.pchelpcenterbd.com/
*/


function make_bangla_number($str)
{
    $engNumber = array(1,2,3,4,5,6,7,8,9,0);
    $bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $converted = str_replace($engNumber, $bangNumber, $str);
  
    return $converted;
}
  
add_filter( 'get_the_time', 'make_bangla_number' );
add_filter( 'the_date', 'make_bangla_number' );
add_filter( 'get_the_date', 'make_bangla_number' );
add_filter( 'comments_number', 'make_bangla_number' );
add_filter( 'get_comment_date', 'make_bangla_number' );
add_filter( 'get_comment_time', 'make_bangla_number' );

?>