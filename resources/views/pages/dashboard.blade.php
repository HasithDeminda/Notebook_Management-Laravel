@include('layout.header')
@include('layout.sidebar')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Back Admin!</h3>
                    <h6 class="font-weight-normal mb-0">
                      You're viewing
                      <span class="text-primary">Admin Dashboard </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                  <div class="card-people mt-auto">
                    <img
                      src="https://res.cloudinary.com/desnqqj6a/image/upload/v1690042294/6276023_uofpou.jpg"
                      alt="people"
                      style="
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        margin-top: -20px;
                      "
                    />
                    <div class="weather-info">
                      <div class="d-flex">
                        <div>
                          <h2 class="mb-0 font-weight-normal">
                            <i class="icon-sun mr-2"></i>31<sup>C</sup>
                          </h2>
                        </div>
                        <div class="ml-2">
                          <h4 class="location font-weight-normal">Colombo</h4>
                          <h6 class="font-weight-normal">Sri Lanka</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin transparent">
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div
                        class="card-body"
                        style="display: flex; flex-direction: row"
                      >
                        <div class="">
                          <p class="fs-30 mb-2 mt-2">Booking Note</p>
                          <p class="mb-4">Art Work</p>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Total Bookings</p>
                        <p class="fs-30 mb-2">61344</p>
                        <p>22.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Number of Meetings</p>
                        <p class="fs-30 mb-2">34040</p>
                        <p>2.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>0.22% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Order Details</p>
                    <p class="font-weight-500">
                      The total number of sessions within the date range. It is
                      the period time a user is actively engaged with your
                      website, page or app, etc
                    </p>
                    <div class="d-flex flex-wrap mb-5">
                      <div class="mr-5 mt-3">
                        <p class="text-muted">Order value</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                          12.3k
                        </h3>
                      </div>
                      <div class="mr-5 mt-3">
                        <p class="text-muted">Orders</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                          14k
                        </h3>
                      </div>
                      <div class="mr-5 mt-3">
                        <p class="text-muted">Users</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                          71.56%
                        </h3>
                      </div>
                      <div class="mt-3">
                        <p class="text-muted">Downloads</p>
                        <h3 class="text-primary fs-30 font-weight-medium">
                          34040
                        </h3>
                      </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">Sales Report</p>
                      <a href="#" class="text-info">View all</a>
                    </div>
                    <p class="font-weight-500">
                      The total number of sessions within the date range. It is
                      the period time a user is actively engaged with your
                      website, page or app, etc
                    </p>
                    <div
                      id="sales-legend"
                      class="chartjs-legend mt-4 mb-2"
                    ></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('layout.footer')
