<!-- calling the main part -->
@extends('main.master')

<!-- Section for adding css -->
@section('css')

@endsection

<!-- Section for adding content page -->
@section('isi')
<main>
    <!-- page-banner-area-start -->

    <!-- page-banner-area-end -->

    <br>
    <br>
    <!-- Profile -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><strong
                    class="text">Nila Amalia</strong>
                    <span class="text">nilaa3794@gmail.com</span>
                    <span>member of ...</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <strong class="text-right">My Account Settings</strong>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                            placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control"
                            value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                            class="form-control" placeholder="enter phone number" value=""></div>
                            <p>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text"
                            class="form-control" placeholder="enter address" value=""></div>
                            <p>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text"
                        class="form-control" placeholder="enter postcode" value=""></div>
                        <p>
                    <div class="col-md-12"><label class="labels">Place Of Birth</label><input type="text" class="form-control"
                            placeholder="enter place of birth" value=""></div>
                            <p>
                    <div class="col-md-12"><label class="labels">Date Of Birth</label><input type="text" class="form-control"
                            placeholder="enter date of birth" value=""></div>
                            <p>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                            <p>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text"
                            class="form-control" placeholder="enter education" value=""></div>
                </div>
                <div class="row mt-3">

                </div>
                <div class="mt-5 text-left"><button class="btn btn-primary profile-button" type="button">Save
                        Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                        Experience</span><span class="border px-3 p-1 add-experience"><i
                            class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">enter experience</label><input type="text"
                        class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">enter additional details</label><input type="text"
                        class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!-- Profile -->
<br>
<br>

    <!-- cmamps-area-start -->
    <!--<div class="cmamps-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1899531.5831083965!2d105.806381!3d21.58504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5n!5e0!3m2!1sen!2sus!4v1644226635446!5m2!1sen!2sus"></iframe>
    </div> -->
    <!-- cmamps-area-end -->

</main>
@endsection

<!-- Section for adding script js -->
@section('script')

    @endsection
