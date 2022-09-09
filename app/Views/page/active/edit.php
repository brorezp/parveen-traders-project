<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Active Plan</h2>
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

            <form class="row" action="/active-plan/save" method="POST">
              <div class="form-group col-md-12">
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
                  <label for="timeframe">TimeFrame</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="timeframe" id="timeframe" value="1 HOUR">
                    <label class="form-check-label" for="timeframe">1 Hour</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="timeframe" id="timeframe" value="4 HOUR">
                    <label class="form-check-label" for="timeframe">4 Hour</label>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="Position">Posisi</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="position" value="BUY">
                    <label class="form-check-label" for="buy">Buy</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="position" value="SELL">
                    <label class="form-check-label" for="sell">Sell</label>
                  </div>
                </div>

                <!-- pindah baris -->
                <div class="form-group col-md-6">
                  <label for="price">Entry Price</label>
                  <input type="text" class="form-control" id="price" name="price" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="stoploss">Stoploss</label>
                  <input type="text" class="form-control" id="stoploss" name="stoploss" required>
                </div>

                <div class="form-group col-md-12">
                  <label for="chart">Link Chart</label>
                  <input type="text" class="form-control" id="chart" name="chart" required>
                </div>

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </form>              
          
            </div>
          </div>
        </div>
      </div>

      
      <hr>

<?php include('add.php'); ?>
       
       
<?= $this->endSection(); ?>
