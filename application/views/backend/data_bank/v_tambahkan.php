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
        <div class="col-sm-7">
          <span class="m-0 text-dark" style="font-size:25px;"><strong><?php echo $users_company['user_company_nama'];?> </strong></span><span><?php echo $users_company_level['user_company_level_nama'];?> Management System</span>
        </div>
        <div class="col-sm-5">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><span style="font-size:13px;">Home</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Finance</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">Add Bank</span></li>
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
              <div class="col-sm-6 text-lg-left text-xs-center float-left" style="padding-left: 0px !important;">
                <span>Bank</span> <small>Add New</small>
              </div>
            </div>
            <!-- /.card-header -->


            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('bank/data_bank_tambahkan',$attributes); ?>
              <div class="card-body" style="font-size: 12px;">
                <div class="form-group">

                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="id" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="description" style="font-size: 12px;" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Currency</label>
                        <div class="col-sm-10">
                          <select style="font-size: 12px;"  name='currency' class="form-control select2" style="width: 100%;">
                            <option value=''></option>
                          <?php foreach ($records_currency as $row) {
                            if ($rows['currency'] == $row['name']){
                              echo"<option selected='selected' value='$row[name]'>$row[name]</option>";
                            }else{
                              echo"<option value='$row[name]'>$row[name]</option>";
                            }
                          } ?>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Account Bank</label>
                        <div class="col-sm-10">
                          <input style="font-size: 12px;"  type="text" class="form-control" name="account">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Bank</label>
                        <div class="col-sm-10">
                          <input style="font-size: 12px;"  type="text" class="form-control" name="name" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address Bank</label>
                        <div class="col-sm-10">
                          <textarea style="font-size: 12px;"  class="form-control" rows="3" name="address" style="height: 55px;"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">City Bank</label>
                        <div class="col-sm-10">
                          <input style="font-size: 12px;"  type="text" class="form-control" name="city" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer">
                <a class="btn btn-outline-info" title="batal" href="<?php echo base_url()?>bank"><i class="fab fa-creative-commons-sa"></i> Back</a>
                <button type="submit" name ="submit" class="btn btn-primary" title="Submit"><i class="fas fa-save"></i> Submit</button>

              </div>
                <?php echo form_close(); ?>


          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
