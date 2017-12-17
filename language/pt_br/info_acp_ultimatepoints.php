<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by AlvoErrado2 and reviewed by eunaumtenhoid (c) 2017 [ver 1.1.8] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_EXPLAIN'			=> 'Aqui pode alterar as configurações do módulo do Banco',
	'ACP_POINTS_BANK_TITLE'				=> 'Configurações do Banco',
	'ACP_POINTS_DEACTIVATED'			=> 'Ultimate Points está atualmente desativado!',
	'ACP_POINTS_FORUM_EXPLAIN'			=> 'Aqui você pode definir os pontos padrões de fórum para todos os fóruns ao mesmo tempo. É ideal para seus primeiros ajustes.<br />Note que essas configurações são para <strong>TODOS</strong> os fóruns. Então, se você alterou manualmente qualquer uma das configurações de pontos do seu fórum com valores individuais, é necessário refazer isso depois de usar esta opção!',
	'ACP_POINTS_FORUM_TITLE'			=> 'Configurações de pontos do Fórum',
	'ACP_POINTS_INDEX_EXPLAIN'			=> 'Aqui você pode alterar as configurações gerais dos Ultimate Points',
	'ACP_POINTS_INDEX_TITLE'			=> 'Configurações de Pontos',
	'ACP_POINTS_LOTTERY_EXPLAIN'		=> 'Aqui você pode alterar as configurações do módulo Loteria',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Configurações da Loteria',
	'ACP_POINTS_ROBBERY_EXPLAIN'		=> 'Aqui você pode alterar as configurações do módulo de Roubo',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Configurações de Roubo',
	'ACP_POINTS_VALUES_HINT'			=> '<strong>Dica: </strong><strong>Dica: </strong>insira sempre valores sem o separador<br/> de milhares e os decimais com um ponto, ex. 1000.50',
	'ACP_USER_POINTS_TITLE'				=> 'Configurações do Ultimate Points',

	'BANK_COST'							=> 'Custo para manter uma conta bancária',
	'BANK_COST_EXPLAIN'					=> 'Aqui você define o valor, que os usuários tem que pagar a cada período de tempo, para ter sua conta bancária (coloque 0 para desativar essa função)',
	'BANK_ENABLE'						=> 'Ativar o módulo do Banco',
	'BANK_ENABLE_EXPLAIN'				=> 'Isso permitirá que os usuários usem o módulo do banco',
	'BANK_FEES'							=> 'Taxas por retirada',
	'BANK_FEES_ERROR'					=> 'As taxas de retirada não podem ser superiores a 100% !!',
	'BANK_FEES_EXPLAIN'					=> 'O valor em porcentagem (%) que os usuários terão de pagar, quando retirarem do banco',
	'BANK_INTEREST'						=> 'Taxa de juros',
	'BANK_INTERESTCUT'					=> 'Desativar juros em',
	'BANK_INTERESTCUTP'					=> '(coloque 0 para desativar essa função)',
	'BANK_INTERESTCUT_EXPLAIN'			=> 'Este é o valor máximo para o qual um usuário receberá a taxa de juros. Se eles possuírem mais, o valor ajustado é o máximo! Coloque 0 para desativar essa função.',
	'BANK_INTEREST_ERROR'				=> 'A taxa de juro não pode ser superior a 100% !!',
	'BANK_INTEREST_EXPLAIN'				=> 'O valor em porcentagem % dos juros',
	'BANK_MINDEPOSIT'					=> 'Depósito mínimo',
	'BANK_MINDEPOSIT_EXPLAIN'			=> 'O montante mínimo que os usuários podem depositar no banco',
	'BANK_MINWITHDRAW'					=> 'Saque mínimo',
	'BANK_MINWITHDRAW_EXPLAIN'			=> 'O montante mínimo que os usuários podem sacar no banco',
	'BANK_NAME'							=> 'Nome do seu Banco',
	'BANK_NAME_EXPLAIN'					=> 'Insira um nome para seu banco, ex. Nosso Banco do Fórum',
	'BANK_OPTIONS'						=> 'Configurações do Banco',
	'BANK_PAY'							=> 'Período de pagamento de juros',
	'BANK_PAY_EXPLAIN'					=> 'O período de tempo entre os pagamentos bancários',
	'BANK_TIME'							=> 'dias',
	'BANK_VIEW'							=> 'Ativar banco de pontos',
	'BANK_VIEW_EXPLAIN'					=> 'Isso ativa o módulo do banco',

	'FORUM_OPTIONS'						=> 'Pontos de Fórum',
	'FORUM_PEREDIT'						=> 'Pontos por edição',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Digite aqui, quantos pontos os usuários receberão por <strong>editarem</strong> uma mensagem. Esteja ciente de que eles também receberão pontos adicionais, que você definiu nas configurações de pontos avançados. <br /> Defina como 0 para desativar recebimento de pontos para este fórum.',
	'FORUM_PERPOST'						=> 'Pontos por mensagem',
	'FORUM_PERPOST_EXPLAIN'				=> 'Digite aqui, quanto pontos os usuários receberão por escrever <strong>mensagens (respostas)</strong>. Esteja ciente de que eles também receberão pontos adicionais, que você definiu nas configurações de pontos avançados. <br /> Defina como 0 para desativar o recebimento de pontos para este fórum. Desta forma, as configurações de pontos avançados também estarão desabilitadas para este fórum!',
	'FORUM_PERTOPIC'					=> 'Pontos por Tópicos',
	'FORUM_PERTOPIC_EXPLAIN'			=> 'Digite aqui, quanto pontos os usuários receberão por criar um <strong>novo tópico</strong>. Esteja ciente de que eles também receberão pontos adicionais, que você definiu nas configurações de pontos avançados. <br /> Defina como 0 para desativar o recebimento de pontos para este fórum. Desta forma, as configurações de pontos avançados também estarão desabilitadas para este fórum!',
	'FORUM_COST'						=> 'Pontos por download de arquivos anexos',
	'FORUM_COST_EXPLAIN'				=> 'Digite aqui, quantos pontos os usários terá que pagar para fazer o <strong>download de um arquivo anexo</strong>.<br />Coloque 0 para desativar essa função.',
	'FORUM_COST_TOPIC'					=> 'Pontos a pagar por novo tópico',
	'FORUM_COST_TOPIC_EXPLAIN'			=> 'Digite aqui, quantos pontos um usuário tem que pagar para iniciar um novo tópico neste fórum',
	'FORUM_COST_POST'					=> 'Pontos a pagar por nova mensagem',
	'FORUM_COST_POST_EXPLAIN'			=> 'Digite aqui, quantos pontos um usuário tem que pagar para iniciar uma nova mensagem neste fórum',
	'FORUM_POINT_SETTINGS'				=> 'Configurações do Ultimate Points',
	'FORUM_POINT_SETTINGS_EXPLAIN'		=> 'Aqui você pode configurar, quanto pontos os usuários ganharão por inserir novos tópicos, novas mensagens (respostas) e editar seus posts. Essas configurações são feitas para cada fórum. Desta forma, você pode torná-lo muito detalhada, onde os usuários podem obter pontos e onde não.',
	'FORUM_POINT_SETTINGS_UPDATED'		=> 'Pontos globais do fórum atualizados',
	'FORUM_POINT_UPDATE'				=> 'Atualizar pontos globais do fórum',
	'FORUM_POINT_UPDATE_CONFIRM'		=> '<br />Tem certeza de que deseja atualizar todos os pontos do fórum com os valores fornecidos?<br /> Esta etapa irá sobrescrever todos os ajustes atuais e não poderá ser revertida!',

	'LOG_GROUP_TRANSFER_ADD'			=> 'Tranferir pontos a um grupo',
	'LOG_GROUP_TRANSFER_SET'			=> 'Definir um novo valor de pontos para um grupo',
	'LOG_MOD_BANK'						=> '<strong>Pontos do banco editados</strong><br />» %1$s',
	'LOG_MOD_POINTS'					=> '<strong>Pontos editados</strong><br />» %1$s',
	'LOG_MOD_POINTS_BANK'				=> '<strong>Configurações do banco editadas</strong>',
	'LOG_MOD_POINTS_BANK_PAYS'			=> '<strong>Pagamentos de juros bancários</strong><br />» %1$s',
	'LOG_MOD_POINTS_FORUM'				=> '<strong>Configurações de pontos globais do fórum editadas</strong>',
	'LOG_MOD_POINTS_FORUM_SWITCH'		=> '<strong>Switches de Pontos do Fórum Editados</strong>',
	'LOG_MOD_POINTS_FORUM_VALUES'		=> '<strong>Valores de Ponto do Fórum Editados</strong>',
	'LOG_MOD_POINTS_LOTTERY'			=> '<strong>Configurações da Loteria editadas</strong>',
	'LOG_MOD_POINTS_RANDOM'				=> '<strong>Pontos aleatórios ganhos por</strong><br />» %1$s',
	'LOG_MOD_POINTS_ROBBERY'			=> '<strong>Configurações de Roubo editadas</strong>',
	'LOG_MOD_POINTS_SETTINGS'			=> '<strong>Configurações dos Pontos editadas</strong>',
	'LOG_RESYNC_LOTTERY_HISTORY'		=> '<strong>O histórico da loteria foi reiniciado com sucesso</strong>',
	'LOG_RESYNC_POINTSCOUNTS'			=> '<strong>Todos os pontos dos usuários foram redefinidos com sucesso</strong>',
	'LOG_RESYNC_POINTSLOGSCOUNTS'		=> '<strong>Todos os registros dos usuário foram redefinidos com sucesso</strong>',
	'LOTTERY_BASE_AMOUNT'				=> 'Grande Prêmio Base',
	'LOTTERY_BASE_AMOUNT_EXPLAIN'		=> 'O Grande Prêmio começará inicialmente com este montante. Se aumentar durante um período de sorteio, somas adicionais serão adicionadas ao próximo sorteio. O Grande Prêmio não vai diminuir se for sorteado.',
	'LOTTERY_CHANCE'					=> 'Chance de ganhar o Grande Prêmio',
	'LOTTERY_CHANCE_ERROR'				=> 'A possibilidade de ganhar não pode ser superior a 100% !!',
	'LOTTERY_CHANCE_EXPLAIN'			=> 'Aqui você pode definir a porcentagem para ganhar o Grande Prêmio (quanto maior o valor, maior a chance de ganhar)',
	'LOTTERY_DISPLAY_STATS'				=> 'Exibir hora do próximo sorteio na página do índice',
	'LOTTERY_DISPLAY_STATS_EXPLAIN'		=> 'Isso exibirá o próximo período de sorteio da loteria na página de índice.',
	'LOTTERY_DRAW_PERIOD'				=> 'Período do Sorteio',
	'LOTTERY_DRAW_PERIOD_EXPLAIN'		=> 'Quantidade de tempo em horas entre cada sorteio. Alterar isso afetará o dia/hora atual do sorteio. Ajuste para 0 para desativar os sorteios, os bilhetes/grande prêmio atuais permanecerão.',
	'LOTTERY_DRAW_PERIOD_SHORT'			=> 'O período de sorteio deve ser superior a 0!',
	'LOTTERY_ENABLE'					=> 'Ativar Módulo de Loteria',
	'LOTTERY_ENABLE_EXPLAIN'			=> 'Isso permitirá que os usuários usem o Módulo da Loteria',
	'LOTTERY_MAX_TICKETS'				=> 'Máx. número de bilhetes',
	'LOTTERY_MAX_TICKETS_EXPLAIN'		=> 'Definir o número máximo de bilhetes que um usuário pode comprar',
	'LOTTERY_MULTI_TICKETS'				=> 'Permitir vários bilhetes',
	'LOTTERY_MULTI_TICKETS_EXPLAIN'		=> 'Defina isto como "Sim" para permitir que os usuários comprem mais de um bilhete',
	'LOTTERY_NAME'						=> 'Nome da Sua Loteria',
	'LOTTERY_NAME_EXPLAIN'				=> 'Digite um nome para sua Loteria, por exemplo, Nossa Loteria do Fórum',
	'LOTTERY_OPTIONS'					=> 'Configurações da Loteria',
	'LOTTERY_PM_ID'						=> 'ID do remetente',
	'LOTTERY_PM_ID_EXPLAIN'				=> 'Insira aqui o ID do usuário, que será usado como remetente da MP para o vencedor sortudo (0 = Usar o ID do vencedor)',
	'LOTTERY_TICKET_COST'				=> 'Custos dos bilhetes',
	'LOTTERY_VIEW'						=> 'Ativar Loteria de Pontos',
	'LOTTERY_VIEW_EXPLAIN'				=> 'Isso ativará o Módulo da Loteria',

	'NO_RECIPIENT'						=> 'Nenhum destinatário definido.',

	'POINTS_ADV_OPTIONS'				=> 'Configurações Avançadas de Pontos',
	'POINTS_ADV_OPTIONS_EXPLAIN'		=> 'Se os Pontos de Fórum estiverem configurados para 0 (desativado), todas as configurações aqui não são calculadas.',
	'POINTS_ATTACHMENT'					=> 'Pontos gerais por adicionar anexos em uma postagem',
	'POINTS_ATTACHMENT_PER_FILE'		=> 'Pontos adicionais para cada arquivo anexado',
	'POINTS_BONUS_CHANCE'				=> 'Chance de Pontos Bônus',
	'POINTS_BONUS_CHANCE_EXPLAIN'		=> 'A possibilidade de um usuário receber pontos de bônus por criar um novo tópico, mensagem ou edição.<br />A chance está entre 0 e 100%, você pode usar decimais.<br />Ajuste para <strong>0</strong> para desativar essa função.',
	'POINTS_BONUS_VALUE'				=> 'Valor dos Pontos Bônus',
	'POINTS_BONUS_VALUE_EXPLAIN'		=> 'Defina limites entre os quais escolheremos um valor de bónus aleatório.<br /> Se você quiser uma quantia fixa, defina o mínimo e o máximo com o mesmo valor.',
	'POINTS_COMMENTS'					=> 'Permitir Comentários',
	'POINTS_COMMENTS_EXPLAIN'			=> 'Permitir que os usuários deixem comentários com seus pontos de transferência/doação',
	'POINTS_CONFIG_SUCCESS'				=> 'As configurações do Ultimate Points foram atualizadas com sucesso',
	'POINTS_DISABLEMSG'					=> 'Mensagem de desativação',
	'POINTS_DISABLEMSG_EXPLAIN'			=> 'Mensagem para exibir, quando o sistema do Ultimate Points estiver desativado',
	'POINTS_ENABLE'						=> 'Ativar Pontos',
	'POINTS_ENABLE_EXPLAIN'				=> 'Permitir que os usuários usem o Ultimate Points',
	'POINTS_GROUP_TRANSFER'				=> 'Transferência em grupo',
	'POINTS_GROUP_TRANSFER_ADD'			=> 'Adicionar',
	'POINTS_GROUP_TRANSFER_EXPLAIN'		=> 'Aqui você pode adicionar, subtrair ou definir valores para um determinado grupo. Você também pode enviar uma mensagem pessoal para cada membro do grupo. Prático, se você quiser enviar, por exemplo, saudações de Natal com um pequeno presente (você pode usar smilies e BBCodes). Se você não deseja enviar uma mensagem pessoal com a sua transferência, deixe os campos assunto e comentário em branco.',
	'POINTS_GROUP_TRANSFER_FUNCTION'	=> 'Função',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'	=> 'Comentário para sua mensagem pessoal',
	'POINTS_GROUP_TRANSFER_PM_ERROR'	=> 'Você precisa inserir o assunto <strong>E</strong> o comentário para enviar uma mensagem pessoal com sua transferência de grupo!',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS'	=> 'A Transferência em Grupo foi processada com sucesso e<br />os membros do grupo receberam sua mensagem pessoal.',
	'POINTS_GROUP_TRANSFER_PM_TITLE'	=> 'Assunto da mensagem pessoal',
	'POINTS_GROUP_TRANSFER_SEL_ERROR'	=> 'Você não pode fazer uma transferência em grupo para os grupos Bots e Convidados!',
	'POINTS_GROUP_TRANSFER_SET'			=> 'Definir',
	'POINTS_GROUP_TRANSFER_SUBSTRACT'	=> 'Subtrair',
	'POINTS_GROUP_TRANSFER_SUCCESS'		=> 'A transferência em grupo foi processada com sucesso.',
	'POINTS_GROUP_TRANSFER_USER'		=> 'Grupo de usuários',
	'POINTS_GROUP_TRANSFER_VALUE'		=> 'Valor',
	'POINTS_IMAGES_MEMBERLIST'			=> 'Exibir uma imagem em vez de pontos no perfil',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN'	=> 'Exibir uma imagem em vez do nome dos pontos nos perfis dos usuários',
	'POINTS_IMAGES_TOPIC'				=> 'Exibir uma imagem em vez de pontos',
	'POINTS_IMAGES_TOPIC_EXPLAIN'		=> 'Exibir uma imagem em tópicos em vez do nome dos pontos',
	'POINTS_LOGS'						=> 'Ativar logs de pontos',
	'POINTS_LOGS_EXPLAIN'				=> 'Permitir que os usuários visualizem os logs de transferência',
	'POINTS_MINIMUM'					=> '&nbsp;Mínimo', // &nbsp; é para alinhamento dos box de entrada de valores dos Pontos Bônus
	'POINTS_MAXIMUM'					=> 'Máximo',
	'POINTS_NAME'						=> 'Pontos',
	'POINTS_NAME_EXPLAIN'				=> 'O nome que deseja exibir em vez da palavra <em>Pontos</em> em seu fórum',
	'POINTS_POLL'						=> 'Pontos por nova enquete',
	'POINTS_POLL_PER_OPTION'			=> 'Pontos por item em uma enquete',
	'POINTS_POST_PER_CHARACTER'			=> 'Pontos por caracteres em novas postagens',
	'POINTS_POST_PER_WORD'				=> 'Pontos por palavras em novas postagens',
	'POINTS_SHOW_PER_PAGE'				=> 'Número de entradas por página',
	'POINTS_SHOW_PER_PAGE_ERROR'		=> 'O número a mostrar por página precisa ser pelo menos de 5 entradas.',
	'POINTS_SHOW_PER_PAGE_EXPLAIN'		=> 'Insira aqui o número de entradas, que devem ser exibidas por página nos registros e no histórico da loteria (min. 5)',
	'POINTS_SMILIES'					=> 'Smilies',
	'POINTS_STATS'						=> 'Exibir estatísticas de pontos no índice',
	'POINTS_STATS_EXPLAIN'				=> 'Exibir estatísticas de pontos na página de índice principal do Fórum',
	'POINTS_TOPIC_PER_CHARACTER'		=> 'Pontos por caractere em novos tópicos',
	'POINTS_TOPIC_PER_WORD'				=> 'Pontos por palavra em novos tópicos',
	'POINTS_TRANSFER'					=> 'Permitir Transferências',
	'POINTS_TRANSFER_EXPLAIN'			=> 'Permitir que os usuários transfiram/doem pontos uns aos outros',
	'POINTS_TRANSFER_FEE'				=> 'Taxa por Transferências',
	'POINTS_TRANSFER_FEE_EXPLAIN'		=> 'Porcentagem que está sendo cobrado por sua transferência',
	'POINTS_TRANSFER_FEE_ERROR'			=> 'Taxa por transferências não pode ser 100% ou maior.',
	'POINTS_TRANSFER_PM'				=> 'Notificar usuário por MP sobre uma transferência',
	'POINTS_TRANSFER_PM_EXPLAIN'		=> 'Permitir que os usuários recebam um aviso por MP, quando alguém enviar pontos para eles',
	'POINTS_WARN'						=> 'Quantidade de pontos a serem subtraídos por Advertência aos usuários (Coloque 0 para desativar esse recurso)',

	'REG_POINTS_BONUS'					=> 'Pontos bônus por se registrar',
	'RESYNC_ATTENTION'					=> 'As seguintes ações não podem ser desfeitas!!',
	'RESYNC_DESC'						=> 'Redefinir pontos de usuários e logs',
	'RESYNC_LOTTERY_HISTORY'			=> 'Redefinir o histórico da Loteria',
	'RESYNC_LOTTERY_HISTORY_CONFIRM'	=> 'Tem certeza, você deseja redefinir o histórico da Loteria?<br />Nota: Esta ação não pode ser desfeita!',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN'	=> 'Isto irá redefinir por completo o histórico da Loteria',
	'RESYNC_POINTS'						=> 'Redefinir pontos de usuários',
	'RESYNC_POINTSLOGS'					=> 'Redefinir logs de usuários',
	'RESYNC_POINTSLOGS_CONFIRM'			=> 'Tem certeza, de que deseja redefinir os logs dos usuários?<br />Nota: Esta ação não pode ser desfeita!',
	'RESYNC_POINTSLOGS_EXPLAIN'			=> 'Excluir todos os logs de usuários',
	'RESYNC_POINTS_CONFIRM'				=> 'Tem certeza, de que deseja redefinir todos os pontos do usuário?<br />Nota: Esta ação não pode ser desfeita!',
	'RESYNC_POINTS_EXPLAIN'				=> 'Redefinir os pontos das contas de todos os usuários para zero',
	'ROBBERY_CHANCE'					=> 'Chance de realizar um roubo bem sucedido',
	'ROBBERY_CHANCE_ERROR'				=> 'A possibilidade de um roubo bem sucedido não pode ser superior a 100% !!',
	'ROBBERY_CHANCE_EXPLAIN'			=> 'Aqui você pode definir a porcentagem para fazer um roubo bem-sucedido (quanto maior o valor, maior a chance de ser bem sucedido)',
	'ROBBERY_CHANCE_MINIMUM'			=> 'A chance de um roubo com sucesso deve ser superior a 0% !!',
	'ROBBERY_ENABLE'					=> 'Ativar módulo de roubo',
	'ROBBERY_ENABLE_EXPLAIN'			=> 'Isso permitirá que os usuários usem o módulo de roubo',
	'ROBBERY_LOOSE'						=> 'Penalidade por roubo fracassado',
	'ROBBERY_LOOSE_ERROR'				=> 'A penalidade por roubo fracassado não pode ser superior a 100% !!',
	'ROBBERY_LOOSE_EXPLAIN'				=> 'Se um roubo falhar, o usuário que tentou roubar perderá x% do valor do roubo pretendido',
	'ROBBERY_LOOSE_MINIMUM'				=> 'A penalidade por roubo fracassado não deve ser de 0%. Você realmente deve ao dar ao ladrão uma punição !!',
	'ROBBERY_MAX_ROB'					=> 'Porcentagem máxima a ser roubada',
	'ROBBERY_MAX_ROB_ERROR'				=> 'Você não pode definir um valor superior a 100% !!',
	'ROBBERY_MAX_ROB_EXPLAIN'			=> 'Este valor é a porcentagem do valor dos pontos dos usuários, que pode ser roubado de uma vez',
	'ROBBERY_MAX_ROB_MINIMUM'			=> 'O valor máximo roubado deve ser superior a 0%. Caso contrário, esta opção não faz sentido!',
	'ROBBERY_NOTIFY'					=> 'Enviar uma Notificação ao usuário roubado',
	'ROBBERY_NOTIFY_EXPLAIN'			=> 'Isso ativará a opção para enviar uma Notificação aos usuários atacados',
	'ROBBERY_OPTIONS'					=> 'Configurações de Roubo',

	'TOP_POINTS'						=> 'Número de membros mais ricos a serem exibidos',
	'TOP_POINTS_EXPLAIN'				=> 'Aqui você pode definir o número de usuários mais ricos que serão exibidos. Funciona em diferentes pontos de vista',

	'UPLIST_ENABLE'						=> 'Ativar a lista do Ultimate Points',
	'UPLIST_ENABLE_EXPLAIN'				=> 'Permitir que os usuários usem a lista do Ultimate Points',
	'USER_POINTS'						=> 'Pontos do Usuário',
	'USER_POINTS_EXPLAIN'				=> 'Quantidade de pontos que o usuário possui',
));
