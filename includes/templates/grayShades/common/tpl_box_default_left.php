<?php
/**
 * Common Template - tpl_box_default_left.php
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_box_default_left.php 2975 2006-02-05 19:33:51Z birdbrain $
 */

// choose box images based on box position
  if ($title_link) {
    $title = '<a href="' . zen_href_link($title_link) . '">' . $title . BOX_HEADING_LINKS . '</a>';
  }
//
?>
<?php	$main_id_off = 'categories';
	$structure = '';
	$structure = '<!--// bof: ' . $box_id . ' //-->'; 
	if ($this_is_home_page) { $show_categories = false;  } else { $show_categories = true;  }
	if (($main_id_off == $box_id) && ($show_categories == false) )
	{ /*do nothing*/
	}else {
		//$structure = '<!--// test box ID: ' . $box_id . ' //-->'; 
		$structure .= '<div class="leftBoxContainer" id="' . str_replace('_', '-', $box_id ) . '">'; 
		$structure .= '<h3 class="leftBoxHeading" id="' . str_replace('_', '-', $box_id) . 'Heading">' . $title . '</h3>'; 
		$structure .= $content; 
		$structure .= '</div>';
	}
	echo $structure; 
	
?>
<!--// eof: <?php echo $box_id; ?> //-->

