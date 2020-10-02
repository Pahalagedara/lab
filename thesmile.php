<!DOCTYPE html>
<html>

<head>
    <title>thesmile</title>
    <link rel="icon" href="images/logo-small.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styleSheet.css" rel="styleSheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster+Two" /> -->
</head>

<body>
    <div class="nav">
        <div class="navLog">
            <img src="images/logo-small.png">
        </div>
        <ul class="navLink">
            <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact us</a></li>
            <li><a href="#"><i class="fa fa-th-large"></i> The florist</a></li>
            <li><a href="#"><i class="fa fa-fw fa-camera"></i> Gallery</a></li>
            <li><a href="#"><i class="fa fa-fw fa-cogs"></i> How to order</a></li>
            <li><a href="#"><i class="fa fa-fw fa-phone"></i> Order by phone</a></li>
            <li><a href="#"><i class="fa fa-fw fa-comment"></i> Chat</a></li>
        </ul>
    </div>
    <div class="page">
        <div class="item_page">
            <div class="item_page-40">

                <img src="images/the smile.jpg" style="padding: 10px;">
                <h4>Price (delivery included)</h4><br>
                <hr>
                <div class="row">
                    <div class="deliver">
                        <input type="radio" name="price" id="Standard">
                        <label for="Standard">Standard 78.90 &euro;</label>
                    </div>
                    <i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i>
                </div>
                <div class="row">
                    <div class="deliver">
                        <input type="radio" name="price" id="Deluxe">
                        <label for="Deluxe">Deluxe 98.90 &euro;</label>
                    </div>
                    <i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i>
                </div>
                <div class="row">
                    <div class="deliver">
                        <input type="radio" name="price" id="Premium">
                        <label for="Premium">Premium 118.90 &euro;</label>
                    </div>
                    <i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i>
                </div>
                <input type="submit" name="submit" class="btnSubmit" value="Total:78.90 &euro; (delivery included)" style="margin-top: 60px;">
                <br>
                <h4>The smile 78.90 &euro;</h4>
            </div>

            <div class="item_page-60">

                <h2 style="font-style:'Lobster Two';">The Smile</h2>
                <h4>Bouquet of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable for every occasion. Conveys joy.
                </h4>
                <p><i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i> Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the chosen flowers as much as possible.
                    The vase is not included. The picture usually referring the "Deluxe" arrangement.
                </p>
                <br>
                <hr>
                <br>
                <form>
                    <div class="row">
                        <div class="col-40">
                            <label for="deliveryDate" style="text-align: right;">Delivery Date*</label>
                        </div>
                        <div class="col-60">
                            <input type="date" name="deliveryDate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-40">
                            <label for="deliveryTime" style="text-align: right;">Delivery Time</label>
                        </div>
                        <div class="col-60">
                            <input type="radio" name="deliveryDate" id="workingDay">
                            <label for="workingDay">Working Day-Free(9 a.m-9 p.m.) <i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i></label><br>
                            <input type="radio" name="deliveryDate" id="otherDay">
                            <label for="otherDay">Sunday and public Holidays 4.00 &euro; <i class="fa fa-info-circle" style="font-size: 20px; color:rgb(80,60,39); margin-top:2%;"></i></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-40">
                            <label for="quantity" style="text-align: right;">Quantity*</label>
                        </div>
                        <div class="col-60">
                            <input type="number" name="quantity">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-40">
                            <label for="message" style="text-align: right;">Message</label>
                            <br>
                            <label for="message" style="font-size:10px; color: rgb(112, 109, 109);">Out of idea?<br>Choose a message!</label>
                        </div>
                        <div class="col-60">
                            <textarea rows="9" cols="40"></textarea>
                            <label for="message" style="font-size:10px; color: rgb(112, 109, 109);"><br>250 characters remaining</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-40">
                            <label for="signature" style="text-align: right;">Signature</label>
                        </div>
                        <div class="col-60">
                            <input type="text" name="signature">
                            <label for="signature" style="font-size:10px; color: rgb(112, 109, 109);"><br>If the messaged is not signed,it will be delivered anonymously</label>
                        </div>
                    </div>

                    <input type="submit" name="continue" value="continue >>" class="btnSubmit" style="float: right;">

                </form>


            </div>
        </div>
    </div>

</body>

</html>