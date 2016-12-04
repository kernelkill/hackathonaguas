'use strict';
var botBuilder = require('claudia-bot-builder'),
    excuse = require('huh');
const fbTemplate = botBuilder.fbTemplate;

module.exports = botBuilder(function (request) {
    console.log(request.text);
    let msg = '';
    if (request.text.toLowerCase() == "boa tarde") {
        msg = "Boa tarde, como podemos te ajudar?";
        request.text = menu;
    }
    else {
        msg = "Em que posso ajudar";
    }

    if ((request.originalRequest.postback && request.originalRequest.postback.payload.toLowerCase() == 'init') || request.text.toLowerCase() == 'menu'){
        const generic = new fbTemplate.Generic();

        const newMessage = new fbTemplate.Text('Seja bem-vindo ao canal de atendimento da Águas de Guariroba.\n\nEscolha uma das opçoes abaixo:');

        return newMessage
            .addQuickReply('Debitos', 'DEBITOS')
            .addQuickReply('SegundaVia', 'SEGUNDAVIA')
            .addQuickReply('InformarTicket','TICKET')
            .addQuickReply('LigaçãoNova', 'LIGACAONOVA')
            .addQuickReply('ReligaçãoAgua', 'RELIGACAOAGUA')
            .addQuickReply('DesnunciaVazamentos','VAZAMENTO')
            .get();
    }

/*    console.log(request.originalRequest);
    if (request.text.toLowerCase() == 'menu' || request.originalRequest.message.quick_reply.payload.toLowerCase() == 'menu') {
        const newMessage = new fbTemplate.Text('Escolha uma das opçoes abaixo:');

        return newMessage
            .addQuickReply('Debitos', 'DEBITOS')
            .addQuickReply('Segunda Via', 'SEGUNDAVIA')
            .addQuickReply('Informar Ticket','TICKET')
            .addQuickReply('Ligação Nova', 'LIGACAONOVA')
            .addQuickReply('Religação Agua', 'RELIGACAOAGUA')
            .addQuickReply('Desnuncia Vazamentos','VAZAMENTO')
            .get();
    }*/


    if ((request.originalRequest.message && (
            (request.originalRequest.message.quick_reply && request.originalRequest.message.quick_reply.payload.toLowerCase() == 'debitos') ||
            request.text.toLowerCase() == 'debitos')
        )    || (request.originalRequest.postback && request.originalRequest.postback.payload.toLowerCase() == 'debitos')){
        const newMessage = new fbTemplate.Text('Escolha uma opçao: ');

        return newMessage
            .addQuickReply('Gerar por CPF', 'CPF')
            .addQuickReply('Gerar por Matricula', 'MATRICULA')
            .get();

    }
    console.log(request.originalRequest);
    if ((request.originalRequest.message && (
            (request.originalRequest.message.quick_reply && request.originalRequest.message.quick_reply.payload.toLowerCase() == 'gerar por cpf') ||
            request.text.toLowerCase() == 'gerar por cpf')
        )    || (request.originalRequest.postback && request.originalRequest.postback.payload.toLowerCase() == 'gerar por cpf')){

        msg = "Informe o seu CPF: ";
    }

    if (request.originalRequest.message.quick_reply == '111.111.111-11' || request.text  == '111.111.111-11'){
        const newMessage = new fbTemplate.text('Segunda via gerada: ');

        return newMessage
            .addQuickReply('Acessar Segunda Via: ','http://localhost/aguas/conta.jpg')
            .get();

    }


    if ((request.originalRequest.message && (
            (request.originalRequest.message.quick_reply && request.originalRequest.message.quick_reply.payload.toLowerCase() == 'segundavia') ||
        request.text.toLowerCase() == 'segundavia')
    )    || (request.originalRequest.postback && request.originalRequest.postback.payload.toLowerCase() == 'segundavia')){
        const generic = new fbTemplate.Generic();

        return generic
            .addBubble('Segunda Via', 'consulte e imprima a segunda via:')
            .addImage('http://2aviacontas.com.br/wp-content/uploads/2016/03/svLXhpPH.png')
            .addButton('Gerar Segunda Via','http://localhost/aguas/conta.jpg')
            .get();

    }

    if ((request.originalRequest.message && (
            (request.originalRequest.message.quick_reply && request.originalRequest.message.quick_reply.payload.toLowerCase() == 'ticket') ||
            request.text.toLowerCase() == 'ticket')
        )    || (request.originalRequest.postback && request.originalRequest.postback.payload.toLowerCase() == 'ticket')) {
        msg = 'Informe o numero do ticket: ';
    }



    if( request.text.toLowerCase() == '123456') {
        msg = "Ultima atualizaçao: A equipe de manutençao esta a caminho do local.";
        return msg;
    }


    console.log(msg);
    return msg;

});