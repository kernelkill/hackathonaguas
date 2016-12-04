<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/agencia_web.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Ag::Web</title>
</head>
<body onload="foco();">
<div id="container">
    <div class="divHeader">
        <!--<img src="imagens/logo-aguas-guariroba.png" alt="" border="0"/>-->
    </div>

    <!-- headerLogin.jsp -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="top" id="fundoLateralIndex" style="width:190px">
                <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr valign="top">
                        <td>
                            <div id="mn">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                    <tr>
                                        <th colspan="2">
                                            <h1 class="cb">

                                            </h1>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>

                                            <img src="imagens/arrow_green.png"/>

                                        </td>
                                        <td class="itemMenu">
                        <span class="textoMenu">
                            <a href="#">Cliente</a>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <img src="imagens/arrow_green.png"/>

                                        </td>
                                        <td class="itemMenu">
                    <span class="textoMenu">
                        <a href="#">Consultar Solicitação Serviços</a>
                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <img src="imagens/arrow_green.png"/>
                                        </td>
                                        <td class="itemMenu"><span class="textoMenu"><a
                                                    href="#">Denunciar Furto de Energia</a></span>
                                        </td>
                                    </tr>

                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>

            <td width="570" height="450" valign="top" id="fundoPrincipalLogout" style="padding: 14px">


                <script language="JavaScript" type="text/JavaScript">
                    var tgs = new Array('div', 'p', 'td', 'span', 'h1', 'h5');

                    //Specify spectrum of different font sizes:
                    var szs = new Array('xx-small', 'x-small', 'small', 'medium', 'large', 'x-large', 'xx-large');
                    var startSz = 2;

                    function ts(trgt, inc) {
                        if (!document.getElementById) return
                        var d = document, cEl = null, sz = startSz, i, j, cTags;
                        sz += inc;
                        if (sz < 0) sz = 0;
                        if (sz > 6) sz = 6;
                        startSz = sz;
                        if (!( cEl = d.getElementById(trgt) )) cEl = d.getElementsByTagName(trgt)[0];

                        cEl.style.fontSize = szs[sz];

                        for (i = 0; i < tgs.length; i++) {
                            cTags = cEl.getElementsByTagName(tgs[i]);
                            for (j = 0; j < cTags.length; j++) cTags[j].style.fontSize = szs[sz];
                        }
                    }
                </script>

                <table width="100%" class="tabelaTitulo">
                    <tr>
                        <td width="50%" align="left" valign="bottom">
                            <span class="textoTopico"><nobr>Serviços ao Cliente</nobr></span>
                        </td>
                        <td width="50%" align="right" valign="bottom">

                        </td>
                    </tr>
                </table>

                <p></p>

                <form name="LoginForm" method="post" action="autentica.php">
                    <input type="hidden" name="param_url" value="/agencia/">
                    <div class="formLabel T120">
                        Codigo Cliente:
                    </div>
                    <div class="colDir40">
                        <input type="text" name="sqUnidadeConsumidora" maxlength="20" value=""
                               onblur="this.value = trim(this.value)">
                    </div>
                    <br/><br/>


                    <input type="hidden" name="numeroMedidor" value="false">


                    <div class="formLabel T120">
                        Tipo de Cliente:
                    </div>
                    <div class="colDir40">
                        <input type="radio" name="tpDocumento" value="CPF" checked="checked"
                               onclick="javascript:desabilitaCampo()" id="CPF" class="radio">
                        <span class="textoGeral"><label for="CPF">CPF</label></span>
                        <input type="radio" name="tpDocumento" value="CPJ" onclick="javascript:desabilitaCampo()"
                               id="CPJ" class="radio">
                        <span class="textoGeral">
	                    <label for="CPJ">CNPJ&nbsp;&nbsp;&nbsp;</label>
	                </span>
                    </div>
                    <br/>
                    <div class="formLabel T120">
                        Nº do Documento:
                    </div>
                    <div class="colDir40">


                        <input type="text" name="numeroDocumentoCPF" maxlength="20" value=""
                               onkeyup="JavaScript:campoNumerico(this);" id="CD_CPF" style="display: inline;">
                        <input type="text" name="numeroDocumentoCNPJ" maxlength="20" value=""
                               onkeyup="JavaScript:campoNumerico(this);" id="CD_CPF" style="display: none;">


                        <!--    <img src="imagens/duvida.gif"
                                 alt=""
                                 class="cursor"
                                 onmouseover="JavaScript:exibirDica(event,'Após escolher o tipo de documento no item anterior, digite o número do seu CPF em caso de pessoa física ou o número do CNPJ em caso de pessoa jurídica');"
                                 onmouseout="JavaScript:ocultarDica();"/>-->
                    </div>
                    <br/>
                    <input type="hidden" name="autenticarSemDocumento" value="false">


                    <div class="formLabel T120 left"></div>
                    <div class="divBotoes">

                        <input class="btn btn-primary" type="submit" value="Entrar" class="botao">
                        <input class="btn btn-primary" type="button" name="botao" value="Limpar" onclick="limparCampos();" class="botao">

                    </div>
                    <input type="hidden" name="tipoUsuario" value="clienteUnCons">
                </form>


                <script type="text/javascript">
                    function validar() {
                        if (

                            trim(document.LoginForm.sqUnidadeConsumidora.value) == "") {
                            alert('???tela.login.mensagem.preenchimento???');
                            document.LoginForm.sqUnidadeConsumidora.focus();
                            return false;
                        }
                        submitForm(0);
                        return true;
                    }

                    function limparCampos() {
                        document.forms[0].sqUnidadeConsumidora.value = '';

                        document.forms[0].tpDocumento.value = '';
                        document.forms[0].numeroDocumentoCPF.value = '';
                        document.forms[0].numeroDocumentoCNPJ.value = '';
                    }
                </script>


        </tr>

    </table>
    <div class="divDica" id="objDica">
        &nbsp;
    </div>
</div>
</body>
</html>