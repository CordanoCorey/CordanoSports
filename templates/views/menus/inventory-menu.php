    	<div id="inventory-nav">
            <ul id="inventory-categories">
                <?php 
                    foreach($this->inventoryLinks as $label=>$link){
                        echo "<li><a href='$link' id='inventory-$label' class='inventory-label'></a>$label</li>";
                    }
                ?>
            </ul>
                <?php $this->appLink->render(); ?>
        </div>
        
        <?php 
            foreach($this->inventoryLabels as $label){
                echo "<div id='inventory-flyout-$label' class='inventory-flyout' style='display:none;'>";
                    $this->flyouts[$label]->render();
                echo "</div>";
            }
        ?>
