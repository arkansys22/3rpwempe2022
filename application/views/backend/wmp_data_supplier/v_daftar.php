<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<?php $users= $this->Crud_m->view_where('user', array('id_user'=> $this->session->id_user))->row_array(); ?>
<?php $users_detail= $this->Crud_m->view_where('user_detail', array('id_user'=> $this->session->id_user))->row_array(); ?>
<?php $users_company= $this->Crud_m->view_where('user_company', array('user_company_id'=>$users_detail['user_detail_company']))->row_array(); ?>
<?php $users_company_level= $this->Crud_m->view_where('user_company_level', array('user_company_level_id'=>$users_company['user_company_kategori']))->row_array(); ?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <span class="m-0 text-dark" style="font-size:25px;"><strong><?php echo $users_company['user_company_nama'];?> </strong></span><span><?php echo $users_company_level['user_company_level_nama'];?> Management System</span>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><span style="font-size:13px;">Home</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Finance</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">List Supplier</span></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Supplier</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Status Verifying dan ceklis bloked  berarti menunggu verifikasi oleh Accounting</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-light">
            <div class="card-header">
              <h3 class="card-title"><strong>Supplier</strong> <small><a href="" class="" data-toggle="modal" data-target="#modal-default"><span style="color:#b0d12a;" ><i class="fas fa-exclamation-circle"></i></span></a></small></h3>

            </div>
            <div class="card-body table-responsive " style="font-size:12px;">
              <div class="col-md-12 d-xs-none" >
                <?php if ($users['level'] =='3'){ ?>
                <?php  }else{ ?>
                  <h3 class="text-right"><a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>wmpsupplier/add"><i class="fas fa-plus"></i> Add New</a></h3>
                <?php }?>
              </div>
              <table id="bank_table1" class="table table-bordered table-striped table-hover" >
                <thead>
                  <tr>
                    <?php if ($users['level'] =='3'){ ?>
                    <?php  }else{ ?>
                      <th rowspan="2">Action</th>
                    <?php }?>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Status</th>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Description</th>
                    <th colspan="2"><center>PIC</center></th>
                    <th rowspan="2">Currency</th>
                    <th rowspan="2">Bloked</th>
                  </tr>
                  <tr>
                    <th>NIK</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $record= $this->Erp_m->view_join_2table_2filed('wmp_supplier','dokumen_status','wmp_supplier_status','id',array('wmp_supplier_bizacc'=>$users_company['user_company_account']),'wmp_supplier_id','ASC');
                foreach ($record as $row){
                  ?>

                <tr>
                  <?php if ($users['level'] =='3'){
                  echo "";
                    }else{
                  echo"<td><a class='btn btn-primary btn-xs' title='Edit Data' href='".base_url()."wmpsupplier/update/$row[wmp_supplier_session]'><i class='fas fa-edit'></i></a></td>";}?>

                  <td><?=$no++?></td>
                  <td>
                    <?php if ($row['description']!=='21'){
                    echo "<a style='font-size:12px;' class='btn btn-default btn-xs' title='$row[description]' href='#'> $row[description]</a>";
                      }else{
                    echo"<a style='font-size:12px;' class='btn btn-success btn-xs' title='Verified' href='#'> Verified</a>";}?>
                  </td>
                  <td><?=$row['wmp_supplier_acc_no']?></td>
                  <td><?=$row['wmp_supplier_note']?></td>
                  <td><?=$row['wmp_supplier_npwp']?></td>
                  <td><?=$row['wmp_supplier_nama']?></td>
                  <td><?=$row['wmp_supplier_alamat']?></td>
                  <td>
                    <?php if ($row['wmp_supplier_block'] == 'Yes'){ ?>
                      <a class="btn btn-danger btn-xs" title="Block" href=""><i class="fas fa-check"></i></a>
                    <?php  }else{ ?>
                      <a class="btn btn-success btn-xs" title="Unblock" href=""><i class="fas fa-ban"></i></a>
                    <?php }?>
                  </td>

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
