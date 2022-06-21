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

    <!--Section: FAQ-->
<section class="container">
    <h3 class="text-center mb-0 mt-5  text-primary fw-bold">FAQ</h3>
    <p class="text-center mb-5 col-md-5" >
        <center>
            <h1 class="text-dark"> <span class="text-danger">Q</span>uad<span class="text-primary">M</span>onk "<span class="text-primary">#TechMonks</span> for all your <span class="text-primary">#Technical Needs</span> "</h1>
            <p class="mt-3">Confused about Technology selection? or want a consultation for your upgardation ? we are always there for you for all your technical needs</p>
        </center>
    </p>

    <div class="row" style="margin-top: 40px;">
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fa-solid fa-window-maximize text-primary pe-2"></i>What are Static Websites?</h6>
        <p>
          <strong><u>A static website</u></strong> contains Web pages with fixed content.Each page is coded in individually and displays the same information to every visitor. Static sites are the most basic type of website. Since static
          Web pages contain fixed code, the content of each page does not change unless it is manually updated. This works well for small websites for small Business, Portfolios, Digital Presence, Web VCard and etc.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fa-solid fa-window-restore text-primary pe-2"></i> What are Dynamic Websites?</h6>
        <p>
          <strong><u>Dynamic websites</u></strong> contain Web pages that are generated in real-time.Most large websites are dynamic since they are easier to maintain than static websites.Dynamic websites that access information from
          a database are also called database-driven websites.Dynamic pages, access information from a database. Therefore, to alter the content of a dynamic page, the webmaster may only need to update a database record.
          This is especially helpful for large sites that contain hundreds or thousands of pages. It also makes it possible for multiple users to update the content of a website without editing the layout of the pages.
        </p>
      </div>


      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fa-solid fa-indian-rupee-sign text-primary pe-2"></i> What is AMC?
        </h6>
        <p><strong><u>AMC is Annual Maientence Cost</u>,</strong> which is charged annually after the free Maintenance period expires , this cost depends on the complexity of the product and resuources to be utilised.</p>
      </div>


      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i>
            What is SSD hosting?
        </h6>
        <p>
           <b><u>Solid State Drive(SSD)</u></b> hosting plans run on servers that store your data on solid-state drives (SSDs). These devices use integrated circuit assemblies to store data.SSDs are the latest big advancement in data storage technology, resulting in faster and more reliable hosting for your website than servers with traditional hard-disk drives (HDDs).
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fa-solid fa-gears text-primary pe-2"></i> Will i get free maintenance?
        </h6>
        <p>
            <strong>Yes</strong> depending on the product we will offer free maintenance.
        </p>
      </div>



      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="fa-brands fa-google-play text-primary pe-2"></i>
            What is Google play console?</h6>
        <p>
            Google Play Developer Console is the platform that Google provides for Google Play and Android developers to publish and monitor their app's performance in the Google Play store.
        </p>
      </div>
    </div>
  </section>
  <!--Section: FAQ-->

@endsection
