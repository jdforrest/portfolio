	<?php include 'header.php';?>
	
    
    <div id="content">
    	<div class="colwrapper">
	    	<div class="col1of2">
	    		<form action="http://www.newmanic.com/formhandler3.asp" method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><input name="FromName" type="text" id="FromName" class="text-box"></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input name="FromEmail" type="text" id="FromEmail" class="text-box"></td>
						</tr>
						<tr>
							<td class="top">Comments:</td>
							<td><textarea name="Comments" placeholder="Comments"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="hidden" name="Subject" value="Contact from John's Portfolio">
								<input type="hidden" name="ToEmail" value="johnathanforrest@gmail.com">
								<input type="hidden" name="ToFirst" value="John">
								<input type="hidden" name="ToLast" value="Forrest">
								<input type="hidden" name="Thanks" value="http://jdforrest.net/contact-success.php">
								<input type="submit" value="Send" class="right">
							</td>
						</tr>
					</table>
				</form>
	    	</div>
	    	<div class="col2of2">
				<h2>Contact Me</h2>
				<p>
					Using this form is a great way to contact me.  In addition, feel free to 
					contact me on <a href="http://www.linkedin.com/pub/john-forrest/41/44/186" target="_blank">LinkedIn</a> 
					or <a href="https://twitter.com/CascadingJohn" target="_blank">Twitter</a>. You should expect 
					to hear back from me within twenty-four hours.
				</p>
	    	</div>
    	</div>
    </div>
    
    
    <?php include 'footer.php';?>
