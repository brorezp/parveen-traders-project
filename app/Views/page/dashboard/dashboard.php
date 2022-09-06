<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Dashboard</h2>
      <hr>
      
      <div class="row">
        <div class="col-md-3">
          <div class="card">
          <a href="active-plan" class="btn btn-primary">
            <div class="card-body">
              Total Active Plan
            </div>
            </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
              <div class="card-body">
                Curriculum This Month
              </div>
            </button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="/#" class="btn btn-warning">
            <div class="card-body">
              Lot Calculator
            </div>
            </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="sl-tp-calculator" class="btn btn-danger">
            <div class="card-body">
              SL TP Calculator
            </div>
            </a>
          </div>
        </div>

      </div>

      <hr>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quam animi, suscipit corporis commodi aspernatur non optio fuga minima, architecto doloribus voluptate similique delectus repellendus possimus quis tenetur molestias ab.
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quam animi, suscipit corporis commodi aspernatur non optio fuga minima, architecto doloribus voluptate similique delectus repellendus possimus quis tenetur molestias ab.
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quam animi, suscipit corporis commodi aspernatur non optio fuga minima, architecto doloribus voluptate similique delectus repellendus possimus quis tenetur molestias ab.
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quam animi, suscipit corporis commodi aspernatur non optio fuga minima, architecto doloribus voluptate similique delectus repellendus possimus quis tenetur molestias ab.
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quam animi, suscipit corporis commodi aspernatur non optio fuga minima, architecto doloribus voluptate similique delectus repellendus possimus quis tenetur molestias ab.
              </p>
              
          
            </div>
          </div>
        </div>
      </div>

      <hr>
      
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Curriculum September</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <img src="./assets/img/curriculum-sept.jpeg" width="400px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
       
<?= $this->endSection(); ?>
