<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EasyMarketing</title>

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
    
    <main style="padding: 40px 0 ; display: flex; flex-direction: column; align-items: center;">
        
            <!-- É o cupom :P -->
           <div style="width: 75%; height: 54px; background-color: lightblue ;  display: flex; justify-content: center; align-items: center; border-radius: 40px">
           <p style="margin: 0;" >Get 20% off your first payment for design and development services on Dribbble.  Use code WELCOME20 🎉</p>
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" role="img" aria-hidden="true" class="icon ">
  <path d="M6.34314 4.22183C5.75736 3.63604 4.80761 3.63604 4.22182 4.22183C3.63604 4.80761 3.63604 5.75736 4.22182 6.34315L9.87868 12L4.22182 17.6569C3.63604 18.2426 3.63604 19.1924 4.22182 19.7782C4.80761 20.364 5.75736 20.364 6.34314 19.7782L12 14.1213L17.6569 19.7782C18.2426 20.364 19.1924 20.364 19.7782 19.7782C20.364 19.1924 20.364 18.2426 19.7782 17.6569L14.1213 12L19.7782 6.34315C20.364 5.75736 20.364 4.80761 19.7782 4.22183C19.1924 3.63604 18.2426 3.63604 17.6569 4.22183L12 9.87868L6.34314 4.22183Z" fill="currentColor"></path>
</svg>
           </div>
</div>
<br>
          <div style="text-align: center;">
            <!-- <i style="font-size: 45px; color: #2563eb;" class="bi bi-arrow-left-circle"></i> -->
            <img src="https://pairroxz.com/blog/wp-content/uploads/2023/01/What-is-uiux-Design-20-Best-uiux-Design-Examples-in-2023.png" alt="EasyMarketing" style="width: 1014px; height: 400px; border-radius: 30px;">
          </div>
<br>

<!-- INÍCIO DO COMPONENTE DE BUSCA (O que fica embaixo da imagem que deu errado KKKKKKKKKKKKK) -->
<div style="width: 100%; max-width: 1104px; background: #ffffff linear-gradient(135deg, rgba(255,255,255,0) 60%, rgba(210,230,255,0.7) 100%); border: 1px solid #e2e8f0; border-radius: 12px; padding: 36px 40px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03); font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; box-sizing: border-radius; margin-bottom: 30px;">

  <!-- Título -->
  <div style="font-size: 22px; font-weight: 600; color: #1e293b; margin-bottom: 8px;">
    Encontre os Melhores <span style="color: #2563eb;">Designers</span>
  </div>

  <!-- Subtítulo -->
  <div style="font-size: 14px; color: #64748b; line-height: 1.5; max-width: 520px; margin-bottom: 24px;">
    Trabalhe com talentos criativos de alto nível. Explore nosso mercado focado na comunidade de design para projetos incríveis.
  </div>

  <!-- Barra de Pesquisa -->
  <div style="display: flex; align-items: center; background: #ffffff; border: 1.5px solid #cbd5e1; border-radius: 999px; padding: 6px 6px 6px 18px; margin-bottom: 24px;">
    <!-- Ícone Lupa -->
    <svg style="width: 18px; height: 18px; color: #64748b; margin-right: 10px; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <circle cx="11" cy="11" r="8"></circle>
      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
    
    <!-- Input de Texto -->
    <input 
      type="text" 
      placeholder="Que tipo de designer você precisa? (ex: UX, Gráfico, 3D)" 
      style="border: none; outline: none; width: 100%; font-size: 14px; color: #1e293b; background: transparent;"
    />

    <!-- Botão Azul -->
    <div style="background: #0052cc; border: none; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #ffffff; flex-shrink: 0; cursor: pointer;">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <polyline points="12 5 19 12 12 19"></polyline>
      </svg>
    </div>
  </div>

  <!-- Container de Tags -->
  <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
    <span style="font-size: 13px; font-weight: 700; color: #475569; margin-right: 4px;">Popular:</span>
    <div style="background: #f1f5f9; color: #334155; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 600; font-family: monospace;">UX/UI Designers</div>
    <div style="background: #f1f5f9; color: #334155; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 600; font-family: monospace;">Graphic Designers</div>
    <div style="background: #f1f5f9; color: #334155; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 600; font-family: monospace;">Brand Designers</div>
    <div style="background: #f1f5f9; color: #334155; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 600; font-family: monospace;">Product Designers</div>
    <div style="background: #f1f5f9; color: #334155; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 600; font-family: monospace;">Motion Designers</div>
  </div>

