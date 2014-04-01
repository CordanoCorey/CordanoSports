<div class="gallery-view">
    <?php
        foreach($this->multimedia as $mediaItem){
            echo "<div class='gallery-view-item'>".$mediaItem->render()."</li>";
        }
    ?>
</ul>
