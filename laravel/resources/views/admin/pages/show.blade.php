@component('admin.layouts.elements.body')

    @slot('title') Páginas @endslot   <!-- Esses valores sao referentes aos necessarios na pasta body -->
    @slot('description') @endslot
    @slot('menu') dashboard @endslot

    <style>
        h2 {
            margin: 20px;
            font-size: 25px;
        }

        p {
            margin: 20px;
        }
        
        .container-buttons{
            margin: 20px;
            margin-top:  30px;
        }
    </style>

    <h2>{{$page->title}}</h2>

    <p><small>Criado em {{$page->created_at->format('d/m/Y')}}  |  Atualizado em {{$page->updated_at->format('d/m/Y')}}</small></p>

    <p>{!! $page->body !!}</p>  <!--  utilizado !! para simplesmente exibir o conteudo do body, ao invez de publicar as tags html juntas-->

   <div class="container-buttons">
        <a href="{{route('pages.index')}}" class="btn-default">Voltar</a>
        <a href="{{route('pages.edit', $page->id)}}" class="btn-default">Editar</a>
        
        <form action="{{route('pages.destroy', 1)}}" method="post" style="display: inline-block;">
            {!! csrf_field() !!} 
            <input type="hidden" name="_method" value="DELETE"> <!--necessario, pois o metodo delete so aceita solicitacoes via delete, algo que formularios html naon possuem por padrao-->
            <input type="submit" value="Deletar" class="btn-default">
        </form>
   </div>


@endcomponent 