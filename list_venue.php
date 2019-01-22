<?php
include "db.php"; 
$result = mysqli_query($con, "SELECT * FROM upload_venue order by id desc");


$i=1;
$max=6;

    foreach($result as $row){
        $booking = mysqli_query($con,"select * from booking where venue = '".$row['nama_venue']."'");
        $rows = mysqli_fetch_array($booking);
       
        ?>

<div class="col-sm-12 col-md-3">
    <div class="thumbnail" class="card">
        <div class="w3-display-container">
            <?php echo "<img width='250px' height='170px'  src='assets/images/".$row['gambar_venue']."' >";?>
            <div class="container" class="div.relative">
                <div class="w3-display-bottommiddle w3-container" class="bg-1">

                    <h3>
                        <?php echo $row['nama_venue']; ?>
                    </h3>

                    <p><i style="font-size:16px" class="fa">&#xf3c5;</i>
                        <?php echo $row['kategori']; ?>
                    </p>

                </div>
                <br>
                <p> <a href="profil_tempat_booking.php?id=<?php echo $row['id']?>" class="btn btn-success">Lihat Detail</a></p>
            </div>
        </div>
    </div>
</div>
<?php
        
    $i++;}

?>