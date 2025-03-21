<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caio Monte</title>
</head>

<div> <!-- imports JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="my.js" type="module"></script>
</div>

<div>   <!-- imports CSS -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</div>

<?php 
    $DBservername = "localhost";
    $DBusername = "root";
    $DBpassword = "";
    $DBname = "usuarios";

    $conn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);

    if ($conn->connect_error) {
        echo "<script>alert('Erro de conexão ao servidor');</script>";    }

    $conn->close();
?>

<!-- HTML -->
<body style="background-color: #111;">

    <!-- barra de navegação -->
    <div class="home-bar"> 

        <div class="col home-bar-left-side"> <!-- barras de conteudos da página -->
            <input type="checkbox" id="checkbox-bars">
                <label class="home-bar-bars-toggle" for="checkbox-bars">
                    <div id="bar-1" class="home-bar-bars"></div>
                    <div id="bar-2" class="home-bar-bars"></div>
                    <div id="bar-3" class="home-bar-bars"></div>
                </label>
            </input>
            <a id="option-1" class="home-bar-bars-options" href="#">Início</a>
            <a id="option-2" class="home-bar-bars-options" href="#">Portifólio</a>
            <a id="option-3" class="home-bar-bars-options" href="#">Vamos Conversar</a>
        </div>
        
        <div class="home-bar-middle-side"> <!-- titulo da pagina-->
            <p id="title-page" class="home-bar-title-page">Início<br>Portifólio<br>Vamos Conversar</p>
        </div>
        
        <div class="col home-bar-right-side"> <!-- icone de contatos -->

            <input type="checkbox" id="checkbox-contact">
                <label for="checkbox-contact">
                    <div class="home-bar-circle-profile">

                        <i id="animation-opacity-icon-1" class="fa-solid fa-code fa-xl home-bar-icon"></i>
                        <i id="animation-opacity-icon-2" class="fa-brands fa-instagram fa-xl home-bar-icon"></i>
                        <i id="animation-opacity-icon-3" class="fa-brands fa-linkedin-in fa-xl home-bar-icon"></i>
                        <i id="animation-opacity-icon-4" class="fa-regular fa-envelope fa-xl home-bar-icon"></i>
                        
                        <i id="icon-not-animated" class="fa-solid fa-user fa-xl home-bar-icon"></i>
                    </div>
                </label>
            </input>
        </div>

    </div>


    <!-- contatos -->
    <div class="d-flex justify-content-end">
        <div class="home-contacts-container">
            <a id="contact-1" class="home-bar-contacts" href="https://github.com/osmozeInc" target="_blank">
                osmozeInc
                <i class="fa-brands fa-github fa-xl contact-content"></i>
            </a>
            <a id="contact-2" class="home-bar-contacts" href="https://www.instagram.com/caiomonte.py/" target="_blank">
                caiomonte.py
                <i class="fa-brands fa-instagram fa-xl contact-content"></i>
            </a>
            <a id="contact-3" class="home-bar-contacts" href="https://www.linkedin.com/in/dev-caiomonte/" target="_blank">
                dev-caiomonte
                <i class="fa-brands fa-linkedin fa-xl contact-content"></i>
            </a>
            <a id="contact-4" class="home-bar-contacts" href="mailto:caiomm076@gmail.com" target="_blank">
                E-mail
                <i class="fa-solid fa-envelope fa-xl contact-content"></i>
            </a>
        </div>
    </div>


    <!-- pagina inicial -->
    <div id="home-page" class="home-page">
        <div class="home-container">
            <div class="container-text">
                <p class="text-1">Hello World!</p>
                <p class="text-2">Caio Monte</p>
                <div>
                    <p class="text-3"></p>
                </div>
                <div class="page-links">
                    <a href="#" class="link-1">Conheça meu trabalho</a>
                    <a href="#" class="link-2">Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- vamos conversar -->
    <div id="talk-page" class="talk-page">
        <div class="main-container">
            <div class="description-container">
                <p class="description">
                    Entre em contato
                </p>
            </div>

            <div class="conect-container">
                
                <div class="conect-type">
                    <p class="p" id="log-in">Entrar</p>
                    <p class="p" id="sign-in">Criar Conta</p>
                </div>

                <div class="selection-bar">
                    <div class="selection-type-bar">
                    </div>
                </div>

                <form class="log-in" action="" method="post">
                    <input class="input" id="email-log" name="email-log" type="email" placeholder="E-mail">
                    <input class="input" id="password-log" name="password-log" type="password" placeholder="Senha" required>

                    <a href="" class="a">Esqueci a Senha</a>
                    <br><br><br><br>

                    <input class="button" id="log-in-button" type="submit" value="Entrar">
                </form>

                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        $email = $_POST['email-log'];
                        $password = $_POST['password-log'];

                        $conn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);
                        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ss", $email, $password);
                        $stmt->execute();

                        $result = $stmt->get_result();
                        
                        if ($result->num_rows > 0)
                        {
                            echo "<script>window.location.href = 'pagina_do_usuario.php';</script>";
                        }
                    }
                ?>

                <form class="sign-in">
                    <input class="input" id="name-s" type="text" placeholder="Nome" required>
                    <input class="input" id="email-s" type="email" placeholder="E-mail" required>
                    <input class="input" id="password-s" type="password" placeholder="Senha" required>
                    <input class="input" id="confirm-password-s" type="password" placeholder="Confirme a Senha" required>

                    <input class="button" type="submit" value="Criar Conta">
                </form>

            </div>
        </div>
    </div>


    <!-- portifolio -->
    <div id="port-page" class="port-page">

        <!-- sobre mim -->
        <div class="about">
            <div class="name-section">
                <p>Sobre mim</p>
            </div>

            <div class="port-about-container"> 
                <div class="port-about-card">
                    <div style="margin-top: -15px;"><p class="port-about-title">Sobre mim</p></div>
    
                    <p class="port-about-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, atque nobis? Aliquam nihil vitae illo quidem! Quo, incidunt ex fuga impedit, nobis odio magni obcaecati iste, porro aliquam quibusdam ab.</p>
                </div>
            </div>
        </div>

        <!-- habilidades -->
        <div class="habilits">

            <div class="name-section">
                <p>Habilidades</p>
            </div>

            <div class="port-habilits-container">
                
                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon front-end fa-brands fa-html5 fa-2xl"></div>
                    <div class="port-habilits-card-title">Front-End</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">HTML<br>CSS<br>Javascript<br>Bootstrap</div>
                </div>
                
                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon back-end fa-solid fa-database fa-2xl"></div>
                    <div class="port-habilits-card-title" style="color: orangered;">Back-End</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">Python<br>C#<br>JavaScript<br></div>
                </div>

                <div class="port-habilits-card">
                    <div class="port-habilits-card-icon data-science fa-solid fa-database fa-2xl"></div>
                    <div class="port-habilits-card-title" style="color: #290;">Ciência de Dados</div>
                    <div class="port-habilits-card-line"></div>
                    <div class="port-habilits-card-text">SQL</div>
                </div>

            </div>
        </div>

        <!-- projetos -->
        <div class="projects">
            <div class="name-section">
                <p>Projetos</p>
            </div>

            <div class="port-projects-container">
     
                 <div class="port-filter-container">
                     <button class="filter-button">Python</button>
                     <button class="filter-button">JavaScript</button>
                     <button class="filter-button">Web</button>
                     <button class="filter-button">Desktop</button>
                     <button class="filter-button">Jogos</button>
                     <button class="filter-button">Proj. Integrador</button>
                 </div>
     
                 <div class="port-project-cards-container">
                     <div data-tag1="Python" class="port-project-card-container">
                         <a href="https://github.com/osmozeInc/Programador_de_Sistemas/tree/main/Projeto_Integrador/Documentação" target="_blank" class="port-project-card">PyBank</a>
                         <div class="port-project-description">Projeto Integrador feito em curso de programador de sistemas</div>
                     </div>
                     <div data-tag1="Web" data-tag2="Proj. Integrador" class="port-project-card-container">    
                         <button class="port-project-card">Maná das Ruas</button>
                         <div class="port-project-description">Site desenvolvido no curso de web design, com html e css.</div>
                     </div>
                     <div class="port-project-card-container">    
                         <a href="" class="port-project-card"></a>
                         <div class="port-project-description"></div>
                     </div>
                     <div class="port-project-card-container">    
                         <a href="" class="port-project-card"></a>
                         <div class="port-project-description"></div>
                     </div>
                 </div>
            </div>  
        </div>
        
    </div>



</body>
</html>