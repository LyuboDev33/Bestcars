<x-frontend-layout>

    @section('seo')
        <title>Вход</title>
    @endsection

    <div class="page-contact-us">
        <div class="contact-info-form">
            <div class="container">
                <div class="row">

                    {{-- LEFT SIDE --}}
                    <div class="col-lg-6">
                        <div class="contact-information">
                            <div class="section-title">
                                <h2>Добре дошли отново</h2>
                                <p>Моля, влезте във Вашия профил</p>
                            </div>

                            <div class="contact-info-list">
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-mail.svg') }}" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <p>Сигурна зона за вход</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SIDE (LOGIN FORM) --}}
                    <div class="col-lg-6">
                        <div class="contact-us-form">

                            <form method="POST" action="{{ route('login', ['locale' => app()->getLocale()]) }}">
                                @csrf

                                <div class="row">

                                    {{-- EMAIL --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Имейл</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Въведете Вашия имейл" required autofocus>

                                        @error('email')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- PASSWORD --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Парола</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Въведете Вашата парола" required>

                                        @error('password')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- REMEMBER ME --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                id="remember_me">
                                            <label class="form-check-label" for="remember_me">
                                                Запомни ме
                                            </label>
                                        </div>
                                    </div>

                                    {{-- FORGOT PASSWORD --}}
                                    @if (Route::has('password.request'))
                                        <div class="col-lg-12 mb-3">
                                            <a href="{{ route('password.request',  ['locale' => app()->getLocale()]) }}">
                                                Забравена парола?
                                            </a>
                                        </div>
                                    @endif

                                    {{-- SUBMIT --}}
                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default">
                                                Вход
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
