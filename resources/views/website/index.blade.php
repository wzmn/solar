@extends("layouts.website")

@section("header")
<div class="d-flex flex-column flex-fill justify-content-center align-items-start">
    <h1>Harnessing Nature's Most Abundant Resource</h1>
    <div class="hero__content mb-3">We are here to unleash the potentials of solar power with break-through clean energy
        solutions that is going to set the pace of various solar power projects of tomorrow.
    </div>
    <a href="/about" class="hero__btn btn btn--black">Read More</a>
</div>
@endsection


@section("content")
<div class="overview pt-5"
    style="background-image: url('./assets/images/2.png');    background-position: 70%;    background-size: cover;">
    <div class="container-fluid mt-5 position-relative">
        <div class="row mb-5">
            <div class="col mb-3" data-aos="fade-up">
                <img src="./assets/images/3.png" class="img-fluid">
                <div class="d-md-flex flex-wrap flex-md-nowrap justify-content-center">
                    <div class="icon" data-aos="fade-up">
                        <div class="icon__box">
                            <img src="./assets/images/icon-14.png" class="img-fluid">
                            <h4>2010</h4>
                            <span>Founding Year</span>
                        </div>
                    </div>
                    <div class="icon" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon__box">
                            <img src="./assets/images/icon-16.png" class="img-fluid">
                            <h4>2000+</h4>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                    <div class="icon" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon__box">
                            <img src="./assets/images/ICON-17.png" class="img-fluid">
                            <h4>750+</h4>
                            <span>Projects Completed</span>
                        </div>
                    </div>
                    <div class="icon" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon__box">
                            <img src="./assets/images/icon-18.png" class="img-fluid">
                            <h4>190+</h4>
                            <span>Companies work with us</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="highlight">Overview</h2>
                <p>
                    Sriram Cables Pvt. Ltd. has unveiled its latest venture, Enernew Pvt. Ltd., a fully owned
                    subsidiary dedicated to renewable energy endeavors. Enernew’s primary focus lies in
                    developing Off-Site Captive Open Access Solar Parks and On-Site C&I Solar Projects, catering
                    to conglomerates across various sectors of the economy. With an illustrious track record of
                    executing over 50 MWp+ Solar projects, Enernew is poised to lead the charge towards a
                    greener future.
                </p>
                <p>
                    Enernew’s mission transcends mere business objectives; it aspires to become a catalyst for
                    sustainable development by delivering clean energy solutions. By harnessing the potential of
                    solar power, Enernew aims to not only meet the energy demands of its clientele but also
                    contribute significantly to environmental conservation efforts. Through innovative
                    technologies and robust project management practices, Enernew is committed to ensuring that
                    every venture contributes positively towards the goal of achieving net zero emissions.
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit inventore officia
                    natus
                    perferendis itaque veniam placeat dicta neque ab aliquid praesentium molestias amet commodi
                    atque, suscipit ea dolor officiis.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit inventore officia
                    natus
                    perferendis itaque veniam placeat dicta neque ab aliquid praesentium molestias amet commodi
                    atque, suscipit ea dolor officiis.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit inventore officia
                    natus
                    perferendis itaque veniam placeat dicta neque ab aliquid praesentium molestias amet commodi
                    atque, suscipit ea dolor officiis.</p>

                <a href="/about" class="btn btn--orange">Read More</a>
            </div>
            <div class="col d-none d-lg-block col-sm-1">

                    <div class="sun__container">
                        <div class="sun position-sticky">
                            <img src="./assets/images/outer.png" class="sun__outer">
                            <img src="./assets/images/inner.png" class="sun__inner">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-relative">
        <div class="row">


        </div>
    </div>
