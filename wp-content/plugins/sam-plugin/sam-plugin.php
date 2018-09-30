<?php
/**
 * @package SamPlugin
 */
/*
Plugin Name: Sam Plugin
Plugin URI: https://debullient.com/plugin
Description: This is my first test plguin.
Version: 1.0.0
Author: Sanyam Tiwari
Author URI: https://debullient.com
License: GPLv2 or later
Text Domain: sam-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!!');

class SamPlugin
{
	function activate(){

		echo 'The plugin was activated';

	}

	function deactivate(){
        echo 'The plugin was activated';
	}

	function uninstall (){

	}
}

if ( class_exists ('SamPlugin')){

	$samPlugin = new SamPlugin();
}

//activation

register_activation_hook( __FILE__, array ($samPlugin, 'activate' ));

//deactivation

register_deactivation_hook( __FILE__, array ($samPlugin, 'deactivate' ));

//uninstall