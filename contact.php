<?php

require_once 'layout\layout2.php';

session_start();

$layout = New Layout('Contact');
?>

<?php $layout->printheader("css/contact.css");?>
<main>
  <div class="contact-container"> 
  <div class="info-container">

  <div class="info">
      <i class="fas fa-envelope-open-text"></i>
      <h3 id="email">Our email </h3>
          <p>shopamy@gmail.com</p>
          <p>shopamycontact@gmail.com</p>

  </div>

  <div class="info">
  <i class="fas fa-phone"></i>
      <h3 id="title-phone">Our phone number</h3>
      <p>435-962-1515</p>
      <p>435-895-8945</p>
  </div>

  <div class="info">
  <i class="fas fa-map-marked-alt"></i>
  <h3 id="addres">Our address </h3>
  <p>150 College Avenue East Snow College</p>
  </div>

 

  </div>  <!--the info-container ends -->
 


  <div class="form-container">
<div class="form">
  <h3>Contact us</h3>
  <input id="contact-name" type="text" placeholder="Type your name" class="inputs"> 
  <input id="contact-lastname" type="text" placeholder="Type your last name" class="inputs"> 
  <input id="contact-email" type="email" placeholder="Type your email" class="inputs"> 
  <textarea id="contact-comment" placeholder="Write your comment" cols="10" rows="10" class="inputs"></textarea>

<button id="btn-contact"  class="btn btn-success">Submit</button>
</div>



<iframe class="frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12339.118901267186!2d-111.5829275!3d39.3612246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57eb0289350243f!2sSnow%20College!5e0!3m2!1ses-419!2sus!4v1639247775532!5m2!1ses-419!2sus"  allowfullscreen="" loading="lazy"></iframe>

  </div> <!--the form-container ends -->


</div>  </div>  <!--the contact-container ends -->

</main>
<script src="js/validation.js"> </script>
<?php $layout->printfooter();?>