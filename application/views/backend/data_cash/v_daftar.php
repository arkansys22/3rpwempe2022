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
            <li class="breadcrumb-item active"><span style="font-size:13px;">List Cash</span></li>
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
            <h4 class="modal-title">Cash</h4>
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
              <h3 class="card-title"><strong>Cash</strong></h3>

            </div>
            <div class="card-body table-responsive " style="font-size:12px;">
              <div class="col-md-12 d-xs-none" >
                <?php if ($users['level'] =='3'){ ?>
                <?php  }else{ ?>
                  <h3 class="text-right"><a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>cash/add"><i class="fas fa-plus"></i> Add New</a></h3>
                <?php }?>
              </div>
              <table id="bank_table1" class="table table-bordered table-striped table-hover" >
                <thead >
                  <div >
                  <tr style="text-align: center;" >
                    <?php if ($users['level'] =='3'){ ?>
                    <?php  }else{ ?>
                      <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Action</th>
                    <?php }?>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >No</th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Status</th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >ID</th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Description</th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="2" rowspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  ><center>PIC</center></th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Currency</th>
                    <th aria-controls="dataTables-C" scope="colgroup" colspan="1" rowspan="2" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; "  >Blocked</th>
                  </tr>
                  <tr style="text-align: center;">
                    <th aria-controls="dataTables-C" scope="col" tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >NIK</th>
                    <th aria-controls="dataTables-C" scope="col" tabindex="0" rowspan="1" colspan="1" style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >Name</th>
                  </tr>
                  </div>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $record= $this->Erp_m->view_join_2table_2filed('finance_cash','dokumen_status','finance_cash_status','id',array('finance_cash_bizacc'=>$users_company['user_company_account']),'finance_cash_id','ASC');
                foreach ($record as $row){
                  ?>

                <tr>
                  <?php if ($users['level'] =='3'){
                  echo "";
                    }else{
                  echo"<td style='padding-top: 2px; padding-bottom: 2px; vertical-align: top; text-align: center; ' ><a class='btn btn-primary btn-xs' title='Edit Data' href='".base_url()."cash/update/$row[finance_cash_session]'><i class='fa fa-search'></i></a></td>";}?>

                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$no++?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " >
                    <?php if ($row['description']!=='21'){
                    echo "<a style='font-size:12px;' class='btn btn-default btn-xs' title='$row[description]' href='#'> $row[description]</a>";
                      }else{
                    echo"<a style='font-size:12px;' class='btn btn-success btn-xs' title='Verified' href='#'> Verified</a>";}?>
                  </td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_no']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_deskripsi']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_nik']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_nama']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_currency']?></td>
                  <td style="padding-top: 2px; padding-bottom: 2px; vertical-align: top; " ><?=$row['finance_cash_block']?>

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
