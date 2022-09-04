<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Review Trading Plan</h2>
      <hr>
      
      <div class="row">
        

        <div class="col-md-6">
          <div class="card border-success">
            <div class="card-body text-success">
                Informasi di halaman ini bertujuan untuk membantu Trader berkembang lebih baik, <br>
                serta belajar dari kesalahan yang telah lalu.
            </div>
          </div>
        </div>

      </div>

      <hr>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Access</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Trade Review Juni 2022</td>
                    <td>VIP</td>
                    <td>
                      <button type="button" class="btn btn-info">Go Page</button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">1</th>
                    <td>Trade Review Mei 2022</td>
                    <td>VIP</td>
                    <td>
                      <button type="button" class="btn btn-info">Go Page</button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">1</th>
                    <td>Trade Review April 2022</td>
                    <td>VIP</td>
                    <td>
                      <button type="button" class="btn btn-info">Go Page</button>
                    </td>
                  </tr>
                </tbody>
              </table>
          
            </div>
          </div>
        </div>
      </div>

      <hr>
       
<?= $this->endSection(); ?>
