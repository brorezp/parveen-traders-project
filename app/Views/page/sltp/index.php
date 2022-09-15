<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2><?= $title ?></h2>
      <hr>
      
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-sltp">
        Add Data
      </button>

      <hr>
      
      <div class="row">
        <div class="col-md-12" id="result_sltp">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Pair</th>
                <th scope="col">Timeframe</th>
                <th scope="col">Position</th>
                <th scope="col">Price</th>
                <th scope="col">StopLoss</th>
                <th scope="col">Margin Point</th>
                <th scope="col">TP-1</th>
                <th scope="col">TP-2</th>
                <th scope="col">TP-3</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          <tbody>
  <?php $no = 1; ?>
            <?php foreach ($sltp as $row) : ?>
            <tr>
              <td><?= $no++ ?></td>
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
                <!-- <button class="btn btn-success">
                  Add to Active Plan ?
                </button> -->
                <a href="sl-tp-calculator/add-active/<?= $row['id']; ?>" class="btn btn-primary" onclick="return confirm('ingin Aktifkan Perhitungan ini ?')">Aktif</a>
                <a href="sl-tp-calculator/delete/<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('ingin Delete Perhitungan ini ?')">Delete</a>
              </td>
            </tr>
            <?php endforeach ?>

          </tbody>
        </table>
        </div>
      </div>

      <hr>

<?php include('add.php'); ?>


      <?= $this->endSection(); ?>
