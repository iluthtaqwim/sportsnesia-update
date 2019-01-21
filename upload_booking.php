<?php
            include "db.php";
            session_start();
            $id = $_GET['id'];

            $user = $_SESSION['username'];
            $dt = $_POST['dt'];
            $jam = $_POST['jam'];
            $durasi = $_POST['durasi_sewa'];
            

            $query = mysqli_query($con,"insert into booking values('','$dt','$jam','$durasi','$user','$id')");

            if ($query) {
                echo " <script>
                alert('Anda Berhasil Menyewa')
                window . location = 'pembayaran.php'
                </script> ";
            } else {
                echo " <script> alert('Gagal Menyewa')
                window . location = 'form_booking.php'
                </script> ";
            }
        ?>