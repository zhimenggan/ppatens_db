<?php include "search_info_modal.php"; ?>



<form id="ppatens_search_form" action="/ppatens_db/pp_search_output.php" method="get">
  <div class="form-group">
    <label for="search_box" class="yellow_col" style="font-size:16px">Insert a gene ID or annotation keywords</label> <button type="button" class="info_icon" data-toggle="modal" data-target="#search_help">i</button>
    <input type="search_box" class="form-control" id="search_box" name="search_keywords">

  </div>

  <button type="submit" class="btn btn-default pull-right">Search</button>
</form>

<!--  no input gene modal -->
<div class="modal fade" id="no_gene_modal" role="dialog">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align: center;">ERROR</h4>
      </div>
      <div class="modal-body">
        <div style="text-align: center;">
          <p id="search_input_modal"></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>

$(document).ready(function () {

  //check input gene before sending form
  $('#ppatens_search_form').submit(function() {
    var gene_id = $('#search_box').val();

    if (!gene_id) {
      $("#search_input_modal").html( "No input provided in the search box" );
      $('#no_gene_modal').modal();
      return false;
    }
    else if (gene_id.length < 3) {
      $("#search_input_modal").html( "Input is too short, please provide a longer term to search" );
      $('#no_gene_modal').modal();
      return false;
    }
    else {
      return true;
    }
  });

});

</script>
