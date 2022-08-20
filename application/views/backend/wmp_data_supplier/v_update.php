
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
            <li class="breadcrumb-item"><span style="font-size:13px;">Purchasing</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">Update Supplier</span></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-xs-12">
          <!-- general form elements -->
          <div class="card card-light">
            <div class="card-header">
              <h3 class="card-title"><strong>Supplier</strong> <small>Update</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart
            ('cash/update',$attributes); ?>

            <div class="card-body">
              <div class="form-group" style="font-size: 12px;">
                <input type="hidden" name="wmp_supplier_session" value="<?php echo $rows['wmp_supplier_session'] ?>">
                <input type="hidden" name="wmp_supplier_bizacc" value="<?php echo $users_company['user_company_account'] ?>">
                <input type="hidden" name="wmp_supplier_acc_no" value="<?php echo $rows['wmp_supplier_acc_no'] ?>">
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Account</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_acc_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NPWP No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_acc_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">HP No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fax</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="wmp_supplier_no" required="required">
                        </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PPN</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </div>
                        <label class="col-sm-2 col-form-label">PPh 23</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option></option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pay. Method</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option></option>
                            <option>CBD</option>
                            <option>COD</option>
                            <option>TOP</option>
                          </select>
                        </div>
                        <label class="col-sm-2 col-form-label">TOP</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="" placeholder="Days">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Start TOP</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option></option>
                            <option>INVOICE RECEIPT</option>
                            <option>GOODS RECEIPT</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Note</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" style="height: 55px;"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Attachment</label>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-default btn-info btn-xs disabled"><i class="fas fa-plus" ></i> Add</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-default btn-info btn-xs disabled"><i class="fas fa-plus" ></i> Add</button>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" class="btn btn-default btn-info btn-xs disabled"><i class="fas fa-plus" ></i> Add</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-outline-info" title="Back" href="<?php echo base_url()?>wmpsupplier"><i class="fab fa-creative-commons-sa"></i> Back</a>
              <button type="submit" name ="submit" class="btn btn-primary" title="Submit"><i class="fas fa-file-upload"></i> Submit</button>
            </div>
            <?php echo form_close(); ?>



            <div class="card-body">
              <table id="log_history" class="table table-responsive-xl col-12 table-bordered table-striped p-0">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Module</th>
                  <th>Document No</th>
                  <th>Activity</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Access by</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $record= $this->Erp_m->view_join_ordering_trace('log_activity','user','log_activity_user_id','id_user',array('log_activity_bizacc'=>$users_company['user_company_account'],'log_activity_modul'=>'Cash', 'log_activity_document_no'=>$rows['wmp_supplier_session'] ),'log_activity_id','DESC');
                foreach ($record as $row){
                  $tgl_posting = $this->mylibrary->tgl_indo($row['log_activity_waktu']);
                ?>
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$row['log_activity_modul']?></td>
                  <td><?=$row['log_activity_document_no']?></td>
                  <td><?=$row['log_activity_status']?></td>
                  <td><?=$row['username']?></td>
                  <td><?=$tgl_posting?></td>
                  <td><?=substr($row['log_activity_platform'],0,14)?></td>
                </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>


          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
