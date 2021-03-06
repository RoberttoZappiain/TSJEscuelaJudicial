@extends('layouts.layout')
@section('title', 'Pagina principal')




@section('content')

{{-- <h1>ola diablo</h1> --}}

    <div class="container mt-3" style="padding:1em 2rem; ">
        <div class="row rounded d-flex justify-content-center align-items-center" style="background-color: white">
            <h3 class="text-center text-uppercase font-weight-bold mt-1" style="color: #4c0d0d">
                 Bienvenido de vuelta, {{auth()->user()->name}} <br>

            </h3>
        </div>
        <div class="row">
            <h1 class="txtprimary ml-1 mt-3 ">Novedades</h1>
            <div class="col-12 text-center">
                <div id="carouselExampleControls" class="carousel slide col-12 col-sm-12 col-lg-12" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active align-items-center">
                        <img class="img-fluid img-thumbnail"  src="images/c1.jpeg" alt="primer slide" style="max-height: 350px" >
                    </div>
                    <div class="carousel-item align-items-center">
                        <img class="img-fluid img-thumbnail" src="images/c2.jpeg" alt="segundo slide" style="max-height: 350px">
                    </div>

                    </div>
                    <a class="carousel-control-prev " href="#carouselExampleControls" style="max-height: 350px" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon rounded p-2" aria-hidden="true" style="background-color: gray"></span>
                    <span class="sr-only align-middle" >Anteriro</span>
                    </a>
                    <a class="carousel-control-next " href="#carouselExampleControls" style=" max-height: 350px" role="button" data-slide="next">
                    <span class="carousel-control-next-icon rounded p-2" aria-hidden="true" style="background-color: gray"></span>
                    <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

            <h1 class="txtprimary ml-1 mt-5 ">Lista de cursos y diplomados</h1>
        </div>
            <div class="row mt-1 " >
                @switch(Auth()->user()->cargo)
                @case(1)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==1)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style=" ">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Cursos:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 200;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @empty
                        <div class="row">
                            <h5 class="text-secondary text-center p-5">
                                No hay Cursos Disponibles

                            </h5>
                        </div>                    @endforelse
                    @break
                @case(2)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==2)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>                    @endforelse
                        @break
                @case(3)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==3)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>                    @endforelse
                        @break
                @case(4)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==4)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>                    @endforelse
                        @break
                @case(5)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==5)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>                    @endforelse
                        @break
                @case(6)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==6)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>
                    @endforelse
                        @break
                @case(7)
                    @forelse ($inicio as $inicioItem)
                        @if ($inicioItem->dirigido_id==7)
                            <div class="col-12 col-sm-12 col-lg-3 col-xs-3  ">
                                <div class="card mb-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover">
                                    @if ($inicioItem->imagen_curso)

                                        <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title text-center bls">Nombre Curso:<br>{{$inicioItem->nombre_curso}}</h5>
                                        <p class="card-text text-center" style="font-weight: 500;">Docente: {{$inicioItem->docente}}</p>
                                        <p class="card-text text-center">Fecha: {{$inicioItem->fecha}}</p>
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="row">
                        <h5 class="text-secondary text-center p-5">
                            No hay Cursos Disponibles

                        </h5>
                    </div>                    @endforelse
                        @break

                @default
                    Default case...
                @endswitch

            </div>



        <div class="row">
            <h1 class="txtprimary mt-3 ml-5">Comunicados</h1>
        </div>

        <div class="row">
            <div class="col 12 text-center mt-5">
                <img src="images/comunc.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>


    </div>


@endsection
