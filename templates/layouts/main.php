<?php include 'includes/meta.php'; ?>
<body>

<?php //include 'includes/header.php'; ?>
<div class="container">
    <div id="home-left">
    	<div>
        	<img src="assets/images/cordano-logo-index.png" />
        </div>
        <ul id="home-nav">
        	<li class="sign-in"><a href="#">Sign in/Create account</a></li>
            <li><a href="#">Join the game with InGame</a></li>
            <li><a href="#">Create a Fantasy League</a></li>
            <li><a href="#">Start following your favorite teams</a></li>
            <li><a href="#">Track your sports career</a></li>
        </ul>
    </div>
    <div id="home-right">
        <?php include 'includes/fanbot-search.php'; ?>
        <div class="red-wrapper">
        	<?php include 'includes/sitemap.php'; ?>
        </div>
    	<?php include 'includes/ticker.php'; ?>
        <div id="home-splash">
        	<div class="splash-text">
            	<h1>LIVE THE SPORTS LIFE</h1>
                <p>Go Wofford!</p>
                <a href="#" class="button">Create your fantasy league</a>
            </div>
        </div>
        <div class="red-wrapper">
			<div class="home-feature">
            	<img src="assets/images/feature-placeholder.jpg" />
                <div class="home-feature-copy">
                	<h3>Feature Title</h3>
                    <p>#Knickstape</p>
                </div>
                <p><a href="#" class="button">Do something button</a></p>
            </div>
        </div>
        <div class="red-wrapper">
            <div class="home-feature">
            	<img src="assets/images/feature-placeholder.jpg" />
                <div class="home-feature-copy">
                	<h3>Feature Title</h3>
                    <p>Hey grandma and grandpa!</p>
                </div>
                <p><a href="#" class="button">Do something button</a></p>
            </div>
        </div>
        <div class="red-wrapper">
			<div class="home-feature">
            	<img src="assets/images/feature-placeholder.jpg" />
                <div class="home-feature-copy">
                	<h3>Feature Title</h3>
                    <p></p>
                </div>
                <p><a href="#" class="button">Do something button</a></p>
            </div>
        </div>
    </div>  
</div>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript" src="assets/js/initialize.js"></script>

</body>