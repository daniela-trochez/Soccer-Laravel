<h1>crear jugador</h1>

<form action="{{route('players.store')}}" method="POST">
    @csrf
    <div>
        <label>Nombre:
            <input type="text" name="name">
        </label>
    </div>
    <div>
        <label>Posición:
            <input type="text" name="position">
        </label>
    </div>
    <div>
        <label>Fecha de Nacimiento:
            <input type="date" name="birthdate">
        </label>
    </div>
    <div>
        <label>Equipo:
            <select name="team_id" id="">
                <option value="">Elija una opción</option>
                @foreach ($teams as  $team)
                <option value="{{$team->id}}">{{$team->name}}</option>

                @endforeach
            </select>
        </label>
    </div>

    <button>Guardar</button>


</form>
<a href="{{route('players.index')}}">volver</a>
