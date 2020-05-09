

@extends('site.welcome')


@section('title','Propos')


@section('content')

<section class="mb-4 bg-light">
<h2 class="h1-responsive font-weight-bold text-center my-4 ">A propos</h2>

<p class="text-center w-responsive mx-auto mb-5">Nous sélectionnons et formons les meilleurs traducteurs professionnels du monde depuis 1999, en les accompagnant avec des technologies de pointe pour aider plus de 162 573 clients dans tous les secteurs.
    .</p>

</section>

<section class="mb-2 bg-light" class="service">
    <h2 class="h1-responsive font-weight-bold text-center my-4">
        Pourquoi nous choisir
        </h2>



        <div class="row">
            <div class="col-lg-4 text-center">
              <img src="{{asset('images/vendor/mdbootstrap/overlays/forward.svg')}}" alt="Random Name" class="center">
              <br>
              <h3>Traduction professionnelle</h3>
            <p>Le moyen simple et rapide de traduire de manière professionnelle des documents, manuels, sites Web, logiciels, etc. en fonction de votre emploi du temps et de vos besoins, en 176 langues et 40 domaines d'expertise.</p>
            </div>
            <div class="col-lg-4">
              <img src="{{asset('images/vendor/mdbootstrap/overlays/backup.svg')}}" alt="Random Name" class="center">
              <br>
              <h3>Outils pour les développeurs</h3>
              <p>Les API de traduction les plus sophistiquée et les plus simples à utiliser pour la localisation en continu, l'extraction de contenu à partir de 71 formats de fichiers, traduction automatique neuronale adaptative, etc.</p>

            </div>
            <div class="col-lg-4">
              <img src="{{asset('images/vendor/mdbootstrap/overlays/postmark.svg')}}" alt="Random Name" class="center">
              <br>
              <h3>Solutions pour les entreprises</h3>
              <p>Des solutions de localisation adaptables au grand public aux services transactionnels automatisés à gros volume, nous proposons une large gamme de services de traduction entièrement gérés.</p>
            </div>
          </div>
    </section>

<!--Section: Contact v.2-->
<section class="mb-7 bg-light">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Titre">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-default" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Alger</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
@endsection



@section('scripts')

@endsection