</div>
<div class="solutions pb-5" style="background-image: url('./assets/images/4.png');    background-size: cover;">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up">
            <div class="col">
                <h2 class="text-center mt-5 mb-5 highlight highlight--center">Our Solutions</h2>
            </div>
        </div>
        <div class="row bg-white pt-5">
            <div class="col">
                <ul class="nav nav-pills flex-column flex-md-row mb-3 gap-2 justify-content-center" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Solar Power Park Developer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">B2B Solutions</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Asset Management</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row bg-white p-5 rounded mb-5">
            <div class="col mb-5 col-md-6">

                <div class="tab-content" id="solutions-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="h3">Solar Power Park Developer</div>
                        <p>Enernew is currently developing Utility Scale Solar Parks, which will be available
                            for Captive customers. Our Solar Park will offer the following:</p>

                        <div class="accordion" id="solutions-accordion1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Well Planned individual Solar Plant Units
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Enernew has taken utmost care in structuring and planning the plot
                                        sizing for each Solar Plant Unit in the Solar Park. The process has been
                                        meticulously and carefully designed by our technical team. It has been
                                        divided in an orderly fashion to avoid cluttered free Solar Park.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Permits and approvals
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Enernew has taken utmost care in structuring and planning the plot
                                        sizing for each Solar Plant Unit in the Solar Park. The process has been
                                        meticulously and carefully designed by our technical team. It has been
                                        divided in an orderly fashion to avoid cluttered free Solar Park.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Land Aggregation
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Enernew has taken utmost care in structuring and planning the plot
                                        sizing for each Solar Plant Unit in the Solar Park. The process has been
                                        meticulously and carefully designed by our technical team. It has been
                                        divided in an orderly fashion to avoid cluttered free Solar Park.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="h3">B2B Solutions</div>
                        <p>Tailored Solar Energy Solutions for Commercial & Industrial Clients</p>
                        <div class="accordion" id="solutions-accordion2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Rooftop and Ground-Mount Solutions
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Offering flexible financing options (CAPEX / OPEX) for rooftop and
                                        ground-mounted solar installations, tailored to meet specific client needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Design and Engineering Expertise
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Utilizing an experienced in-house team to design and engineer over 50 MW of
                                        solar plants, ensuring customized solutions that optimize energy efficiency and
                                        operational performance.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Turnkey Project Execution
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Successfully delivering turnkey solar projects across India, managed by
                                        dedicated project managers and site engineers, ensuring seamless execution from
                                        inception to completion.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="h3">Asset Management Services</div>
                        <p>Comprehensive Management for Optimal Solar Asset Performance</p>

                        <div class="accordion" id="solutions-accordion3">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Performance Analytics
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Providing detailed performance reports on energy generation and key metrics,
                                        shared regularly with stakeholders to ensure transparency and informed
                                        decision-making.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Preventive and Routine Maintenance
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Implementing proactive maintenance strategies and routine activities to minimize
                                        downtime and extend the lifespan of solar assets.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Corrective Actions and Issue Resolution
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#solutions-tabContent">
                                    <div class="accordion-body">
                                        Rapid response to any faults or issues, with a dedicated team of skilled
                                        technicians ensuring timely corrective actions to maintain optimal performance.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-items-start d-md-flex">
                <img src="{{ asset('assets/images/5.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

