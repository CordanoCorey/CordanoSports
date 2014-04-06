<script type="text/javascript">
    
    $(document).ready(function() {

        $('#create-<?php echo $elementClass ?>').submit(function(e){
            
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