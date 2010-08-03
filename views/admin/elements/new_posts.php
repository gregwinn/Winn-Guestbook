<?php if($newposts){ ?>
<div class="content-box-header">
	<h3>New Posts! (<?php echo $newposts['datacount']; ?>)</h3>
</div>

<div class="content-box-content">
	
	<table class="pagination" rel="5"><!-- add the class .pagination to dynamically create a working pagination! The rel-attribute will tell how many items there are per page -->
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
			<?php while($newpostrow = mysql_fetch_array($newposts['data'])){ ?>
			<tr id="newpost_<?php echo $newpostrow['id']; ?>">
				<td><input type="checkbox" /></td>
				<td><a href="#"><?php echo $newpostrow['name']; ?></a></td>
				<td><?php echo $newpostrow['email']; ?></td>
				<td><?php echo date("D, M jS Y", strtotime($newpostrow['created_at'])) ;?></td>
				<td>
					<a href="#"><img src="images/icons/pencil.png" alt="Edit" /></a>
					<a href="#" id="<?php echo $newpostrow['id']; ?>" class="confirmation"><img src="images/icons/cross.png" alt="Delete" /></a><!-- to create a tooltip-style confirmation, just add .confirmation to the <a>-tag -->
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	
	<div class="clear"></div>
	
</div>
<?php } ?>