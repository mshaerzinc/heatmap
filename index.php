<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>

<head>
    <title>Heatmaps</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="heatmap.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
</head>

<body>
    <div id="floating-panel">
        <!--<button id="change-gradient">Change gradient</button>-->
        <!--<button id="change-radius">Change radius</button>-->
        <!--<button id="change-opacity">Change opacity</button>-->
    </div>

    <button id="demo" class="mylocation btn">Get My Location</button>
    <div id="map"></div>
    <div class="electricity-box exposition-box">
        <div class="title" style="color:#d80000">
            <img src="./images/alarm.png" width="30" alt="toggle">
            Top Cities for Natural Gas Consumption
            <button id="toggle-heatmap" class="btn">
                <img src="./images/aye-open.svg" alt="toggle">
            </button>
        </div>
        <ol class="list-item">
            <!-- <li>
                <span class="head">Ashford town, AL</span>
                <span class="desc"> 15,137 MWh</span>
            </li>
            <li>
                <span class="head">Ashford town, AL</span>
                <span class="desc"> 15,137 MWh</span>
            </li>
            <li>
                <span class="head">Ashford town, AL</span>
                <span class="desc"> 15,137 MWh</span>
            </li>
            <li>
                <span class="head">Ashford town, AL</span>
                <span class="desc"> 15,137 MWh</span>
            </li>
            <li>
                <span class="head">Ashford town, AL</span>
                <span class="desc"> 15,137 MWh</span>
            </li> -->
            <?php
            include_once "ConsumingCity.php";
            $consumingCity = new ConsumingCity();
            $records = $consumingCity->GetTopElectricity();
            while ($record = mysqli_fetch_assoc($records)) {
                ?>
                <li>
                    <span class="head"><?php echo ($record["city"]) ?> </span>
                    <span class="desc"> <?php echo ($record["electricity"]) ?> MWh</span>
                </li>
                <?php
            }
            ?>
        </ol>
    </div>
    <div class="naturalgas-box exposition-box">
        <div class="title" style="color: #2692ff">
                <img src="./images/light.png" width="30" alt="toggle">
            Top Cities for Electricity Consumption
            <button id="toggle-heatmap-2" class="btn">
                <img src="./images/aye-open.svg" alt="toggle">
            </button>
        </div>
        <ol class="list-item">

            <?php
            $records = $consumingCity->GetTopNaturalGas();
            while ($record = mysqli_fetch_assoc($records)) {
                ?>
                <li>

                    <span class="head"><?php echo ($record["city"]) ?> </span>
                    <span class="desc"> <?php echo ($record["natural_gas"]) ?> MWh</span>
                </li>
                <?php
            }
            ?>
        </ol>
    </div>
    <div class="box1 exposition-box">
        <div class="title">
            Leader Board
            <button class="btn">
                <img src="./images/aye-open.svg" alt="toggle">
            </button>
        </div>
        <ol class="list-item">
            <li>
                <span class="head" style="font-weight: bolder">Anna</span>
                <span class="desc"style="font-weight: bolder"> <span id="total" style="font-weight: bolder">1000</span> EP</span>
            </li>
            <li>
                <span class="head">Rachel</span>
                <span class="desc"> 1000 EP</span>
            </li>
            <li>
                <span class="head">Chilumba</span>
                <span class="desc"> 1000 EP</span>
            </li>
            <li>
                <span class="head">Mohamed</span>
                <span class="desc"> 1000 EP</span>
            </li>

        </ol>
    </div>
    <div class="box2 exposition-box">
        <div class="title">
            Things to do

        </div>
        <form class="form">
            <div class="form-control">
                <div class="input-item radio">
                    <input type="checkbox" name="place" id="val-1" value="Ashford town, AL">
                    <label for="val-1" class="form-label">
                        <div class="icon" onclick="addep1()">
                            <img class="un-checked" src="./images/radio.svg" alt="radio">
                            <img class="checked" src="./images/radio-checked.svg" alt="radio">
                        </div>
                        <span class="head">Make sure to close the lights</span>
                        <span class="desc">1,000</span>
                    </label>
                </div>
                <div class="input-item radio">
                    <input type="checkbox" name="place" id="val-2" value="Ashford town, AL">
                    <label for="val-2" class="form-label">
                        <div class="icon" onclick="addep2()">
                            <img class="un-checked" src="./images/radio.svg" alt="radio">
                            <img class="checked" src="./images/radio-checked.svg" alt="radio">
                        </div>
                        <span class="head">Make sure to close the lights</span>
                        <span class="desc">1,000</span>

                    </label>
                </div>
                <div class="input-item radio">
                    <input type="checkbox" name="place" id="val-3" value="Ashford town, AL">
                    <label for="val-3" class="form-label">
                        <div class="icon" onclick="addep3()">
                            <img class="un-checked" src="./images/radio.svg" alt="radio">
                            <img class="checked" src="./images/radio-checked.svg" alt="radio">
                        </div>
                        <span class="head">Make sure to close the lights</span>
                        <span class="desc">1,000</span>

                    </label>
                </div>
            </div>
        </form>

    </div>
