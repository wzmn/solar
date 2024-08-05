@section("title", "B2B Solutions")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white" data-aos="fade-right">B2B Solutions</h1>
  <div class="hero__content text-white mb-3" data-aos="fade-right" data-aos-delay="200">
    Home > Solutions > B2B Solutions
  </div>
</div>
@endsection

@section("content")
<div class="py-5" style="background-image: url('./assets/images/4.png');    background-size: cover;">
  <div class="container">
      <div class="row mb-5">
          <div class="col-12 col-md-5">
              <div class="highlight mb-4 fs-4" data-aos="fade-up">
                Comprehensive 
                <h1 class="bold">B2B Solar Solutions </h1>
                for Your Business Success
              </div>
          </div>
          <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <p>Our Engineering, Procurement, and Construction (EPC) division is dedicated to delivering innovative and reliable solar energy solutions tailored to diverse sectors. Enernew offers bespoke on-site B2B solar solutions, including Rooftop and Ground Mount systems, available through flexible CAPEX (Capital Expenditure) and OPEX (Operational Expenditure) models. This adaptability empowers clients to choose financing options that align with their strategic objectives, ensuring a pathway toward enhanced efficiency, sustainability, and operational excellence.</p>
          </div>
      </div>
      <div class="row bg-white rounded-3 p-5" data-aos="fade-up">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5">
          <img class="rounded-3" src="{{ asset('assets/images/utility-1.png') }}" alt="">
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
          <h4 class="mb-4">Rooftop (CAPEX / OPEX)</h4>
          <p>Our rooftop solar solutions are expertly designed to maximize the utilization of available roof space, delivering efficient and sustainable energy tailored to each client’s needs. Clients can choose between the CAPEX model, where they own the system outright, or the OPEX model, which allows them to pay for the energy generated without the burden of ownership, ensuring a seamless and cost-effective transition to renewable energy</p>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5" data-aos="fade-up">
          <h4 class="mb-4">Ground Mount (CAPEX / OPEX)</h4>
          <p>Our ground-mount solar solutions provide a powerful and reliable energy alternative for businesses with ample land resources. Like our rooftop offerings, clients can select between CAPEX and OPEX models, allowing them to align their choice with their financial strategies and operational goals, thereby fostering a sustainable energy future tailored to their unique requirements.</p>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
          <img class="rounded-3" src="{{ asset('assets/images/utility-2.png') }}" alt="">
        </div>
      </div>
  </div>
</div>
<div class="container">
  <div class="row py-5">
    <div class="col">
      <h2 class="highlight highlight--center mb-5" data-aos="fade-up">
        Custom Solar Solutions for Design and Execution
      </h2>
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('assets/images/b2b-3.png') }}" class="img-fluid rounded-3 mb-5">
          <h4 class="mb-4">Design and Engineering</h4>
          <p>Each Solar Plant Unit within our parks is meticulously crafted and precisely sized, showcasing the expertise of our technical team. This deliberate planning not only minimizes clutter but also maximizes operational efficiency, ensuring peak performance across the entire solar park.</p>
        </div>
        <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="400">
          <img src="{{ asset('assets/images/b2b-4.png') }}" class="img-fluid rounded-3 mb-5">
          <h4 class="mb-4">Turnkey Project Execution</h4>
          <p>Enernew excels in turnkey project execution, having commissioned over 50 MW of solar power projects across India. Our dedicated team of project managers and site engineers manages every aspect of project execution, ensuring that projects are completed on time, within budget, and to the highest standards.</p>
        </div>
        <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="600">
          <img src="{{ asset('assets/images/b2b-5.png') }}" class="img-fluid rounded-3 mb-5">
          <h4 class="mb-4">HSSE Compliance</h4>
          <p>Health, Safety, Security, and Environment (HSSE) are at the core of our project execution. Before starting any project, our team strictly adheres to our HSSE policy. Our HSSE managers conduct regular audits during project execution to ensure compliance, and construction is carried out under the highest safety standards.</p>
        </div>
        <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="800">
          <img src="{{ asset('assets/images/b2b-6.png') }}" class="img-fluid rounded-3 mb-5">
          <h4 class="mb-4">Quality and Assurance</h4>
          <p>Our commitment to excellence is reflected in our rigorous quality and safety standards. Enernew employs comprehensive quality assurance plans, procedures, and work instructions to ensure that every project meets the highest level of quality and safety. Our dedication to quality ensures the long-term reliability and performance of our solar energy solutions.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 cta" style="background-image: url('{{ asset('assets/images/b2b-cta.png') }}'); background-position-y: bottom;background-size: cover;">
  <div class="container">
    <div class="row bg-white rounded-3 justify-content-center py-5" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-5 col text-center" data-aos="fade-up" data-aos-delay="200">
        <i>Discover Enernew's Utility Scale Solar solutions that can revolutionize your energy strategy, leading your business toward a sustainable and prosperous future.</i>        
      </div>
    </div>
  </div> 
</div>
@endsection