<!-- resources/views/mi_pdf.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de permiso</title>
    <style>
        /* Agrega tu estilo personalizado aquí */
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table {
            border: 1px solid #000;
            /* Añade bordes para mayor claridad */
        }

        td {
            text-align: left;
            /* Centra el contenido en todas las celdas */
        }

        td img {
            max-height: 100px;
            /* Limita la altura de la imagen a 10 píxeles */
            width: auto;
            /* Ajusta automáticamente el ancho para mantener la proporción */
        }

        td:nth-child(2) {
            width: 80%;
            /* Establece el ancho de la segunda columna al 80% */
        }

        td:nth-child(1),
        td:nth-child(3) {
            width: 10%;
            /* Establece el ancho de la primera y tercera columna al 10% */
        }

        /* Centra el contenido del div */
        div {
            text-align: center;
        }
    </style>
</head>

<body>
<table>
    <tbody style="height: 10px;">
    <tr>
        <td rowspan="4" style="width: 20%; border: 1px solid #000;"><img src="{{ public_path('img/uci.jpg') }}"
                                                                         style="max-width: 100%; max-height: 100%;">
        </td>
        <td rowspan="4" style="width: 60%; text-align: center; "><strong>FORMATO UNICO DE SOLICITUD DE
                PERMISO</strong></td>
        <td style="width: 20%; border: 1px solid #000; text-align: center;"><strong>CODIGO</strong><br>UCIA-TH-FT-003
        </td>
    </tr>
    <tr>
        <td style="width: 10%; border: 1px solid #000; text-align: center;"><strong>FECHA EMISION</strong><br>14.02.20
        </td>
    </tr>
    <tr>
        <td style="width: 10%; border: 1px solid #000; text-align: center;"><strong>FECHA ACTUALIZACION</strong><br>17.02.24
        </td>
    </tr>
    <tr>
        <td style="width: 10%; border: 1px solid #000; text-align: center;"><strong>VERSION: </strong>003</td>
    </tr>
    </tbody>
</table>
<table style="height: 5px; width: 100%;" border="1">
    <tbody>
    <tr>
        <td style="text-align: center;"><strong>DATOS DEL EMPLEADO</strong></td>
    </tr>
    </tbody>
</table>
<table style="height: 47px; width: 100%;">
    <tbody>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 20%;"></td>
        <td style="width: 30%;"></td>
        <td style="width: 20%;"></td>
        <td style="width: 29%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="width: 100%;">
        <td style="width: 20%;">NOMBRE COMPLETO</td>
        <td colspan="3"
            style="width: 79%; border: 1px solid #000;">{{ $request->employee->first_name }} {{ $request->employee->last_name }}</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 20%;"></td>
        <td style="width: 30%;"></td>
        <td style="width: 20%;"></td>
        <td style="width: 29%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="width: 100%;">
        <td style="width: 20%;">CARGO&nbsp;</td>
        <td style="width: 30%; border: 1px solid #000;">{{ $request->employee->title}}</td>
        <td style="width: 20%; text-align: center;">AREA</td>
        <td style="width: 29%; border: 1px solid #000;">{{ strtoupper($request->employee->department[0]['name']) }}</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 20%;"></td>
        <td style="width: 30%;"></td>
        <td style="width: 20%;"></td>
        <td style="width: 29%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="width: 100%;">
        <td style="width: 20%;">JEFE INMEDIATO&nbsp;</td>
        <td colspan="3"
            style="width: 79%; border: 1px solid #000;">{{ $request->employee->manager->first_name}} {{ $request->employee->manager->last_name}}</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 20%;"></td>
        <td style="width: 30%;"></td>
        <td style="width: 20%;"></td>
        <td style="width: 29%;"></td>
        <td style="width: 1%;"></td>
    </tr>
    </tbody>
</table>
<table style="height: 5px; width: 100%;" border="1">
    <tbody>
    <tr>
        <td style="text-align: center;"><strong>DATOS DE LA SOLICITUD</strong></td>
    </tr>
    </tbody>
