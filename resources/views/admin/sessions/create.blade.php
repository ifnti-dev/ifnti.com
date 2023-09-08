@extends('admin.dash')

@section('action')
    <div class="admin-creation-session">
        <h1>Créer une session</h1>

        <div class="admin-session-form">
            <form action="{{route('store_session')}}" method="post">
                @csrf
                @include('admin.shared.input', [
                    'type' => 'date',
                    'label' => 'Date de debut',
                    'name' => 'date_debut',
                ])

                @include('admin.shared.input', [
                    'type' => 'date',
                    'label' => 'Date de fin',
                    'name' => 'date_fin',
                ])

                <div class="submit">
                    <button type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
