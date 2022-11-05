@extends('layouts.appOne')

@section('style')
<style>
    #myElement {
  background: silver;
  height: 300px;
  text-align: center;
  font: 30px/300px Helvetica, Arial, sans-serif;
}
</style>
@endsection


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card with image and button</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
 

                <div class="card" id="myElement">
                    <img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card with image and button</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div></div>
                


            </div>
            @foreach ($beritaSatus as $berita)
                <div class="col-12 col-lg-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card with image and button</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section class="py-6">
        <div class="container">
            <div class="mb-4 text-center">
                <h2>Multiple demos</h2>
                <p class="text-muted">Multiple color schemes & dashboard layouts available to make this template your very
                    own.</p>
            </div>

            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-default.html?theme=modern" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/modern.png" class="img-fluid card-img-hover landing-img"
                                alt="Modern Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">Modern Theme</h4>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-default.html?theme=light" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/light.png" class="img-fluid card-img-hover landing-img"
                                alt="Light Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">Light Theme</h4>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-default.html?theme=dark" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/dark.png" class="img-fluid card-img-hover landing-img"
                                alt="Dark Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">Dark Theme</h4>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-default.html" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/dashboard-default.png" class="img-fluid card-img-hover landing-img"
                                alt="Default Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">Default Dashboard</h4>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-analytics.html" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/dashboard-analytics.png" class="img-fluid card-img-hover landing-img"
                                alt="Analytics Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">Analytics Dashboard</h4>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <a class="mb-3 card overflow-hidden" href="dashboard-e-commerce.html" target="_blank">
                        <div class="px-4 pt-4">
                            <img src="img/screenshots/dashboard-e-commerce.png" class="img-fluid card-img-hover landing-img"
                                alt="E-Commerce Bootstrap 5 Dashboard Theme" />
                        </div>
                    </a>
                    <h4 class="mb-3">E-commerce Dashboard</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 bg-white">
        <div class="container">

            <div class="mb-4 text-center">
                <h2>Testimonials</h2>
                <p class="text-muted">Here's what some of our 3,000 customers have to say about working with our products.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Nikita</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“We are totally amazed with a simplicity and the design of the template.
                                Probably saved us hundreds of hours of
                                development. We are absolutely amazed with the support Bootlab has provided us.”</p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Jason</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“As a DB guy, this template has made my life easy porting over an old
                                website to a new responsive version. I
                                can focus more on the data and less on the layout.”</p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-6 col-lg-4">
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Alejandro</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“Everything is so properly set up that any new additions I'd make would
                                feel like a native extension of the
                                theme versus a simple hack. I definitely feel like this will save me hundredths of hours I'd
                                otherwise spend on designing.”</p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Richard</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“This template was just what we were after; its modern, works perfectly
                                and is visually beautiful , we couldn't
                                be happier. The support really is excellent, I look forward to working with these guys for a
                                long time to come!”</p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-6 col-lg-4 d-block d-md-none d-lg-block">
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Jordi</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“I ran into a problem and contacted support. Within 24 hours, I not only
                                received a response but even an
                                updated version that solved my problem and works like a charm. Fantastic customer service!”
                            </p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                    <blockquote class="card border">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <img src="img/brands/b.svg" width="48" height="48" alt="Bootstrap" />
                                </div>
                                <div class="ps-3">
                                    <h5 class="mb-1 mt-2">Martin</h5><small
                                        class="d-block text-muted h5 fw-normal">Bootstrap Themes</small>
                                </div>
                            </div>
                            <p class="lead mb-2">“I just began to test and use this theme and I can find that it cover my
                                expectatives. Good support from the
                                developer.”</p>

                            <div class="landing-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h2 class="mb-3">
                        Do you want to win your constituents' hearts?
                    </h2>
                    <a href="https://chatwith.io/s/my-undian" class="align-middle btn btn-success btn-lg mt-n1">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>

    <script type="text/javascript">
var myElement = document.getElementById('myElement');

// create a simple instance
// by default, it only adds horizontal recognizers
var mc = new Hammer(myElement);

// listen to events...
mc.on("panleft panright tap press", function(ev) {
    myElement.textContent = ev.type +" gesture detected.";
});
    </script>
@endsection
