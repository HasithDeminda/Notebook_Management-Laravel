@include('layout.header')
@include('layout.sidebar')
<div class="main-panel">
    <div class="content-wrapper">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Published Notes</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category->category_name }}</li>

            </ol>
        </nav>

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
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Published Notes</h3>
                        <h6 class="font-weight-normal mb-0">
                            You have viewing the published notes under the
                            <span class="text-primary">
                                category of {{ $category->category_name }}
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <section class="articles">
            @foreach($notes as $note)
            <article>
                <div class="article-wrapper">
                    <figure id="btn-show">
                        <img src="{{$note->note_image}}" alt="" />
                    </figure>
                    <div class="article-body">
                        <h3>{{$note->note_title}}</h3>
                        <h5 style="display: flex; align-items: center; margin: 10px 0px;
                     "><i class="icon-folder"></i> <span class="mt-1 ml-1">{{$note->category_name}}</span></h5>
                        <div>
                            {!! Str::limit(strip_tags($note->note), 200) !!}
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-sm" onclick="update({{$note->id}})">Edit</button>
                                <button class="btn btn-danger btn-sm" onclick="openModal(this)"
                                    data-item-id="{{ $note->id }}">Delete</button>
                            </div>
                            <div class="col-md-6">
                                @if($note->is_favorite == 0)
                                <button class="btn btn-primary btn-sm float-right"
                                    onclick="addToFavorites({{ $note->id }})">Add
                                    to
                                    Favourites</button>

                                @elseif ($note->is_favorite == 1)
                                <button class="btn btn-outline-primary btn-sm float-right"
                                    onclick="addToUnFavorites({{ $note->id }})">
                                    Unfavourites</button>
                                @endif

                            </div>
                        </div>
                    </div>
            </article>
            @endforeach



            <dialog id=" demo-modal" class="dialog" style="
    width: 100%;
    height: 80%;
    overflow: auto;
                ">
                <div class="dialog-body">
                    <div class="dialog-header">
                        <div class="avatar ml-2">
                            <img src="https://res.cloudinary.com/desnqqj6a/image/upload/v1690091561/7648864_lv8zvg.jpg"
                                alt="" style="
    width: 60px;
    height: 60px;
    border-radius: 50%;

       " />
                        </div>
                        <div class='col mt-2'>
                            <h3 class="">Notebook Blog</h3>
                            <h6>Published 2mins ago</h6>
                        </div>
                    </div>
                    <div class="dialog-content">
                        <figure id="btn-show">
                            <img src="https://picsum.photos/id/1011/800/450" alt="" style="
    width: 100%;
    height: 100%;
    object-fit : cover;" />
                        </figure>
                        <p class='mt-3'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec nec ex luctus,
                            maximus elit quis, ultricies orci. Aliquam erat volutpat. Integer nec
                            erat orci. Cras in
                            arcu neque. Quisque consequat mattis lacus, ornare bibendum justo
                            volutpat nec. Nunc
                            sollicitudin interdum dui, in dictum tellus feugiat in. Pellentesque
                            interdum vehicula
                            libero, eget porttitor magna. Nullam efficitur ultrices justo ac mattis.
                            Aliquam quis mauris
                            elementum diam tincidunt viverra vitae sit amet erat. Lorem ipsum dolor
                            sit amet,
                            consectetur adipiscing elit. Donec nec ex luctus, maximus elit quis,
                            ultricies orci. Aliquam
                            erat volutpat. Integer nec erat orci. Cras in arcu neque. Quisque
                            consequat mattis lacus,
                            ornare bibendum justo volutpat nec. Nunc sollicitudin interdum dui, in
                            dictum tellus feugiat
                            in. Pellentesque interdum vehicula libero, eget porttitor magna. Nullam
                            efficitur ultrices
                            justo ac mattis. Aliquam quis mauris elementum diam tincidunt viverra
                            vitae sit amet erat.
                        </p>
                    </div>
                </div>
                <button class="btn-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 64 64">
                        <path
                            d="m16 13a1 1 0 0 0-3 3l16 16-16 16a1 1 0 0 0 3 3l16-16 16 16a1 1 0 0 0 3-3l-16-16 16-16a1 1 0 0 0-3-3l-16 16z"
                            fill="currentColor" />
                    </svg>
                </button>
            </dialog>

            <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Delete
                                Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to delete this note?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Confirm Delete</button>
                        </div>

                    </div>
                </div>
            </div>



        </section>
        <div class="pagination">
            <ul>
                <!--pages or li are comes from javascript -->
            </ul>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
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

    function openModal(button) {
        const itemId = button.getAttribute('data-item-id');
        $('#deleteConfirmationModal').modal('show');

        // Attach a click event to the "Confirm Delete" button inside the modal
        $('#confirmDeleteBtn').on('click', function() {
            deleteItem(itemId)
        });
    }

    function deleteItem(itemId) {
        const deleteUrl = "{{ URL::to('deletenote/') }}" + "/" + itemId;
        window.location.href = deleteUrl;
    }

    function addToFavorites(id) {
        const addToFavoritesUrl = "{{ URL::to('add-favorite/') }}" + "/" + id;
        window.location.href = addToFavoritesUrl;
    }

    function addToUnFavorites(id) {
        const addToUnFavoritesUrl = "{{ URL::to('add-unfavorite/') }}" + "/" + id;
        window.location.href = addToUnFavoritesUrl;
    }

    function update(itemId) {
        const updateurl = "{{ URL::to('update-note/') }}" + "/" + itemId;
        window.location.href = updateurl;
    }
    </script>