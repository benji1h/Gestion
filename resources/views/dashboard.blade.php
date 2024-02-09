
        @extends('layouts')
        @section('content')
        <div class="login-container">
            <h2>DASHBOARD</h2>
            <p>Bonjour {{ $username }}, via cette application vous pouvez:</p>
            <ul>
                <li>Consulter votre profil</li>
                <li>Consulter vos groupes</li>
                <li>Consulter votre horaire</li>
                <li>Gérer les groupes</li>
                <li>Gérer les horaires</li>
            </ul>
        </div>
        @endsection
