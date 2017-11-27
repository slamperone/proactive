<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Grupo Proactive<?php if (isset($titulo) && $titulo != "") {echo ' | '.$titulo;}  ?></title>
   <meta name="keywords" content="<?php if (isset($tags) && $tags != "") {
    foreach ($tags as $tag) {
      echo $tag.',';
    }
  }else{echo 'semiología,psicología,desarrollo humano,desarrollo empresarial,desarrollo de conciendia,aumento de productividad';} ?>"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">

    <link href="<?= base_url('assets/font/fontello.css'); ?>" rel="stylesheet" >
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('assets/css/estilos.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?= base_url('assets/css/media-queries.css'); ?>" rel="stylesheet" media="screen">

    <!--[if IE 7]>
    <link href="<?= base_url('assets/font/fontello-ie7.css'); ?>" rel="stylesheet" ><![endif]-->

   <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
   <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->

   <!-- Media queries -->
   <!--[if lt IE 9]>
   <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   <![endif]-->
   <script src="<?= base_url('js/modernizr.custom.js'); ?>"></script>

  </head>


<body>
    <!--Header -->
    <header class="navbar-fixed-top animated fadeInDown delay1">
		<div class="container">
            <div class="row">
            <!-- Static navbar -->
            <div class="navbar navbar-default">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <h1 class="logo">
            <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('assets/img/proactive-semiologia-logotipo.png'); ?>" alt="proactive semiología"/>
            </a>
            </h1>

            </div>
            <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
            <!--li><a href="<?= base_url('acerca'); ?>" <?php if (isset($menu) && $menu == 'acerca'){echo 'class="active"'; } ?>>Acerca</a></li-->

            <li class="drop"><a href="<?= base_url('informacion'); ?>" <?php if (isset($menu) && $menu == 'info'){echo 'class="active"'; } ?>>Información</a>
                <ul class="drop-down">
                      <li><a href="<?php echo base_url('informacion/cultura-corporativa'); ?>">Cultura corporativa</a></li>
                      <li><a href="<?php echo base_url('informacion/autonomia-de-gestion'); ?>">Autonomía de gestión</a></li>
                      <li><a href="<?php echo base_url('informacion/dificultades-empresariales'); ?>">Dificultades empresariales</a></li>
                      <li><a href="<?php echo base_url('informacion/ruta-de-salida'); ?>">Ruta de salida</a></li>
                      <li><a href="<?php echo base_url('informacion/beneficios'); ?>">Beneficios</a></li>
                      <li><a href="<?php echo base_url('informacion/propuesta-de-valor'); ?>">Propuesta de valor</a></li>
                      <li><a href="<?php echo base_url('informacion/metodologia'); ?>">Metodología</a></li>
                    </ul>
              </li>

            <li class="drop"><a href="<?= base_url('servicios'); ?>" <?php if (isset($menu) && $menu == 'servicios'){echo 'class="active"'; } ?>>Servicios</a>
                <!--ul class="drop-down">
                        <li><a href="<?php echo base_url('servicios/consultoria-empresarial-y-acompanamiento'); ?>">Consultoría empresarial y acompañamiento</a></li>
                        <li><a href="<?php echo base_url('servicios/consultoria-individual-cursos-y-talleres'); ?>">Consultoría individual, cursos y talleres</a></li>
                        <li><a href="<?php echo base_url('servicios/seguimiento-personalizado'); ?>">Seguimiento personalizado</a></li>
                </ul-->
            </li>
            <li><a href="<?= base_url('cursos'); ?>" <?php if (isset($menu) && $menu == 'cursos'){echo 'class="active"'; } ?>>Seminarios y Cursos</a>
              <ul class="drop-down">
                        <li><a href="<?php echo base_url('cursos/liderazgo-exitoso'); ?>">Liderazgo exitoso</a></li>
                        <li><a href="<?php echo base_url('cursos/productividad-extraordinaria'); ?>">Productividad extraordinaria</a></li>
                        <li><a href="<?php echo base_url('cursos/ambiente-responsable'); ?>">Ambiente responsable</a></li>
                        <!--li><a href="<?php echo base_url('cursos/curso1'); ?>">Beneficios Curso 1</a></li>
                        <li><a href="<?php echo base_url('cursos/curso2'); ?>">Beneficios Curso 2</a></li>
                        <li><a href="<?php echo base_url('cursos/curso3'); ?>">Beneficios Curso 3</a></li>
                        <li><a href="<?php echo base_url('cursos/curso4'); ?>">Beneficios Curso 4</a></li>
                        <li><a href="<?php echo base_url('cursos/curso5'); ?>">Beneficios Curso 5</a></li>
                        <li><a href="<?php echo base_url('cursos/curso6'); ?>">Beneficios Curso 6</a></li>
                        <li><a href="<?php echo base_url('cursos/curso7'); ?>">Beneficios Curso 7</a></li>
                        <li><a href="<?php echo base_url('cursos/estres-laboral'); ?>">Estrés laboral</a></li>
                        <li><a href="<?php echo base_url('cursos/emociones-en-el-trabajo'); ?>">Emociones en el trabajo</a></li>
                        <li><a href="<?php echo base_url('cursos/violencia-laboral'); ?>">Violencia laboral </a></li-->
                        <li><a href="<?php echo base_url('cursos/semiologia'); ?>">Semiología de la vida cotidiana </a></li>

              </ul>

            </li>
            <li><a href="<?= base_url('nosotros'); ?>" <?php if (isset($menu) && $menu == 'nos'){echo 'class="active"'; } ?>>Nosotros</a></li>
            <li><a href="<?= base_url('contacto'); ?>">Contacto</a></li>

            </ul>
            </div><!--/.nav-collapse -->
            </div>
            <!-- end Static navbar -->

            </div>
      </div>
      <!-- end container -->

    </header>
    <!-- end Header -->
<?php     $this->load->view('formtop');
 ?>
