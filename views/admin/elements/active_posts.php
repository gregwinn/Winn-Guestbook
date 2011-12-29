<?php if($activeposts){ ?>
<div class="content-box-header">
	<h3>New Posts! (<?php echo $activeposts['datacount']; ?>)</h3>
</div>

<div class="content-box-content">
	
	<table class="pagination" rel="6"><!-- add the class .pagination to dynamically create a working pagination! The rel-attribute will tell how many items there are per page -->
		<thead>
			<tr>
				<th><input type="checkbox" /></th>
				<th>Name</th>
				<th>Email Address</th>
				<th>Post Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="5">			
					<div class="bulk-actions">
						<select>
							<option value="option1">Choose an action...</option>
							<option value="option2">Delete</option>
							<option value="option3">Move to authors</option>
						</select>
						<a href="#" class="graybutton">Apply to selected</a>
					</div>
				</td>
			</tr>
		</tfoot>
				
		<tbody>
			<?php while($newpostrow = mysql_fetch_array($activeposts['data'])){ ?>
			<tr class="newpost_<?php echo $newpostrow['id']; ?>" id="newpost_<?php echo $newpostrow['id']; ?>">
				<td><input type="checkbox" /></td>
				<td><?php echo $newpostrow['name']; ?></td>
				<td><?php echo $newpostrow['email']; ?></td>
				<td><?php echo date("D, M jS Y", strtotime($newpostrow['created_at'])) ;?></td>
				<td>
					<a class="approvepost" href="#" id="<?php echo $newpostrow['id']; ?>"><img src="images/icons/plus.png" alt="Approve" /></a>
					<a class="editpost" href="#"><img src="images/icons/pencil.png" alt="Edit" /></a>
					<a href="#" id="<?php echo $newpostrow['id']; ?>" class="confirmation"><img src="images/icons/cross.png" alt="Delete" /></a><!-- to create a tooltip-style confirmation, just add .confirmation to the <a>-tag -->
				</td>
			</tr>
			<tr class="newpost_<?php echo $newpostrow['id']; ?>">
				<td colspan="5">
					<h6 style="display:inline;">Post Content: </h6>
					<span id="newpost_content_<?php echo $newpostrow['id']; ?>"><?php echo $newpostrow['message']; ?></span>
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	
	<div class="clear"></div>
	
</div>
<?php }else{?>
	<div class="content-box-header">
		<h3>No approved posts :(</h3>
	</div>

	<div class="content-box-content">
		<p>Sorry, no approved posts at this time.</p>
	</div>
<?php } ?>