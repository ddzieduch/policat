<div class="modal hide hidden_remove" id="campaign_undelete_modal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Alert</h3>
  </div>
  <div class="modal-body">
    <p>Are you sure to <strong>undelete</strong> the campaign "<b><?php echo $name ?></b>"?</p>
  </div>
  <div class="modal-footer">
    <a class="btn btn-danger ajax_link post" data-submit='<?php echo json_encode(array('csrf_token' => $csrf_token)) ?>' href="<?php echo url_for('campaign_undelete', array('id' => $id)) ?>">Yes</a>
    <a class="btn btn-primary" data-dismiss="modal">No</a>
  </div>
</div>