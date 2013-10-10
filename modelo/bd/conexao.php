<?php

class conexao {

    // Nas linhas abaixo voc� poder� colocar as informa��es do Banco de Dados.
    var $host = "localhost"; // Nome ou IP do Servidor
    var $user = "root"; // Usu�rio do Servidor MySQL
    var $senha = "ifb@s@m@ro"; // Senha do Usu�rio MySQL
    var $dbase = "secomp"; // Nome do seu Banco de Dados

    // Criaremos as vari�veis que Utilizaremos no script
    var $query;
    var $link;
    var $resultado;
    

    // Instancia o Objeto para podermos usar
    function MySQL(){
    
    }
  

  // Cria a fun��o para efetuar conex�o ao Banco MySQL (n�o � muito diferente da conex�o padr�o).
  // Veja que abaixo, al�m de criarmos a conex�o, geramos condi��es personalizadas para mensagens de erro.
    function conecta(){
        $this->link = @mysql_connect($this->host,$this->user,$this->senha);
    // Conecta ao Banco de Dados
        if(!$this->link){
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro na conex�o MySQL:";
      print "<b>".mysql_error()."</b>";
      die();
        }elseif(!mysql_select_db($this->dbase,$this->link)){
      // Seleciona o banco ap�s a conex�o
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro em selecionar o Banco:";
      print "<b>".mysql_error()."</b>";
      die();
        }
    }

  // Cria a fun��o para "query" no Banco de Dados
    function sql_query($query){
        $this->conecta();
        $this->query = $query;

    // Conecta e faz a query no MySQL
        if($this->resultado = mysql_query($this->query)){
            $this->desconecta();
            return $this->resultado;
        }else{
      // Caso ocorra um erro, exibe uma mensagem com o Erro
            print "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
      print "<br><br>";
      print "Erro no MySQL: <b>".mysql_error()."</b>";
      die();
            $this->desconecta();
        }        
    }

  // Cria a fun��o para Desconectar do Banco MySQL
    function desconecta(){
        return mysql_close($this->link);
    }
}
?>