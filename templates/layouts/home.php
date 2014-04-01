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
            <?php
                $_SESSION["view"]->render();
            ?>
        </div>
        <div class="right-col">
        	<img src="assets/images/ad-placeholder.jpg" />
        </div>
    </div>   
        
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
<script type="text/javascript">
    <?php
        $_SESSION["view"]->observe();
    ?>
</script> 
</html>