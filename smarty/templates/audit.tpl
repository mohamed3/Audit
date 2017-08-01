{* 
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//
*}
<table class='tab_cadre_fixe'>
    <tr>
        <th colspan="2">Audit</th>
    </tr>
    <tr>
        <td align="center" class="blue" colspan="2">
            Ce module vous permet de renseigner le statut de l'ordinateur <br>
        </td>
    </tr>
    <tr>
        <td align="right" ><label>Statut:</label></td>
        <td align="left" width="50%">
            <SELECT id="statut" size="1" onchange="change({$id})">
                {foreach from=$statutListe item="item"}
                        {if $statut eq $item}
                            <OPTION selected>{$item}
                        {else}
                            <OPTION>{$item}
                        {/if}
                {/foreach}
            </SELECT>
        </td>
    </tr>
</table>
            
            
            
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  

<script type="text/javascript">  
    {literal}    
    /*
     * Fonction qui envoie au serveur via Ajax le champ à modifier.
     */
    function change(id)
        {
        var liste, valeur;
        liste = document.getElementById("statut");
        valeur = liste.options[liste.selectedIndex].value;
        var DATA = "statut="+valeur+"&id="+id; 
        
        if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
        else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
                  
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {alert("L'élément a été modifié avec succès.");}
          }
        xmlhttp.open("POST","{/literal}{$httpPath|cat:"plugins/audit/ajax/audit.ajax.php"}{literal}",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(DATA); 
        } 
    {/literal}
</script>