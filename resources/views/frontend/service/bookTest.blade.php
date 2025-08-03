@extends('Frontend/layout/master')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Book Your Test Driving Appointment</h1>
                        <h2 class="animate-box" data-animate-effect="fadeInUp">
                            Schedule your driving test appointment easily online. Choose a time and location that works for you—no paperwork, no long lines.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('title', 'Book Driving Test')
@section('Service_avtive', 'active')

@section('content')
<div class="gtco-section border-bottom">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>What You’ll Need</h2>
                <p>Prepare the following items before booking your driving test:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-id-card-alt"></i></span>
                    <div class="feature-copy">
                        <h3>Valid Learner’s Permit</h3>
                        <p>You must have a valid learner’s permit to book a test.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-calendar-check"></i></span>
                    <div class="feature-copy">
                        <h3>Choose Date & Time</h3>
                        <p>Select your preferred test date and time slot.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="feature-copy">
                        <h3>Select Test Center</h3>
                        <p>Pick a nearby location that is convenient for you.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="gtco-section">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>How It Works</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                    <div class="feature-copy">
                        <h3>Step 1: Sign In</h3>
                        <p>Access your account to begin booking your test.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                    <div class="feature-copy">
                        <h3>Step 2: Pick a Slot</h3>
                        <p>Choose your test date, time, and test center location.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-credit-card"></i></span>
                    <div class="feature-copy">
                        <h3>Step 3: Pay Online</h3>
                        <p>Securely pay for your driving test appointment.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                    <div class="feature-copy">
                        <h3>Step 4: Confirmation</h3>
                        <p>Receive confirmation via email or SMS with your booking details.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="gtco-section">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Driving Test Booking Form</h2>
                <p>Fill out the form below to reserve your driving test appointment.</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1" >
                <form method="POST" >
                    @csrf

                    <div class="form-group">
                        <label for="permit_number">Learner’s Permit Number <span class="text-danger">*</span></label>
                        <input type="text" name="permit_number" class="form-control" required value="{{ old('permit_number') }}">
                        @error('permit_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="test_center">Test Center Location <span class="text-danger">*</span></label>
                        <select name="test_center" class="form-control" required>
                            <option value="">-- Select Location --</option>
                            <option value="phnom_penh">Phnom Penh</option>
                            <option value="siem_reap">Siem Reap</option>
                            <option value="battambang">Battambang</option>
                        </select>
                        @error('test_center')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="test_date">Preferred Date <span class="text-danger">*</span></label>
                        <input type="date" name="test_date" class="form-control" required value="{{ old('test_date') }}">
                        @error('test_date')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="test_time">Preferred Time <span class="text-danger">*</span></label>
                        <input type="time" name="test_time" class="form-control" required value="{{ old('test_time') }}">
                        @error('test_time')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">
                            Book Test Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
