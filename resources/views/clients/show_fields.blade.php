<div class="row">
    <div class="col-xxl-9">
        <div class="position-relative">
            <img src="{{asset('assets/smart/images/profile/background.jpg')}}" class="rounded-top-3" alt="profile-bg" height="100" width="auto">
            <div class="position-absolute" style="bottom: 25px; right: 25px;">
                <a href="profile.html#" class="btn btn-outline-light text-white hover rounded-2">
                    Update Company Logo
                </a>
            </div>
        </div>
        <div class="card bg-white border-0 rounded-3 mb-4 rounded-top-0">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-end">
                        <div class="flex-shrink-0 position-relative mt-minus-110">
                            <img src="{{ $profilePicture }}" class="rounded-circle border border-2 wh-160" alt="user">
                            <img src="{{asset('assets/smart/images/check.svg')}}" class="position-absolute bottom-0 end-0" alt="check">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="fs-24 mb-1">{{ $client->full_name }}</h4>
                            <!-- Role should be also set here -->
                            <!-- <span class="fs-15 fw-medium">Product designer</span> -->
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="profile.html#" class="btn btn-outline-light text-body fw-medium fs-16 px-4 hover hover-bg">
                            <i class="ri-edit-line fw-medium fs-18 me-1"></i>
                            <span>Edit</span>
                        </a>

                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-end">


                    </div>
                    <div class="d-flex align-items-center">
                        <a href="profile.html#" class="btn btn-primary fw-medium fs-16 px-4 ms-3">
                            <i class="ri-clipboard-line fw-medium fs-18 me-1"></i>
                            <span>Create Invoice</span>
                        </a>
                        <a href="profile.html#" class="btn btn-primary fw-medium fs-16 px-4 ms-3">
                            <i class="ri-money-dollar-box-line fw-medium fs-18 me-1"></i>
                            <span>Create Quotation</span>
                        </a>

                    </div>
                </div>
                <div>

                </div>
            </div>
            <ul class="nav nav-tabs profile-tabs border-0 justify-content-center gap-2 mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="false">Client Details</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="true">Invoices</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link border-1 border-primary rounded-2 fw-medium" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="false">Quotations</button>
                </li>
            </ul>
            <div class="row">

                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4 ps-5">


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">First Name</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" placeholder="Enter Name">
                                                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Last Name</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" placeholder="Enter Name">
                                                <i class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Email Address</label>
                                            <div class="form-group position-relative">
                                                <input type="email" class="form-control text-dark ps-5 h-55" placeholder="Enter Email Address">
                                                <i class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Phone</label>
                                            <div class="form-group position-relative">
                                                <input type="number" class="form-control text-dark ps-5 h-55" placeholder="Enter Phone Number">
                                                <i class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Address</label>
                                            <div class="form-group position-relative">
                                                <input type="number" class="form-control text-dark ps-5 h-55" placeholder="Your Location">
                                                <i class="ri-map-pin-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Country</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                    <option selected class="text-dark">United Kingdom</option>
                                                    <option value="1" class="text-dark">United States</option>
                                                    <option value="2" class="text-dark">Canada</option>
                                                    <option value="3" class="text-dark">France</option>
                                                </select>
                                                <i class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Town/City</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                    <option selected class="text-dark">California</option>
                                                    <option value="1" class="text-dark">United States</option>
                                                    <option value="2" class="text-dark">Canada</option>
                                                    <option value="3" class="text-dark">France</option>
                                                </select>
                                                <i class="ri-list-ordered position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">State</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                    <option selected class="text-dark">South poal evenue state 4C</option>
                                                    <option value="1" class="text-dark">United States</option>
                                                    <option value="2" class="text-dark">Canada</option>
                                                    <option value="3" class="text-dark">France</option>
                                                </select>
                                                <i class="ri-font-size position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Zip Code</label>
                                            <div class="form-group position-relative">
                                                <input type="number" class="form-control ps-5 h-55" placeholder="Enter number">
                                                <i class="ri-hashtag position-absolute top-50 start-0 translate-middle-y fs-20 ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <label class="label text-secondary">Order Notes :</label>
                                            <div class="form-group position-relative">
                                                <textarea class="form-control ps-5 text-dark" placeholder="Some demo text ... " cols="30" rows="5"></textarea>
                                                <i class="ri-information-line position-absolute top-0 start-0 fs-20 ps-20 pt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="timeline-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    @include('clients.invoice.index')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    @include('clients.quote.index')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- <div class="row">
   
    <div class="col-xl-3 d-none d-xl-block">
       
        <div class="card bg-white border-0 rounded-3 mb-4">
           
            <div class="card-bodyt profile_header">
                <img src="https://prestige.growcrm.io/storage/logos/clients/JQoHybsWWxdO5rktLLrNZ5yJr9PtWH36k82xRw3l/logo.jpg" class="object-contain">
            </div>

            <div class="card-bodyt p-t-0 p-b-0">

                <small class="text-muted">Client Name</small>
                <h6>{{ $client->company }}</h6>
                <small class="text-muted">Telephone</small>
                <h6><a href="tel:0 {{ $client->contact }}">0{{ $client->contact }}</a></h6>
                <small class="text-muted">Account Owner</small>
                <div class="m-b-10">
                    <img src="{{ $profilePicture }}" alt="user" class="img-circle avatar-xsmall">
                    {{ $client->full_name }}
                </div>
                <small class="text-muted">Email</small>
                <h6><a href="mailto: {{ $client->email }}">{{ $client->email }}</a></h6>
    
                <small class="text-muted">Account Status</small>
                <div class="p-b-10">
                    <span class="badge badge-pill badge-success p-t-4 p-l-12 p-r-12">Active</span>
                </div>

         
            </div>
            <div>
                <hr>
            </div>
            <div class="card-bodyti p-t-0 p-b-0">
                <div>
                    <table class="table no-border m-b-0">
                        <tbody>
                            
                            <tr>
                                <td class="p-l-0 p-t-5" id="fx-client-left-panel-invoices">Invoices</td>
                                <td class="font-medium p-r-0 p-t-5">
                                    $1,741.70
                                    <div class="progress">
                                        <div class="progress-bar bg-info  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <
                            <tr>
                                <td class="p-l-0 p-t-5">Payments</td>
                                <td class="font-medium p-r-0 p-t-5">$1,593.00
                                    <div class="progress">
                                        <div class="progress-bar bg-success w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                           
                            <tr>
                                <td class="p-l-0 p-t-5">Completed Projects</td>
                                <td class="font-medium p-r-0 p-t-5">0
                                    <div class="progress">
                                        <div class="progress-bar bg-warning  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                           
                            <tr>
                                <td class="p-l-0 p-t-5">Open Projects</td>
                                <td class="font-medium p-r-0 p-t-5">0
                                    <div class="progress">
                                        <div class="progress-bar bg-danger w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9 col-lg-12">
        <div class="card bg-white border-0 rounded-3 mb-4  h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-4 ">
                    <h3 class="mb-0">Client Overview</h3>
                    <select class="form-select month-select form-control p-0 h-auto border-0 w-90" style="background-position: right 0 center;" aria-label="Default select example">
                        <option selected="">Last 7 Days</option>
                        <option value="1">This Month</option>
                        <option value="2">This Year</option>
                    </select>
                </div>

                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="true">Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices-tab-pane" type="button" role="tab" aria-controls="invoices-tab-pane" aria-selected="false">Invoices</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes-tab-pane" type="button" role="tab" aria-controls="quotes-tab-pane" aria-selected="false">Quotes</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.user.full_name') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->user->full_name) ? $client->user->full_name : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.user.email') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->user->email) ? $client->user->email : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name"
                                            class="pb-2 fs-4 text-gray-600">{{ __('messages.user.contact_number') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->user->contact) ? $client->user->contact : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.client.country') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->country->name) ? $client->country->name : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.client.state') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->state->name) ? $client->state->name : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.client.city') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->city->name) ? $client->city->name : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.client.address') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->address) ? $client->address : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-4 text-gray-600">{{ __('messages.client.note') }}
                                            :</label>
                                        <span class="fs-4 text-gray-800">{{ !empty($client->note) ? $client->note : 'N/A' }}</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-sm-0 mb-5">
                                        <label for="name"
                                            class="pb-2 fs-4 text-gray-600">{{ __('messages.common.created_at') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->created_at) ? $client->created_at->diffForHumans() : __('messages.common.n/a') }}</span>
                                    </div>

                                    <div class="col-sm-6 d-flex flex-column">
                                        <label for="name"
                                            class="pb-2 fs-4 text-gray-600">{{ __('messages.common.updated_at') }}
                                            :</label>
                                        <span
                                            class="fs-4 text-gray-800">{{ !empty($client->updated_at) ? $client->updated_at->diffForHumans() : __('messages.common.n/a') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel" aria-labelledby="invoices-tab" tabindex="0">
                    @include('clients.invoice.index')
                    </div>
                    <div class="tab-pane fade" id="quotes-tab-pane" role="tabpanel" aria-labelledby="quotes-tab" tabindex="0">
                    @include('clients.quote.index')
                    </div>

                </div>


            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xxl-5 col-12">
                <div class="">
                    <h4>{{ $client->company }}</h4>
                </div>
                <div class="d-sm-flex align-items-center mb-5 mb-xxl-0 text-center text-sm-start">
         
                    <div class="image image-circle image-small">
                      
                    </div>
                    <div class="ms-0 ms-md-10 mt-5 mt-sm-0">
                        <h2> Account Owner: </h2>
                        <a href="mailto:" class="text-gray-600 text-decoration-none fs-4">
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->