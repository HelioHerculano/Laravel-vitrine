@extends('layouts.app',["current"=>"categorias"])

@section('content')
<i class="fa-solid fa-trash-can"></i>
<div class="container">
  <h1 class="display-4 text-primary text-center mb-3">Lista de Usuarios</h1>
    <div class="card border">
        <div class="card-body">
            
            
            <table class="table table-ordered table-hover" id="tabelaFaculdade">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Sigla</th>
                        <th>Nome</th>
                        <th>Contacto</th>
                        <th>E-mail</th>
                        <th>Localização</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            
        </div>
        <div class="card-footer">
            <button  type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" onClick="limpar()">
                Nova Faculdade
            </button>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova Faculdade</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="limpar()"></button>
        </div>
        <div class="modal-body">
          <form id="formFaculdade">
            <input type="hidden" value="" id="id">
            <div class="mb-1">
              <label for="nomeFaculdade" class="col-form-label">Nome da faculdade</label>
              <input type="text" class="form-control" id="nomeFaculdade" name="nomeFaculdade" placeholder="Faculdade">
            </div>
        
            <div class="mb-1">
              <label for="siglaFaculdade" class="col-form-label">Sigla</label>
              <input type="text" class="form-control" id="siglaFaculdade" name="siglaFaculdade" placeholder="Sigla">
            </div>


            <div class="mb-1">
              <label for="contactoFaculdade" class="col-form-label">Contacto</label>
              <input type="text" class="form-control" id="contactoFaculdade" name="contactoFaculdade" placeholder="Contacto">
            </div>
  
            <div class="mb-1">
              <label for="emailFaculdade" class="col-form-label">E-mail</label>
              <input type="text" class="form-control" id="emailFaculdade" name="emailFaculdade" placeholder="E-mail">
            </div>
  

            <div class="mb-1">
              <label for="localFaculdade" class="col-form-label">Localização</label>
              <input type="text" class="form-control" id="localFaculdade" name="localFaculdade" placeholder="Localização">
            </div>

            <div class="mb-5">
              
              <textarea placeholder="Descrição" class="form-control" id="descricaoFaculdade" name="descricaoFaculdade"></textarea>
            </div>
            
            <!--<div class="mb-3">
              <label for="categoriaProduto" class="col-form-label">Categoria</label>
              <select class="form-select" aria-label="Default select example" id="categoriaProduto" name="categoriaProduto">
                  <option selected>SELECT</option>
                </select>
            </div>-->
        
            <div class="modal-footer">
              <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        
          </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection


@section('javascript')
    <script type="text/javascript">
$.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      });

        function limpar(){
            $("#nomeFaculdade").val('');
            $("#siglaFaculdade").val('');
            $("#contactoFaculdade").val('');
            $("#emailFaculdade").val('');
            $("#localFaculdade").val('');
            $("#descricaoFaculdade").val('');
        }


        
        function montarLinha(f){
          var linha = "<tr>"+
            "<td>" + f.id + "</td>"+
            "<td>" + f.sigla + "</td>"+
            "<td>" + f.name + "</td>"+
            "<td>" + f.contact + "</td>"+
            "<td>" + f.email + "</td>"+
            "<td>" + f.location + "</td>"+
            "<td>" + f.description + "</td>"+
            "<td>" + 
                "<button class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'  onClick=editar("+ f.id +")>Editar</button>"+  
                "<button class='btn btn-danger btn-sm mx-2' onClick=remover("+ f.id +")>Eliminar</button>"+  
            "</td>"+
            "</tr>";

            return linha;
        }

        
        function carregarFaculdades(){
          $.getJSON('/api/faculdades', function(faculdades){
                for(i = 0 ; i < faculdades.length ; i++){
                   linha = montarLinha(faculdades[i]);
                   $('#tabelaFaculdade>tbody').append(linha);
                }
            });
        }

        function criarFaculdade () {
          f = {
            siglaFaculdade : $("#siglaFaculdade").val(),
            nomeFaculdade : $("#nomeFaculdade").val(),
            contactoFaculdade : $("#contactoFaculdade").val(),
            emailFaculdade : $("#emailFaculdade").val(),
            localFaculdade : $("#localFaculdade").val(),
            descricaoFaculdade : $("#descricaoFaculdade").val()
          };

          $.post('/api/faculdades',f, function(data){
                faculdade = JSON.parse(data);
                linha = montarLinha(faculdade);
                $('#tabelaFaculdade>tbody').append(linha);
          });
        
        }


        function remover(id){
          $.ajax({
            type: "DELETE",
            url: "/api/faculdades/"+id,
            context: this,
            success: function(){
              console.log("apagou OK");
              linhas = $("#tabelaFaculdade>tbody>tr");
              e = linhas.filter(function(i,elemento){
                return elemento.cells[0].textContent == id;
              });
              if(e)
                e.remove();
            },
            error: function(error){
              console.log(error);
            }
          });
        }



                /*
                $("body").addClass("modal-open");
                $("body").append("<div class='modal-backdrop fade show'></div>");
                $("body").css({overflow:'hidden'});
                $("body").css('padding-right' ,'20px');

                
                $("div.modal").attr("aria-hidden","false");
                $("div.modal").attr("aria-model","true");
                $("div.modal").css({display:'block'});
                $("div.modal").addClass('show');*/

                

        function editar(id){
          $.getJSON('/api/faculdades/'+id, function(data){ 
            $("#id").val(data.id);  
           $("#nomeFaculdade").val(data.name);
            $("#siglaFaculdade").val(data.sigla);
            $("#contactoFaculdade").val(data.contact);
            $("#emailFaculdade").val(data.email);
            $("#localFaculdade").val(data.location);
            $("#descricaoFaculdade").val(data.description); 
            });
        }

        function editarFaculdade(){
          f = {
            id : $("#id").val(),
            siglaFaculdade : $("#siglaFaculdade").val(),
            nomeFaculdade : $("#nomeFaculdade").val(),
            contactoFaculdade : $("#contactoFaculdade").val(),
            emailFaculdade : $("#emailFaculdade").val(),
            localFaculdade : $("#localFaculdade").val(),
            descricaoFaculdade : $("#descricaoFaculdade").val()
          };


          $.ajax({
            type: "PUT",
            url: "/api/faculdades/"+ f.id,
            context: this,
            data: f,
            success: function(data){
              f = JSON.parse(data);
              linhas = $("#tabelaFaculdade>tbody>tr");
              e = linhas.filter(function(i,e){
                return (e.cells[0].textContent == f.id);
              });
              if(e){
                console.log("Aquiiii");
                e[0].cells[0].textContent = f.id;
                e[0].cells[1].textContent = f.sigla;
                e[0].cells[2].textContent = f.name;
                e[0].cells[3].textContent = f.contact;
                e[0].cells[4].textContent = f.email;
                e[0].cells[5].textContent = f.location;
                e[0].cells[6].textContent = f.description;
              }
            },
            error: function(error){
              console.log(error);
              console.log("errorrr");
            }
          });


        }




        
        $("#formFaculdade").submit( function(event){
            event.preventDefault();
            if($("#id").val() != '')
              editarFaculdade();
              else
              criarFaculdade();
            $("#exampleModal").hide();
            $("div").remove(".modal-backdrop");
            $(".modal-open").removeClass();
        } );

        $(function(){
            //carregarDados();
            carregarFaculdades();
        });

    </script>
@endsection