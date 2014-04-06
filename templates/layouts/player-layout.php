

<?php include 'includes/meta.php'; ?>

<body>
    
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        
        <?php include 'includes/sidebar.php'; ?>
        
        <div id="main">
            
            <div id="inventory-nav">
            
                <ul id="inventory-categories">
                    <li><a href="../" id="player-hype-nav">Player</a></li>
                    <li><a href="../?view=leagues" id="player-games-nav">Games</a></li>
                    <li><a href="../?view=teams" id="player-stats-nav">Stats</a></li>
                    <li><a href="../?view=players" id="player-showcase-nav">Showcase</a></li>
                </ul>
                <a href="../?view=games" id="trophy-room-link">Trophy Room</a>
            </div>

            <div id="hype-flyout" style="display:none;">
                Spit out the MY FAVORITES table here
            </div>
            <div id="games-flyout" style="display:none;">
                Spit out the MY FAVORITES table here
            </div>
            
            <?php $view->render(); ?>
            
            <?php include 'includes/footer.php'; ?>
            
        </div>
        
    </div>
        
</body>

<script type="text/javascript" src="js/initialize.js"></script>

<script type="text/javascript" src="js/layouts/player-layout.php"></script>

</html>
