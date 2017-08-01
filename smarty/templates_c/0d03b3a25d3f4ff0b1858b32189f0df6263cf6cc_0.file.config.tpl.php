<?php
/* Smarty version 3.1.30, created on 2016-09-29 12:53:46
  from "C:\xampp\htdocs\glpi\plugins\audit\Smarty\templates\config.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ecf2ba652f84_33634712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d03b3a25d3f4ff0b1858b32189f0df6263cf6cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\glpi\\plugins\\audit\\Smarty\\templates\\config.tpl',
      1 => 1474969821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ecf2ba652f84_33634712 (Smarty_Internal_Template $_smarty_tpl) {
?>


<body>
    <link rel="stylesheet" type="text/css" href="<?php echo ($_smarty_tpl->tpl_vars['httpPath']->value).("plugins/audit/css/config.css");?>
" media="all"/>
</head>

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
                    <img alt='' title="Ajouter" src='<?php echo $_smarty_tpl->tpl_vars['httpPath']->value;?>
pics/menu_add.png'>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configuration']->value, 'statut');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statut']->value) {
?>
        <tr>
            <td><input type="text" size='20' id='<?php echo $_smarty_tpl->tpl_vars['statut']->value['id'];?>
' name='statut' value="<?php echo $_smarty_tpl->tpl_vars['statut']->value['statut'];?>
" /></td>
            <td width="30px">
                <button id="btn-modifStatut" onclick="change('modifier',<?php echo $_smarty_tpl->tpl_vars['statut']->value['id'];?>
,document.getElementById(<?php echo $_smarty_tpl->tpl_vars['statut']->value['id'];?>
).value)">
                    <img alt='' title="Modifier" src='<?php echo $_smarty_tpl->tpl_vars['httpPath']->value;?>
pics/actualiser.png'>
                </button>
            </td>
            <td width="30px">
                <button id="btn-suppStatut" onclick="change('supprimer',<?php echo $_smarty_tpl->tpl_vars['statut']->value['id'];?>
)">
                    <img alt='' title="Modifier" src='<?php echo $_smarty_tpl->tpl_vars['httpPath']->value;?>
pics/reset.png'>
                </button>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div>
                            
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>  

<?php echo '<script'; ?>
 type="text/javascript">  
        
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
        xmlhttp.open("POST","<?php echo ($_smarty_tpl->tpl_vars['httpPath']->value).("plugins/audit/ajax/config.ajax.php");?>
",true);
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
    
    
    
<?php echo '</script'; ?>
><?php }
}
