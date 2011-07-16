<?php
function mand_plugin_notice() {
    global $post;
    if (get_option('display_mand_admin_message')) 
    { // check whether to display the message

		
    	$html = '<div id="message" class="updated below-h2"><p>'.get_option('mand_message_custom').'</p></div>';
		//could not create seperate function as wordpress was not allowing to display message in the post .
		add_action('admin_notices' , create_function( '', "echo '" . $html . "';" ) );		
		
		$all_empty_elements = get_option('mand_elements');
		$all_empty_elements = split(',',$all_empty_elements);
		$selector = 1;
		
		foreach($all_empty_elements as $elements)
		{
			$elements = split(':',$elements);    	
			$js_update_css .= 'jQuery("input[name='.$elements[0].']").css(cssObj);';    
			$js_update_css .= 'jQuery("#'.$elements[1].'").css(cssObj);';    
		}
		
		 ?>
		    <script>
		        jQuery(document).ready(function(){
		            var cssObj = {                
		            	'border': '2px solid red'
		            }
		            jQuery("input[name=_su_description]").css(cssObj);                
		            <?php echo $js_update_css;?>
		        });
		    </script>
		<?php
		update_option('display_mand_admin_message', 0); // turn off the message
    }
}



function mand_fields ($data , $postarr) {
    if( !check_elements() )
        {
			$data['post_status'] = 'draft';
			$get_message = get_option('mand_message_custom');
			if ( empty( $get_message ) )
				update_option('mand_message_custom', 'The Fields Marked In Red Are Mandatory');	
							
			update_option('display_mand_admin_message', 1); // turn on the message
        }
        else
        {
        	//$data['post_status'] = 'published';
        	update_option('display_mand_admin_message', 0); // turn on the message        	        	
        }
    return $data;
}


function check_elements()
{
	update_option('mand_elements','');
	for($i=1;$i<=5;$i++)
	{
		$element = get_option('element_'.$i);		
		if ( !is_element_valid($element) && ! empty($element) )
		{
			error_elements($element);
		}
	}
	$empty_elements = get_option('mand_elements');
	if(strlen($empty_elements)>0)
		return false;
	else
		return true;
}

function is_element_valid($element_name){
	$field = split(':',$element_name);
	$value_emelemt = $_POST[$field[0]];
	
	if(empty($value_emelemt))
		return false;
	else
		return true;				
}


function error_elements($element_name)
{
	$prev_elements = get_option('mand_elements');
	$prev_elements = $prev_elements .','.$element_name;
	$prev_elements = preg_replace('/^,/','',$prev_elements);
	update_option('mand_elements',$prev_elements);
}


?>
