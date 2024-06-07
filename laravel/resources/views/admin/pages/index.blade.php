@component('admin.layouts.elements.body')

    @slot('title') Dashboard @endslot
    @slot('menu') dashboard @endslot    <!-- Esses valores sao referentes aos necessarios na pasta body -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>
                    <a href="{{route('pages.show', $page->id)}}" class="btn btn-default btn-xs">
                        <span class="plus">+</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}

    <a href="{{route('pages.create')}}" class="btn-default" style="position: relative; left: 400px; top: -25px;">Nova</a>

@endcomponent