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
        <div class="col-sm-8">
          <span class="m-0 text-dark" style="font-size:25px;"><strong><?php echo $users_company['user_company_nama'];?> </strong></span><span><?php echo $users_company_level['user_company_level_nama'];?> Management System</span>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><span style="font-size:13px;">Home</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Finance</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">List Bank</span></li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <div class="breadcrumb float-sm-right">
            <small><a href="" class="" data-toggle="modal" data-target="#modal-default"><span style="color:#808080;" ><i class="fas fa-exclamation-circle"></i> Info Modul</span></a></small>

          </div>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Bank</h4>
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
        <div class="col-12">
          <div class="card card-light">
            <div class="card-header">
                  <h3 class="card-title"><strong>Bank</strong></h3>
              </div>
            <div class="card-body table-responsive" style="font-size:12px;">
              <div class="col-md-12 d-xs-none" >
                <?php if ($users['level'] =='3'){ ?>
                <?php  }else{ ?>
                  <h3 class="text-right"><a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>bank/data_bank_tambahkan"><i class="fas fa-plus"></i> Add New</a></h3>
                <?php }?>
              </div>
              <table id="bank_table1" class="table table-bordered table-striped table-hover">
                <thead style="text-align: center;" >
                  <tr >
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Action</th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >No</th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Status</th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">ID</th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Description</th>
                    <th colspan="4"><center>Bank</center></th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Currency</th>
                    <th colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Blocked</th>
                  </tr>
                  <tr>
                    <th tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Account</th>
                    <th tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Name</th>
                    <th tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">Address</th>
                    <th tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">City</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    foreach ($record as $row){
                  ?>

                  <tr >
                    <td  style='padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;'>
                      <?php
                      // echo"
                      // <a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."bank/data_bank_update/$row[id]'><i class='fas fa-edit'></i></a>
                      // <a class='btn btn-danger btn-sm' title='Delete Data' href='".base_url()."bank/data_bank_delete_temp/$row[id]' onclick=\"return confirm('Are you sure want to delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                      echo"
                      <a class='btn btn-primary btn-xs' title='Edit Data' href='".base_url()."bank/data_bank_update/$row[id]'><i class='fa fa-search'></i></a>";
                      ?>
                    </td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$no++?></td>
                    <?php $rows= $this->Crud_m->view_where('dokumen_status', array('id'=> $row['status_id']))->row(); ?>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; ">
                      <?php if ($rows->id =='22'){
                          echo"<button  type='button' style='font-size:12px;' class='btn btn-success btn-xs'> $rows->description</button>";
                        }else{
                          echo "<a style='font-size:12px;' class='btn btn-default btn-xs' title='$rows->description' href='#'> $rows->description</a>";
                      }?>
                    </td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['id']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['description']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['account']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['name']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['address']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['city']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['currency']?></td>
                    <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "><?=$row['blocked']?></td>
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
