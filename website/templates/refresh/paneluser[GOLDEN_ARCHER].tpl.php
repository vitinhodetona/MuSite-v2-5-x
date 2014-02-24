{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Golden Archer</h1>
                    <table>
                        <tr>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <form id="goldeArcherForm">
                            <div class="goldenArcherBox">
                                <div id="goldenArcherName">Golden Archer</div>
                                <div id="serialText">
                                     <p>Aqui voc� pode registrar os seriais que voc� possui em troca de v�rios itens!</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais podem ser obtidos em:</p>
                                      <p>- Eventos no site</p>
                                      <p>- Eventos no jogo</p>
                                      <p>- Eventos no forum</p>
                                     <p>E tamb�m pode ser concedidos como brindes por compras de golds e vips!</p>
                                     <p>&nbsp;</p>
                                     <p>Os itens aqui obtidos atrav�s dos seriais ser�o colocados no seu ba� 0 do jogo.</p>
                                     <p>&nbsp;</p>
                                     <p>Os seriais s�o �nicos! Ou seja, seu serial n�o pode ser registrado pelo login do seu amigo, ele pertence somente a voc�!</p>
                                     <p>&nbsp;</p>
                                     <p class="goldText bold">Digite o seu serial abaixo,<br />depois clique em Registrar serial.</p>
                                     <p>&nbsp;</p> 
                                     <p class="goldText">Por favor tenha certeza de diferenciar a letra O e n�mero 0, a letra I e numero 1.</p> 
                                </div>
                                <div id="serialInput"><input type="text" name="serial" id="serial" value="0000-0000-0000" maxlength="14" onkeyup="this.value=this.value.toUpperCase()"></div>
                                <div id="serialCheck"><input type="submit" value="Registrar serial"></div>
                                <div id="serialResponse">
                                     <!--p class="yellow">Serial registrado!</p>
                                     <p class="yellow">Recebido: Bone Blade</p>
                                     <p class="white">Serial inv�lido!</p-->
                                </div>
                            </div>
                            </form>
                            <script type="text/javascript">
                            $("#goldeArcherForm").submit(function(){
                                
                                Verify ('?page=paneluser&option=GOLDEN_ARCHER&action=check&serial='+$("#serial").val(), 'serialResponse', 'get');
                                
                                return false;
                            });
                            </script>
                            </td>                                                     
                            <!--td style="margin: 0px; padding: 0px 0px 0px 10px; width: 100%; background-color: transparent; vertical-align: top;">
                            Aten��o, esse sistema n�o � interligado com o Golden Archer do jogo!
                            </td-->
                        </tr> 
                        </table>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}