@extends('layouts.app')

@section('content')
    <!-- service request section -->
    <section class="service-request">
        <div class="container">
            <p class="service-title">SERVICE<br /> REQUEST</p>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="input-group search-bar d-flex align-items-center mt-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="form-control" placeholder="Please enter the device Serial number"
                            aria-label="Device SN">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Serial number</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>MODEL</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>WARRANTY START DATE</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>WARRANTY END DATE</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>customer name</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>phone number</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>address 1</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>address 2</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>village/city</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>district</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>state</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="disclaimer">
                        <span class="service">Legal Disclaimer</span>
                        <p id="text-content">
                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            <span class="see-more">...</span>
                            <span class="full-text">
                                Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            </span>
                        </p>
                        <div class="seemore_less">
                            <span id="see-more-btn"
                                class="see-more-btn text-danger text-decoration-underline cursor-pointer">See
                                More</span>
                            <span id="see-less-btn"
                                class="see-less-btn text-danger text-decoration-underline cursor-pointer">See
                                Less</span>
                        </div>
                    </div>
                    <hr />

                    <div class="upgrade-info">
                        <span class="service">Warranty Upgrade Informations</span>
                        <p>
                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            <span class="see-more1">...</span>
                            <span class="full-text1">
                                Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            </span>
                        </p>
                        <div class="seemore_less1">

                            <span id="read-more-btn1"
                                class="see-more-btn1 text-danger text-decoration-underline cursor-pointer">See
                                More</span>
                            <span id="read-less-btn1"
                                class="see-less-btn1 text-danger text-decoration-underline cursor-pointer">See
                                Less</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
