<?php
session_start();
/**
 * @package WordPress Plugin Development
 * @version 0.1
 */
/*
Plugin Name: Basic Form Actions Plugin
Plugin URI: http://wordpress.org/plugins/Basic_WpForms/
Description: Plugin Development Tutorial
Author: Karthik
Version: 0.1
Author URI: http://www.8subjects.com
*/


$ans=$_SESSION["result"];
//echo $ans;
function add(){
$current_uri = add_query_arg( NULL, NULL );
echo $current_uri;
$ans="<div id='result'>Welcome Back Mr.".$_SESSION["result"]."</div>";
$form='<form action="wp-content/plugins/basic_form/form_action.php" method="POST">
<input type="hidden" name="url" value="'.$current_uri.'">
Enter Name <input type="text" name="name" id="name" />
<input type="submit" name="send" id="send" name="submit" value="send"></form>';
/*<input type="submit" name="submit" value="Submit" onClick="$("#checkid").html("Please wait..."); $.get("../wp-content/plugins/karthik_action.php",{name: $("#name").val() } ,function(data){  $("#checkid").html(data); });" />
</form>
<span id="checkid"></span>';
*/
$c='Welcome to Plugin Development';
echo "<h5 id='dolly2'>$c $form $ans</h5>";
}

//add('1');

add_action( 'the_content', 'add' );


// We need some CSS to position the paragraph
function dolly_css2() {
	// This makes sure that the positioning is also good for right-to-left languages
//	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly2 {
		float: left;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	#result{
	height:30px;
	width:100%;
	background:#CCC;
	color:#CCFF;
	font-size:16px;
	padding:5px;
	margin-top:20px;
}
	</style>
	";
}

add_action( 'wp_head', 'dolly_css2' );
//session_unset($_SESSION['result']);
?>
