
@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('materialize-admin/css/materialize.css') }}">
{{--<link rel="stylesheet" href="{{ asset('materialize-admin/css/style.css') }}">--}}
<link rel="stylesheet" href="{{ asset('materialize-admin/css/materialize.style.css') }}">
<link rel="stylesheet" href="{{ asset('materialize-admin/css/materialize.custom.css') }}">



<script src="{{ asset('materialize-admin/js/materialize.js') }}"></script>
<script src="{{ asset('materialize-admin/js/materialize.min.js') }}"></script>
<script src="{{ asset('materialize-admin/js/materialize.custom-script.min.js') }}"></script>

@section('content')
    <div class="container">

        <div class="row">
                &nbsp;&nbsp;&nbsp;
            <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Add Skill</button>

            <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>

                    </div>
                </div>
            </div>

          </div>

        <table class="table table-bordered">
            <thead class="table-dark">
            <th>Name</th>
            <th>Actions</th>
            </thead>


            <tbody class="table-primary">

            @foreach($skills as $skill)

                <tr>
                    <td>{{$skill->skill_name}}</td>
                    <td>Delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<div class="w3-container">
    {{--<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Click Me to open modal</button>--}}

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <div class="card-body">
                    <h1 style="margin-left: 250px">Add Skills</h1>

                    {!! Form::open(['action' => 'SkillsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skill Name') }}</label>

                        <div class="col-md-6">
                            <input id="skill_name" type="text" class="form-control{{ $errors->has('skill_name') ? ' is-invalid' : '' }}" name="skill_name" value="{{ old('skill_name') }}" required autofocus>

                            @if ($errors->has('skill_name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skill_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
