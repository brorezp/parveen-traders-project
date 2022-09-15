<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2><?= $title ?></h2>
      <hr>
      
      <div class="row">
        <div class="col-md-5 mb-3">
          <div class="card border-success">
            <div class="card-body text-success">
                Tutup Sidebar untuk mendapatkan hasil maksimal
            </div>
          </div>
        </div>

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

      <?php if(session()->get('pesan') != null) :?>


        <div class="col-md-8">
          <div class="card border-danger">
            <div class="card-body text-danger">
                <?= session()->get('pesan'); ?>
            </div>
          </div>
        </div>

      <hr>

      <?php endif; ?>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Date Plan</th>
                  <th scope="col">Pair</th>
                  <th scope="col">TimeFrame</th>
                  <th scope="col">Action</th>
                  <th scope="col">Price</th>
                  <th scope="col">StopLoss</th>
                  <th scope="col">Point</th>
                  <th scope="col">Chart</th>
                  <th scope="col">TP-1</th>
                  <th scope="col">TP-2</th>
                  <th scope="col">TP-3</th>
                </tr>
              </thead>
              <tbody>
            <?php $no = 1; ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= date("d-m-Y", strtotime($row['date']));?></td>
                  <td><?= $row['pair']; ?></td>
                  <td><?= $row['timeframe']; ?></td>
                  <td class="bg-<?= $row['position']; ?>"><?= $row['position']; ?></td>
                  <td><?= $row['price']; ?></td>
                  <td><?= $row['stoploss']; ?></td>
                  <td><?= $row['point']; ?></td>
                  <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?=$row['id'];?>">
                          Chart
                      </button>
                  </td>
                  <td>
                <?php if ($row['hit-1'] == '') : ?>
                      <h6>Running</h6>
                    
                <?php else : ?> 
                      <button type="button" class="btn btn-<?= $row['hit-1'] == 'hit-tp-1' ? 'success' : '' ?><?= $row['hit-1'] == 'hit-sl-1' ? 'danger' : '' ?><?= $row['hit-1'] == '' ? 'warning' : '' ?>" data-toggle="modal" data-target="#exampleModal<?=$row['id'];?>-<?=$row['hit-1'];?>">
                        <?= $row['hit-1'] == 'hit-tp-1' ? 'HIT TP' : '' ?>
                        <?= $row['hit-1'] == 'hit-sl-1' ? 'HIT SL' : '' ?>
                        <?= $row['hit-1'] == '' ? 'FLOATING' : '' ?>
                      </button>
                <?php  endif ?>
                  </td>
                  <td>
                <?php if ($row['hit-2'] == '') : ?>
                      <h6>Running</h6>
                    
                <?php else : ?> 
                      <button type="button" class="btn btn-<?= $row['hit-2'] == 'hit-tp-2' ? 'success' : '' ?><?= $row['hit-2'] == 'hit-sl-2' ? 'danger' : '' ?><?= $row['hit-2'] == '' ? 'warning' : '' ?>" data-toggle="modal" data-target="#exampleModal<?=$row['id'];?>-<?=$row['hit-2'];?>">
                        <?= $row['hit-2'] == 'hit-tp-2' ? 'HIT TP' : '' ?>
                        <?= $row['hit-2'] == 'hit-sl-2' ? 'HIT SL' : '' ?>
                        <?= $row['hit-2'] == '' ? 'FLOATING' : '' ?>
                      </button>
                <?php  endif ?>
                  </td>
                  <td>
                <?php if ($row['hit-3'] == '') : ?>
                      <h6>Running</h6>
                    
                <?php else : ?> 
                      <button type="button" class="btn btn-<?= $row['hit-3'] == 'hit-tp-3' ? 'success' : '' ?><?= $row['hit-3'] == 'hit-sl-3' ? 'danger' : '' ?><?= $row['hit-3'] == '' ? 'warning' : '' ?>" data-toggle="modal" data-target="#exampleModal<?=$row['id'];?>-<?=$row['hit-3'];?>">
                        <?= $row['hit-3'] == 'hit-tp-3' ? 'HIT TP' : '' ?>
                        <?= $row['hit-3'] == 'hit-sl-3' ? 'HIT SL' : '' ?>
                        <?= $row['hit-3'] == '' ? 'FLOATING' : '' ?>
                      </button>
                  <?php  endif ?>
                  </td>
                  
                </tr>


                <!-- Modal -->
            <?php include 'chart.php' ?>
            <?php include 'tp-1.php' ?>
            <?php include 'tp-2.php' ?>
            <?php include 'tp-3.php' ?>

            <?php endforeach ?>
              </tbody>
            </table>
              
          
            </div>
          </div>
        </div>
      </div>

      
      <hr>

       
<?= $this->endSection(); ?>
