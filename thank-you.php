<?php
// Define variables for SEO
$pageTitle = 'Coming Soon! Martin Energy Group'; // Title of page //
$pageDescription = 'We are hard at work, trying to bring you an all new website!'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
$pageRobots = 'noindex,nofollow';
include('inc/header.php') // Include header file //
?>
<nav><p>Thank you for contacting Martin Energy Group!</p></nav>
<!-- CODE FOR RESPONSIVESLIDES.COM...JQUERY NEEDS ADDED TO MAKE SLIDESHOW WORK! (CSS IS ALREADY IN PLACE) -->
<ul class="rslides">
  <li><img src="images/evapco-meg.jpg" alt="Martin Energy Group - Slide 1">
  <p class="slide-text">Complete Power<br>Package Solutions</p>
  </li>
</ul>

<div class="green-dots">

<div class="wrap group main-content">

<div class="grid-4">

<div class="white">
<div class="padding-group">
<h1>Martin Energy Group</h1> 
<h2>An industry leader in the design &amp; manufacturing of complete 
power plant packages</h2>

<p>Martin Energy Group has built it’s business and reputation on meeting the needs of our customers. We evaluate each project and engineer solutions that meet or exceed our customers expectations. By evaluating the entire customer needs prior to completing the engineering and design. We can manufacture, assemble the project in our facilities and conduct comprehensive testing prior to the shipment and installation.</p>
</div>


<ul>
<li>Power Plants</li>
<li>Power Modules</li>
<li>Cogeneration Packages (CHP)</li>
<li>Sitch Gear and SCADA</li>
<li>On Site Support and Service</li>
<li>Power Plant Operations and staffing</li>
</ul>

<div class="padding-group">
<p>We also offer a complete line of ancillary components such as Gas Scrubbing Equipment, Gas Conditioning, Flare Systems, Carbon Monitoring Equipment. Waste Heat Recovery Systems for the Exhaust gases, Jacket Water, and Oil Cooler. Absorption Chilling is also a great technology to reduce wasted heat and optimize your systems capacity.</p>
</div>
</div>

<div class="white bottom-section">
<div class="padding-group">
<h3>Concept to Completion</h3>
<p>Martin Energy Group has the capacity and full range of power generation products. To provide each and every customer with a “Balance of Plant” Product that integrates all of the components into a totally coordinated project... “Martin Energy Group Power Package”</p>
</div>
</div>

</div>


<div class="grid-2">

<img src="images/energy-group.jpg" alt="Martin Energy Group" class="full-image">

<div class="contact">
<h3>Corporate Location</h3>

<p class="contact-p">39411 Excelsior Drive - Latham, MO 65050<br>
P. 660-458-7000 - F. 660-458-7100<br>
e-mail: sales@martinenergygroup.com</p>

<form action="contact-proc.php" method="post" id="contactForm" name="contact_us" class="contact-form" novalidate="novalidate"> 


       
       <div class="contact__field-container">
        <label class="name_label"></label>
        <input type="text" name="name" placeholder="John Doe" required="" aria-required="true"> 
      </div>


        
      <div class="contact__field-container">
        <label class="company_label"></label>
        <input type="text" name="company" placeholder="Company"> 
      </div>


    
      <div class="contact__field-container">
        <label class="email_label"></label>
        <input type="email" name="email" placeholder="example@gmail.com" required="" aria-required="true"> 
      </div>


     
      <textarea name="comments" cols="" rows="3" placeholder="Comments/Message"></textarea>


      <div class="captcha_container">
        <div class="captcha">pow3r</div> 
        <label class="security_label"></label>  
        <input type="captcha" name="captcha" class="captcha_input" placeholder="Captcha/Security" captcha /> 
      </div>

      <div class="message"><div class="alert"></div></div> 

            <input type="submit" name="Submit" value="Submit" class="submit-button"> 
    </form>

</div>

</div>

</div>

</div>
      
	
 
<?php include('inc/footer.php'); ?>