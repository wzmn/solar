@section("title", "Employee Testimonials")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
    <h1 class="text-white">Testimonials</h1>
    <div class="hero__content text-white mb-3">
        Home > Careers > Employee Testimonials
    </div>
</div>
@endsection

@section("content")
<div class="container my-5 testimonials">
    <div class="row mb-5">
        <div class="col-12">
            <h1 data-aos="fade-up" class="highlight text-center highlight--center mb-4 pb-3">
                Employee Testimonials
            </h1>
            <div class="content" data-aos="fade-up">
                <p>
                    Gain insight into the experiences of our team members at Enernew. Hear firsthand accounts of personal and professional growth in an environment that fosters innovation and collaboration. Discover how our employees contribute to impactful projects and embrace supportive mentorship, shaping their careers. These stories and experiences serve as an inspiring testament to our collective journey towards sustainability.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        
            
                <div class="testimonials__grid_item col-lg-6 mb-5">
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
                <div class="testimonials__grid_item col-lg-6 mb-5">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">Working at Enernew has been a transformative experience. I'm inspired by our shared commitment to innovation and sustainability.</div>
                        <div>
                            <div class="bold fs-7">Arpita Sharma</div>
                            <div class="fs-7">Manger (Human Resource)</div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/images/testimonial-2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="testimonials__grid_item col-lg-6 mb-5 offset-lg-3">
                    <img src="{{ asset('assets/images/test-bg.png') }}" class="bg">
                    <div class="content">
                        <div class="fs-7">Enernew's culture of collaboration and empowerment has enabled me to grow both personally and professionally</div>
                        <div>
                            <div class="bold fs-7">Gurpreet Singh</div>
                            <div class="fs-7">Site Incharge  (Civil Works)</div>
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/images/testimonial-3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            
    </div>
</div>
@endsection