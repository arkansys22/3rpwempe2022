<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Perusahaan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Daftar Perusahaan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="col-md-12 d-xs-none">
                <h3 class="card-title"><a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>aspanel/company_tambahkan"><i class="fas fa-plus-circle"></i> Tambahkan</a></h3>
                <h3 class="text-right"><a class="btn btn-success btn-sm" title="Sampah" href="<?php echo base_url()?>aspanel/company_storage_bin">Blocked</a></h3>
              </div>
              </div>
            <div class="card-body table-responsive ">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Aksi</th>
                  <th>Account</th>
                  <th>Inisial</th>
                  <th>Nama</th>
                  <th>Header</th>
                  <th>Kategori</th>
                  <th>Status</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){


                  ?>

                <tr>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."aspanel/company_update/$row[user_company_account]'><i class='fas fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' title='Block Data' href='".base_url()."aspanel/company_delete_temp/$row[user_company_account]' onclick=\"return confirm('Yakin ingin block data ini?')\"><i class='fas fa-ban'></i></a>";
                    ?>
                  </td>
                  <td><?=$row['user_company_account']?></td>
                  <td><?=$row['user_company_judul']?></td>
                  <td><?=$row['user_company_nama']?></td>
                  <td>Non</td>
                  <td><?=$row['user_company_level_nama']?></td>
                  <td><?php if ($row['user_company_status']=='1'){
                    echo "Aktif";}else{ echo"Blocked";}?></td>

                </tr>
              <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
</div>

<?php $this->load->view('backend/bottom')?>
