<?php
	function mand_setting_option()
	{
		?>
		<h1>Enter Name/Ids for the fields to make mandatory</h1>
		<form method="post" action="options.php">
			<?php settings_fields( 'mand-settings-group' ); ?>
			<ul >
			
				<li id="li_1" >
				<label>Field 1 :</label>
				<div>
					<label class="description" for="element_1"> Name </label>
						<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_1');?>"/> 
						<!--&nbsp;<label class="description" for="element_1"> ID </label>
						<input id="id_1" name="id_1" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_1');?>"/> -->
					</div> 
				</li>		
				<li id="li_1" >
				<label>Field 2 :</label>
				<div>
					<label class="description" for="element_2"> Name </label>
						<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_2');?>"/> 
						<!--&nbsp;<label class="description" for="element_2"> ID </label>
						<input id="id_2" name="id_2" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('id_2');?>"/> -->
					</div> 
				</li>		
				<li id="li_1" >
				<label>Field 3 :</label>
				<div>
					<label class="description" for="element_3"> Name </label>
						<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_3');?>"/> 
						<!--&nbsp;<label class="description" for="element_1"> ID </label>
						<input id="id_3" name="id_3" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('id_3');?>"/> -->
					</div> 
				</li>		
				<li id="li_1" >
				<label>Field 4 :</label>
				<div>
					<label class="description" for="element_1"> Name </label>
						<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_4');?>"/> 
						<!--&nbsp;<label class="description" for="element_1"> ID </label>
						<input id="id_4" name="id_4" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('id_4');?>"/> -->
					</div> 
				</li>		
				<li id="li_1" >
				<label>Field 5 :</label>
				<div>
					<label class="description" for="element_1"> Name </label>
						<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('element_5');?>"/> 
						<!--&nbsp;<label class="description" for="element_1"> ID </label>
						<input id="id_5" name="id_5" class="element text medium" type="text" maxlength="255" value="<?php echo get_option('id_5');?>"/> -->
					</div> 
				</li>		
				<li>
					 <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</li>
			</ul>
		</form>
		<?php
	}
?>
