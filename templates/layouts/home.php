<?php include 'includes/meta.php'; ?>

<body>
    
<?php include 'includes/header.php'; ?>
<div class="container">
	<?php include 'includes/sidebar.php'; ?>
    <div id="main">

        <ul id="ticker">  
            <li>Ticker stuff here.</li>
        </ul>

        <div id="inventory-nav">
            
            <ul id="inventory-categories">
                <li><a href="../" id="my-hype">Hype</a></li>
                <li><a href="../?view=leagues" id="my-leagues">Leagues</a></li>
                <li><a href="../?view=teams" id="my-teams">Teams</a></li>
                <li><a href="../?view=players" id="my-players">Players</a></li>
                <li><a href="../?view=games" id="my-games">Games</a></li>
            </ul>
                
        </div>
            
        <div id="hype-flyout" style="display:none;">
            Spit out the MY FAVORITES table here
        </div>
        <div id="leagues-flyout" style="display:none;">
            Spit out the LEAGUES table here
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
        
        <div class="content">
            
           <div class="left-col">	
               <?php $view->render();?>
           </div>
            
           <div class="right-col">
                   <img src="assets/images/ad-placeholder.jpg" />
           </div>
            
       </div>   
        
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
<script type="text/javascript" src="js/initialize.js"></script>

<script type="text/javascript" src="js/layouts/home.php"></script> 
</html>