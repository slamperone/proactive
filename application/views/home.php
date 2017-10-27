
    <!-- slider -->
    <section class="jumbotron animated fadeInUp delay2" id="menu-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<h1>Haz contacto</h1>
					<h2>Somos tu mejor opción en capacitación de personal</h2>
					<p>Déjanos tus datos y permítenos hacer el primer acercamiento.</p>
					<form id="contact" class="row suscribe" action="contact-form.php" method="post" accept-charset="utf-8">
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nombre" name="name">
							<input type="text" class="form-control" placeholder="Correo electrónico" name="email">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Empresa" name="empresa">
							<input type="text" class="form-control" placeholder="Teléfono" name="phone">
						</div>
						<div class="text-center">
							<button type="submit" class="btn text-center">Solicitar información</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6 col-md-6">
					<img src="<?= base_url('assets/img/chica-solicitando-informacion.png'); ?>" alt="envíanos tu información proactive semiología" class="figure">
				</div>
			</div>
		</div>
    </section>
    <!-- end slider -->



   <!-- Features -->
   <section id="menu-features" class="generic features animated fadeInUp delay3">
      <div class="container">

         <!-- title -->
         <div class="row text-center title">
           <h1>Desarrolla tu conciencia y enriquece tu empresa</h1>
           <h2>Nuestras herramientas</h2>
         </div>
         <!-- end title -->

         <!-- items -->
         <div class="row">

            <div class="col-md-3 text-center item">
               <i class="icon-book"></i>
               <h3 class="homeTit">Semiologia de la Vida Cotidiana</h3>
               <p>Modelo educativo para la Productividad Integral.</p>
            </div>

            <div class="col-md-3 text-center item">
               <i class="icon-user"></i>
               <h3 class="homeTit">Dinamicas Emocionales y corporles</h3>
               <p>Apoyo en la comprensión de la información en personas racionales, emocionales y motrices</p>
            </div>
            <div class="col-md-3 text-center item">
               <i class="icon-keyboard"></i>
               <h3 class="homeTit">Autonomía de gestión</h3>
               <p>Procesamiento individual y constante de problemas y problemáticas. en esta va un logo de una computadora</p>
            </div>

            <div class="col-md-3 text-center item">
               <i class="icon-chart-pie"></i>
               <h3 class="homeTit">Test</h3>
               <p>Diagnóstico de necesidades empresariales</p>
            </div>

         </div>
         <!-- end items -->
		 <!--div class="row">
			<div class="col-xs-12 vertical_line text-center">
            	<a href="#myModal" class="btn scroll_btn" data-toggle="modal">Request a quote now!</a>
            </div>

        </div>
      </div-->
   </section>
   <!-- end Features -->

