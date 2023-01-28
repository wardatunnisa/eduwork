<?php
function edit($data)
     {
          $id_toko   = $data['id_toko '];
          $nm_toko   = $this->con->real_escape_string($data['nm_toko']);
          $alamat    = $this->con->real_escape_string($data['alamat']);
          $no_hp     = $this->con->real_escape_string($data['no_hp']);

          $query  = $this->con->query("UPDATE toko SET nm_toko   ='$nm_toko', 
                                                       alamat    ='$alamat', 
                                                       no_hp     ='$no_hp' 
                                                  WHERE id_toko  ='$id_toko'");
          return $query;
     }
function cek_id($id)
     {
          $query = $this->con->query("SELECT * FROM toko WHERE id_toko ='$id'");
          if ($query->num_rows > 0) {
               return TRUE;
          } else {
               return FALSE;
          }
     }

function get_by_id($id)
     {
          $query = $this->con->query("SELECT * FROM toko WHERE id_toko ='$id'");
          return $query->fetch_array();
     }

if (!empty($_GET['id'])) {
     $id = $_GET['id'];
     if ($dt_toko->cek_id($id)) {
          $data = $dt_toko->get_by_id($id);
     } else {
          header("location:mas_toko.php");
     }
} else {
     header("location:edit_mas_tko.php?pesan=gagal");
}

if (isset($_POST['update'])) {
     $data = array(
          "id_toko" => $_POST['id_toko'],
          "nm_toko" => $_POST['nm_toko'],
          "alamat"  => $_POST['alamat'],
          "no_hp"   => $_POST['no_hp']
     );
     if ($dt_toko->edit($data)) {
          header("location:mas_toko.php?pesan=update");
     } else {
          header("location:edit_mas_tko.php?pesan=gagal");
     }
}
?>
-==untuk viewnya==-
<div class="row">
    <form id="form" name="form" method="post" action="">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ukuran_conte">Nama Toko</label>
                        <input type="text" class="form-control text-capitalize" name="nm_toko" value="<?php echo $data['nm_toko'] ?>" placeholder="off" minlength="5" autocomplete="off" autofocus required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control text-capitalize" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="off.." minlength="5" autocomplete="off" autofocus required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nomer Toko/Hp</label>
                        <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>" placeholder="off" pattern="[0-9]{11,12}" minlength="11" maxlength="12" autocomplete="off" autofocus required oninvalid="this.setCustomValidity('Number Only')" oninput="setCustomValidity('')">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="text" name="id_toko" value="<?php echo $data['id_toko']; ?>" readonly>
                <button type="submit" name="update" class="btn btn-sm btn-primary pull-right text-black"><i class="fa fa-save"> Simpan1</i></button>
            </div>
        </div>
    </form>
</div>
