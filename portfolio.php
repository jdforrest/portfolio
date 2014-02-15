	<?php include 'header.php';?>
	
    
    <div id="content">
    	<div class="preview-gallery">
    		<div class="preview">
    			
    		</div>    		
    		<div class="col2of2">
    			<h2 class="h2-no-bottom">Portfolio</h2>
    			<small>Click on the images for a larger preview.</small>
    		</div>
    		
    		
    			  
    		<div class="preview clear">
    			<a href="images/creoi-preview.jpg"><img src="images/creoi-preview.jpg" alt="creoi.org" title="creoi.org"></a>
    		</div>
    		<div class="preview-description">
    			<a href="#creoi" id="#creoi"><h2 class="inline">Conservation, Research and Education Opportunities International</h2></a> - 
    			<a href="http://creoi.org" target="_blank"><h2 class="inline">creoi.org </h2></a>
    			<p>
    				 This project was a redesign of CREOi's previous site to be used on WordPress. I worked with a team of designers who passed the static site to me 
    				 in order to use with WordPress. The work was mostly done in PHP, though some JavaScript was used. The client needed 
    				 the site to be in both English and Spanish since the majority of her users are in South America. I used the <a href="http://wpml.org/">WordPress 
    				 Multilingual Plugin</a> to organize the content in both languages, and then used PHP to add that functionality to the site.
    			</p>
    			<p>
    				The code sample below shows the if statement used to display information in the "Reporting" box on the home page of creoi.org. Once 
    				the language is determined, it then uses another if statement to display the next due date for reporting. More code samples can be found 
    				in <a href="https://github.com/jdforrest/creoi" target="_blank">my GitHub repository for CREOI.</a>
    			</p>
    		</div>
    		<a href="images/creoi-codesample.jpg"><img src="images/creoi-codesample.jpg" alt="code sample for creoi.org" title="Code sample from creoi.org" class="codesample"></a>



  			
    		<div class="preview clear">
    			<a href="images/whole-grain-lunch-box-preview.jpg"><img src="images/whole-grain-lunch-box-preview.jpg" alt="Whole Grain Lunch Box" title="Whole Grain Lunch Box"></a>
    		</div>
    		<div class="preview-description">
    			<a href="#wholegrain" id="#wholegrain"><h2>Whole Grain Lunch Box</h2></a>
    			<p>
    				A baking blog focused on providing healthy recipes using a variety of whole grains. 
    				Since this needed to be a blog, I developed the site in WordPress using only a few plugins. 
    				The most important feature of this blog was the single.php file.  The single post page needed to 
    				have a large featured image, lists for both ingredients and preparation, social buttons for recipe sharing, 
    				and a method to print or email the recipe. Ultimately, the client decided to go another direction with her baking, 
    				and did not end up using the site.
    			</p>
    			<p>
    				My code sample below shows the loop used on my single.php page that displays the content of a single post.
    			</p>
    		</div>
    		<a href="images/wholegrain-codesample.png"><img src="images/wholegrain-codesample.png" alt="code sample for Whole Grain Lunch Box" title="Code sample from single.php" class="codesample"></a>
    		
    		<div class="preview">
    			<a href="images/js-resume-orange-preview.jpg"><img src="images/js-resume-orange-preview.jpg" alt="JavaScript Resume" title="JavaScript Resume"></a>
    		</div>
    		<div class="preview-description">
    			<a href="#jsresume" id="jsresume"><h2>Personal Online Resume</h2></a>
    			<p>
    				I created this online resume for a JavaScript class.  Using the jQuery library, our goal was to make a resume 
    				that allowed the user to switch the overall style with a click of a link. This resume uses three stylesheets 
    				that can be toggled with the three links in the header. In addition, this resume has a "Toggle Details" link 
    				for each job. When click, a box slides in from the right to provide more details for the position. 
    			</p>
    			<p>
    				The code sample below lists the different functions created on my script page that operate the "Show Details" box, and the stylesheet switcher.
    			</p>
    		</div>
    		<a href="images/js-resume-codesample.png"><img src="images/js-resume-codesample.png" alt="code sample for Whole Grain Lunch Box" title="Code sample from single.php" class="codesample">
    		
    		<div class="preview">
    			<a href="images/kathy-gallery-preview.jpg"><img src="images/kathy-gallery-preview.jpg" alt="Kathy Kimball Abstract Art" title="Kathy Kimball Abstract Art"></a>
    		</div>
    		<div class="preview-description">
    			<a href="#kimballgallery" id="kimballgallery"><h2>Kathy Kimball Abstract Art</h2></a>
    			<p>
    				This is the first website I ever created. The goal was to provide an online gallery for Kathy Kimball's art, 
    				as well as a space for a blog once I learned PHP and/or WordPress. I used no PHP and a little JavaScript for 
    				form verification. Other than that, this whole site was made using HTML5 and CSS3 only. I’m including this piece 
    				to show where I have come from.  Considering that this was the first site I ever created, I think this is pretty good. 
    				However, looking back, I have definitely come a long way.
    			</p>
    			<p>
    				This code sample shows how I created a widget-like subscribe div in the sidebar. In addition, I've included a couple of the functions used for form validation.
    			</p>
    		</div>
    		<a href="images/kathy-gallery-codesample.png"><img src="images/kathy-gallery-codesample.png" alt="code sample for Whole Grain Lunch Box" title="Code sample from single.php" class="codesample">
    		
    	</div>
    </div>
    
    
    <?php include 'footer.php';?>