</table>
<table style="width: 100%;">
    <tbody>
    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">FECHA SOLICITUD</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%;  border: 1px solid #000;text-align: center;">DD</td>
        <td style="width: 8%;  border: 1px solid #000;text-align: center;">MM</td>
        <td style="width: 8%;  border: 1px solid #000;text-align: center;">AAAA</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">FECHA PERMISO</td>
        <td style="width: 8%;  border: 1px solid #000;text-align: center;">DD</td>
        <td style="width: 8%;  border: 1px solid #000;text-align: center;">MM</td>
        <td style="width: 7%;  border: 1px solid #000;text-align: center;">AAAA</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">{{ date('d', strtotime($request['created_at'])) }}</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">{{ date('m', strtotime($request['created_at'])) }}</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">{{ date('Y', strtotime($request['created_at'])) }}</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">&nbsp;</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">{{ date('d', strtotime($request['date'])) }}</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">{{ date('m', strtotime($request['date'])) }}</td>
        <td style="width: 7%; border: 1px solid #000;  text-align: center;">{{ date('Y', strtotime($request['date'])) }}</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">HORA PERMISO</td>
        <td style="width: 5%;">&nbsp;</td>
        <td colspan="3"
            style="width: 24%; border: 1px solid #000;  text-align: center;">{{ date('g:i A', strtotime($request['time'])) }}</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">DURACION PERMISO</td>
        <td colspan="3"
            style="width: 23%; border: 1px solid #000;  text-align: center;">{{ $request['long'] }} {{ $request['long'] == 1 ? 'hora' : 'horas' }}</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;"><strong><u>TIPO DE PERMISO</u></strong></td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 7%;">&nbsp;</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">CALAMIDAD DOMESTICA</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">@if ($request['type']['id'] == 1)
                X
            @endif
        </td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">CONSULTA MEDICA</td>
        <td style="width: 8%; border: 1px solid #000;">&nbsp;</td>
        <td style="width: 8%;  text-align: center;">@if ($request['type']['id'] == 2)
                X
            @endif
        </td>
        <td style="width: 7%;">&nbsp;</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">LICENCIA NO REMUNERADA</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%; border: 1px solid #000;  text-align: center;">@if ($request['type']['id'] == 3)
                X
            @endif
        </td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">ASUNTO PERSONAL</td>
        <td style="width: 8%; border: 1px solid #000;">&nbsp;</td>
        <td style="width: 8%;  text-align: center;">@if ($request['type']['id'] == 4)
                X
            @endif</td>
        <td style="width: 7%;">&nbsp;</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">LICENCIA REMUNERADA</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 8%; border: 1px solid #000; text-align: center;">@if ($request['type']['id'] == 5)
                X
            @endif</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 8%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 21%;">ASUNTOS LABORALES</td>
        <td style="width: 8%; border: 1px solid #000;">&nbsp;</td>
        <td style="width: 8%;  text-align: center;">@if ($request['type']['id'] == 6)
                X
            @endif</td>
        <td style="width: 7%;">&nbsp;</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>

    <tr>
        <td style="width: 21%;">SOPORTES PRESENTADOS</td>
        <td style="width: 5%;"></td>
        <td colspan="8" rowspan="2" style="width: 73%; border: 1px solid #000; text-align: center;">
        <td style="width: 1%;"></td>
        </td>
    </tr>

    <tr>
        <td style="width: 21%;">&nbsp;</td>
        <td style="width: 5%;">&nbsp;</td>
        <td style="width: 1%;"></td>
    </tr>

    <tr style="height: 1px; width: 100%;">
        <td style="width: 21%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 5%;"></td>
        <td style="width: 21%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 8%;"></td>
        <td style="width: 7%;"></td>
        <td style="width: 1%;"></td>
    </tr>
    </tbody>
</table>
<table style="height: 5px; width: 100%;" border="1">
    <tbody>
    <tr>
        <td style="text-align: center;"><strong>OBSERVACIONES</strong></td>
    </tr>
    </tbody>
</table>
<table style="width: 100%;">
    <tbody>
    <tr>
        <td style="height: 97px; width: 100%; border: 1px solid #000;">{{ $request->observations}}</td>
    </tr>
    </tbody>
</table>
<table style="height: 97px; border: 1px solid #000;" width="100%">
    <tbody>
    <tr style="height: 66px;">
        <td style="width: 50%; height: 66px;text-align: center;"><img
                src="{{ public_path('img/firmas/'.$request->employee->dni . '.jpg') }}"
                style="max-width: 100%; max-height: 100%;"></td>
        <td style="width: 50%; height: 66px;text-align: center;"><img
                src="{{ public_path('img/firmas/'.$request->employee->manager->dni . '.jpg') }}"
                                                                         style="max-width: 100%; max-height: 100%;"></td>
    </tr>
    <tr style="height: 25.7344px;">
        <td style="width: 50%; height: 25.7344px;text-align: center;">Firma del Trabajador solicitante</td>
        <td style="width: 50%; height: 25.7344px;text-align: center;">Firma del jefe inmediato que autoriza</td>
    </tr>
    </tbody>
</table>
<table style="height: 40px; border: 1px solid #000;" width="100%">
    <tbody>
    <tr style="height: 40px;">
        <td style="width: 100%; height: 40px;"><strong>Nota:</strong> con el presente formato debe ir adjunto los
            soportes que garantizan el cubrimiento de actividades asistenciales y administrativas como cronogramas de
            actividades pendientes por el trabajador.
        </td>
    </tr>
    </tbody>
</table>
