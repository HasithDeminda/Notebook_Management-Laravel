@include('layout.header')
@include('layout.sidebar')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Your Favourites ❤️</h3>
                    <h6 class="font-weight-normal mb-0">
                        You can add notes to your favourites by clicking on the heart icon on the top right corner of the note.
                      <span class="text-primary">
                        3 Favorite Notes
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <section class="articles">
                <article>
                  <div class="article-wrapper">
                    <figure>
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
                            <button class="btn btn-primary btn-sm float-right">Add to Favourites</button>
                            </div>
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