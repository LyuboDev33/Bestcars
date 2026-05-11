<x-frontend-layout>

    @section('seo')
        <title>Страницата не е намерена</title>
    @endsection

    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s"
                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <img src="images/404-error-img.png" alt="">
                </div>
                <div class="error-page-content">
                    <div class="error-page-content-heading">
                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            Упс.... страницата не е намерена!
                        </h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                          Страницата, която се опитвате да достъпите не съществува или е недостъпна в момента.
                        </p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.75s" href="/">
                        Към началната страница     
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
