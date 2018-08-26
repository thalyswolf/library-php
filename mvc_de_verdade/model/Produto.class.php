<?php
  class Produtos extends Conexao{
    function __construct(){
      parent::__construct();
    }

    function getProdutos(){
      $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cat_id";
      //$query .= "ORDER BY pro_id DESC";
      $this->executeSQL($query);
      $this->getLista();
    }

    private function getLista(){
      $i = 1;
      while ($lista = $this->listarDados()):
      $this->itens[$i]=array(
        'pro_id' => $lista['pro_id'],
        'pro_nome' => $lista['pro_nome'],
        'pro_desc' => $lista['pro_desc'],
        'pro_peso' => $lista['pro_peso'],
        'pro_valor' => $lista['pro_valor'],
        'pro_altura' => $lista['pro_altura'],
        'pro_largura' => $lista['pro_largura'],
        'pro_comprimento' => $lista['pro_comprimento'],
        'pro_img' => $lista['pro_img'],
        'pro_slug' => $lista['pro_slug'],
        //'pro_ref' => $lista['pro_ref'],
        'cate_nome' => $lista['cate_nome'],
        'cat_id' => $lista['cat_id']
      );
      $i++;
      endwhile;
    }
  }
 ?>
