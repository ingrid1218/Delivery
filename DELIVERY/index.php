<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedido.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio"  value="Arroz"    name="arroz"  />Arroz Branco</label><br/>
                <label class='radiolabel'><input type="radio"  value="Macarrao" name = "macarrao" />Macarrão alho e óleo</label><br/>
                <label class='radiolabel'><input type="radio"  value="Farofa"   name="farofa" />Farofa de Calabreza</label><br/>
                <label class='radiolabel'><input type="radio"  value="Salada"   name="salada" />Salada de olhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name="prato_principal">
                    <option value="Opcao" name="opc">Escolha uma opção</option>
                    <option value="bife" >Bife à parmegiana</option>
                    <option value="frango">Frango à parmegiana</option>
                    <option value="lasanha">Lasanha de brócolis</option>
                    <option value="peixe">Peixe frito</option>
                   </select>
                </div>
                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" value="BatataF"    name="batata-frita"/>Batata Frita</label>
                    <label><input type="checkbox" value="BatataP"    name="batata-palha" />Batata Palha</label>
                    <label><input type="checkbox" value="Oregano"    name="oregano" />Orégano</label>
                    <label><input type="checkbox" value="Vinagrete"  name="vinagrete"/>Vinagrete</label>
                    <label><input type="checkbox" value="Tomate"     name="tomate"/>Tomate</label>
                    <label><input type="checkbox" value="Cebola"     name="cebola"/>Cebola</label>
               </div>
               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" id="agree" value="confirmacao" name="confirm"/> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>
              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                <label for='name'>Nome completo</label>
                <input type="text" id="name" name="name"/>
                <br/>
                <label for='address'>Endereço de entrega</label>
                <input type="text" id="address" name="address"/>
                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="tel"  id="phonenumber" name="tel"/>
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviar" value='Realizar pedido'/>
        </div>  
       </form>
	</div>
</body>
</html>