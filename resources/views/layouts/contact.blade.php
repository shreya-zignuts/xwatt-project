<div class="footer text-white mt-5">
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap footer-form">
            <div class="contact-form mt-3 mt-md-5 mt-xl-0" data-aos="fade-up">
                <h3 class="fw-bold">Contact US</h3>
                <form id="contact-form" method="post">
                    @csrf()
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name"
                            name="user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="company-name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company-name" placeholder="Enter Company Name"
                            name="company_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Your Occupation*</label>
                        <div class="custom-radio-button">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="occupation" id="distributor"
                                    value="D" required>
                                <span class="form-check-label">Distributor</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="occupation" id="epc"
                                    value="EPC" required>
                                <span class="form-check-label">EPC</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="occupation" id="end-user"
                                    value="EU" required>
                                <span class="form-check-label">End-User</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gst-number" class="form-label">GST Number</label>
                        <input type="text" class="form-control" id="gst-number" placeholder="Enter GST Number"
                            name="gst_number">
                    </div>
                    <div class="mb-3">
                        <label for="phone-number" class="form-label">Phone Number*</label>
                        <input type="tel" id="number" name="phone_number" class="form-control"
                            placeholder="Enter Phone Number" autocomplete="off" maxlength="10" pattern="[0-9]{0,10}"
                            title="Please enter a valid phone number with up to 10 digits." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Interested In*</label>
                        <div class="custom-radio-button">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="phase" id="single-phase"
                                    value="SP" required>
                                <span class="form-check-label">Single Phase</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="phase" id="three-phase"
                                    value="TP" required>
                                <span class="form-check-label">Three Phase</span>
                            </label>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity*</label>
                        <div class="custom-radio-button">
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="quantity_range" id="10-50"
                                    value="10-50" required>
                                <span class="form-check-label">10-50</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="quantity_range" id="50-100"
                                    value="50-100" required>
                                <span class="form-check-label">50-100</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="quantity_range" id="100-500"
                                    value="100-500" required>
                                <span class="form-check-label">100-500</span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="quantity_range" id="500+"
                                    value="500+" required>
                                <span class="form-check-label">500+</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary send-msg w-100" name="submit_btn">Send
                        message</button>
                </form>
                <div id="form-message"></div>
            </div>
        </div>
    </div>
</div>
