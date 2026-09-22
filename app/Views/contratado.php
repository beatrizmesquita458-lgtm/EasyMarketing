<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        button, a, .portfolio-card, .view-button {
            transition: all 0.2s ease;
        }

        button:hover, .view-button:hover {
            transform: translateY(-2px);
        }

        .portfolio-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 14px rgba(0,0,0,0.10);
        }

        .view-button:hover {
            background-color: #0056D2 !important;
        }

        .view-button:hover span,
        .view-button:hover i {
            color: white !important;
        }

        .curriculo:hover {
            text-decoration: underline !important;
        }


        .skill {
            font-size: 12px;
            font-weight: 500;
            color: #334155;
            background-color: #eff6ff;
            padding: 6px 12px;
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .skill:hover {
            background-color: #dbeafe;
            border-color: #0056D2;
            color: #0056D2;
            transform: translateY(-2px);
            box-shadow: 0 2px 6px rgba(0,86,210,0.15);
        }

        @media (max-width: 1100px) {
            .pagina-principal {
                width: 95% !important;
                height: auto !important;
                flex-direction: column !important;
                align-items: center !important;
            }

            .coluna-perfil,
            .coluna-direita {
                width: 100% !important;
                height: auto !important;
            }

            .coluna-perfil {
                align-items: center;
            }

            .sobre-mim,
            .portfolio-titulo,
            .portfolio-grid,
            .botao-projetos {
                width: 100% !important;
                margin-left: 0 !important;
            }

            .portfolio-grid {
                justify-content: center;
            }
        }

        @media (max-width: 700px) {
            .navbar .container-fluid {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .menu-principal {
                gap: 12px !important;
            }

            .area-direita {
                display: none !important;
            }

            .portfolio-card {
                width: 100% !important;
            }
        }
    </style>

<style>
/* ===== ANIMACOES VISIVEIS DO HEADER ===== */
header{animation:headerEntrada .7s ease both;}
@keyframes headerEntrada{from{opacity:0;transform:translateY(-25px)}to{opacity:1;transform:translateY(0)}}
header .navbar{transition:box-shadow .3s ease,background-color .3s ease;}
header .navbar:hover{box-shadow:0 6px 22px rgba(0,86,210,.10);}
header .text-primary.fw-bold{display:inline-block;transition:transform .3s ease,letter-spacing .3s ease;}
header .text-primary.fw-bold:hover{transform:scale(1.06) translateY(-2px);letter-spacing:1px;}
header nav a{position:relative;transition:color .25s ease,transform .25s ease,background-color .25s ease; border-radius:10px;padding:5px 9px;}
header nav a:hover{color:#0056D2!important;background:#eef5ff;transform:translateY(-4px);}
header nav a::after{content:'';position:absolute;left:18%;right:18%;bottom:-2px;height:3px;background:#0056D2;border-radius:4px;transform:scaleX(0);transition:transform .3s ease;}
header nav a:hover::after{transform:scaleX(1);}
header nav a i{transition:transform .25s ease;}
header nav a:hover i{transform:translateY(-3px) scale(1.12);}
header nav .d-flex.align-items-center.gap-4>i{cursor:pointer;transition:transform .25s ease,color .25s ease,background .25s ease;padding:6px;border-radius:50%;}
header nav .d-flex.align-items-center.gap-4>i:hover{color:#0056D2;background:#eef5ff;transform:translateY(-3px) scale(1.15);}
header nav .bi-bell:hover{animation:sino .55s ease;}
@keyframes sino{0%,100%{transform:rotate(0) scale(1.15)}25%{transform:rotate(-15deg) scale(1.15)}50%{transform:rotate(15deg) scale(1.15)}75%{transform:rotate(-8deg) scale(1.15)}}
header nav .rounded-circle{transition:transform .3s ease,box-shadow .3s ease;}
header nav .rounded-circle:hover{transform:scale(1.15);box-shadow:0 0 0 5px rgba(0,86,210,.10);}
@media(max-width:768px){header nav a{padding:3px 5px}header nav .d-flex.align-items-center.gap-4{gap:10px!important}}
</style>

</head>

<body style="padding: 0; margin: 0; background-color: #F9F9FF;">

<header>
    <nav class="navbar bg-white border-bottom" style="height: 70px;">
        <div class="container-fluid px-5">
            <span class="text-primary fw-bold fs-5">EasyMarketing</span>

            <div class="d-flex gap-4 mx-auto menu-principal">
                <a href="http://localhost/easymarketing/public/" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-house-fill d-block fs-5"></i>Home
                </a>

                <a href="http://localhost/easymarketing/public/contratado" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-people d-block fs-5"></i>Candidatos
                </a>

                <a href="http://localhost/easymarketing/public/trabalhos" class="text-dark text-decoration-none text-center small">
                    <i class="bi bi-briefcase d-block fs-5"></i>Trabalhos
                </a>

                <a href="http://localhost/easymarketing/public/empresa" class="d-flex flex-column align-items-center text-dark text-decoration-none text-center small">
                    <i class="bi bi-building" style="font-size: 20px;"></i>
                    <span>Empresas</span>
                </a>
            </div>

            <div class="d-flex align-items-center gap-4 area-direita">
                <i class="bi bi-bell fs-5" style="cursor:pointer;"></i>
                <i class="bi bi-grid-3x3-gap-fill fs-5" style="cursor:pointer;"></i>
                <i class="bi bi-play-btn fs-5" style="cursor:pointer;"></i>
                <div class="border-start" style="height: 30px;"></div>
                <div class="rounded-circle bg-secondary-subtle d-flex align-items-center justify-content-center"
                     style="width: 32px; height: 32px;">
                    <i class="bi bi-person"></i>
                </div>
            </div>
        </div>
    </nav>
</header>

<main style="padding: 40px 0; display: flex; flex-direction: column; align-items: center;">

<div class="pagina-principal" style="width: 1200px; min-height: 1456px; background-color: #F9F9FF; display: flex; align-items: flex-start; gap: 30px; padding: 20px 30px 0 30px; box-sizing: border-box; margin-top: -40px;">

    <!-- COLUNA DO PERFIL -->
    <div class="coluna-perfil" style="width: 258px; background-color: #F9F9FF; display: flex; flex-direction: column; flex-shrink: 0;">

        <div style="width: 258px; min-height: 380px; background-color: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <div style="width: 100%; height: 90px; background-color: #0066fe;"></div>

            <div style="padding: 0 16px; position: relative;">
                <img src="https://img.freepik.com/fotos-premium/linda-mulher-sorridente-digitando-no-notebook-trabalhando-on-line-usando-o-computador-portatil-feminino-sentado-na-varanda-do-terraco_246930-2904.jpg"
                     alt="Foto de perfil"
                     style="width: 72px; height: 72px; border-radius: 50%; border: 3px solid white; object-fit: cover; margin-top: -36px; display: block;">
            </div>

            <div style="display: flex; flex-direction: column; justify-content: center; gap: 2px; padding: 0 16px; margin-top: 8px;">
                <span style="font-family: system-ui, sans-serif; font-size: 16px; font-weight: 700; color: #0f172a; line-height: 1.2;">Marina Magalhães</span>

                <p style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 11px; font-weight: 500; color: #475569; margin: 4px 0 0; line-height: 1.3;">
                    Senior UI/UX Designer & Art Director
                </p>

                <div style="display: flex; align-items: center; gap: 4px; margin-top: 12px;">
                    <i class="bi bi-geo-alt" style="font-size: 16px; color: #475569;"></i>
                    <span style="font-size: 11px; font-weight: 500; color: #475569;">São Paulo, Brasil</span>
                </div>

                <div style="display: flex; flex-direction: column; gap: 8px; width: 100%; margin-top: 18px;">
                    <button id="contratarBtn" style="width: 100%; height: 36px; background-color: #0056D2; border: none; border-radius: 12px; display: flex; align-items: center; justify-content: center; gap: 8px; cursor: pointer;">
                        <i class="bi bi-briefcase" style="color: #ffffff; font-size: 16px;"></i>
                        <span style="font-size: 14px; font-weight: 600; color: #ffffff;">Contratar</span>
                    </button>

                    <a id="mensagemBtn" href="https://wa.me/5511999999999?text=Olá%20Marina!%20Gostaria%20de%20conversar%20sobre%20uma%20oportunidade%20profissional." target="_blank" rel="noopener noreferrer" style="width: 100%; height: 36px; background-color: transparent; border: 1.5px solid #0056D2; border-radius: 12px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                        <span style="font-size: 14px; font-weight: 600; color: #0056D2;">Mensagem</span>
                    </a>
                </div>
            </div>
        </div>

        <div style="width: 258px; height: 192px; background-color: white; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 16px; box-sizing: border-box; display: flex; flex-direction: column; justify-content: space-between; margin-top: 30px;">
            <div style="width: 100%; display: flex; flex-direction: column; gap: 12px; margin-top: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-size: 15px; color: #475569;">Projetos concluídos</span>
                    <span style="font-size: 15px; font-weight: 700; color: #0f172a;">48</span>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-size: 15px; color: #475569;">Taxa de sucesso</span>
                    <span style="font-size: 15px; font-weight: 700; color: #0056D2;">98%</span>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-size: 15px; color: #475569;">Disponibilidade</span>
                    <span style="font-size: 15px; font-weight: 600; color: #16a34a; background-color: #f0fdf4; padding: 2px 8px; border-radius: 12px;">Imediata</span>
                </div>
            </div>
        </div>

        <div style="width: 258px; height: 230px; background-color: #F9F9FF; margin-top: 30px;">
            <div style="width: 258px; height:230px; background-color: white; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); box-sizing: border-box;">
                <h3 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 16px;">Habilidades Principais</h3>

                <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                    <span class="skill">UI Design</span>
                    <span class="skill">UX Research</span>
                    <span class="skill">Prototipagem</span>
                    <span class="skill">Design Systems</span>
                    <span class="skill">Figma</span>
                    <span class="skill">Webflow</span>
                </div>
            </div>
        </div>
    </div>

    <!-- COLUNA DIREITA -->
    <div class="coluna-direita" style="width: 822px; min-height: 1384px; background-color: #F9F9FF; display: flex; flex-direction: column; gap: 24px; flex-shrink: 0;">

        <div class="sobre-mim" style="width: 822px; min-height: 284px; background-color: white; border-radius: 15px; padding: 30px; box-sizing: border-box;">
            <div style="font-size: 24px; font-weight: 700; color: #0f172a;">Sobre mim</div>

            <div style="margin-top: 30px;">
                <span style="font-size: 15px; font-weight: 500; color: #475569; line-height: 1.5;">
                    Olá! Sou a Mariana, uma designer apaixonada por resolver problemas complexos através de
                    interfaces limpas, intuitivas e esteticamente agradáveis. Com mais de 8 anos de experiência
                    trabalhando com startups e grandes corporações, ajudo marcas a traduzirem seus valores em
                    produtos digitais de alto impacto. Meu foco principal é a interseção entre os objetivos de negócio e
                    a real necessidade do usuário.
                </span>
            </div>

            <a class="curriculo" href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; margin-top: 25px;">
                <span style="font-family: 'JetBrains Mono', monospace; font-size: 14px; font-weight: 600; color: #0056D2;">Ver currículo completo</span>
                <i class="bi bi-arrow-right" style="color: #0056D2; font-size: 16px;"></i>
            </a>
        </div>

        <div class="portfolio-titulo" style="width: 822px; height: 58px; background-color: white; box-sizing: border-box;">
            <div style="width: 100%; height: 42px; background-color: white; margin-top: 30px; display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 24px; font-weight: 700; color: #0f172a; margin-left: 30px;">Portfólio em Destaque</span>

                <div style="display: flex; gap: 8px; margin-right: 12px;">
                    <div class="view-button" id="gridBtn" style="width: 36px; height: 36px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                        <i class="bi bi-grid-3x3-gap" style="font-size: 18px; color: #1e293b;"></i>
                    </div>

                    <div class="view-button" id="listBtn" style="width: 36px; height: 36px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                        <i class="bi bi-view-list" style="font-size: 18px; color: #1e293b;"></i>
                    </div>
                </div>
            </div>
        </div>

        <div id="portfolioGrid" class="portfolio-grid" style="width: 756px; display: flex; flex-wrap: wrap; gap: 24px; margin-top: 24px; margin-left: 30px;">

            <div class="portfolio-card" style="width: 440px; background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="width: 100%; height: 260px; position: relative;">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800" alt="FinTech Dashboard" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 12px; right: 12px; background-color: rgba(255,255,255,0.9); font-size: 11px; font-weight: 600; color: #0f172a; padding: 4px 8px; border-radius: 20px;">
                        <i class="bi bi-eye"></i> 1.2k
                    </span>
                </div>
                <div style="padding: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin: 0;">FinTech Dashboard Redesign</h4>
                    <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.4;">Redesign completo da plataforma de investimentos, focando em visualização de dados complexos e simplificação da jornada de compra de ativos.</p>
                    <div style="display: flex; gap: 8px; margin-top: 8px;">
                        <span class="tag">UI Design</span>
                        <span class="tag">Web App</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card" style="width: 292px; background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="width: 100%; height: 180px; background-color: #f8fafc;">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800" alt="E-commerce App" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">E-commerce Mobile App</h4>
                    <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.4;">Criação de um novo fluxo de checkout para um aplicativo de compras.</p>
                </div>
            </div>

            <div class="portfolio-card" style="width: 292px; background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="width: 100%; height: 180px;">
                    <img src="https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=800" alt="Identidade Visual" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0;">Identidade Visual Nexus</h4>
                    <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.4;">Desenvolvimento de marca e guia de estilos para uma startup.</p>
                </div>
            </div>

            <div class="portfolio-card" style="width: 440px; background-color: white; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="width: 100%; height: 220px;">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800" alt="SaaS Landing Page" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin: 0;">SaaS Landing Page</h4>
                    <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.4;">Página de conversão focada em destacar as funcionalidades do produto através de uma narrativa visual envolvente usando ilustrações 3D.</p>
                    <div style="display: flex; gap: 8px; margin-top: 8px;">
                        <span class="tag">Web Design</span>
                        <span class="tag">Marketing</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="botao-projetos" style="width: 822px; height: 50px; background-color: #F9F9FF; margin-top: 60px; display: flex; justify-content: center;">
            <button id="maisProjetosBtn" style="width: 189px; height: 34px; background-color: transparent; border: 1.5px solid #0056D2; border-radius: 12px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                <span style="font-family: 'JetBrains Mono', monospace; font-size: 14px; font-weight: 600; color: #0056D2;">Ver mais projetos</span>
            </button>
        </div>

    </div>
</div>

</main>

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

    <p style="margin: 0; color: #666666; font-size: 13px; text-align: center;">&copy; 2024 DesignPro Professional Network</p>
</footer>

<script>
    document.getElementById("contratarBtn").addEventListener("click", function () {
        this.querySelector("span").textContent = "Solicitação enviada";
    });

    document.getElementById("gridBtn").addEventListener("click", function () {
        const grid = document.getElementById("portfolioGrid");
        grid.style.display = "flex";
        grid.style.flexDirection = "row";

        const cards = document.querySelectorAll(".portfolio-card");

        cards[0].style.width = "440px";
        cards[1].style.width = "292px";
        cards[2].style.width = "292px";
        cards[3].style.width = "440px";
    });

    document.getElementById("listBtn").addEventListener("click", function () {
        const grid = document.getElementById("portfolioGrid");
        grid.style.display = "flex";
        grid.style.flexDirection = "column";

        document.querySelectorAll(".portfolio-card").forEach(function (card) {
            card.style.width = "100%";
        });
    });

    document.getElementById("maisProjetosBtn").addEventListener("click", function () {
        this.querySelector("span").textContent = "Projetos carregados";
    });
</script>

</body>
</html>
