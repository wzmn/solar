@extends("layouts.website")

@section("content")
<div class="overview pt-5" style="background-image: url('./images/2.png');    background-size: cover;">
    <div class="container-fluid mt-5 position-relative">
        <div class="row mb-5">
            <div class="col-12 col-sm-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="highlight">About Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit inventore officia
                    natus
                    perferendis itaque veniam placeat dicta neque ab aliquid praesentium molestias amet commodi
                    atque, suscipit ea dolor officiis.</p>
                <div class="btn btn--orange">Read More</div>
            </div>
            <div class="col-sm-1"></div>

        </div>
    </div>
    <div class="container position-relative">
        <div class="row">
            <div class="col d-flex flex-wrap flex-md-nowrap justify-content-center">
                <div class="icon" data-aos="fade-up">
                    <img src="./images/icon-14.png" class="img-fluid">
                    <h4>2010</h4>
                    <span>Founding Year</span>
                </div>
                <div class="icon" data-aos="fade-up" data-aos-delay="100">
                    <img src="./images/icon-16.png" class="img-fluid">
                    <h4>2000+</h4>
                    <span>Happy Customers</span>
                </div>
                <div class="icon" data-aos="fade-up" data-aos-delay="200">
                    <img src="./images/ICON-17.png" class="img-fluid">
                    <h4>750+</h4>
                    <span>Projects Completed</span>
                </div>
                <div class="icon" data-aos="fade-up" data-aos-delay="300">
                    <img src="./images/icon-18.png" class="img-fluid">
                    <h4>190+</h4>
                    <span>Companies work with us</span>
                </div>
            </div>
            <div class="col d-none d-md-block">
                <div class="sun__container">
                    <div class="sun position-sticky">
                        <img src="./images/outer.png" class="sun__outer">
                        <img src="./images/inner.png" class="sun__inner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection