@include('layout.header')
@include('layout.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" id="alert-message">
            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @php
            Session::forget('success');
            @endphp

        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" id="alert-message">
            {{ Session::get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif


        <div class=" row">
            <div class="col-12 grid-margin stretch-card">
                <div>

                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Note</h4>
                        <p class="card-description">
                            You can use this form to update note you added to notebook!
                        </p>

                        <form class="forms-sample" action="{{ route('updatenote', ['id' => $noteDetails->id]) }}"
                            id="myform" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Note Title"
                                name="previous_route" value="{{ $previousRouteName }}" hidden />
                            <div class="form-group">
                                <label for="exampleInputName1">Note Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Note Title"
                                    name="note_title" value="{{ $noteDetails->note_title }}" />
                                @if ($errors->has('note_title'))
                                <h6 class="text-danger mt-2">{{ $errors->first('note_title') }}</h6>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectCategory">Category</label>
                                <select class="form-control" id="exampleSelectCategory" name="category">
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $category )
                                    <option value={{ $category->id }}
                                        {{ old('category') == $category->id ? 'selected' : '' }}
                                        {{ $noteDetails->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}</option>

                                    @endforeach
                                </select>
                                @if ($errors->has('category'))
                                <h6 class="text-danger mt-2">{{ $errors->first('category') }}</h6>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Image upload</label>
                                <input type="file" name="note_image" class="file-upload-default" />
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image" />
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">
                                            Upload
                                        </button>
                                    </span>
                                </div>

                                @if ($errors->has('note_image'))
                                <h6 class="text-danger mt-2">{{ $errors->first('note_image') }}</h6>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="note-content" rows="4" name="note"
                                    value="{{old('note')}}">{{ $noteDetails->note }}</textarea>

                                @if ($errors->has('note'))
                                <h6 class="text-danger mt-2">{{ $errors->first('note') }}</h6>
                                @endif
                            </div>
                            <div class="form-group"></div>
                            <button type="submit" class="btn btn-primary mr-2">
                                Update Note

                            </button>

                            <button type="reset" class="btn btn-light">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script>
$(document).ready(function() {

});
document.addEventListener('DOMContentLoaded', function() {
    const Alert = document.getElementById('alert-message');
    // Hide the success alert after 2 seconds
    setTimeout(function() {
        Alert.style.display = 'none';
    }, 3000);
});

function updateTinyMCEContent(content) {
    tinymce.get('note-content').setContent(content);
}
</script>