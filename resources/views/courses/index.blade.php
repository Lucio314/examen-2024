@extends('layouts.base')

@section('title', 'Home Course')

@section('content')
<div class="d-flex align-items-center justify-content-between" style="width: 70%">
    <h1 class="mb-0">List Course</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
</div>
<hr />
<table class="table table-hover table-reverse table-responsive table-bordered">
    <thead class=" table table-primary">
        <tr>
            <th>ID</th>
            <th>Point de départ</th>
            <th>Point d'arrivée</th>
            <th>Date et heure</th>
            <th>Chauffeur affecté</th>
            <th>Statut de la course</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($courses->count() > 0)
        @foreach($courses as $course)
        <tr>
            <td class="align-middle">{{ $course->course_id }}</td>
            <td class="align-middle">{{ $course->point_depart }}</td>
            <td class="align-middle">{{ $course->point_arrivee }}</td>
            <td class="align-middle">{{ $course->date_heure }}</td>
            <td class="align-middle">{{ $course->chauffeur->prenom.' '.$course->chauffeur->nom }}</td>
            <td class="align-middle">{{ $course->statut }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('courses.edit',$course->course_id)}}" type="button"
                        class="btn btn-warning ">Edit</a>
                    <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" type="button"
                        class="btn btn-danger p-0" onsubmit="return confirm('Supprimé?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Course not found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection
