<div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <form action="" class="form-signin" method="post"> 
              <h3 class="">DAFTAR AKUN</h3>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="mb-3 mt-3">
                    <table for="" class="form-label">id</table>
                      <input type="number" name="id" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <table for="" class="form-label">Nama</table>
                      <input type="text" name="NamaUser" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" require >
                    </div>
                    <div class="mb-3">
                            <label for="level" class="form-label">Level<span style="color: red;"> *</span></label>
                            <select class="form-control" name="Level" id="level">
                                <option value="">Pilih Level</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                    
                      <button name="daftar" class="btn btn-primary">Daftar</button>
                      
                    </div> 
                  </form>
                  <?php
    include_once("../koneksi/koneksi.php");
    if(isset($_POST['daftar'])) {
    $id = $_POST['id'];
		$NamaUser = $_POST['NamaUser'];
		$Password = MD5($_POST['password']);
    $Level = $_POST['Level'];
		$result = mysqli_query($koneksi, "INSERT INTO user (UserID, NamaUser,Password,Level) VALUES('$id','$NamaUser','$Password','$Level')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php?page=user'>View Users</a>";
	}


?>
                </div>
            </div>
          </div>
        </div>
      </div>