<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data user</h3>
      <form method="POST" id="form-update-user">
        <input type="hidden" name="id" value="<?php echo $datauser->id_user; ?>">
        <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
      <input type="password" class="form-control" placeholder="Passowrd" name="password" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama" name="nama_user" aria-describedby="sizing-addon2">
    </div>
        <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-tag"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="role" value="1" id="admin" class="minimal" <?php if($datauser->role == 1){echo "checked='checked'";} ?>>
          <label for="admin">Admin</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="role" value="2" id="user" class="minimal" <?php if($datauser->role == 2){echo "checked='checked'";} ?>> 
          <label for="user">User</label>
            </span>
        </div>
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>