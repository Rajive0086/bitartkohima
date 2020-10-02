<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
$role = $userInfo->role;
?>
<?php $this->load->view('common/css'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
      <h1>
      <p class=has-text-warning><a href="#" class="sidebar-toggle heading has-text-info" data-toggle="push-menu" role="button">
      <i class="fal fa-arrow-to-left ">Slide Menu</i>
          </a></p>
        <i class="fa fa-user-circle"></i> My Profile
        <small>View or modify information</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="columns">
            <!-- left column -->
            <div class="column is-one-third">
              <!-- general form elements -->
                <div class="box is-warning">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/dist/img/avatar.png" alt="User profile picture">
                        <h3 class="profile-username text-center"><?= $name ?></h3>

                        <p class="text-muted text-center"><?= $role ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right"><?= $email ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Mobile</b> <a class="pull-right"><?= $mobile ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <div class="column is-one-third">
                <div class="tabs is-small">
                    <ul>
                        <li class="tablinks is-active" onclick="openTab(event,'Details')"><a>Details</a></li>
                        
                        <li class="tablinks" onclick="openTab(event,'change_password')"><a>Change password</a></li>
                        
                    </ul>
                </div>
                <div id="Details" class="tabcontent">
                    <form action="<?php echo base_url() ?>profileUpdate" method="post" id="editProfile" role="form">
                        <?php $this->load->helper('form'); ?>
                        <div class="field">
                            <div class="control">
                                <p>Name
                                <input class="input is-primary" type="text" id="fname" name="fname" placeholder="<?php echo $name; ?>" value="<?php echo set_value('fname', $name); ?>" >
                                <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" /> 
                                </p>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <p>Mobile Number
                                <input class="input is-primary" type="text" id="mobile" name="mobile" placeholder="<?php echo $mobile; ?>" value="<?php echo set_value('mobile', $mobile); ?>" >
                                <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" /> 
                                </p>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <p>Email
                                <input class="input is-primary" type="text" id="email" name="email" placeholder="<?php echo $email; ?>" value="<?php echo set_value('email', $email); ?>" >
                                <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" /> 
                                </p>
                            </div>
                        </div>
                        
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
                <div id="change_password" class="tabcontent">
                    <form role="form" action="<?php echo base_url() ?>changePassword" method="post">
                        <div class="field">
                            <div class="control">
                                <p>Old Password
                                <input class="input is-primary" type="text" id="inputOldPassword" placeholder="Old password" name="oldPassword" maxlength="20" required >
                                <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" /> 
                                </p>
                            </div>
                            
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control">
                                <p>New Password
                                <input class="input is-primary" type="text" id="inputPassword1" placeholder="New password" name="newPassword" maxlength="20" required >
                               
                                </p>
                            </div>
                            
                        </div>
                        <div class="field">
                            <div class="control">
                                <p>Confirm New Password
                                <input class="input is-primary" type="text" id="inputPassword2" placeholder="Confirm new password" name="cNewPassword" maxlength="20" required>
                               
                                </p>
                            </div>
                            
                        </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>
<?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->	
<script>
$(() => {
  $('#edit-preferences').click(function(){
   $('#edit-preferences-modal').addClass('is-active');
  });
  $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){
    $('#edit-preferences-modal').removeClass('is-active');
  });
});
</script>
