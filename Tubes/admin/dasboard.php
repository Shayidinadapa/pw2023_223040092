<?php require('../partials/header.php')  ?>
<?php require('../partials/sidebar.php') ?>

  <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card-header">
                <div class="input-group">
                    <span><i class="bi bi-table me-2"></i>Data table</span> 
                  <form class="d-flex ms-auto my-3 my-lg-0">
                    <input
                    class="form-control"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                    />
                    <button class="btn btn-primary me-5" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                    <a href="tambah.php" class="btn btn-primary float-end"> Tambah</a>
                  </form>
              </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="example"
                      class="table table-striped data-table"
                      style="width: 100%"
                    >

                    <thead>
                      <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <!-- <?php foreach($user as $s) :?>
                      <tr>
                        <td><?= $s['id']?></td>
                        <td><?= $s['username']?></td>
                        <td><?= $s['email']?></td>
                        <td><?= $s['password']?></td>
                        <td>
                          <a href="edit.php" class="btn btn-success btn-sm mt-1">Edit</a>
                          <a href="hapus.php?id=<?= $s['id']; ?>" class="btn btn-danger btn-sm mt-1">Delete</a>
                        </td>
                      </tr>
                      <?php endforeach; ?> -->
  


<?php require('../partials/footer.php') ?>
  

</body>
</html>