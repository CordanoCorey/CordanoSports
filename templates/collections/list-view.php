

<ul class='list-view'>
    <?php
        foreach($this->rows as $row){
            echo "<li class='list-view-row'>".$row->render()."</li>";
        }
    ?>
</ul>
