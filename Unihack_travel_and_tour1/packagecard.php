<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>

  <link rel="stylesheet" href="assets/css/materialize.css">
  <link rel="stylesheet" href="assets/css/all.css">

<style media="screen">
.wuwoo_profile_ratio {
      position: relative;
      margin-top : 4px;
      /* min-height: calc(100vh); */
    }
    .profile_and_link_col {
      width : 290px;
      margin-left: 30px;
      position: absolute;
    }
    .profile_and_link_col.hide-on-med-and-down > div:nth-child(2) {
      margin-top: 8px;
    }
    .profile_left {
      width: 100%;
      box-shadow: 0px 0px 4px #ddd;
    }
    .profile_image_container {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    .profile_image {
      border-radius: 50%;
      height: 72px;
      width: 72px;
      border: 2px solid #fff;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      color: #fff;
    }
    .profile_up_span , .profile_down_span {
      position: absolute;
      left: 90px;
      font-size: 22px;
      font-weight: bolder;
    }
    .profile_down_span {
      font-size: 15px;
      font-weight: normal;
      top: 53px;
      color: #909090;
    }

    .profile_status {
      padding: 16px;
    }
    .profile_status > a {
      display: block;
      width: 100%;
      border-radius: 3px;
      transition: background-color 0.4s ease-in-out;
      color: #806a6a;
      padding-left: 4px;
      padding-top: 4px;
      padding-bottom: 4px;
    }
    .profile_status > a:hover {
      /* color: #000; */
      background-color: #eee;
      transition: background-color 0.2s ease-in-out;
    }

    .post_and_advertisement {
      padding-left : calc(330px);
    }
    .post_col , .advertise_col {
      padding: 0px 20px 0px 0px;
      /* background-color: #ccc; */
      /* height: 300px; */
    }
    .advertise_col {
      background-color: #ddd;
      height: 300px;
    }

    @media  only screen and (max-width: 992px) {
      .post_and_advertisement {
        padding-left: 0px;
      }
    }

    </style>
    </head>
<body>
<script>
function setSession(setval) {
//session[pacakageid]=setval;
}
//document.getElementById("demo").innerHTML = myFunction(10, 2); 
</script>
<?php
session_start();
	  
	include("databaseconfig.php");
	$agentid=$_SESSION['agencyid'];
	$fetchpackdata = mysqli_query($conn, " SELECT *  FROM package where agencyid='$agentid'");
	$num_rows = mysqli_num_rows($fetchpackdata);
    
    $packdata[][]=array();
    $num_package=0;
  
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
           <li><a href="http://www.zesttravel.com">Home</a></li>
           <li><a href="index.html">Company</a></li>
             <li><div class="divider"></div></li>
             <li><a href="contacts/index.html">Contacts</a></li>
          </ul>


    </div>
  </nav>


<?php while($row = mysqli_fetch_assoc($fetchpackdata)):?>
 <div  id="package_list">
                    <div class="row">

                      <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img src="images/ChaungTha.jpg">
                          </div>
                          <div class="card-content">
                            <span class="card-title"><?php echo $row['title']?></span>
                            Kudo
                            <?php echo $row['price']?>
                            <!-- <a href="detail.html">Details</a>
                             --><br>
                            <form action="detail.php" method="post">
							<input type="text" value='<?php echo $row['packageid'];?>' name="packageid" id="packageid">
							<input type="submit" value="detail">
							</form>
                          </div>
                        </div>
                      </div>
                      <?php $num_package++; ?>
                      <?php endwhile;?>
</body>
</html>