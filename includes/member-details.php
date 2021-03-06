<div class="member-details-section">
<p>
    <label for="pirate-crew-designation"><?php _e( "Position", $this->text_domain ); ?></label>
    <input class="widefat" type="text" name="pirate-crew-designation" id="pirate-crew-designation" value="<?php echo esc_attr(get_post_meta($post->ID, 'pirate-crew-designation', true));?>"/>
</p>
<p>
	<label for="pirate-crew-short-desc"><?php _e( 'Short Description (in 140 characters or less)', $this->text_domain ); ?></label><br/>
	<textarea id="pirate-crew-short-desc" name="pirate-crew-short-desc" class="widefat" type="text" maxlength="140"><?php echo esc_attr(get_post_meta($post->ID, 'pirate-crew-short-desc', true));?></textarea>
</p>
</div>
<h3><?php _e('Additional Information (for Email, Telephone, Fax, etc)',$this->text_domain);?></h3>
<div class="member-details-section">
<table id="repeatable-fieldset-one" class="picrew-sorable-table">
	<thead>
		<tr>
			<td width="3%"></td>
			<td width="45%"><?php _e('Label',$this->text_domain);?></td>
			<td width="42%"><?php _e('Content',$this->text_domain);?></td>
			<td width="10%"></td>
		</tr>
	</thead>
	<tbody>
		<?php if ( $pirate_crew_contact ) : 
		foreach ( $pirate_crew_contact as $field ) { ?>
		<tr>
			<td><span class="dashicons dashicons-move"></span></td>
			<td><input type="text" placeholder="<?php _e('ex: Email',$this->text_domain);?>" class="widefat" name="pirate-crew-label[]"  value="<?php if(isset($field['label'])) echo esc_attr( $field['label'] ); ?>"/></td>
			<td><input type="text" placeholder="<?php _e('mail@example.com',$this->text_domain);?>" class="widefat" name="pirate-crew-content[]" value="<?php if(isset($field['content'])) echo esc_attr( $field['content'] ); ?>"/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>	
		<?php } else:?>
		<tr>
			<td><span class="dashicons dashicons-move"></span></td>
			<td><input type="text" placeholder="<?php _e('ex: Email',$this->text_domain);?>" class="widefat" name="pirate-crew-label[]" value=""/></td>
			<td><input type="text" placeholder="<?php _e('mail@example.com',$this->text_domain);?>" class="widefat" name="pirate-crew-content[]" value=""/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>	
		<?php endif; ?>
		<tr class="empty-row screen-reader-text">
			<td><span class="dashicons dashicons-move"></span></td>
			<td><input type="text" class="widefat" placeholder="<?php _e('ex: Email',$this->text_domain);?>"  name="pirate-crew-label[]" /></td>
			<td><input type="text" class="widefat" placeholder="<?php _e('mail@example.com',$this->text_domain);?>" name="pirate-crew-content[]" value=""/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>
	</tbody>
</table>
<p><a class="button picrew-add-row" href="#" data-table="repeatable-fieldset-one"><?php _e('Add row',$this->text_domain);?></a></p>
</div>
<h3><?php _e('Links (Twitter, LinkedIn, etc)',$this->text_domain);?></h3>
<div class="member-details-section">
<table id="repeatable-fieldset-two" class="picrew-sorable-table">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th><?php _e('Icon',$this->text_domain);?></th>
			<th><?php _e('Link',$this->text_domain);?></th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php if ( $pirate_crew_social ) : 
		foreach ( $pirate_crew_social as $field ) { ?>
		<tr>
			<td><span class="dashicons dashicons-move"></span></td>
			<td>
				<?php $this->selectbuilder('pirate-crew-icon[]',$socialicons,$field['icon'],__('Select icon',$this->text_domain),'widefat picrew-icon-select');?>
			</td>
			<td><input type="text" placeholder="<?php _e('ex: http://www.twitter.com/piratenpartei',$this->text_domain);?>" class="widefat" name="pirate-crew-link[]" value="<?php if(isset($field['link'])) echo esc_attr( $field['link'] ); ?>"/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>	
		<?php } else: ?> 
		<tr>
			<td><span class="dashicons dashicons-move"></span></td>
			<td>
				<?php $this->selectbuilder('pirate-crew-icon[]',$socialicons,'',__('Select icon',$this->text_domain),'widefat picrew-icon-select');?>
			</td>
			<td><input type="text" placeholder="<?php _e('ex: http://www.twitter.com/piratenpartei',$this->text_domain);?>" class="widefat" name="pirate-crew-link[]" value=""/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>	
		<?php endif; ?>
		<tr class="empty-row screen-reader-text">
			<td><span class="dashicons dashicons-move"></span></td>
			<td>
				<?php $this->selectbuilder('pirate-crew-icon[]',$socialicons,'',__('Select icon',$this->text_domain),'widefat');?>
			</td>
			<td><input type="text" placeholder="<?php _e('ex: http://www.twitter.com/piratenpartei',$this->text_domain);?>" class="widefat" name="pirate-crew-link[]" value=""/></td>
			<td><a class="button remove-row" href="#"><?php _e('Remove',$this->text_domain);?></a></td>
		</tr>
	</tbody>
</table>
<p><a class="button picrew-add-row" href="#" data-table="repeatable-fieldset-two"><?php _e('Add row',$this->text_domain);?></a></p>
</div>