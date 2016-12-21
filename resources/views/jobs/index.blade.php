@extends( 'layout' )

@section( 'title' )
    Classes
@stop

@section( 'content' )

    <h1>Classes</h1>

    <div class="content">
        <p>La classe d’un personnage représente sa profession (soldat, par exemple). S’il s’agit d’un nouveau personnage, il commence au niveau 1 dans la classe choisie. En gagnant des points d’expérience (XP) lorsqu’il vainc des monstres, il monte de niveau et reçoit de nouveaux pouvoirs et de nouvelles capacités.</p>
    </div>
    @if( $jobs )
        <ul class="content-list">
            @foreach( $jobs as $job )
                <li class="content-list-item">
                    <img style="float: left;" class="content-image race-image" src="{{ URL::asset( '/img/classes/' . $job[ "slug" ] . '-mini.jpg' ) }}" alt="<?php echo( $job[ "name" ] ); ?>" title="<?php echo( $job[ "name" ] ); ?>">
                    <div>
                        <h2 style="font-size: 1.25em; font-weight: bold;"><a class="content-link" href="/jobs/{{ $job[ 'id' ] }}">{{ $job[ 'name' ] }}</a></h2>
                        <p>{{ $job[ 'desc' ] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>Il n'y a pas de classe à afficher pour l'instant.</p>
    @endif

@stop
