<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="container-fluid" style="padding-top:70px;padding-bottom:70px">
  <div class="row">
    <div class="col-6">
      <form method="post">
            <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> S'enregistrer</h3>
                        <!-- <p class="m-0">Con gusto te ayudaremos</p> -->
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="lname" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="fname" placeholder="Prénom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="login" placeholder="Login" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock text-info"></i></div>
                            </div>
                            <input type="password" class="form-control" id="nombre" name="password" placeholder="Mot de passe:" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa fa-lock text-info"></i></div>
                            </div>
                            <input type="password" class="form-control" id="nombre" name="password2" placeholder="Répéter le mot de passe" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-check-double text-info"></i></div>
                            </div>
                            <input type="number" class="form-control" id="nombre" name="age" placeholder="Age" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-sync-alt text-info"></i></div>
                            </div>
                            <img src="captcha.php" style="vertical-align: middle;"/>
                            <input type="text" class="form-control" id="nombre" name="captcha" placeholder="Entrer le texte dans l'image" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Valider" class="btn btn-info btn-block rounded-0 py-2">
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="col-6">
      <table class="table table-striped custab">
          <thead>
              <tr>
                  <th>Utilisateur</th>
                  <th>Login</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Age</th>
              </tr>
          </thead>          
          
          <?php
            $SQL = "SELECT * FROM user";
            include("db_config.php");
            if ($res=$db->query($SQL)){
              while ($row = $res->fetch()){ 
                  echo "    
                    <tr>
                      <td><i class='fa fa-user text-info'></i></td>
                      <td>$row[login]</td>
                      <td>$row[first_name]</td>
                      <td>$row[last_name]</td>
                      <td>$row[age]</td>
                    </tr> \n";
              } 
            }
          ?>
        </table>
      </div>
  </div>
</div>

<div class="footer-bottom-area bg-dark-light section-padding-sm">
    <div class="container">
        <div class="row widgets footer-widgets">

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-about">
                    <h5 class="widget-title">About Us</h5>
                    <p>We are a team of designers and developers that create high quality <a href="www.dkstudio.in">Readmore...</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-quick-links">
                    <h5 class="widget-title">My Account</h5>
                    <ul>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-quick-links">
                    <h5 class="widget-title">Customer Service</h5>
                    <ul>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Compensation First</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-widget widget-contact">
                    <h5 class="widget-title">Contact Us</h5>
                    <ul>
                        <li class="address">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <p>Address : No 100 Baria Sreet 100/2  Jaipur City, IN.</p>
                        </li>
                        <li class="phone">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <p><a href="#">+91 7568 54 3012</a></p>
                        </li>
                        <li class="fax">
                            <span class="icon"><i class="fa fa-fax"></i></span>
                            <p><a href="#">+91 7568 54 3012</a></p>
                        </li>
                        <li class="email">
                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                            <p><a href="#">dkstudioin@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

  

  

</body>
</html>