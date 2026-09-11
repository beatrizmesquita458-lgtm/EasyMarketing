<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyMarketing TRABALHOS</title>
    
    <!--link dos bootstraps utilizados :P-->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="padding: 0; margin: 0; background-color: #F9F9FF; min-height: 100vh; display: flex; flex-direction: column;">
  <header>
    <nav class="navbar bg-white border-bottom" style="height: 70px;">
      <div class="container-fluid px-5">
        <!-- LOGO -->
        <span class="text-primary fw-bold fs-5">EasyMarketing</span>

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

  <!-- Conteúdo Principal (Background: #F9F9FF) -->
  <main style="flex: 1; padding: 32px 0;">
    
    <!-- CONTAINER PAI DAS INFORMAÇÕES (Fundo Branco: #FFFFFF) -->
    <div style="width: 1080px; background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; align-items: center; margin: 0 auto; padding: 24px; box-sizing: border-box;">
      
      <!-- HEADER DA VAGA (Empresa / Título) -->
      <div style="width: 1040px; height: 96px; display: flex; align-items: center; position: relative;">
        <div style="width: 100%; height: 96px; background-color: #fff; display: flex; align-items: center; gap: 16px; padding: 0 20px; border-radius: 8px; box-sizing: border-box;">
          <!-- LOGO -->
          <div style="width: 60px; height: 60px; border-radius: 6px; overflow: hidden; flex-shrink: 0; background-color: white; display: flex; align-items: center; justify-content: center;">
            <img src="https://img.freepik.com/vetores-premium/modelo-de-logotipo-de-empresa-de-tipo-minimalista_1283348-42181.jpg" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
          </div>

          <!-- TEXTOS -->
          <div style="display: flex; flex-direction: column; justify-content: center; gap: 2px;">
            <h2 style="margin: 0; font-size: 20px; font-weight: bold; color: #222222; line-height: 1.2;">Designer Gráfico</h2>
            <span style="font-size: 13px; color: #222222; line-height: 1.2;">TechNova Studios • São Paulo, SP, Brasil</span>
            <div style="display: flex; align-items: center; gap: 4px; font-size: 11px; color: #222; line-height: 1.2;">
              <span>Há 2 dias</span>
              <span>•</span>
              <span style="color: #222222; font-weight: bold;">⚡ Seja um dos 25 primeiros</span>
            </div>
          </div>
        </div>
      </div>

      <!-- fotos dos designs (Avatares) -->
      <div style="width: 1040px; height: 48px; display: flex; align-items: center; gap: 12px; margin-top: 20px; background-color: #F0F3FF">
        <div style="display: flex; align-items: center;">
          <img src="https://i.pinimg.com/originals/6f/3c/4b/6f3c4b64a713ca97c08b8b9e0ccda625.jpg" alt="Pessoa 1" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white; object-fit: cover;">
          <img src="https://img.freepik.com/fotos-premium/foto-de-uma-mulher-seria-uma-mulher-de-negocios-vestida-com-roupa-formal-sentada-na-mesa-e-trabalhando-em-um-laptop-no-escritorio-isolada-sobre-uma-parede-branca_171337-98096.jpg?w=2000" alt="Pessoa 2" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white; object-fit: cover; margin-left: -12px;">
        </div>
        <p style="margin: 0; font-size: 15px; font-weight: 500; color: #4b4a4a;">Veja quem a OpenGest contratou para esse cargo</p>
      </div>

      <!-- AÇOES (Candidatar-se + Salvar) -->
      <div style="width: 1040px; height: 40px; display: flex; align-items: center; margin-top: 16px;">
        <div style="display: flex; align-items: center; gap: 24px; font-family: system-ui, -apple-system, sans-serif;">
          <a href="https://seu-link-aqui.com" target="_blank" style="display: inline-flex; align-items: center; gap: 6px; color: #0f172a; text-decoration: none; font-size: 15px; font-weight: 600;">
            <span>Candidatar-se</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              <polyline points="15 3 21 3 21 9"></polyline>
              <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
          </a>

          <button type="button" style="background: none; border: none; padding: 0; color: #0f172a; font-size: 15px; font-weight: 600; cursor: pointer;">
            Salvar
          </button>
        </div>
      </div>

      <!-- LINHA DIVISORIA -->
      <div style="width: 1040px; height: 1px; background-color: #e2e8f0; margin-top: 16px;"></div>

      <!-- DESCRICAO DO TRABALHO -->
      <div style="width: 1040px; display: flex; flex-direction: column; margin-top: 20px;">
        <h2 style="margin: 0; font-size: 20px; font-weight: bold; color: #111C2D; line-height: 1.2;">Descrição do Trabalho</h2>
        
        <div style="width: 1040px; color: #475569; font-size: 14px; line-height: 1.6; margin-top: 12px; font-family: system-ui, -apple-system, sans-serif;">
          We are looking for a creative Graphic Designer to join our dynamic team. You will be responsible for creating visual concepts, by hand or using computer software, to communicate ideas that inspire, inform, or captivate consumers. Develop the overall layout and production design for…
        </div>

        <!-- BOTÃO MOSTRAR MAIS -->
        <div style="width: 1040px; display: flex; margin-top: 12px;">
          <button id="btn-mostrar-mais" onclick="alternarConteudo()" type="button" style="display: inline-flex; align-items: center; justify-content: center; gap: 6px; width: fit-content; background-color: #f1f5f9; color: #0f172a; border: 1px solid #cbd5e1; border-radius: 15px; padding: 6px 14px; font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s ease; font-family: system-ui, -apple-system, sans-serif;">
            <span id="texto-botao">Mostrar mais</span>
            <svg id="icone-seta" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="transition: transform 0.2s ease;">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
      </div>

      <!-- INFORMAÇÕES ADICIONAIS (GRID DE 2 COLUNAS) -->
      <div style="width: 1040px; display: grid; grid-template-columns: 1fr 1fr; gap: 16px 32px; font-family: system-ui, -apple-system, sans-serif; box-sizing: border-box; align-content: center; margin-top: 24px;">
        <div style="display: flex; flex-direction: column; gap: 2px;">
          <span style="font-size: 13px; color: #64748b; font-weight: 400; line-height: 1.2;">Nível de experiência</span>
          <span style="font-size: 15px; color: #0f172a; font-weight: 600; line-height: 1.2;">Pleno-sênior</span>
        </div>

        <div style="display: flex; flex-direction: column; gap: 2px;">
          <span style="font-size: 13px; color: #64748b; font-weight: 400; line-height: 1.2;">Tipo de emprego</span>
          <span style="font-size: 15px; color: #0f172a; font-weight: 600; line-height: 1.2;">Tempo integral</span>
        </div>

        <div style="display: flex; flex-direction: column; gap: 2px;">
          <span style="font-size: 13px; color: #64748b; font-weight: 400; line-height: 1.2;">Função</span>
          <span style="font-size: 15px; color: #0f172a; font-weight: 600; line-height: 1.2;">Design, Arte/Criação</span>
        </div>

        <div style="display: flex; flex-direction: column; gap: 2px;">
          <span style="font-size: 13px; color: #64748b; font-weight: 400; line-height: 1.2;">Setores</span>
          <span style="font-size: 15px; color: #0f172a; font-weight: 600; line-height: 1.2;">Tecnologia da Informação e Serviços</span>
        </div>
      </div>

    </div>
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
</body>
</html>