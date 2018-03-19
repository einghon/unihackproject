
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
      <link rel="stylesheet" href="assets/css/materialize.css">
      <link rel="stylesheet" href="assets/css/all.css">
      <link rel="stylesheet" href="assets/css/jquerysctipttop.css">
      <link rel="stylesheet" href="assets/css/slider.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style media="screen">
  .w_section {
    width:90%;
    margin : 0 auto;
  }
  @media  only screen and (max-width: 992px) {
    .w_section {
      width:95%;
      margin : 0 auto;
    }
  }
  @media  only screen and (max-width: 601px) {
    .w_section {
      width:100%;
      margin : 0 auto;
    }
  }

</style>
</head>
<body>

<?php
$packageid=$_POST['packageid'];
include("databaseconfig.php");
 $filesrecords = mysqli_query($conn, " SELECT * FROM package where packageid='$packageid'"); 
 $row = mysqli_fetch_assoc($filesrecords);

 $agentid=$row['agencyid'];
 
?>
  <!--  <?php //while($row = mysqli_fetch_assoc($filesrecords)): ?>
 -->


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

        <div class="slider" slide-interval="6000">
            <?php   
                  $gallarystr = $row['gallarystr'];
          $imgstring = explode(",",$gallarystr); 
         ?>

                
<div class="w3-content w3-display-container">
  <?php foreach ($imgstring as $str) : ?>
  <img class="mySlides" src="images/<?php echo $str; ?>" style="width:100%">
  <?php endforeach; ?>
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
          

        

          
            <div class="slide-pre"></div>
            <div class="slide-next"></div>
        </div>



        <div class="w_section">
          <div class="row">
            <div class="col s12 m8">

              <div class="card">
                <div class="card-content ">
                  <span class="card-title"><?php echo $row['title']; ?></span>
                  <p><?php echo $row['description']; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">EXTRA INFORMATIONS</span>
                  <p> MAIN STATE/DISTINCT(S) : <span id="loc"><?php echo $row['mainloc']; ?></span> </p><br>
                  <p> Price Per One : <span id="price"><?php echo $row['price']; ?></span> kudo</p><br>
                  <p> ROUTE DESCRIPTION : <span id="route"><?php echo $row['route']; ?></span> </p><br>
                  <p> DURATION : <span id="duration"><?php echo $row['duration']; ?></span></p><br>

                  <div>

                  </div>
 
 
                </div>

              </div>

 				<button class="index_button modal-trigger" href="#modal2" value="buy package">buy package</button>
 				
            </div>
                 

<!-- 	<td><?php// echo $row['gallarystr']; ?></td>

 -->


            <div class="col m4">
              <div class="card">
                <div class="card-content ">
                  <span class="card-title"> offered Services</span>
                  <p><?php   
                  $onservicestring = $row['onservices'];
					$string = explode(",",$onservicestring);
					foreach ($string as $str) {
					    echo "<li>".$str."</li>";
					}
                     ?></p>
                </div>



              </div>

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">SERVICE EXCLUDED</span>
                  <p><?php 
 					$offservicestring = $row['offservices'];
					$string = explode(",",$offservicestring);
					foreach ($string as $str) {
					    echo "<li>".$str."</li>";
					}
                 
                   ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">CATEGORIES</span>
                  <p><?php echo $row['catagories']; 
                    $catagories = $row['catagories'];
					$string = explode(",",$catagories);
					foreach ($string as $str) {
					    echo "<li>".$str."</li>";
					}
                  ?></p>
                </div>
              </div>


            </div>
          </div>
        </div>

  </main>



 <!-- Modal Structure -->
 

 <div id="modal2" class="modal">
   <div class="modal-content">
          <form action="tradetranx.php" id="index_form" method="post" name="index_form">
<!--        <div class="input-field ">
 -->        <!--  <input id="first_text" type="text" class="validate" list="browsers">
-->
          <div class="input-field ">
          <input id="numppl" type="text" class="validate" name="numppl" onchange="settotalprice(this.value);">
          <label for="numppl">number of people</label>
          </div>

      <p>Total amount :<span id="totalamt" align="center"></span></p><br>
			<div class="input-field ">
          <input id="value" type="text" class="validate" name="value" value="" hidden="hidden">
<!--           <label for="value">total amount</label>
 -->          </div>
       <!-- </div> -->

          <div class="input-field ">
          <input id="addr" type="text" class="validate" name="addr">
          <label for="addr">wallet address</label>
          </div>

          <div class="input-field ">
          <input id="publickey" type="text" class="validate" name="publickey">
          <label for="publickey">private key</label>
          </div>

      
       <input type="text" value="<?php echo $agentid;?>" hidden="hidden" name="agentid" id="agentid">
   <input type='submit' class="index_button modal-trigger" value="buy package">
     </form>
   
   </div>
 
 </div>


<script type="text/javascript">
  function settotalprice(pplvar){
    
      var price=document.getElementById('price').innerHTML;
      document.getElementById('value').value=price*pplvar;
      document.getElementById('totalamt').innerHTML=price*pplvar;
  }
</script>>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/materialize.js"></script>

  <script src="assets/js/slider.js" charset="utf-8"></script>

<script type="text/javascript">

		function deletefun(){
			confirm("ARE YOU SURE YOU WANT TO DELETE THE PACKAGE?");
		}

  $(document).ready( function () {
    $('.sidenav').sidenav();
    $('.modal').modal();

    $('#select_change').on("change" , function () {
      console.dir($(this).val());
      $("#total").html(parseInt($('#price').html()) * $(this).val() );
    });
  });
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


</body>
</html>

