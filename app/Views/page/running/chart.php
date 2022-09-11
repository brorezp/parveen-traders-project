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