<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Contrato. SIGE</title>
    
        <!-- Styles -->
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('css/contrato.css') }}">

        <style>
            .pie {
                font-size: 10px;
                text-align: right;
            }
    
            td {
                font-size: 12px;
            }

            .page-break {
                page-break-after: always;
            }
          
            
        </style>

        

    </head>
    <body>

        
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <p class="text-center"><img class="img-responsive" src="images/logo.jpg" width="100%"></p>
                </div>
            </div>
            <br> 
            
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <table class="table table-bordered">

                            <tr>
                                <th scope="col" colspan="10">
                                    <center>
                                        <h5 class="position-relative text-uppercase text-primary" >Folio: {{ $prestamo->id }}</h5>
                                    </center>
                                </th>
                            </tr>
                
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="10">
                                    <center>
                                        <h5 class="position-relative text-primary">Formato de solicitud de pr??stamo de equipo de c??mputo</h5>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        <tr>               
                            <td colspan="10"><b>1.- Datos de Solicitante</b></td>
                        </tr>
                        <tr>               
                            <td colspan="10"><b>Nombre del Solicitante:</b> {{ $prestamo->solicitante }} </td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>Contacto: </b> {{$prestamo->contacto}}</td>
                            <td colspan="5"><b>Cargo: </b>{{ $prestamo->cargo }}</td>
                        </tr>
                        <tr>
                            <td colspan="10"><b>??rea: </b>{{ $prestamo->lugar }}</td>

                        </tr>


                    </table>

                </div>
            </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                   
                            <table class="table table-bordered">
                            
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" colspan="7">
                                <center>
                                    <h5 style="" class="position-relative text-primary">Equipo en pr??stamo</h5>
                                 </center>
                            </th>
                        </tr>
                    </thead>
                    </tr>
                    </tr>

               <tbody>       
                            <tr class="position-relative text-uppercase text-primary" >
                                <td class="letter_table"><b>Id SIGE</b></td>
                                <td class="letter_table"><b>IdUdeG</b></td>
                                <td class="letter_table"><b>Tipo Equipo</b></td>
                                <td class="letter_table"><b>Marca</b></td>
                                <td class="letter_table"><b>Modelo</b></td>
                                <td class="letter_table" ><b>N/S</b></td>
                                <td class="letter_table"><b>Accesorios</b></td>
                            </tr>
                            @foreach ($equiposPorPrestamo as $item)
                                <tr style="outline: thin solid">
                                    <td>{{ $item->id_equipo }}</td>
                                    <td>{{ $item->udg_id }}</td>
                                    <td>{{ $item->tipo_equipo }}</td>
                                    <td>{{ $item->marca }}</td>
                                    <td>{{ $item->modelo }}</td>
                                    <td>{{ $item->numero_serie }}</td>
                                    <td >{{ $item->accesorios }}</td>
                                </tr>
                            @endforeach
                          
                          
                            <tr>               
                                <td colspan="7"><b>Observaciones: </b>{{ $prestamo->observaciones }}</td>
                            </tr>
                            <tr>               
                                <td colspan="7"><b>Cantidad de dispositivos:</b> {{$contador_consulta}} </td>
                            </tr>
                            
                    </tbody>
                </table>
                          
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
           
                    <table class="table table-bordered">
                    
            <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="7">
                        <center>
                            <h5 class="position-relative text-primary">Fecha pr??stamo / devoluci??n</h5>
                        </center>
                    </th>
                </tr>
            </thead>
            </tr>
            </tr>
       
              
        </tbody>
            <tr>
                <td colspan="5"><b>Fecha de pr??stamo: </b> {{ \Carbon\Carbon::parse($prestamo->fecha_inicio)->format('d/m/Y') }}</td>
                
                <td colspan="2"><b>Fecha de devoluci??n: </b>{{ $fechaProxima->format('d/m/Y') }}</td>
            </tr>
  
            <tr>
                <td colspan="7"><b>* Nota: </b>Entregar en el siguiente d??a h??bil despu??s de la fecha de devoluci??n.</td>
            </tr>
            </table>

                
                
            
            
        </div>

    </div>

            <div class="page-break"></div>
            <center>
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class=" text-white" style="-webkit-text-stroke: 1px #dee2e6; font-size: 380%">REGLAMENTO</h1>
            </div>
        </center>

        </div>
    </div>
    
