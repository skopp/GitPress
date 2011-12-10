<?php

/*
Plugin Name: GitPress
Plugin URI: http://wordpress.org/extend/plugins/gitpress/
Description: Provides advanced shortcodes to integrate <a href="http://github.com">GitHub</a> in to your WordPress.
Version: 0.1.0.0
Author: Alasdair Mercer
Author URI: http://neocotic.com/
License: MIT
*/

/* Copyright (C) 2011 Alasdair Mercer, http://neocotic.com/
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy  
 * of this software and associated documentation files (the "Software"), to deal  
 * in the Software without restriction, including without limitation the rights  
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell  
 * copies of the Software, and to permit persons to whom the Software is  
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all  
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR  
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,  
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE  
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER  
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,  
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE  
 * SOFTWARE.
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

?>