<x-frontend-layout>

    @section('seo')
        <title>Контакти</title>
    @endsection

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="contact-info-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Contact Information Start -->
                        <div class="contact-information">
                            <!-- Contact Information Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('contact.info_title') }}</h2>
                                <p>{{ __('contact.info_description') }}</p>
                            </div>
                            <!-- Contact Information Title End -->

                            <!-- Contact Information List Start -->
                            <div class="contact-info-list">

                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="icon-box">
                                        <img src="images/icon-phone.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <p>{{ __('contact.info_phone') }}</p>
                                    </div>
                                </div>

                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon-box">
                                        <img src="images/icon-mail.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <p>{{ __('contact.info_email') }}</p>
                                    </div>
                                </div>

                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                    <div class="icon-box">
                                        <img src="images/icon-location.svg" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <p>{{ __('contact.info_address') }}</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Contact Information List End -->

                            <!-- Contact Information Social Start -->
                            <div class="contact-info-social wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Contact Information Social End -->
                        </div>
                        <!-- Contact Information End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Contact Form Start -->
                        <div class="contact-us-form">
                            <form id="contactForm"
                                action="{{ route('contact.form.send', ['locale' => app()->getLocale()]) }}"
                                method="POST">
                                @csrf
                                <div class="row">

                                    <div class="form-group col-md-6 mb-4">
                                        <label>{{ __('contact.form_first_name') }}</label>
                                        <input type="text" name="first_name" class="form-control"
                                            value="{{ old('first_name') }}"
                                            placeholder="{{ __('contact.form_first_name_placeholder') }}" required>
                                        @error('first_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>{{ __('contact.form_last_name') }}</label>
                                        <input type="text" name="last_name" class="form-control"
                                            value="{{ old('last_name') }}"
                                            placeholder="{{ __('contact.form_last_name_placeholder') }}" required>
                                        @error('last_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>{{ __('contact.form_email') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}"
                                            placeholder="{{ __('contact.form_email_placeholder') }}" required>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>{{ __('contact.form_phone') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone') }}"
                                            placeholder="{{ __('contact.form_phone_placeholder') }}" required>
                                        @error('phone')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <label>{{ __('contact.form_message') }}</label>
                                        <textarea name="message" class="form-control" rows="4"
                                            placeholder="{{ __('contact.form_message_placeholder') }}" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default">{{ __('contact.form_submit') }}</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            @if (session('successMessageSent'))
                                <div class="alert alert-success alert-dismissible fade show mt-4 rounded-5"
                                    role="alert">
                                    {{ session('successMessageSent') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <!-- Contact Form End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

</x-frontend-layout>
