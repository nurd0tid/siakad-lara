<div class="modal fade" id="addKurikulum" tabindex="-1" role="dialog" aria-labelledby="addKurikulumLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addKurikulumLabel">Add Kurikulum</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="">
          <div>
            <div class="col-md-12">
              <label class="form-label" for="validationCustom01">Nama Kurikulum</label>
              <input class="form-control" id="validationCustom01" type="text" required="">
              <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col">
              <div class="form-group m-t-15 m-checkbox-inline mb-0">
                <label class="form-label" for="validationCustom01">Status</label>
                <label class="d-block" for="chk-ani1">
                  <input class="checkbox_animated" id="chk-ani1" type="checkbox" value="active">Active
                </label>
                <label class="d-block" for="chk-ani2">
                  <input class="checkbox_animated" id="chk-ani2" type="checkbox" value="non active">Non Active
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-secondary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@pushOnce('js')
  <script src="../assets/js/form-validation-custom.js"></script>
  <script src="../assets/js/tooltip-init.js"></script>
@endPushOnce
