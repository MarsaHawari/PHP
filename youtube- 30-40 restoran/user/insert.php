
<h3>insert User</h3>


<div class="form-group">

<form action="" method="post">
    <div class="form-group w-50">

        <label for="">Nama user</label>
         <input type="text" name="user" require placeholder ="isi user" class="form-control">
    </div>

    <div class="form-group w-50">

<label for="">Email</label>
 <input type="email" name="email" require placeholder ="Email" class="form-control">
</div>

<div class="form-group w-50">

<label for="">Password</label>
 <input type="password" name="password" require placeholder ="isi password" class="form-control">
</div> 


<div class="form-group w-50">

<label for="">konfirmasi password</label>
 <input type="password" name="konfirmasi" require placeholder ="isi password" class="form-control">
</div>


<div class="form-group w-50">

<label for="">Level</label><br>
 <select name="level" id="">
 
    <option value="admin">admin</option>
    <option value="admin">koki</option>
    <option value="admin">kasir</option>
 
 </select>
</div>


    <div>
        <input type="submit" name= "simpan" value="simpan" class="btn btn-primary">
    </div>



    </form>

</div>

<?php 

    if (isset ($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql="INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
       $db->runSQL($sql);
       header("location:?f=user&m=select");
        }else {
            echo "<h2>Passwor Tidak Sama dengan Konfirmasi</h2>";
        }

        

       
    }


?>