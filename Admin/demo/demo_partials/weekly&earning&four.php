<!-- Weekly Overview Chart -->
<div class="col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Weekly Overview</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="weeklyOverviewDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="weeklyOverviewChart"></div>
                      <div class="mt-1 mt-md-3">
                        <div class="d-flex align-items-center gap-3">
                          <h3 class="mb-0">45%</h3>
                          <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
                        </div>
                        <div class="d-grid mt-3 mt-md-4">
                          <button class="btn btn-primary" type="button">Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Weekly Overview Chart -->


                <!-- Total Earnings -->
                <div class="col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Total Earning</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="totalEarnings"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="mb-3 mt-md-3 mb-md-5">
                        <div class="d-flex align-items-center">
                          <h2 class="mb-0">$24,895</h2>
                          <span class="text-success ms-2 fw-medium">
                            <i class="mdi mdi-menu-up mdi-24px"></i>
                            <small>10%</small>
                          </span>
                        </div>
                        <small class="mt-1">Compared to $84,325 last year</small>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-md-2">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/misc/zipcar.png" alt="zipcar" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Zipcar</h6>
                              <small>Vuejs, React & HTML</small>
                            </div>
                            <div>
                              <h6 class="mb-2">$24,895.65</h6>
                              <div class="progress bg-label-primary" style="height: 4px">
                                <div
                                  class="progress-bar bg-primary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-md-2">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/misc/bitbank.png" alt="bitbank" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Bitbank</h6>
                              <small>Sketch, Figma & XD</small>
                            </div>
                            <div>
                              <h6 class="mb-2">$8,6500.20</h6>
                              <div class="progress bg-label-info" style="height: 4px">
                                <div
                                  class="progress-bar bg-info"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-md-3">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="assets/img/icons/misc/aviato.png" alt="aviato" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Aviato</h6>
                              <small>HTML & Angular</small>
                            </div>
                            <div>
                              <h6 class="mb-2">$1,2450.80</h6>
                              <div class="progress bg-label-secondary" style="height: 4px">
                                <div
                                  class="progress-bar bg-secondary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                <div class="col-xl-4 col-md-6">
                  <div class="row gy-4">
                    <!-- Total Profit line chart -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h4 class="mb-0">$86.4k</h4>
                        </div>
                        <div class="card-body">
                          <div id="totalProfitLineChart" class="mb-3"></div>
                          <h6 class="text-center mb-0">Total Profit</h6>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Profit line chart -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial bg-secondary rounded-circle shadow">
                              <i class="mdi mdi-poll mdi-24px"></i>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="totalProfitID"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2">Total Profit</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2">$25.6k</h4>
                            <small class="text-success mt-1">+42%</small>
                          </div>
                          <small>Weekly Project</small>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- New Yearly Project -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                              <i class="mdi mdi-wallet-travel mdi-24px"></i>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="newProjectID"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2">New Project</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2">862</h4>
                            <small class="text-danger mt-1">-18%</small>
                          </div>
                          <small>Yearly Project</small>
                        </div>
                      </div>
                    </div>
                    <!--/ New Yearly Project -->
                    <!-- Sessions chart -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h4 class="mb-0">2,856</h4>
                        </div>
                        <div class="card-body">
                          <div id="sessionsColumnChart" class="mb-3"></div>
                          <h6 class="text-center mb-0">Sessions</h6>
                        </div>
                      </div>
                    </div>
                    <!--/ Sessions chart -->
                  </div>
                </div>


