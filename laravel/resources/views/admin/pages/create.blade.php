@component('admin.layouts.elements.body')

    @slot('title') Páginas @endslot   <!-- Esses valores sao referentes aos necessarios na pasta body -->
    @slot('description') Inclusão de Página @endslot
    @slot('menu') dashboard @endslot

    <form action="{{route('pages.store')}}" method="post">
        @include('admin.pages.form')
    </form>

    <a href="{{route('pages.index')}}" class="btn-default">Voltar</a>
@endcomponent