</div>
<div class="our-projects pb-5 pt-5" style="background-image: url('./assets/images/7.png');background-size: cover;">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col">
                <h2 class="text-center mb-5 highlight highlight--center">Our Projects</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div id="projects2" class="mb-3 carousel-dark carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3>Pragati Power Corporation Limited</h3>
                            <div class="bold">Delhi Govt largest single site Rooftop Solar</div>
                            <div class="fs-6 mb-3 projects__content">
                                <p>
                                    To bridge the gap between demand and supply and to give reliable supply to the
                                    Capital City, Delhi Govt. had set up Pragati Power Station, Bawana (PPCL - III) a
                                    1500 MW Gas Turbine station to cater to the growing needs of the people of Delhi.
                                </p>

                                <p>
                                    We are privileged to have constructed Delhi's Largest and most challenging
                                    Distributed Rooftop Solar Power Project for Delhi Govt. at Pragati Power Station,
                                    Bawana of capacity 1.36 MW on a turnkey basis for their captive load purposes. The
                                    project is setup over 14 different locations at a single premise with one of the
                                    roofs being at a whooping height of 160 Ft where over 700 KW Solar Power Plant was
                                    setup. The project was inaugurated by the Chief Minister of Delhi, Mr. Arvind
                                    Kejriwal.
                                </p>

                            </div>
                            <a href="#" class="projects__read_more d-flex align-items-center">
                                <span class="projects__icon">+</span> <span class="d-flex align-items-center h-100">Read
                                    more</span>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <h3>BANSWARA SYNTEX LTD</h3>
                            <div class="bold">Rajasthan’s Largest Single site Rooftop commissioned on textile unit</div>
                            <div class="fs-6 mb-3 projects__content">
                                Banswara Syntex Ltd is a vertically integrated textile company, specializing in the
                                production of yarn, fabric and readymade garments. Currently, Banswara Syntex Ltd. is a
                                public limited company listed on NSE and BSE. Due to our varied and highly specialised
                                product range, we are able to service a number of highly reputed fast fashion brands
                                like Uniqlo, Calvin Klein, Marks and Spencer, Next. Banswara Syntex has its own thermal
                                power plant, which generates over 30 MW of captive power for the mill. For their next
                                step, Banswara Syntex intends to move to solar energy. Sriram Solar is proud to have
                                partnered with Banswara Syntex to completely energise the electricity requirement to the
                                extent of 30 MW. In the first phase, we have been awarded turnkey Solar Power Project
                                EPC of 4.5 MW at their premises located in Banswara.
                            </div>
                            <a href="#" class="projects__read_more d-flex align-items-center">
                                <span class="projects__icon">+</span> <span class="d-flex align-items-center">Read
                                    more</span>
                            </a>
                        </div>
                        <!-- <div class="carousel-item">
                                    <h3>Pragati Power Corporation Limited</h3>
                                    <div class="bold">Nation's Largest Single-Site Rooftop Solar Project</div>
                                    <div class="fs-6 mb-3 projects__content">
                                        In response to the growing energy needs of the capital city, the Delhi Government established Pragati Power Station, Bawana (PPCL-III). This 1500 MW gas turbine station ensures a reliable power supply, addressing the increasing demand and supporting the residents of Delhi.
                                    </div>
                                    <a href="#" class="projects__read_more d-flex align-items-center">
                                        <span class="projects__icon">+</span> <span
                                            class="d-flex align-items-center">Read more</span>
                                    </a>
                                </div> -->
                    </div>
                    <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#projects"
                        data-bs-slide="prev">
                        <svg height="15" viewBox="-111 0 475 475.46667" width="15" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m237.964844 475.464844-237.730469-237.730469 237.730469-237.734375 15.070312 15.066406-222.667968 222.667969 222.667968 222.664063zm0 0" />
                        </svg>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#projects"
                        data-bs-slide="next">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15"
                            viewBox="0 0 511.949 511.949" xml:space="preserve">
                            <g>
                                <path
                                    d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76
                                                   l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213
                                                   l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                            </g>

                        </svg>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div id="projects" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/images/6.png" class="d-block w-100" alt="./assets/images/6.png">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/6.png" class="d-block w-100" alt="./assets/images/6.png">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/6.png" class="d-block w-100" alt="./assets/images/6.png">
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#projects" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#projects" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#projects" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients pt-5" style="background-image: url('./assets/images/8.png');">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 col-sm-5 d-flex justify-content-center flex-column mb-5">
                <h2 data-aos="fade-up" class="highlight">Our Clients</h2>
                <p data-aos="fade-up" data-aos-delay="100">We take pride in serving a diverse and prestigious clientele
                    that spans various industries and sectors. From large corporations and government agencies to
                    educational institutions and residential communities, our clients trust us to deliver reliable,
                    innovative, and sustainable solar energy solutions. Our commitment to excellence and customer
                    satisfaction has enabled us to build strong, long-lasting relationships with each of our valued
                    partners.
                </p>
            </div>
            <div class="col"></div>
            <div class="col-12 col-sm-6 clients__grid">
                <img src="./assets/images/c1.png" class="img-fluid" data-aos="fade-left">
                <img src="./assets/images/c2.png" class="img-fluid" data-aos="fade-left" data-aos-delay="100">
                <img src="./assets/images/c4.png" class="img-fluid" data-aos="fade-left" data-aos-delay="200">
                <img src="./assets/images/c5.png" class="img-fluid" data-aos="fade-left" data-aos-delay="300">
                <img src="./assets/images/c6.png" class="img-fluid" data-aos="fade-left" data-aos-delay="400">
                <img src="./assets/images/c7.png" class="img-fluid" data-aos="fade-left" data-aos-delay="500">
                <img src="./assets/images/c8.png" class="img-fluid" data-aos="fade-left" data-aos-delay="600">
                <img src="./assets/images/c9.png" class="img-fluid">
                <img src="./assets/images/c1.png" class="img-fluid">
                <img src="./assets/images/c2.png" class="img-fluid">
                <img src="./assets/images/c4.png" class="img-fluid">
                <img src="./assets/images/c5.png" class="img-fluid">
                <img src="./assets/images/c6.png" class="img-fluid">
                <img src="./assets/images/c7.png" class="img-fluid">
                <img src="./assets/images/c8.png" class="img-fluid">
                <img src="./assets/images/c9.png" class="img-fluid">
            </div>
        </div>

        <div class="row mt-5 justify-content-center pt-5">
            <div class="col-9 mb-5">
                <div id="clients" class="carousel carousel-dark slide flex-column" data-bs-interval="false">
                    <h2 class="text-center mb-3 highlight highlight--center" data-aos="fade-up">Client Testimonials</h2>

                    <div class="carousel-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center flex-column align-items-center pb-5 gap-2">
                                <svg width="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 57 57" xml:space="preserve">

                                    <g>
                                        <circle style="fill:#3b9d30;" cx="18.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M18.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S22.084,38,18.5,38z
		 M18.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S20.981,27,18.5,27z" />
                                    </g>
                                    <g>
                                        <circle style="fill:#3b9d30;" cx="35.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M35.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S39.084,38,35.5,38z
		 M35.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S37.981,27,35.5,27z" />
                                    </g>
                                    <path style="fill:#3b9d30;" d="M13,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C14,31.553,13.553,32,13,32z" />
                                    <path style="fill:#3b9d30;" d="M30,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C31,31.553,30.553,32,30,32z" />
                                </svg>
                                <i class="text-center mb-3">“Enernew's partnership has significantly enhanced our
                                    operations at India Power Company. Their expertise in solar energy solutions is
                                    exemplary, delivering exceptional results with utmost professionalism and precision.
                                    Enernew's commitment to innovation and sustainability has been instrumental in
                                    advancing our energy management strategies. We highly value our collaboration and
                                    recommend Enernew for their outstanding service and expertise.”
                                </i>
                                <h2 class="h2 mb-0">- Mr. P. Anand</h2>
                                <p>India power company</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center flex-column align-items-center pb-5 gap-2">
                                <svg width="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 57 57" xml:space="preserve">

                                    <g>
                                        <circle style="fill:#3b9d30;" cx="18.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M18.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S22.084,38,18.5,38z
		 M18.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S20.981,27,18.5,27z" />
                                    </g>
                                    <g>
                                        <circle style="fill:#3b9d30;" cx="35.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M35.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S39.084,38,35.5,38z
		 M35.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S37.981,27,35.5,27z" />
                                    </g>
                                    <path style="fill:#3b9d30;" d="M13,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C14,31.553,13.553,32,13,32z" />
                                    <path style="fill:#3b9d30;" d="M30,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C31,31.553,30.553,32,30,32z" />
                                </svg>
                                <i class="text-center mb-3">“Enernew's partnership has significantly enhanced our
                                    operations at India Power Company. Their expertise in solar energy solutions is
                                    exemplary, delivering exceptional results with utmost professionalism and precision.
                                    Enernew's commitment to innovation and sustainability has been instrumental in
                                    advancing our energy management strategies. We highly value our collaboration and
                                    recommend Enernew for their outstanding service and expertise.”
                                </i>
                                <h2 class="h2 mb-0">- Mr. P. Anand</h2>
                                <p>India power company</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center flex-column align-items-center pb-5 gap-2">
                                <svg width="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 57 57" xml:space="preserve">

                                    <g>
                                        <circle style="fill:#3b9d30;" cx="18.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M18.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S22.084,38,18.5,38z
		 M18.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S20.981,27,18.5,27z" />
                                    </g>
                                    <g>
                                        <circle style="fill:#3b9d30;" cx="35.5" cy="31.5" r="5.5" />
                                        <path style="fill:#3b9d30;" d="M35.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S39.084,38,35.5,38z
		 M35.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S37.981,27,35.5,27z" />
                                    </g>
                                    <path style="fill:#3b9d30;" d="M13,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C14,31.553,13.553,32,13,32z" />
                                    <path style="fill:#3b9d30;" d="M30,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1
	c-6.617,0-12,5.383-12,12C31,31.553,30.553,32,30,32z" />
                                </svg>
                                <i class="text-center mb-3">“Enernew's partnership has significantly enhanced our
                                    operations at India Power Company. Their expertise in solar energy solutions is
                                    exemplary, delivering exceptional results with utmost professionalism and precision.
                                    Enernew's commitment to innovation and sustainability has been instrumental in
                                    advancing our energy management strategies. We highly value our collaboration and
                                    recommend Enernew for their outstanding service and expertise.”
                                </i>
                                <h2 class="h2 mb-0">- Mr. P. Anand</h2>
                                <p>India power company</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#clients" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#clients" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#clients" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lets_talk py-5 ">
    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h2 class="highlight highlight--center text-center mb-5">Let's talk</h2>
            </div>
        </div>
        <div class="border p-5 row mb-5">
            <div
                class="col-12 col-md-4 flex-column justify-content-center d-flex py-5 align-items-center border-end border-sm-none">
                <div class="mb-5">
                    <h3 class="highlight">Our Email</h3>
                    <span>contact@enernew.in</span>
                </div>
                <div>
                    <h3 class="highlight">Phone No.</h3>
                    <span>+91-88 00 222 600</span>
                </div>
            </div>
            <div class="col d-none d-lg-block"></div>
            <div class="col-12 col-md-7">
                <form class="lets_talk__form" name="home">
                    <h4>Drop a line</h4>
                    <div class="d-grid lets_talk__form_input_group mb-3">
                        @csrf
                        <label for="Name">
                            <input type="text" placeholder="Name*" name="Name" id="Name" required>
                        </label>
                        <label for="email">
                            <input name="email" id="email" type="email" placeholder="Email Address*" required>
                        </label>
                        <label for="phone">
                            <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                        </label>
                        <label for="reason">
                            <input name="reason" id="reason" type="select" placeholder="Reason for Contact*" required>
                        </label>
                        <label for="zip">
                            <input name="zip" id="zip" type="number" placeholder="Zipcode/Pincode*" required>
                        </label>
                        <label for="city">
                            <input name="city" id="city" type="text" placeholder="City*" required>
                        </label>
                        <label for="state">
                            <input name="state" id="state" type="text" placeholder="State*" required>
                        </label>
                        <label for="country">
                            <input name="country" id="country" type="text" placeholder="Country*" required>
                        </label>
                        <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                        <div class="message_box"></div>
                    </div>
                    <button type="submit" class="btn btn--orange">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="knowledge-center pb-5" style="background-color: #e6e6e6;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 mt-5 text-center highlight highlight--center" data-aos="fade-up">Knowledge
                    Center</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <label for="">
                        <img src="./assets/images/12.png" class="card-img-top" alt="...">
                    </label>
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title highlight mb-3">Keep Your Panels Clean</h5>
                        <p class="card-text">Solar panels don't require a lot of upkeep, but there are some things you
                            can do to keep them powering ...</p>
                        <a href="#" data-aos="fade-right" data-aos-delay="400" class="text-orange">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="./assets/images/10.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title highlight mb-3">Solar Technologies and Techniques</h5>
                        <p class="card-text">Solar irradiation data is needed at all levels of solar power
                            development...</p>
                        <a href="#" data-aos="fade-right" data-aos-delay="500" class="text-orange">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <img src="./assets/images/11.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <h5 class="card-title highlight mb-3">Impacts of Solar Energy</h5>
                        <p class="card-text">As experience with other renewable technologies show, lack of social
                            acceptance and incongruity...</p>
                        <a href="#" data-aos="fade-right" data-aos-delay="600" class="text-orange">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection