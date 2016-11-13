
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

		<title><?php echo $page_title_start . $page_title_end; ?></title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/logo.png')?>"/>
        <?php
	    	echo meta('X-UA-Compatible', 'IE=edge', 'equiv');
	    	echo meta('', 'text/html; charset=utf-8');
			echo meta('viewport', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');
			
			echo plugin_css('font-awesome');
			echo plugin_css('icons');
			echo plugin_css('bootstrap');
			echo plugin_css('adminLTE');
			echo plugin_css('skin');
			echo plugin_css('pace');
			
			 ?>
	</head>
	<body class="hold-transition skin-blue-light sidebar-mini">
		
            
           <button type="button" class="btn btn-block btn-primary btn-lg"  onclick="window.open('', '_self', ''); window.close();"> 
        	
          <b>DENTIST</b>WARE
       </button>
          
            
            
<div  max-width: 100px;>
    <section class="content-header">
        <h1>Información sobre <?php echo ucwords($persona->nombre_persona); ?></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                	<div class="box-body">
                 		<div class="col-xs-12 text-center ">
							<?php							

								
								if($persona->foto_persona){
									echo '<img id="foto_img" class="center-block" height="200" width="200" src="'.base_url() . "uploads/" . $route . '/'  . $persona->foto_persona . '">';										
								} else {
									echo '<img id="foto_img" class="center-block" height="200" width="200" src="' . base_url("assets/img/foto-default.png") . '">';
								}
								
                                echo heading('Datos', 3);
							?>
						</div>                 
                            <div class="text-align:center;">
                               <table style="width:60" align="center">
                             	<?php


                                  

                                  
                                  echo "<tr>";
                                  echo "<th class= text-right style= width:45% >Genero:</th>";
                                  echo "<td style= width:10% > </td>";
                                  
                                  if ($persona->genero_persona == 'M'){
                                  		echo "<td style= width:45% > Masculino</td>";
								  }else{
                                  		echo "<td style= width:45% > Femenino</td>";
                                  }
                                  echo "</tr>";
                                   
                          

                               
                                   

                                   echo "<tr>";
                                   echo "<th class= text-right style= width:45% >E-mail:</th>";
                                   echo "<td style= width:10% > </td>";
                                   echo "<td> " . strtolower($persona->correo_persona) . "</td>";
                                   echo "</tr>";                                      
                                   
                                   
                                
                                   
                                  
                                       echo "<tr>";
                                            echo "<th class= text-right style= width:45% >Estudios:</th>";
                                              echo "<td style= width:10% > </td>";
                                            echo "<td style= width:45% > " . $persona->estudios_odont . "</td>";
                                          echo "</tr>";
                                    
                                   ?>
                                </table>
                            </div>
                                                                                                                                                                   
                    </div>                                     
                </div>						   
            </div>
        </div>
    </section>
</div>
         
    
	<?php 
		echo plugin_js();
		echo plugin_js('bootstrap');
		echo plugin_js('fastclick');
		echo plugin_js('app');
		echo plugin_js('pace');
        echo plugin_js('datepicker');
        echo plugin_js('timepicker');
        echo plugin_js('datatable');
        echo plugin_js('datatable-bootstrap');
        echo plugin_js('sweetalert');
        echo $before_closing_body;
	?>
</body>
</html>

