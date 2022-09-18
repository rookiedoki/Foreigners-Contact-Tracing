<div id="someModalId" class="modal fade" role="dialog">
 <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;       </button>
    <h4 class="modal-title">Modal Header</h4>
  </div>
  <div class="modal-body">
    <select id="exampleSelect">
    </select>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default"    data-dismiss="modal">Close</button>
    <button id="save" onclick="save()" class="btn btn-width bkgrnd-cyan save-details" type="button" name="save-details">Save</button>
  </div>
</div>

<script type="text/javascript">
$('#save').click(function() {
  $select_value = $("#exampleSelect").value();
  $('#someModalId').modal('hide');
});
</script>
