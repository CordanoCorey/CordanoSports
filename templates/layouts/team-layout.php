

<?php include 'includes/meta.php'; ?>

<body>
    
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        
        <?php include 'includes/sidebar.php'; ?>
        
        <div id="main">
            
            <?php include 'includes/ticker.php'; ?>
            
            <?php $_SESSION["view"]->render(); ?>
            
            <?php include 'includes/footer.php'; ?>
            
        </div>
        
    </div>
        
</body>

<script type="text/javascript">
    
    <?php $_SESSION["view"]->observe();?>
        
</script> 

</html>
