/*
Plugin Name: GitHub Integration
Plugin URI: http://wordpress.org/extend/plugins/github-integration/
Description: Provides advanced shortcodes to integrate <a href="http://github.com">GitHub</a> in to your WordPress.
Version: 0.1.0.0
Author: Alasdair Mercer
Author URI: http://forchoon.com/
License: GPLv3
*/

/*
This program is free software: you can redistribute it and/or modify  
it under the terms of the GNU General Public License as published by  
the Free Software Foundation, either version 3 of the License, or  
(at your option) any later version.

This program is distributed in the hope that it will be useful,  
but WITHOUT ANY WARRANTY; without even the implied warranty of  
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the  
GNU General Public License for more details.

You should have received a copy of the GNU General Public License  
along with this program.  If not, see http://www.gnu.org/licenses/.
*/

global $wp_version;
if (version_compare($wp_version, '2.9', '<') && !class_exists('Services_JSON')) {
    include_once(dirname(__FILE__) . '/class.json.php');
}

if (!function_exists('http_build_query')) {
    function http_build_query($query_data, $numeric_prefix = '', $arg_separator = '&') {
        $arr = array();
        foreach ($query_data as $key => $val) {
            $arr[] = urlencode($numeric_prefix.$key) . '=' . urlencode($val);
        }
        return implode($arr, $arg_separator);
    }
}