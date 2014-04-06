

<?php include 'includes/meta.php'; ?>

<body>
    
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        
        <?php include 'includes/sidebar.php'; ?>
        
        <div id="main">
            
            <?php include 'includes/ticker.php'; ?>
            
                <?php $view->render(); ?>
            
            <?php include 'includes/footer.php'; ?>
            
        </div>
        
    </div>
        
</body>

<script type="text/javascript" src="js/initialize.js"></script>

<script type="text/javascript" src="js/layouts/topic-layout.php"></script>

</html>
