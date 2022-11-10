<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostate Cancer Database</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="#particles-js">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#gene_section">Gene</a></li>
            <li><a href="#protein_section">Protein</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
    </div>
    <div id="particles-js">
        <h1>PROSTATE CANCER DATABASE</h1>
    </div>
    <div id="about">
        <div class="content">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio exercitationem corrupti tenetur debitis, possimus officiis, vitae quo labore blanditiis soluta, iste doloremque voluptas. Nemo dicta non, pariatur fugit adipisci ad.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, laudantium odit. Omnis optio deleniti corporis provident, iste maiores sit neque alias sequi dicta? Provident explicabo nihil soluta blanditiis deleniti modi!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eos quasi, unde laborum tempore ducimus? Illo inventore ut, temporibus mollitia cupiditate tempora laudantium voluptate quia aliquam voluptatem suscipit sed aut.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate ullam consequatur nostrum aut quod quam dignissimos, hic inventore et, corrupti qui consequuntur optio sapiente voluptatum! Rerum aspernatur ex tempore labore?
            </p>
        </div>
    </div>
    <div class="gene_search" id="gene_section">
        <center><form action="gene_details.php" enctype="multipart/form-data" method="post">
            <h2>Search Your Gene Here</h2>
        <input type="text" name="gene" id="gene" placeholder="Enter the Gene Name"><br>
        <input type="submit" name="gsubmit" id="gsubmit">
        </form>
        </center>
    </div>
    <div class="protein_search" id="protein_section">
        <center><form action="protein_details.php" enctype="multipart/form-data" method="post">
            <h2>Search Your Protein Here</h2>
        <input type="text" name="protein" id="protein" placeholder="Enter the Protein Name"><br>
        <input type="submit" name="psubmit" id="psubmit">
        </form>
        </center>
    </div>
    <div class="main" id="feedback">
        <form class="container">
          <!-- <h2 class="heading">Give feedback</h2> -->
          <p class="para">Were you able to find the materials you needed?</p>
    
          <div class="feedback-level">
            <div class="level">
              <i class="lar la-sad-tear"></i>
            </div>
            <div class="level">
              <i class="las la-frown"></i>
            </div>
            <div class="level">
              <i class="lar la-meh"></i>
            </div>
            <div class="level">
              <i class="lar la-smile"></i>
            </div>
            <div class="level">
              <i class="lar la-grin"></i>
            </div>
          </div>
    
          <div class="feedback-msg">
            <p class="para">
              Do you have any suggestions for new materials?
            </p>
            <textarea name="" id=""></textarea>
          </div>
    
          <!-- <div class="agreement">
            <div class="checkbox">
              <input type="checkbox" name="" id="">
              <label for="">I may be contacted about this feedback <a href="#">Privacy Policy</a>.</label>
            </div>
          </div> -->
    
          <div class="buttons">
            <a href="javascript:alert('Thanks for submiting your feedback')">Submit</a>
            <a href="You just cancelled to submit the feedback">Cancel</a>
          </div>
        </form>
      </div>
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>