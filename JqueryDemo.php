<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
    <!-- JQuery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function(){

            $("#btn").click(function(){

                $("#result").html("welcome home!");

            });

        });
    </script>

</head>
<body>
    
    <h2>PHP JQuery On Click Example</h2>

    <input type="button" id="btn" value="Click Me">

    <p id="result"></p>



</body>
</html>