<?php
            include "db.php";
            session_start();

            $venue = mysqli_query($con,"select * from upload_venue where id = '".$_SESSION['id']."'");
            $row_venue = mysqli_fetch_array($venue);

        if(isset($_POST['submit'])){
            
            $venue_booking = $row_venue['nama_venue'];
            $user = $_SESSION['username'];
            $dt = $_POST['tgl'];
            $jam = $_POST['jam'];
            $durasi = $_POST['durasi_sewa'];
            $gambar_booking = $row_venue['gambar_venue'];
            var_dump($row_venue['terbooking']);

            $bookings = array();
            if($row_venue['terbooking'] != ''){
                $temp = json_decode($row_venue['terbooking'],true);
                foreach($temp as $row_index){
                    array_push($bookings,$row_index);
                }
            }

            $new_booking = array("tanggal"=>$dt, "jam"=>$jam, "durasi"=>$durasi);
            array_push($bookings, $new_booking);

            $string_booking = json_encode($bookings);

            $query_bookings = mysqli_query($con, "update upload_venue set terbooking = '".$string_booking."' where id = '".$_SESSION['id']."'");
            $query = mysqli_query($con,"insert into booking(tanggal_booking,jam_booking,durasi,user_booking,venue,gambar_venue) values('$dt','$jam','$durasi','$user','$venue_booking','$gambar_booking')");

            if (isset($_POST['submit'])) {
                echo " <script>
                alert('Anda Berhasil Merubah Data')
                window . location = 'pembayaran.php?id=".$_SESSION['id']."'
                </script> ";
            } else {
                echo " <script> alert('Gagal Merubah Data')
                window . location = 'form_booking.php'
                </script> ";
            }
         
        }
        ?>