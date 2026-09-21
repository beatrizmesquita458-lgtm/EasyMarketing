<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhos Propostos</title>
    
    <!-- Links dos componentes utilizados -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    html {
        scroll-behavior: smooth;
    }

    .job-card {
        transition: box-shadow .2s ease, transform .2s ease;
    }

    .job-logo {
        transition: transform .2s ease;
    }

    .job-card:hover {
        box-shadow: 0 8px 20px rgba(15, 23, 42, .08) !important;
    }

    .job-card:hover .job-logo {
        transform: scale(1.03);
    }

    .job-action {
        transition: color .2s ease, background-color .2s ease, transform .2s ease;
    }

    .job-action:hover {
        color: #0052cc !important;
        transform: translateY(-1px);
    }

    .save-button:hover {
        color: #0052cc !important;
    }

    #btn-mostrar-mais:hover {
        background-color: #e2e8f0 !important;
    }

    .avatar-area {
        border-radius: 8px;
    }

    .avatar-area img {
        transition: transform .2s ease;
    }

    .avatar-area:hover img {
        transform: translateY(-2px);
    }

    @media (max-width: 1120px) {
        .job-container {
            width: calc(100% - 32px) !important;
        }

        .job-section {
            width: 100% !important;
        }

        .job-inner {
            width: 100% !important;
        }
    }

    @media (max-width: 700px) {
        .job-container {
            padding: 16px !important;
        }

        .job-header,
        .job-section,
        .job-inner,
        .job-divider,
        .job-actions {
            width: 100% !important;
        }

        .job-header {
            height: auto !important;
            min-height: 96px;
        }

        .job-actions {
            height: auto !important;
        }

        .job-info-grid {
            grid-template-columns: 1fr !important;
        }

        .avatar-area {
            height: auto !important;
            min-height: 48px;
            padding: 8px !important;
        }

        .avatar-area p {
            font-size: 13px !important;
        }

        nav .container-fluid {
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        nav .d-flex.gap-4.mx-auto {
            gap: 12px !important;
        }

        nav .d-flex.align-items-center.gap-4 {
            gap: 12px !important;
        }
    }
</style>

</head>
<body style="padding: 0; margin: 0; background-color: #F9F9FF; min-height: 100vh; display: flex; flex-direction: column;">
  <header>
    <nav class="navbar bg-white border-bottom" style="height: 70px;">
      <div class="container-fluid px-5">
        <!-- LOGO -->
        <span class="text-primary fw-bold fs-5">EasyMarketing</span>

        
            <!-- Menu -->
            <div class="d-flex gap-4 mx-auto">

                <a href="http://localhost/easymarketing/public/" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-house-fill d-block fs-5"></i>
                    Home
                </a>

                <a href="http://localhost/easymarketing/public/contratado" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-people d-block fs-5"></i>
                    Candidatos
                </a>

                <a href="http://localhost/easymarketing/public/trabalhos" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-briefcase d-block fs-5"></i>
                    Trabalhos
                </a>
              <a href="http://localhost/easymarketing/public/empresa" class="d-flex flex-column align-items-center text-dark text-decoration-none text-center small">
                    <i class="bi bi-building" style="font-size: 20px;"></i>
                     <span>Empresas</span>
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
  <main style="flex: 1; padding: 32px 0;">
    
    <!-- CONTAINER PAI DAS INFORMAÇÕES (Fundo Branco: #FFFFFF) -->
    <div class="job-container job-card" style="width: 1080px; background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; align-items: center; margin: 0 auto; padding: 24px; box-sizing: border-box;">
      
      <!-- HEADER DA VAGA (Empresa / Título) -->
      <div class="job-header" style="width: 1040px; height: 96px; display: flex; align-items: center; position: relative;">
        <div style="width: 100%; height: 96px; background-color: #fff; display: flex; align-items: center; gap: 16px; padding: 0 20px; border-radius: 8px; box-sizing: border-box;">
          <!-- LOGO -->
          <div class="job-logo" style="width: 60px; height: 60px; border-radius: 6px; overflow: hidden; flex-shrink: 0; background-color: white; display: flex; align-items: center; justify-content: center;">
            <img src="https://img.freepik.com/vetores-premium/modelo-de-logotipo-de-empresa-de-tipo-minimalista_1283348-42181.jpg" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
          </div>

          <!-- TEXTOS -->
          <div style="display: flex; flex-direction: column; justify-content: center; gap: 2px;">
            <h2 style="margin: 0; font-size: 20px; font-weight: bold; color: #222222; line-height: 1.2;">Designer Gráfico</h2>
            <span style="font-size: 13px; color: #222222; line-height: 1.2;">TechNova Studios • São Paulo, SP, Brasil</span>
            <div style="display: flex; align-items: center; gap: 4px; font-size: 11px; color: #222; line-height: 1.2;">
              <span>Há 2 dias</span>
              <span>•</span>
              <span style="color: #222222; font-weight: bold;">Seja um dos 25 primeiros</span>
            </div>
          </div>
        </div>
      </div>

      <!-- fotos dos designs (Avatares) -->
      <div class="avatar-area" style="width: 1040px; height: 48px; display: flex; align-items: center; gap: 12px; margin-top: 20px; background-color: #F0F3FF">
        <div style="display: flex; align-items: center;">
          <img src="https://i.pinimg.com/originals/6f/3c/4b/6f3c4b64a713ca97c08b8b9e0ccda625.jpg" alt="Pessoa 1" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white; object-fit: cover;">
          <img src="https://img.freepik.com/fotos-premium/foto-de-uma-mulher-seria-uma-mulher-de-negocios-vestida-com-roupa-formal-sentada-na-mesa-e-trabalhando-em-um-laptop-no-escritorio-isolada-sobre-uma-parede-branca_171337-98096.jpg?w=2000" alt="Pessoa 2" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white; object-fit: cover; margin-left: -12px;">
        </div>
        <p style="margin: 0; font-size: 15px; font-weight: 500; color: #4b4a4a;">Veja quem a OpenGest contratou para esse cargo</p>
      </div>

      <!-- AÇOES (Candidatar-se + Salvar) -->
      <div class="job-actions" style="width: 1040px; height: 40px; display: flex; align-items: center; margin-top: 16px;">
        <div style="display: flex; align-items: center; gap: 24px; font-family: system-ui, -apple-system, sans-serif;">
          <a class="job-action" href="https://seu-link-aqui.com" target="_blank" style="display: inline-flex; align-items: center; gap: 6px; color: #0f172a; text-decoration: none; font-size: 15px; font-weight: 600;">
            <span>Candidatar-se</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
              <polyline points="15 3 21 3 21 9"></polyline>
              <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
          </a>

          <button type="button" class="save-button job-action" style="background: none; border: none; padding: 0; color: #0f172a; font-size: 15px; font-weight: 600; cursor: pointer;">
            Salvar
          </button>
        </div>
      </div>

      <!-- LINHA DIVISORIA -->
      <div class="job-divider" style="width: 1040px; height: 1px; background-color: #e2e8f0; margin-top: 16px;"></div>

      <!-- DESCRICAO DO TRABALHO -->
      <div class="job-section" style="width: 1040px; display: flex; flex-direction: column; margin-top: 20px;">
        <h2 style="margin: 0; font-size: 20px; font-weight: bold; color: #111C2D; line-height: 1.2;">Descrição do Trabalho</h2>
        
        <div class="job-description" style="width: 1040px; color: #475569; font-size: 14px; line-height: 1.6; margin-top: 12px; font-family: system-ui, -apple-system, sans-serif;">
          <span id="descricao-curta">We are looking for a creative Graphic Designer to join our dynamic team. You will be responsible for creating visual concepts, by hand or using computer software, to communicate ideas that inspire, inform, or captivate consumers. Develop the overall layout and production design for…</span>
          <span id="descricao-completa" style="display: none;">
            We are looking for a creative Graphic Designer to join our dynamic team. You will be responsible for creating visual concepts, by hand or using computer software, to communicate ideas that inspire, inform, or captivate consumers. Develop the overall layout and production design for digital and printed materials, collaborate with the marketing team, and ensure that visual content follows the project's communication guidelines.
          </span>
        </div>

        <!-- BOTÃO MOSTRAR MAIS -->
        <div class="job-more" style="width: 1040px; display: flex; margin-top: 12px;">
          <button id="btn-mostrar-mais" onclick="alternarConteudo()" type="button" style="display: inline-flex; align-items: center; justify-content: center; gap: 6px; width: fit-content; background-color: #f1f5f9; color: #0f172a; border: 1px solid #cbd5e1; border-radius: 15px; padding: 6px 14px; font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s ease; font-family: system-ui, -apple-system, sans-serif;">
            <span id="texto-botao">Mostrar mais</span>
            <svg id="icone-seta" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="transition: transform 0.2s ease;">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
      </div>

      <!-- INFORMAÇÕES ADICIONAIS (GRID DE 2 COLUNAS) -->
      <div class="job-info-grid" style="width: 1040px; display: grid; grid-template-columns: 1fr 1fr; gap: 16px 32px; font-family: system-ui, -apple-system, sans-serif; box-sizing: border-box; align-content: center; margin-top: 24px;">
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

<script>
function alternarConteudo() {
    const curta = document.getElementById("descricao-curta");
    const completa = document.getElementById("descricao-completa");
    const texto = document.getElementById("texto-botao");
    const seta = document.getElementById("icone-seta");

    if (!curta || !completa || !texto || !seta) {
        return;
    }

    const estaAberto = completa.style.display !== "none";

    curta.style.display = estaAberto ? "inline" : "none";
    completa.style.display = estaAberto ? "none" : "inline";
    texto.textContent = estaAberto ? "Mostrar mais" : "Mostrar menos";
    seta.style.transform = estaAberto ? "rotate(0deg)" : "rotate(180deg)";
}

document.addEventListener("DOMContentLoaded", function () {
    const salvar = document.querySelector(".save-button");

    if (salvar) {
        salvar.addEventListener("click", function () {
            const salvo = this.dataset.salvo === "true";

            this.dataset.salvo = salvo ? "false" : "true";
            this.textContent = salvo ? "Salvar" : "Salvo";
        });
    }
});
</script>

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
</html>