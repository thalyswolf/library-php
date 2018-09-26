<?php
class Config{
  //INFORMAÇÕES BASICAS DO SITE
    const SITE_URL = "http://191.253.110.89:8081/";
    const SITE_PASTA = "suporte";
    const SITE_NOME = "Suporte Toolbox";
    const SITE_EMAIL_ADMIN = "thalyswolf01@gmail.com";
    const SALT_KEY = "STADS_SAFSK_THALYS_FODA";
  //INFORMAÇÕES DO BANCO DE DADOS
    const DB_HOST = 'localhost',
          DB_USER = 'root',
          DB_PASSWORD = '',
          DB_NAME = "suporte",
          DB_PREFIX = '';

  //INFORMAÇÕES PARA O PHPMAILER
    const EMAIL_USER = "thalyswolf01@gmail.com";
    const EMAIL_NOME = "Contato";
    const EMAIL_PASSWORD = "*******";
    const EMAIL_PORT = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_COPY = 'thalyswolf01@gmail.com';
}
 ?>
