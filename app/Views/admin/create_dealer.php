<?= $this->extend('layouts/admin_app') ?>

<?= $this->section('content') ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Dealer Agreement</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dealer</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Dealer Agreement</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- Basic Vertical form layout section start -->
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dealer Agreement</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <?php echo form_open('add-dealer', ['id' => 'dealerAgreement', 'class' => 'form form-vertical','novalidate' => 'novalidate','method'=>'POST']); ?>
                                    <form class="form form-vertical" novalidate>
                                        <div class="form-body">
                                            <div class="watermark">
                                                <img src="/logo_large_bg.png" alt="watermark" width="100%">
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Agreement Date</label>
                                                        <div class="controls">
                                                            <input type='text' class="form-control pickadate" name="agreementDate" placeholder="Enter the agreement date" value="<?= date('j F, Y'); ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Multiple Locations?</label>
                                                        <div class="controls">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                        <input type="radio" name="multipleLocations" value="Y">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">Yes</span>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                        <input type="radio" name="multipleLocations" value="N" checked>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">No</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Do Locations Bill Separately?</label>
                                                        <div class="controls">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                        <input type="radio" name="individualBilling" value="Y">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">Yes</span>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                        <input type="radio" name="individualBilling" value="N" checked>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">No</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="dealer-name">Dealer Name</label>
                                                        <div class="controls">
                                                            <input type="text" id="dealer-name" class="form-control" name="dealerName" placeholder="Enter the dealer name" data-validation-required-message="Enter Dealer Name field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="dba">DBA</label>
                                                        <div class="controls">
                                                            <input type="text" id="dba" class="form-control" name="dba" placeholder="Enter the doing business as .." data-validation-required-message="DBA (Doing Business As) field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="Federal-Tax-ID">Federal Tax ID</label>
                                                        <div class="controls">
                                                            <input type="text" id="Federal-Tax-ID" class="form-control" name="federalTaxId" placeholder="Enter the federal Tax ID" data-validation-containsnumber-regex="^(\d{2})[-](\d{7})$" data-validation-containsnumber-message="Invalid Tax Id Format, Eg. XX-XXXXXXXX" data-validation-required-message="Federal Tax ID field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="dba">D-U-N-S</label>
                                                        <div class="controls">
                                                            <input type="text" id="duns" class="form-control" name="duns" placeholder="Enter the D-U-N-S">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="bussinessStreetAddress">Business Street Address</label>
                                                        <div class="controls">
                                                            <input type="text" id="bussinessStreetAddress" class="form-control" name="bussinessStreetAddress" placeholder="Enter business street address" data-validation-required-message="Business Street Address field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="PO">PO Box / Suite</label>
                                                        <div class="controls">
                                                            <input type="text" id="PO" class="form-control" name="poBox" placeholder="Enter the PO Box / Suite">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="bussinessCity">Business City</label>
                                                        <div class="controls">
                                                            <input type="text" id="bussinessCity" class="form-control" name="bussinessCity" placeholder="Enter business city" data-validation-required-message="Business City field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="bussinessState">Business State</label>
                                                        <div class="controls">
                                                            <select class="select2 form-control" data-validation-required-message="Business State field is required" required>
                                                                <option value="Alaska">Alaska</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="bussinessPostalCode">Business Postal Code</label>
                                                        <div class="controls">
                                                            <input type="text" id="bussinessPostalCode" class="form-control" name="bussinessPostalCode" placeholder="Enter the business postal code" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The postal code may only contain numeric characters." data-validation-required-message="Business Postal Code field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber">Phone Number</label>
                                                        <div class="controls">
                                                            <input type="number" id="phoneNumber" class="form-control" name="phoneNumber" placeholder="Enter the phone number" data-validation-required-message="Phone number field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="fax">Fax</label>
                                                        <div class="controls">
                                                            <input type="number" id="fax" class="form-control" name="fax" placeholder="Enter the fax">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="dealerLicense">Dealer License</label>
                                                        <div class="controls">
                                                            <input type="number" id="dealerLicense" class="form-control" name="dealerLicense" placeholder="Enter the dealer license">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="businessEmail">Business Email</label>
                                                        <div class="controls">
                                                            <input type="number" id="businessEmail" class="form-control" name="businessEmail" placeholder="Enter the business email address" data-validation-required-message="Business Email field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="businessWebsite">Business Website</label>
                                                        <div class="controls">
                                                            <input type="text" id="businessWebsite" class="form-control" name="businessWebsite" placeholder="Enter the business website" data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" data-validation-regex-message="Enter valid website url" data-validation-required-message="Business Website field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="primaryContactFirstName">Primary Contact First Name</label>
                                                        <div class="controls">
                                                            <input type="number" id="primaryContactFirstName" class="form-control" name="primaryContactFirstName" placeholder="Enter Primary Contact First Name" data-validation-required-message="Primary Contact First Name field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="primaryContactLastName">Primary Contact Last Name</label>
                                                        <div class="controls">
                                                            <input type="number" id="primaryContactLastName" class="form-control" name="primaryContactLastName" placeholder="Enter Primary Contact Last Name" data-validation-required-message="Primary Contact Last Name field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="primaryContactPhone">Primary Contact Phone</label>
                                                        <div class="controls">
                                                            <input type="number" id="primaryContactPhone" class="form-control" name="primaryContactPhone" placeholder="Enter Primary Contact Phone" data-validation-required-message="Primary Contact Phone field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="primaryContactEmail">Primary Contact Email</label>
                                                        <div class="controls">
                                                            <input type="email" id="primaryContactEmail" class="form-control" name="primaryContactEmail" placeholder="Enter Primary Contact Email" data-validation-required-message="Primary Contact Email field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="accountsPayableContactFirstName">Accounts Payable Contact First Name</label>
                                                        <div class="controls">
                                                            <input type="text" id="accountsPayableContactFirstName" class="form-control" name="accountsPayableContactFirstName" placeholder="Enter Accounts Payable Contact First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="accountsPayableContactLastName">Accounts Payable Contact Last Name</label>
                                                        <div class="controls">
                                                            <input type="text" id="accountsPayableContactLastName" class="form-control" name="accountsPayableContactLastName" placeholder="Enter Accounts Payable Contact Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="accountsPayableContactPhone">Accounts Payable Contact Phone</label>
                                                        <div class="controls">
                                                            <input type="number" id="accountsPayableContactPhone" class="form-control" name="accountsPayableContactPhone" placeholder="Enter Accounts Payable Contact Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="accountsPayableContactEmail">Accounts Payable Contact Email</label>
                                                        <div class="controls">
                                                            <input type="email" id="accountsPayableContactEmail" class="form-control" name="accountsPayableContactEmail" placeholder="Enter accounts payable contact email address">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" name="copyToShipAddress">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Shipping address is the same as Business address</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="shipAddress">Shipping Address</label>
                                                        <div class="controls">
                                                            <input type="email" id="shipAddress" class="form-control" name="shipAddress" placeholder="Enter shipping address" data-validation-required-message="Shipping address field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="shipCity">Shipping City</label>
                                                        <div class="controls">
                                                            <input type="email" id="shipCity" class="form-control" name="shipCity" placeholder="Enter shipping city" data-validation-required-message="Shipping city field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="shipState">Shipping State</label>
                                                        <div class="controls">
                                                            <select class="select2 form-control" name="shipState" data-validation-required-message="Shipping state field is required" required>
                                                                <option value="Alaska">Alaska</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="shipZip">Shipping Postal Code</label>
                                                        <div class="controls">
                                                            <input type="email" id="shipZip" class="form-control" name="shipZip" placeholder="Enter shipping postal code" data-validation-required-message="Shipping postal code field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="notesField">Notes</label>
                                                        <div class="controls">
                                                            <textarea class="form-control" id="notesField" rows="3" placeholder="Enter your note here.." data-validation-required-message="Shipping postal code field is required" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-1 mb-1">
                                                    <div class="card-content">
                                                        <div class="card-body border-2 border-white rounded">
                                                            <div class="card-text">
                                                                <p>
                                                                    Tr&#252;North Global&#8482; and Retailer each agree as follows:
                                                                </p>
                                                                <ol>
                                                                    <li class="pb-2">
                                                                        Tr&#252;North Global&#8482; will provide marketing and sales brochures, Limited Warranty applications, point-of-sale and other
                                                                        materials to assist Retailer in selling Limited Warranties to purchasers (“Purchasers”), enabling such Purchasers to
                                                                        participate in a Tr&#252;North Global&#8482; Limited Warranty Program. Tr&#252;North Global&#8482; may change the terms of any Limited
                                                                        Warranty, Limited Warranty Program, or cancel any Limited Warranty Program at any time upon notice to Retailer.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer shall not alter, modify, waive, or discharge any terms or conditions of any Limited Warranty, Limited
                                                                        Warranty Program or the materials provided by Tr&#252;North Global&#8482;. Tr&#252;North Global&#8482; shall be responsible for the
                                                                        administration of all Limited Warranty Programs, including registration of all approved applications and
                                                                        determination of claim responsibility.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer shall review each Limited Warranty in detail with each Purchaser and explain the terms, conditions, coverage,
                                                                        and limits of liability, as well as the required maintenance and claims responsibilities of each Limited Warranty.
                                                                        Retailer shall obtain each Purchaser's signature on the Limited Warranty at the time of sale. Once signed, Retailer
                                                                        shall provide each Purchaser with a copy of their Limited Warranty and shall immediately submit a copy of the signed
                                                                        and completed Limited Warranty to Tr&#252;North Global&#8482; via email, DocuSign, fax, or Tr&#252;North Global&#8482; Dealer Portal.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Upon receipt of an invoice from TrüNorth Global™ for payment under any Limited Warranty Program, Retailer shall

                                                                        remit such payment to TrüNorth Global™. Invoices are created from the wholesale prices and any applicable charges

                                                                        for such Limited Warranty Programs specified by TrüNorth Global™’s prevailing rate card(s) provided to Retailer.

                                                                        TrüNorth Global™ has the right to change wholesale prices and charges on such rate card(s) upon 60 days prior notice

                                                                        to Retailer.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer may offer and sell Limited Warranties in accordance with this Agreement at retail prices determined by

                                                                        Retailer and/or TrüNorth Global™’s suggested retail price. Retailer is responsible for collection and payment of all

                                                                        federal, state, and local taxes that may apply to the sale of the Limited Warranties by Retailer under this Agreement.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Claims under any Limited Warranty Program can only be made by the Registered Owner listed under Section I. of

                                                                        the Limited Warranty for such Registered Owner. The Registered Owner is completely responsible for the

                                                                        maintenance, transfers, requested documentation, and other requirements as outlined in the Limited Warranty.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        This Agreement shall commence on the date set forth above and continue until terminated by either party with 60

                                                                        days’ notice prior to the renewal date. Upon the termination of this Agreement, Retailer shall return to TrüNorth

                                                                        Global™ all Limited Warranty Program materials and discontinue use of such materials and the TrüNorth Global™

                                                                        name.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer acknowledges that the Limited Warranty Programs and the materials delivered by TrüNorth Global™

                                                                        constitute the proprietary property of TrüNorth Global™. TrüNorth Global™ remains the sole owner of such

                                                                        proprietary property. Nothing in this Agreement shall be construed as a transfer, license, or assignment of TrüNorth

                                                                        Global™’s rights in such proprietary property. Retailer shall use the Limited Warranty Programs, materials, and

                                                                        TrüNorth Global™ name solely during the term of this Agreement for purposes of offering and selling the Limited

                                                                        Warranty Program. Limited Warranty Programs shall be fully administered and underwritten by TrüNorth Global™.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        TrüNorth Global™ agrees to indemnify and hold Retailer harmless from and against any and all claims, suits, actions,

                                                                        damages, judgments, settlements, liabilities, losses, costs and expenses including reasonable attorney’s fees (“Loss”)

                                                                        arising from any Limited Warranty Program sold by Retailer in accordance with this Agreement, unless such Loss

                                                                        arises from negligence or misconduct of or failure to comply with the terms of this Agreement by Retailer, its

                                                                        contractors, or their respective officers, employees, and agents.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer agrees to indemnify and hold TrüNorth Global™ harmless from any and all Losses arising from the

                                                                        negligence or misconduct of or failure to comply with the terms of this Agreement by Retailer, its contractors or their

                                                                        respective officers, employees, and agents.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Retailer shall not assign, sell, or transfer this Agreement or any of its rights and obligations hereunder without the

                                                                        prior written consent of TrüNorth Global™. No modification, amendment, or supplement to this Agreement shall be

                                                                        effective or binding unless it is made in writing and duly executed by Retailer and TrüNorth Global™.
                                                                    </li>
                                                                    <li class="pb-2">
                                                                        Dispute Resolution:
                                                                        <ol type="a">
                                                                            <li>This Agreement shall be governed by and construed in accordance with the laws of the State of North Carolina,
                                                                                without regard to conflict of law principles.</li>
                                                                            <li>
                                                                                Arbitration Provision and waiver of jury and class action right:
                                                                                <ol type="i">
                                                                                    <li>In the event of any dispute between the parties arising out of or related to this agreement in any way,

                                                                                        including for breach of this agreement, the dispute shall be settled by arbitration administered by the

                                                                                        American Arbitration Association (“AAA”). Arbitration is the sole method of dispute resolution

                                                                                        between the parties for arbitrable claims.
                                                                                    </li>
                                                                                    <li>Arbitration shall be administered in accordance with AAA’s Commercial Arbitration Rules, including,

                                                                                        where applicable, AAA’s Expedited Procedures for certain commercial disputes. The arbitration will be

                                                                                        heard by a single arbitrator selected by AAA. The arbitrator shall have the power to rule on his or her

                                                                                        own jurisdiction, including any objections with respect to the existence, scope, or validity of the

                                                                                        arbitration agreement or the arbitrability of any claim our counterclaim.</li>
                                                                                    <li>
                                                                                        Each of the parties will pay equally all arbitration fees and arbitrator compensation.
                                                                                    </li>
                                                                                </ol>
                                                                            </li>
                                                                        </ol>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 pb-1">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="yourSignature" checked value="signnow">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">Sign Here</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="yourSignature" value="uploadnow">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">or Upload Signature</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                    <div class="SignaturePad">
                                                        <div class="signature"></div>
                                                    </div>
                                                    <!-- SIGNATUREPAD/UPLOAD FILE CODE NEED TO ADD -->
                                                </div>


                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="retailerName">Signature Name</label>
                                                        <div class="controls">
                                                            <input type="text" id="retailerName" class="form-control" name="retailerName" placeholder="Enter signature name" data-validation-required-message="Signature name field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="retailerTitle">Signature Title</label>
                                                        <div class="controls">
                                                            <input type="text" id="retailerTitle" class="form-control" name="retailerTitle" placeholder="Enter signature title" data-validation-required-message="Signature title field is required" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 pull-right">
                                                    <div class="form-group">
                                                        <label for="signedOnDate">Signed On Date</label>
                                                        <div class="controls">
                                                            <input type="text" id="signedOnDate" class="form-control" name="signedOnDate" placeholder="Enter signature name" value="<?= date('d-m-Y') ?>" data-validation-required-message="Signed on date is required" required readonly>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- // Basic Vertical form layout section end -->



        </div>
    </div>
</div>
<!-- END: Content-->
<?= $this->endSection() ?>