</div>

<!-- DIV PRINCIPAL (Div pai, o quadrado maior que pega todos da parte DESTAQUEEE) -->
<div style="background-color: #f8f9fa; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; display: flex; flex-direction: column; gap: 20px; font-family: sans-serif; width: 100%; max-width: 1000px; box-sizing: border-radius; margin-bottom: 30px;" >

  <!-- Div dos textos que ficam encima as divs que ficam as informações das pessoas -->
  <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <h2 style="margin: 0; font-size: 18px; color: #1e293b; font-weight: 600;">Talentos em Destaque</h2>
    <a href="#" style="color: #2563eb; text-decoration: none; font-size: 14px; font-weight: 600;">Ver todos</a>
  </div>

  <!-- div dos dois quadrados onde irão ficar a pessoa que ficou em destaque e a segunda pessoa que ficou em destaque (Lado a Lado) -->
  <div style="display: flex; gap: 16px; align-items: stretch; flex-wrap: wrap;">

    <!-- primeiro quadrado/o direito (no figma é a Alex Rivers :P )-->
    <div style="background-color: #eff6ff; border: 1px solid #bfdbfe; border-radius: 12px; padding: 20px; width: 280px; display: flex; flex-direction: column; justify-content: space-between; gap: 20px;">
      
      <!-- div da Foto e dos textos onde ficam as informações -->
      <div style="display: flex; align-items: center; gap: 12px;">
        <!-- Div da Foto Redonda da pesssoa da esquerda-->
        <div style="width: 52px; height: 52px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
          <img src="https://img.freepik.com/fotos-gratis/feliz-bonito-mulher-jovem-posar-camera-em-parque-cidade_1262-19158.jpg" alt="Alex Rivers" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <!-- Div dos textos do quadrado da esquerda -->
        <div>
          <h3 style="margin: 0; font-size: 16px; color: #0f172a; font-weight: 700;">Alex Rivers</h3>
          <p style="margin: 4px 0 0 0; font-size: 13px; color: #475569;">Senior Brand Designer</p>
        </div>
      </div>

      <!--div onde ficam as visualizações do quadrado da esquerda -->
      <div style="display: flex; align-items: center; gap: 8px; color: #1d4ed8; font-size: 14px; font-weight: 600;">
        <span>👁</span>
        <span>142 visualizações hoje</span>
      </div>

    </div>

    <!-- div do quadrado da direita ( ou Sarah Chen, no figma kkk) -->
    <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; width: 280px; display: flex; flex-direction: column; justify-content: space-between; gap: 20px;">
      
      <!-- Div dos textos que ficam encima as divs que ficam as informações das pessoas -->
      <div style="display: flex; align-items: center; gap: 12px;">
        <!-- Div da Foto Redonda da pesssoa da direita-->
       <div style="width: 52px; height: 52px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
          <img src="https://as1.ftcdn.net/v2/jpg/06/78/62/46/1000_F_678624657_yIuAFR8cjLXG1HWVLz42bYDafXQ73a8C.jpg" alt="Alex Rivers" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div>
          <h3 style="margin: 0; font-size: 16px; color: #0f172a; font-weight: 700;">Sarah Chen</h3>
          <p style="margin: 4px 0 0 0; font-size: 13px; color: #475569;">Product Designer</p>
        </div>
      </div>

      <!--div onde ficam as visualizações do quadrado da direita -->
      <div style="display: flex; align-items: center; gap: 8px; color: #334155; font-size: 14px; font-weight: 600;">
        <span>📈</span>
        <span>98 visualizações hoje</span>
      </div>

    </div>

  </div>

