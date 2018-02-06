<?php

namespace App\Http\Controllers;

use App\Expertise;
use App\Guardian;
use App\Member;
use App\OpKnowledge;
use App\OtherChannel;
use App\Referee;
use App\TechCamp;
use App\TechCampYear;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $camp_years = TechCampYear::all();
        return view('member', ['camp_years' => $camp_years]);
    }


    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $inputs = $request->get('inputs');

        if ($personal = array_get($inputs, 'personal')){
            $member = Member::create($personal);
        }

        if ($guardian = array_get($inputs, 'guardian')){
            Guardian::create([
                'name' => array_get($guardian, 'name'),
                'phone' => array_get($guardian, 'phone'),
                'email' => array_get($guardian, 'email'),
                'address' => array_get($guardian, 'address'),
                'member_id' => $member->id
            ]);

        }


        if ($referee = array_get($inputs, 'referee')){
            Referee::create([
                'name' => array_get($referee, 'name'),
                'phone' => array_get($referee, 'phone'),
                'email' => array_get($referee, 'email'),
                'address' => array_get($referee, 'address'),
                'member_id' => $member->id
            ]);

        }

        if ($lastly = array_get($inputs, 'lastly')){
            //dd($lastly);
            if ($attend_tech_events = array_get($lastly, 'attendedEvents')){
                $member->attend_tech_events = $attend_tech_events;
                $member->save();

            }


            if ($attended_our_tech_camp = array_get($lastly, 'attendedTechCamp')){
                $member->attended_our_techcamp = $attended_our_tech_camp;
                $member->save();
            }

            if ($op_knowledge = array_get($lastly, 'opKnowledge')){
                foreach ($op_knowledge as $knowledge){
                    OpKnowledge::create([
                        'channel_id' => $knowledge,
                        'member_id' => $member->id
                    ]);

                }

            }

            if ($tech_camps = array_get($lastly, 'campYears')){
                foreach ($tech_camps as $camp){
                    TechCamp::create([
                        'year' => $camp,
                        'member_id' => $member->id
                    ]);
                }


            }

            if ($expertises = array_get($lastly, 'expertise')){
                foreach ($expertises as $expertise){
                    Expertise::create([
                        'name' => $expertise,
                        'member_id' => $member->id
                    ]);
                }
            }

            if ($knowledge = array_get($lastly, 'knowledge')){
                $member->knowledgeable_about = $knowledge;
                $member->save();
            }

            if ($want_to_learn = array_get($lastly, 'wantToLearn')){
                $member->want_to_learn = $want_to_learn;
                $member->save();
            }

        }

    }
}
