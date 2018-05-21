 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>

  <link rel="stylesheet" href="assets/css/materialize.css">
  <link rel="stylesheet" href="assets/css/all.css">

</head>
<body>

      <?php 
        
      session_start();
      $traxid=$_SESSION['traxid'];
    //  echo $traxid;
      ?>

  <nav class="wu-navi  green lighten-2">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">&nbsp;Tour-Packages</a>
      <a href="#!" data-target="mobile_nav" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>

      <ul class="right wu-nav show-on-large">
       <li><a class="wuwoo_border" href="index.html">Home</a></li>
       <li><a class="wuwoo_border" href="company.html">Company</a></li>
       <li><a class="wuwoo_border" href="login.html">Login</a></li>
       <li><a class="wuwoo_border" href="#!">Contact</a></li>
       <!-- Dropdown Trigger -->
      </ul>

      <ul id="mobile_nav" class="sidenav">
          <li>
            <div class="user-view">
               <div class="background">
                 <img src="Team_Images/background.svg">
               </div>
               <a href="#!user"><img class="circle" src="Team_Images/Team.png"></a>
               <a href="#!name"><span class="black-text name">Zest Tour Packages Platform</span></a>
               <a href="https://www.facebook.com/greenmoezat"><span class="teal-text email">U can contact me.</span></a>
             </div>
           </li>
           <li><a href="index.html">Home</a></li>
           <li><a href="company.html">Company</a></li>
             <li><div class="divider"></div></li>
             <li><a href="contacts/index.html">Contacts</a></li>
          </ul>


    </div>
  </nav>


    <main>

        <div class="w_section">
          <div class="row ">
            <div class="col m2">

            </div>
            <div class="col s12 m8">

              <div class="card">
                <div class="card-content ">
                  <span class="card-title"> Your Token Here ! </span>
                  <p> Plz , you should keep your Token Codes safe  </p>
                  <div class="row">
                    <div class="col s5 m2">
                        <h6>
                          Token Keys :<span id="traxid">    
                          <img src="http://chart.apis.google.com/chart?chs=150x150&amp;cht=qr&amp;chl=<?php echo $traxid ;?>&amp;choe=UTF-8" alt="my alt" /></span>
                        </h6>
                    </div>
                    <div class="col s7 m10">
                      <h6>
                      </h6>
                    </div>
                  </div>

                  <div>

                    <h6 class="teal-text">
                      Thank Your For Buying Package
                    </h6>
                  </div>

                  <div class="">
                    <button class="index_button "  onclick="(function() {
                      window.open('usersite.php' , '_self')
                    }())">Go Back Home Pages</button>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
  </main>



 <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content">
     <h4>Register </h4>
     <p>Number of Person</p>
     <form action="" id="index_form">
       <div class="input-field ">
         <input id="first_text" type="text" class="validate">
        <label for="first_text">Wallet Address</label>
       </div>
       <div class="input-field ">
         <input id="second_text" type="text" class="validate">
        <label for="second_text">Private Key</label>
       </div>
       <div class="input-field hide" id="index_nrc">
         <input id="nrc_for_traveller" type="text" class="validate">
        <label for="nrc_for_traveller">NRC</label>
       </div>

       <div class="input-field hide" id="index_licence">
         <input id="licence" type="text" class="validate">
        <label for="licence">Licence</label>
       </div>

     </form>
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"> Purchace </a>
   </div>
 </div>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/materialize.js"></script>

  <script src="assets/js/slider.js" charset="utf-8"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('.sidenav').sidenav();
    $('.modal').modal();

  });
</script>

</body>
</html>
