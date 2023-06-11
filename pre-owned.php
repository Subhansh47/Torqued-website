<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preowned</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/head_foot.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/pre-owned.css">

</head>
<script>
    function car_id(x,y) {
        document.getElementById('carimg').src = "assets/img/used-cars/"+x+"";
        let selectedtext=y;
        document.cookie='si='+selectedtext;
    }
</script>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "torqued");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $passing =$_COOKIE['si'];
    $sql="SELECT * from oldcar WHERE id='$passing'";
    $result = $conn->query($sql);

    $conn->close();
    ?>
    
    <div id="myModal" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div id="cardiv"> <img src="assets/img/new-cars/creta- .jpeg" id="carimg" alt=""></div>
                <div class="ctent">
                    <table id="MDLTABLE">

                        <?php while ($rows = $result->fetch_assoc()) {?>
                            <tbody>

                                <tr>
                                    <td>NAME : <?php echo $rows['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>YEAR : <?php echo $rows['year']; ?></td>
                                </tr>
                                <tr>
                                    <td>TRANSMISSION : <?php echo $rows['transmission']; ?></td>
                                </tr>
                                <tr>
                                    <td>MILE AGE : <?php echo $rows['mieage']; ?></td>
                                </tr>
                                <tr>
                                    <td>FUEL  : <?php echo $rows['fuel']; ?></td>
                                </tr>
                                <tr>
                                    <td>PRICE : <?php echo $rows['price']; ?></td>
                                </tr>
                                <tr>
                                    <td> <button class="btn btn-primary " data-toggle="modal" data-target="#myModal2"> BOOK TEST DRIVE</button></td>
                            </tr>
                            <?php
                        }
                            ?>
                            </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
    <div id="myModal2" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1>ENTER YOUR DETAILS</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="ctent">
    
    <form action="assets/php/testdrive.php" method="post">
        
        <p class="set">
            <label for="firstName">First Name:</label>
			<input type="text" name="name" id="name">
        </p>
        
        
        <p  class="set">
            <label for="phone no">phone no:</label>
			<input type="text" name="phone" id="phone">
        </p>
        <p  class="set">
            <label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
        </p>
        <p  class="set">
            <label for="date">Date:</label>
			<input type="date" name="date" id="date">
        </p>
        <p  class="set">
            <label for="time">Time  :</label>
			<input type="time" name="time" id="time">
        </p>
        <p  class="set">
            <label for="address">address  :</label>
			<input type="address" name="address" id="address">
        </p>
        
        <input type="submit" value="Submit" id="submit">
    </form>
    
</div>


                </div>
            </div>
        </div>
    <div class="heading">
        <h1 class="title"> TORQUED</h1>
        <h5>call now 123-345-43</h5> <br>
        <ul class="nav nav-pills nav-justified">
            <div class="divl"></div>
            <li class="nav-item"> <a class="nav-link" href="index.html">HOME </a> </li>
            <li class="nav-item"> <a class="nav-link" href="NEW-INVENTORY.php">NEW-INVENTORY </a> </li>
            <li class="nav-item"> <a class="nav-link" href="PRE-OWNED.php">PRE-OWNED </a> </li>
            <li class="nav-item"> <a class="nav-link" href="FINANCING.html">FINANCING </a> </li>
            <li class="nav-item"> <a class="nav-link" href="contact.html">CONTACT </a> </li>
            <div class="divr"></div>
        </ul>
    </div>



    <div class="new">

        <div class="container"> 
            <div class="row">
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal " onclick="car_id('ucar1.webp',1);" id="ucar1"><img href="#" src="assets/img/used-cars/ucar1.webp"></button>
        </div>
        <div class=content>
            <h3>Tata Harrier</h3>
            <p>Tata Harrier is a powerfull SUV </p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal" onclick="car_id('ucar2.webp',3);" id="ucar2"><img href="#" src="assets/img/used-cars/ucar2.webp"></button>
        </div>
        <div class=content>
            <h3>Skoda Octavia</h3>
            <p>Skoda octavia a a premium powerfull sedan</p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal"  onclick="car_id('ucar3.webp',3);" id="ucar3"><img href="#" src="assets/img/used-cars/ucar3.webp"></button>
        </div>
        <div class=content>
            <h3>Kia Seltos</h3>
            <p>Kia seltos a very powerfull Suv with good engine and all new features</p>
            </div>
        </div>

                    
        </div>
        </div>
            <div class="row">
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal" onclick="car_id('ucar4.webp',4);" id="ucar4"><img href="#" src="assets/img/used-cars/ucar4.webp"></button>
        </div>
        <div class=content>
            <h3>Mahindra Scorpio</h3>
            <p>Mahindra Scorpio is the most popular and most selling suv in india</p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal " onclick="car_id('ucar5.webp',5);" id="ucar5"><img href="#" src="assets/img/used-cars/ucar5.webp"></button>
        </div>
        <div class=content>
            <h3>Hundai i20</h3>
            <p>Hundai i20 is a nice offerdable hatchback which comes in both petrol and deseil</p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal"  onclick="car_id('ucar6.webp',6);" id="ucar6"><img href="#" src="assets/img/used-cars/ucar6.webp"></button>
        </div>
        <div class=content>
            <h3>Merceded E class</h3>
            <p>it is a premium seden</p>
            </div>
        </div>

                    
        </div>
        </div>
            <div class="row">
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal" onclick="car_id('ucar7.webp',7);" id="ucar7"><img href="#" src="assets/img/used-cars/ucar7.webp"></button>
        </div>
        <div class=content>
            <h3>honda Jazz</h3>
            <p>it is a premium hatchbak with a powerfull engine and fun to drive vehicle</p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal"onclick="car_id('ucar8.webp',8);" id="ucar8"><img href="#" src="assets/img/used-cars/ucar8.webp"></button>
        </div>
        <div class=content>
            <h3>mercedes f class</h3>
            <p>it is a luxary sedan </p>
            </div>
        </div>

                    
        </div>
<div class="col-md-3">

    <div class="card" style="width: 29rem;">
        <div class=image>
            <button data-toggle="modal" data-target="#myModal" onclick="car_id('ucar9.webp',9);" id="ucar9"><img href="#" src="assets/img/used-cars/ucar9.webp"></button>
        </div>
        <div class=content>
            <h3>Hundai verna</h3>
            <p>Hundia verna a powerfull fun to drive seden</p>
            </div>
        </div>

                    
        </div>
        </div>
        </div>
        </div>






        <div class=" footer">
            <h1>COME VISIT US</h1>
            <br>
            <h4> AND DRIVE AWAY WITH YOUR NEW CAR!</h4>
            <table>
      <tr>
        <td rowspan="2"><img src="assets/img/us1.gif" alt=""> </td>
        <td>
          <p>Torqued@instagram.com</p>
        </td>
        <td rowspan="2"><img src="assets/img/us1.gif" alt=""> </td>
        <td>
          <p>Torqued@facebook.com</p>
        </td>
        <td rowspan="2"><img src="assets/img/us1.gif" alt=""> </td>
        <td>
          <p>Torqued@twitter.com</p>
        </td>
      </tr>

    </table>
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35647.546625453615!2d75.77782314204993!3d22.63082484482474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fc0bf32599bf%3A0x1008b35026e513e3!2sInstitute%20of%20Engineering%20%26%20Science%2C%20IPS%20Academy!5e0!3m2!1sen!2sin!4v1678517391255!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</body>

</html>