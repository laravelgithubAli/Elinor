<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\MassageMail;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MassageMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Mails.create',[
            'user' => User::all(),
            'newsletter' => Newsletter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
        ],
        [
            'title.required' => 'نوشتن متن ایمیل الزامی است!'
        ]);
/*        $collect = collect($request->get('user'))->filter(function ($item) {
            return $item;
        });*/

        Email::query()->delete();
        $massage = $request->get('title');
        $massages = MassageMail::query()->create([
            'title' => $massage
        ]);

        $newsEmail = Newsletter::all();
        if ($request->get('newsletter')) {
            foreach ($newsEmail as $newEmail) {
                Email::query()->create([
                    'email' => $newEmail->email
                ]);
            }
        }

        $users = User::all();
        if ($request->get('newsletter')) {
            foreach ($users as $newEmail) {
                Email::query()->create([
                    'email' => $newEmail->email
                ]);
            }
        }

/*        if ($request->get('users')) {
            foreach ($collect as $role) {
                $roleEmail = User::query()->where('Role_id', $role)->get();
                foreach ($roleEmail as $UserEmail) {
                    $massages->users()->attach($UserEmail->id);
                    Email::query()->create([
                        'email' => $UserEmail->email
                    ]);
                }
            }
        }*/
        $emails = Email::all();
        foreach ($emails as $email) {
            Mail::to($email->email)->send(new \App\Mail\MassageMail($massage));
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MassageMail $massageMail
     * @return \Illuminate\Http\Response
     */
    public function show(MassageMail $massageMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MassageMail $massageMail
     * @return \Illuminate\Http\Response
     */
    public function edit(MassageMail $massageMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MassageMail $massageMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MassageMail $massageMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MassageMail $massageMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MassageMail $massageMail)
    {
        //
    }


}
