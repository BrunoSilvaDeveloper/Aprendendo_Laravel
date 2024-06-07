@component('admin.layouts.default') <!-- coloca sempre o caminho a partir da pasta views -->

@slot('title') {{$title}} @endslot
@slot('menu') {{$menu}} @endslot

<div class="panel panel-default">
    <div class="panel-body">
        {{$slot}} <!-- pega todo o conteudo do arquivo index e joga aqui -->
    </div>
</div>
@endcomponent
