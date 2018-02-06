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
                                <input type="date" class="form-control" name="dob">
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

                <div id="last">
                    <h2>Lastly</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="attend_events">Are you able to attend Tech Events</label>
                                <input type="radio" class="" name="attend_events" value="0"> No
                                <input type="radio" class="" name="attend_events" value="1"> Yes

                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="attended_tech_camp">Have you ever Attended a Tech Camp</label>
                                <input type="radio" class="" name="attended_tech_camp" value="0" checked="checked"> No
                                <input type="radio" class="" name="attended_tech_camp" value="1"> Yes

                            </div>

                        </div>
                    </div>

{{--                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                    </div>--}}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="o_p_knowledge">How did you know O&P</label>
                                <input type="checkbox" name="o_p_knowledge[]" value="1"> Radio
                                <input type="checkbox" name="o_p_knowledge[]" value="2"> School
                                <input type="checkbox" name="o_p_knowledge[]" value="3"> Social Media
                                <input type="checkbox" name="o_p_knowledge[]" value="4"> Friends & Family
                                <input type="checkbox" name="o_p_knowledge[]" value="5"> Others

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="o_p_knowledge">Have you participated in any of Our Tech Camps?</label>
                                <input type="radio" class="" name="attended_tech_camp" value="0"> No
                                <input type="radio" class="" name="attended_tech_camp" value="1"> Yes

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="o_p_knowledge">Tech Camps Attended</label>

                                @foreach($camp_years as $year)
                                    <input type="checkbox" name="camp_years[]" value="{{ $year->id }}"> {{ $year->year }}
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="knowledge">I can be an Expert on....</label>
                        <textarea name="knowledge" id="" cols="30" rows="10" class="form-control" placeholder="Expertise">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="want_to_learn">I’d like to learn more about …</label>
                        <textarea name="want_to_learn" id="" cols="30" rows="10" class="form-control" placeholder="I would Like to Learn More about....">
                        </textarea>opKnowledge
                    </div>

                    <label for="expertise[]">Area to incorporate in project</label>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">

                                <input type="checkbox" name="expertise[]" value="3D printing"> 3D printing <br>
                                <input type="checkbox" name="expertise[]" value="Android development"> Android development<br>
                                <input type="checkbox" name="expertise[]" value="Alternative Energy"> Alternative Energy<br>
                                <input type="checkbox" name="expertise[]" value="Animation"> Animation<br>
                                <input type="checkbox" name="expertise[]" value="Arduino"> Arduino<br>
                                <input type="checkbox" name="expertise[]" value="Art Cars"> Art Cars<br>
                                <input type="checkbox" name="expertise[]" value="Art"> Art<br>
                                <input type="checkbox" name="expertise[]" value="Biology"> Biology<br>
                                <input type="checkbox" name="expertise[]" value="Braile Literacy"> Braile Literacy<br>
                                <input type="checkbox" name="expertise[]" value="Chemistry"> Chemistry<br>
                                <input type="checkbox" name="expertise[]" value="Wireless"> Wireless<br>
                                <input type="checkbox" name="expertise[]" value="Woodworking"> Woodworking<br>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="checkbox" name="expertise[]" value="Circuit Boards"> Circuit Boards<br>
                                <input type="checkbox" name="expertise[]" value="Construction Kits(Legos)"> Construction Kits(Legos)<br>
                                <input type="checkbox" name="expertise[]" value="Crafts"> Crafts<br>
                                <input type="checkbox" name="expertise[]" value="Dance"> Dance<br>
                                <input type="checkbox" name="expertise[]" value="Electronics"> Electronics<br>
                                <input type="checkbox" name="expertise[]" value="Farming"> Farming<br>
                                <input type="checkbox" name="expertise[]" value="Fashion"> Fashion<br>
                                <input type="checkbox" name="expertise[]" value="Fine Arts"> Fine Arts<br>
                                <input type="checkbox" name="expertise[]" value="Gaming"> Gaming<br>
                                <input type="checkbox" name="expertise[]" value="Gardening"> Gardening<br>
                                <input type="checkbox" name="expertise[]" value="GPS"> GPS<br>
                                <input type="checkbox" name="expertise[]" value="Graphic Design"> Graphic Design<br>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="checkbox" name="expertise[]" value="Hacking"> Hacking<br>
                                <input type="checkbox" name="expertise[]" value="Jaws ICT Training"> Jaws ICT Training<br>
                                <input type="checkbox" name="expertise[]" value="Kites"> Kites<br>
                                <input type="checkbox" name="expertise[]" value="Knitting"> Knitting<br>
                                <input type="checkbox" name="expertise[]" value="Lights / Glowing"> Lights / Glowing<br>
                                <input type="checkbox" name="expertise[]" value="Mathematics"> Mathematics<br>
                                <input type="checkbox" name="expertise[]" value="Mechanics"> Mechanics<br>
                                <input type="checkbox" name="expertise[]" value="Microcontrollers"> Microcontrollers<br>
                                <input type="checkbox" name="expertise[]" value="Music"> Music<br>
                                <input type="checkbox" name="expertise[]" value="Papercraft"> Papercraft<br>
                                <input type="checkbox" name="expertise[]" value="Pc Duino"> Pc Duino<br>
                                <input type="checkbox" name="expertise[]" value="Photography"> Photography<br>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="checkbox" name="expertise[]" value="Physics"> Physics<br>
                                <input type="checkbox" name="expertise[]" value="Printmaking"> Printmaking<br>
                                <input type="checkbox" name="expertise[]" value="Programming"> Programming<br>
                                <input type="checkbox" name="expertise[]" value="Raspberry PI"> Raspberry PI<br>
                                <input type="checkbox" name="expertise[]" value="Recycling"> Recycling<br>
                                <input type="checkbox" name="expertise[]" value="Robots"> Robots<br>
                                <input type="checkbox" name="expertise[]" value="Sewing"> Sewing<br>
                                <input type="checkbox" name="expertise[]" value="Social Media"> Social Media<br>
                                <input type="checkbox" name="expertise[]" value="Soldering"> Soldering<br>
                                <input type="checkbox" name="expertise[]" value="Sustainable Living"> Sustainable Living<br>
                                <input type="checkbox" name="expertise[]" value="Technology"> Technology<br>
                                <input type="checkbox" name="expertise[]" value="Toys"> Toys<br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="checkbox" name="expertise[]" value="Transportation"> Transportation<br>
                                <input type="checkbox" name="expertise[]" value="Vehicles"> Vehicles<br>
                                <input type="checkbox" name="expertise[]" value="Video"> Video<br>
                                <input type="checkbox" name="expertise[]" value="Video Game Dev"> Video Game Dev<br>
                                <input type="checkbox" name="expertise[]" value="Water"> Water<br>
                                <input type="checkbox" name="expertise[]" value="Weather"> Weather<br>
                                <input type="checkbox" name="expertise[]" value="Wind"> Wind<br>
                                <input type="checkbox" name="expertise[]" value="Wearables"> Wearables<br>
                                <input type="checkbox" name="expertise[]" value="Web dev"> Web dev<br>
                                <input type="checkbox" name="expertise[]" value="Wireless"> Wireless<br>
                                <input type="checkbox" name="expertise[]" value="Woodworking"> Woodworking<br>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-success" id="submit">Submit</button>

                </div>





            </form>
        </div>
    </div>

