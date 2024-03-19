<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

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




        <div class="container" id="fundo">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center cont-info">
                        <div class="Texto-q">
                        <p> <h1> Descubra um futuro brilhante na ETEC Zona Leste </h1></p>
                        <br>
                        <br>
                        <p style="color: #5CB6F9">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img class="imagem-post" src="{{asset('img/img1.png')}}" alt="">
                    </div>
                </div>
            </div>
            <br><br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
            <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img class="imagem-post" src="{{asset('img/img2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center cont-info">
                        <div class="Texto-q">
                        <p> <h1> Aprendizados para além da sala de aula </h1></p>
                        <br>
                        <br>
                        <p style="color: #5CB6F9">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <br><br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center cont-info">
                        <div class="Texto-q">
                        <p> <h1>Infraestrutura Moderna</h1></p>
                        <br>
                        <br>
                        <p style="color: #5CB6F9">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img class="imagem-post" src="{{asset('img/img3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" id="fundo">
        <br><br><br>
        <br>
            <div class="row">
                <div class="col">
                    <h1 style="color: #5CB6F9; font-weight: 400" class="fs-1 text-center">Nossos Cursos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Novotec Desenvolvimento de Sistemas AMS</p></div>
                        <div> <p>É o profissional que analisa e projeta sistemas.</p></div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center;"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Contabilidade</p></div>
                        <div> <p>Matemática e língua portuguesa são disciplinas importantes para entender a co...</p></div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Logística</p></div>
                        <div> <p>Logística é o planejamento do caminho feito por um produto ou serviço ate che...</p></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Recursos Humanos</p></div>
                        <div> <p>O estudante vai precisar de conhecimentos de língua portuguesa, matemática e...</p></div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center;"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Serviços Jurídicos</p></div>
                        <div> <p>Como foco do curso está nas leis e normas, o aluno vai estudar as áreas do...</p></div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div style="padding: 40px" class="d-flex justify-content-center">
                    <div class="card card-azul">
                        <div style="background-color: #5CB6F9; width: 20%; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: center"><img src="{{asset('img/etiqueta.png')}}" alt=""></div>
                        <div> <p>Administração</p></div>
                        <div> <p>Como funcionam as organizações, desde empresas privadas até ONGs, passando po...</p></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="fundo">
            <br><br><br>
            <div class="row">
                <div class="col">
                <h1 style="color: #5CB6F9; font-weight: 400" class="fs-1 text-center">Notícias!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <br><br>
                    <div class="d-flex justify-content-center">
                        
                    <div style="padding: 20px" class="card card-cont">
                        <div ><img style="border-radius: 10px" src="{{asset('img/not.png')}}" alt=""></div>
                        <br>
                        <div><p>Processo Seletivo Simplificado para Professor de Ensino Médio e Técnico</p></div>
                        <div><p>PSS Processo Seletivo</p></div>
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
