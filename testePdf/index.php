<?php	

	include_once("../conexao.php");
	$html = '<table border=1 style="  border: 1px solid black; border-collapse: collapse;"';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>#CD</th>';
	$html .= '<th>NOME</th>';
	$html .= '<th>SOBRENOME</th>';
	$html .= '<th>E-MAIL</th>';
	$html .= '<th>CELULAR</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$usuarios = ListarUsuario();
	while($usuario = $usuarios->fetch_array()){
		$html .= '<tr><td>'.$usuario['CD_USUARIO']. "</td>";
		$html .= '<td>'. $usuario['NM_USUARIO']. "</td>";
		$html .= '<td>'.$usuario['NM_SOBRENOME'] . "</td>";
		$html .= '<td>'.$usuario['DS_EMAIL'] . "</td>";
		$html .= '<td>'.$usuario['NR_CELULAR'] . "</td>";
		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório 1 - Lista de Usuário</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>