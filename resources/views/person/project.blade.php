@extends('layout.index', ['page' => 'project'])
@section('content')
<section>
  <style>
    .minip {
        margin: 20px;
        float: left;
        width: 350px; 
    }

    .clr {
        clear: both;
    }
</style>
    <link rel="stylesheet" href="https://use.typekit.net/mbt4tna.css">
    <link rel="stylesheet" href="https://use.typekit.net/kid2tin.css">
    
    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url({{ asset("img/forPP.png") }});"></div>
      <div class="info">
        <name>Personal Portfolio</name>
        <deets>
          See My Personal Portfolio
        </deets>
      </div>
      <a class="plot" title="Personal Portfolio Project" href="http://127.0.0.1:8000/">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url('http://hngktrdna.000.pe/Rental%20Motor/img/Motorcycle%20logo.jpg');"></div>
      <div class="info">
        <name>Motorcycle Rental</name>
        <deets>
          See My Motorcyle Rental Project
        </deets>
      </div>
      <a class="plot" title="Motorcycle Rental Project" href="http://hngktrdna.000.pe/Rental%20Motor/rentalmotor2.php">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url('https://logodownload.com.br/wp-content/uploads/edd/2017/06/shell-logo.jpg');"></div>
      <div class="info">
        <name>Shell</name>
        <deets>
          See My Shell Project
        </deets>
      </div>
      <a class="plot" title="Shell Project" href="http://hngktrdna.000.pe/Bahan%20Bakar%20(Shell)/bahanbakar2.php">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url({{ asset("img/forK.png") }});"></div>
      <div class="info">
        <name>Kompeten</name>
        <deets>
          See Kompeten Project
        </deets>
      </div>
      <a class="plot" title="Kompeten Project" href="http://hngktrdna.000.pe/project/index.php">
        view project →
      </a>
    </div>
</section>

</style>
@endsection