<!DOCTYPE html>
<html>
    <head>
        <title>contact</title>
        <link href="styleSheet.css" rel="styleSheet" type="text/css">
    </head>
    <body>
        <div class="page" style="padding: 2%;">

        <img src="images/euroflora-logo.png" style="margin-left: 30%;">
        <p style="padding:10px 5%;">We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your
            request will be read and managed in real time. If you have already placed an order you can call the
            phone number dedicated to the customers, you received in the summary email</p>
            <form action="" method="">
                <div class="contactBody">
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Name*</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="name">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-25">
                            <label for="email">E-mail*</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="phone">Phone*</label>
                        </div>
                        <div class="col-75" style="display: flex; ">
                            <input type="text"  id="phone" style="margin-right: 25px;">
                            <input type="text"  id="phone" style="margin-right: 0px;" placeholder="Mobile number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="orderCode">Order code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="orderCode" placeholder="Enter the code received by email if available">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="message">Message* </label>
                        </div>
                        <div class="col-75">
                            <textarea id="message" placeholder="Describe your request accurately to receive better info.">
                            </textarea> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="attachment">Attachment </label>
                        </div>
                        <div class="col-75">
                            <input type="file"> 
                        </div>
                    </div>


                    <input type="submit" value="start" style="margin:0 auto; display: grid;"> 
                </div>
            </form>
        </div>
    </body>
</html>