<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>{{$title ?? "English Bot"}}</title>
</head>
<body>
    <main>
        <aside id="aside">
            <div class="logo"><h1>English Bot</h1></div>

            <div class="menu">
                @include('admin.menus.'. $menu)
            </div>
            <p>{{'admin.menus.'. $menu}}</p>
            <div class="profile">
                <div class="account">
                    <div class="imgProfile"></div>
                    <div class="nickName"><h4>Bruno Rafael</h4></div>
                </div>

                <div class="logout">
                    <button>Sair</button>
                </div>
            </div>
        </aside>

        

        <section id="section">
            <header id="header">
                <div class="sectionSelected"><h3>{{$title}}</h3></div>
                <div class="social">
                    <div class="face">aaa</div>
                    <div class="insta">aaa</div>
                    <div class="linkedin">aaa</div>
                    <div class="github">aaa</div>
                    <div class="telegram">aaa</div>
                </div>
            </header>

            <article class="article">
                {{$slot}}
            </article>
        </section>
    </main>
    
</body>
</html>