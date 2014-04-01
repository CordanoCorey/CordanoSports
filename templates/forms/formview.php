<?php include 'includes/meta.php'; ?>
<body>

<?php include 'includes/header.php'; ?>
<div class="container">
	<?php include 'includes/sidebar.php'; ?>
    <div id="main">

<?php include 'includes/ticker.php'; ?>

<?php include 'includes/inventory-nav.php'; ?>        
        
     <div class="content">
     	<div class="left-col">	
			<form action="" method="post">
            	<p><input type="text" name="" value="" placeholder="Type here"></p>
                <p><textarea name="" placeholder="Type here"></textarea></p>
                <p><input type="checkbox" name="checkbox"> <label for="checkbox">Check here</label></p>
                <p><input type="radio" name="radiobutton"> <label for="radiobutton">Yes, I do like Cordano</label></p>
                <p><input type="submit" name="Submit" value="submit"></p>
            
			</form>
        </div>
        <div class="right-col">
        	<img src="images/ad-placeholder.jpg" />
        </div>
     </div>   
        
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript" src="js/initialize.js"></script>

</body>
</html>