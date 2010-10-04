$(document).ready(function(){
	// Approve post
	$(".approvepost").click(function(){
	    // Get the Post ID
	    postID = $(this).attr('id');
	    // Make an ajax call to approve it
	    $.post('guestbook.php?url=gbook/approvepost',{postid: postID},function(data){
	        if(data == "TRUE"){
	            $(".newpost_" + postID).hide();
	        }
	    });
	    return false;
	});
	
	
});