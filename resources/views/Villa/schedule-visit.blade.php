{{-- @extends('layouts.main')

@section('container')
<div class="container mt-5 mb-5">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl ">
            <div class="card mb-4 ">
                <div class="card-header d-flex align-items-center justify-content-between ">
                    <h5 class="mb-0"></h5>
                    <small class="text-muted float-end">Schedule a Visit Form</small>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text bg-light"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" class="form-control text-secondary"
                                        id="basic-icon-default-fullname" placeholder="name" aria-label="name"
                                        aria-describedby="basic-icon-default-fullname2" name="name" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="text" id="basic-icon-default-email" class="form-control text-secondary"
                                        placeholder="email" aria-label="email"
                                        aria-describedby="basic-icon-default-email2" />
                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input type="text" id="basic-icon-default-phone"
                                        class="form-control phone-mask text-secondary" placeholder="phone number"
                                        aria-label="phone number" aria-describedby="basic-icon-default-phone2" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Date</label>
                            <div class="col-sm-10 ">
                                <div class="input-group input-group-merge ">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-buildings"></i></span>
                                    <input type="date" id="basic-icon-default-company"
                                        class="form-control text-secondary" placeholder="" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-company2" name="date" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Time</label>
                            <div class="col-sm-10 ">
                                <div class="input-group input-group-merge ">

                                    <span id="basic-icon-default-company2" class="input-group-text"><i
                                            class="bx bx-buildings"></i></span>
                                    <input type="time" id="basic-icon-default-company"
                                        class="form-control text-secondary" placeholder="" aria-label="ACME Inc."
                                        aria-describedby="basic-icon-default-company2" name="time" />

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Purpose of
                                visit</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">


                                    <div class="col-12">
                                        <select class="form-select text-secondary"
                                            id="basic-icon-default-purpose_of_visit" name="purpose_of_visit">

                                            <option value="Apartments">Apartments</option>
                                            <option value="Villa house">House</option>
                                            <option value="Penthouse">Rent</option>
                                            <option value="Cooperation">Cooperation</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                            <div class="col-sm-10 ">
                                <div class="input-group input-group-merge ">
                                    <span id="basic-icon-default-message2" class="input-group-text ">

                                        <i class="bx bx-comment "></i></span>
                                    <textarea id="basic-icon-default-message" class="form-control"
                                        placeholder="send some message" aria-label="send some message"
                                        aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">

                                <a href="/schedule-visit" class="btn text-white" type="submit"
                                    style="background-color:#f35525">Schedule a visit </a> <br> <br>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                            </fieldset>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection --}}

@extends ('layouts.main')
@section('container')

<div class="contact-page section d-flex justify-content-center ">

    <div class="col-lg-7  ">
        <form id="contact-form" >
            <div class="">
                <div class="col-lg-12">
                    <fieldset>
                        <label for="name">Full Name</label>
                        <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                            required="">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                        <label for="pnumber">Phone Number</label>
                        <input type="tel" name="pnumber" id="pnumber" pattern="[0-9]{10}"
                            placeholder="Your Phone Number..." required="">
                    </fieldset>
                </div>



                <div class="col-lg-12">
                    <fieldset>
                        <label for="purpose_of_visit">Purpose of Visit</label>

                        <select class="form-select text-secondary custom-select"
                            id="basic-icon-default-purpose_of_visit" name="purpose_of_visit" required="">
                            <option value="Apartments" class="custom-select-option">Apartments</option>
                            <option value="Villa house" class="custom-select-option">House</option>
                            <option value="Penthouse" class="custom-select-option">Rent</option>
                            <option value="Cooperation" class="custom-select-option">Cooperation</option>
                        </select>

                    </fieldset>
                    <br>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <fieldset>
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="text-muted" required="">
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset>
                            <label for="time">Time</label>
                            <input type="time" name="time" id="time" class="text-muted" required="">
                        </fieldset>
                    </div>
                </div>

                <div class="col-lg-12">
                    <fieldset>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Your Message" style="height: 88px" ></textarea>
                    </fieldset>
                </div>

                <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="orange-button" >Send Message</button>
                      
                </div>
            </div>
        </form>
    </div>

</div>
</div>
</div>
</div>

<script>
    document.getElementByClassName("orange-button").onclick = function() {
      window.location.href = "/schedule-visit";
    };
  </script>
@endsection