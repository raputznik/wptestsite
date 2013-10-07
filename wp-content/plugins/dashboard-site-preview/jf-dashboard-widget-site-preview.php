<?php 
/*
Plugin Name: Dashboard Site Preview
Description: This plugin shows a preview of your site on the dashboard.
Version: 1.0
Author: Jesse Friedman
License: GPLv2
*/

/*  Copyright 2011  Jesse Friedman  (email : jfriedman@migroseti.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'wp_dashboard_setup', 'jf_dashboard_preview_widgets' );

function jf_dashboard_preview_widgets() {

	//create a custom dashboard widget
	wp_add_dashboard_widget( 'dashboard_custom_feed', 'Site Preview', 'jf_dashboard_preview_display' );
	
}

function jf_dashboard_preview_display()
{
    echo '<p><iframe src="' .site_url(). '" width="100%" height="600"></iframe></p>';	
}
?>