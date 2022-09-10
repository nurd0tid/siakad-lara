<div class="modal fade" id="addKurikulum" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Kurikulum</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="saveKurikulum" class="needs-validation" novalidate="">
          <div>
            <div class="col-md-12">
              <label class="form-label">Nama Kurikulum</label>
              <input class="form-control" type="text" name="nm_kurikulum" required>
            </div>
            <div class="col-md-6">
              <div class="form-group m-t-15 m-checkbox-inline mb-0" id="stts_kurikulum">
                <label class="form-label">Status</label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_kurikulum_1" type="radio" value="Active"
                    name="stts_kurikulum">
                  Active
                </label>
                <label class="d-block">
                  <input class="form-check-input" id="stts_kurikulum_2" type="radio" value="Non Active"
                    name="stts_kurikulum"> Non
                  Active
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="save" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
