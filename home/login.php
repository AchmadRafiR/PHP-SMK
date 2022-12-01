        <div class="row">

            <div class="col-4 mx-auto mt-4">

                <div class="mb-3">
                    <form action="" method="post">
                        <div>

                            <h3>Login Pelanggan</h3>

                        </div>
                        <div class="mb-3 ">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>

                        <div>
                            <input type="submit" name="login" value="login" class="btn btn-dark">
                        </div>
                    </form>
                </div>

            </div>

        </div>



<?php 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";

    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<center><h3>Email atau Password Salah</h3></center>";
    }else {
        $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
        $row=$db->getITEM($sql);

        $_SESSION['pelanggan']=$row['email'];
        $_SESSION['idpelanggan']=$row['idpelanggan'];
        
        header("location:index.php");
    }

}

?>