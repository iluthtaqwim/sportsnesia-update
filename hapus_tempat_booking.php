<?php 
    include "db.php";
    session_start();

    $query = mysqli_query($con,"delete from upload_venue where id = '".$_GET['id']."'");

?>
    <script type="text/javascript">
      window.location = "profil_owner.php";
    </script>
