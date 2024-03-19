<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noticias</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body style="background-color: #1F264D">
        <div class="container p-0 cab-prin" id="fundo">
            <div class="row">
                <div class="col">
                    <header>
                        <div class="d-flex align-items-center" style="padding: 10px">
                            <div class="part1" >
                                <ul class="d-flex justify-content-between align-items-center  p-0">
                                    <li style="width: 60%" class="borda"><a href="{{ url('/') }}"><img style="border-radius: 30px; margin-right: 4%" width="60px" height="55px" src="{{ asset('img/Logo.png') }}" alt="Logo"> Etec Zona Leste</a></li>
                                    <li style="width: 100%" class="borda"><form action=""><input type="text"></form></li>
                                </ul>
                            </div>
                            <div class="part2" >
                                <ul class="d-flex justify-content-around borda p-0">
                                    <li class="d-flex align-items-center"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="d-flex align-items-center"><a href="{{ url('/quemSomos') }}">Quem Somos?</a></li>
                                    <li class="d-flex align-items-center"><a href="{{ url('/noticias') }}">Notícias</a></li>
                                    <li class="d-flex align-items-center"  ><a  href="{{ url('/contato') }}">Contato</a></li>
                                    <li style="border-left: 4px solid black; padding-left: 20px"><a class="login d-flex align-items-center" href="{{ url('/dashboard') }}"><img width="25px" src="{{ asset('img/user-login-branco.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                            
                          <div class="d-flex justify-content-center" ><p class="slogan">Desperte o seu potencial, pois cada dia é uma oportunidade para aprender e crescer!</p></div>
   
                    </header>
                </div>
            </div>
        </div>

        <div class="cab-prin2">
            <nav class="navbar fixed-top" style="background-color: #1F264D">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: white">Etec Zona Leste</a>
                <button style="background-color: white" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span  class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Etec Zona Leste</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/quemSomos') }}">Quem Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/noticias') }}">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                    </li>
                    
                    </ul>
                    <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </div>
            </nav>
        </div>


        <div class="container ">
            <div class="row">
                <div class="col p-0">
                    <div class="d-flex justify-content-center contato-fund">
                    <div style="color: #5CB6F9; padding: 150px">
                    <h2 class="fs-4">Equipe Direção</h2>
                    <br>
                    <p class="fs-5">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec. Suas atribuições, indicação e designação, são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="fundo">
            <div class="row">
                <div class="col">
                    <div style="padding: 5%">
                    <h1 style="color: #5CB6F9">Atribuições da Direção Escolar</h1>
                    <ul style="color: #5CB6F9">
                        <li>1 – garantir as condições para o desenvolvimento da gestão democrática do ensino, na forma prevista pela legislação e neste Regimento;</li>
                        <li>2 – promover a elaboração do projeto político-pedagógico da escola;</li>
                        <li>3 – coordenar a elaboração, o acompanhamento, a avaliação e o controle da execução do Plano Plurianual de Gestão;</li>
                        <li>4 – gerenciar os recursos físicos, materiais, humanos e financeiros para atender às necessidades da escola a curto, médio e longo prazos;</li>
                        <li>5 – coordenar o planejamento, execução, controle e avaliação das atividades da escola com o objetivo de garantir a melhoria dos processos;</li>
                        <li>6 – garantir o cumprimento dos conteúdos curriculares, das cargas horárias e dos dias letivos previstos na legislação vigente;</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div style="padding: 5%">
                    <h1 style="color: #5CB6F9">Diretor(a) da Etec</h1>
                    <ul style="color: #5CB6F9">
                        <li>Amanda Bueno</li>
                       
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div style="padding: 5%">
                    <h1 style="color: #5CB6F9">Assessor Técnico Administrativo II </h1>
                    <ul style="color: #5CB6F9">
                        <li>Patrick Moreno da Silva</li>
                       
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div style="padding: 5%">
                    <h1 style="color: #5CB6F9">Contato</h1>
                    <ul style="color: #5CB6F9">
                        <li><strong>E-mail:</strong> e211dir@cps.sp.gov.br</li>
                        <li><strong>Telefones:</strong> (11) 2045-4016 | (11) 2045-4011</li>
                    </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <footer>
        <div class="container" style="background-color: #12229D; padding: 40px">
            
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center"><img width="60px" style="border-radius: 10px" src="{{asset('img/logo2.png')}}" alt=""></div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center"><div class="text-center"><p style="color: #5CB6F9">© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
                    <p style="color: #5CB6F9"><strong>Desenvolvido por DS - AMS</strong></p>
                    </div></div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul style="height: 100%" class="p-0 d-flex justify-content-around align-items-center">
                    <li><a href=""><img width="30px" src="{{asset('img/face.png')}}" alt=""></a></li>
                    <li><a href=""><img width="30px" src="{{asset('img/insta.png')}}" alt=""></a></li>
                    <li><a href=""><img width="30px" src="{{asset('img/you.png')}}" alt=""></a></li>
                </ul>
                </div>
            </div>
        </div>
        </footer>
            



                   
    </body>
</html>