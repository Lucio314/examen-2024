<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        return view('courses.create', compact('chauffeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'point_depart' => 'required|string',
            'point_arrivee' => 'required|string',
            'date_heure' => 'required|date',
            'chauffeur_id' => 'required|integer',
        ]);
        $validatedData['statut'] = 'en cours';

        // Création de l'enregistrement Course
        Course::create($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('courses.index')->with('success', 'Course ajoutée avec succès');
    }





    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $chauffeurs = Chauffeur::all();
        return view('courses.edit',compact('course','chauffeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $message = ($course->statut == 'terminée') ? "This course is already finished" : "Course finished successfully";
        $course->statut = 'terminée';
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
