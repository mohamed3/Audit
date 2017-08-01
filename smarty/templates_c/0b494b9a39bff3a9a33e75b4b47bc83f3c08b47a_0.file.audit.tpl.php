<?php
/* Smarty version 3.1.30, created on 2016-09-30 10:53:54
  from "C:\xampp\htdocs\glpi\plugins\audit\Smarty\templates\audit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee2822ba0e60_56924171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b494b9a39bff3a9a33e75b4b47bc83f3c08b47a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\glpi\\plugins\\audit\\Smarty\\templates\\audit.tpl',
      1 => 1474970295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee2822ba0e60_56924171 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <SELECT id="statut" size="1" onchange="change(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statutListe']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['statut']->value == $_smarty_tpl->tpl_vars['item']->value) {?>
                            <OPTION selected><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                        <?php } else { ?>
                            <OPTION><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                        <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </SELECT>
        </td>
    </tr>
</table>
            
            
            
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"><?php echo '</script'; ?>
>  

<?php echo '<script'; ?>
 type="text/javascript">  
        
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
        xmlhttp.open("POST","<?php echo ($_smarty_tpl->tpl_vars['httpPath']->value).("plugins/audit/ajax/audit.ajax.php");?>
",true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(DATA); 
        } 
    
<?php echo '</script'; ?>
><?php }
}
