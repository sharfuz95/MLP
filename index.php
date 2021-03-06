<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Meliora LaunchPad</title>
        <link type="text/css" rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif|Playfair+Display" rel="stylesheet">
</head>

	<body>
         
    <?php include "inc/nav.inc"; ?>
   

		<div class="center">
            <img src="images/mlp-center.jpg" alt= "picture at harvard conference">
        </div>
        
        <div class="home-grid-container">

        <div class="home-grid-item">
            <h1> About</h1>
            <p>
                    Meliora Launchpad is a student run organization that aims to assist students in exploring entrepreneurship. We plan to provide a platform where students can initiate project ideas and work in team-based setting. 
                    We provide a learning environment where we can explore the qualities of an entrepreneur and cultivate them among our community members. We will connect the students to all the relevant resources available on campus and in the greater Rochester community. 
                    Meliora Launchpad aims to provide the personal development for our members therefore upon graduation, they will possess the qualities of self-confidence, skills, network and passion to start their own entrepreneurial endeavors.
                </p>
        </div>

        <div class = "home-grid-item">
            <h1> Our Beliefs</h1>
            <p>
                We believe entrepreneurship is not merely the process to start a business.
                It's a mindest and a way of looking at the world.
                Its about understanding the norms, understanding people and their problems.
                Its about thinking outside the box and innovated. Its about working with
                people with similar dreams and diverse skills.
                Finally, its about willing to fail and be excited about the risk.
                At Meliora LaunchPad, we foster that similar spirit. As Steve Jobs
                once said, "People who are crazy enough to think they can change the world are the ones who do it!"
            </p>
        </div>


        <div class = "home-grid-item" id="join">
                <h1> Interested in Entrepreneurship?</h1>
                <h2> Lets get in touch!!!!</h2>
                <form>
                        First name:<br>
                        <input type="text" name="firstname">
                        <br>
                        Last name:<br>
                        <input type="text" name="lastname">
                        <br>
                        Email:<br>
                        <input type="text" name="email">
                        <br>
                        <button> Join Newsletter </button>

                 </form>


            </div>
    
    </div>


        <?php include "inc/footer.inc"; ?>


	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/menu-highlighter.js"></script>
	</body>

</html>