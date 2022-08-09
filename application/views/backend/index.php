<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="Arkansys" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Management System | Log In</title>
  	<?php $this->load->view('backend/metapanel')?>
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">

    <div class="card-body login-card-body">
      <div class="login-logo">
          <a href="<?php base_url ()?>login"><img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" class="brand-image" width="100%"></a>
      </div>
    <center><?php echo $this->session->flashdata('user_registered'); ?>
    <?php echo $this->session->flashdata('login_failed'); ?>
    <?php echo $this->session->flashdata('user_loggedout'); ?>
  </center>
      <?php echo form_open('login'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-user" aria-hidden="true" ></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3"  id="show_hide_password" >
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-addon">
            <div class="input-group-text">
                <a href=""><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
          </div>
          <!-- /.col -->


          <!-- /.col -->
        </div>
      </form>
      <?php echo form_close(); ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php $this->load->view('backend/js')?>
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
</body>
</html>
