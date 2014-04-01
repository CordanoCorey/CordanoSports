<link rel="stylesheet" type="text/css" href="assets/css/imgareaselect-default.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.imgareaselect.pack.js"></script>
  <script type="text/javascript">
      
    $(document).ready(function () {
        var selection = $('#photo').imgAreaSelect({
            handles: true,
            instance:true
        });

        $("#crop").click(function () {
            var width = selection.getSelection().width;
            var height = selection.getSelection().height;
            var x = selection.getSelection().x1;
            var y = selection.getSelection().y1;
            var image = $("#photo");
            var loader = $("#ajax-loader");

            var request = $.ajax({
                url: "crop.php",
                type: "GET",
                data: {
                    x: x,
                    y: y,
                    height: height,
                    width: width,
                    image: image.attr("src")
                },
                beforeSend: function () {
                    loader.show();
                }
            }).done(function (msg) {
                image.attr("src", msg);
                loader.hide();
                selection.cancelSelection();
            });
        });
    });
  </script>