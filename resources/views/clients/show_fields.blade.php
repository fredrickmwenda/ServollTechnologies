<div class="row">
    <!--left panel-->
    <div class="col-xl-3 d-none d-xl-block">
        <!-- Column -->
        <div class="card">
           <!--has logo-->
            <div class="card-bodyt profile_header">
                <img src="https://prestige.growcrm.io/storage/logos/clients/JQoHybsWWxdO5rktLLrNZ5yJr9PtWH36k82xRw3l/logo.jpg" class="object-contain">
            </div>

            <div class="card-bodyt p-t-0 p-b-0">
                
                <small class="text-muted">Client Name</small>
                <h6>{{ $client->company }}</h6>
                <small class="text-muted">Telephone</small>
                <h6><a href="tel:0 {{ $client->user->contact }}">0{{ $client->user->contact }}</a></h6>
                <small class="text-muted">Account Owner</small>
                <div class="m-b-10">
                    <img src="{{ $client->user->profile_image }}" alt="user" class="img-circle avatar-xsmall">
                    {{ $client->user->full_name }}
                </div>
                <small class="text-muted">Email</small>
                <h6><a href="mailto: {{ $client->user->email }}">{{ $client->user->email }}</a></h6>
                    <!-- <img src="https://prestige.growcrm.io/storage/avatars/Z5PpK5n0tKjyf1qUP4y0Yrk41I31y6roC2E2P3Vn/avatar.jpg" alt="user" class="img-circle avatar-xsmall"> Amanda Omar</div> -->
                <!-- <small class="text-muted">Category</small>
                <div class="p-b-10">
                    <span class="badge badge-pill badge-primary p-t-4 p-l-12 p-r-12">Default</span>
                </div> -->
                <small class="text-muted">Account Status</small>
                <div class="p-b-10">
                    <span class="badge badge-pill badge-success p-t-4 p-l-12 p-r-12">Active</span>
                </div>

                <small class="text-muted">Tags</small>
                <div class="l-h-24">
                    <!-- <span class="label label-rounded label-default tag p-t-3 p-b-3">branding-services</span> -->
                    <!-- <span class="label label-rounded label-default tag p-t-3 p-b-3">social-media-design</span> -->
                </div>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-bodyti p-t-0 p-b-0">
                <div>
                    <table class="table no-border m-b-0">
                        <tbody>
                            <!--invoices-->
                            <tr>
                                <td class="p-l-0 p-t-5"id="fx-client-left-panel-invoices">Invoices</td>
                                <td class="font-medium p-r-0 p-t-5">
                                    $1,741.70
                                    <div class="progress">
                                        <div class="progress-bar bg-info  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <!--payments-->
                            <tr>
                                <td class="p-l-0 p-t-5">Payments</td>
                                <td class="font-medium p-r-0 p-t-5">$1,593.00
                                    <div class="progress">
                                        <div class="progress-bar bg-success w-100 h-px-3" role="progressbar"aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <!--completed projects-->
                            <tr>
                                <td class="p-l-0 p-t-5">Completed Projects</td>
                                <td class="font-medium p-r-0 p-t-5">0
                                    <div class="progress">
                                        <div class="progress-bar bg-warning  w-100 h-px-3" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <!--open projects-->
                            <tr>
                                <td class="p-l-0 p-t-5">Open Projects</td>
                                <td class="font-medium p-r-0 p-t-5">0
                                    <div class="progress">
                                        <div class="progress-bar bg-danger w-100 h-px-3" role="progressbar"aria-valuenow="25" aria-valuemin="0"
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
        <div class="card h-100">
            <ul class="nav nav-tabs mb-5 pb-1 pt-10 pl-custom overflow-auto flex-nowrap text-nowrap" id="myTab" role="tablist">
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link active p-0" id="overview-tab" data-bs-toggle="tab"
                        data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
                        {{ __('messages.invoice.overview') }}
                    </button>
                </li>
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link p-0" id="users-tab" data-bs-toggle="tab"
                        data-bs-target="#users" type="button" role="tab" aria-controls="users" aria-selected="true">
                        {{ __('Users') }}
                    </button>
                </li>
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link p-0" id="projects-tab" data-bs-toggle="tab"
                        data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="true">
                        {{ __('Projects') }}
                    </button>
                </li>
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link p-0" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices"
                        type="button" role="tab" aria-controls="invoices" aria-selected="false">
                        {{ __('messages.invoices') }}
                    </button>
                </li>
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link p-0" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#quotes"
                        type="button" role="tab" aria-controls="quotes" aria-selected="false">
                        {{ __('messages.quotes') }}
                    </button>
                </li>
                <li class="nav-item position-relative me-7 mb-3" role="presentation">
                    <button class="nav-link tab-link p-0" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes"
                        type="button" role="tab" aria-controls="notes" aria-selected="false">
                        {{ __('notes') }}
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
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
                                        class="fs-4 text-gray-800">{{ !empty($client->user->created_at) ? $client->user->created_at->diffForHumans() : __('messages.common.n/a') }}</span>
                                </div>
                                @php
                                    $clientUpdateTime = $client->updated_at;
                                    $userUpdateTime = $client->user->updated_at;
                                    $updateTime = max($clientUpdateTime, $userUpdateTime);
                                @endphp
                                <div class="col-sm-6 d-flex flex-column">
                                    <label for="name"
                                        class="pb-2 fs-4 text-gray-600">{{ __('messages.common.updated_at') }}
                                        :</label>
                                    <span
                                        class="fs-4 text-gray-800">{{ !empty($client->user->updated_at) ? $updateTime->diffForHumans() : __('messages.common.n/a') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="active-tab" id="clientActiveTab" value="{{ $activeTab }}">
                <div class="tab-pane fade" id="invoices" role="tabpanel" aria-labelledby="invoices-tab">
                    @include('clients.invoice.index')
                </div>
                <div class="tab-pane fade" id="quotes" role="tabpanel" aria-labelledby="quotes-tab">
                    @include('clients.quote.index')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xxl-5 col-12">
                <div class="">
                    <h4>{{ $client->company }}</h4>
                </div>
                <div class="d-sm-flex align-items-center mb-5 mb-xxl-0 text-center text-sm-start">
         
                    <div class="image image-circle image-small">
                        <img src="{{ $client->user->profile_image }}" alt="user" class="object-contain">
                    </div>
                    <div class="ms-0 ms-md-10 mt-5 mt-sm-0">
                        <h2> Account Owner: {{ $client->user->full_name }}</h2>
                        <a href="mailto:{{ $client->user->email }}" class="text-gray-600 text-decoration-none fs-4">
                            {{ $client->user->email }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

