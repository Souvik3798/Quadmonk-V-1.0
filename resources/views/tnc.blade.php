@extends('layout/main')
@section('content')
    <!-- breadcrumb -->
    <div class="container mt-5 bc-custom">
        <div class="row justify-content-center align-items-center">
            <div class="col md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item px-3"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terms and Conditons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

   <!-- faq section -->
    <section class="tandC mt-5">
        <div class="container">
            <h1 class="text-center mb-5">Terms and Conditions</h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                   <ol>
                    <li>* The pricing may decrease or increase depending on the complexity</li>
                    <li>** Hosting & Domain service is only for 1 year from the date of Advance Pay. </li>
                    <li>^ Secure Admin Panel is considered as it is only restricted to 2 Admin Users.</li>
                    <li>The Above pricing depends on current market price and may vary with time.</li>
                    <li>Development will only be initiated when 50% of development cost is paid in
                        advance.</li>
                    <li>The giving pricing is only valid for the give time (expiry date).</li>
                    <li>*^Maintenance includes the following:
                        <ul>
                            <li>Pages content updates</li>
                            <li>Replace images i.e., Pictures & Graphics (Need to be provided by client)</li>
                            <li>Technical Support</li>
                            <li>Bug fixing on our developed sys/project/app/webapp (if
                                interference/intrusion/modification found which is not done by QuadMonk Solutions
                                all services free/paid will be revoked with immediate effect).</li>
                                <li>Assistance & Training for our developed sys/project/app/webapp.</li>
                        </ul>
                    </li>
                    <li>Delivery will be made within 60 Days(max) of Advance pay, Debugging/Testing
                        & Solving can take additional time depending on Complexity.</li>
                    <li>System/Project/App/Webapp can only be hosted/Started once the full payment is
                        done if payment is due for more than 2 weeks of intimation of completion of
                        System/Project/App/Webapp then this deal will be considered Expired and no
                        refund will be provided. Hence by paying the additional convenience fee client
                        can re initiate the process again within 1 month from the intimation, if fails then
                        deal will be considered as terminated.</li>
                    <li>After Completion of development process client has to pay the rest of 30% of
                        total amount before putting the System/Project/App/Webapp in
                        Testing/Debugging phase if client fails to pay within 2 weeks of intimation of
                        completion of development of System/Project/App/Webapp then this deal will be
                        considered Expired and no refund will be provided. Hence by paying the
                        additional convenience fee client can re initiate the process again with 1 month
                        from the intimation if fails then this deal will be considered as terminated.</li>
                    <li>And rest 30% should be paid on the date of delivery of
                        System/Project/App/Webapp.</li>
                    <li>Free Maintenance & Support will be started from the date of delivery but for the
                        all-other services it will be considered from the date of Advance pay.</li>
                    <li>QuadMonk Solutions will not take any responsibility of any User Data Leaks/Hacked
                        system or any kind of hazards/Virus attacks or any kinds of attacks on
                        System/Project/App/Webapp until any kind of protection or system security fees
                        is charged on Add-ons basis or included in pack.</li>
                    <li>.No Changes/Adding or Removing of Modules or Functionality are allowed after
                        development process is completed if client wish to add/remove functionalities
                        additional fees have to be paid depend on the scope of work and complexity (No
                        Coupons & Discounts).</li>
                    <li>Content should be provided from your end including Logo, Copyright Images,
                        Contact Details & Navigation Items.</li>
                    <li>If client cancels/terminate the deal at any point of development or in any phase
                        he/she/they will not be provided any kind of refund or any Source Code,
                        Database Access, Domain & Hosting Credentials until they/she/he pays the white
                        labelling charge and all discounts as well as services will be revoked and client
                        may black listed from us for other projects or products and can also be banned
                        from dev community in future.</li>
                        <li>If client utilizes more resources than the allocated resources then they/he/she
                            might be charged for overutilization of resources or can upgrade current plan or
                            can remove obsolete data.</li>
                        <li>Source Code, Database Access, Domain & Hosting Credentials will not be
                            provided to you until deal is Expired or Terminated. After Terminated or
                            Expiring of deals we take necessary steps as per the need of the hour.</li>
                        <li>Website charge is only 1 time but AMC and Renewable resources charges can
                            occur yearly or anytime as per resource utilization.</li>
                            <li>Signature line will be embedded in footer, if you want to make it 100% White
                                Labelled then it will be additionally charged.</li>
                            <li>Updating of System/App/WebApp/Project will be additionally charged based on
                                complexity and scope of work.</li>
                                <li>This web app is under warranty period of 1 year from the date of delivery and it
                                    can be termed void at any time if found interfering with the codes or anything in
                                    which client access is restricted except the developers of this app.</li>
                                <li>After delivery of the product will not be responsible for any legal mishaps as we
                                    have made this as per client requirement for the client.
                                    </li>
                                <li>QuadMonk Solutions software codes (not including open-source software) are copyrights
                                    of QuadMonk Solutions. The codes can be handed over at an additional cost for use once
                                    all previous invoices are settled, on the condition that the codes are used only for
                                    use or modification for re-use for further development for the specified client or
                                    subsequent owners of that legal entity. Under no circumstance, the codes will be
                                    allowed to be used for re-selling or duplication purposes.
                                    </li>
                                <li>All estimates/quotes are based on our understanding of your requirements and as
                                    per given time-frame. Any changes to the functionality including microimprovements, may incur additional costs accordingly. Please ensure and clarify
                                    our understanding in a face-to-face meeting.</li>
                                <li>By accepting a quote, you agree to and accept the terms and conditions of
                                    QuadMonk Solutions. Acceptance can be verbal, by email, payment of Initiation, signing a
                                    quote.</li>
                                <li>We will make every effort to complete the project/changes in the given
                                    timeframe. Reasonable delays are accepted if functionalities are redefined or
                                    modified.</li>
                                <li>Notwithstanding any other provision in the agreement, in consideration of the
                                    Customer entering into this agreement with QuadMonk, upon full payment of any
                                    outstanding invoices, QuadMonk will grant an unconditional license to the
                                    Customer to reproduce, publish, communicate, use, exploit, vary, or otherwise
                                    deal with 1) the graphics, 2) texts and 3) images used in the published website
                                    and associated of form and functionality. This will not include the intellectual
                                    property relating to the production of the website including the digital strategies,
                                    programming codes, database structures, scripts, forms or functionalities</li>
                                <li>QuadMonk Solutions offer packages in co-ordination with third party providers. Changes
                                    to the third-party provider’s rules and policies may ultimately affect the services
                                    we provide or the terms and conditions herein and we are not responsible for
                                    anything happens in third party provider’s rules and policies and its effect on you.</li>
                                <li>All communications/correspondences are generally done via emails, calls or
                                    WhatsApp. It is client’s responsibility to keep us updated.</li>
                                    <li>.Terms & Conditions and Privacy Policy can be change at any time without prior
                                   notice clients can check our Updated Terms & Conditions and Privacy Policy at
                                our website <a href="https://quadmonk.com/">QuadMonk Solutions</a> .</li>

                   </ol>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
       
    </section>

@endsection
