<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quem Somos?</title>

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




      <div class="container text-center" id="fundo">
        <div class="row">
            <div class="col">
                <h1 style="color: #5CB6F9">ETEC Zona Leste</h1>
                <div class="quemSomos-card">
                <div class="card" style="background-color: #5CB6F9; color: #12229D; padding: 30px; border-radius: 20px">
                    <p>Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.</p>
                    <p>Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>
                    <p>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>
                    <p>Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
                </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
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