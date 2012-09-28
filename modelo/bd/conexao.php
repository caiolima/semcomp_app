<<<<<<< HEAD
<?php

class conexao {

    // Nas linhas abaixo você poderá colocar as informações do Banco de Dados.
    var $host = "localhost"; // Nome ou IP do Servidor
    var $user = "root"; // Usuário do Servidor MySQL
    var $senha = ""; // Senha do Usuário MySQL
    var $dbase = "secomp"; // Nome do seu Banco de Dados

    // Criaremos as variáveis que Utilizaremos no script
    var $query;
    var $link;
    var $resultado;
    

    // Instancia o Objeto para podermos usar
    function MySQL(){
    
    }
  

  // Cria a função para efetuar conexão ao Banco MySQL (não é muito diferente da conexão padrão).
  // Veja que abaixo, além de criarmos a conexão, geramos condições personalizadas para mensagens de erro.
    function conecta(){
        $this->link = @mysql_connect($this->host,$this->user,$this->senha);
    // Conecta ao Banco de Dados
        if(!$this->link){
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro na conexão MySQL:";
      print "<b>".mysql_error()."</b>";
      die();
        }elseif(!mysql_select_db($this->dbase,$this->link)){
      // Seleciona o banco após a conexão
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro em selecionar o Banco:";
      print "<b>".mysql_error()."</b>";
      die();
        }
    }

  // Cria a função para "query" no Banco de Dados
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

  // Cria a função para Desconectar do Banco MySQL
    function desconecta(){
        return mysql_close($this->link);
    }
}

=======
<?php

class conexao {

    // Nas linhas abaixo você poderá colocar as informações do Banco de Dados.
    var $host = "localhost"; // Nome ou IP do Servidor
    var $user = "root"; // Usuário do Servidor MySQL
    var $senha = ""; // Senha do Usuário MySQL
    var $dbase = "secomp"; // Nome do seu Banco de Dados

    // Criaremos as variáveis que Utilizaremos no script
    var $query;
    var $link;
    var $resultado;
    

    // Instancia o Objeto para podermos usar
    function MySQL(){
    
    }
  

  // Cria a função para efetuar conexão ao Banco MySQL (não é muito diferente da conexão padrão).
  // Veja que abaixo, além de criarmos a conexão, geramos condições personalizadas para mensagens de erro.
    function conecta(){
        $this->link = @mysql_connect($this->host,$this->user,$this->senha);
    // Conecta ao Banco de Dados
        if(!$this->link){
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro na conexão MySQL:";
      print "<b>".mysql_error()."</b>";
      die();
        }elseif(!mysql_select_db($this->dbase,$this->link)){
      // Seleciona o banco após a conexão
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro em selecionar o Banco:";
      print "<b>".mysql_error()."</b>";
      die();
        }
    }

  // Cria a função para "query" no Banco de Dados
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

  // Cria a função para Desconectar do Banco MySQL
    function desconecta(){
        return mysql_close($this->link);
    }
}

>>>>>>> branch 'master' of https://github.com/caiolima/semcomp_app.git
?>
