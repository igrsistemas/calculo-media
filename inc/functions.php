<?php

//DEFINE DADOS COMO NULL
$dados = NULL ;

//VERIFICA SE O BOTÃO NO FORMULÁRIO FOI CLICADO
if(isset($_POST['envio1'])){

	//RECUPERA DOS DADOS ENVIADOS E TIPA ELES COMO INTEIRO
	$semana1 = (int)$_POST['semana1'];
	$semana2 = (int)$_POST['semana2'];
	$semana3 = (int)$_POST['semana3'];
	$semana4 = (int)$_POST['semana4'];

	//SALVA OS DADOS NO ARRAY PHP7 PARA RECUPERAR NA FUNÇÃO MÉDIA
	$dados = [$semana1,$semana2,$semana3,$semana4];
}



// FUNÇÃO MÉDIA
function media($dados){

	//VERIFICA SE HÁ DADOS NO ARRAY
	if(isset($dados)){
		//SOMA O NUMERO DE REGISTROS NO ARRAY NO CASO SÃO 4, MAS SE FOR PASSAR MAIS UM POST NO FORMULÁRIO NÃO PRECISA ALTERAR NADA NA FUNÇÃO
		$numeroRegistros = count($dados) ;

		//SOMA TODOS OS REGISTROS ENVIADOS QUE ESTÃO NO ARRY DADOS
		$dadosSomados    = array_sum($dados);

		//DIVIDI OS DADOS SOMADOS COM O NUMERO DE REGISTROS
		$media = $dadosSomados / $numeroRegistros ;

		//MENSAGEM INFORMANDO OS DADOS
		$mediaDados = "<b>Dados:</b><br>";
		
		//LAÇO DE REPETIÇÃO PARA RETORNAR OS DADOS DE CADA LINHA
		foreach ($dados as $key => $value) {
			$mediaDados .= "<b>Semana ".++$key.": </b>$value <br>";
		}
		//MENSAGENS
		$mediaDados .= "<br><br>";
		$mediaDados .= "<b>Média </b> <br>";
		$mediaDados .= "Sua média de nota ou presença é: <b>$media</b>";
	}else {
		//MENSAGEM DE ERRO
		$mediaDados = "<b>Dados:</b><br>Informe os dados!";
	}
	//RETORNA DADOS
	return $mediaDados ;
}



//VERIFICA SE O BOTÃO FOI CLICADO NO FORMULÁRIO 2
if(isset($_POST['envio2'])){
	//RECUPERA OS DADOS ENVIADOS EM CADA LINHA E TRANSFORMA EM UM ARRAY
	$dadosArray = explode("\n", $_POST['dados']);
}else{
	//ARRAY NULL PARA NÃO APARECER ERROS DE STRING INEXISTENTE
	$dadosArray = NULL ;
}

// FUNÇÃO MÉDIA
function mediaArray($dados){

	//VERIFICA SE HÁ DADOS NO ARRAY
	if(isset($dados)){
		//SOMA O NUMERO DE REGISTROS NO ARRAY NO CASO SÃO 4, MAS SE FOR PASSAR MAIS UM POST NO FORMULÁRIO NÃO PRECISA ALTERAR NADA NA FUNÇÃO
		$numeroRegistros = count($dados) ;

		//SOMA TODOS OS REGISTROS ENVIADOS QUE ESTÃO NO ARRY DADOS
		$dadosSomados    = array_sum($dados);

		//DIVIDI OS DADOS SOMADOS COM O NUMERO DE REGISTROS
		$media = $dadosSomados / $numeroRegistros ;

		//MENSAGEM INFORMANDO OS DADOS
		$mediaDados = "<b>Dados:</b><br>\n";

		foreach ($dados as $key => $value) {
			$mediaDados .= "<b>Linha ".++$key.": </b>$value";
		}
		$mediaDados .= "<br><br>\n";
		$mediaDados .= "<b>Média </b> <br>\n";
		$mediaDados .= "Sua média de nota ou presença é: <b>$media</b>\n";
	}else {
		$mediaDados = "<b>Dados:</b><br>Informe os dados!\n";
	}
	return $mediaDados ;
}



