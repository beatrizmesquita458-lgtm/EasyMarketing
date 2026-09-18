<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    
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

            <!--,mas se tivesse, seria bom colocar logo abaixo nessa mensagem. copiar do Logo -->

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

                <div class="rounded-circle bg-secondary-subtle d-flex align-items-center justify-content-center"
                     style="width: 32px; height: 32px;">
                    <i class="bi bi-person"></i>
                </div>

            </div>

        </div>
    </nav>
    </header>

    <!-- Conteúdo Principal (Background: #F9F9FF) -->
  <main style="padding: 20px 0; display: flex; flex-direction: column; align-items: center; margin-top: 30px;">
        
    <!-- DIV PAI DE TUDO (Mudado para flex-direction: column) -->
    <div style="width: 1200px; min-height: 1456px; height: auto; background-color: #0000ff; display: flex; flex-direction: column; gap: 24px; padding: 20px 30px; box-sizing: border-box;">
        
        <!-- PRIMEIRO CARTÃO (David Production) -->
        <div style="width: 100%; height: auto; background-color: #ffffff; display: flex; flex-direction: column; position: relative; border-radius: 8px; overflow: hidden; border: 1px solid #ddd;">
            
            <!-- div dos títulos principais da empresa TÍTULO+FOTOS E ETC -->
            <div style="width: 100%; height: 256px; background-color: #f0f0f0;">
                <img src="https://static.bandainamcoent.eu/high/jojo/jojo-bizarre-adventure-all-star-battle-r/02-news/JOJOASBR_launchTrailer_thumbnail.jpg" alt="Banner da Empresa" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

            <!-- div da foto da empresa -->
            <div style="width: 150px; height: 150px; background-color: #ffffff; border-radius: 8px; border: 1px solid #ddd; padding: 10px; box-sizing: border-box; position: absolute; top: 180px; left: 30px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <img src="https://www.seekpng.com/png/detail/800-8005881_david-production-doctors.png" alt="Logo da Empresa" style="max-width: 100%; max-height: 100%; object-fit: contain;">
            </div>

            <!-- div dos textos sobre as "especializações" da empresa -->
            <div style="width: 100%; padding: 40px 30px 30px 30px; box-sizing: border-box; display: flex; flex-direction: column; gap: 20px;">
                
                <!-- div dos textos -->
                <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; padding-left: 170px; margin-top: -10px;">
                    <div style="flex-grow: 1;">
                        <h1 style="font-family: Arial, sans-serif; font-size: 28px; margin: 0; color: #333;">David Production</h1>
                        <p style="font-family: Arial, sans-serif; font-size: 16px; margin: 5px 0 0 0; color: #666;">Agência de Design e animação • São Paulo, SP</p>
                    </div>
                    <!-- div dos dois botões que tem ao lado -->
                    <div style="display: flex; gap: 10px;">
                        <button style="background-color: #0066cc; color: white; border: none; padding: 10px 20px; border-radius: 20px; font-family: Arial, sans-serif; font-size: 14px; cursor: pointer;">+ Seguir</button>
                        <button style="background-color: #f5f5f5; color: #333; border: 1px solid #ccc; padding: 10px 20px; border-radius: 20px; font-family: Arial, sans-serif; font-size: 14px; cursor: pointer;">Visitar site</button>
                    </div>
                </div>

                <!-- div do texto detalhado sobre a empresa -->
                <div style="margin-top: 10px;">
                    <h2 style="font-family: Arial, sans-serif; font-size: 20px; color: #333; margin: 0 0 10px 0;">Sobre nós</h2>
                    <p style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.6; color: #555; margin: 0;">
                        Olá! Nós somos a David Production, o estúdio de animação responsável por dar vida e movimento ao universo épico de JoJo's Bizarre Adventure. Desde a primeira temporada, dedicamos nossa paixão e técnica para capturar com fidelidade os traços icônicos, as paletas de cores vibrantes e a energia inconfundível do mangá de Hirohiko Araki. Nosso objetivo é levar para a sua tela a experiência visual mais impactante, estilosa e bizarra possível!
                    </p>
                </div>

                <!-- Tags -->
                <div style="display: flex; gap: 10px; margin-top: 5px;">
                    <span style="font-family: Arial, sans-serif; font-size: 12px; background-color: #f0f0f0; padding: 5px 10px; border-radius: 15px; color: #555;">Design de Produto</span>
                    <span style="font-family: Arial, sans-serif; font-size: 12px; background-color: #f0f0f0; padding: 5px 10px; border-radius: 15px; color: #555;">UI/UX</span>
                    <span style="font-family: Arial, sans-serif; font-size: 12px; background-color: #f0f0f0; padding: 5px 10px; border-radius: 15px; color: #555;">Branding</span>
                    <span style="font-family: Arial, sans-serif; font-size: 12px; background-color: #f0f0f0; padding: 5px 10px; border-radius: 15px; color: #555;">Web Development</span>
                </div>
            </div>

        </div> <!-- FECHA PRIMEIRO CARTÃO -->

        <!-- SEGUNDO CARTÃO (Visualização de Trabalho) -->
        <div style="width: 100%; height: 700px; background-color: #ffffff; display: flex; flex-direction: column; border-radius: 8px; overflow: hidden; border: 1px solid #ddd; padding: 30px; box-sizing: border-box;">
           <!-- Cabeçalho com Título na esquerda e Link na direita -->
<div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
  
  <!-- SEGUNDO CARTÃO (Visualização de Trabalho) -->
<div style="width: 100%; height: 600px; background-color: #ffffff; display: flex; flex-direction: column; border-radius: 8px; overflow: hidden; border: 1px solid #ddd; padding: 20px; box-sizing: border-box; justify-content: space-between;">
    
    <!-- Cabeçalho com Título na esquerda e Link na direita -->
    <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <h2 style="font-family: Arial, sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; margin: 0;">
            Visualização de Trabalho
        </h2>
        <a href="#" style="font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #0056D2; text-decoration: none; display: flex; align-items: center; gap: 4px;">
            Ver todos &rarr;
        </a>
    </div>

    <!-- GRELHA DE PORTFÓLIO (Ajustada para o limite de 600px) -->
    <div style="display: flex; flex-direction: column; gap: 12px; width: 100%; height: 510px;">

        <!-- LINHA SUPERIOR -->
        <div style="display: flex; gap: 12px; width: 100%; height: 270px;">
            <!-- Imagem 1 (Dashboard Web) -->
            <div style="flex: 2; height: 100%; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="https://wallpapers.com/images/hd/ermes-costello-stand-power-kv5a22d7txrp4rwv.jpg" alt="Dashboard Web" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <!-- Imagem 2 (App Mobile) -->
            <div style="flex: 1; height: 100%; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="https://hivicon.com/wp-content/uploads/2019/02/jojo-golden-wind-anime-2019-02-09-09h37m51s424.jpg" alt="App Mobile" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
        </div>

        <!-- LINHA INFERIOR -->
        <div style="display: flex; gap: 12px; width: 100%; height: 228px;">
            <!-- Imagem 3 (E-commerce) -->
            <div style="flex: 1; height: 100%; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="https://www.meme-arsenal.com/memes/dfd9277cdb5d6781a47dbd3c137463d0.jpg" alt="E-commerce Website" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <!-- Imagem 4 (Brand Guidelines) -->
            <div style="flex: 2; height: 100%; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <img src="https://cinemarche.net/wp-content/uploads/2018/10/10017796_h_pc_l.jpg" alt="Brand Guidelines" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
        </div>

    </div>

</div>

</div>
            
        </div>

    </div>
</main>
    </main>
</body>
</html>