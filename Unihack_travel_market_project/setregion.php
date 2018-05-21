<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="assets/css/materialize.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css"> -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
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

    @media only screen and (max-width: 992px) {
      .post_and_advertisement {
        padding-left: 0px;
      }
    }


  </style>
</head>
<body>
 <nav class="wu-navi  green lighten-2">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">&nbsp;Tour-Packages</a>
      <ul class="right wu-nav show-on-large">
       <li><a class="wuwoo_border" href="#!">Contact</a></li>
       <li><a class="wuwoo_border" href="index.html">Logout</a></li>
       <!-- Dropdown Trigger -->
     </ul>
    </div>
  </nav>
<?php
$regionsync= $_COOKIE['region'];?>
 <?php 
                  include("databaseconfig.php");  
                  $regioninfo=array('','','');

                ?>
                                <div class="row">

<div>
  
</div>


             <?php

                  $fetchpackdata = mysqli_query($conn, "SELECT * FROM package WHERE mainloc LIKE '%{$regionsync}%' "); 
                  ?>

                 <?php while($row = mysqli_fetch_assoc($fetchpackdata)):?>


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
                      <?php endwhile;?>          
              </div>
              </div>
              </div>

</body>
</html>
