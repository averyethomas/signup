<!DOCTYPE html>
<html>
    <head>
        <title>MATTR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--STYLE SHEET--><link rel="stylesheet" href="https://use.typekit.net/zff8ima.css">
        <link href="styles/style.css" rel="stylesheet" type="text/css">
        <!--JAVASCRIPT-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visible/1.2.0/jquery.visible.min.js" type="text/javascript"></script>
        <script src="scripts/app.js" type="text/javascript"></script>
        <!-- FONT AWESOME -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
<?php   require('connection.php');
        if ( isset($_POST['email']) ){
            $email = $_POST['email'];
            $query = "INSERT INTO emails (email) VALUES ('$email')";
            $result = mysqli_query($con, $query);

            if($result){
                $status = 'submitted';
                $msg = "<h4>Thanks for signing up!<br>You'll recieve an eamil with your invitation.</h4>";
            }else{
                $status = 'error';
                $msg = "<h4>There was a problem with your request:<br>valid email address not provided</h4>";
            }
        }
?>
    <body>
        <nav>
            <div class="container">
                <div class="logo"><img src="images/mattr.png"></div>
                <ul>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Sign In</a></li>
                </ul>
                <button>Request An Invitation</button>
            </div>
        </nav>
        <div class="hero">
            <div class="container">
                <div class="logo"><img src="images/logo.png"><img class="hide-md" src="images/mattr.png"></div>
                <h1>Personalities<br>tell powerful stories.</h1>
                <p>The key to successful brand engagement lies with the vibrant personalities that make up online audiences. Mattr translates the social data they generate into powerful stories and actionable insights, allowing brands to connect on a deeper level with their targets.</p>
                <h4>Get to know your audience.<br>Request a private beta invitation:</h4>
                <form method="POST"  class="<?php if( $result ){ echo $status; } ?>">
                    <input type="email" name="email" placeholder="your@email.com" required>
                    <button class="cta" type="submit" name="submit" ><?php if($status == 'submitted'){ echo '<i class="fas fa-check"></i> Requested'; } else { echo 'Request Invite'; } ?></button>
                </form>
<?php           if($result){
?>
                <div class="alert">
                    <?php echo $msg; ?>
                </div>
<?php       }
?>              
            </div>
        </div>
        <div data-ng-app="angularApp" data-ng-controller="mainCtrl">
            <div class="primary-content">
                <div class="container">
                    <div class="section">
                        <h2>The App</h2>
                        <h5>Mattr allows you to build a more complete view of your social media audience through a comprehensive set of segmentation, comparison, monitoring, and visualization tools. Explore our Features to learn more.</h5>
                    </div>
                    <div class="section">
                        <div class="image-container" data-ng-click="modal = true">
                            <div class="image"><img src="images/audience.jpg"></div>
                            <h4>View Screenshot</h4>
                            <div class="plus"><span>&#43;</span></div>
                        </div>
                        <h3>Audience Personality Segments</h3>
                        <p>Decide how you want to look at your audience on our Unique Personality Type Analysis and demographics.</p>
                    </div>
                    <div class="section">
                        <div class="image-container" data-ng-click="modal = true">
                            <div class="image"><img src="images/persona.jpg"></div>
                            <h4>View Screenshot</h4>
                            <div class="plus"><span>&#43;</span></div>
                        </div>
                        <h3>Persona Builder</h3>
                        <p>Combine Personality Traits and Dempographic information to create Audience Personas that make sense for your business.</p>
                    </div>
                    <div class="section">
                        <div class="image-container" data-ng-click="modal = true">
                            <div class="image"><img src="images/engagement.jpg"></div>
                            <h4>View Screenshot</h4>
                            <div class="plus"><span>&#43;</span></div>
                        </div>
                        <h3>Engagement Response By Persona</h3>
                        <p>Which of your social media activities are attracting the audience engagement you're looking for? See a segmented repor on a per-post basis.</p>
                    </div>
                    <div class="section">
                        <div class="image-container" data-ng-click="modal = true">
                            <div class="image"><img src="images/benchmarking.jpg"></div>
                            <h4>View Screenshot</h4>
                            <div class="plus"><span>&#43;</span></div>
                        </div>
                        <h3>Social Brand Benchmarking</h3>
                        <p>See how your brand's audience compares to that of your competition, or your industry. Choose what you want to compare and then view the comparison.</p>
                    </div>
                    <div class="section">
                        <div class="image-container" data-ng-click="modal = true">
                            <div class="image"><img src="images/sentiment.jpg"></div>
                            <h4>View Screenshot</h4>
                            <div class="plus"><span>&#43;</span></div>
                        </div>
                        <h3>Sentiment Variance</h3>
                        <p>Knowing that your audience is 'upbeat' just isn't enough. You need to know if they're more upbeat about your brand than they are about other things.</p>
                  </div>
                </div>
            </div>
            <div class="modal" data-ng-show="modal">
                <div class="container">
                    <div class="image">
                        <div class="image-inner"><img src="images/lightbox.jpg">
                            <div class="caption">
                                <p><span>Screenshot Title.</span> Caption text lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="close" data-ng-click="modal = false">
                                <p>close <span>&#215;</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
        <footer>
            <div class="container">
                <div class="flex-container">
                    <div class="section">
                        <h6>San Francisco, CA</h6><a href="#">Rocketspace<br>181 Freemont Street<br>San Francisco, California 94105</a><a class="email" href="#">Email Us</a>
                    </div>
                    <div class="section">
                        <h6>Austin, TX</h6><a href="#">8140 North Mopac Expressway<br>Building 1, Suite 150<br>Austin, Texas 78759</a><a class="email" href="#">Email Us</a>
                    </div>
                    <div class="section">
                        <h6>Elsewhere</h6><a href="#"><i class="fab fa-twitter"></i> Twitter</a><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                    <div class="section">
                        <h6>Company</h6><a href="#">Sign In</a><a href="#">Blog</a><a href="#">FAQ</a>
                    </div>
                </div>
                <p>&copy; 2013 MATTR. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>