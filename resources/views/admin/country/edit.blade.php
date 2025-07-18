<form action="/admin/edit-country/{{ $row->id }}" class="w-100" method="post">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          Edit Country
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
          <div class="form-group">
            <label for="">Country Name *</label>
            <input
              type="text"
              class="form-control"
              name="name"
              value="{{ $row->name }}"
              placeholder="Enter country name"
            />
            <input type="text" value="Y" name="country" hidden>

            <p id="err_enname" class="mt-2 mb-0 text-danger em"></p>
          </div>


          <div class="form-group">
            <label for="">Status*</label>
            <select name="status" class="form-control">
                <option value="Y" <?= $row->status == "Y" ? "selected" : "" ?>>Active</option>
                <option value="N" <?= $row->status == "N" ? "selected" : "" ?> >Deactive</option>
            </select>
            <p id="err_status" class="mt-2 mb-0 text-danger em"></p>
          </div>


      </div>

      <div class="modal-footer">
        <button
          type="submit"
          class="btn btn-primary btn-sm"
        >
          Save
        </button>
      </div>
    </div>
</form>