@endsection

@section('additionalCSS')
    <style>
        #guardian, #referee, #last{
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
            $('#last').show()
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


        })

        $('body').on('click', '#submit', function () {
            var lastly = {};

            //var checked_site_radio = $('input:radio[name=user_site]:checked').val();
            var attendEvents = $('input:radio[name=attend_events]:checked').val()
            var attendedTechCamp = $('input:radio[name=attended_tech_camp]:checked').val()
            var opKnowledge = []
            var expertise = []
            var campYears = []
            var knowledge = $('textarea[name=knowledge]').val()
            var wantToLearn = $('textarea[name=want_to_learn]').val()


            $('input[name="o_p_knowledge[]"]:checked').each(function(){
                opKnowledge.push($(this).val());
            });

            $("input[name='camp_years[]']:checked").each(function(){
                campYears.push($(this).val());
            });

            $('input[name="expertise[]"]:checked').each(function () {
                expertise.push($(this).val())
            })

            lastly['attendedEvents'] = attendEvents
            lastly['attendedTechCamp'] = attendedTechCamp
            lastly['opKnowledge'] = opKnowledge
            lastly['campYears'] = campYears
            lastly['expertise'] = expertise
            lastly['knowledge'] = knowledge
            lastly['wantToLearn'] = wantToLearn

            inputs['lastly'] = lastly
            console.log(inputs)

            return $.ajax({
                url: "/members",
                type: 'POST',
                data: {inputs: inputs},

                success: function (data) {

                }

            });


        })
        
    </script>


@endsection