
<div id="sidebar">
    <ul id="sidebar-nav">
        <li><a href="#">Sports Home</a></li>
    </ul>
    <div id="my-apps">
        <div class="titlebar">
            <div class="title">My Apps</div>
                <a class="button-add" href="#">ADD+</a>                
            </div>
            <div class="apps">
                <?php 
                    $apps = $_SESSION["delegate"]->getApps();
                    foreach($apps as $app){
                        echo "<button type='button'>$app</button>";
                    }
                ?>
        </div>
    </div>
</div>