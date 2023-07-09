<?php


    session_start();


    include('public/app/config.php');
    include('conectar.php');
    include('config.php');
    include('entrar.php');
    
    $connection = $conn;


                  

    
?>

<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Dados Login</title>
    <!-- jQuery + Bootstrap JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="public/assets/css/style.css">

  



   
    <style>
@media screen and (min-width: 600px) and (max-width: 1900px) {
	.tres {
	     
	}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse center;
  width: 100%;
}

#customers td, #customers th {
  border: 0px solid #ddd;
  padding: 8px;
  
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 
}

/*Reset*/
* {
  margin: 1;
  padding: 2;
}
/*Reset*/

html {
  height: 60vh;
   
}

body {
  display: flex;
  flex-direction: column;
  min-height: 90vh;
   background-color: rgba(255, 215, 0,0.0);
}


/*Tags*/
img {
  border: solid black 1px
  width: 50%;
}
/*Tags*/

main {
  display: flex;
  padding: 38px 15px;
}



li {
  list-style: none;
  display: inline;
}

/*Classification*/
.Navegation_Header {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.Navegation_Header a {
  color: white;
  text-decoration: none;
  padding: 16px 20px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
    "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  font-size: 19px;
}

.Navegation_Header a:hover {
  color: rgb(255, 45, 45);
  transition: 180ms linear;
}

/*Looper - Assassinos do futuro*/
.Looper {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  max-width: 100%;
  border: solid black 1px;
  background-color: rgb(255, 254, 246);
  box-shadow: 0px 0px 18px rgb(14, 14, 14);
}

.Looper_Info {
  display: flex;
  flex-shrink: 1;
  flex-direction: column;
  max-width: 348px;
}

.Titulo_Looper {
  display: flex;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
    "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

.Titulo_Looper:hover {
  color: rgb(255, 45, 45);
  transition: 90ms linear;
}

.Info_Div {
  flex: 1;
  padding: 0 12px 20px 12px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
    "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  font-size: 14px;
}

/*Looper - Assassinos do futuro*/

/*####################################################################################################################################*/
/*####################################################################################################################################*/

.Info_Name {
  font-weight: bold;
}

.Info_Dados {
  color: blue;
}
/*Classification*/


</style>



 
    
</head>
<body class=""> <center>


<!-- 
 <div class=" container mt-3" >
        <div class=" d-flex justify-content-center" >
            <div class="card" style="width: 55rem" >
                <div class="card-body" style="background: #CD853F;" >
                   
-->



    <div class="panel panel-default" style="">
    <div class="" >
    <div class="" >
    <div class="panel-body mt-2 ml-2 mr-2 mb-2" >
                    
       
         
            
            
            
            
            
            <?php 
            
            
                             if(isset($_POST['mySelect'])) {
                                $precoitem = $_POST['mySelect'];
                                
                            
                            if($precoitem == '0,49'){
                               $somaitem = $_SESSION['nota'] + 200;
                               $notamoad = 'nota';
                               if( $_SESSION['usuario'] == 'test'){ 
                                 $precoitem =  '0,01'; 
                               }
                            }
                            if($precoitem == '1,99'){
                               $somaitem = $_SESSION['nota'] + 1000; 
                               $notamoad = 'nota';
                               if( $_SESSION['usuario'] == 'test'){ 
                                 $precoitem =  '0,01'; 
                               }
                            }
                            if($precoitem == '5,99'){
                               $somaitem = $_SESSION['nota'] + 8000;
                               $notamoad = 'nota';
                               if( $_SESSION['usuario'] == 'test'){ 
                                 $precoitem =  '0,01'; 
                               }
                            }
                            if($precoitem == '9,99'){
                               $somaitem = $_SESSION['nota'] + 15000;
                               $notamoad = 'nota';
                               if( $_SESSION['usuario'] == 'test'){ 
                                 $precoitem =  '0,01'; 
                               }
                            }
                            if($precoitem == '14,99'){
                               $somaitem = $_SESSION['nota'] + 50000;
                               $notamoad = 'nota';
                               if( $_SESSION['usuario'] == 'test'){ 
                                 $precoitem =  '0,01'; 
                               }
                            }
                            
                              
                            }


            
            ?>
                   
                   
                    
            <table  id="customers">
                
                <!--
                <tr>
                    
                    <th colspan="0" >
                        <h4><Strong>    Usuario: </Strong> <?php echo $_SESSION['usuario']; ?> </h4>
                        
                            
                            
                        <form id='' method='get' action='entrar.php?usuario='>
                        <input type='hidden' name='usuario' value='<?php echo $_SESSION['usuario']; ?>' />
                        <button type="submit" name="" id='btatualizar'   class="btn  btn-danger  ">Atualizar</button>
                        </form>
                            
                        </th>
                        
                </tr>
                <tr>
                    <td>
                        
                         <br><h5><img src="img/notasmedio.png" width="50" > <?php echo $_SESSION['nota']; ?> Notas</5>
                    <div><img src="img/MoadPequeno.png" width="50" > <?php echo $_SESSION['moad']; ?> Moedas  </div>
                    <div class='card-title text-center mb-4'>
                        
                    </td>
                    
                    
                </tr>
                -->
                <tr>
                    
                <td>
                 
                
                     
                    <form action="lojinha.php" method="POST">
                    
                    <table>
                        <tr>
                            <td>
                                
                                <!-- Botão 200 notas 0,49 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center mt-2'>
                                <h4>200 Notas</h4>
                       
                                    <!-- <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="0,49" class="btn btn-danger btn-block">Minimo</button> 
                            </div>
                            
                            </td>
                            <td>
                                
                                <!-- Botão 1000 notas 1,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center mt-2'>
                                <h4>1000 Notas</h4>
                       
                                   <!-- <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->  
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="1,99" class="btn btn-danger btn-block">Baixo</button> 
                            </div>
                            
                            </td>
                            <td>
                                
                                <!-- Botão 1000 notas 5,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center mt-2'>
                                <h4>8000 Notas</h4>
                       
                                     <!-- <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->   
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="5,99" class="btn btn-danger btn-block">Medio</button> 
                            </div>
                            
                            </td>
                            <td>
                                
                                <!-- Botão 1000 notas 9,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center mt-2'>
                                <h4>15000 Notas</h4>
                       
                                    <!-- <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   --> 
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="9,99" class="btn btn-danger btn-block">Alto</button> 
                            </div>
                            <td>
                                
                                <!-- Botão 1000 notas 14,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center mt-2'>
                                <h4>50000 Notas</h4>
                       
                                    <!-- <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->  
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="14,99" class="btn btn-danger btn-block">Ultra</button> 
                            </div>
                            
                            </td>
                            
                            </td>
                            
                        </tr>
                    
                    
                    </table>
                   
                    </form>
                    
                     <hr/>
                    
                    
                    <!-- Item 1 1000 moedas -->
                        
                    <!-- Body - Payer Information -->
                <div id="" class=" " >
                    <form id="form-payer-information" method="POST">
                    
                    
                    
                                
                    <h5 class='text-center'><h1 class='text-center'>Usuario: <?php echo $_SESSION['usuario']; ?></h1></5>            
                    <h5 class='text-center'><?php echo $somaitem; ?> Notas</5>
                    <div><img src="img/notasmedio.png" width="120" ></div>
                    <div class='card-title text-center mb-4'>
                        
                        Descrição do item!
                        
                    </div>
                    <!--<div class="card-text ">Adiquira 100 noedas por menos!</div><br>-->
                                
                      
                    
                        <!-- alert -->
                        <div id="alert-form-payer" class="alert alert-danger text-center d-none" role="alert"></div>
                        <!--/ /alert -->
                        
                        <!-- nickname -->
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control rounded-3" id="input-nickname" placeholder="Apelido" value='<?php echo $_SESSION['usuario']; ?>'>
                            
                        </div>
                        
                        <!-- quant --> 
                    
                    
                    
                   
                    



                        
                        
                        <!-- Lembre de mudar a quantidade -->
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control rounded-3" id="input-quantid" placeholder="Quantis" value='<?php echo $somaitem; ?>'>
                            
                        </div>
                        
                        <!-- tipo -->
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control rounded-3" id="input-tipo" placeholder="Tipo" value='<?php echo $notamoad; ?>'>
                            
                        </div>
                        
                        <!-- message -->
                        <div  class="form-floating mb-3">
                            <input  type="hidden" class=" form-control rounded-3" id="textarea-message" placeholder="Mensagem" value='fazendo dos sonhos'>
                           
                        </div>

                        <!-- email -->
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control rounded-3" id="input-email" placeholder="name@example.com" value='<?php echo $_SESSION['mail']; ?>' >
                           
                        </div>

                        <hr/>

                        <!-- value donation -->
                       
                                                                                              <!-- Lembre do preço -->
                         <div class="input-group input-group-lg mt-1 mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-lg">R$</span>
                            <input type="text" class="form-control" id="input-valuePayer"  value='<?php echo $precoitem; ?>' readonly>
                            
                        </div>
                        
                        <!-- submit -->
                        <button type="submit" data-toggle="modal" data-target="#modalPayer" class="btn btn-danger btn-block">Continuar</button>
                    
                        

                    </form>
                </div>
                <!--// Body - Payer Information -->
                    
                
                    
                    
                    
           </td>       
                                  
                    <!-- 
                    <form id='formOculta' method='post' action='loja/comprar.php'>
                                
                                
                                
                                
                    <h5>1000 Notas</5><br></br>
                    <div><img src="img/notasmedio.png" width="150" ></div>
                    <div class="card-text "><strong>R$1,99</strong></div><br></br>
                    
                                
                                
                    <input type='hidden' name='chave' value='2a5453fa-d52e-478b-b10f-4c09ed3178d5' />
                    <input type='hidden' name='beneficiario' value='Maycon Douglas' />
                    <input type='hidden' name='cidade' value='GOIANIA' />
                    <input type='hidden' name='descricao' value='1000 Notas' />
                    <input type='hidden' name='identificador' value='***' />
                    <input type='hidden' name='valor' value='1.99' />
                    
                      
                    
                    <input type='hidden' name='dadosc' value='nota' />
                    <input type='hidden' name='valorc' value='1000' />
                    
                    
                    <button type="submit" name="pagar"   class="btn btn-danger btn-block">Comprar</button>
                    
                    </form>
                       -->
                                
                            
                
                    
                    
                     <!-- Modal - Capture Informations Payer -->
    
                    
                    
                   
                 
                </tr>
                        
                    
            </table>             
              
                   
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    
                               
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->



                   
                   <div  class="modal fade" id="modalPayer" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-3">Comprador <strong><?php echo $_SESSION['usuario']; ?></strong></h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                   
                      <!-- Body - Payment Pix -->
                <div id="modal-body-payment" class="modal-body text-center d-none" style="margin-top: -30px;">
                    <img id="load" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921" style="max-width: 100%;" />
                    <div class="row d-none" id="dix-pix">
                        <div class="col-md-12">
                            <img src="" id="img-pix" width="400" style="max-width: 100%;">
                        </div>
                        
                        <div class="col-md-12">
                            <?php    $id_referencia = "<script>document.write(id-reference)</script>"; ?>
                        
                            <textarea name="code-pix" class="form-control" id="code-pix" rows="5" cols="80"></textarea>
                            <button class="w-90 mt-3 rounded-4 btn btn-warning text-white btn-clipboard btn-lg px-4 gap-3" id="copyButton">Copiar</button>
                        </div>
                    </div>
                </div>
                <!--// Body - Payment Pix -->

            </div>
        </div>
    </div>
    <!--// Modal - Capture Informations Payer -->
                     
   
      

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
   
   



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Page JS -->
    <script src="public/assets/js/pages/page-index.js"></script>   
    
 <!--   
<script>

$('#btatualizar').delay(10000).hide("slow")

</script>
  -->  

    
</body>
</html>