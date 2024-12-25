<?= $this->extend('admin/template') ?>

<?= $this->section('main')?>

<?= $this->endSection();?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <tablen class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Harga</th>
                         </tr>
                      </thead> 
                     </tbody>
                     <?php foreach($books as $book):?>
                        <tr>
                            <th scope="row"><?= $book['id']?></th>
                            <th scope="row"><?= $book['judul']?></th>
                            <th scope="row"><?= $book['pengarang']?></th>
                            <th scope="row"><?= $book['penerbit']?></th>
                            <th scope="row"><?= $book['tahun']?></th>
                            <th scope="row"><?= $book['cover']?></th>
                            <th scope="row"><?= $book['harga']?></th>
                          </tr>
                          <?php endforeach;?>

                    
                        <div class="alert alert-success">
                            <?= $_SESSION['success']; ?>
                        </div>
                    <?php
                        endif;
                        session_destroy();
                    ?>
                </div>
                <div class="my-3">
                    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php foreach($dataModel->getKolomTabel() as $kolom):?>
                                <th scope="col"><?php echo $kolom;?></th>
                            <?php endforeach?>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    <?php foreach($dataModel->getData() as $buku):?>
                        <tr>
                            <td><?php echo ++$no?></td>
                            <td><?php echo $buku->getJudul(); ?></td>
                            <td><?php echo $buku->getPengarang(); ?></td>
                            <td><?php echo $buku->getPenerbit(); ?></td>
                            <td><?php echo $buku->getTahun(); ?></td>
                            <td>
                                <a href="/index.php/edit?id=<?= $buku->getId() ?>" class="btn btn-sm btn-success"><i class="bi-pencil-square"></i> Edit</a>
                                <button data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="<?= $buku->getId() ?>" class="btn btn-sm btn-danger"><i class="bi-trash"></i> Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('admin/daftar-buku')?>" id="formTambah"
                <div class="mb-3">
                    <label for="cover">Judul</label>
                    <input type="file" name="judul" id="judul" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" class="form-control">
                </div> 
                <div class="mb-3">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/hapus" method="POST" id="formHapus">
            <input type="hidden" name="id" id="idHapus" value="">
        </form>
        <p class="">Apakah anda yakin menghapus data dengan id <span id="textId"></span> ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        var hapusModal = document.getElementById('hapusModal')
            hapusModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var idHapus = hapusModal.querySelector('#idHapus')
            var textId = hapusModal.querySelector('#textId')

            idHapus.value = id;
            textId.textContent = id;

            })
    </script>
  </body>
</html>