</div>

<!-- DIV PAI PRINCIPAL -->
<div style="width: 1104px; height: 826px; background-color: #F9F9FF; border-radius: 16px; position: relative; padding: 20px; box-sizing: border-box;">

  <!-- ==================== CARD 1 ==================== -->
  <div style="position: absolute; top: 20px; left: 20px; width: 728px; height: 417px; background-color: black; border-radius: 16px; overflow: hidden; margin-left: -20px; margin-top: -20px;">

    <img 
      src="https://www.unsell.design/wp-content/uploads/2023/08/633617353_Template-Featured-image.jpg"
      style="width: 100%; height: 334px; object-fit: cover;"
    >

    <div style="width: 100%; height: 83px; background-color: white; border: 1px solid #bfdbfe; border-radius: 0px 0px 12px 12px; position: absolute; bottom: 0; left: 0; display: flex; align-items: center; justify-content: space-between; padding: 0 16px; box-sizing: border-box;">

      <div style="display: flex; align-items: center; gap: 10px;">

        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
          <img 
            src="https://tse3.mm.bing.net/th/id/OIP.WKJY7Wdt8q3wXcN2YUKDgwHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
            style="width: 100%; height: 100%; object-fit: cover;"
          >
        </div>

        <div style="color: black;">
          <span style="font-weight: bold; font-size: 14px;">
            OpenGest
          </span>

          <span style="font-size: 12px; opacity: 0.8; display: block;">
            Gestão de Negócios
          </span>
        </div>

      </div>

      <div style="color: black;">
        A partir de

        <span style="font-weight: bold; display: block; color: #0050CB;">
          R$ 1.200,00
        </span>
      </div>

    </div>

  </div>


  <!-- ==================== CARD 2 ==================== -->
  <div style="position: absolute; top: 20px; left: 760px; width: 324px; height: 417px; background-color: white; border-radius: 16px; overflow: hidden; margin-left: 20px; margin-top: -20px;">

    <img 
      src="https://www.unsell.design/wp-content/uploads/2024/05/764496405_Template-Featured-image.jpg"
      style="width: 100%; height: 334px; object-fit: cover;"
    >

    <div style="width: 100%; height: 83px; background-color: white; border-top: 1px solid #bfdbfe; display: flex; align-items: center; gap: 10px; padding: 0 12px; box-sizing: border-box;">

      <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
        <img 
          src="https://tse4.mm.bing.net/th/id/OIP.DuA3EOIDHcIZwadA_caE-AHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
          style="width: 100%; height: 100%; object-fit: cover;"
        >
      </div>

      <div>
        <div style="font-weight: bold; font-size: 12px; color: black;">
          COMPLIACE AVANT
        </div>

        <div style="font-size: 11px; color: gray;">
          Segurança de Dados
        </div>
      </div>

    </div>

  </div>


  <!-- ==================== CARD 3 ==================== -->
  <div style="position: absolute; top: 437px; left: 0px; width: 352px; height: 301px; background-color: white; border-radius: 12px; overflow: hidden;">

    <!-- Imagem do Card 3 -->
    <img 
      src="https://images.ctfassets.net/ooa29xqb8tix/22yB0fxGdusPYvjeHt0tIc/5e8425645473fbfc465de26fff504c89/Metadata_the_Figma_Handbook.jpg"
      style="width: 100%; height: 200px; object-fit: cover;"
    >

    <!-- Informações do Card 3 -->
    <div style="height: 101px; display: flex; align-items: center; gap: 12px; padding: 0 14px; box-sizing: border-box;">

      <!-- Foto redonda -->
      <div style="width: 48px; height: 48px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
        <img 
          src="https://drsolucoes.dr.com.br/wp-content/uploads/2014/07/DR2.png"
          style="width: 100%; height: 100%; object-fit: cover;"
        >
      </div>

      <!-- Texto -->
      <div style="color: black;">

        <div style="font-weight: bold; font-size: 14px;">
          DRA Soluções e tecnologias
        </div>

        <div style="font-size: 12px; color: gray; margin-top: 8px;">
          3D Art &nbsp;&nbsp;&nbsp; Illustration
        </div>

      </div>

    </div>

  </div>


  <!-- ==================== CARD 4 ==================== -->
  <div style="position: absolute; top: 437px; left: 376px; width: 352px; height: 301px; background-color: white; border-radius: 12px; overflow: hidden;">

    <!-- Imagem do Card 4 -->
    <img 
      src="https://s3-figma-hubfile-images-production.figma.com/hub/file/carousel/img/b1f371789de321ba82faaaea628437fe32414548"
      style="width: 100%; height: 200px; object-fit: cover;"
    >

    <!-- Informações do Card 4 -->
    <div style="height: 101px; display: flex; align-items: center; gap: 12px; padding: 0 14px; box-sizing: border-box;">

      <!-- Foto redonda -->
      <div style="width: 48px; height: 48px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
        <img 
          src="https://mir-s3-cdn-cf.behance.net/projects/404/fb047831525793.Y3JvcCw3NzcsNjA3LDU3LDA.jpg"
          style="width: 100%; height: 100%; object-fit: cover;"
        >
      </div>

      <!-- Texto -->
      <div style="color: black;">

        <div style="font-weight: bold; font-size: 14px;">
          Breath Nature
        </div>

        <div style="font-size: 12px; color: gray; margin-top: 8px;">
          Branding &nbsp;&nbsp;&nbsp; Visual Identity
        </div>

      </div>

    </div>

  </div>


  <!-- ==================== CARD 5 ==================== -->
  <div style="position: absolute; top: 437px; left: 752px; width: 352px; height: 301px; background-color: white; border-radius: 12px; overflow: hidden;">

    <!-- Imagem do Card 5 -->
    <img 
      src="https://static.canva.com/static/images/canva_templates_array.jpg"
      style="width: 100%; height: 200px; object-fit: cover;"
    >

    <!-- Informações do Card 5 -->
    <div style="height: 101px; display: flex; align-items: center; gap: 12px; padding: 0 14px; box-sizing: border-box;">

      <!-- Foto redonda -->
      <div style="width: 48px; height: 48px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
        <img 
          src="https://static.canva.com/domain-assets/canva/static/images/fb_cover-1.jpg"
          style="width: 100%; height: 100%; object-fit: cover;"
        >
      </div>

      <!-- Texto -->
      <div style="color: black;">

        <div style="font-weight: bold; font-size: 14px;">
          Trivex Brand System
        </div>

        <div style="font-size: 12px; color: gray; margin-top: 8px;">
          Branding &nbsp;&nbsp;&nbsp; Visual Identity
        </div>

      </div>

    </div>

  </div>
</div>

<!-- DIv principal do botão do "carregar mais projetos" -->
 <div style="width:1104px; height: 60px; background-color: #F9F9FF; border-radius: 12px; margin-top: 20px; display: flex; justify-content: center; align-items: center;">
   <div style="
    background-color: #F9F9FF;
    height: 44px;
    width: 1104px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -50px;
">

    <button style="
        background-color: white;
        border: 2px solid #0066cc;
        border-radius: 30px;
        width: 247px;
        height: 44px;
        color: #0066cc;
        font-size: 16px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    ">
        Carregar mais projetos
        <span style="margin-left: 10px; margin-bottom: 5px; font-weight: bold;">⌄</span>
    </button>

</div>
   </div>
  </div>
</div>
</div>
    </main>


    <!-- Parte do rodapé no final do site (JÁ FINALIZADO) -->
    <footer style="display: flex; flex-direction: column; align-items: center; gap: 16px; padding: 24px 16px; width: 100%; background-color: #f2f2f2; border-top: 1px solid #bab9b9">
  
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