<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New inventory</title>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/head_foot.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/new-inventory.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <!-- <link rel="stylesheet" href="assets/css/contact.css"> -->
    <link rel="stylesheet" href="assets/css/cards.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<script>
    function car_id(x, y) {

        document.getElementById('carimg').src = "assets/img/new-cars/" + x + "";
        let selectedtext = y;
        document.cookie = 'si=' + selectedtext;
        $("#myModal").modal()

    }
</script>

<body>
    <?php
    $passing = $_COOKIE['si'];
    $conn = mysqli_connect("localhost", "root", "", "torqued");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from newcar WHERE id='$passing'";
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

                        <?php
                        while ($rows = $result->fetch_assoc()) {
                            extract($rows);
                        ?>
                            <tbody>

                                <tr>
                                    <td>NAME : <?php echo $rows['name']; ?></td>
                                </tr>

                                <tr>
                                    <td>TRANSMISSION : <?php echo $rows['transmission']; ?></td>
                                </tr>
                                <tr>
                                    <td>MILE AGE : <?php echo $rows['mileage']; ?></td>
                                </tr>
                                <tr>
                                    <td>FUEL : <?php echo $rows['fuel']; ?></td>
                                </tr>
                                <tr>
                                    <td>PRICE : <?php echo $rows['price']; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $rows['description']; ?></td>
                                </tr>
                                <tr>
                                    <td>

                                        <button class="btn btn-primary " data-toggle="modal" data-target="#myModal2"> BOOK TEST DRIVE</button>
                                    </td>
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


                        <p class="set">
                            <label for="phone no">phone no:</label>
                            <input type="text" name="phone" id="phone">
                        </p>
                        <p class="set">
                            <label for="emailAddress">Email Address:</label>
                            <input type="text" name="email" id="emailAddress">
                        </p>
                        <p class="set">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date">
                        </p>
                        <p class="set">
                            <label for="time">Time :</label>
                            <input type="time" name="time" id="time">
                        </p>
                        <p class="set">
                            <label for="address">address :</label>
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

                            <button onclick="car_id('newcar1.avif',1);" data-toggle="modal" data-target="#myModal" id="newcar1"><img src="assets/img/new-cars/newcar1.avif"> </button>

                        </div>
                        <div class=content>
                            <h3>TATA HARRIER</h3>
                            <p>The Tata Harrier has 1 Diesel Engine on offer. The Diesel engine is 1956 cc . It is
                                available with Manual & Automatic transmission.Depending upon the variant and fuel type
                                the Harrier has a mileage of 14.6 to 16.35 kmpl . The Harrier is a 5 seater 4 cylinder
                                car and has length of 4598mm, width of 1894mm and a wheelbase of 2741mm.</p>


                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar2.jpeg',2);" id="newcar2"><img src="assets/img/new-cars/newcar2.jpeg"> </button>

                        </div>
                        <div class=content>
                            <h3>CITROEN C3</h3>
                            <p>Citroen C3 is a 5 seater Hatchback available in a price range of ₹ 5.98 - 8.25 Lakh. It
                                is available in 7 variants, 1198 to 1199 cc engine options and 1 transmission option :
                                Manual. Other key specifications of the C3 include a Ground Clearance of 180 mm, Kerb
                                Weight of 939 kg.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar3.jpg',3);" id="newcar3.jpg"><img src="assets/img/new-cars/newcar3.jpg"></button>
                        </div>
                        <div class=content>
                            <h3>CITY HYBRID</h3>
                            <p>Honda City Hybrid price starts at ₹ 18.92 Lakh and goes upto ₹ 20.42 Lakh (Avg.
                                ex-showroom). City Hybrid comes in 2 variants. City Hybrid price for model in hybrid
                                (electric + petrol) is ₹ 18.92 Lakh. </p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar4.jpeg',4);" id="newcar4.jpeg"><img src="assets/img/new-cars/newcar4.jpeg"></button>
                        </div>
                        <div class=content>
                            <h3>INNOVA HYCROSS</h3>
                            <p>Toyota Innova Hycross price ranges between ₹ 18.55 Lakh - ₹ 29.72 lakh.
                                Under the hood, the Toyota Innova Hycross is offered with a 2.0-litre petrol mill
                                producing 150bhp and 187Nm of torque. Also offer is a 2.0-litre petrol engine with a
                                hybrid motor where the latter develops an additional 111bhp.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar5.webp',5);" id="newcar5.webp"><img src="assets/img/new-cars/newcar5.webp"></button>
                        </div>
                        <div class=content>
                            <h3>MAHINDRA THAR</h3>
                            <p>Mahindra Thar price ranges between ₹ 9.99 Lakh - ₹ 16.49 Lakh depending on the variant
                                selected.
                                The Thar is available in two trim levels - AX optional and LX. Mahindra offers
                                factory-fitted convertible top and hard top choices. Also, the LX trim gets 18-inch
                                alloy wheels while the AX optional comes with a set of 16-inch ones.
                                .</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar6.jpg',6);" id="newcar6.jpg"><img src="assets/img/new-cars/newcar6.jpg"></button>
                        </div>
                        <div class=content>
                            <h3>JEEP MEREDIAN</h3>
                            <p> Jeep Meridian price ranges between ₹ 27.75 Lakh - ₹ 37.15 Lakh depending on the variant
                                selected.
                                Under the hood, the sole powertrain on the Jeep Meridian is a 2.0-litre, four-cylinder
                                diesel engine that produces 168bhp and 350Nm of torque. This motor is paired to a
                                six-speed manual unit or a nine-speed automatic unit. A 4x4 unit is offered exclusively
                                with the latte </p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar7.jpeg',7);" id="newcar7.jpeg"><img src="assets/img/new-cars/newcar7.jpeg"></button>
                        </div>
                        <div class=content>
                            <h3>HYUNDAI TUCSON</h3>
                            <p>
                                Hyundai Tucson price ranges between ₹ 28.51 Lakh - ₹ 35.34 Lakh  
                                The fourth-gen Hyundai Tucson is powered by 2.0-litre petrol and diesel engines. The
                                former, which is paired with a six-speed automatic unit, produces 154bhp and 192Nm of
                                torque, while the latter, which sends power to the wheels via an eight-speed automatic
                                unit, is tuned to produce 184bhp and 416Nm of torque.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar8.jpeg',8);" id="newcar8.jpeg"><img src="assets/img/new-cars/newcar8.jpeg "></button>
                        </div>
                        <div class=content>
                            <h3> HYUNDAI CRETA</h3>
                            <p>Hyundai Creta price ranges between ₹ 10.84 Lakh - ₹ 19.13 Lakh depending on the variant
                                selected.The 1.5-litre MPI petrol engine (six-speed MT/IVT) produces 113bhp and 143.8Nm
                                of peak torque. The 1.5-litre U2 CRDi diesel (six-speed MT/six-speed AT) produces 113bhp
                                and 250Nm of torque. Both engines are RDE-compliant and can run on E20 fuel.

                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">

                    <div class="card" style="width: 29rem;">
                        <div class=image>
                            <button data-toggle="modal" data-target="#myModal " onclick="car_id('newcar9.jpeg',9);" id="newcar9.jpeg"><img src="assets/img/new-cars/newcar9.jpeg"></button>
                        </div>
                        <div class=content>
                            <h3>VW VIRTUS</h3>
                            <p>Honda City Hybrid price starts at ₹ 18.92 Lakh and goes upto ₹ 20.42 Lakh (Avg.
                                ex-showroom). City Hybrid comes in 2 variants. City Hybrid price for model in hybrid
                                (electric + petrol) is ₹ 18.92 Lakh. Volkswagen Virtus price ranges between ₹ 11.32 Lakh
                                - ₹ 18.42 Lakh depending on the variant selected.</p>
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
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35647.546625453615!2d75.77782314204993!3d22.63082484482474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fc0bf32599bf%3A0x1008b35026e513e3!2sInstitute%20of%20Engineering%20%26%20Science%2C%20IPS%20Academy!5e0!3m2!1sen!2sin!4v1678517391255!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>



</html>