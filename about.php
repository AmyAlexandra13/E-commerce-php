<?php

require_once 'layout\layout2.php';

session_start();

$layout = New Layout('About');
?>

<?php $layout->printheader("css/about.css");?>

   <div class="about-container">

       <div class="image-container">
           <img src="images/shopp2.jpg" alt="Image about our company">
        </div>

<div class="text-content">
    <h3>The best online shopping store</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ex iure ad hic obcaecati dolorem. Pariatur et, 
    earum quas sit maiores numquam quisquam, 
    fugiat quis nulla culpa blanditiis, nam voluptate. </p>
    </div><!--The text-container ends here -->

    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ex iure ad hic obcaecati dolorem. Pariatur et, 
    earum quas sit maiores numquam quisquam, 
    fugiat quis nulla culpa blanditiis, nam voluptate. </p> -->


</div> <!--The about-container ends here -->


<?php $layout->printfooter();?>