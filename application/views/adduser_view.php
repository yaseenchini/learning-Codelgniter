<?php include("header.php"); ?>

<div class="block-flat">
          <div class="header">							
            <h3>User Registration</h3>
          </div>
          <div class="content">
             <!-- <form class="form-horizontal group-border-dashed" action="#" style="border-radius: 0px;"> -->
             <div class="form_error">
               <?php echo validation_errors(); ?>
             </div>
             <?php echo form_open_multipart('admin/register_user', ['class'=>'form-horizontal' , 'style'=>'border-radius: 0px !important;']);?>
              <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                  <!-- <input type="text" class="form-control"> -->
                  <?php echo form_input(['name'=>'username','placeholder'=>'Username','class'=>'form-control','value'=>set_value('username')]);?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                  <!-- <input type="password" class="form-control"> -->
                  <?php echo form_input(['name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>set_value('email')]);?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                  <!-- <input type="text" class="form-control" placeholder="Placeholder text"> -->
                  <?php echo form_input(['type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-control' ,'value'=>set_value('password')]);
				   ?>
                </div>
              </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Image</label>
                <div class="col-sm-6">
		            <div class="fileinput fileinput-new" data-provides="fileinput">
		                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
		                <div>
		                    <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile" value="ac"></span>
		                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
		                </div>
		            </div>
		        </div>
		    </div>
              <div class="foot">
              	<div class="form-group">
              	<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Register</button> -->
		            <div class="col-sm-2 pull-right">
		              	<?php 
		              		echo form_reset(['value'=>'Cancel','class'=>'form-control btn btn-danger']),
		              		form_submit(['value'=>'Add','class'=>'form-control btn btn-primary']);
		              	?>
              		</div>
              	</div>
              	<!-- <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button> -->
              </div>
            </form>
          </div>
        </div>


<?php include("footer.php"); ?>