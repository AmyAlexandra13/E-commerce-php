<?php
    class Layout {
        
        public $header;
        public $footer;
        public $gettingAssetsFolder;

        //To go back in the folder
        function __construct($getPage){
            $this->gettingAssetsFolder = ($getPage) ? "../" :"" ;
            $this->gettingImages = ($getPage) ? "../" :"" ;
       
    }
    
    
    public function printheader($path){
        $header = <<<EOF
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopAmy</title>
    <link rel="stylesheet" href="layout/layout.css">
    <link rel="stylesheet" href=$path> 



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--bootstrap for styles--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--font awesome for some logos--> 
</head>

<header class="topheader">
    <!--The header for the menu on the top !-->

    <a href="index.php" id="bname"><i class="fas fa-store"></i>ShopAmy</a>
   
    <!-- this button would be for screen sizes -->
   <!-- Collapse button -->
  
   <div id="containerbutton">
  <button class="navbar-toggler toggler-example"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
  aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
      class="fas fa-bars fa-1x"></i></span></button>
      

<!--coollapse container -->
<div class="collapse navbar-collapse" id="navbarSupportedContent1">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="products.php">Products</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>


    
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

<!-- the container ends -->
</div>

    <navbar class="mainnav">
    <ul>
        <li><a href="index.php">Home</a> </li>
        <li><a href="products.php">Products</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
</ul>
</navbar>

</header>

<body>
EOF;

        echo $header;
    }


    public function printfooter(){
        $footer = <<<EOF
        <footer>

        <div class="footercontainer">
        <div class="infofooter">
        <h2 id="footerh1">ShopAmy</h2>
      
        
      </div>

      <div class="socialmedias">
        <ul>
       <li> <a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
       <li>  <a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
       <li> <a href="#"><i class="fab fa-twitter"></i>Twitter</a>   </li>
      </ul>
      </div>
    </div><!--Container flex ends-->
    
      <div class="aboutfooter">
        <h6>About our company</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam esse sint rem blanditiis possimus! Sunt doloribus, nihil libero sequi repellendus voluptatum mollitia vitae numquam reiciendis sit possimus eos minima voluptatem Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam esse sint rem blanditiis possimus! Sunt doloribus, nihil libero sequi repellendus voluptatum mollitia vitae numquam reiciendis sit possimus eos minima voluptatem!</p>
      </div>

      
    
      <div class="infodev">
        <hr>
        <p>Created by <span>Amy Martinez</span> &copy; All the copyright reserved 2021-2025</span></p>
        
      </div>

      <div class="policy">
        <ul>
       <li> <a href="#">Term of use</a></li>
       <li> <a href="#">Privacy policy</a></li>
       <li>   <a href="#">Condition of use</a>   </li>
      </ul>
      </div>
   
    
      </footer>
  
   
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!--bootstrap javascript--> 
    </body>
    </html>

EOF;
        echo $footer;

    }

 }

    ?>