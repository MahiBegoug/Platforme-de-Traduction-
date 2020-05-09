@extends('site.welcome')


@section('title','Blog')



@section('content')




<!-- Section: Blog v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Les derniers posts</h2>
  <!-- Section description -->
  <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


    <div class="row">
        <div class="col-12 col-sm-12"><!--Panel-->
          <div class="card card-body mb-1 bg-light">
            <div class="media d-block d-md-flex">

              <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="mt-0 font-weight-bold">Title of the news</h5>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<span id="dots">...</span><span id="more"> sed quia magni dolores
                  eos qui ratione voluptatem sequi nesciunt.</span></p>
                <a type="button"  href="#" class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
              </div>
            </div>
          </div>
          <!--/.Panel-->
        </div>
    </div>

    <div class="row">
            <div class="col-12 col-sm-12"><!--Panel-->
              <div class="card card-body mb-1 bg-light">
                <div class="media d-block d-md-flex">

                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Title of the news</h5>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<span id="dots">...</span><span id="more"> sed quia magni dolores
                      eos qui ratione voluptatem sequi nesciunt.</span></p>
                    <a type="button"  href="#" class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
                  </div>
                </div>
              </div>
              <!--/.Panel-->
            </div>
    </div>

            <div class="row">
                <div class="col-12 col-sm-12"><!--Panel-->
                  <div class="card card-body mb-1 bg-light">
                    <div class="media d-block d-md-flex">

                      <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold">Title of the news</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<span id="dots">...</span><span id="more"> sed quia magni dolores
                          eos qui ratione voluptatem sequi nesciunt.</span></p>
                        <a type="button"  href="#" class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!--/.Panel-->
                </div>
            </div>


                <div class="row">
                    <div class="col-12 col-sm-12"><!--Panel-->
                      <div class="card card-body mb-1 bg-light">
                        <div class="media d-block d-md-flex">

                          <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="mt-0 font-weight-bold">Title of the news</h5>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<span id="dots">...</span><span id="more"> sed quia magni dolores
                              eos qui ratione voluptatem sequi nesciunt.</span></p>
                            <a type="button"  href="#" class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
                          </div>
                        </div>
                      </div>
                      <!--/.Panel-->
                    </div>

                </div>

                    <div class="row">
                        <div class="col-12 col-sm-12"><!--Panel-->
                          <div class="card card-body mb-1 bg-light">
                            <div class="media d-block d-md-flex">

                              <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="mt-0 font-weight-bold">Title of the news</h5>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<span id="dots">...</span><span id="more"> sed quia magni dolores
                                  eos qui ratione voluptatem sequi nesciunt.</span></p>
                                <a type="button"  href="#" class="btn btn-deep-orange btn-rounded btn-md btn-sm">Read more</a>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel-->
                        </div>

                    </div>

</section>
<nav aria-label="Page navigation example">
    <ul class="pagination pg-blue">
      <li class="page-item"><a  class="page-link">Previous</a></li>
      <li class="page-item active"><a class="page-link btn-deep-orange">1</a></li>
      <li class="page-item"><a class="page-link">2</a></li>
      <li class="page-item"><a class="page-link">3</a></li>
      <li class="page-item"><a class="page-link">Next</a></li>
    </ul>
  </nav>
<!-- Section: Blog v.3 -->
@endsection




@section('scripts')

@endsection
