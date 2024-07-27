@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Careers</h1>
  <div class="hero__content text-white mb-3">
    Home > Careers
  </div>
</div>
@endsection

@section("content")
<div style="background-image: url('{{ asset('assets/images/7.png') }}');    background-size: cover;">
    <div class="container py-5">
        <div class="row">
            <div class="col mb-5">
                <h2 class="highlight mb-4 highlight--center" data-aos="fade-up">Explore Careers at Enernew</h2>
                <div class="text-center">
                    Join Us in Shaping a Sustainable Future
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <div class="fs-5 mb-2">
                    Company Introduction
                </div>
                <div>
                    Welcome to Enernew, where our mission transcends traditional energy solutions. We're dedicated to pioneering sustainable innovations that redefine the future of power. Our values of integrity, innovation, and community empowerment drive us to deliver excellence in every endeavor.
                </div>
            </div>
            <div class="col-12 col-md-6 py-5">   
                <img src="{{ asset('assets/images/career-1.png') }}" class="img-fluid rounded-3">
            </div>

            <div class="col-12 col-md-6 py-5 mb-5">
                <img src="{{ asset('assets/images/career-2.png') }}" class="img-fluid rounded-3">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
                <div class="fs-5 mb-2">Work Culture and Environment</div>
                <div>At Enernew, we cultivate a dynamic and inclusive work environment that thrives on collaboration and creativity. Our culture fosters a deep sense of purpose as we work toward a common goal of sustainability. We encourage continuous learning and personal growth, supported by a culture of respect and appreciation.</div>
            </div>

            <div class="col-12">
                <div class="fs-5 mb-2 text-center">What Sets Us Apart</div>
                <div class="text-center mb-5">Join Enernew to embark on a journey of impactful work and personal fulfillment. We offer competitive benefits and opportunities for advancement, but more importantly, we provide a platform for you to contribute to something larger than yourself. Our commitment to sustainability extends to our workplace practices, promoting a healthy work-life balance and fostering a culture of innovation.</div>
                <div class="career__cta_img rounded-3 mb-5">
                    <img src="{{ asset('assets/images/career-3.png') }}" class="img-fluid">
                </div>
                <div class="text-center">
                    <a href="/life-at-enernew" class="btn bg-orange">
                        Explore Life@Enernew
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url('{{ asset('assets/images/history-bg.png') }}');    background-size: cover;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="text-center mb-4 bold">Why Join Us</div>
                <div class="text-center">At Enernew, we believe in the power of collective action to drive meaningful change. Join us to work alongside passionate individuals who share your vision for a sustainable future. Experience the satisfaction of contributing to groundbreaking projects that make a lasting impact on communities and the environment alike.</div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="highlight mb-5 highlight--center" data-aos="fade-up">Job Openings</h2>
                <div class="p-5 bg-white text-center rounded-3">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2 mb-5">Discover your potential with Enernew. Explore current opportunities to join our team and play a vital role in shaping the future of renewable energy</div>
                        <div>
                            <a href="/job-openings" class="btn bg-orange">Explore Current Openings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col">
            <h2 class="highlight mb-5 highlight--center" data-aos="fade-up">Employee Testimonials</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="testimonials__grid_item col-lg-6 offset-lg-3 mb-5">
                <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                <div class="content">
                    <div class="fs-7">Joining Enernew has been a career-defining decision. I'm proud to be part of a team that not only innovates in renewable energy but also prioritizes environmental stewardship and community impact.</div>
                    <div>
                        <div class="bold fs-7">Sanjay Kumar</div>
                        <div class="fs-7">Senior Manger (Account & Finance)</div>
                    </div>
                    <div class="img">
                        <img src="{{ asset('assets/images/testimonial-1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/employee-testimonials" class="btn bg-orange">Explore More</a>
            </div>
        </div>
    </div>
</div>
<div class="vision bg-grey" id="vision">
    <div class="container mt-5">
        <div class="row">
            <div class="col mt-5">
                <h2 data-aos="fade-up" class="highlight mb-4 highlight--center">Our Values</h2>
                <div data-aos="fade-up" class="text-center">
                    The Core Values of the company are:
                </div>
                <div class="vision__grid my-5">
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('assets/images/icon-1.png') }}" alt="">
                        <div>Integrity in all  business dealings</div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('assets/images/icon-2.png') }}" alt="">
                        <div>High ethical and professional standards</div>
                    </div>
                    <div class="vision__grid_image">
                        <div class="">
                            <img src="{{ asset('assets/images/cross.png') }}" class="img-fluid" data-aos="zoom-in">
                        </div>
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="300">
                        <img src="{{ asset('assets/images/icon-3.png') }}">
                        An innovative and pragmatic approach
                    </div>
                    <div class="vision__grid_item" data-aos="fade-right" data-aos-delay="400">
                        <img src="{{ asset('assets/images/icon-4.png') }}">
                        Continuous development of people
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="career position-relative">
    <img src="{{ asset('assets/images/career-4.png') }}" class="career__cta_bg">
    <div class="container py-5">
        <div class="row my-5 py-5">
            <div class="col-12">
                <h2 class="highlight mb-4 highlight--center text-white" data-aos="fade-up">Contact Information</h2>
                <div class="text-white text-center" data-aos="fade-up">
                    For more information about career opportunities at Enernew, please reach out to our <br> dedicated HR team at hr@enernew.in or call +91-8800222600
                </div>
            </div>
        </div>
    </div>
</div>
@endsection