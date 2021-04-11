<?php 

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Conection;
	use App\Models\Produto;
	use App\Models\Info;
	
	class IndexController  extends Action{

		public function index(){
			//$this->view->dados = array('sofa', 'cama', 'mesa');

			// criar instancia de conexão
			//$conn = Conection::getDB();

			// instanciar o modelo para manipular dados do banco

			/*$produto = new Produto($conn);

			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
*/
			$this->render('index','layout1');
		}

		public function sobreNos(){
			//$this->view->dados = array('telefone', 'tablet', 'prancha de surf');

			/*$conn = Conection::getDB();

			$info = new Info($conn);

			$informacoes = $info->getInfo();

			$this->view->dados = $informacoes;

			$this->render('sobreNos', 'layout1');*/
		}


	}


?>