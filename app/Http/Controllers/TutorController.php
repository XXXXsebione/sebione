<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    
    public function index()
    {
        $tutors = Tutor::all();
        return view ('tutors.index')->with('tutors', $tutors);
    }

    
    public function create()
    {
        return view('tutors.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Tutor::create($input);
        return redirect('tutor')->with('flash_message', 'Tutor Added!');
    }

    
    public function show($id)
    {
        $tutor = Tutor::find($id);
        return view('tutors.show')->with('tutors', $tutor);
    }

    
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('tutors.edit')->with('tutors', $tutor);
    }

    
    public function update(Request $request, $id)
    {
        $tutor = Tutor::find($id);
        $input = $request->all();
        $tutor->update($input);
        return redirect('tutor')->with('flash message', 'Tutor Updated!');
    }

    
    public function destroy($id)
    {
        Tutor::destroy($id);
        return redirect('tutor')->with('flash message', 'Tutor Deleted!');
    }
}
