<?php
/**
 * Created By Trimmytech
 * Fiverr Handle : @trimmytech
 * Date: 4/14/2018
 * Time: 9:29 PM
 */


?>


<!DOCTYPE html>
<html>
<head>
    <title>Paystack Standard Demo - Buy Samsung S4</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <style>
        ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
        li.active{border-bottom:3px solid silver;}

        .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
        .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
        .btn-success{width:100%;border-radius:0;}
        .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
        .title-price{margin-top:30px;margin-bottom:0;color:black}
        .title-attr{margin-top:0;margin-bottom:0;color:black;}
        .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
        .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
        div.section > div {width:100%;display:inline-flex;}
        div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
        .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
        .attr.active,.attr2.active{ border:1px solid orange;}

        @media (max-width: 426px) {
            .container {margin-top:0px !important;}
            .container > .row{padding:0 !important;}
            .container > .row > .col-xs-12.col-sm-5{
                padding-right:0 ;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > p{
                padding-left:0 !important;
                padding-right:0 !important;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > ul{
                padding-left:10px !important;

            }
            .section{width:104%;}
            .menu-items{padding-left:0;}
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg" />
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3>Samsung Galaxy S4 I337 16GB 4G LTE Unlocked GSM Android Cell Phone</h3>

            <!-- Precios -->
            <h6 class="title-price"><small>OFFER PRICE</small></h6>
            <h3 style="margin-top:0px;">N45,000</h3>

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">

                <form action="#" method="post">
                    <input type="hidden" name="amount" value="45000" />
                    <button type="submit" class="btn btn-success" name="pay"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Pay Now</button>
                </form>

            </div>
        </div>




    </div>
</div>
</body>

<footer>
</footer>
</html>



