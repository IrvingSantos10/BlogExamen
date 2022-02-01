@extends('ExamenBlog.template.Layout')

@section('Contacto')
<section class="contact" id="contact">
    <h1>Contactanos</h1>
    <hr />

    <div class="content">

        <div class="form">

            <form action="#" method="post" enctype="text/plain">

                <input name="your-name" id="your-name" value="Escribe tu nombre" />
                <input name="your-email" id="your-email" value="Escribe tu Email" />

                <textarea id="message" name="message" placeholder="Escribenos"></textarea>

                <a href="#">
                    <div class="button">
                        <span>Enviar</span>
                    </div>
                </a>

            </form>

        </div>


        <div class="contact-text">

            Envia tu (duda, comentario, referencia o algun error en nuestros posts) y te contestaremos directo a tu correo<br /><br />

            Para enviar algun archivo grande<br />
            enviarlo a los siguientes correos por favor <br /><br />

            <strong>Irving Alberto Martinez Santos</strong><br />
            E-mail: <strong>irving_1320114055@uptecamac.edu.mx</strong> <br><br>

            <strong>Miguel Angel Martinez Castro</strong><br />
            E-mail: <strong>miguel_1319104806@uptecamac.edu.mx</strong>

        </div>


    </div>

</section>

@endsection