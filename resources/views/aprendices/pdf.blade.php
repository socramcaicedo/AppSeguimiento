<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>

        @page {
            size: A4;
            margin: 30px;
        }

        body{
            font-family: "Times New Roman", serif;
            text-align:center;
            margin:0;
        }

        /* Certificado */

        .certificado{
            border:6px double #0b6e3d;
            padding:40px;
            position:relative;
            height:90%;
        }

        /* Logo */

        .logo{
            width:90px;
        }

        /* Marca de agua */

        .watermark{
            position:absolute;
            top:35%;
            left:30%;
            width:300px;
            opacity:0.08;
        }

        /* Titulo */

        .titulo{
            font-size:30px;
            font-weight:bold;
            margin-top:10px;
        }

        /* Texto */

        .texto{
            font-size:18px;
            margin-top:25px;
            line-height:1.6;
        }

        /* Nombre */

        .nombre{
            font-size:24px;
            font-weight:bold;
        }

        /* Documento */

        .doc{
            font-size:20px;
            font-weight:bold;
        }

        /* Fecha */

        .fecha{
            margin-top:30px;
            font-size:14px;
        }

        /* Firma */

        .firma{
            margin-top:40px;
        }

        .linea{
            width:200px;
            border-top:1px solid black;
            margin:auto;
            margin-top:25px;
        }

    </style>

</head>

<body>

<div class="certificado">

    <img src="{{ public_path('img/logoSena.png') }}" class="watermark">

    <img src="{{ public_path('img/logoSena.png') }}" class="logo">

    <div class="titulo">
        CERTIFICADO
    </div>

    <div class="texto">

        El <strong>Servicio Nacional de Aprendizaje SENA</strong>

        <br><br>

        certifica que

        <br><br>

        <div class="nombre">
            {{ $aprendiz->Nombres }} {{ $aprendiz->Apellidos }}
        </div>

        <br>

        identificado con número de documento

        <br>

        <div class="doc">
            {{ $aprendiz->Numdoc }}
        </div>

        <br>

        es aprendiz activo del
        <strong>Servicio Nacional de Aprendizaje SENA</strong>.

    </div>

    <div class="fecha">

        Expedido el {{ date('d') }} / {{ date('m') }} / {{ date('Y') }}

    </div>

    <div class="firma">

        <div class="linea"></div>

        Coordinación Académica
        Servicio Nacional de Aprendizaje SENA

    </div>

</div>

</body>
</html>
