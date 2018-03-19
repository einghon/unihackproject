
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>

  <link rel="stylesheet" href="asset/css/materialize.css">
  <link rel="stylesheet" href="asset/css/all.css">
  <link rel="stylesheet" href="asset/css/jquerysctipttop.css">
<link rel="stylesheet" href="asset/css/slider.css">

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
            <div class="slide active">
                <div class="slide-img" img-src="https://picsum.photos/1920/1680/?random"></div>
                <div class="substrate"></div>

            </div>
            <div class="slide">
                <div class="slide-img" img-src="https://picsum.photos/1820/1580/?random"></div>
                <div class="substrate"></div>
            </div>
            <div class="slide">
                <div class="slide-img" img-src="https://picsum.photos/1720/1480/?random"></div>
                <div class="substrate"></div>
            </div>
            <div class="slide-pre"></div>
            <div class="slide-next"></div>
        </div>

        <div class="w_section">
          <div class="row">
            <div class="col s12 m8">

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
<!-- 
place to edit
 -->              <div class="card">
                <div class="card-content ">
                  <span class="card-title">Book here ! </span>
                      <form name="form1" action="tradetranx.php" method="post">
            <input type="text" name="Price_per_one" value="50" /> KUDO<br/><br />

                  <p> No Of Person </p>
                  <p> Price Per One : <span id="price">500</span> kudo </p>

                  <div class="row">
                    <div class="col s5 m2">
                        
                    </div>
                    <div class="col s6 m4">
                      <select class="browser-default" id="select_change" onchange="caltotalMoney()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                  </div>

                  <div>

                    <h6 class="teal-text">
                      Total Kudo :
                        <span id="totalAmmount">

                        </span>
                    </h6>
                  </div>

                  <button class="index_button modal-trigger" href="#modal1">Book Now</button>

                </div>

              </div>

            </div>

            <div class="col m4">
              <div class="card">
                <div class="card-content ">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-content ">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
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
     <a href="confirm.html" class="modal-action modal-close waves-effect waves-green btn-flat"> Purchace </a>
   </div>
 </div>



  <script src="asset/js/jquery.js"></script>
  <script src="asset/js/materialize.js"></script>

  <script src="asset/js/slider.js" charset="utf-8"></script>
  <script type="text/javascript">
     
      
    function caltotalMoney () {
      var form1=document.form1;
      var price=form1.Price_per_one.value;
      var ppl=form1.no_of_ppl.selectedIndex+1;
        var total=price*ppl;
      //alert("total="+total);
      document.getElementById("totalAmmount").innerHTML=total;
      document.form2.total.value=total;
      //alert(document.getElementById("total").value);
    } 
    
    function showpaymetform(){

        
            document.getElementById("form2").style.display="block";
        
    }
    function onloadfun(){
                  document.getElementById("form2").style.display="none";

    }
        
    </script>

</body>
</html>
