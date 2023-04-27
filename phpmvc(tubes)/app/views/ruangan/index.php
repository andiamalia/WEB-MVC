
<style>
    button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }
  
  .edit {
    background-color: #008CBA; /* Blue */
  }
  
  .hapus {
    background-color: #f44336; /* Red */
  }

  .th {
    text-align: center;
  }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Daftar Ruangan</h2>
        </div>
        <div class=tabel>
        <div class="table-responsive">
            <table class="table  table-sm table-bordered">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
              Tambah Data
            </button>
            <br></br>
            <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Id Ruangan</th>
                  <th scope="col">Nama Ruangan</th>
                  <th scope="col">Kuota Ruangan</th>
                  <th scope="col">Status Ruangan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach( $data['ruangan'] as $index => $ruangan):?>
              <tr>
                  <td><?= $index + 1;?></td>
                  <td><?= $ruangan['id_ruangan'];?></td>
                  <td><?= $ruangan['nama_ruangan'];?></td>
                  <td><?= $ruangan['kuota_ruangan'];?></td>
                  <td><?= $ruangan['status_ruangan'];?></td>
                  <td>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-<?=$index?>">Edit</button>
                  <a href="<?=BASEURL;?>/Ruangan/hapus/<?=$ruangan['id_ruangan']?>" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')">
                    Hapus
                  </a>
                  <div class="modal fade" id="editModal-<?=$index?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="judulModal">Edit Data Ruangan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <form action="<?=BASEURL ?>/Ruangan/edit/<?=$ruangan['id_ruangan']?>" method="POST">
              <input type="hidden" name="id_ruangan" value="<?= $ruangan['id_ruangan']?>">
              <div class="mb-3">  
                <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                <input type="text" id="nama_ruangan" name="nama_ruangan" class="form-control"  value="<?= $ruangan['nama_ruangan']?>">
              </div>

              <div class="mb-3">
                <label for="kuota_ruangan" class="form-label">Kuota Ruangan</label>
                <input type="number" id="kuota_ruangan" name="kuota_ruangan" class="form-control"  value="<?= $ruangan['kuota_ruangan']?>">
              </div>

              <div class="mb-3">
                <label for="status_ruangan" class="form-label">Status Ruangan</label>
                <input type="number " id="status_ruangan" name="status_ruangan" class="form-control" value="<?= $ruangan['status_ruangan']?>">
              </div>
      

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" onclick="location.href='<?=BASEURL?>/Alat/edit/<?=$alat['id_barang']?>'">Edit Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>


                  </td>
              </tr>
              <?php endforeach;?>
            </tbody>
            </div>
        </div>    

      <!-- modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="judulModal">Tambah Data Ruangan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <form action="<?=BASEURL ?>/Ruangan/tambah" method="POST">
              <div class="mb-3">
                <label for="id_ruangan" class="form-label">Id Ruangan</label>
                <input type="text" id="id_ruangan" name="id_ruangan" class="form-control" placeholder="Masukkan Id Ruangan">
              </div>

              <div class="mb-3">
                <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                <input type="text" id="nama_ruangan" name="nama_ruangan" class="form-control" placeholder="Masukkan Nama Ruangan">
              </div>

              <div class="mb-3">
                <label for="kuota_ruangan" class="form-label">Kuota Ruangan</label>
                <input type="number " id="kuota_ruangan" name="kuota_ruangan" class="form-control" placeholder="Masukkan Kuota Ruangan">
              </div>

              <div class="mb-3">
                <label for="status_ruangan" class="form-label">Status Ruangan</label>
                <input type="number " id="status_ruangan" name="status_ruangan" class="form-control" placeholder="Masukkan Status Ruangan">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html> 