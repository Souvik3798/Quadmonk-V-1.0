@extends('layout/main')
@section('content')

    <!-- breadcrumb -->
    <div class="container mt-5 bc-custom">
        <div class="row justify-content-center align-items-center">
            <div class="col md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item px-3"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- faq section -->
    <section class="faq mt-5">
        <div class="container">
            <h1 class="text-center mb-5">FAQ</h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-dark"> <span class="text-danger">Q</span>uad<span class="text-primary">M</span>onk "<span class="text-primary">#TechMonks</span> for all your <span class="text-primary">#Technical Needs</span> "</h1>
                    <p class="mt-3">Confused about Technology selection? or want a consultation for your upgardation ? we are always there for you for all your technical needs</p>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header " id="panelsStayOpen-headingOne">
                                <button class="accordion-button bc-custom-btn " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                         What are Static Websites?
                        </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p><strong>A static website</strong> contains Web pages with fixed content.Each page is coded in individually and displays the same information to every visitor. Static sites are the most basic type of website. Since static
                                        Web pages contain fixed code, the content of each page does not change unless it is manually updated. This works well for small websites for small Business, Portfolios, Digital Presence, Web VCard and etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button bc-custom-btn collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          What are Dynamic Websites?
                        </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p><strong>Dynamic websites</strong> contain Web pages that are generated in real-time.Most large websites are dynamic since they are easier to maintain than static websites.Dynamic websites that access information from
                                        a database are also called database-driven websites.Dynamic pages, access information from a database. Therefore, to alter the content of a dynamic page, the webmaster may only need to update a database record.
                                        This is especially helpful for large sites that contain hundreds or thousands of pages. It also makes it possible for multiple users to update the content of a website without editing the layout of the pages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button bc-custom-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        What is AMC?
                        </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p> <strong>AMC is Annual Maientence Cost</strong> , which is charged annually after the free Maintenance period expires , this cost depends on the complexity of the product and resuources to be utilised.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button bc-custom-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Will i get free maintenance?
                          </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <p> <strong>Yes</strong> depending on the product we will offer free maintenance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
