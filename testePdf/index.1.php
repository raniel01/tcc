
<?php	

	include_once("../conexao.php");
	$html = '<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      ';
	$html .= '<table class="table-white text-center" border=1 style=" padding: 0px;	margin:0px;"';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>#CD</th>';
	$html .= '<th>PRODUTO</th>';
	$html .= '<th>FABRICANTE</th>';
	$html .= '<th>CATEGORIA</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$usuarios = ListarProduto();
	while($usuario = $usuarios->fetch_array()){
		$html .= '<tr><td>'.$usuario['CD_INTERNO']. "</td>";
		$html .= '<td>'. $usuario['NM_PRODUTO']. "</td>";
		$html .= '<td>'.NomeFabricante($usuario['ID_FABRICANTE']). "</td>";
		$html .= '<td>'.NomeCategoria($usuario['ID_CATEGORIA']). "</td>";
		
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
			<h1 style="text-align: center;">Relatório 1 - Lista de Produtos</h1>
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