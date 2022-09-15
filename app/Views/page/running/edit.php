<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2><?= $title; ?></h2>
      <hr>
      
      <div class="row">

        <div class="col-md-7">

        </div>

        <div class="col-md-8">
          <div class="card border-danger">
            <div class="card-body text-danger">
                Informasi di halaman ini hanya bertujuan untuk demonstrasi dan edukasi saja. <br>
                Parveen Traders tidak bertanggungjawab terhadap hasil apapun karena halaman ini.
            </div>
          </div>
        </div>

        <div class="col-md-4">
          &nbsp
        </div>

      </div>

      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

            <form class="row" action="/running-transaction/update" method="POST">
              <?= csrf_field() ?>
              <input type="hidden" class="form-control" id="id_field" name="id" value="<?= $row['id']; ?>">

                <!-- pindah baris -->
              <div class="col-md-6">
                <div class="form-group col-md-12">
                  <label for="tp-1">Tp 1</label>
                  <input type="text" class="form-control" id="tp-1" name="tp-1" value="<?= $row['tp-1']; ?>">
                </div>

                <div class="form-group col-md-12">
                  <label for="tp-2">Tp 2</label>
                  <input type="text" class="form-control" id="tp-2" name="tp-2" value="<?= $row['tp-2']; ?>">
                </div>

                <div class="form-group col-md-12">
                  <label for="tp-3">Tp 3</label>
                  <input type="text" class="form-control" id="tp-3" name="tp-3" value="<?= $row['tp-3']; ?>">
                </div>

                <div class="form-group col-md-12">
                  <a href="/running-transaction" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

              <div class="col-md-6">

                <div class="form-group col-md-12">
                  <label for="Position">Posisi</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-1" id="hit-1" value="hit-tp-1" <?= $row['hit-1'] == 'hit-tp-1' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-1">Hit TP</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-1" id="hit-1" value="hit-sl-1" <?= $row['hit-1'] == 'hit-sl-1' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-1">Hit SL</label>
                  </div>
                </div>
                <br>
                <div class="form-group col-md-12">
                  <label for="Position">Posisi</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-2" id="hit-2" value="hit-tp-2" <?= $row['hit-2'] == 'hit-tp-2' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-2">Hit TP</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-2" id="hit-2" value="hit-sl-2" <?= $row['hit-2'] == 'hit-sl-2' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-2">Hit SL</label>
                  </div>
                </div>
                <br>

                <div class="form-group col-md-12">
                  <label for="Position">Posisi</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-3" id="hit-3" value="hit-tp-3" <?= $row['hit-3'] == 'hit-tp-3' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-3">Hit TP</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hit-3" id="hit-3" value="hit-sl-3" <?= $row['hit-3'] == 'hit-sl-3' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="hit-3">Hit SL</label>
                  </div>
                </div>

              </div>
              
            </form>              
          
            </div>
          </div>
        </div>
      </div>

      
      <hr>

<?= $this->endSection(); ?>
