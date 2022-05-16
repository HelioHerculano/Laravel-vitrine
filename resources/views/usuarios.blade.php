@extends('layouts.app')

@section('content')



<section class=" bg-white py-5">
  <h1 class="display-5 text-primary text-center mb-5" >VITRINE - GERAL</h1>


<div class="container">
<div class="row bg-light box-shadow border-radius">
    <div class="col-12 text-center py-5">

<div class="row bg-dark text-white" >

    <div class="col-lg-7 p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset("img/bolsa.jpg") }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3 class='display-4 text-primary' >Titulo</h3>
                 <a class='btn btn-outline-primary' href=''>Saber Mais</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset("img/exames.jpg") }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3 class='display-4 text-primary' >Titulo</h3>
                 <a class='btn btn-outline-primary' href=''>Saber Mais</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset("img/aniversario.jpg") }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3 class='display-4 text-primary' >Titulo</h3>
                 <a class='btn btn-outline-primary' href=''>Saber Mais</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>

    </div>

    <div class="col-lg-5 p-4 align-self-center">
      <h1 class="display-4" >Fique Sempre Conectado a Vitrine</h1>
      <p class="lead" >Neste espaço traremos sempre informações de extrema importancia para ti</p>
      <form>  
            <textarea class="form-control" placeholder="Alguma duvida?"></textarea>
          
            <button class="btn btn-primary mt-2" type="button">Enviar duvida</button>
      </form>
    </div>

  </div>

</div>
</section>


<section class="container ">

  <div class="row text-center">

    <div class="col">


    <p class="lead" >FIQUE ATENTO AOS PROXIMOS EVENTOS DA UNIVERSIDADE</p>
    <h1 class="display-5 text-primary" >PROXIMOS EVENTOS</h1>

      <table class="table table-hover my-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Assunto/Evento</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
      <th scope="col">Local</th>
      <th scope="col">Demostrar interesse</th>
    </tr>
  </thead>
  <tbody>
    
      <tr>
        <td>Visita do reitor</td>
        <td>20-05-2018</td>
        <td>13:00</td>
        <td>FET</td>
        <td><a class='btn btn-outline-secondary btn-sm' href=''>Interessado</a></td>
      </tr>;

  </tbody>
</table>
       </div>
    </div>
  </section>


@endsection