<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2><?= $title ?></h2>
      <hr>
      
    <form class="row" action="/sl-tp-calculator-post" method="post">
      <div class="form-group col-md-6">
        <label for="pair">Pair</label>
          <select class="form-control" id="pair" name="pair">
            <option>EURUSD</option>
            <option>GBPUSD</option>
            <option>USDJPY</option>
            <option>GBPJPY</option>
            <option>AUDUSD</option>
            <option>EURJPY</option>
            <option>USDCAD</option>
            <option>USDCHF</option>
            <option>AUDJPY</option>
            <option>NZDUSD</option>
            <option>EURGBP</option>
            <option>CADJPY</option>
            <option>EURAUD</option>
            <option>GBPAUD</option>
            <option>AUDCAD</option>
            <option>EURCAD</option>
            <option>CHFJPY</option>
            <option>EURCHF</option>
            <option>NZDJPY</option>
            <option>GBPCAD</option>
            <option>GBPCHF</option>
            <option>AUDCHF</option>
            <option>AUDNZD</option>
            <option>EURNZD</option>
            <option>GBPNZD</option>
            <option>XAUUSD</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="Position">Posisi</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="position" id="position" value="buy">
            <label class="form-check-label" for="buy">Buy</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="position" id="position" value="sell">
            <label class="form-check-label" for="sell">Sell</label>
          </div>
        </div>

        <!-- pindah baris -->
        <div class="form-group col-md-6">
          <label for="proximal">Proximal</label>
          <input type="text" class="form-control" id="proximal" name="proximal">
          <small id="sproximal" class="form-text text-muted">Terdekat dari Harga Sekarang</small>
        </div>

        <div class="form-group col-md-6">
          <label for="distal">Distal</label>
          <input type="text" class="form-control" id="distal" name="distal">
          <small id="sdistal" class="form-text text-muted">Terjauh dari Harga Sekarang</small>
        </div>

        <!-- pindah baris -->
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

      <hr>
      
      <div class="row">
        <div class="col-md-12" id="result_sltp">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Pair</th>
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

            <?php if (session()->getFlashdata('pesan')) : ?>
            <tr>
              <td></td>
              <td class="bg-buy">Buy</td>
              <td>1.9846</td>
              <td>1.9546</td>
              <td>300</td>
              <td>2.3000</td>
              <td>2.3000</td>
              <td>2.3000</td>
              <td>
                <button class="btn btn-success">
                  Add to Active Plan ?
                </button>
              </td>
            </tr>
            <?php endif ?>

          </tbody>
        </table>
        </div>
      </div>

      <hr>

<?= $this->endSection(); ?>
