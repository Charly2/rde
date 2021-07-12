<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>[SUBJECT]</title>
    <style type="text/css">

        #outlook a {padding:0;}
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
        .ExternalClass {width:100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
        #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
        img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;display:inline-block;}
        .image_fix {display:block;}

        h1, h2, h3, h4, h5, h6 {color: black !important;}

        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

        h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
            color: red !important;
        }

        h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
            color: purple !important;
        }

        table td {border-collapse: collapse;}

        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

        a {color: #000;}

        @media only screen and (max-device-width: 480px) {

            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: black; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: orange !important; /* or whatever your want */
                pointer-events: auto;
                cursor: default;
            }
        }


        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: blue; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: orange !important;
                pointer-events: auto;
                cursor: default;
            }
        }

        p {
            margin:0;
            color:#555;
            font-family:Helvetica, Arial, sans-serif;
            font-size:16px;
            line-height:160%;
        }
        a.link2{
            text-decoration:none;
            font-family:Helvetica, Arial, sans-serif;
            font-size:16px;
            color:#fff;
            border-radius:4px;
        }
        h2{
            color:#181818;
            font-family:Helvetica, Arial, sans-serif;
            font-size:22px;
            font-weight: normal;
        }

        .bgItem{
            background:#009357;
        }
        .bgBody{
            background:#ffffff;
        }
        .bgItem2{
            background: #0055a6;
        }

    </style>

    <script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"f2f2f2",
    "color":"555555",
    "bgItem":"009357",
    "bgItem2":"0055a6",
    "title":"181818"
  }
</script>

</head>
<body>
<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class='bgBody'>
    <tr>
        <td>

            <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->

            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
                <tr>
                    <td class='movableContentContainer'>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr height="40">
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="200" valign="top">&nbsp;</td>
                                    <td width="200" valign="top" align="center">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <img src="http://www.drd3d.com/CursosDRD3D/PlaticasOP_2015/imgs/LOGODRD1.png" width="450" height='' alt='Logo'  data-default="placeholder" />
                                            </div>
                                        </div>
                                    </td>
                                    <td width="200" valign="top">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent bgItem2' style="margin-top: 40px">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <h2 style="color: #ffffff!important">Nueva Encuesta {{$encuesta->id}}</h2>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100">&nbsp;</td>
                                    <td width="400" align="center" style="padding-bottom:5px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p><b>Nombre:</b> {{$encuesta->nombre_contacto}}</p>
                                                <p><b>Teléfono:</b> {{$encuesta->telefono_contacto}}</p>
                                                <p><b>Sucursal:</b> {{$sucursal}}</p>
                                                <p><b>Fecha:</b> {{$encuesta->created_at}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="100">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="3" align="center" style="padding-bottom:40px;padding-top:50px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable"  >
                                                <h2 >Preguntas</h2>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @if(!empty($pregustas))
                                <tr>
                                    <td width="50">&nbsp;</td>
                                    <td width="500" align="left">

                                        @foreach($pregustas as $pre2)
                                            <div class="contentEditableContainer contentTextEditable">
                                                <div class="contentEditable" >
                                                    <div style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:160%;color:#181818;font-weight:bold;">{{$pre2->texto}}</div>
                                                </div>
                                            </div>
                                            <div style="height:20px;">&nbsp;</div>
                                            <div class="contentEditableContainer contentTextEditable">
                                                <div class="contentEditable" >
                                                    <p >{{$pre2->label}}.</p>
                                                </div>
                                            </div>
                                            <div style="height:20px;">&nbsp;</div>
                                        @endforeach

                                    </td>
                                    <td width="50">&nbsp;</td>
                                </tr>
                                @endif
                            </table>
                        </div>


                        <div class='movableContent'  style="margin-top: 100px; margin-bottom: 100px">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
                                <tr>
                                    <td style="color:#fff;" class='bgItem'>
                                        <table cellpadding="0" style="border-collapse:collapse;" cellspacing="0" border="0" align="center" width="600">
                                            <tr>
                                                <td width="200" style="vertical-align:bottom;">
                                                    <div class="contentEditableContainer contentImageEditable">
                                                        <div class="contentEditable" >
                                                            <div style="padding-top:20px;text-align:center;">
                                                                <img src="{{asset("img/6@2x.png")}}" width="148" data-default="placeholder" data-max-width="200" style="margin-bottom:-3px;" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td width="400" valign="top" style="padding-top:40px;padding-bottom:20px;">
                                                    <br/>
                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable" >
                                                            <div style="font-size:23px;font-family:Heveltica, Arial, sans-serif;color:#fff;">Comentario del Cliente</div>
                                                        </div>
                                                    </div>

                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable"  style="padding:20px 10px 0 0;margin:0;font-family:Helvetica, Arial, sans-serif;font-size:15px;line-height:150%;">
                                                            <p style='color:#FFFFFF;'>{{$encuesta->comentario}} </strong></p>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100">&nbsp;</td>
                                    <td width="400" align="center" style="padding-top:25px;padding-bottom:115px;">
                                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
                                            <tr>
                                                <td bgcolor="#0055a6" align="center" style="border-radius:4px;" width="200" height="50">
                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable" >
                                                            <a target='_blank' href="[CLIENTS.WEBSITE]" class='link2'>Ver en el sistema DRD</a>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="100">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="2" style="padding-top:65px;">
                                        <hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" style="text-align: center;">
													<span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">
DRD3D - Recopilador de Encuestas de Calidad en el Servicio</span>
                                                <br/>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </td>
                </tr>
            </table>
            <!-- END BODY -->

        </td>
    </tr>
</table>
<!-- End of wrapper table -->
</body>
</html>
