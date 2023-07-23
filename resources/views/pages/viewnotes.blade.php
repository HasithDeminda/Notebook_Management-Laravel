@include('layout.header')
@include('layout.sidebar')
<div class="main-panel">
<div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Published Notes</h3>
                    <h6 class="font-weight-normal mb-0">
                        You have viewing the published notes under the
                      <span class="text-primary">
                        category of Art Work
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <section class="articles">
                <article>
                  <div class="article-wrapper">
                    <figure  id="btn-show">
                      <img src="https://picsum.photos/id/1011/800/450" alt="" />
                    </figure>
                    <div class="article-body">
                      <h3>Note Blog</h3>
                      <h5 style="display: flex; align-items: center; margin: 10px 0px;
                      "><i class="icon-folder"></i> <span class="mt-1 ml-1">Travel</span></h5>
                      <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                      </p>
                      <!-- ----Add edit and delete and favourites buttons here---- -->
                        <div class="row">
                            <div class="col-md-6">
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure you want to delete this note?')"
                            >Delete</button>
                            </div>
                            <div class="col-md-6">
                            <button class="btn btn-primary btn-sm float-right" >Add to Favourites</button>
                            </div>
                    </div>
                  </div>
                </article>
                <dialog id="demo-modal" class="dialog" style="
    width: 100%;
    height: 80%;
    overflow: auto;
                ">
  <div class="dialog-body">
    <div class="dialog-header">
      <div class="avatar ml-2">
       <img src="https://res.cloudinary.com/desnqqj6a/image/upload/v1690091561/7648864_lv8zvg.jpg" alt="" style="
    width: 60px;
    height: 60px;
    border-radius: 50%;

       "/>
      </div>
      <div class='col mt-2'>
      <h3 class="">Notebook Blog</h3>
      <h6>Published 2mins ago</h6>
      </div>
    </div>
    <div class="dialog-content">
    <figure  id="btn-show">
                      <img src="https://picsum.photos/id/1011/800/450" alt="" />
                    </figure>
      <p class='mt-3'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec ex luctus, maximus elit quis, ultricies orci. Aliquam erat volutpat. Integer nec erat orci. Cras in arcu neque. Quisque consequat mattis lacus, ornare bibendum justo volutpat nec. Nunc sollicitudin interdum dui, in dictum tellus feugiat in. Pellentesque interdum vehicula libero, eget porttitor magna. Nullam efficitur ultrices justo ac mattis. Aliquam quis mauris elementum diam tincidunt viverra vitae sit amet erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec ex luctus, maximus elit quis, ultricies orci. Aliquam erat volutpat. Integer nec erat orci. Cras in arcu neque. Quisque consequat mattis lacus, ornare bibendum justo volutpat nec. Nunc sollicitudin interdum dui, in dictum tellus feugiat in. Pellentesque interdum vehicula libero, eget porttitor magna. Nullam efficitur ultrices justo ac mattis. Aliquam quis mauris elementum diam tincidunt viverra vitae sit amet erat.</p>
    </div>
    <!-- <div class="dialog-footer text-right">
      <button id="btn-show2" class="btn-modalshow">Open Modal 2</button>
    </div> -->
  </div>
  <button class="btn-close">
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 64 64">
      <path d="m16 13a1 1 0 0 0-3 3l16 16-16 16a1 1 0 0 0 3 3l16-16 16 16a1 1 0 0 0 3-3l-16-16 16-16a1 1 0 0 0-3-3l-16 16z" fill="currentColor" />
    </svg>
  </button>
</dialog>
<!-- <dialog id="demo-modal2" class="dialog">
  <div class="dialog-body">
    <div class="dialog-header">
      <h3>Sample Modal Header 2</h3>
    </div>
    <div class="dialog-content text-center">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Nullam efficitur ultrices justo ac mattis. Aliquam quis mauris elementum diam tincidunt viverra vitae sit amet erat.</p>
    </div>
  </div>
  <button class="btn-close">
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 64 64">
      <path d="m16 13a1 1 0 0 0-3 3l16 16-16 16a1 1 0 0 0 3 3l16-16 16 16a1 1 0 0 0 3-3l-16-16 16-16a1 1 0 0 0-3-3l-16 16z" fill="currentColor" />
    </svg>
  </button>
</dialog> -->
                <article>
              
                  <div class="article-wrapper">
                    <figure>
                      <img src="https://picsum.photos/id/1005/800/450" alt="" />
                    </figure>
                    <div class="article-body">
                      <h2>This is some title</h2>
                      <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                      </p>
                      <a href="#" class="read-more">
                        Read more <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </article>
                <article>
              
                    <div class="article-wrapper">
                      <figure>
                        <img src="https://picsum.photos/id/1005/800/450" alt="" />
                      </figure>
                      <div class="article-body">
                        <h2>This is some title</h2>
                        <p>
                          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                        </p>
                        <a href="#" class="read-more">
                          Read more <span class="sr-only">about this is some title</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                  <article>
              
                    <div class="article-wrapper">
                      <figure>
                        <img src="https://picsum.photos/id/1005/800/450" alt="" />
                      </figure>
                      <div class="article-body">
                        <h2>This is some title</h2>
                        <p>
                          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                        </p>
                        <a href="#" class="read-more">
                          Read more <span class="sr-only">about this is some title</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                  <article>
              
                    <div class="article-wrapper">
                      <figure>
                        <img src="https://picsum.photos/id/1005/800/450" alt="" />
                      </figure>
                      <div class="article-body">
                        <h2>This is some title</h2>
                        <p>
                          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                        </p>
                        <a href="#" class="read-more">
                          Read more <span class="sr-only">about this is some title</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                  <article>
              
                    <div class="article-wrapper">
                      <figure>
                        <img src="https://picsum.photos/id/1005/800/450" alt="" />
                      </figure>
                      <div class="article-body">
                        <h2>This is some title</h2>
                        <p>
                          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                        </p>
                        <a href="#" class="read-more">
                          Read more <span class="sr-only">about this is some title</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                <article>
              
                  <div class="article-wrapper">
                    <figure>
                      <img src="https://picsum.photos/id/103/800/450" alt="" />
                    </figure>
                    <div class="article-body">
                      <h2>This is some title</h2>
                      <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                      </p>
                      <a href="#" class="read-more">
                        Read more <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </article>

            </section>
            <div class="pagination">
                <ul> <!--pages or li are comes from javascript --> </ul>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
        </div>
@include('layout.footer')