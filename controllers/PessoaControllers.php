<?php
// require_once "../models/IPessoa.php";
// require_once "../models/pessoa_juridica.php";
// require_once "../models/pessoa_fisica.php";
// require_once "../models/classes.php";
require "../models/pessoaModel.php"; // require - importa uma vez | require_once - importa toda vez que o arquivo usuários é acessado/chamado.

class PessoasController
{
    private $rota = null;
    public $request = null;
    protected $pessoaModel = null;

    public function __construct()
    {
        $this->pessoaModel = new PessoaModel();
        $this->request = $_REQUEST;
        $this->rota = $this->request['rota'] ?? ""; // se não tiver a palavra rota nos parâmetros da URL informamos vazio.
    }

    // retorna a rota para sabermos qual função utilizar (dadospessoas | obterDadospessoa | excluirpessoa...).
    public function getRota()
    {
        return $this->rota;
    }

    // desconectamos do banco de dados pelo model.
    public function desconectarModel()
    {
        $this->pessoaModel->desconectar();
    }

    // setamos o retorno para o front no formato JSON (javascript - objeto)
    public function setResponseAPI($dados)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dados);
        exit();
    }

    // obtém todos os usuários
    public function listar_pessoas()
    {
        $dados = [];

        $result = $this->pessoaModel->listar();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dados[] = $row;
            }
        }

        $this->setResponseAPI($dados);
    }

    // obtém dados de 1 usuário (EDITAR).
    public function obterDadospessoa()
    {
        $idpessoa = $this->request["id"] ?? 0;

        $dados = [];

        if (!empty($idpessoa) && is_numeric($idpessoa)) {
            $result = $this->pessoaModel->obter($idpessoa);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $dados[] = $row;
                }
            }
        }

        $this->setResponseAPI($dados);
    }

    // apenas mudamos o status o usuário para inativo para dizermos que ele está excluído.
    public function excluirpessoa()
    {
        $idpessoa = $this->request["id"] ?? 0;

        $dados = [
            "error" => 500,
            "mensagem" => "Não foi possível excluir o usuário. Contate o administrados!"
        ];

        if (!empty($idpessoa) && is_numeric($idpessoa)) {
            $result = $this->pessoaModel->excluir($idpessoa);

            if ($result) {
                $dados = [
                    "success" => 201,
                    "mensagem" => "Usuário excluído."
                ];
            }
        }

        $this->setResponseAPI($dados);
    }

    public function salvarAtualizarpessoa()
    {
        $dados = [
            "error" => 500,
            "mensagem" => "Não foi possível salvar o usuário. Contate o administrados!"
        ];

        $idpessoa    = $this->request['id'] ?? 0;

        $nome        =$this->request['nome'] ?? "";
        $email       =$this->request['email'] ?? "";
        $cpf         =$this->request['cpf'] ?? "";
        $rg          =$this->request['rg'] ?? "";
        $genero      =$this->request['genero'] ?? "";
        $rede_social =$this->request['rede_social'] ?? "";
        $status      =$this->request['status'] ?? "";
        $phone       =$this->request['phone'] ?? "";
        $tipo        =$this->request['tipo'] ?? "";
        $cep         =$this->request['cep'] ?? "";

        // ATUALIZAR
        if (!empty($idpessoa) && is_numeric($idpessoa)) {
            $mensagem = "Usuário atualizado com sucesso.";

            $result = $this->pessoaModel->atualizar($idpessoa,$nome, $email,$cpf, $rg, $genero, $rede_social, $status,$phone,$tipo,$cep);
        } else {
            $mensagem = "Usuário cadastrado com sucesso.";

            $result = $this->pessoaModel->cadastrar($nome, $email,$cpf, $rg, $genero, $rede_social, $status,$phone,$tipo,$cep);
            $idpessoa = $result;
        }

        if ($result) {
            $dados = [
                "success" => 201,
                "mensagem" => $mensagem,
                "idpessoa" => $idpessoa,
            ];
        }

        $this->setResponseAPI($dados);
    }
}

// inicializamos (instanciamos) nossa variável (objeto).
$objpessoasController = new PessoasController();

// aqui obtemos nossa rota informada la no frontend (javascript) e conforme a rota informada redirecionamos a ação.
switch ($objpessoasController->getRota()) {
    case "listarTodaspessoas":
            $objpessoasController->listar_pessoas();
        break;
    case "editarpessoa":
            $objpessoasController->obterDadospessoa();
        break;
    case "excluirpessoa":
            $objpessoasController->excluirpessoa();
        break;
    case "salvarAtualizarpessoa":
            $objpessoasController->salvarAtualizarpessoa();
        break;
    default:
            $objpessoasController->setResponseAPI(["erro" => "404", "mensagem" => "Rota inválida ou não encontrada."]);
        break;
}

$objpessoasController->desconectarModel();
    