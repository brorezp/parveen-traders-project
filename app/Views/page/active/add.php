<!-- Modal -->
<div class="modal fade" id="add-active-plan" tabindex="-1" role="dialog" aria-labelledby="add-sltpLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-sltpLabel">Add Active Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form class="row" action="/active-plan/save" method="POST">
        <?php csrf_field(); ?>
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

    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>