<?php
    #skyconnectiva-donnot-remove-this-line
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    #skyconnectiva-donnot-remove-this-line
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135455359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135455359-1');
</script>

     <title>21K Race</title>
     <link rel="shortcut icon" type="image/png" href="favicon.png">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
     
     <style>
        .responsif {
        width: 100%;
        max-width: 1200px;
        height: auto;
    }
        .responsip {
        width: 50%;
        max-width: 1200px;
        height: auto;
    }

     </style>

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            
            <a href="https://pertaminaecorunfest.com/" class="navbar-brand" style=""><img src="images/logos.png" class="navbar-brand responsip" alt="" width="100%"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="https://pertaminaecorunfest.com/" class="nav-link smoothScroll">HOME</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://pertaminaecorunfest.com/ecorun/" class="nav-link smoothScroll">ECO-RUN</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://pertaminaecorunfest.com/ecofest/" class="nav-link smoothScroll">ECO-FEST</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://pertaminaecorunfest.com/faq/" class="nav-link smoothScroll">FAQ</a>
                    </li>

                    <li class="nav-item">
                        <a href="https://pertaminaecorunfest.com/hubungi/" class="nav-link smoothScroll">CONTACT</a>
                    </li>
                    
                </ul>
                <ul class="social-icon">
                    <li><a href="https://pertaminaecorunfest.com/buy-tickets/"><img src="images/buy.png" class="responsif dstd-center" alt="" width="100%"></a></li>
                </ul>
                
            </div>

        </div>
    </nav>

     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                   <div class="row">
                       
                       <div class="col-lg-8 offset-lg-2 text-center mb-5" data-aos="fade-up" data-aos-delay="300">
                           <br><br><br>
                           <img src="images/21k.png" alt="" width="100%">
                        </div>
                        
                        <div class="col-lg-4 offset-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <img src="images/circle12.png" class="img-responsive dstd-center" alt="" width="100%">
                        </div>
                        
                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                            <p align="center"><font color="#fff">
                                <br><br>
                                Di kategori ini, EcoChamps ditantang menjadi pelari paling tangguh di Indonesia.
                                <br>
                                Di kategori ini tersedia sub-kategori Umum dan Master. Untuk ketentuannya bisa dilihat <a href="https://pertaminaecorunfest.com/syarat/"><font color="red"><u>di sini</u></font></a>.
                                <br>
                                Sampai bertemu di garis finish EcoChamps!

                            </font></p>
                        </div>
                        
                </div>
            </div>
    </section>
     

<style>
.footer {
  position: static;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #22a6de;
  color: #22a6de;
  text-align: center;
  opacity: 100%;
}
</style>
    

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

<div class="footer">
    <img src="images/things-4.png" alt="" width="100%">
</div>

</body>
</html>