@extends('layouts.app')
@section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>List View</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Job Search</li>
              <li class="breadcrumb-item active">List View</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->
            <div class="bookmark">
              <ul>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 xl-40 box-col-4">
          <div class="job-sidebar"><a class="btn btn-primary job-toggle" href="javascript:void(0)">job filter</a>
            <div class="job-left-aside custom-scrollbar">
              <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="mb-0 p-0">
                          <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon"
                            aria-expanded="true" aria-controls="collapseicon">Filter</button>
                        </h5>
                      </div>
                      <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon"
                        data-parent="#accordion">
                        <div class="card-body filter-cards-view animate-chk">
                          <div class="job-filter mb-3">
                            <div class="faq-form">
                              <input class="form-control" type="text" placeholder="Search.."><i class="search-icon"
                                data-feather="search"></i>
                            </div>
                          </div>
                          <div class="job-filter">
                            <div class="faq-form">
                              <input class="form-control" type="text" placeholder="location.."><i class="search-icon"
                                data-feather="map-pin"></i>
                            </div>
                          </div>
                          <div class="checkbox-animated">
                            <label class="d-block" for="chk-ani">
                              <input class="checkbox_animated" id="chk-ani" type="checkbox"> Full-time (8688)
                            </label>
                            <label class="d-block" for="chk-ani1">
                              <input class="checkbox_animated" id="chk-ani1" type="checkbox"> Contract (503)
                            </label>
                            <label class="d-block" for="chk-ani2">
                              <input class="checkbox_animated" id="chk-ani2" type="checkbox"> Part-time (288)
                            </label>
                            <label class="d-block" for="chk-ani3">
                              <input class="checkbox_animated" id="chk-ani3" type="checkbox"> Internship (236)
                            </label>
                            <label class="d-block" for="chk-ani4">
                              <input class="checkbox_animated" id="chk-ani4" type="checkbox"> Temporary (146)
                            </label>
                            <label class="d-block" for="chk-ani5">
                              <input class="checkbox_animated" id="chk-ani5" type="checkbox"> Commission (25)
                            </label>
                          </div>
                          <button class="btn btn-primary text-center" type="button">Find jobs</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="mb-0 p-0">
                          <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon1"
                            aria-expanded="true" aria-controls="collapseicon1">Location</button>
                        </h5>
                      </div>
                      <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1"
                        data-parent="#accordion">
                        <div class="card-body animate-chk">
                          <div class="location-checkbox">
                            <label class="d-block" for="chk-ani6">
                              <input class="checkbox_animated" id="chk-ani6" type="checkbox"> Letraset<span
                                class="d-block">New York, NY (399)</span>
                            </label>
                            <label class="d-block" for="chk-ani7">
                              <input class="checkbox_animated" id="chk-ani7" type="checkbox"> Established<span
                                class="d-block">San Francisco, CA (252) </span>
                            </label>
                            <label class="d-block mb-0" for="chk-ani8">
                              <input class="checkbox_animated" id="chk-ani8" type="checkbox"> Contrary<span
                                class="d-block">Washington, DC (226)</span>
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-block btn-primary text-center" type="button">All Locations</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="mb-0 p-0">
                          <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2"
                            aria-expanded="true" aria-controls="collapseicon2">Job Title</button>
                        </h5>
                      </div>
                      <div class="collapse show" id="collapseicon2" data-parent="#accordion"
                        aria-labelledby="collapseicon2">
                        <div class="card-body animate-chk">
                          <label class="d-block" for="chk-ani9">
                            <input class="checkbox_animated" id="chk-ani9" type="checkbox"> UI/Ux designer(25)
                          </label>
                          <label class="d-block" for="chk-ani10">
                            <input class="checkbox_animated" id="chk-ani10" type="checkbox"> Graphic designer(10)
                          </label>
                          <label class="d-block" for="chk-ani11">
                            <input class="checkbox_animated" id="chk-ani11" type="checkbox"> Front end designer(15)
                          </label>
                          <label class="d-block" for="chk-ani12">
                            <input class="checkbox_animated" id="chk-ani12" type="checkbox"> PHP developer(42)
                          </label>
                          <label class="d-block mb-0" for="chk-ani13">
                            <input class="checkbox_animated" id="chk-ani13" type="checkbox"> React Developer( 5 )
                          </label>
                        </div>
                        <button class="btn btn-block btn-primary text-center" type="button">All Job Title</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="mb-0 p-0">
                          <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon3"
                            aria-expanded="true" aria-controls="collapseicon3">Industry</button>
                        </h5>
                      </div>
                      <div class="collapse show" id="collapseicon3" data-parent="#accordion"
                        aria-labelledby="collapseicon3">
                        <div class="card-body animate-chk">
                          <label class="d-block" for="chk-ani14">
                            <input class="checkbox_animated" id="chk-ani14" type="checkbox"> Computer Software(14)
                          </label>
                          <label class="d-block" for="chk-ani15">
                            <input class="checkbox_animated" id="chk-ani15" type="checkbox"> IT Engineer(10)
                          </label>
                          <label class="d-block" for="chk-ani16">
                            <input class="checkbox_animated" id="chk-ani16" type="checkbox"> Service industry(20)
                          </label>
                          <label class="d-block" for="chk-ani17">
                            <input class="checkbox_animated" id="chk-ani17" type="checkbox"> Accounting ( 34 )
                          </label>
                          <label class="d-block mb-0" for="chk-ani18">
                            <input class="checkbox_animated" id="chk-ani18" type="checkbox"> Financial Services(5)
                          </label>
                        </div>
                        <button class="btn btn-block btn-primary text-center" type="button">All Industries</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="mb-0 p-0">
                          <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4"
                            aria-expanded="true" aria-controls="collapseicon4">Specific skills</button>
                        </h5>
                      </div>
                      <div class="collapse show" id="collapseicon4" data-parent="#accordion"
                        aria-labelledby="collapseicon4">
                        <div class="card-body animate-chk">
                          <label class="d-block" for="chk-ani19">
                            <input class="checkbox_animated" id="chk-ani19" type="checkbox"> HTML,scss & sass
                          </label>
                          <label class="d-block" for="chk-ani20">
                            <input class="checkbox_animated" id="chk-ani20" type="checkbox"> Javascript
                          </label>
                          <label class="d-block" for="chk-ani21">
                            <input class="checkbox_animated" id="chk-ani21" type="checkbox"> Node.js
                          </label>
                          <label class="d-block" for="chk-ani22">
                            <input class="checkbox_animated" id="chk-ani22" type="checkbox"> Gulp & Pug
                          </label>
                          <label class="d-block mb-0" for="chk-ani23">
                            <input class="checkbox_animated" id="chk-ani23" type="checkbox"> Angular.js
                          </label>
                        </div>
                        <button class="btn btn-block btn-primary text-center" type="button">All Skills</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 xl-60 box-col-8">
          @foreach ($data as $key)
            <div class="card">
              <div class="job-search">
                <div class="card-body">
                  <div class="media"><img class="img-40 img-fluid m-r-20" src="{{ $key['img'] }}" alt="">
                    <div class="media-body">
                      <h6 class="f-w-600"><a href="job-details.html">{{ $key['title'] }}</a><span
                          class="badge badge-primary pull-right">New</span></h6>
                      <p>{{ $key['perusahaan'] }}</p>
                      <ul class="rating">
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                        <li><i class="fa fa-star font-warning"></i></li>
                      </ul>
                    </div>
                  </div>
                  <p><i class="fa fa-map-marker"></i> {{ $key['lokasi'] }}</p>
                  <p><i class="fa fa-dollar"></i> {{ $key['gaji'] }}</p>
                  <p><i class="fa fa-suitcase"></i> {{ $key['pengalaman'] }}</p>
                  <span class="badge rounded-pill badge-primary"><i class="fa fa-check-square-o"></i>
                    sd</span>
                </div>
              </div>
            </div>
          @endforeach
          <div class="job-pagination">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-primary">
                <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection
