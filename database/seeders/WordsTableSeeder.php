<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Option;

class WordsTableSeeder extends Seeder
{
    public function run()
    {
        $words = [
            // Astronomía
            ['word' => 'Cuásar', 'category_id' => 1, 'options' => [
                ['name' => 'Objeto celeste muy brillante y lejano', 'is_correct' => true],
                ['name' => 'Montaña submarina', 'is_correct' => false],
                ['name' => 'Instrumento de navegación', 'is_correct' => false],
                ['name' => 'Tipo de galaxia enana', 'is_correct' => false],
                ['name' => 'Corriente de aire espacial', 'is_correct' => false],
            ]],
            ['word' => 'Nebulosa', 'category_id' => 1, 'options' => [
                ['name' => 'Nube de gas y polvo en el espacio', 'is_correct' => true],
                ['name' => 'Planeta rocoso', 'is_correct' => false],
                ['name' => 'Cinturón de asteroides', 'is_correct' => false],
                ['name' => 'Cráter lunar', 'is_correct' => false],
                ['name' => 'Cometa congelado', 'is_correct' => false],
            ]],
            ['word' => 'Astrolabio', 'category_id' => 1, 'options' => [
                ['name' => 'Instrumento para medir posiciones de estrellas', 'is_correct' => true],
                ['name' => 'Dispositivo para medir terremotos', 'is_correct' => false],
                ['name' => 'Reloj de arena', 'is_correct' => false],
                ['name' => 'Medidor de presión', 'is_correct' => false],
                ['name' => 'Telescopio casero', 'is_correct' => false],
            ]],
            ['word' => 'Cosmogonía', 'category_id' => 1, 'options' => [
                ['name' => 'Estudio del origen del universo', 'is_correct' => true],
                ['name' => 'Estudio de estrellas fugaces', 'is_correct' => false],
                ['name' => 'Formación de montañas', 'is_correct' => false],
                ['name' => 'Observación del clima espacial', 'is_correct' => false],
                ['name' => 'Movimiento de placas tectónicas', 'is_correct' => false],
            ]],
            ['word' => 'Magnetósfera', 'category_id' => 1, 'options' => [
                ['name' => 'Capa magnética que protege un planeta', 'is_correct' => true],
                ['name' => 'Tipo de galaxia espiral', 'is_correct' => false],
                ['name' => 'Corriente de asteroides', 'is_correct' => false],
                ['name' => 'Tormenta solar', 'is_correct' => false],
                ['name' => 'Eclipse de sol', 'is_correct' => false],
            ]],

            // Física
            ['word' => 'Entalpía', 'category_id' => 2, 'options' => [
                ['name' => 'Cantidad de energía en un sistema termodinámico', 'is_correct' => true],
                ['name' => 'Movimiento de fluidos', 'is_correct' => false],
                ['name' => 'Carga eléctrica', 'is_correct' => false],
                ['name' => 'Cantidad de materia', 'is_correct' => false],
                ['name' => 'Velocidad de un cuerpo', 'is_correct' => false],
            ]],
            ['word' => 'Fótón', 'category_id' => 2, 'options' => [
                ['name' => 'Partícula elemental de la luz', 'is_correct' => true],
                ['name' => 'Unidad de carga', 'is_correct' => false],
                ['name' => 'Unidad de masa', 'is_correct' => false],
                ['name' => 'Molécula de agua', 'is_correct' => false],
                ['name' => 'Cálculo de energía', 'is_correct' => false],
            ]],
            ['word' => 'Isótopo', 'category_id' => 2, 'options' => [
                ['name' => 'Átomos con diferente número de neutrones', 'is_correct' => true],
                ['name' => 'Moléculas enlazadas', 'is_correct' => false],
                ['name' => 'Cálculo de volumen', 'is_correct' => false],
                ['name' => 'Elemento gaseoso', 'is_correct' => false],
                ['name' => 'Carga nuclear', 'is_correct' => false],
            ]],
            ['word' => 'Inercia', 'category_id' => 2, 'options' => [
                ['name' => 'Resistencia al cambio de movimiento', 'is_correct' => true],
                ['name' => 'Medición de la fuerza gravitatoria', 'is_correct' => false],
                ['name' => 'Flujo de corriente', 'is_correct' => false],
                ['name' => 'Transmisión de ondas sonoras', 'is_correct' => false],
                ['name' => 'Emisión de radiación', 'is_correct' => false],
            ]],
            ['word' => 'Electrostática', 'category_id' => 2, 'options' => [
                ['name' => 'Estudio de cargas eléctricas en reposo', 'is_correct' => true],
                ['name' => 'Estudio de gases nobles', 'is_correct' => false],
                ['name' => 'Presión en líquidos', 'is_correct' => false],
                ['name' => 'Dispersión de luz', 'is_correct' => false],
                ['name' => 'Dinámica de fluidos', 'is_correct' => false],
            ]],

            // Tecnología
            ['word' => 'Algoritmo', 'category_id' => 3, 'options' => [
                    ['name' => 'Conjunto de instrucciones para resolver un problema', 'is_correct' => true],
                    ['name' => 'Lenguaje de programación', 'is_correct' => false],
                    ['name' => 'Tipo de base de datos', 'is_correct' => false],
                    ['name' => 'Componente de hardware', 'is_correct' => false],
                    ['name' => 'Red informática descentralizada', 'is_correct' => false],
                ]],
                ['word' => 'Blockchain', 'category_id' => 3, 'options' => [
                    ['name' => 'Cadena de bloques digitales que almacenan datos de forma segura', 'is_correct' => true],
                    ['name' => 'Algoritmo de encriptación', 'is_correct' => false],
                    ['name' => 'Tipo de disco duro', 'is_correct' => false],
                    ['name' => 'Lenguaje de inteligencia artificial', 'is_correct' => false],
                    ['name' => 'Proceso de minado de datos', 'is_correct' => false],
                ]],
                ['word' => 'Firmware', 'category_id' => 3, 'options' => [
                    ['name' => 'Software integrado en hardware que controla funciones básicas', 'is_correct' => true],
                    ['name' => 'Sistema operativo', 'is_correct' => false],
                    ['name' => 'Antivirus portátil', 'is_correct' => false],
                    ['name' => 'Memoria RAM de bajo nivel', 'is_correct' => false],
                    ['name' => 'Tipo de red privada', 'is_correct' => false],
                ]],
                ['word' => 'Compilador', 'category_id' => 3, 'options' => [
                    ['name' => 'Programa que traduce código fuente a lenguaje máquina', 'is_correct' => true],
                    ['name' => 'Editor de texto avanzado', 'is_correct' => false],
                    ['name' => 'Depurador de errores', 'is_correct' => false],
                    ['name' => 'Servidor web local', 'is_correct' => false],
                    ['name' => 'Cliente FTP', 'is_correct' => false],
                ]],
                ['word' => 'Latencia', 'category_id' => 3, 'options' => [
                    ['name' => 'Retardo entre una acción y su respuesta en una red', 'is_correct' => true],
                    ['name' => 'Velocidad de descarga máxima', 'is_correct' => false],
                    ['name' => 'Memoria temporal del navegador', 'is_correct' => false],
                    ['name' => 'Ancho de banda residual', 'is_correct' => false],
                    ['name' => 'Tiempo de arranque del sistema', 'is_correct' => false],
                ]],
            // Geografía
                ['word' => 'Archipiélago', 'category_id' => 4, 'options' => [
                    ['name' => 'Conjunto de islas agrupadas', 'is_correct' => true],
                    ['name' => 'Montaña volcánica', 'is_correct' => false],
                    ['name' => 'Río con afluentes', 'is_correct' => false],
                    ['name' => 'Depresión del terreno', 'is_correct' => false],
                    ['name' => 'Zona desértica costera', 'is_correct' => false],
                ]],
                ['word' => 'Estenosfera', 'category_id' => 4, 'options' => [
                    ['name' => 'Capa del manto terrestre parcialmente fundida', 'is_correct' => true],
                    ['name' => 'Capa de ozono exterior', 'is_correct' => false],
                    ['name' => 'Zona fría de la atmósfera', 'is_correct' => false],
                    ['name' => 'Parte externa del núcleo', 'is_correct' => false],
                    ['name' => 'Región helada de los polos', 'is_correct' => false],
                ]],
                ['word' => 'Cuenca hidrográfica', 'category_id' => 4, 'options' => [
                    ['name' => 'Área que drena sus aguas a un río principal', 'is_correct' => true],
                    ['name' => 'Depósito subterráneo de agua', 'is_correct' => false],
                    ['name' => 'Región árida cercana a lagos', 'is_correct' => false],
                    ['name' => 'Zona montañosa con ríos', 'is_correct' => false],
                    ['name' => 'Área cubierta por glaciares', 'is_correct' => false],
                ]],
                ['word' => 'Meridiano', 'category_id' => 4, 'options' => [
                    ['name' => 'Línea imaginaria que une los polos geográficos', 'is_correct' => true],
                    ['name' => 'Curva de nivel del relieve', 'is_correct' => false],
                    ['name' => 'Río subterráneo longitudinal', 'is_correct' => false],
                    ['name' => 'Zona de alta altitud', 'is_correct' => false],
                    ['name' => 'Corriente marina ecuatorial', 'is_correct' => false],
                ]],
                ['word' => 'Istmo', 'category_id' => 4, 'options' => [
                    ['name' => 'Franja estrecha de tierra que une dos continentes o masas terrestres', 'is_correct' => true],
                    ['name' => 'Canal artificial navegable', 'is_correct' => false],
                    ['name' => 'Elevación continental submarina', 'is_correct' => false],
                    ['name' => 'Cordillera cercana al mar', 'is_correct' => false],
                    ['name' => 'Estuario fluvial', 'is_correct' => false],
                ]],
            //Historia
                ['word' => 'Feudalismo', 'category_id' => 5, 'options' => [
                    ['name' => 'Sistema político y social de la Edad Media basado en la posesión de tierras', 'is_correct' => true],
                    ['name' => 'Movimiento filosófico de la antigüedad', 'is_correct' => false],
                    ['name' => 'Confederación tribal asiática', 'is_correct' => false],
                    ['name' => 'Periodo de expansión islámica', 'is_correct' => false],
                    ['name' => 'Tipo de esclavitud romana', 'is_correct' => false],
                ]],
                ['word' => 'Ilustración', 'category_id' => 5, 'options' => [
                    ['name' => 'Movimiento intelectual del siglo XVIII que promovía la razón y la ciencia', 'is_correct' => true],
                    ['name' => 'Reforma del calendario gregoriano', 'is_correct' => false],
                    ['name' => 'Campaña militar napoleónica', 'is_correct' => false],
                    ['name' => 'Sistema de votación medieval', 'is_correct' => false],
                    ['name' => 'Estilo artístico barroco', 'is_correct' => false],
                ]],
                ['word' => 'Helenismo', 'category_id' => 5, 'options' => [
                    ['name' => 'Difusión de la cultura griega tras la conquista de Alejandro Magno', 'is_correct' => true],
                    ['name' => 'Periodo de la guerra de Troya', 'is_correct' => false],
                    ['name' => 'Reinado de los emperadores romanos', 'is_correct' => false],
                    ['name' => 'Sistema político ateniense', 'is_correct' => false],
                    ['name' => 'Religión politeísta persa', 'is_correct' => false],
                ]],
                ['word' => 'Edad de Bronce', 'category_id' => 5, 'options' => [
                    ['name' => 'Periodo prehistórico donde se usaba bronce para herramientas y armas', 'is_correct' => true],
                    ['name' => 'Era de los emperadores orientales', 'is_correct' => false],
                    ['name' => 'Periodo de revolución agrícola', 'is_correct' => false],
                    ['name' => 'Etapa de domesticación de animales', 'is_correct' => false],
                    ['name' => 'Siglo de los descubrimientos', 'is_correct' => false],
                ]],
                ['word' => 'Tratado de Tordesillas', 'category_id' => 5, 'options' => [
                    ['name' => 'Acuerdo entre España y Portugal para dividirse las tierras descubiertas', 'is_correct' => true],
                    ['name' => 'Fin de la guerra de los cien años', 'is_correct' => false],
                    ['name' => 'Inicio del renacimiento', 'is_correct' => false],
                    ['name' => 'Separación de la Iglesia y el Estado', 'is_correct' => false],
                    ['name' => 'Firma de la Magna Carta', 'is_correct' => false],
                ]],
        ];

        foreach ($words as $data) {
            $word = Word::create([
                'name' => $data['word'],
                'category_id' => $data['category_id'],
            ]);

            foreach ($data['options'] as $option) {
                Option::create([
                    'word_id' => $word->id,
                    'name' => $option['name'],
                    'is_correct' => $option['is_correct'],
                ]);
            }
        }
    }
}
