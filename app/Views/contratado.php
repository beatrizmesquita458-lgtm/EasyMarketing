<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratado</title>
    <!--link dos bootstraps utilizados :P-->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="padding: 0; margin: 0; background-color: #F9F9FF;">
    <header>
        <nav class="navbar bg-white border-bottom" style="height: 70px;">
            <div class="container-fluid px-5">
                <!-- LOGO -->
                <span class="text-primary fw-bold fs-5">
                    EasyMarketing
                </span>
                
                <!-- Menu -->
                <div class="d-flex gap-4 mx-auto">
                    <a href="#" class="text-dark text-decoration-none text-center small">
                        <i class="bi bi-house-fill d-block fs-5"></i>
                        Home
                    </a>
                    <a href="#" class="text-dark text-decoration-none text-center small">
                        <i class="bi bi-people d-block fs-5"></i>
                        Network
                    </a>
                    <a href="#" class="text-dark text-decoration-none text-center small">
                        <i class="bi bi-briefcase d-block fs-5"></i>
                        Jobs
                    </a>
                    <a href="#" class="text-dark text-decoration-none text-center small">
                        <i class="bi bi-chat-square-text d-block fs-5"></i>
                        Messaging
                    </a>
                </div>

                <!-- Direita -->
                <div class="d-flex align-items-center gap-4">
                    <i class="bi bi-bell fs-5"></i>
                    <i class="bi bi-grid-3x3-gap-fill fs-5"></i>
                    <i class="bi bi-play-btn fs-5"></i>
                    <div class="border-start" style="height: 30px;"></div>
                    <div class="rounded-circle bg-secondary-subtle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main style="padding: 40px 0; display: flex; flex-direction: column; align-items: center;">
        
        <!-- DIV PAI DE TUDO (1200px) -->
        <div style="width: 1200px; height: 1456px; background-color: blue; display: flex; align-items: flex-start; gap: 30px; padding: 20px 30px 0 30px; box-sizing: border-box; margin-top: -40px;">
            
            <!-- Div onde fica todo o perfil do contratado (Laranja: 258px) -->
            <div style="width: 258px; height: 1390px; background-color: orange; display: flex; flex-direction: column; flex-shrink: 0;">
                
                <!-- Card do perfil (Branco: 258px) -->
                <div style="width: 258px; height: 380px; background-color: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    
                    <!-- div da parte azul do perfil -->
                    <div style="width: 100%; height: 90px; background-color: #0066fe;"></div>

                    <!-- área da foto sobreposta -->
                    <div style="padding: 0 16px; position: relative;">
                        <img 
                          src="https://img.freepik.com/fotos-premium/linda-mulher-sorridente-digitando-no-notebook-trabalhando-on-line-usando-o-computador-portatil-feminino-sentado-na-varanda-do-terraco_246930-2904.jpg" 
                          alt="Foto de perfil" 
                          style="width: 72px; height: 72px; border-radius: 50%; border: 3px solid white; object-fit: cover; margin-top: -36px; display: block;"
                        >
                    </div>

                    <!-- Div das informações abaixo -->
                    <div style="display: flex; flex-direction: column; justify-content: center; gap: 2px; padding: 0 16px; margin-top: 8px;">
                        <span style="font-family: system-ui, -apple-system, sans-serif; font-size: 16px; font-weight: 700; color: #0f172a; line-height: 1.2;">Marina Magalhães</span>
                        <p style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 11px; font-weight: 500; color: #475569; margin: 4px 0 0 0; line-height: 1.3;">
                            Senior UI/UX Designer & Art Director
                        </p>

                        <div style="display: flex; align-items: center; gap: 4px; margin-top: 12px;">
                            <i class="bi bi-geo-alt" style="font-size: 16px; color: #475569;"></i>
                            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 11px; font-weight: 500; color: #475569;">
                                São Paulo, Brasil
                            </span>
                        </div>

                        <!-- Div dos dois botões -->
                        <div style="display: flex; flex-direction: column; gap: 8px; width: 100%; margin-top: 18px;">
                            <!-- Botão 1: Contratar (Azul Preenchido) -->
                            <button style="width: 100%; height: 36px; background-color: #0056D2; border: none; border-radius: 12px; display: flex; align-items: center; justify-content: center; gap: 8px; cursor: pointer; transition: background-color 0.2s;">
                                <i class="bi bi-briefcase" style="color: #ffffff; font-size: 16px;"></i>
                                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; font-weight: 600; color: #ffffff;">
                                    Contratar
                                </span>
                            </button>

                            <!-- Botão 2: Mensagem (Vazado com Borda Azul) -->
                            <button style="width: 100%; height: 36px; background-color: transparent; border: 1.5px solid #0056D2; border-radius: 12px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background-color 0.2s;">
                                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; font-weight: 600; color: #0056D2;">
                                    Mensagem
                                </span>
                            </button>
                        </div>
                    </div>

                </div> <!-- Fechamento do Card Branco -->
<!-- Div dos Projetos Concluídos + Taxas de Sucesso + Disponibilidade -->
<div style="width: 258px; height: 192px; background-color: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 16px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: space-between; margin-top: 30px;">
    
    <!-- div dos textos / itens das três funcionalidades -->
    <div style="width: 100%; display: flex; flex-direction: column; gap: 12px; margin-top: 40px;">
        
        <!-- Item 1: Projetos Concluídos -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 500; color: #475569;">Projetos concluídos</span>
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 700; color: #0f172a;">48</span>
        </div>

        <!-- Item 2: Taxa de Sucesso -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 500; color: #475569;">Taxa de sucesso</span>
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 700; color: #0056D2;">98%</span>
        </div>

        <!-- Item 3: Disponibilidade -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 500; color: #475569;">Disponibilidade</span>
            <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 600; color: #16a34a; background-color: #f0fdf4; padding: 2px 8px; border-radius: 12px;">Imediata</span>
        </div>

    </div>

</div>
<!-- Fechamento da div dos projetos -->
 
    <!-- Div das habilidades principais -->
     <div style="width: 258px; height: 230px; background-color: black; margin-top: 30px;">
     </div>

            </div> <!-- Fechamento da Div Laranja -->

            <!-- Div do SOBRE MIM + PORTFOLIO EM DESTAQUE (Rosa: 822px) -->
            <div style="width: 822px; height: 1384px; background-color: pink; display: flex; flex-shrink: 0;">
            </div>

        </div> <!-- FECHAMENTO DO DIV PAI AZUL -->

    </main>
</body>
    
    <!-- Parte do rodapé no final do site (JÁ FINALIZADO) -->
    <footer style="display: flex; flex-direction: column; align-items: center; gap: 16px; padding: 24px 16px; width: 100%; background-color: #f2f2f2; border-top: 1px solid #bab9b9; box-sizing: border-box;">
  
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">About</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Accessibility</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Help Center</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Privacy & Terms</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Ad Choices</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Advertising</a>
    <a href="#" style="text-decoration: none; color: #333333; font-size: 14px;">Business Services</a>
  </div>

  <p style="margin: 0; color: #666666; font-size: 13px; text-align: center;"> &copy; 2024 DesignPro Professional Network
  </p>
    </footer>
</body>
</html>