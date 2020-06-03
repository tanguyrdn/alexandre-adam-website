<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/store.css">
    <link type="text/css" rel="stylesheet" href="css/spe-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Contact</title>
</head>

<body style="background-color: #FFF;">
    <header>
    <nav class="navb nav-spe">
        <div class="logo">
            <h4 style="font-family: "Poppins", sans-serif;">Alexandre Adam</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="musics.html">Music</a></li>
            <li><a href="concerts.html">Concerts</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    </header>
    <main>
    <div class="hero" style="background-repeat: no-repeat; background: linear-gradient(black, transparent), url('image/contact-me.jpg'); background-size: cover; background-position: center center; width: 100%; opacity: 1; visibility: inherit; z-index: 20; min-height: 500px;">
        <div class="hero-content" style="color: rgb(226, 226, 226);">
            <h1 class="hero-title" style="font-family: "Poppins", sans-serif;">Contact</h1>
        </div>
    </div>
    <div class="site-section">
    <div class="site-section-inside">
        <div class="section-header">
            <h2 style="text-align: center;">Want to contact me?</h2>
        </div>
        <div class="feature-box-contact">
            <h5>
                You can contact me by sending an email, or you can fill out the form directly to send me a message.</h5>
                <br><br>
             <p><a href="mailto: alexandre&period;adam&commat;protonmail&period;com">
                alexandre.adam[at]protonmail.com
            </a></p>
        </div>
        <div class="feature-box-contact">
        <form method="post" class="wpcf7-form">
            <!--<h2 class="w3-center" style="font-family: "Poppins", sans-serif;">Contact Us</h2>-->
            <!--<div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name" required>
                    </div>
                </div>-->

            <!--<div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="email" type="text" placeholder="Email" required>
                    </div>
                </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                        <div class="w3-rest">
                    <input class="w3-input w3-border" name="message" type="text" placeholder="Message" required>
                </div>
            </div>-->
            <div class="column one">
                <!--<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>-->
                    <span class="wpcf7-form-control-wrap your-name">
                        <input class="wpcf7-form-control wpcf7-text" name="name" type="text" placeholder="Your Name" required>
                    </span>
                </div>
            <div class="column one">
                <span class="wpcf7-form-control-wrap your-email">
                    <input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text" placeholder="Email" required/>
                    </span>
                </div>
            <div class="column one">
                <span class="wpcf7-form-control-wrap your-number">
                    <input type="text" name="your-number" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Contact Number"/>
                    </span>
                </div>
            <div class="column one">
                <span class="wpcf7-form-control-wrap your-subject">
                    <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Subject" required/>
                    </span>
                </div>
            <div class="column one">
                <span class="wpcf7-form-control-wrap your-message">
                    <textarea name="your-message" value="" cols="50" rows="9" class="wpcf7-form-control wpcf7-textarea" placeholder="Write your message here" required></textarea>
                </span>
            </div>
            <div class="column one">

            </div>
            <p>&nbsp;</p>
            <div class="column one">
                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
            </div>
        </form>
        </div>
        <?php
            if (isset($_POST['your-message'])) {
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: ' . $_POST['your-email'] . "\r\n";
                
                $message = '<h1>Message envoyé depuis la page Contact du site alexandre-adam</h1>
                            <p><b>Nom : </b>' . $_POST['name'] . '<br>
                            <b>Email : </b>' . $_POST['your-email'] . '<br>
                            <b>Telephone : </b>' . $_POST['your-number'] . '<br>
                            <b>Sujet : </b>' . $_POST['your-subject'] . '<br>
                            <b>Message : </b>' . $_POST['your-message'] . '</p>';
                $position_arobase = strpos($_POST['your-email'], '@');
                if ($position_arobase === false)
                    echo '<script type="text/javascript">window.alert("Votre adresse mail est erronée.");</script>';
                else {
                $retour = mail('alexandre.adam@protonmail.com', 'Envoi depuis la page Contact', $message, $entete);
                if($retour)
                    echo '<script type="text/javascript">window.alert("Votre message a bien été envoyé.");</script>';
                else
                    echo '<script type="text/javascript">window.alert("Erreur.");</script>';
                } 
            }
        ?>
        </div>
    </div>
    </div>
    </main>
        
    
    <script src="js/app.js"></script>
</body>
</html>