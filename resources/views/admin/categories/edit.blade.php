<form
class="modal-form w-100"
action="/admin/edit-category/{{ $row->id }}?type={{ $type }}"
method="post"
enctype="multipart/form-data"
>

@csrf

<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">
      Add Category
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
        <label for="">Category Name*</label>
        <input
          type="text"
          name="title"
          class="form-control"
          value="{{ $row->title }}"
          placeholder="Enter category name"
          required
        />
        <p
          id="err_en_name"
          class="mt-2 mb-0 text-danger em"
        ></p>
      </div>

      <div class="form-group">
        <label for="">Status*</label>
        <select name="status"  required class="form-control">
          <option value="Y" <?= $row->status == "Y" ? "selected" : "" ?>>Active</option>
          <option value="N" <?= $row->status == "N" ? "selected" : "" ?> >Deactive</option>
        </select>
        <p id="err_status" class="mt-2 mb-0 text-danger em"></p>
      </div>
  </div>

  <div class="modal-footer">
    <button
      type="button"
      class="btn btn-secondary btn-sm"

    >
      Close
    </button>
    <button

      type="submit"
      class="btn btn-primary btn-sm"
    >
      Save
    </button>
  </div>
</div>
</form>
