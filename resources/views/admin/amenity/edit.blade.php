<form action="/admin/update-amenity/{{ $data->id }}" method="post" class="w-100">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          Add Property Amenity
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
            <label for="">Name* </label>
            <input
              type="text"
              class="form-control"
              name="name"
              value="{{ $data->name }}"
              placeholder="Enter aminity name"
            />
            <p
              id="err_en_name"
              class="mt-2 mb-0 text-danger em"
            ></p>
          </div>


          <div class="form-group">
            <label for="">Icon* (Use icon from <a href="https://remixicon.com/" target="_blank">https://remixicon.com/</a>)</label>
                <textarea name="icon_code" id="" rows="4" class="form-control">{{ $data->icon_code }}</textarea>
            <p
              id="err_en_name"
              class="mt-2 mb-0 text-danger em"
            ></p>
          </div>

          <div class="form-group">
            <label for="">Status*</label>
            <select name="status" class="form-control">
                <option value="Y" <?= $data->status == "Y" ? "selected" : "" ?>>Active</option>
                <option value="N" <?= $data->status == "N" ? "selected" : "" ?> >Deactive</option>
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