<!--    <div class="box3 exposition-box">-->
<!--        <div class="title">-->
<!--            Achievements-->
<!---->
<!--        </div>-->
<!--        <div class="image-wrapper">-->
<!--            <img src="./images/imag.jpg" alt="bg">-->
<!--        </div>-->
<!--    </div>-->


    <!--
 The `defer` attribute causes the callback to execute after the full HTML
 document has been parsed. For non-blocking uses, avoiding race conditions,
 and consistent behavior across browsers, consider loading using Promises
 with https://www.npmjs.com/package/@googlemaps/js-api-loader.
-->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtGnMjy35bQT-a0BwZWJf4T-YsTo2aov8&callback=initMap&libraries=visualization&v=weekly" defer></script>
-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtGnMjy35bQT-a0BwZWJf4T-YsTo2aov8&callback=initMap&libraries=visualization&v=weekly" defer></script>-->
    <script type="text/javascript">
        let flag=true;
        let flag2=true;
        let flag3=true;
        let totalep = 1000;
        function addep1() {
           if(flag){
               totalep = totalep + 1000;
               document.getElementById("total").innerHTML = totalep;
               flag = false;
           }else{
               totalep = totalep - 1000;
               document.getElementById("total").innerHTML = totalep;
               flag = true;
           }

        }

        function addep2() {
            if(flag2){
                totalep = totalep + 1000;
                document.getElementById("total").innerHTML = totalep;
                flag2 = false;
            }else{
                totalep = totalep - 1000;
                document.getElementById("total").innerHTML = totalep;
                flag2 = true;
            }

        }

        function addep3() {
            if(flag3){
                totalep = totalep + 1000;
                document.getElementById("total").innerHTML = totalep;
                flag3 = false;
            }else{
                totalep = totalep - 1000;
                document.getElementById("total").innerHTML = totalep;
                flag3 = true;
            }

        }
        function getPoints() {

            return [  <?php
                $rows = $consumingCity->GetAll();
                while ($record = mysqli_fetch_assoc($rows)) {
                                        echo '{location: new google.maps.LatLng(' . $record['lat'] .' , '. $record['lng'] . '), weight: '. rand(1,1000) . '},' ;
                }
                ?>

            ];

        }
    </script>
    <script type="text/javascript">
        function getPoints2() {

            return [  <?php
                $rows = $consumingCity->GetAll();

                while ($record = mysqli_fetch_assoc($rows)) {
//                    echo 'new google.maps.LatLng(' . $record['lat'] .' , '. $record['lng'] . '),' ;
                    echo '{location: new google.maps.LatLng(' . $record['lat'] .' , '. $record['lng'] . '), weight: '. rand(1,1000) . '},' ;
                }
                ?>

            ];

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH_lG2WuYmSnnvK8BxIM7KVIpubz7SU78&callback=initMap&libraries=visualization&v=weekly" defer></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=visualization&v=weekly" defer></script>-->
    <!--<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtGnMjy35bQT-a0BwZWJf4T-YsTo2aov8&callback=initMap&libraries=visualization&v=weekly"
        defer></script>-->
        </body>
</html>