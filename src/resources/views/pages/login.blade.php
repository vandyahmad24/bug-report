@extends('layouts.login')

@section('content')


<div class="main d-flex justify-content-center w-100">
    <main class="content d-flex p-0">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Login Page</h1>
                            <p class="lead">
                                Sistem Pelaporan Bug Atsoft
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="{{asset('img/logo.png')}}" alt="Chris Wood"
                                            class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Enter your password" />
                                            <small>
                                                <a href="pages-reset-password.html">Forgot password?</a>
                                            </small>
                                        </div>
                                        <div>
                                            <div class="form-check align-items-center">
                                                <input id="customControlInline" type="checkbox" class="form-check-input"
                                                    value="remember-me" name="remember-me" checked>
                                                <label class="form-check-label text-small"
                                                    for="customControlInline">Remember me next time</label>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="dashboard-default.html" class="btn btn-lg btn-primary">Sign in</a>
                                            <a href="{{ url('google') }}" class="btn btn-lg btn-success">
                                                Login with Google
                                            </a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>



@endsection