<?php

session_start();
?>
<html>

<?php
session_destroy();
 
?>
<script>
    $("#Div3").click(function(){

    window.location.replace("index.php");

});

</script>


</html>