

<?php include 'includes/meta.php'; ?>

<body>
    
    <?php include 'includes/header.php'; ?>
    
    <div class="container">
        
        <?php include 'includes/sidebar.php'; ?>
        
        <div id="main">
            
            <?php include 'includes/ticker.php'; ?>
            
            <div id="inventory-nav">
            
                <ul id="inventory-categories">
                    <li><a href="../" id="league-hype-nav">Hype</a></li>
                    <li><a href="../?view=leagues" id="league-teams-nav">Leagues</a></li>
                    <li><a href="../?view=teams" id="league-players-nav">Teams</a></li>
                    <li><a href="../?view=players" id="league-games-nav">Players</a></li>
                </ul>
                <a href="../?view=games" id="board-room-link">Board Room</a>
            </div>

            <div id="hype-flyout" style="display:none;">
                Spit out the MY FAVORITES table here
            </div>
            <div id="teams-flyout" style="display:none;">
                Spit out the TEAMS table here
            </div>
            <div id="players-flyout" style="display:none;">
                Spit out the PLAYERS table here
            </div>
            <div id="games-flyout" style="display:none;">
                Spit out the MY FAVORITES table here
            </div>
            
            <?php $_SESSION["view"]->render(); ?>
            
            <?php include 'includes/footer.php'; ?>
            
        </div>
        
    </div>
        
</body>

<script type="text/javascript" src="js/initialize.js"></script>

<script type="text/javascript" src="js/layouts/league-layout.php"></script>

</html>
