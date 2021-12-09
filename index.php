<?php

require_once 'layout\layout2.php';

session_start();

$layout = New Layout('Cart');
?>

<?php $layout->printheader();?>


  <main>    
        <div class="firstinfo"><!--It can be the container of the photo and image-->
      <div class="image1">
        <img src="images/shopp1.jpg" alt="I am loading..." >
      </div>

      <div class="image1-text">
        <h1>Start shopping</h1>
        <p>The best way to go shopping it's online</p>
        <a href="#" class="btn btn-outline-light">Go shopping</a>
      </div>
     </div> <!--the container ends -->

      <div class="best-deals-container">
        <div class="letter">
        <h2 id="ha">Top best deals2</h2> 
      </div>
    </div>   <!-- best deals container  ends-->

      <div class="deals-items">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/shopp2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      
    
    
    

    </main>
   

    <?php $layout->printfooter();?>
