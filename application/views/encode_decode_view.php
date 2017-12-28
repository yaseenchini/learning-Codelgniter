<?php include("header.php"); ?>

<div class="block-flat">
          <div class="header">							
            <h3>Encrypt data</h3>
          </div>
          <div class="content">
             <!-- <form class="form-horizontal group-border-dashed" action="#" style="border-radius: 0px;"> -->
             <!-- <div class="form_error">
               <?php echo validation_errors(); ?>
             </div> -->
             <?php echo form_open_multipart('encode_decode/encrypt_data', ['class'=>'form-horizontal' , 'style'=>'border-radius: 0px !important;']);?>
              <div class="form-group">
                <label class="col-sm-3 control-label">Key</label>
                <div class="col-sm-6">
                  <!-- <input type="text" class="form-control"> -->
                  <?php echo form_input(['name'=>'key','placeholder'=>'Enter Key','class'=>'form-control','value'=>set_value('username')]);?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Message</label>
                <div class="col-sm-6">
                  <!-- <input type="password" class="form-control"> -->
                  <?php echo form_input(['name'=>'msg','placeholder'=>'Enetr message to encode','class'=>'form-control','value'=>set_value('email')]);?>
                </div>
              </div>
              <div class="foot">
              	<div class="form-group">
              	<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Register</button> -->
		            <div class="col-sm-2 pull-right">
		              	<?php 
		              		echo form_reset(['value'=>'Cancel','class'=>'form-control btn btn-danger']),
		              		form_submit(['value'=>'Encode','class'=>'form-control btn btn-primary']);
		              	?>
              		</div>
              	</div>
              	<!-- <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button> -->
              </div>
            </form>
          </div>
        </div>


<?php include("footer.php"); ?>