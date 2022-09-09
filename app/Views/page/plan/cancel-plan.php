<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Cancel Plan</h2>
      <hr>
      
      <div class="row">
        <div class="col-md-5 mb-3">
          <div class="card border-success">
            <div class="card-body text-success">
                Tutup Sidebar untuk mendapatkan hasil maksimals
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
                  <th scope="col">TP-1</th>
                  <th scope="col">TP-2</th>
                  <th scope="col">TP-3</th>
                  <th scope="col">Chart</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
            <?php $no = 1; ?>
            <?php foreach ($sltp as $row) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= date("d-m-Y", strtotime($row['date']));?></td>
                  <td><?= $row['pair']; ?></td>
                  <td><?= $row['timeframe']; ?></td>
                  <td class="bg-<?= $row['position']; ?>"><?= $row['position']; ?></td>
                  <td><?= $row['price']; ?></td>
                  <td><?= $row['stoploss']; ?></td>
                  <td><?= $row['point']; ?></td>
                  <td><?= $row['tp-1']; ?></td>
                  <td><?= $row['tp-2']; ?></td>
                  <td><?= $row['tp-3']; ?></td>
                  <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?=$row['id'];?>">
                          Chart
                      </button>
                  </td>
                  <td>
                    <a href="active-plan/addrunning/<?= $row['id']; ?>" class="btn btn-primary">Add Running</a>
                    <a href="active-plan/edit/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="active-plan/cancel/<?= $row['id']; ?>" class="btn btn-danger">Cancel</a>
                  </td>
                  
                </tr>
            <?php endforeach ?>
              </tbody>
            </table>
              
          
            </div>
          </div>
        </div>
      </div>

      <hr>
       
<?= $this->endSection(); ?>
