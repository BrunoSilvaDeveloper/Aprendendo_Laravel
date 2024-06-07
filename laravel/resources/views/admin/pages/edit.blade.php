@component('admin.layouts.elements.body')

    @slot('title') Páginas @endslot   <!-- Esses valores sao referentes aos necessarios na pasta body -->
    @slot('description') Edição de Página @endslot
    @slot('menu') dashboard @endslot

    <form action="{{route('pages.update', $page->id)}}" method="post">
        <input type="hidden" name="_method" value="put"> <!--necessario, pois o metodo update so aceita solicitacoes via put, algo que formularios html naon possuem por padrao-->
        @include('admin.pages.form')
    </form>

    <a href="{{route('pages.show', $page->id)}}" class="btn-default">Voltar</a>

@endcomponent