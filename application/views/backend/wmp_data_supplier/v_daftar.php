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
            <li class="breadcrumb-item"><span style="font-size:13px;">Purchasing</span></li>
            <li class="breadcrumb-item"><span style="font-size:13px;">Setting</span></li>
            <li class="breadcrumb-item active"><span style="font-size:13px;">List Supplier</span></li>
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
              <h3 class="card-title"><strong>Supplier</strong></h3>

            </div>
            <div class="col-md-12 d-xs-none" >
              <?php if ($users['level'] =='3'){ ?>
              <?php  }else{ ?>
                <p>
                  <h3 class="text-right">
                    <a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>wmpsupplier/add"><i class="fas fa-plus"></i> Add New
                    </a>
                    <a class="btn btn-info btn-sm" title="Export" href="#"><i class="far fa-file-excel"></i> Export To Excel
                    </a>
                  </h3></p>
              <?php }?>
            </div>
            <div class="card-body table-responsive" style="font-size:12px;">

              <table id="bank_table1" class="table table-bordered table-striped table-hover" >
                <thead>
                    <tr style="text-align: center;" >
                      <?php if ($users['level'] =='3'){ ?>
                      <?php  }else{ ?>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Action</th>
                      <?php }?>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >No</th>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Status</th>
                        <th   scope="colgroup" colspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><center>Supplier</center></th>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >NPWP No.</th>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Address</th>
                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >City</th>

                        <th   scope="colgroup" colspan="4" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><center>Contact</center></th>

                        <th   scope="colgroup" colspan="3" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><center>Payment</center></th>

                        <th   scope="colgroup" colspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><center>Tax</center></th>

                        <th   scope="colgroup" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Bloked</th>
                    </tr>
                    <tr>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Account</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Name</th>

                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Person</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Telp No.</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Fax No.</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Email Address</th>

                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Method</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >TOP</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >TOP Start</th>

                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >PPN</th>
                      <th   scope="col"  style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >PPH23</th>
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
                  echo"<td style='padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center; '><a class='btn btn-primary btn-xs' title='Edit Data' href='".base_url()."wmpsupplier/update/$row[wmp_supplier_session]'><i class='fas fa-edit'></i></a></td>";}?>

                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$no++?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;">
                    <?php if ($row['description']!=='21'){
                    echo "<a style='font-size:12px;' class='btn btn-default btn-xs' title='$row[description]' href='#'> $row[description]</a>";
                      }else{
                    echo"<a style='font-size:12px;' class='btn btn-success btn-xs' title='Verified' href='#'> Verified</a>";}?>
                  </td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_acc_no']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_nama']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_npwp']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_alamat']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_kota']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_cp']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_telp']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_fax']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_email']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_paymethod']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_top']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_starttop']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_ppn']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_pph23']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center;"><?=$row['wmp_supplier_block']?></td>


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
