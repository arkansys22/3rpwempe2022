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
            <li class="breadcrumb-item"><span style="font-size:13px;">Logistic</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">List Material</span></li>
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
            <h4 class="modal-title">Material</h4>
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
              <div class="col-lg-3">
                <h3 class="card-title"><strong>Material</strong> <small><a href="" class="" data-toggle="modal" data-target="#modal-default"><span style="color:#b0d12a;" ><i class="fas fa-exclamation-circle"></i></span></a></small>
                  <?php echo $rows['material_list_no']?>

                </h3>
              </div>
              <div class="col-lg-12 text-right">
                <?php echo $rowd['category_list_description']?>
              </div>

            </div>

            <div class="card-body table-responsive">
              <?php $categori_material= $this->Crud_m->view_where_result('category_list', array('category_list_company_account'=>$users_company['user_company_account'],'category_list_reff'=>'Material')) ?>
              <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('material',$attributes); ?>
              <div class="row">
                <?php if ($users['level'] =='3'){ ?>
                  <?php  }else{ ?>
                      <div class="col-lg-1">
                        <span style="font-size:15px;"><strong>Category</strong></span>
                      </div>
                      <div class="col-lg-3 col-xs-8">
                        <div class="input-group">
                          <select name='material_list_no' class="form-control select2 rounded-0" style="width: 100%;">
                            <option value=''></option>
                            <?php foreach ($categori_material as $row) {
                              if (empty($rows['material_list_no'])) {
                                echo"<option value='$row[category_list_code]'>$row[category_list_code] | $row[category_list_description]</option>";
                              }elseif ($rows['material_list_no'] == $row['category_list_code']){
                                echo"<option selected='selected' value='$row[category_list_code]'>$row[category_list_code] | $row[category_list_description]</option>";
                              }else{
                                echo"<option value='$row[category_list_code]'>$row[category_list_code] | $row[category_list_description]</option>";
                              }
                            } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-1 col-xs-1">
                        <div class="input-group">
                            <button type="submit" name ="submit" title="Search" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <h3 class="text-right">
                          <?php if(empty($rowd['category_list_description'])){ ?>                            
                          <?php }else{ ?>
                            <a class="btn btn-success btn-sm" title="Add" href="<?php echo base_url()?>material/add/<?php echo $rowd['category_list_code']?>"><i class="fas fa-plus"></i> Add New</a>
                            <a class="btn btn-primary btn-sm" title="Export" href="<?php echo base_url()?>"><i class="fas fa-file-export"></i> Export To Excel</a>
                          <?php } ?>
                        </h3>
                      </div>
                <?php }?>
              </div>
              <?php echo form_close(); ?>
              <br>
              <table id="bank_table1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                      <?php if ($users['level'] =='3'){ ?>
                      <?php }else{ ?>
                      <th>Action</th>
                      <?php }?>
                      <th>No</th>
                      <th>Status</th>
                      <th>ID</th>
                      <th>Description</th>
                      <th>Unit</th>
                      <th>Blocked</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $record= $this->Erp_m->view_join_2table_2filed_like('material_list','dokumen_status','material_list_status','id','material_list_bizacc',$users_company['user_company_account'],'material_list_no',$rows['material_list_no'],'material_list_id','ASC');
                   ?>

                  <?php if (empty($rows['material_list_no'])){ ?>

                  <?php }else{ ?>
                    <?php
                    $no = 1;
                    foreach ($record as $row){
                      ?>
                    <tr>
                      <?php if ($users['level'] =='3'){
                      echo "";
                        }else{
                      echo"<td><a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."cash/update/$row[material_list_session]'><i class='fas fa-edit'></i></a></td>";}?>

                      <td><?=$no++?></td>
                      <td>
                        <?php if ($row['description']!=='21'){
                        echo "<a class='btn btn-default btn-sm' title='$row[description]' href='#'> $row[description]</a>";
                          }else{
                        echo"<a class='btn btn-success btn-sm' title='Verified' href='#'> Verified</a>";}?>
                      </td>
                      <td><?=$row['material_list_no']?></td>
                      <td><?=$row['material_list_deskripsi']?></td>
                      <td><?=$row['material_list_unit']?></td>
                      <td>
                        <?php if ($row['material_list_block'] == 'Yes'){ ?>
                          <a class="btn btn-danger btn-sm" title="Block" href=""><i class="fas fa-check"></i></a>
                        <?php  }else{ ?>
                          <a class="btn btn-success btn-sm" title="Unblock" href=""><i class="fas fa-ban"></i></a>
                        <?php }?>
                      </td>

                    </tr>
                  <?php } ?>
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
