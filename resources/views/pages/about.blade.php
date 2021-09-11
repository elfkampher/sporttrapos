@extends('layoutct')
@include('partials.header')
@section('content')
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="../assets/img/faces/juan_carlos.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Sporttrapos</h3>
                <h6>Carlos Gutierrez | Fundador</h6>
                <a href="#" class="btn btn-just-icon btn-link btn-bank"><i class="fa fa-bank"></i></a>
                <a href="#" class="btn btn-just-icon btn-link btn-area-chart"><i class="fa fa-area-chart"></i></a>
                <a href="#" class="btn btn-just-icon btn-link btn-money"><i class="fa fa-money"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>Esta es una pagina dedicada a los pequeños inversores, cuyo objetivo es dar divulgación a temas de educación financiera para los paises de habla hispana, especialmente latinoamerica, donde hay grandes carencias en educación de este tema. </p>

          <p>Estoy convencidos de que una de las mejores herramientas para ascender en el escalafon social y economicamente es una buena educación en finanzas, muchos individuos de nuestra región tienen la posibilidad y recursos para mejorar su situacion economica, enormemente, desafortunadamente las presiones por aparentar lujos, exito y el desmedido consumismo, muchas veces nos orilla a tomar terribles decisiones financieras, sin que tengamos una brujula con la cual guiarnos. </p>         
          

        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#estrategia_financiera" role="tab" data-toggle="tab">
                    <i class="material-icons">savings</i> Estrategia Financiera
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gestion_patrimonial" role="tab" data-toggle="tab">
                    <i class="material-icons">account_balance</i> Gestión Patrimonial
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#inversion_value" role="tab" data-toggle="tab">
                    <i class="material-icons">rule</i> Inversión Value
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="estrategia_financiera">
            <div class="row">
              <div class="col-md-3 ml-auto">
              	<h2>Estrategia Financiera</h2>
		          <p>Para apoyarte a mejorar tu economia, vamos a orientarte en como atacar tus problemas financieros desde varios frentes, empezando por vigilar los gastos personales, creando una estrategia de ahorro e inversión y muy importante haciendo una planeación para el retiro. </p>		          
                <img src="../assets/img/examples/1.png" class="rounded">
                <img src="../assets/img/examples/2.png" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/3.png" class="rounded">
                <img src="../assets/img/examples/4.png" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="gestion_patrimonial">
            <div class="row">            	
              <div class="col-md-3 ml-auto">
              	<h2>Gestión Patrimonial</h2>
  	          	<p>ahorrar y planear el futuro es muy importante, pues no siempre seremos jovenes y no siempre estaremos llenos de energia ni tendremos la misma capacidad para trabajar, por ello aprenderemos a gestionar nuestro patrimonio y desarrollar estrategias de inversión para asegurar una excelente calidad de vida</p>
                <img src="../assets/img/examples/5.png" class="rounded">
                <img src="../assets/img/examples/6.png" class="rounded">
                <img src="../assets/img/examples/2.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/7.png" class="rounded">
                <img src="../assets/img/examples/8.png" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="inversion_value">
            <div class="row">
              <div class="col-md-3 ml-auto">
              	 <h2>Inversión Value</h2>
          		<p>La inversión en bolsa tiene muchos taboos, algunas de las cosas que se dicen de la inversión en bolsa son ciertas, muchas otras no, aprenderas a diferenciar entre mitos y verdades, acerca de la inversión en la bolsa de valores usando la estrategia que han usado grandes inversores como: Warren Buffet, Peter Lynch, Charlie Munguer, entre otros.</p>
                <img src="../assets/img/examples/9.png" class="rounded">
                <img src="../assets/img/examples/10.png" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/11.png" class="rounded">
                <img src="../assets/img/examples/12.png" class="rounded">
                <img src="../assets/img/examples/13.png" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection