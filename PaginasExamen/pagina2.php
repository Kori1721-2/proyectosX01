<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLAMAFOOD - Delivery de Comida Peruana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.9.0/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pagina2.css">
</head>
<body>
<header class="top-bar">
    <div class="top-bar-left">
        <img src="llamafood.jpg" class="llamafood-img">
        <a href="https://wa.me/51953010889" class="whatsapp-icon"><i class="fab fa-whatsapp"></i> LLAMENOS 953-010-889</a>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="#somos">Nosotros</a></li>
            <li><a href="#como">¿Cómo pedir?</a></li>
            <li><a href="#zonas">Zonas</a></li>
            <li><a href="#cta">Pedir ahora</a></li>
        </ul>
    </div>
</header>

<!-- HERO -->
<div class="grid-container principal fluid">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell small-12 medium-7">
                <h1>Comida peruana<br><span>a tu puerta</span></h1>
                <p class="subtitulo">Los mejores sabores de tu ciudad, calientes y frescos. Entrega en menos de 45 minutos. <br>
                <a href="#menu" class="btn-pedir">Ver el Menú</a>
            </div>
            <div class="cell small-12 medium-5">
                <img src="principal.jpg" class="llama-img">
            </div>
        </div>
    </div>
</div>

<div class="grid-container">

    <!-- SOMOS -->
    <section id="somos" class="callout somos">
        <h2 class="text-center">¿Qué es LlamaFood?</h2>
        <p>Somos una plataforma de delivery de comida peruana local. Conectamos los mejores restaurantes y cocineras de tu ciudad con tu mesa, sin complicaciones y con el sabor de siempre.</p>
        <p>Nuestro compromiso es la calidad, la rapidez y el apoyo al emprendimiento local. Cada pedido ayuda a un negocio de tu comunidad.</p>
        <div class="grid-x grid-margin-x small-up-2 medium-up-4" style="margin-top:2rem;">
            <div class="cell">
                <div class="stat-box">
                    <div class="numero">+50</div>
                    <div class="etiqueta">Restaurantes aliados</div>
                </div>
            </div>
            <div class="cell">
                <div class="stat-box">
                    <div class="numero">45'</div>
                    <div class="etiqueta">Entrega promedio</div>
                </div>
            </div>
            <div class="cell">
                <div class="stat-box">
                    <div class="numero">24/7</div>
                    <div class="etiqueta">Disponibilidad</div>
                </div>
            </div>
            <div class="cell">
                <div class="stat-box">
                    <div class="numero">★4.8</div>
                    <div class="etiqueta">Calificación clientes</div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section id="menu" class="callout menu-sec">
        <h2>Menú Destacado</h2>
        <div class="grid-x grid-margin-x small-up-1 medium-up-3" style="margin-top:1.5rem;">
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="caldo.jpg" class="caldo-img">
                    <div class="card-section">
                        <h4>Caldo de Gallina</h4>
                        <p>El clásico reconfortante, con fideos y huevo</p>
                        <span class="precio">S/ 12.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="arrozleche.jpg" class="arroz-img">
                    <div class="card-section">
                        <h4>Arroz con Leche</h4>
                        <p>Postre cremoso con canela y miel peruana</p>
                        <span class="precio">S/ 6.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="ceviche.jpg" class="ceviche-img">
                    <div class="card-section">
                        <h4>Ceviche Clásico</h4>
                        <p>Con limón, ají limo, canchita y choclo</p>
                        <span class="precio">S/ 18.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="pollobrasa.jpg" class="pollo-img">
                    <div class="card-section">
                        <h4>Pollo a la Brasa</h4>
                        <p>1/4 de pollo con papas fritas y ensalada</p>
                        <span class="precio">S/ 22.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="lomo.jpg" class="lomo-img">
                    <div class="card-section">
                        <h4>Lomo Saltado</h4>
                        <p>Carne, tomate, cebolla y papas fritas</p>
                        <span class="precio">S/ 20.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1.5rem;">
                <div class="card-plato">
                    <img src="sopa.jpg" class="sopa-img">
                    <div class="card-section">
                        <h4>Sopa Criolla</h4>
                        <p>Fideo, carne, leche evaporada y pan</p>
                        <span class="precio">S/ 10.00</span>
                        <br>
                        <button class="btn-agregar">+ Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section id="como" class="callout como">
        <h2>¿Cómo hacer tu pedido?</h2>
        <div class="grid-x grid-margin-x small-up-1 medium-up-4" style="margin-top:1.5rem;">
            <div class="cell" style="margin-bottom:1rem;">
                <div class="paso">
                    <div class="paso-num">1</div>
                    <h4>Elige tu comida</h4>
                    <p>Navega el menú y selecciona tus platos favoritos.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="paso">
                    <div class="paso-num">2</div>
                    <h4>Envía tu pedido</h4>
                    <p>Por WhatsApp o llamada directa con nuestra central.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="paso">
                    <div class="paso-num">3</div>
                    <h4>Confirmamos</h4>
                    <p>Te confirmamos el tiempo estimado y el total.</p>
                </div>
            </div>
            <div class="cell" style="margin-bottom:1rem;">
                <div class="paso">
                    <div class="paso-num">4</div>
                    <h4>¡A comer!</h4>
                    <p>Recibe tu pedido caliente en la puerta de tu casa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ZONAS DE DELIVERY -->
    <section id="zonas" class="callout zonas">
        <h2>📍 Zonas de Delivery</h2>
        <p class="text-center">Cubrimos las siguientes zonas de Huacho y alrededores:</p>
        <div class="text-center">
            <span class="zona-chip">Huacho Centro</span>
            <span class="zona-chip">Hualmay</span>
            <span class="zona-chip">Santa María</span>
            <span class="zona-chip">Carquín</span>
            <span class="zona-chip">Végueta</span>
            <span class="zona-chip">Caleta de Carquín</span>
            <span class="zona-chip">Aucallama</span>
            <span class="zona-chip">Sayán</span>
        </div>
        <p class="text-center p2">¿No ves tu zona? Escríbenos, estamos creciendo</p>
    </section>
    <section id="contacto" class="contacto callout zonas">
        <h2>¡Pide ahora y disfruta!</h2>
        <p>Atención todos los días de 8am a 10pm. Pagos en efectivo o Yape/Plin.</p>
        <a href="https://wa.me/51953010889" class="btn-wsp"><i class="fab fa-whatsapp"></i> Pedir por WhatsApp</a>
    </section>
</div>

<!-- CTA -->
<footer>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-4">
                <div class="marca">LlamaFood</div>
                <p style="margin-top:0.5rem;">Delivery de comida peruana local. Apoyamos a los emprendedores de nuestra ciudad.</p>
            </div>
            <div class="cell small-12 medium-4">
                <p><strong style="color:#fff;">Contacto</strong><br>
                💬 WhatsApp: 954-715-090<br>
                📘 Facebook: /LlamaFoodHuacho</p>
            </div>
            <div class="cell small-12 medium-4">
                <p><strong style="color:#fff;">Horario</strong><br>
                Lunes a Domingo: 8:00am – 10:00pm<br>
                Festivos: 9:00am – 9:00pm</p>
            </div>
        </div>
        <hr style="border-color:#333; margin:1.5rem 0;">
        <p class="text-center" style="font-size:0.8rem;">© 2025 LlamaFood – Huacho, Perú. Todos los derechos reservados.</p>
    </div>
</footer>
</body>
</html>