<!-- Information -->
  <section id="menu-information">
        <div class="container">

           <!-- title -->
           <div class="row text-center title">
              <h1>Conoce nuestros cursos y talleres</h1>
              <h2>Fortalece las hablidiades y refuerza las debilidades de tus colaboradores, mientras se crea un ambiente positivo.</h2>
           </div>
           <!-- end title -->

           <div class="row infoitem">
                <div class="col-md-6">
                  <a class="example-image-link" href="<?= base_url('assets/img/curso-herramientas-de-liderazgo.jpg'); ?>" data-lightbox="example-set" title="Grupo reforzando las caracteristicas de un lider: visión, audacia, gestión">
                    <img src="<?= base_url('assets/img/curso-herramientas-de-liderazgo.jpg'); ?>" alt="Grupo reforzando las caracteristicas de un lider: visión, audacia, gestión ">
                  </a>
                </div>
                <div class="col-md-6">
                  <h2>Herramientas de liderazgo</h2>
                    <p>Hoy por hoy se vuelve cada vez más necesario desarrollar líderes visionarios que vivan con ética, sentido de compromiso y capacidad de escucha, ya sea para con el cliente externo o para la comunidad dentro de la cual sirven.</p>
                    <a href="#" class="btn btn-default">Seguir leyendo</a>
                </div>
           </div>

            <div class="row infoitem">
                <div class="col-md-6">
                  <h2>Empoderamiento</h2>
                    <p>Cada día se requiere de líderes y de colaboradores que dispongan de un excelente manejo del estrés y puedan tomar decisiones claras y correctas en tiempo y forma.</p>
                    <a href="#" class="btn btn-default">Seguir leyendo</a>
                </div>
                <div class="col-md-6">
                  <a class="example-image-link" href="<?= base_url('assets/img/curso-empoderamiento.jpg'); ?>" data-lightbox="example-set" title="Creando temple, confianza, desición en nuestros colaboradores">
                    <img src="<?= base_url('assets/img/curso-empoderamiento.jpg'); ?>" alt="Creando temple, confianza, desición en nuestros colaboradores">
                  </a>
                </div>
           </div>

            <div class="row infoitem">
                <div class="col-md-6">
                  <a class="example-image-link" href="<?= base_url('assets/img/curso-equipos-de-alto-rendimiento.jpg'); ?>" data-lightbox="example-set" title="Generando equipos de alto rendimiento">
                    <img src="<?= base_url('assets/img/curso-equipos-de-alto-rendimiento.jpg'); ?>" alt="Generando equipos de alto rendimiento">
                  </a>
                </div>
                <div class="col-md-6">
                  <h2>Equipos de alto rendimiento</h2>
                    <p>Hoy por hoy, el trabajo compartido, produce mejores resultados emocionales y mejora el aprendizaje del equipo en conjunto con la mezcla de talentos coexistentes que producen la sinergia deseada</p>
                    <a href="#" class="btn btn-default">Seguir leyendo</a>
                </div>
           </div>

      </div>
  </section>
  <!-- end Information -->

    <!--Newsletter-->
  <section class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <form id="newsletter" class="formNewsletter nm" action="newsletter.php" method="post" accept-charset="utf-8" role="form">
            <div class="row">
              <div class="col-xs-12 fields">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <h3>Suscribete a nuestro boletín mensual</h3>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <div class="row">
                      <input type="email" class="form-control col-md-12" placeholder="Correo electrónico" name="email" value="" />
                      <input class="btn btn-large btn-primary col-md-12" type="submit" name="submit" value="Suscribirme" id="submit"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
  <!--End Newsletter-->

  <!--Pie de página-->

  <section class="casiFooter">
    <div class="container">
      <div class="row">
        </div>
        <div class="col-xs-10 col-sm-6 col-md-3">
          <h2>Acerca de ProActivE</h2>
          <p>Somos un equipo de profesionales/capacitadores y asesores dedicados al crecimiento del desempeño de las personas.</p>
        </div>
        <div class="col-xs-10 col-sm-5 col-md-3">
          <h2>Haz contacto</h2>
          <ol>
            <li class="icon-mail">info@proactivesemiologia.com</li>
            <li class="icon-phone">+52 1 55 7821 2222</li>
            <li class="icon-map">Périferico sur #4342 Col. Puebla CDMX</li>
          </ol>
        </div>
        <div class="col-xs-10 col-sm-6 col-md-3">
          <h2>Nuestros cursos</h2>
          <ol>
            <li>uno</li>
            <li>dos</li>
            <li>tres</li>
            <li>cuatro</li>
            <li>cinco</li>
          </ol>
        </div>
        <div class="col-xs-10 col-sm-5 col-md-3">
         <h2>Síguenos</h2>
          <p>La forma más práctica y eficiente de mantenernos conectados.</p>
          <ol class="socialFoot">
            <li class="icon-twitter-circled"><a href="#"></a></li>
            <li class="icon-facebook-circled"><a href="#"></a>
          </ol>

        </div>
        </div>
      </div>
    </div>
  </section>

  <!--End pie de página-->
