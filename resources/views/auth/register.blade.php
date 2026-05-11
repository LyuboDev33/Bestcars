<x-frontend-layout>

  @section('seo')
        <title>Регистрация</title>
    @endsection

    <div class="page-contact-us">
        <div class="contact-info-form">
            <div class="container">
                <div class="row">

                    {{-- LEFT SIDE --}}
                    <div class="col-lg-6">
                        <div class="contact-information">
                            <div class="section-title">
                                <h2>Създаване на профил</h2>
                                <p>Регистрирайте се, за да получите достъп</p>
                            </div>

                            <div class="contact-info-list">
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-mail.svg') }}" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <p>Сигурна регистрация</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT SIDE (REGISTER FORM) --}}
                    <div class="col-lg-6">
                        <div class="contact-us-form">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">

                                    {{-- NAME --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Име</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Въведете Вашето име" required
                                            autofocus>

                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Имейл</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Въведете Вашия имейл" required>

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
                                            placeholder="Въведете парола" required>

                                        @error('password')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- CONFIRM PASSWORD --}}
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Потвърди парола</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Повторете паролата" required>

                                        @error('password_confirmation')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- LOGIN LINK --}}
                                    <div class="col-lg-12 mb-3">
                                        <a href="{{ route('login') }}">
                                            Вече имате профил? Вход
                                        </a>
                                    </div>

                                    {{-- SUBMIT --}}
                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default">
                                                Регистрация
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
