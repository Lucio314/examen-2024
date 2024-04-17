@extends('layouts.base')
@section('title','Creation de course')
@section('content')

<h1 class="mb-0">Add Course</h1>
<hr />
<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-md-6 form-group">
            <label for="point_depart" class="form-label">Point de départ </label>
            <input type="text" class="form-control" name="point_depart" id="point_depart" />
            @error('point_depart')
            <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <label for="point_arrivee" class="form-label">Point d'arrivée </label>
            <input type="text" class="form-control" name="point_arrivee" id="point_arrivee" />
            @error('point_arrivee')
            <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6 form-group">
            <label for="date_heure" class="form-label">Date et heure </label>
            <input type="datetime-local" class="form-control" name="date_heure" id="date_heure" />
            @error('date_heure')
            <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <label for="chauffeur_id" class="form-label">Chauffeur</label>
            <select class="form-select" id="chauffeur_id" name="chauffeur_id">
                <option value="">Sélectionner une chauffeur</option>
                @foreach ($chauffeurs as $chauffeur)
                <option value="{{$chauffeur->chauffeur_id}}">{{$chauffeur->nom.' '.$chauffeur->prenom}}</option>
                @endforeach
            </select>
            @error('Chauffeur_id')
            <p class="text-danger fw-semibold fs-6">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
