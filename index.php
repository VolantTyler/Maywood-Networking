 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LeTip of Maywood is a group of business professionals who meet weekly to share referrals and grow our businesses.">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>LeTip of Maywood</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

<!-- Roboto Slab font from Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  </head>

<!-- Body -->
  <body>

  <?php $thekeys=time(); ?>

    <!-- Hero image and call to action -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="col-md-12">
          <h1 class="display-3"><strong>LeTip of Maywood</strong></h1>
        </div>
        <div class="col-md-12">
          <h3 style="color: #25a2b6; text-shadow: 2px 2px 4px black; text-align: left;">Building business relationships</h3>
        </div>
          <!-- Link to Meetup -->
        <div class="col-md-12">
          <p><a class="btn btn-info btn-lg" href="https://www.meetup.com/LeTIp-of-Maywood-Small-Business-Networking-Meetup/" role="button" target="_blank">Join us for a free breakfast &raquo;</a></p>
        </div>
      </div>
    </div>

    <div class="container">

    <!-- Networking Event -->
      <!-- <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" align="center">
          <h3>Special Networking Event</h3>
          <br>
          <h2 class="cardtop">Happy Hour + Networking</h2>
          <br>
          <p>March 12, 5:30-7:30PM <br> <a href="http://www.twindoortavern.com/" target="_blank">Twin Door Tavern</a> <br> Open Networking, Free Appetizers</p>
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <hr> -->

      <!-- Intro Summary -->
      <div class="row">
        <div class="col-md-8" align="center">
          <p>LeTip groups are gatherings of business people who meet weekly to share leads and referrals, and to grow their businesses. Each LeTip group provides one seat for one business type, so that each business representative can provide expert advice without conflict.</p>
          <p>LeTip of Maywood has several open seats currently. Contact our organizers, <a href="mailto:mrichards@fairwaymc.com" title="email Mark Richards">Mark</a> and <a href="mailto:amorrison@tocr.com" title="email Amy Morrison">Amy</a>, if you are interested in joining us, and if you do <strong>not</strong> represent one of our currently represented businesses.</p>

          <!-- Represented modal button -->
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#representedModal">
            Businesses currently represented
          </button>

          <!-- Recruiting Button trigger modal -->
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#recruitingModal">
            Businesses we are seeking
          </button>


        </div>
        <div class="col-md-4" align="center">
          <a href="http://letip.com/" target="_blank"><img src="images/logo-letip.png" alt="" class="img-fluid"></a>
        </div>
      </div>
<hr>
      

<!-- Row 1 -->
    <section>
    <div class="row row_white">
        <div class="container">
          <div class="card-deck">
            <div class="card">
                <div class="card-body">
                  <h2 class="cardtop">Amy Morrison</h2>
                  <div class="flex-header">
                  <div class="image-container">
                    <img src="images/amy_square.jpeg" class="rounded-circle portrait img-fluid" alt="Amy Morrison photo" title="Amy Morrison">
                  </div>
                  </div>
                  <h3>Broker Associate</h3>
                  <h4>Terrie O'Connor Realtors</h4>
                  <p>
                  Amy has been in the real estate business for more than 16 years and has handled a variety of transactions over her career. Her clients admire her passion and enthusiasm, and credit her for putting together smooth, trouble-free transactions for both buyers and sellers. Amy recently completed a 30 hour course in advanced real estate sales and also received her certification as a Senior Real Estate Specialist. </p>
                </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="http://www.morrison-team.com" target="blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="mailto:amymorrisonrealtor@gmail.com"><button type="button" class="btn  btn-outline-primary" >Contact Amy</button></a>
              </div>
            </div>
  
            <div class="card">
              <div class="card-body">
              <h2 class="cardtop">Mark Richards</h2>
              <div class="flex-header">
              <div class="image-container">
                <img src="images/marksquare3.jpg" class="rounded-circle portrait img-fluid" title="Mark Richards" alt="Mark Richards photo">
              </div>
              </div>
                <h3>Senior Mortgage Planner</h3>
                <h4>Fairway Independent Mortgage</h4>
                <p>
                Mark educates and carefully guides homebuyers through the purchase process for their primary, vacation or investment property. Through Fairway Independent Mortgage Corporation, Mark has access to the traditional lending programs but can also potentially help loan-worthy borrowers that don’t fit the conventional requirements. Mark has become known for educating senior homeowners 62 and older and their trusted advisors by showing them how to responsibly use a portion of their equity to live a better life in retirement.</p>
              </div>
            <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="http://www.LoansByMarkR.com" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="mailto:mrichards@fairwaymc.com "><button type="button" class="btn  btn-outline-primary" >Contact Mark</button></a>  
              </div>
            </div>

   <!-- Thomas Messina -->
          <div class="card">
              <?php
              $xml=simplexml_load_file("members/11.xml") or die ("Error: Cannot read or locate article data");
              ?>
              <div class="card-body">
                <h2 class="cardtop"><?php echo $xml->name; ?></h2>
                <img src=<?php echo $xml->image; ?> class="rounded-circle portrait img-fluid" alt="Pascack Data Services logo" >
                <h3><?php echo $xml->title; ?></h3>
                <h4><?php echo $xml->business; ?></h4>
                <p><?php echo $xml->summary; ?></p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="<?php echo $xml->website; ?>" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="<?php echo $xml->email; ?> "><button type="button" class="btn  btn-outline-primary" >Contact </button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row row_white">
        <div class="container">
          <div class="card-deck">

            <div class="card">
              <div class="card-body">
                <h2 class="cardtop">Howard Adler</h2>
                <img src="images/howard.png" class="img-fluid" alt="Pascack Data Services logo" style="padding-top: 3rem; padding-bottom: 3rem;">
                <h3>Solutions Architect</h3>
                <h4>Pascack Data Services</h4>
                <p>
                In the last 18 months, it has become a top priority of most organizations to figure out how to keep their data safe and recoverable from cyber-attacks. Pascack Data has been helping companies and municipalities with those plans for over 44 years. We believe the key to our longevity is our investment in our engineers. They are constantly re-training in the latest technologies. Your business could benefit from our experience.</p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="http://www.pascackdata.com" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="mailto:hma@pascackdata.com "><button type="button" class="btn  btn-outline-primary" >Contact Howard</button></a> 
              </div>
            </div>
  
  <!-- Edu Munoz -->
            <div class="card">
            <?php
              $xml=simplexml_load_file("members/12.xml") or die ("");
              ?>
              <div class="card-body">
                <h2 class="cardtop"><?php echo $xml->name; ?></h2>
                <img src=<?php echo $xml->image; ?> class="rounded-circle portrait img-fluid" alt="Pascack Data Services logo" >
                <h3><?php echo $xml->title; ?></h3>
                <h4><?php echo $xml->business; ?></h4>
                <p><?php echo $xml->summary; ?></p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="<?php echo $xml->website; ?>" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="<?php echo $xml->email; ?> "><button type="button" class="btn  btn-outline-primary" >Contact </button></a> 
              </div>
            </div>
  
  
            <div class="card">
              <div class="card-body">
                <h2 class="cardtop">Maria Nicastro</h2>
                <div align="center">
                <img src="images/NCS-logo.jpg" class="img-fluid portrait" alt="Nicastro Contracting Services logo" >
                </div>
                <h3>Managing Member</h3>
                <h4>Nicastro Contracting Services</h4>

                <p>
                We are a Professional Remodeling, Design/Build & General Contracting firm providing interior improvement services to residential & commercial clients, specializing in kitchen & bath remodeling, finished basements, interior carpentry renovations & alterations and tenant improvements for commercial office & retails spaces. We are a registered home improvement contractor in New Jersey, NJHIC # 13VH03272300 and are fully insured and licensed.</p>
              </div>
  
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="http://nicastrocontracting.com" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="mailto:maria@nicastrocontracting.com"><button type="button" class="btn  btn-outline-primary" >Contact Maria</button></a>
              </div>
            </div>

          </div>
        </div>
      </div>

<!-- Row 3 -->
      <div class="row row_white">
        <div class="container">
          <div class="card-deck">
  
            <div class="card">
              <div class="card-body">
                  <h2 class="cardtop">Nathaly Rivas</h2>
                  <div align="center">
                  <img src="images/nathaly-square-small.jpg?id=<?php echo $thekeys; ?>"  class="rounded-circle portrait img-fluid" alt="Nathaly Rivas" title="Nathaly Rivas, ">
                  </div>
                  <h3>Property & Casualty Insurance</h3>
                  <h4>Robert Wilkens Insurance Agency</h4>
                  <p>
                    Nathaly provides a great customer experience: translating the complexity of the insurance world into language her clients can understand. 
                  </p>
                </div>
    
                <!-- Footer buttons -->
                <div align="center" class="card-footer">
                <!-- <button type="button" class="btn  btn-outline-primary" >Website</button> -->
                <a href="mailto:nathaly@wilkensagency.com"><button type="button" class="btn  btn-outline-primary">Contact Nathaly</button></a>
                </div>
            </div>
  
   <!-- Sandra Currais -->
          <div class="card">
              <?php
              $xml=simplexml_load_file("members/10.xml") or die ("Error: Cannot read or locate article data");
              ?>
              <div class="card-body">
                <h2 class="cardtop"><?php echo $xml->name; ?></h2>
                <img src=<?php echo $xml->image; ?> class="rounded-circle portrait img-fluid" alt="Pascack Data Services logo" >
                <h3><?php echo $xml->title; ?></h3>
                <h4><?php echo $xml->business; ?></h4>
                <p><?php echo $xml->summary; ?></p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="<?php echo $xml->website; ?>" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="<?php echo $xml->email; ?> "><button type="button" class="btn  btn-outline-primary" >Contact </button></a> 
              </div>
            </div>
  
 
  
  <!-- Dave Andrulini -->
            <div class="card">
              <div class="card-body">
                    <h2 class="cardtop">Daniel Andriulli</h2>
                    <div align="center">
                    <img src="images/dan-square.jpg?id=<?php echo $thekeys; ?>"  class="rounded-circle portrait img-fluid" alt="photo of Daniel Andriulli" title="Daniel Andriulli" >
                    </div>
                    <h3>Mortgage Advisor</h3>
                    <h4>Bond Street Mortgage</h4>
                    <p>
                    Dan provides expert consultation on home mortgages. He has the knowledge to help clients explore the many financing options available, ensuring that they make the right choices. He is committed to providing his customers with mortgage services that exceed their expectations.</p>
                  </div>
      
                  <!-- Footer buttons -->
                  <div align="center" class="card-footer">
                  <!-- <button type="button" class="btn  btn-outline-primary" >Website</button> -->
                  <a href="mailto:dan@bstloans.com"><button type="button" class="btn  btn-outline-primary">Contact Dan</button></a>
                </div>
            </div>

          </div>
        </div>
      </div>

