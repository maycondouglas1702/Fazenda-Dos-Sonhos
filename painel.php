
<?php

    
    require_once  __DIR__ . '/loja/app/config.php';
    
    
    include('conectar.php');
    include('config.php');
    include('logar.php');
    
    $connection = $conn;
    
     // Raking TOP Donations //
    $query = "SELECT value, nickname FROM donations WHERE status = 'approved' ORDER BY value DESC LIMIT 4";
    $stmt  = $pdo->prepare($query);
    $stmt->execute();
    $rankingDonations = $stmt->fetchAll(\PDO::FETCH_ASSOC) ?? null;

    // Recent Donations //
    $query = "SELECT value, nickname, message, updated_at FROM donations WHERE status = 'approved' ORDER BY updated_at DESC";
    $stmt  = $pdo->prepare($query);
    $stmt->execute();
    $recentDonations = $stmt->fetchAll(\PDO::FETCH_ASSOC) ?? null;

?>

<?php session_start(); ?>
<!doctype html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dados Login</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="loja/public/assets/css/style.css">
    
    <script type="text/javascript">
        function closeWindow() {
  
            // Open the new window 
            // with the URL replacing the
            // current page using the
            // _self value
            let new_window =
                open(location, '_self');
  
            // Close this window
            new_window.close();
  
            return false;
        }
    </script>
    
    <script>
function fechar() {
janela = top;
janela.opener = top;
janela.close();
}
</script>

<style>


#textes {
	font-size: 10px;
	letter-spacing: 1px;
	color: #fff;
}    
   
  
table#alter tr td { /* Toda a tabela com fundo creme */
	background: #ffc;
	} 
table#alter tr.dif td {
	background: #eee; /* Linhas com fundo cinza */
	}

    
</style>

 
    
</head>
<body>
    <div class="container textes" >
    <div class=" container mt-3 " >
        <div class=" d-flex justify-content-center" >
            <div class="card" style="width: 55rem" >
                <div class="card-body textes" style="background: #CD853F;" >
                    
                    <caption class="card-title text-center mb-4" ><h1 class="card-title text-center mb-4" ><?php echo $_SESSION['nick']; ?></h1></caption>
                    <table summary=""  >
                    
                    <thead>
                    <tr>
                    <th colspan="2"  >
                        <h4><Strong>    Dados </Strong></h4></th>
                    <th>
                        <!--Botão atualizar dados  -->
                        <form id='' method='post' action='logar.php'>
                        <input type='hidden' name='login-usuario' value='<?php echo $_SESSION['usuario']; ?>' />
                        <input type='hidden' name='md-senha' value='<?php echo $_SESSION['senha']; ?>' />
                        <button type="submit" name="login" id='btatualizar'   class="btn btn-danger btn-block ">Atualizar</button>
                        </form>
                        
                    </th>
                    </tr>
                    </thead>
                    
                    <tfoot>
                    <tr>
                    <td colspan="3">
                        <strong>Xp:</strong><?php echo $_SESSION['exp']; ?>/ <?php echo $_SESSION['expneeded']; ?>
                    </td>
                    </tr>
                    </tfoot>
                    
                    <tbody>
                        
                    <tr>
                        <td rowspan="2"><strong><img src='img/MoadPequeno.png' width='40'></strong class='text-center'> <?php echo $_SESSION['moad']; ?><br>
                            <strong><img src='img/notaunica.png' width='40'></strong> <?php echo $_SESSION['nota']; ?><br>
                            <strong><img src='img/IcoNivel.png' width='40'></strong> <?php echo $_SESSION['nivel']; ?>
                        
                        </td>
                        <td><strong></strong> <?php echo $_SESSION['nota']; ?></td>
                        <td><strong>Nota:</strong> <?php echo $_SESSION['nota']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Ranque:</strong> <?php echo $_SESSION['rank']; ?></td>
                        
                        <td><strong>Nota:</strong> <?php echo $_SESSION['nota']; ?></td>
                        
                    </tr>
                    
                    
                    </tbody>
                    </table><br>
                    
                    
                    
                    
                    
                    
                    
                    <div class="card-text text-center"><strong>Data do cadastro:</strong> <?php echo $_SESSION['datainicio']; ?></div>
                    <div class="card-text text-center"><strong>Email address:</strong> <?php echo $_SESSION['mail']; ?></div><br>
                    
                    <a class="btn  btn-danger btn-block" href="logout.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" >
    <div class="d-flex justify-content-center">
    <div class="card" style="width: 55rem">
    <div class="card-body" style="background: #CD853F;" >
                    
       
       
       
       
        
                   
                   
                   
                   
                   
                   
                   
                    
            <table >
                
                <tr>
                    
                    <th colspan="2" >
                        <h4><Strong>    Produtos </Strong></h4></th>
                        
                </tr>
                
                <tr>
                <td>
                 
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
                
                     
                    <form action="painel.php" method="POST">
                    
                    <table>
                        <tr>
                            <td>
                                
                                <!-- Botão 200 notas 0,49 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center textes'>
                                <h4>200 Notas</h4>
                       
                                    <!--  <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="0,49" class="btn btn-danger btn-block">Minimo</button> 
                            </div>
                            
                            </td>
                            <td>
                                
                                <!-- Botão 1000 notas 1,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center textes'>
                                <h4>1000 Notas</h4>
                       
                                   <!--   <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="1,99" class="btn btn-danger btn-block">Baixo</button> 
                            </div>
                            
                            </td>
                            
                            <td>
                                
                                <!-- Botão 1000 notas 9,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center textes'>
                                <h4>15000 Notas</h4>
                       
                                   <!--   <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="9,99" class="btn btn-danger btn-block">Alto</button> 
                            </div>
                            </td>
                            <td>
                                
                                <!-- Botão 1000 notas 14,99 ou pro usuario teste 0,01 -->
                            <div class=' card-text text-center textes'>
                                <h4>50000 Notas</h4>
                       
                                   <!--  <img src="img/notaunica.png"  width="120" style="max-width: 100%;">   -->
                                
                            <button type="submit" data-toggle="modal" name='mySelect' value="14,99" class="btn btn-danger btn-block">Ultra</button> 
                            </div>
                            
                            </td>
                            
                            
                            
                        </tr>
                    
                    
                    </table>
                   
                    </form>
                    
                     <hr/>
                    
                    
                    <!-- Item 1 1000 moedas -->
                        
                    <!-- Body - Payer Information -->
                <div id="" class=" " >
                    <form id="form-payer-information" method="POST">
                    
                    
                    
                                
                                
                    <br><h5><?php echo $somaitem; ?> Notas</5>
                    <div><img src="img/notasmedio.png" width="120" ></div>
                    <div class='card-title text-center mb-4'>
                        
                        Descrição do item!
                        
                    </div>
                    <!--<div class="card-text ">Adiquira 100 noedas por menos!</div><br>-->
                                
                      
                    
                        <!-- alert -->
                        <div id="alert-form-payer" class="alert alert-danger text-center d-none" data-dismiss="modal" role="alert"></div>
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
                            <input type="text" class="form-control rounded-3" id="input-valuePayer"  value='<?php echo $precoitem; ?>' readonly>
                            
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
    
    </div>
    
    
    
                               
<!-- ---------------------------------------------------------------Criando pix ------------------------------------------------------------------------------------------------------------------------------- -->



                   
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
   <?php  exit;  ?> 
    
</body>
</html>