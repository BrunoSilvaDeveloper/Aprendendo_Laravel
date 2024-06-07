{!! csrf_field() !!}  <!-- Utilizado para previnir ataque de injecao no formulario-->

<style>
    div{
        margin:  5px 0;
    }
    input[type="text"]{
        padding: 10px;
        width: 40%;
        margin-bottom: 20px;
    }
    input[type="submit"]{
        padding: 10px;
        width: 10%;
        margin: 20px 0;
        cursor: pointer;
    }

    textarea{
        padding: 10px;
        width: 40%;
        margin-bottom: 20px;
    }
</style>

<div class="form-group">
    <label for="title" class="control-label col-sm-2">Título</label>
    <div class="col-sm-10">
        <input type="text" name="title" id="title" class="form-control" value="{{ $page->title ?? '' }}" placeholder="Título...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Url</label>
    <div class="col-sm-10">
        <input type="text" name="url" id="url" class="form-control" value="{{ $page->url ?? '' }}" placeholder="Url...">
    </div>
</div>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Conteúdo</label>
    <div class="col-sm-10">
        <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Conteúdo...">{{ $page->body ?? '' }}</textarea>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>