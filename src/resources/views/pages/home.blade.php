@extends('layouts.front')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Dashboard</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <span class="dropdown me-2">
                    <button class="btn btn-light bg-white shadow-sm dropdown-toggle" id="day" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="align-middle mt-n1" data-feather="calendar"></i> Today
                    </button>
                    <div class="dropdown-menu" aria-labelledby="day">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </span>

                <button class="btn btn-primary shadow-sm">
                    <i class="align-middle" data-feather="filter">&nbsp;</i>
                </button>
                <button class="btn btn-primary shadow-sm">
                    <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-xxl d-flex">
                <div class="card illustration flex-fill">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="illustration-text p-3 m-1">
                                    <h4 class="illustration-text">Welcome Back, Chris!</h4>
                                    <p class="mb-0">AppStack Dashboard</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="img/illustrations/customer-support.png" alt="Customer Support"
                                    class="img-fluid illustration-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-success me-2"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> +5.35% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">43</h3>
                                <p class="mb-2">Pending Orders</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-danger me-2"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-danger" data-feather="shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 18.700</h3>
                                <p class="mb-2">Total Revenue</p>
                                <div class="mb-0">
                                    <span class="badge badge-soft-success me-2"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> +8.65% </span>
                                    <span class="text-muted">Since last week</span>
                                </div>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-info" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection