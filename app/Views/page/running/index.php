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
                  <th scope="col">Action</th>
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
              <td><?= $row['tp-1']; ?></td>
              <td><?= $row['tp-2']; ?></td>
              <td><?= $row['tp-3']; ?></td>
              <td>
                <a href="active-plan/finish/<?= $row['id']; ?>" class="btn btn-warning">Finish</a>
              </td>
              
                </tr>


                <!-- Modal -->
            <div class="modal fade modal-xl" id="exampleModal<?=$row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-lg modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chart <?= $row['pair']; ?> Timeframe <?= $row['timeframe']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="text-align: center;">
                    <img src="<?= $row['chart']; ?>" width="700px">
                    <br>
                    <a href="<?= $row['chart']; ?>" target="_blank"><?= $row['chart']; ?></a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
              </tbody>
            </table>
              
          
            </div>
          </div>
        </div>
      </div>

      
      <hr>

       
<?= $this->endSection(); ?>
