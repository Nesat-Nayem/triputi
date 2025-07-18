<form method="post" action="/admin/edit-country/{{ $row->id }}" class="w-100">
    @csrf
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">
      Add State
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

    <input type="text" value="Y" name="state" hidden>
      <div class="form-group">
        <label for="">Country*</label>
        <select name="country" class="form-control">
         @foreach (App\Models\Location::where('status','Y')->where('type','country')->get() as $val)
        <option value="{{ $val->id }}" <?= $val->id == $row->country_id ? "selected" : "" ?>>{{ $val->name }}</option>
        @endforeach
        </select>
        <p
          id="err_country"
          class="mt-2 mb-0 text-danger em"
        ></p>
      </div>

      <div class="form-group">
        <label for="">State Name </label>
        <input
          type="text"
          class="form-control"
          name="name" required
          value="{{ $row->name }}"
          placeholder="Enter state name"
        />
        <p
          id="err_en_name"
          class="mt-2 mb-0 text-danger em"
        ></p>
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
