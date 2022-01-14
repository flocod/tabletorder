<?php
session_start();

$pseudo=$_SESSION["pseudo"];

session_destroy();
?>
<script type="text/javascript">
       window.location.replace("../index.php?info=Au revoir <?php echo $pseudo ?>");
</script>
<?php



?>
