<x-us-layout>
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" class="no-underline">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Login
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Login</h1>
            </div>
        </div>


        <div class="container login-container">
            <div class="row">
                <div class="mx-auto col-lg-12">
                    <div class="row">
                        <div class="mx-auto col-md-6">
                            <div class="mb-1 heading">
                                <h2 class="title">Login</h2>
                            </div>

                            <form action="#">
                                <label for="login-email">
                                    Username or email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" id="login-email" required="">

                                <label for="login-password">
                                    Password
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide" id="login-password" required="">

                                <div class="form-footer">
                                    <div class="mb-0 custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lost-password">
                                        <label class="mb-0 custom-control-label" for="lost-password">Remember
                                            me</label>
                                    </div>
                                    .

                                    <a href="forgot-password.html" class="forget-password text-dark form-footer-right">Forgot
                                        Password?</a>
                                        <button type="submit" class="btn btn-dark btn-md w-100">
                                            LOGIN
                                        </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        </div>






    </main>
</x-us-layout>