</div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <table style=" border: 0px" class="table border border-white">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="10">
                                    <center>                
                                        <h5 class="position-relative text-uppercase text-primary" style="font-size: 150%">PR??STAMO DE EQUIPO</h5>
                                    </center>
                                </th>
                            </tr>
                        </thead>
        <tr> 
            
            <br><br>
            <td colspan="1">          
                <div class="col-lg-2">
                    <div class="border-left border-primary pt-2 pl-4 ml-2">

                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">1 -</span> El equipo de c??mputo port??til es para uso exclusivo de los estudiantes del Centro Universitario de Ciencias Sociales y Humanidades.</p>
        
                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">2 -</span> El alumno que solicite el pr??stamo del equipo port??til ser?? responsable de su buen uso. Cuando el alumno regrese el equipo al personal de CTA, se asegurar?? de revisar que el equipo sea regresado en buen estado, de igual manera, el personal de dicha coordinaci??n har?? las revisiones correspondientes al equipo.</p>

                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">3 -</span> La Secretar??a Acad??mica, a trav??s de la Coordinaci??n de Tecnolog??as para el Aprendizaje, administrar?? el servicio de pr??stamo de equipos port??tiles a la comunidad estudiantil. Asimismo, el servicio de pr??stamo estar?? sujeto a la disponibilidad de computadoras port??tiles y a las Pol??ticas y Criterios Institucionales sobre el pr??stamo de equipo de c??mputo.</p>

                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">4 -</span> No se prestar?? el equipo a las personas que no puedan acreditarse como alumnos vigentes del CUCSH.</p>

                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">5 -</span> El servicio de pr??stamo de equipo podr?? ser solicitado ??nicamente para actividades de tipo acad??mico.</p>

                            <p class="letter_size_2"><span class="font-weight-bold letter_size_2">6 -</span> El alumno podr?? utilizar el equipo de c??mputo en el lapso de tiempo que considere pertinente para realizar todas sus actividades acad??micas, sin embargo, el equipo deber?? ser devuelto a m??s tardar en la fecha que marca el calendario escolar oficial de la Universidad para el periodo de extraordinarios del mismo ciclo escolar correspondiente al pr??stamo. Esto con la finalidad de hacer el servicio correspondiente al equipo y pueda ser prestado a los alumnos que lo necesiten en los siguientes semestres y/o clases del pr??ximo periodo estudiantil.</p>

           
                        <p class="letter_size_2"><span class="font-weight-bold letter_size_2">7 -</span> El alumno deber?? obligatoriamente cumplir con los siguientes requisitos para que le sea autorizado el pr??stamo:</p>
                   
                                <div class="row mb-1">
                                    <ul>
                                        <li> <p class="letter_size_2 mb-1">Presentar y dejar copia de credencial del INE vigente.</p></li>
                                        <li> <p class="letter_size_2 mb-1">Copia de su horario de clases que lo acredite como estudiante del CUCSH.</p></li>
                                        <li> <p class="letter_size_2 mb-1">Llenar y firmar el formato de solicitud de pr??stamo de equipo que ser?? elaborado por la Coordinaci??n de Tecnolog??as para el Aprendizaje (CTA).</p></li>
                                        <li> <p class="letter_size_2 mb-1">Regresar el equipo en el periodo estipulado en la solicitud de pr??stamo, o a m??s tardar en el periodo mencionado anteriormente en este Reglamento.</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                </td>
           
            </tr>
            </table>
        </div>
    </div>

    
    <div class="page-break"></div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table style=" border: 0px" class="table border border-white">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="10">
                            <center>                
                                <h5 class="position-relative text-uppercase text-primary" style="font-size: 150%">PR??STAMO DE EQUIPO</h5>
                            </center>
                        </th>
                    </tr>
                </thead>
<tr> 
    <td colspan="1">          
        <div class="col-lg-2">
            <div class="border-left border-primary pt-2 pl-4 ml-2">
                
                       <p class="letter_size_2"><span class="font-weight-bold letter_size_2">8 -</span> En caso de da??o, robo o extrav??o del equipo de c??mputo o de cualquiera de sus accesorios, el Alumno deber?? acudir en TIEMPO y FORMA a las instalaciones de la Coordinaci??n de Tecnolog??as para el Aprendizaje (CTA) para que se le pueda dar el seguimiento adecuado al suceso.</p>

                        <p class="letter_size_2"> <span class="font-weight-bold letter_size_2">9 -</span> El usuario deber?? estar de acuerdo con el presente reglamento y firmar aceptando todos los t??rminos y condiciones estipulados en el mismo. Bajo ninguna circunstancia el usuario podr?? deslindarse de la responsabilidad que le confiere el presente reglamento y el formato de pr??stamo.</p>
   
                    </div>
                </div>
            
        </td>
   
    </tr>
    </table>
</div>
</div>
             
                <div style="margin-bottom: 40%"></div>
                    {{-- <br><br><br><br><br><br><br><br><br><br><br><br>
 --}}

                            <table class="table border border-white">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" colspan="10">
                                            <center>                
                                                <h5 class="position-relative text-uppercase text-primary" style="font-size: 100%">Nota: Firmar al calce y al final de la hoja.</h5>
                                            </center>
                                        </th>
                                    </tr>
                                </thead>
                            </div>
                                <tr>
                                    <td colspan="5">          
                                    <div class="col-lg-2">
                                        <br><br><br><br><br><br><br>
                                        <center>
                                            <div class="letter_size"><h6><span class="text-secondary letter_size">___________________________________</span></h6></div>
                                            <div class="letter_size"><h6><span class="letter_size">Nombre y Firma del Responsable del Pr??stamo</span></h6></div>
                                        </center>
                                    </div>
                                </td>
                                    <td colspan="5"> 
                                        <div class="col-lg-2"> 
                                            <br><br><br><br><br><br><br>   
                                            <center>   
                                                <div class="letter_size"><h6><span class="text-secondary letter_size">___________________________________</span></h6></div>         
                                                <div class="letter_size"><h6><span class="text-secondary letter_size">Nombre y Firma del Alumno</span></h6></div>
                                            </center>
                                        </div>
                                    </td>
                                </tr>
        
                            </table>
                        
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <br>
                                    <br>
            
                                 
                                    <p class="pie">Hora y d??a de Impresi??n: {{ date('d-m-Y H:i:s') }}<br>
                                        Realizado por: {{ Auth::user()->name }}<br>
                                        Reglamento para pr??stamo de equipos de C??mputo<br>
                                        Formato CTA-012. Actualizaci??n: 15/diciembre/2022</p>
                                </div>
                            </div>
                            
                            <script type="text/php">
                                if ( isset($pdf) ) {
                                    $pdf->page_script('
                                        $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                                        $pdf->text(270, 795, "P??gina $PAGE_NUM de $PAGE_COUNT", $font, 10);
                                    ');
                                }
                            </script>

</body>
</html>