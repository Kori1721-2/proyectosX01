<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHCORE - Componentes para PC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.9.0/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Exo+2:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pagina3.css">
</head>
<body>
<header class="top-bar">
    <div class="top-bar-left">
        <div class="logo">
            TECH<span>CORI</span>
        </div>
        <span class="tel"><i class="fas fa-phone"></i> 953-010-889 | 965-142-055</span>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="#categorias">Categorías</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#propuesta">¿Por qué nosotros?</a></li>
            <li><a href="#armado">Arma tu PC</a></li>
            <li><a href="#cta">Contacto</a></li>
        </ul>
    </div>
</header>

<!-- HERO -->
<div class="grid-container principal fluid">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell small-12 medium-7" style="position:relative;">
                <h1>Componentes PC<br>de <span>alto rendimiento</span></h1>
                <p class="subtitulo">Procesadores, GPUs, RAM, motherboards y más. Stock real, precios en soles y asesoría personalizada para armar tu equipo ideal.</p>
                <a href="#productos" class="btn-catalogo"><i class="fas fa-microchip"></i> Ver Catálogo</a>
                <div class="stat-strip">
                    <div class="stat-item">
                        <div class="num">+500</div>
                        <div class="lab">Productos en stock</div>
                    </div>
                    <div class="stat-item">
                        <div class="num">3</div>
                        <div class="lab">Meses de garantía</div>
                    </div>
                    <div class="stat-item">
                        <div class="num">24h</div>
                        <div class="lab">Despacho a Lima</div>
                    </div>
                </div>
            </div>
            <div class="cell small-12 medium-5">
                <img src="pcgamaalta.jpg" class="gama-img">
            </div>
        </div>
    </div>
</div>

<div class="grid-container">

    <!-- CATEGORIAS -->
    <section id="categorias" class="callout categorias">
        <h2>Categorías</h2>
        <p class="section-sub">Encuentra todo lo que necesitas para tu build</p>
        <div class="grid-x grid-margin-x small-up-2 medium-up-4">
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="cpu.jpg" class="cpu-img">
                    <h4>Procesadores</h4>
                    <p>Intel & AMD, últimas generaciones</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="gpu.jpg" class="gpu-img">
                    <h4>Tarjetas de Video</h4>
                    <p>NVIDIA RTX & AMD Radeon</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="mother.jpg" class="mother-img">
                    <h4>Motherboards</h4>
                    <p>ATX, Micro-ATX, ITX</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="ram.jpg" class="ram-img">
                    <h4>Memorias RAM</h4>
                    <p>DDR4 y DDR5 de alta velocidad</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="discos.jpg" class="discos-img">
                    <h4>Almacenamiento</h4>
                    <p>SSD NVMe, SATA y HDD</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="fuente.jpg" class="fuente-img">
                    <h4>Fuentes de Poder</h4>
                    <p>80+ Bronze, Gold y Platinum</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="case.jpg" class="case-img">
                    <h4>Cases / Gabinetes</h4>
                    <p>Mid Tower, Full Tower, ITX</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="cat-card">
                    <img src="refri.jpg" class="refri-img">
                    <h4>Refrigeración</h4>
                    <p>AIOs, coolers aire, pastas térmicas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS -->
    <section id="productos" class="callout productos">
        <h2>Productos Destacados</h2>
        <p class="section-sub">Componentes más vendidos esta semana</p>
        <div class="grid-x grid-margin-x small-up-2 medium-up-4">
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="intelcore.jpg" class="core-img">
                    <div class="prod-info">
                        <h4>Core i7-14700K</h4>
                        <p class="espec">20 núcleos · 5.6GHz · Sin cooler</p>
                        <div class="prod-precio">S/ 1,490 | $ 440</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="ryzen9.jpg" class="ryzen-img">
                    <div class="prod-info">
                        <h4>Ryzen 9 7900X</h4>
                        <p class="espec">12 núcleos · 5.6GHz · AM5</p>
                        <div class="prod-precio">S/ 1,350 | $ 400</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="rtx.jpg" class="rtx-img">
                    <div class="prod-info">
                        <h4>RTX 5060 8 GB</h4>
                        <p class="espec">GDDR7X · DLSS 4 · Ray Tracing</p>
                        <div class="prod-precio">S/ 2,100 | $ 615</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="rx.jpg" class="rx-img">
                    <div class="prod-info">
                        <h4>Radeon RX 7800 XT 16GB</h4>
                        <p class="espec">GDDR6 · FSR 3 · 2560MHz</p>
                        <div class="prod-precio">S/ 2,190 | $ 645</div>
                        <button class="stock" disabled>Sin stock</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="trident.jpg" class="trident-img">
                    <div class="prod-info">
                        <h4>Trident Z5 32GB DDR5</h4>
                        <p class="espec">6000MHz · CL30 · RGB · Kit 2x16</p>
                        <div class="prod-precio">S/ 2,300 | $ 680</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="samsung.jpg" class="samsung-img">
                    <div class="prod-info">
                        <h4>980 Pro 2TB NVMe</h4>
                        <p class="espec">PCIe 4.0 · 7000MB/s lectura</p>
                        <div class="prod-precio">S/ 1,420 | $ 420</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="corsair.jpg" class="corsair-img">
                    <div class="prod-info">
                        <h4>RM850x 850W 80+ Gold</h4>
                        <p class="espec">Modular · ATX 3.0 · 10 años gtía</p>
                        <div class="prod-precio">S/ 590 | $ 180</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.2rem;">
                <div class="prod-card">
                    <img src="strix.jpg" class="strix-img">
                    <div class="prod-info">
                        <h4>ROG Strix Z790-E</h4>
                        <p class="espec">LGA 1700 · DDR5 · PCIe 5.0 · WiFi 6E</p>
                        <div class="prod-precio">S/ 1,890 | $ 560</div>
                        <button class="btn-add">🛒 Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POR QUE NOSOTROS -->
    <section id="propuesta" class="callout propuesta">
        <h2>¿Por qué TechCori?</h2>
        <p class="section-sub">Más que una tienda, somos tus aliados en tecnología</p>
        <div class="grid-x grid-margin-x small-up-1 medium-up-2">
            <div class="cell" style="margin-bottom:1rem;">
                <div class="prop-card">
                    <div class="icono">🛡️</div>
                    <h4>Garantía real de 3 meses</h4>
                    <p>Todos los productos cuentan con garantía contra defectos de fábrica. Te cambiamos el componente sin cuestionamientos.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="prop-card">
                    <div class="icono">🧑‍💻</div>
                    <h4>Asesoría técnica gratuita</h4>
                    <p>Nuestros especialistas te ayudan a elegir los componentes compatibles para tu presupuesto y necesidad.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="prop-card">
                    <div class="icono">📦</div>
                    <h4>Envío a todo el Perú</h4>
                    <p>Despachamos por Olva Courier y Shalom. Llega en 24-48h a Lima, 3-5 días a provincias.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="prop-card">
                    <div class="icono">💳</div>
                    <h4>Múltiples formas de pago</h4>
                    <p>Yape, Plin, transferencia, efectivo en tienda. También cuotas sin intereses con BCP.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ARMA TU PC -->
    <section id="armado" class="callout armado">
        <h2>Arma tu PC con nosotros</h2>
        <p class="section-sub">Dinos tu presupuesto y te armamos la build perfecta</p>
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell small-12 medium-7">
                <div class="armado-box">
                    <h3>🔧 Servicio de armado incluido</h3>
                    <p>Compra tus componentes con nosotros y armamos tu PC sin costo adicional. Incluye instalación del sistema operativo y prueba de estrés de 24 horas.</p>
                    <ul class="armado-list">
                        <li>Compatibilidad garantizada entre componentes</li>
                        <li>Gestión de cables y organización interna</li>
                        <li>Instalación de Windows 11 o Linux</li>
                        <li>Prueba de estabilidad y temperaturas</li>
                        <li>Entrega con reporte de benchmark</li>
                    </ul>
                    <a href="https://wa.me/51953010889" class="btn-armar"><i class="fab fa-whatsapp"></i> Cotizar mi build</a>
                </div>
            </div>
            <div class="cell small-12 medium-5 text-center">
                <img src="ensamble.jpg" class="ensamble-img">
            </div>
        </div>
    </section>

    <!-- MARCAS -->
    <section class="callout marcas">
        <h2>Marcas que manejamos</h2>
        <div style="margin-top:1.5rem; text-align:center;">
            <span class="marca-chip">Intel</span>
            <span class="marca-chip">AMD</span>
            <span class="marca-chip">NVIDIA</span>
            <span class="marca-chip">ASUS ROG</span>
            <span class="marca-chip">MSI</span>
            <span class="marca-chip">Gigabyte</span>
            <span class="marca-chip">Corsair</span>
            <span class="marca-chip">G.Skill</span>
            <span class="marca-chip">Samsung</span>
            <span class="marca-chip">Kingston</span>
            <span class="marca-chip">Seagate</span>
            <span class="marca-chip">WD Black</span>
            <span class="marca-chip">Cooler Master</span>
            <span class="marca-chip">NZXT</span>
            <span class="marca-chip">be quiet!</span>
            <span class="marca-chip">Lian Li</span>
        </div>
    </section>
</div>

<!-- CTA -->
<section id="cta" class="cta-sec">
    <h2>¿Listo para armar tu PC?</h2>
    <p>Escríbenos con tu presupuesto y te asesoramos sin compromiso. Atención Lunes a Sábado 9am – 7pm.</p>
    <a href="https://wa.me/51953010889" class="btn-catalogo" style="margin:0.3rem;"><i class="fab fa-whatsapp"></i> WhatsApp</a>
</section>

<footer>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-4">
                <div class="marca">TECH<span style="color:#FF6B00;">CORE</span></div>
                <p style="margin-top:0.5rem; color:#444;">Componentes de PC originales con garantía. Huacho, Perú.</p>
            </div>
            <div class="cell small-12 medium-4">
                <p><strong style="color:#888;">Contacto</strong><br>
                📞 <a href="tel:+51953010889">953-010-889</a><br>
                💬 <a href="https://wa.me/51953010889">WhatsApp</a><br>
                📧 <a href="#">techcori@gmail.com</a></p>
            </div>
            <div class="cell small-12 medium-4">
                <p><strong style="color:#888;">Ubicación</strong><br>
                📍 Huacho, Huaura - Lima, Perú<br>
                🕐 Lun a Sáb: 9:00am - 7:00pm<br>
                🚚 Envíos a todo el Perú</p>
            </div>
        </div>
        <hr style="border-color:#111; margin:1.5rem 0;">
        <p class="text-center" style="font-size:0.78rem;">© 2025 TechCori - Componentes para PC · Huacho, Perú</p>
    </div>
</footer>

</body>
</html>
