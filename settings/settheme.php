<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);

// check url
$url2 = explode("&set-theme", $url)[0];

$gettheme = $_GET['set-theme'];
$atheme = array(
    "light",
    "dark",
);
if (empty($gettheme)) {

} else {
    if (in_array($gettheme, $atheme)) {
        include_once('./include/headhtml.php');
        $gen = '<?php $theme="' . $gettheme . '";?>';
        $stheme = './include/theme.php';
        $handle = fopen($stheme, 'w') or die('Cannot open file:  ' . $stheme);
        $data = $gen;
        fwrite($handle, $data);
        $_SESSION['theme'] = $gettheme;
    } else {
        include_once('./include/headhtml.php');
    }
}

?>