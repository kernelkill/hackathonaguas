

'use strict';
var botBuilder = require('claudia-bot-builder'),
    excuse = require('huh');
const fbTemplate = botBuilder.fbTemplate;

module.exports = botBuilder(function (request) {
    console.log(request.text);
    let msg = '';
    if (request.text.toLowerCase() == "ola") {
        msg = "Bom Dia! Em que posso ajudar?";
    }

    if(request.text.toLowerCase() == "quais os serviços disponiveis?") {
        msg = "Serviços, parcelas, Religaçao, Saneamento, Vazamentos";
    }

    if(request.text.toLowerCase() == "gostaria da segunda via da minha conta" || request.text.toLowerCase() == "segundavia"){
        msg = 'Informe o seu cpf: ';
    }

    if(request.text.toLowerCase() == '1234567'){
        msg = "Pedido realizado, acesse o link para vizualizar a conta \n Deseja acessar outro serviço?";
    }

    if(request.text.toLowerCase() == "ticket"){
        msg = "Por Favor, informe o numero do ticket: ";
    }

    if(request.text.toLowerCase() == '123m55'){
        msg = "Previsao para atendimento as 15h.";
    }

    if(request.text.toLowerCase() == 'religa'){
        msg = "informe o seu CPF: ";
    }

    if(request.text.toLowerCase() == '123456'){
        msg = 'pedido de Religaçao processado. Acompanhe o processo pelo ticket 12355';
    }

    if(request.text.toLowerCase() == 'ultima'){
        msg ='Deseja acessar outro serviço?';
    }


    if(request.text.toLowerCase() == 'não'){
        msg = 'Obrigado por utilizar os nossos serviços!';
    }

    if (request.text == 'menu' || request.text == 'preciso de ajuda' || request.text.toLowerCase() =='sim') {
        return new fbTemplate.Button('Olhe a lista dos nossos serviços: ')
            .addButton('Segunda Via', 'SEGUNDAVIA')
            .addButton('Ticket', 'TICKET')
            .addButton('Religaçao da Rede', 'RELIGA')
            .get();
    }

    console.log(msg);
    return msg;

});