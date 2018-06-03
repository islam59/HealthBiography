<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	if(isset($leftmenu)){ echo $leftmenu; } //header from includede.
	if(isset($header)){ echo $header; } // menu from includede.
	if(isset($body)){ echo $body; } // menu from includede.
	if(isset($content)){ echo $content; } // content from files .
	if(isset($bottommenu)){ echo $bottommenu; } // content from files .
	if(isset($footer)){ echo $footer; } //footer from inlcude. 
?>