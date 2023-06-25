<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Board {
        public $largo;
        public $alto;
        public $peso;
        public $material;
        public $tipo;
        public $posicion;
        public $texto_escrito;
        public function __construct($largo, $alto, $peso, $material, $tipo, $posicion, $texto_escrito = "") {
            $this->largo = $largo;
            $this->alto = $alto;
            $this->peso = $peso;
            $this->material = $material;
            $this->tipo = $tipo;
            $this->posicion = $posicion;
            $this->texto_escrito = $texto_escrito;
        }
        public function esCuadrado() {
            if ($this->largo === $this->alto) {
                echo "es cuadrado<br>";
                return true;
            } else {
                echo "no es cuadrado<br>";
                return false;
            }
        }
        public function escribirTexto($texto) {
            $this->texto_escrito = $texto;
            echo "Escribiste: $texto<br>";
            return $texto;
        }
        public function borrarTexto() {
            if (strlen($this->texto_escrito) > 0) {
                $this->texto_escrito = "";
                echo "Texto borrado<br>";
                return true;
            } else {
                echo "No hay nada escrito<br>";
                return false;
            }
        }
        public function mostrarTextoEscrito() {
            echo $this->texto_escrito . "<br>";
            return $this->texto_escrito;
        }
    }
    $pizarron1 = new Board(100, 100, 50, "caoba", "sylvapen", "horizontal");
    $pizarron1->esCuadrado();
    $pizarron1->escribirTexto("Estas escribiendo");
    $pizarron1->mostrarTextoEscrito();
    $pizarron1->borrarTexto();
    $pizarron1->mostrarTextoEscrito();
?>
</body>
</html>