<!-- Row 4 -->
      <div class="row row_white">
        <div class="container">
          <div class="card-deck">
         
          <div class="card">
              <div class="card-body">
                  <h2 class="cardtop">Ara Khorozian</h2>
                  <div align="center">
                  <img src="images/missing.jpg?id=<?php echo $thekeys; ?>"  class="rounded-circle portrait img-fluid" alt="" title="" >
                  </div>
                  <h3>Attorney at Law</h3>
                  <p>
                  Ara specializes in real estate law, working with clients out of his Oradell, NJ office. </p>
                </div>
    
                <!-- Footer buttons -->
                <div align="center" class="card-footer">
                <!-- <button type="button" class="btn  btn-outline-primary" >Website</button> -->
                <a href="mailto:ara@arakhorozian.com"><button type="button" class="btn  btn-outline-primary">Contact Ara</button></a>
                </div>
            </div>

            <div class="card">
 
            </div>

    <!-- placeholder -->
            <div class="card">
              <?php
              $xml=simplexml_load_file("members/XXX.xml") or die ("");
              ?>
              <div class="card-body">
                <h2 class="cardtop"><?php echo $xml->name; ?></h2>
                <img src=<?php echo $xml->image; ?> class="rounded-circle portrait img-fluid" alt="Pascack Data Services logo" >
                <h3><?php echo $xml->title; ?></h3>
                <h4><?php echo $xml->business; ?></h4>
                <p><?php echo $xml->summary; ?></p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="<?php echo $xml->website; ?>" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="<?php echo $xml->email; ?> "><button type="button" class="btn  btn-outline-primary" >Contact </button></a> 
              </div>
            </div>

          <div class="card"></div>
          <!-- placeholder -->
          <div class="card">
              <?php
              $xml=simplexml_load_file("members/XXX.xml") or die ("");
              ?>
              <div class="card-body">
                <h2 class="cardtop"><?php echo $xml->name; ?></h2>
                <img src=<?php echo $xml->image; ?> class="rounded-circle portrait img-fluid" alt="Pascack Data Services logo" >
                <h3><?php echo $xml->title; ?></h3>
                <h4><?php echo $xml->business; ?></h4>
                <p><?php echo $xml->summary; ?></p>
              </div>
              <!-- Footer buttons -->
              <div align="center" class="card-footer">
              <a href="<?php echo $xml->website; ?>" target="_blank"><button type="button" class="btn  btn-outline-primary" >Website</button></a>
              <a href="<?php echo $xml->email; ?> "><button type="button" class="btn  btn-outline-primary" >Contact </button></a> 
              </div>
            </div>

          </div>    
          </div>
        </div>

    </section>

      <?php include "footer.php"; ?>

    </div> <!-- /container -->

    <!-- Modals -->
    <!-- Represented Modal -->
<div class="modal fade" id="representedModal" tabindex="-1" role="dialog" aria-labelledby="representedModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="representedModalLabel">These seats are currently filled</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul>
            <li>Real Estate</li>
            <li>Mortgage Advisor</li>
            <li>Website Developer</li>
            <li>Data Services/IT</li>
            <li>Life Insurance</li>
            <li>Financial Planning</li>
            <li>Attorney</li>
            <li>Building Contractor</li>
          </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Recruiting Modal -->
<div class="modal fade" id="recruitingModal" tabindex="-1" role="dialog" aria-labelledby="recruitingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recruitingModalLabel">These are just a few of the seats that are currently open</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>CPA</li>
          <li>Architect</li>
          <li>Chiropractor</li>
          <li>Business Banking</li>
          <li>Travel Agent</li>
          <li>Florist</li>
        </ul>
      </div>
      <div class="modal-footer">
      <a href="mailto:amymorrisonrealtor@gmail.com"><button type="button" class="btn  btn-outline-primary" >Contact Amy</button></a>
      <a href="mailto:mrichards@fairwaymc.com "><button type="button" class="btn  btn-outline-primary" >Contact Mark</button></a> 
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  </body>
</html>
