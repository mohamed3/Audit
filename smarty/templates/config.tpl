{* 
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//
*}

<body>{literal}
    <link rel="stylesheet" type="text/css" href="{/literal}{$httpPath|cat:"plugins/audit/css/config.css"}{literal}" media="all"/>
</head>{/literal}

<div id="info">
    <table class='tab_cadre_fixe'>
        <tr>
            <th>Configuration du plugin Audit</th>
        </tr>
        <tr>
            <td align="center" class="blue">
                La configuration du module doit être renseignée avant son utilisation. <br>
            </td>
        </tr>
        <tr>
            <td align="center" >
                <button id="btn-ajoutStatut" onclick="ajout()">
                    <img alt='' title="Ajouter" src='{$httpPath}pics/menu_add.png'>
                </button>
            </td>
        </tr>
    </table>
</div>

<div id="configAudit">
    <table class='tab_cadre'>
        <tr>
            <td align="center" class="green">
                <label>Statut existant</label> 
            </td>
            <td align="center" class="green">
                <label>Modifier</label> 
            </td>
            <td align="center" class="green">
                <label>Supprimer</label> 
            </td>
        </tr>
        {foreach from=$configuration item=statut}
        <tr>
            <td><input type="text" size='20' id='{$statut.id}' name='statut' value="{$statut.statut}" /></td>
            <td width="30px">
                <button id="btn-modifStatut" onclick="change('modifier',{$statut.id},document.getElementById({$statut.id}).value)">
                    <img alt='' title="Modifier" src='{$httpPath}pics/actualiser.png'>
                </button>
            </td>
            <td width="30px">
                <button id="btn-suppStatut" onclick="change('supprimer',{$statut.id})">
                    <img alt='' title="Modifier" src='{$httpPath}pics/reset.png'>
                </button>
            </td>
        </tr>
        {/foreach}
    </table>
</div>
                            
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  

<script type="text/javascript">  
    {literal}    
    /*
     * Fonction qui envoie au serveur via Ajax le champ à modifier.
     */
    function change(action,id_statut,value)
        {
        var valeur = null;
        if(value){valeur = value;}
        //else {var valeur = document.getElementById(id_statut).value;}

        var DATA = "action="+action+"&id="+id_statut+"&valeur="+valeur; 
        
        if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
        else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
                  
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              alert("L'élément a été modifié avec succès.");
              document.getElementById("configAudit").innerHTML=xmlhttp.responseText;
              }
          }
        xmlhttp.open("POST","{/literal}{$httpPath|cat:"plugins/audit/ajax/config.ajax.php"}{literal}",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(DATA);
        }    

    /*
     * Fonction qui envoie au serveur via Ajax le champ à modifier.
     */
    function ajout()
        {
        var form = "<table class='tab_cadre'> \n\
            <tr> <td> Statut: <input type=\"text\" id=\"formStatut\"> </td> </tr> \n\
            <tr>\n\
                <td align=\"center\">\n\
                <button onclick=\"change('ajouter','formStatut',document.getElementById('formStatut').value)\"> \n\
                    ajouter </button>\n\
                </td>\n\
            </tr> \n\
            </table>"
            document.getElementById("configAudit").innerHTML=form ;
        }
        
    /*
     * Gestion des info-bulles
     */
    $(document).ready(function() 
        {
        // Sélectionner tous les liens ayant l'attribut rel valant tooltip
        $('label[rel=tooltip]').mouseover(
            function(e) 
                {
                // Récupérer la valeur de l'attribut title et l'assigner à une variable
                var tip = $(this).attr('title');   
                // Supprimer la valeur de l'attribut title pour éviter l'info-bulle native
                $(this).attr('title','');
                // Insérer notre info-bulle avec son texte dans la page
                $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    

                // Ajuster les coordonnées de l'info-bulle
                $('#tooltip').css('top', e.pageY + 10 );
                $('#tooltip').css('left', e.pageX + 20 );

                // Faire apparaître l'info-bulle avec un effet fadeIn
                $('#tooltip').fadeIn('500');
                $('#tooltip').fadeTo('10',0.8);

                }
            ).mousemove(
                function(e) 
                    {
                    // Ajuster la position de l'info-bulle au déplacement de la souris
                    $('#tooltip').css('top', e.pageY + 10 );
                    $('#tooltip').css('left', e.pageX + 20 );
                    }
                ).mouseout(
                    function() 
                        {
                        // Réaffecter la valeur de l'attribut title
                        $(this).attr('title',$('.tipBody').html());

                        // Supprimer notre info-bulle
                        $(this).children('div#tooltip').remove();

                        }
                    );
        });        
    {/literal}
    
    
</script>