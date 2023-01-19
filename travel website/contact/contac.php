
<html>

     <head>
         <title> Contact from</title>
         <link rel="stylesheet" type="text/css" href="styl.css">

    </head>

    <body>

        <div class="contact-title">

            <h1>Contact us</h1>
            <h2>we are always ready to serve you! </h2>
        </div>
        <from class="contact-from">
            <from id="Contact-from" method = "post" action="contact.php"></from>
            <input name="name"type="text" class="from-control" placeholder="Your Name"requred>
            <br>
            <input name="email"type="email" class="from-control" placeholder="Your email"requred>
            <br>

         
            <textarea name="message" class=placeholder="from-control"  placeholder="Message" row="4" requred></textarea>
            <br>
            <input type="submit" class="from-control submit" value="Submit">
            

        </from>

        </div>
    </body>

    
</html>