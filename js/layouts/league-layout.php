<script type="text/javascript">
    
    $(document).ready(function() {
        
        var page = "league";
        
        $('a.view-').click(function() { 
            
            var id = $(this).attr('id');
            var dimension = str.replace("view-","");

            $.ajax({
                url: "../index.php?page=league&idLeague=<?php echo $this->idLeague; ?>&view=players",
                contentType: "application/json",
                data: creationData,
                type: 'get',
                dataType: 'json',
                success: <?php echo $successFunction;?>,
                error: <?php echo $errorFunction;?>,
                beforeSend: <?php echo $prepFunction;?>
            });
            
            e.preventDefault();

            return false; 
        });
            
        $('.view-menu-dim').click(function(e){
            
            
            $.ajax({
                url: "../index.php?page=league&idLeague=<?php echo $this->idLeague; ?>&view=players",
                contentType: "application/json",
                data: creationData,
                type: 'post',
                dataType: 'json',
                success: <?php echo $successFunction;?>,
                error: <?php echo $errorFunction;?>,
                beforeSend: <?php echo $prepFunction;?>
            });
            e.preventDefault();
        });
        
        $('#create-<?php echo $this->elementClass ?>').submit(function(e){
            
            var creationData = JSON.stringify($(this).serializeArray());
            
            $.ajax({
                url: <?php echo $successFunction;?>,
                contentType: "application/json",
                data: creationData,
                type: 'post',
                dataType: 'json',
                success: <?php echo $successFunction;?>,
                error: <?php echo $errorFunction;?>,
                beforeSend: <?php echo $prepFunction;?>
            });
            
            e.preventDefault();
            
        });
    });
    
</script>