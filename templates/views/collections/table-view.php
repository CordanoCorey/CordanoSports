<div class="table-view-summary">
    <table class="table-view">
      <tr class="table-view-heading">
            <?php 
                foreach($this->columnLabels as $label){
                    echo "<th>".$label->render()."</th>";
                }
            ?>
      </tr>
        <?php 
            foreach($this->tableRows as $row){
                echo "<tr class='table-view-row'>";
                foreach($row as $cell){
                    echo "<td class='table-view-cell'>".$cell->render()."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</div>
