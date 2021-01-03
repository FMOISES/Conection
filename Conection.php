<?php

/*
 * The MIT License
 *
 * Copyright 2021 moise.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace App;

/**
 * Description of Conection
 *
 * @author moise
 */
class Conection {

    //Configuração de prioritarios da conexão
    private $host = 'localhost';
    private $banco = 'pratica';
    private $user = 'root';
    private $senha = '';

    public function __construct() {
        try {
            $this->Conect();
        } catch (\PDOException $e) {
            echo '<pre>';
            echo $e;
            echo '</pre>';
        }
        //função construtora, executada automaticamento no instanciamento do objeto
    }

    public function __set($name, $value) {
        $this->$name = $value;
        //introduz valores aos atributos privados prioritarios da conexão
    }

    public function __get($name) {
        return $this->$name;
        //retorna o valor existente no atributo do objeto de conexão
    }

    public function Conect() {
        return $conn = new \PDO("mysql:host=$this->host;dbname=$this->banco", $this->user, $this->senha);
        //monta e retorna a conexão
    }
    
}
