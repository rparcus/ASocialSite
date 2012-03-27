<?php
    
/*
 * 
 * Contiene tutte le funzioni utili per gestire il sito. Tutto andrebbe
 * un po' commentato.
 * 
 */

//agrega i parametri da inviare al WSDL come elementXML 'parameters'
function paramWrapper ($parameters){
    return array('parameters' => $parameters);
}

/*
 * beh.. stampa il form di login
 * -1 per stampare un messaggio di errore standard. Altri numeri per form 
 * normale
 */
function printLoginForm($value){
    if ($value == -1){
        echo '<form action="index.php" method="post" name="login">
                <span style="color:red">(Username o password sbagliati)</span>
                User:<input class="post_textarea" name="username" type="text" size="10" maxlength="15" />&nbsp;
                Password:<input class="post_textarea" name="password" type="password" size="10" maxlength="15" />&nbsp;
                <input name="submit" class="coloredinput" type="submit" value="log in" onMouseOver="mouse_over_button(this.form.name,this.name)" onMouseOut="mouse_out_button(this.form.name,this.name)" />
                </form>';
    }else{
        echo '<form action="index.php" method="post" name="login">
                User:<input class="post_textarea" name="username" type="text" size="10" maxlength="15" />&nbsp;
                Password:<input class="post_textarea" name="password" type="password" size="10" maxlength="15" />&nbsp;
                <input name="submit" class="coloredinput" type="submit" value="log in" onMouseOver="mouse_over_button(this.form.name,this.name)" onMouseOut="mouse_out_button(this.form.name,this.name)" />
                </form>';    
    }
    
}
/*  controlla che la combinazione unica nomeutente->password sia presente nel db
 *  restituisce -1 con un errore o in caso di password sbagliata.
 */
function checkPassword($username, $password){
    $wsdl = "http://localhost:8080/ASocialServer/ASocialService?wsdl";
    $client = new SoapClient($wsdl, array('trace' => 1));
    $function = "loginRequest";
    $params = array('username' =>$username,'password'=>$password);
    $tmp = $client->__soapCall($function, paramWrapper($params));
    return $tmp->return; 
}

function getUsername($userID){
    
    /*
     * qui ci va una funziona che mette in input userID, e ottiene lo userName
     */
}

function checkWichSession($userID){
    /*
     * Prende in input userID e dice se quella sessione è attiva o meno
     * 
     */
}


?>
