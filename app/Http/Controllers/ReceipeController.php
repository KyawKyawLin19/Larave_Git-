<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\receipecreateevent;
use App\Mail\ReceipeStored;
use App\Notifications\ReceipeDeletedNotification;
use App\Notifications\ReceipeStoredNotification;
use App\Notifications\ReceipeUpdatedNotification;
use App\Receipe;
use App\User;
use App\test;
use Illuminate\Http\Request;
use Illuminate\Session\flash;
use Illuminate\Support\Facades\Mail;

class ReceipeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Receipe::where('author_id',auth()->id())->Paginate('3');
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request() -> validate([
            'name' => 'required|max:255',
            'ingredients' => 'required',
            'category' => 'required',
            ]);

        $receipe = Receipe::create($validatedData + ['author_id' => auth()->id()]);
        $user = User::find(1);
        $user->notify(new ReceipeStoredNotification());
        // event(new receipecreateevent($receipe));
        return redirect("receipe")->with("message","Receipe Created successfully!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        // if($receipe->author_id != auth()->id()){
        //     abort(404);
        // }
        $this->authorize('view',$receipe);
        return view('show',compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $category = Category::all();
        return view('edit',compact('receipe','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);

        $receipe->update($validatedData);
        $user = User::find(1);
        $user->notify(new ReceipeUpdatedNotification());
        return redirect('receipe')->with("message_update","Receipe Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        $receipe->delete();
        $user = User::find(1);
        $user->notify(new ReceipeDeletedNotification());
        return redirect('receipe')->with("message_delete","Receipe Deleted successfully!!!");
    }
}
