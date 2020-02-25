@extends('frontend.layout.master_layout')
@section('title','Company Profile')
@section('content')
<!--======Services Section Area Start ======-->
<!-- Hero Area Start -->
<section class="hero-area" style="background: url({{asset('frontend/assets/img/reference_cover.jpg')}});background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-info">
                    <h2>Company References</h2>
                    <a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Company References</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->

<!-- About-us Area Start -->
<section class="about-us-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="about-content">
                    <div class="card">
                        <div class="card-header">
                            <h5>Overseas Suppliers</h5>
                        </div>
                        <div class="card-body">
                            <table width="100%" class="text-left table table-striped table-responsive">
                                <tbody>
                                <tr>
                                    <td width="33%">Agro Corp (Singapore)</td>
                                    <td width="33%">Aldahra ACX (USA)</td>
                                    <td width="33%">Valero (USA)</td>
                                </tr>
                                <tr>
                                    <td>CB Imprex Inc, (Canada)</td>
                                    <td>Global Commodities Traders Inc. (Canada)</td>
                                    <td>PSD Co. (Bulgaria)</td>
                                </tr>
                                <tr>
                                    <td>SAPI S.p.A. (Italy)</td>
                                    <td>Sonac (NL)</td>
                                    <td>Internal Protein LLC (USA)</td>
                                </tr>
                                <tr>
                                    <td>Kagemax (NL)</td>
                                    <td>Hamico Agro BV (NL)</td>
                                    <td>Agro Meal (Uruguya)</td>
                                </tr>
                                <tr>
                                    <td>Total Pet Food Pte. Ltd. (Singapore)</td>
                                    <td>Golden Harvest Grain Exports PTY. (Australia)</td>
                                    <td>ADM (Singapore)</td>
                                </tr>

                                <tr>
                                    <td>Nutricomm Asia (Singapore)</td>
                                    <td>Pan Asia (Singapore)</td>
                                    <td>VNS Minerals (Vietnam)</td>
                                </tr>
                                <tr>
                                    <td>Phoenix Overseas Pvt. Ltd. (India) </td>
                                    <td>Sharma Export Pvt. Ltd. (India) </td>
                                    <td>Kolyani Solvex (p) Ltd.  (India)</td>
                                </tr>
                                <tr>
                                    <td>KS Oil (India)</td>
                                    <td>GS Oil (India)</td>
                                    <td>PKS Ltd. (India)</td>
                                </tr>
                                <tr>
                                    <td>Bengani Export Ltd. (India)</td>
                                    <td>Megavision Centre SDN-BHD. (Malaysia) </td>
                                    <td>Blugrass (USA)</td>
                                </tr>
                                <tr>
                                    <td>Northwest Grains International LLC. (USA).</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card py-3">
                        <div class="card-header">
                            <h5>Local Suppliers </h5>
                        </div>
                        <div class="card-body">
                            <table width="100%" class="text-left table table-striped  table-responsive">

                                <tbody>
                                    <tr>
                                        <td width="25%">Meghna Group</td>
                                        <td width="25%">City Group</td>
                                        <td width="25%">M/S. Shekh Brothers</td>
                                        <td width="25%">Rashid Oil Mill</td>
                                    </tr>
                                    <tr>
                                        <td>Majumder Oil Mill</td>
                                        <td>Agro Tech Int’l</td>
                                        <td>Green Oil Mill</td>
                                        <td>Jamuna Edible Oil Ltd.</td>
                                    </tr>
                                    <tr>
                                        <td>Tamim Agro</td>
                                        <td>Al-Noor</td>
                                        <td>Ali Natural Oil</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card py-3">
                        <div class="card-header">
                            <h5>Our Valid Customers </h5>
                        </div>
                        <div class="card-body">
                            <table width="100%" class="text-left table table-striped  table-responsive">

                              <tbody>
                                <tr>
                                    <td width="33%">Hope Feed Mill Bangladesh ltd.</td>
                                    <td width="33%">CP Bangladesh Ltd.</td>
                                    <td width="33%">ACI Godrej</td>
                                </tr>
                                <tr>
                                    <td>Paragoan Group</td>
                                    <td>Spectra Hexa Feeds Ltd.</td>
                                    <td>Provita Fish Feed Ltd.</td>
                                </tr>
                                <tr>
                                    <td>Nouris</td>
                                    <td>Quality Feeds Ltd. </td>
                                    <td>Planet Feeds Ltd.</td>
                                </tr>
                                <tr>
                                    <td>Bay Agro Industries Ltd.</td>
                                    <td>R.R. P. Agro Farms</td>
                                    <td>R.B. Agro Ltd.</td>
                                </tr>
                                <tr>
                                    <td>Agro Industrial Trust</td>
                                    <td>Rupshi Fish Feed Ltd.</td>
                                    <td>Agrotech Feeds Ltd.</td>
                                </tr>
                                <tr>
                                    <td>Chittagong Feed Ltd.</td>
                                    <td>Shalbahan Farms Ltd.</td>
                                    <td>Ag Agro Industries Ltd.</td>
                                </tr>
                                <tr>
                                    <td>Afil Feed Mills Ltd.</td>
                                    <td>Adnan Agro Ltd.</td>
                                    <td>Dhaka Feed Mill</td>
                                </tr>
                                <tr>
                                    <td>Aftab Feed Products Ltd.</td>
                                    <td>Valuka Feed</td>
                                    <td>Jam Jam Feed</td>
                                </tr>
                                <tr>
                                    <td>MM Aga</td>
                                    <td>Nasrin Agro Ltd.</td>
                                    <td>Biswas Poultry & Fish Feed Ltd.</td>
                                </tr>
                                <tr>
                                    <td> Shahjalal Feed</td>
                                    <td> Janani Trading</td>
                                    <td>Ali Ahammed Poultry Feed Ltd.</td>
                                </tr>
                                <tr>
                                    <td>ASP Trading</td>
                                    <td>MS Trading</td>
                                    <td>Navid Trading</td>
                                </tr>
                                <tr>
                                    <td>Kapathakha Feed</td>

                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-us Area End -->



@endsection