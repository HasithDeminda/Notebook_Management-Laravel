
@include('layout.header')
@include('layout.sidebar')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Note</h4>
                    <p class="card-description">
                      You can use this form to add a note to your notebook!
                    </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Note Title</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputName1"
                          placeholder="Name"
                        />
                        <h6 class="text-danger mt-2">Please add a Note Title</h6>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectCategory">Category</label>
                        <select class="form-control" id="exampleSelectCategory">
                          <option>Travel</option>
                          <option>Art Work</option>
                          <option>Special Notes</option>
                          <option>Ideas</option>
                          <option>Quotes</option>
                        </select>
                        <h6 class="text-danger mt-2">Please select a category</h6>
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input
                          type="file"
                          name="img[]"
                          class="file-upload-default"
                        />
                        
                        <div class="input-group col-xs-12">
                          <input
                            type="text"
                            class="form-control file-upload-info"
                            disabled
                            placeholder="Upload Image"
                          />
                          <span class="input-group-append">
                            <button
                              class="file-upload-browse btn btn-primary"
                              type="button"
                            >
                              Upload
                            </button>
                          </span>
                        </div>
                        <h6 class="text-danger mt-2">Please add an image</h6>
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                        ></textarea>
                        <h6 class="text-danger mt-2">Please add a Note Text</h6>
                      </div>
                      <div class="form-group"></div>
                      <button type="submit" class="btn btn-primary mr-2">
                        Save and Publish
                      </button>
                      <button
                        type="submit"
                        class="btn btn-outline-primary mr-2"
                      >
                        Save as Draft
                      </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
@include('layout.footer')