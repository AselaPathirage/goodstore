<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('/css/ad/ad-form.css') }}" type="text/css">
</head>

<body>
    <section class="wizard-section">
        <div class="row no-gutters">

            <div class="">
                <div class="form-wizard">
                    <div class="form-wizard-header" style="background-color: rgb(3, 87, 184); padding:20px;">
                        <img src="{{asset('image/demo/logos/jarabara.png')}}" title="Your Store" alt="Your Store" width="250px" />

                    </div>
                    <div class="container">
                        <form action="/advertisement/vehicle" method="post" enctype="multipart/form-data" role="form">
                            @csrf
                            <div class="form-wizard-header">
                                <p style="text-align: center; font-size:18px; font-weight:400; margin-top:20px">Fill the advertisement details.</p>
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>

                                </ul>
                            </div>
                            <fieldset class="wizard-fieldset show">
                                <h3>Personal Information</h3>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Display Name*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" value="{{ $vehicle->name ?? '' }}" class="form-control wizard-required" id="name" name="name">
                                            {{-- <label for="name" class="wizard-form-text-label">Display Name*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Email*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="email" value="{{ $vehicle->email ?? '' }}" class="form-control wizard-required" id="email" name="email">
                                            {{-- <label for="email" class="wizard-form-text-label">Email*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                Gender
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="radio1" type="radio">
                                    <label for="radio1">Male</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="radio2" type="radio">
                                    <label for="radio2">Female</label>
                                </div>
                            </div> -->
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Phone number*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="number" value="{{ $vehicle->phonenumber ?? '' }}" class="form-control wizard-required" id="phonenumber" name="phonenumber">
                                            {{-- <label for="phonenumber" class="wizard-form-text-label">Phone number*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Location*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" value="{{ $vehicle->location ?? '' }}" class="form-control wizard-required" id="location" name="location">
                                            {{-- <label for="location" class="wizard-form-text-label">Location*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    <a type="button" href="/advertisement/category" class="btn btn-primary">Cancel </a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <h3>Vehicle Information</h3>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Title*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" value="{{ $vehicle->title ?? '' }}" class="form-control wizard-required" id="title" name="title">
                                            {{-- <label for="title" class="wizard-form-text-label">Title*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Vehicle Type*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="vehicletype">
                                                <option {{{ (isset($vehicle->vehicletype) && $vehicle->vehicletype == 'Car') ? "selected=\"selected\"" : "" }}}>Car</option>
                                                <option {{{ (isset($vehicle->vehicletype) && $vehicle->vehicletype == 'Bus') ? "selected=\"selected\"" : "" }}}>Bus</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Brand*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="brand">
                                                <option {{{ (isset($vehicle->brand) && $vehicle->brand == 'Astain Martin') ? "selected=\"selected\"" : "" }}}>Astain Martin</option>
                                                <option {{{ (isset($vehicle->brand) && $vehicle->brand == 'Benz') ? "selected=\"selected\"" : "" }}}>Benz</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Model*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" value="{{ $vehicle->model ?? '' }}" class="form-control wizard-required" id="model" name="model">
                                            {{-- <label for="model" class="wizard-form-text-label">Model*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Edition</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" value="{{ $vehicle->edition ?? '' }}" class="form-control wizard" id="edition" name="edition">
                                            {{-- <label for="edition" class="wizard-form-text-label">Edition*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Model year*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="number" value="{{ $vehicle->modelyear ?? '' }}" class="form-control wizard" id="modelyear" name="modelyear">
                                            {{-- <label for="modelyear" class="wizard-form-text-label">Model year*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Mileage*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="number" value="{{ $vehicle->mileage ?? '' }}" class="form-control wizard" id="mileage" name="mileage">
                                            {{-- <label for="mileage" class="wizard-form-text-label">Mileage*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px; color:black;font-weight:600;">Engine Capacity*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="number" value="{{ $vehicle->engcapacity ?? '' }}" class="form-control wizard" id="engcapacity" name="engcapacity">
                                            {{-- <label for="engcapacity" class="wizard-form-text-label">Engine Capacity*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Condition*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="condition">
                                                <option {{{ (isset($vehicle->condition) && $vehicle->condition == 'Brand New') ? "selected=\"selected\"" : "" }}}>Brand New</option>
                                                <option {{{ (isset($vehicle->condition) && $vehicle->condition == 'Second Hand') ? "selected=\"selected\"" : "" }}}>Second Hand</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Body Type*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="bodytype">
                                                <option {{{ (isset($vehicle->bodytype) && $vehicle->bodytype == 'Atype') ? "selected=\"selected\"" : "" }}}>Atype</option>
                                                <option {{{ (isset($vehicle->bodytype) && $vehicle->bodytype == 'Btype') ? "selected=\"selected\"" : "" }}}>Btype</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Transmition*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="transmition">
                                                <option {{{ (isset($vehicle->transmition) && $vehicle->transmition == 'A') ? "selected=\"selected\"" : "" }}}>A</option>
                                                <option {{{ (isset($vehicle->transmition) && $vehicle->transmition == 'B') ? "selected=\"selected\"" : "" }}}>B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Fuel Type*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="fueltype">
                                                <option {{{ (isset($vehicle->fueltype) && $vehicle->fueltype == 'Diesel') ? "selected=\"selected\"" : "" }}}>Diesel</option>
                                                <option {{{ (isset($vehicle->fueltype) && $vehicle->fueltype == 'Petrol') ? "selected=\"selected\"" : "" }}}>Petrol</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;"> Description*</div>
                                    <div class="col-lg-8 col-md-4 col-sm-4">
                                        <div class="form-group">

                                            <textarea rows="4" cols="100" name="description" id="description">{{ $vehicle->description ?? '' }}</textarea>
                                            {{-- <label for="description" class="wizard-form-text-label">Description*</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="margin-left:20px;color:black;font-weight:600;">Price*</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="number" value="{{ $vehicle->price ?? '' }}" class="form-control wizard" id="price" name="price">
                                            {{-- <label for="price" class="wizard-form-text-label">Price* (RS)</label> --}}
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2" style="margin-left:20px;color:black;font-weight:600;">Negotiable</div>
                                    <div class="form-group col-2">
                                        <input type="checkbox" id="negotiable" name="negotiable" style="margin-left:30px;" value="1" @if(session()->has('vehicle')){{ ($vehicle->negotiable=='1' ? "checked" : '' )}} @endif>
                                        {{-- <label for="negotiable" >negotiable*</label> --}}
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>



                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    <a type="button" href="/advertisement/category" class="btn btn-primary">Cancel </a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <h5>Upload your photos- Upto 5</h5>


                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg1)) ? "disabled" : ''}} accept=".jpg,.jpeg,.png" class="form-control-file" name="productimg1" id="productimg1" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg2)) ? "disabled" : ''}} accept=".jpg,.jpeg,.png" class="form-control-file" name="productimg2" id="productimg2" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg3)) ? "disabled" : ''}} accept=".jpg,.jpeg,.png" class="form-control-file" name="productimg3" id="productimg3" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg4)) ? "disabled" : ''}} accept=".jpg,.jpeg,.png" class="form-control-file" name="productimg4" id="productimg4" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg5)) ? "disabled" : ''}} accept=".jpg,.jpeg,.png" class="form-control-file" name="productimg5" id="productimg5" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>

                                <!-- <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg2)) ? "disabled" : ''}} class="form-control-file" name="productimg2" id="productimg2" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg3)) ? "disabled" : ''}} class="form-control-file" name="productimg3" id="productimg3" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg4)) ? "disabled" : ''}} class="form-control-file" name="productimg4" id="productimg4" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg5)) ? "disabled" : ''}} class="form-control-file" name="productimg5" id="productimg5" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div> -->

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a type="button" href="/advertisement/category" class="btn btn-primary">Cancel </a>
                                    {{-- <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> --}}
                                </div>
                                <button type="submit" class="btn btn-primary">Create Product</button>
                            </fieldset>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            // click on next button
            jQuery('.form-wizard-next-btn').click(function() {
                var parentFieldset = jQuery(this).parents('.wizard-fieldset');
                var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
                var next = jQuery(this);
                var nextWizardStep = true;
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = jQuery(this).val();

                    if (thisValue == "") {
                        jQuery(this).siblings(".wizard-form-error").slideDown();
                        nextWizardStep = false;
                    } else {
                        jQuery(this).siblings(".wizard-form-error").slideUp();
                    }
                });
                if (nextWizardStep) {
                    next.parents('.wizard-fieldset').removeClass("show", "400");
                    currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', "400");
                    next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                    jQuery(document).find('.wizard-fieldset').each(function() {
                        if (jQuery(this).hasClass('show')) {
                            var formAtrr = jQuery(this).attr('data-tab-content');
                            jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
                                if (jQuery(this).attr('data-attr') == formAtrr) {
                                    jQuery(this).addClass('active');
                                    var innerWidth = jQuery(this).innerWidth();
                                    var position = jQuery(this).position();
                                    jQuery(document).find('.form-wizard-step-move').css({
                                        "left": position.left,
                                        "width": innerWidth
                                    });
                                } else {
                                    jQuery(this).removeClass('active');
                                }
                            });
                        }
                    });
                }
            });
            //click on previous button
            jQuery('.form-wizard-previous-btn').click(function() {
                var counter = parseInt(jQuery(".wizard-counter").text());;
                var prev = jQuery(this);
                var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
                prev.parents('.wizard-fieldset').removeClass("show", "400");
                prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
                currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active', "400");
                jQuery(document).find('.wizard-fieldset').each(function() {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
                            if (jQuery(this).attr('data-attr') == formAtrr) {
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({
                                    "left": position.left,
                                    "width": innerWidth
                                });
                            } else {
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            });
            //click on form submit button
            jQuery(document).on("click", ".form-wizard .form-wizard-submit", function() {
                var parentFieldset = jQuery(this).parents('.wizard-fieldset');
                var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
                parentFieldset.find('.wizard-required').each(function() {
                    var thisValue = jQuery(this).val();
                    if (thisValue == "") {
                        jQuery(this).siblings(".wizard-form-error").slideDown();
                    } else {
                        jQuery(this).siblings(".wizard-form-error").slideUp();
                    }
                });
            });
            // focus on input field check empty or not
            jQuery(".form-control").on('focus', function() {
                var tmpThis = jQuery(this).val();
                if (tmpThis == '') {
                    jQuery(this).parent().addClass("focus-input");
                } else if (tmpThis != '') {
                    jQuery(this).parent().addClass("focus-input");
                }
            }).on('blur', function() {
                var tmpThis = jQuery(this).val();
                if (tmpThis == '') {
                    jQuery(this).parent().removeClass("focus-input");
                    jQuery(this).siblings('.wizard-form-error').slideDown("3000");
                } else if (tmpThis != '') {
                    jQuery(this).parent().addClass("focus-input");
                    jQuery(this).siblings('.wizard-form-error').slideUp("3000");
                }
            });
        });
    </script>

    <script type="text/javascript" src="{{ asset('js/ad/ad-form.js') }}"></script>
</body>

</html>