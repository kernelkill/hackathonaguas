<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <META http-equiv="Content-Script-Type" content="text/javascript">

    <title>Ag::Eletrônica</title>
    <link href="css/agencia_web.css" rel="stylesheet" type="text/css"/>
    <script>
        var emp = 'ENERSUL';
        var $j = jQuery.noConflict();
        $j(window).load(carregaPaginas);
    </script>
</head>

<body>
<div id="container">


    <script>
        tipoCliente = 'clienteUnCons';
    </script>
    <div id="all">


        <div class="divHeader">


            <img src="/AgenciaWeb/imagens/ENERSUL.LogoTop.jpg" alt="" border="0"/>


        </div>

        <div id="mn">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">

                <thead>
                <tr>
                    <th>


                        <h1 class="cb" id="topoMenu">Cliente</h1>


                    </th>
                </tr>
                </thead>
                <tbody>


                </tr>


                </tr>


                </tr>


                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/cadastrarEnvioFaturaEmail/solicitarFaturaEmail.do">Cadastrar Envio de
                            Fatura por E-mail</a>


                    </td>

                </tr>


                </tr>


                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/consultarDebito/consultarDebito.do">Consultar Débito</a>


                    </td>

                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/imprimirSegundaVia/iniciarImprimirSegundaVia.do">Imprimir Segunda Via da
                            Fatura</a>


                    </td>

                </tr>


                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/religarUc/religarUc.do">Solicitar Religa&ccedil;&atilde;o</a>


                    </td>

                </tr>


                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/selecionarDataCerta/iniciarSelecionarDataCerta.do">Alterar Data de
                            Vencimento</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/registrarAutoLeitura/iniciarRegistrarAutoLeitura.do">Registrar
                            Autoleitura</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/consultarHistConsumoGrupoB/consultarHistConsumoGrupoB.do">Consultar
                            Histórico de Consumo</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/consultarHistoricoPagto/consultarHistoricoPagto.do">Histórico de Pagamento
                            e Faturas Arrecadadas</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/efetuarPagamentoHomeBanking/iniciarHomeBanking.do">Efetuar Pagamento
                            Homebanking</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/consultarSolicitacaoServicos/iniciarConsultarSolicitacaoServicos.do">Acompanhar
                            Solicitações de Serviços</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/alterarDadosCadastrais/alterarDadosCadastrais.do">Alterar Telefone e
                            E-mail</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/alterarDadosCadastrais/alterarDadosCadastrais.do">Alterar Dados
                            Cadastrais</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/solicitarEntregaAlternativa/validarUc.do">Solicitar Entrega Alternativa</a>


                    </td>

                </tr>

                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/reciboQuitacao/reciboQuitacao.do">Recibo de Quita&ccedil;&atilde;o</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/denunciaFurto/denunciaFurto.do">Denuncia de Furto</a>


                    </td>

                </tr>


                <tr>
                    <td width="100%" class="textoMenu itemMenu">


                        <a href="/AgenciaWeb/autenticar/logout.do">Sair</a>


                    </td>

                </tr>

                </tbody>

                <tfoot>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                </tfoot>

            </table>

        </div>
        <div id="pg">
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
                        <span class="textoTopico"><nobr>Cliente</nobr></span>
                    </td>
                    <td width="50%" align="right" valign="bottom">

                    </td>
                </tr>
            </table>


            <table id="avisoDadosCadastrais" width="100%" cellpadding="6" cellspacing="0">
                <tr>
                    <td width="60%" class="tituloCaixaDadosCadastrais">
                        <div class="lineSpacingFixed">
						<span class="textoGeralNegrito">
							&nbsp;Dados Cadastrais
						</span>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="91%" align="left">
                                    <div class="lineSpacingFixed">
                                        <span class="textoGeralNegrito">Nome: </span>
                                        <span class="textoGeral">LEIA GUIMARAES QUERINO</span><br/>
                                        <span class="textoGeralNegrito">



								CPF:


                        </span>
                                        <span class="textoGeral">96091185187</span><br>
                                        <span class="textoGeralNegrito">Seu Código: </span>
                                        <span class="textoGeral">3514412</span><br>
                                        <span class="textoGeralNegrito">Endereço: </span>
                                        <span class="textoGeral">RUA ARUAQUE, 336 -  16.102.04.201077</span><br>

                                        <span class="textoGeralNegrito">Cidade: </span>
                                        <span class="textoGeral">CAMPO GRANDE - MS</span><br>


                                        <span class="textoGeralNegrito">Telefone: </span>
                                        <span class="textoGeral">6733931066RESIDENCIA</span><br>

                                        <span class="textoGeralNegrito">Celular: </span>
                                        <span class="textoGeral">6792105257</span><br>

                                        <span class="textoGeralNegrito">Fax: </span>
                                        <span class="textoGeral">6799574110</span><br>
                                        <span class="textoGeralNegrito">E-mail: </span>
                                        <span class="textoGeral">leiangel@hotmail.com</span><br>
                                        <span class="textoGeralNegrito">Situação atual da Unidade Consumidora: </span>
                                        <span class="textoGeral">LIGADA</span></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <br/>


            <br/>


            <fieldset class="avisoMensagem">
                <legend class="textoTopico">&nbsp;&nbsp;Situação da UC&nbsp;&nbsp;</legend>
                <span class="textoGeralNegrito">Situação atual da Unidade Consumidora:</span>
                <span class="textoGeral">LIGADA</span><br/>
                <span class="textoGeralNegrito">Possui Debito Automático:</span>


                <span class="textoGeral">NÃO</span>

                <br/>
                <span class="textoGeralNegrito">Possui Data Certa:</span>

                <span class="textoGeral">SIM</span>


                <br/>
                <span class="textoGeralNegrito">Possui Entrega Alternativa:</span>


                <span class="textoGeral">NÃO</span>

                <br/>
                <span class="textoGeralNegrito">Possui Débitos:</span>
                <span class="textoGeral">SIM</span>
            </fieldset>
            <br/>


            <div style="text-align:center; margin-bottom:20px;">
                <img src="../autenticar/geraGrafico.do?grafico=grafHistPagto"/>
            </div>


            <div style="text-align:center">
                <img src="../autenticar/geraGrafico.do?grafico=grafHistCons"/>
            </div>


        </div><!-- fim div pg -->
        <div class="divDica" id="objDica">
            &nbsp;
        </div>

    </div><!-- fim div all -->


    <!-- monitoramento Google Analytics -->
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-25955108-8");
            pageTracker._trackPageview();
        } catch (err) {
        }
    </script>
    <!-- fim do codigo de monitoramento -->

</div><!-- fim div container -->

</body>
</html>