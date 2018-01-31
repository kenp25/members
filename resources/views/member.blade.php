@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form action="">
                <div id="personal">
                    <h2>Personal Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" class="form-control" name="firstname" id="first-name">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="datetime-local" class="form-control" name="dob">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="education_level">Highest Level of Education (Class)</label>
                                <input type="text" class="form-control" name="education_level">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sex">Sex</label><br>
                                <input type="checkbox" name="sex" value="1"> Male
                                <input type="checkbox" name="sex" value="2"> Female
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="home_phone">Home Phone</label>
                                <input type="text" class="form-control" name="home_phone">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile_phone">Mobile Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="time_to_reach">Best Time to Reach you</label>
                                <input type="text" class="form-control" name="time_to_reach_you">
                            </div>

                        </div>
                    </div>

                    <button type="button" class="btn btn-success" id="submit-personal">Next</button>
                </div>

                <div id="guardian">
                    <h2>Guardian Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="" cols="30" rows="10" class="form-control">
                        </textarea>
                    </div>

                    <button type="button" class="btn btn-success" id="submit-guardian">Next</button>
                </div>

                <div id="referee">
                    <h2>Referee Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="" cols="30" rows="10" class="form-control">
                        </textarea>
                    </div>

                    <button type="button" class="btn btn-success" id="submit-referee">Next</button>
                </div>





            </form>
        </div>
    </div>

@endsection

@section('additionalCSS')
    <style>
        #guardian, #referee{
            display: none;
        }
    </style>


@endsection

@section('additionalJS')
    <script>
        var inputs = {}
        $('body').on('click', '#submit-personal', function () {
            $("#personal").hide();
            $("#guardian").show()
            var personal = {};
            $("#personal :input").not('#submit-personal').each(function(){
                var key = $(this).attr('name');
                var val = $(this).val();
                item = {}
                item [key] = val;

                personal[key] = val;

            });

            inputs['personal'] = personal

            console.log(inputs);

        })

        $('body').on('click', '#submit-guardian', function () {
            $("#guardian").hide()
            $("#referee").show()
            var guardian = {};
            $("#guardian :input").not('#submit-guardian').each(function(){
                var key = $(this).attr('name');
                var val = $(this).val();
                item = {}
                item [key] = val;

                guardian[key] = val;

            });

            inputs['guardian'] = guardian

            console.log(inputs);

        })


        $('body').on('click', '#submit-referee', function () {
            $("#referee").hide()
            $('#final').show()
            var referee = {};
            $('#referee :input').not('#submit-referee').each(function () {
                var key = $(this).attr('name');
                var val = $(this).val();
                item = {};
                item [key] = val;

                referee[key] = val;

            });

            inputs['referee'] = referee
            console.log(inputs)

            return $.ajax({
                url: "/member-register",
                type: 'POST',
                data: {inputs: inputs},

                success: function (data) {

                }

            });


        })
        
    </script>


@endsection