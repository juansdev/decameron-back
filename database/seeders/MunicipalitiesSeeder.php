<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [[
            'id' => 1,
            'department_id' => 1,
            'code' => 1,
            'name' => 'MEDELLIN'
        ], [
            'id' => 2,
            'department_id' => 1,
            'code' => 2,
            'name' => 'ABEJORRAL'
        ], [
            'id' => 3,
            'department_id' => 1,
            'code' => 4,
            'name' => 'ABRIAQUI'
        ], [
            'id' => 4,
            'department_id' => 1,
            'code' => 21,
            'name' => 'ALEJANDRIA'
        ], [
            'id' => 5,
            'department_id' => 1,
            'code' => 30,
            'name' => 'AMAGA'
        ], [
            'id' => 6,
            'department_id' => 1,
            'code' => 31,
            'name' => 'AMALFI'
        ], [
            'id' => 7,
            'department_id' => 1,
            'code' => 34,
            'name' => 'ANDES'
        ], [
            'id' => 8,
            'department_id' => 1,
            'code' => 36,
            'name' => 'ANGELOPOLIS'
        ], [
            'id' => 9,
            'department_id' => 1,
            'code' => 38,
            'name' => 'ANGOSTURA'
        ], [
            'id' => 10,
            'department_id' => 1,
            'code' => 40,
            'name' => 'ANORI'
        ], [
            'id' => 11,
            'department_id' => 1,
            'code' => 42,
            'name' => 'ANTIOQUIA'
        ], [
            'id' => 12,
            'department_id' => 1,
            'code' => 44,
            'name' => 'ANZA'
        ], [
            'id' => 13,
            'department_id' => 1,
            'code' => 45,
            'name' => 'APARTADO'
        ], [
            'id' => 14,
            'department_id' => 1,
            'code' => 51,
            'name' => 'ARBOLETES'
        ], [
            'id' => 15,
            'department_id' => 1,
            'code' => 55,
            'name' => 'ARGELIA'
        ], [
            'id' => 16,
            'department_id' => 1,
            'code' => 59,
            'name' => 'ARMENIA'
        ], [
            'id' => 17,
            'department_id' => 1,
            'code' => 79,
            'name' => 'BARBOSA'
        ], [
            'id' => 18,
            'department_id' => 1,
            'code' => 86,
            'name' => 'BELMIRA'
        ], [
            'id' => 19,
            'department_id' => 1,
            'code' => 88,
            'name' => 'BELLO'
        ], [
            'id' => 20,
            'department_id' => 1,
            'code' => 91,
            'name' => 'BETANIA'
        ], [
            'id' => 21,
            'department_id' => 1,
            'code' => 93,
            'name' => 'BETULIA'
        ], [
            'id' => 22,
            'department_id' => 1,
            'code' => 101,
            'name' => 'BOLIVAR'
        ], [
            'id' => 23,
            'department_id' => 1,
            'code' => 107,
            'name' => 'BRICEÑO'
        ], [
            'id' => 24,
            'department_id' => 1,
            'code' => 113,
            'name' => 'BURITICA'
        ], [
            'id' => 25,
            'department_id' => 1,
            'code' => 120,
            'name' => 'CACERES'
        ], [
            'id' => 26,
            'department_id' => 1,
            'code' => 125,
            'name' => 'CAICEDO'
        ], [
            'id' => 27,
            'department_id' => 1,
            'code' => 129,
            'name' => 'CALDAS'
        ], [
            'id' => 28,
            'department_id' => 1,
            'code' => 134,
            'name' => 'CAMPAMENTO'
        ], [
            'id' => 29,
            'department_id' => 1,
            'code' => 138,
            'name' => 'CAÑASGORDAS'
        ], [
            'id' => 30,
            'department_id' => 1,
            'code' => 142,
            'name' => 'CARACOLI'
        ], [
            'id' => 31,
            'department_id' => 1,
            'code' => 145,
            'name' => 'CARAMANTA'
        ], [
            'id' => 32,
            'department_id' => 1,
            'code' => 147,
            'name' => 'CAREPA'
        ], [
            'id' => 33,
            'department_id' => 1,
            'code' => 148,
            'name' => 'CARMEN DE VIBORAL'
        ], [
            'id' => 34,
            'department_id' => 1,
            'code' => 150,
            'name' => 'CAROLINA'
        ], [
            'id' => 35,
            'department_id' => 1,
            'code' => 154,
            'name' => 'CAUCASIA'
        ], [
            'id' => 36,
            'department_id' => 1,
            'code' => 172,
            'name' => 'CHIGORODO'
        ], [
            'id' => 37,
            'department_id' => 1,
            'code' => 190,
            'name' => 'CISNEROS'
        ], [
            'id' => 38,
            'department_id' => 1,
            'code' => 197,
            'name' => 'COCORNA'
        ], [
            'id' => 39,
            'department_id' => 1,
            'code' => 206,
            'name' => 'CONCEPCION'
        ], [
            'id' => 40,
            'department_id' => 1,
            'code' => 209,
            'name' => 'CONCORDIA'
        ], [
            'id' => 41,
            'department_id' => 1,
            'code' => 212,
            'name' => 'COPACABANA'
        ], [
            'id' => 42,
            'department_id' => 1,
            'code' => 234,
            'name' => 'DABEIBA'
        ], [
            'id' => 43,
            'department_id' => 1,
            'code' => 237,
            'name' => 'DON MATIAS'
        ], [
            'id' => 44,
            'department_id' => 1,
            'code' => 240,
            'name' => 'EBEJICO'
        ], [
            'id' => 45,
            'department_id' => 1,
            'code' => 250,
            'name' => 'EL BAGRE'
        ], [
            'id' => 46,
            'department_id' => 1,
            'code' => 264,
            'name' => 'ENTRERRIOS'
        ], [
            'id' => 47,
            'department_id' => 1,
            'code' => 266,
            'name' => 'ENVIGADO'
        ], [
            'id' => 48,
            'department_id' => 1,
            'code' => 282,
            'name' => 'FREDONIA'
        ], [
            'id' => 49,
            'department_id' => 1,
            'code' => 284,
            'name' => 'FRONTINO'
        ], [
            'id' => 50,
            'department_id' => 1,
            'code' => 306,
            'name' => 'GIRALDO'
        ], [
            'id' => 51,
            'department_id' => 1,
            'code' => 308,
            'name' => 'GIRARDOTA'
        ], [
            'id' => 52,
            'department_id' => 1,
            'code' => 310,
            'name' => 'GOMEZ PLATA'
        ], [
            'id' => 53,
            'department_id' => 1,
            'code' => 313,
            'name' => 'GRANADA'
        ], [
            'id' => 54,
            'department_id' => 1,
            'code' => 315,
            'name' => 'GUADALUPE'
        ], [
            'id' => 55,
            'department_id' => 1,
            'code' => 318,
            'name' => 'GUARNE'
        ], [
            'id' => 56,
            'department_id' => 1,
            'code' => 321,
            'name' => 'GUATAPE'
        ], [
            'id' => 57,
            'department_id' => 1,
            'code' => 347,
            'name' => 'HELICONIA'
        ], [
            'id' => 58,
            'department_id' => 1,
            'code' => 353,
            'name' => 'HISPANIA'
        ], [
            'id' => 59,
            'department_id' => 1,
            'code' => 360,
            'name' => 'ITAGUI'
        ], [
            'id' => 60,
            'department_id' => 1,
            'code' => 361,
            'name' => 'ITUANGO'
        ], [
            'id' => 61,
            'department_id' => 1,
            'code' => 364,
            'name' => 'JARDIN'
        ], [
            'id' => 62,
            'department_id' => 1,
            'code' => 368,
            'name' => 'JERICO'
        ], [
            'id' => 63,
            'department_id' => 1,
            'code' => 376,
            'name' => 'LA CEJA'
        ], [
            'id' => 64,
            'department_id' => 1,
            'code' => 380,
            'name' => 'LA ESTRELLA'
        ], [
            'id' => 65,
            'department_id' => 1,
            'code' => 390,
            'name' => 'LA PINTADA'
        ], [
            'id' => 66,
            'department_id' => 1,
            'code' => 400,
            'name' => 'LA UNION'
        ], [
            'id' => 67,
            'department_id' => 1,
            'code' => 411,
            'name' => 'LIBORINA'
        ], [
            'id' => 68,
            'department_id' => 1,
            'code' => 425,
            'name' => 'MACEO'
        ], [
            'id' => 69,
            'department_id' => 1,
            'code' => 440,
            'name' => 'MARINILLA'
        ], [
            'id' => 70,
            'department_id' => 1,
            'code' => 467,
            'name' => 'MONTEBELLO'
        ], [
            'id' => 71,
            'department_id' => 1,
            'code' => 475,
            'name' => 'MURINDO'
        ], [
            'id' => 72,
            'department_id' => 1,
            'code' => 480,
            'name' => 'MUTATA'
        ], [
            'id' => 73,
            'department_id' => 1,
            'code' => 483,
            'name' => 'NARIÑO'
        ], [
            'id' => 74,
            'department_id' => 1,
            'code' => 490,
            'name' => 'NECOCLI'
        ], [
            'id' => 75,
            'department_id' => 1,
            'code' => 495,
            'name' => 'NECHI'
        ], [
            'id' => 76,
            'department_id' => 1,
            'code' => 501,
            'name' => 'OLAYA'
        ], [
            'id' => 77,
            'department_id' => 1,
            'code' => 541,
            'name' => 'PEÑOL'
        ], [
            'id' => 78,
            'department_id' => 1,
            'code' => 543,
            'name' => 'PEQUE'
        ], [
            'id' => 79,
            'department_id' => 1,
            'code' => 576,
            'name' => 'PUEBLORRICO'
        ], [
            'id' => 80,
            'department_id' => 1,
            'code' => 579,
            'name' => 'PUERTO BERRIO'
        ], [
            'id' => 81,
            'department_id' => 1,
            'code' => 585,
            'name' => 'PUERTO NARE (LA MAGDALENA)'
        ], [
            'id' => 82,
            'department_id' => 1,
            'code' => 591,
            'name' => 'PUERTO TRIUNFO'
        ], [
            'id' => 83,
            'department_id' => 1,
            'code' => 604,
            'name' => 'REMEDIOS'
        ], [
            'id' => 84,
            'department_id' => 1,
            'code' => 607,
            'name' => 'RETIRO'
        ], [
            'id' => 85,
            'department_id' => 1,
            'code' => 615,
            'name' => 'RIONEGRO'
        ], [
            'id' => 86,
            'department_id' => 1,
            'code' => 628,
            'name' => 'SABANALARGA'
        ], [
            'id' => 87,
            'department_id' => 1,
            'code' => 631,
            'name' => 'SABANETA'
        ], [
            'id' => 88,
            'department_id' => 1,
            'code' => 642,
            'name' => 'SALGAR'
        ], [
            'id' => 89,
            'department_id' => 1,
            'code' => 647,
            'name' => 'SAN ANDRES'
        ], [
            'id' => 90,
            'department_id' => 1,
            'code' => 649,
            'name' => 'SAN CARLOS'
        ], [
            'id' => 91,
            'department_id' => 1,
            'code' => 652,
            'name' => 'SAN FRANCISCO'
        ], [
            'id' => 92,
            'department_id' => 1,
            'code' => 656,
            'name' => 'SAN JERONIMO'
        ], [
            'id' => 93,
            'department_id' => 1,
            'code' => 658,
            'name' => 'SAN JOSE DE LA MONTAÑA'
        ], [
            'id' => 94,
            'department_id' => 1,
            'code' => 659,
            'name' => 'SAN JUAN DE URABA'
        ], [
            'id' => 95,
            'department_id' => 1,
            'code' => 660,
            'name' => 'SAN LUIS'
        ], [
            'id' => 96,
            'department_id' => 1,
            'code' => 664,
            'name' => 'SAN PEDRO'
        ], [
            'id' => 97,
            'department_id' => 1,
            'code' => 665,
            'name' => 'SAN PEDRO DE URABA'
        ], [
            'id' => 98,
            'department_id' => 1,
            'code' => 667,
            'name' => 'SAN RAFAEL'
        ], [
            'id' => 99,
            'department_id' => 1,
            'code' => 670,
            'name' => 'SAN ROQUE'
        ], [
            'id' => 100,
            'department_id' => 1,
            'code' => 674,
            'name' => 'SAN VICENTE'
        ], [
            'id' => 101,
            'department_id' => 1,
            'code' => 679,
            'name' => 'SANTA BARBARA'
        ], [
            'id' => 102,
            'department_id' => 1,
            'code' => 686,
            'name' => 'SANTA ROSA DE OSOS'
        ], [
            'id' => 103,
            'department_id' => 1,
            'code' => 690,
            'name' => 'SANTO DOMINGO'
        ], [
            'id' => 104,
            'department_id' => 1,
            'code' => 697,
            'name' => 'SANTUARIO'
        ], [
            'id' => 105,
            'department_id' => 1,
            'code' => 736,
            'name' => 'SEGOVIA'
        ], [
            'id' => 106,
            'department_id' => 1,
            'code' => 756,
            'name' => 'SONSON'
        ], [
            'id' => 107,
            'department_id' => 1,
            'code' => 761,
            'name' => 'SOPETRAN'
        ], [
            'id' => 108,
            'department_id' => 1,
            'code' => 789,
            'name' => 'TAMESIS'
        ], [
            'id' => 109,
            'department_id' => 1,
            'code' => 790,
            'name' => 'TARAZA'
        ], [
            'id' => 110,
            'department_id' => 1,
            'code' => 792,
            'name' => 'TARSO'
        ], [
            'id' => 111,
            'department_id' => 1,
            'code' => 809,
            'name' => 'TITIRIBI'
        ], [
            'id' => 112,
            'department_id' => 1,
            'code' => 819,
            'name' => 'TOLEDO'
        ], [
            'id' => 113,
            'department_id' => 1,
            'code' => 837,
            'name' => 'TURBO'
        ], [
            'id' => 114,
            'department_id' => 1,
            'code' => 842,
            'name' => 'URAMITA'
        ], [
            'id' => 115,
            'department_id' => 1,
            'code' => 847,
            'name' => 'URRAO'
        ], [
            'id' => 116,
            'department_id' => 1,
            'code' => 854,
            'name' => 'VALDIVIA'
        ], [
            'id' => 117,
            'department_id' => 1,
            'code' => 856,
            'name' => 'VALPARAISO'
        ], [
            'id' => 118,
            'department_id' => 1,
            'code' => 858,
            'name' => 'VEGACHI'
        ], [
            'id' => 119,
            'department_id' => 1,
            'code' => 861,
            'name' => 'VENECIA'
        ], [
            'id' => 120,
            'department_id' => 1,
            'code' => 873,
            'name' => 'VIGIA DEL FUERTE'
        ], [
            'id' => 121,
            'department_id' => 1,
            'code' => 885,
            'name' => 'YALI'
        ], [
            'id' => 122,
            'department_id' => 1,
            'code' => 887,
            'name' => 'YARUMAL'
        ], [
            'id' => 123,
            'department_id' => 1,
            'code' => 890,
            'name' => 'YOLOMBO'
        ], [
            'id' => 124,
            'department_id' => 1,
            'code' => 893,
            'name' => 'YONDO'
        ], [
            'id' => 125,
            'department_id' => 1,
            'code' => 895,
            'name' => 'ZARAGOZA'
        ], [
            'id' => 126,
            'department_id' => 2,
            'code' => 1,
            'name' => 'BARRANQUILLA (DISTRITO ESPECIAL INDUSTRIAL Y PORTUARIO DE BARRANQUILLA)'
        ], [
            'id' => 127,
            'department_id' => 2,
            'code' => 78,
            'name' => 'BARANOA'
        ], [
            'id' => 128,
            'department_id' => 2,
            'code' => 137,
            'name' => 'CAMPO DE LA CRUZ'
        ], [
            'id' => 129,
            'department_id' => 2,
            'code' => 141,
            'name' => 'CANDELARIA'
        ], [
            'id' => 130,
            'department_id' => 2,
            'code' => 296,
            'name' => 'GALAPA'
        ], [
            'id' => 131,
            'department_id' => 2,
            'code' => 372,
            'name' => 'JUAN DE ACOSTA'
        ], [
            'id' => 132,
            'department_id' => 2,
            'code' => 421,
            'name' => 'LURUACO'
        ], [
            'id' => 133,
            'department_id' => 2,
            'code' => 433,
            'name' => 'MALAMBO'
        ], [
            'id' => 134,
            'department_id' => 2,
            'code' => 436,
            'name' => 'MANATI'
        ], [
            'id' => 135,
            'department_id' => 2,
            'code' => 520,
            'name' => 'PALMAR DE VARELA'
        ], [
            'id' => 136,
            'department_id' => 2,
            'code' => 549,
            'name' => 'PIOJO'
        ], [
            'id' => 137,
            'department_id' => 2,
            'code' => 558,
            'name' => 'POLO NUEVO'
        ], [
            'id' => 138,
            'department_id' => 2,
            'code' => 560,
            'name' => 'PONEDERA'
        ], [
            'id' => 139,
            'department_id' => 2,
            'code' => 573,
            'name' => 'PUERTO COLOMBIA'
        ], [
            'id' => 140,
            'department_id' => 2,
            'code' => 606,
            'name' => 'REPELON'
        ], [
            'id' => 141,
            'department_id' => 2,
            'code' => 634,
            'name' => 'SABANAGRANDE'
        ], [
            'id' => 142,
            'department_id' => 2,
            'code' => 638,
            'name' => 'SABANALARGA'
        ], [
            'id' => 143,
            'department_id' => 2,
            'code' => 675,
            'name' => 'SANTA LUCIA'
        ], [
            'id' => 144,
            'department_id' => 2,
            'code' => 685,
            'name' => 'SANTO TOMAS'
        ], [
            'id' => 145,
            'department_id' => 2,
            'code' => 758,
            'name' => 'SOLEDAD'
        ], [
            'id' => 146,
            'department_id' => 2,
            'code' => 770,
            'name' => 'SUAN'
        ], [
            'id' => 147,
            'department_id' => 2,
            'code' => 832,
            'name' => 'TUBARA'
        ], [
            'id' => 148,
            'department_id' => 2,
            'code' => 849,
            'name' => 'USIACURI'
        ], [
            'id' => 149,
            'department_id' => 3,
            'code' => 1,
            'name' => 'Santa Fe de Bogotá'
        ], [
            'id' => 150,
            'department_id' => 3,
            'code' => 1,
            'name' => 'USAQUEN'
        ], [
            'id' => 151,
            'department_id' => 3,
            'code' => 2,
            'name' => 'CHAPINERO'
        ], [
            'id' => 152,
            'department_id' => 3,
            'code' => 3,
            'name' => 'SANTA FE'
        ], [
            'id' => 153,
            'department_id' => 3,
            'code' => 4,
            'name' => 'SAN CRISTOBAL'
        ], [
            'id' => 154,
            'department_id' => 3,
            'code' => 5,
            'name' => 'USME'
        ], [
            'id' => 155,
            'department_id' => 3,
            'code' => 6,
            'name' => 'TUNJUELITO'
        ], [
            'id' => 156,
            'department_id' => 3,
            'code' => 7,
            'name' => 'BOSA'
        ], [
            'id' => 157,
            'department_id' => 3,
            'code' => 8,
            'name' => 'KENNEDY'
        ], [
            'id' => 158,
            'department_id' => 3,
            'code' => 9,
            'name' => 'FONTIBON'
        ], [
            'id' => 159,
            'department_id' => 3,
            'code' => 10,
            'name' => 'ENGATIVA'
        ], [
            'id' => 160,
            'department_id' => 3,
            'code' => 11,
            'name' => 'SUBA'
        ], [
            'id' => 161,
            'department_id' => 3,
            'code' => 12,
            'name' => 'BARRIOS UNIDOS'
        ], [
            'id' => 162,
            'department_id' => 3,
            'code' => 13,
            'name' => 'TEUSAQUILLO'
        ], [
            'id' => 163,
            'department_id' => 3,
            'code' => 14,
            'name' => 'MARTIRES'
        ], [
            'id' => 164,
            'department_id' => 3,
            'code' => 15,
            'name' => 'ANTONIO NARIÑO'
        ], [
            'id' => 165,
            'department_id' => 3,
            'code' => 16,
            'name' => 'PUENTE ARANDA'
        ], [
            'id' => 166,
            'department_id' => 3,
            'code' => 17,
            'name' => 'CANDELARIA'
        ], [
            'id' => 167,
            'department_id' => 3,
            'code' => 18,
            'name' => 'RAFAEL URIBE'
        ], [
            'id' => 168,
            'department_id' => 3,
            'code' => 19,
            'name' => 'CIUDAD BOLIVAR'
        ], [
            'id' => 169,
            'department_id' => 3,
            'code' => 20,
            'name' => 'SUMAPAZ'
        ], [
            'id' => 170,
            'department_id' => 4,
            'code' => 1,
            'name' => 'CARTAGENA (DISTRITO TURISTICO Y CULTURAL DE CARTAGENA)'
        ], [
            'id' => 171,
            'department_id' => 4,
            'code' => 6,
            'name' => 'ACHI'
        ], [
            'id' => 172,
            'department_id' => 4,
            'code' => 30,
            'name' => 'ALTOS DEL ROSARIO'
        ], [
            'id' => 173,
            'department_id' => 4,
            'code' => 42,
            'name' => 'ARENAL'
        ], [
            'id' => 174,
            'department_id' => 4,
            'code' => 52,
            'name' => 'ARJONA'
        ], [
            'id' => 175,
            'department_id' => 4,
            'code' => 62,
            'name' => 'ARROYOHONDO'
        ], [
            'id' => 176,
            'department_id' => 4,
            'code' => 74,
            'name' => 'BARRANCO DE LOBA'
        ], [
            'id' => 177,
            'department_id' => 4,
            'code' => 140,
            'name' => 'CALAMAR'
        ], [
            'id' => 178,
            'department_id' => 4,
            'code' => 160,
            'name' => 'CANTAGALLO'
        ], [
            'id' => 179,
            'department_id' => 4,
            'code' => 188,
            'name' => 'CICUCO'
        ], [
            'id' => 180,
            'department_id' => 4,
            'code' => 212,
            'name' => 'CORDOBA'
        ], [
            'id' => 181,
            'department_id' => 4,
            'code' => 222,
            'name' => 'CLEMENCIA'
        ], [
            'id' => 182,
            'department_id' => 4,
            'code' => 244,
            'name' => 'EL CARMEN DE BOLIVAR'
        ], [
            'id' => 183,
            'department_id' => 4,
            'code' => 248,
            'name' => 'EL GUAMO'
        ], [
            'id' => 184,
            'department_id' => 4,
            'code' => 268,
            'name' => 'EL PEÑON'
        ], [
            'id' => 185,
            'department_id' => 4,
            'code' => 300,
            'name' => 'HATILLO DE LOBA'
        ], [
            'id' => 186,
            'department_id' => 4,
            'code' => 430,
            'name' => 'MAGANGUE'
        ], [
            'id' => 187,
            'department_id' => 4,
            'code' => 433,
            'name' => 'MAHATES'
        ], [
            'id' => 188,
            'department_id' => 4,
            'code' => 440,
            'name' => 'MARGARITA'
        ], [
            'id' => 189,
            'department_id' => 4,
            'code' => 442,
            'name' => 'MARIA LA BAJA'
        ], [
            'id' => 190,
            'department_id' => 4,
            'code' => 458,
            'name' => 'MONTECRISTO'
        ], [
            'id' => 191,
            'department_id' => 4,
            'code' => 468,
            'name' => 'MOMPOS'
        ], [
            'id' => 192,
            'department_id' => 4,
            'code' => 473,
            'name' => 'MORALES'
        ], [
            'id' => 193,
            'department_id' => 4,
            'code' => 549,
            'name' => 'PINILLOS'
        ], [
            'id' => 194,
            'department_id' => 4,
            'code' => 580,
            'name' => 'REGIDOR'
        ], [
            'id' => 195,
            'department_id' => 4,
            'code' => 600,
            'name' => 'RIO VIEJO'
        ], [
            'id' => 196,
            'department_id' => 4,
            'code' => 620,
            'name' => 'SAN CRISTOBAL'
        ], [
            'id' => 197,
            'department_id' => 4,
            'code' => 647,
            'name' => 'SAN ESTANISLAO'
        ], [
            'id' => 198,
            'department_id' => 4,
            'code' => 650,
            'name' => 'SAN FERNANDO'
        ], [
            'id' => 199,
            'department_id' => 4,
            'code' => 654,
            'name' => 'SAN JACINTO'
        ], [
            'id' => 200,
            'department_id' => 4,
            'code' => 655,
            'name' => 'SAN JACINTO DEL CAUCA'
        ], [
            'id' => 201,
            'department_id' => 4,
            'code' => 657,
            'name' => 'SAN JUAN NEPOMUCENO'
        ], [
            'id' => 202,
            'department_id' => 4,
            'code' => 667,
            'name' => 'SAN MARTIN DE LOBA'
        ], [
            'id' => 203,
            'department_id' => 4,
            'code' => 670,
            'name' => 'SAN PABLO'
        ], [
            'id' => 204,
            'department_id' => 4,
            'code' => 673,
            'name' => 'SANTA CATALINA'
        ], [
            'id' => 205,
            'department_id' => 4,
            'code' => 683,
            'name' => 'SANTA ROSA'
        ], [
            'id' => 206,
            'department_id' => 4,
            'code' => 688,
            'name' => 'SANTA ROSA DEL SUR'
        ], [
            'id' => 207,
            'department_id' => 4,
            'code' => 744,
            'name' => 'SIMITI'
        ], [
            'id' => 208,
            'department_id' => 4,
            'code' => 760,
            'name' => 'SOPLAVIENTO'
        ], [
            'id' => 209,
            'department_id' => 4,
            'code' => 780,
            'name' => 'TALAIGUA NUEVO'
        ], [
            'id' => 210,
            'department_id' => 4,
            'code' => 810,
            'name' => 'TIQUISIO (PUERTO RICO)'
        ], [
            'id' => 211,
            'department_id' => 4,
            'code' => 836,
            'name' => 'TURBACO'
        ], [
            'id' => 212,
            'department_id' => 4,
            'code' => 838,
            'name' => 'TURBANA'
        ], [
            'id' => 213,
            'department_id' => 4,
            'code' => 873,
            'name' => 'VILLANUEVA'
        ], [
            'id' => 214,
            'department_id' => 4,
            'code' => 894,
            'name' => 'ZAMBRANO'
        ], [
            'id' => 215,
            'department_id' => 5,
            'code' => 1,
            'name' => 'TUNJA'
        ], [
            'id' => 216,
            'department_id' => 5,
            'code' => 22,
            'name' => 'ALMEIDA'
        ], [
            'id' => 217,
            'department_id' => 5,
            'code' => 47,
            'name' => 'AQUITANIA'
        ], [
            'id' => 218,
            'department_id' => 5,
            'code' => 51,
            'name' => 'ARCABUCO'
        ], [
            'id' => 219,
            'department_id' => 5,
            'code' => 87,
            'name' => 'BELEN'
        ], [
            'id' => 220,
            'department_id' => 5,
            'code' => 90,
            'name' => 'BERBEO'
        ], [
            'id' => 221,
            'department_id' => 5,
            'code' => 92,
            'name' => 'BETEITIVA'
        ], [
            'id' => 222,
            'department_id' => 5,
            'code' => 97,
            'name' => 'BOAVITA'
        ], [
            'id' => 223,
            'department_id' => 5,
            'code' => 104,
            'name' => 'BOYACA'
        ], [
            'id' => 224,
            'department_id' => 5,
            'code' => 106,
            'name' => 'BRICEÑO'
        ], [
            'id' => 225,
            'department_id' => 5,
            'code' => 109,
            'name' => 'BUENAVISTA'
        ], [
            'id' => 226,
            'department_id' => 5,
            'code' => 114,
            'name' => 'BUSBANZA'
        ], [
            'id' => 227,
            'department_id' => 5,
            'code' => 131,
            'name' => 'CALDAS'
        ], [
            'id' => 228,
            'department_id' => 5,
            'code' => 135,
            'name' => 'CAMPOHERMOSO'
        ], [
            'id' => 229,
            'department_id' => 5,
            'code' => 162,
            'name' => 'CERINZA'
        ], [
            'id' => 230,
            'department_id' => 5,
            'code' => 172,
            'name' => 'CHINAVITA'
        ], [
            'id' => 231,
            'department_id' => 5,
            'code' => 176,
            'name' => 'CHIQUINQUIRA'
        ], [
            'id' => 232,
            'department_id' => 5,
            'code' => 180,
            'name' => 'CHISCAS'
        ], [
            'id' => 233,
            'department_id' => 5,
            'code' => 183,
            'name' => 'CHITA'
        ], [
            'id' => 234,
            'department_id' => 5,
            'code' => 185,
            'name' => 'CHITARAQUE'
        ], [
            'id' => 235,
            'department_id' => 5,
            'code' => 187,
            'name' => 'CHIVATA'
        ], [
            'id' => 236,
            'department_id' => 5,
            'code' => 189,
            'name' => 'CIENEGA'
        ], [
            'id' => 237,
            'department_id' => 5,
            'code' => 204,
            'name' => 'COMBITA'
        ], [
            'id' => 238,
            'department_id' => 5,
            'code' => 212,
            'name' => 'COPER'
        ], [
            'id' => 239,
            'department_id' => 5,
            'code' => 215,
            'name' => 'CORRALES'
        ], [
            'id' => 240,
            'department_id' => 5,
            'code' => 218,
            'name' => 'COVARACHIA'
        ], [
            'id' => 241,
            'department_id' => 5,
            'code' => 223,
            'name' => 'CUBARA'
        ], [
            'id' => 242,
            'department_id' => 5,
            'code' => 224,
            'name' => 'CUCAITA'
        ], [
            'id' => 243,
            'department_id' => 5,
            'code' => 226,
            'name' => 'CUITIVA'
        ], [
            'id' => 244,
            'department_id' => 5,
            'code' => 232,
            'name' => 'CHIQUIZA'
        ], [
            'id' => 245,
            'department_id' => 5,
            'code' => 236,
            'name' => 'CHIVOR'
        ], [
            'id' => 246,
            'department_id' => 5,
            'code' => 238,
            'name' => 'DUITAMA'
        ], [
            'id' => 247,
            'department_id' => 5,
            'code' => 244,
            'name' => 'EL COCUY'
        ], [
            'id' => 248,
            'department_id' => 5,
            'code' => 248,
            'name' => 'EL ESPINO'
        ], [
            'id' => 249,
            'department_id' => 5,
            'code' => 272,
            'name' => 'FIRAVITOBA'
        ], [
            'id' => 250,
            'department_id' => 5,
            'code' => 276,
            'name' => 'FLORESTA'
        ], [
            'id' => 251,
            'department_id' => 5,
            'code' => 293,
            'name' => 'GACHANTIVA'
        ], [
            'id' => 252,
            'department_id' => 5,
            'code' => 296,
            'name' => 'GAMEZA'
        ], [
            'id' => 253,
            'department_id' => 5,
            'code' => 299,
            'name' => 'GARAGOA'
        ], [
            'id' => 254,
            'department_id' => 5,
            'code' => 317,
            'name' => 'GUACAMAYAS'
        ], [
            'id' => 255,
            'department_id' => 5,
            'code' => 322,
            'name' => 'GUATEQUE'
        ], [
            'id' => 256,
            'department_id' => 5,
            'code' => 325,
            'name' => 'GUAYATA'
        ], [
            'id' => 257,
            'department_id' => 5,
            'code' => 332,
            'name' => 'GUICAN'
        ], [
            'id' => 258,
            'department_id' => 5,
            'code' => 362,
            'name' => 'IZA'
        ], [
            'id' => 259,
            'department_id' => 5,
            'code' => 367,
            'name' => 'JENESANO'
        ], [
            'id' => 260,
            'department_id' => 5,
            'code' => 368,
            'name' => 'JERICO'
        ], [
            'id' => 261,
            'department_id' => 5,
            'code' => 377,
            'name' => 'LABRANZAGRANDE'
        ], [
            'id' => 262,
            'department_id' => 5,
            'code' => 380,
            'name' => 'LA CAPILLA'
        ], [
            'id' => 263,
            'department_id' => 5,
            'code' => 401,
            'name' => 'LA VICTORIA'
        ], [
            'id' => 264,
            'department_id' => 5,
            'code' => 403,
            'name' => 'LA UVITA'
        ], [
            'id' => 265,
            'department_id' => 5,
            'code' => 407,
            'name' => 'VILLA DE LEIVA'
        ], [
            'id' => 266,
            'department_id' => 5,
            'code' => 425,
            'name' => 'MACANAL'
        ], [
            'id' => 267,
            'department_id' => 5,
            'code' => 442,
            'name' => 'MARIPI'
        ], [
            'id' => 268,
            'department_id' => 5,
            'code' => 455,
            'name' => 'MIRAFLORES'
        ], [
            'id' => 269,
            'department_id' => 5,
            'code' => 464,
            'name' => 'MONGUA'
        ], [
            'id' => 270,
            'department_id' => 5,
            'code' => 466,
            'name' => 'MONGUI'
        ], [
            'id' => 271,
            'department_id' => 5,
            'code' => 469,
            'name' => 'MONIQUIRA'
        ], [
            'id' => 272,
            'department_id' => 5,
            'code' => 476,
            'name' => 'MOTAVITA'
        ], [
            'id' => 273,
            'department_id' => 5,
            'code' => 480,
            'name' => 'MUZO'
        ], [
            'id' => 274,
            'department_id' => 5,
            'code' => 491,
            'name' => 'NOBSA'
        ], [
            'id' => 275,
            'department_id' => 5,
            'code' => 494,
            'name' => 'NUEVO COLON'
        ], [
            'id' => 276,
            'department_id' => 5,
            'code' => 500,
            'name' => 'OICATA'
        ], [
            'id' => 277,
            'department_id' => 5,
            'code' => 507,
            'name' => 'OTANCHE'
        ], [
            'id' => 278,
            'department_id' => 5,
            'code' => 511,
            'name' => 'PACHAVITA'
        ], [
            'id' => 279,
            'department_id' => 5,
            'code' => 514,
            'name' => 'PAEZ'
        ], [
            'id' => 280,
            'department_id' => 5,
            'code' => 516,
            'name' => 'PAIPA'
        ], [
            'id' => 281,
            'department_id' => 5,
            'code' => 518,
            'name' => 'PAJARITO'
        ], [
            'id' => 282,
            'department_id' => 5,
            'code' => 522,
            'name' => 'PANQUEBA'
        ], [
            'id' => 283,
            'department_id' => 5,
            'code' => 531,
            'name' => 'PAUNA'
        ], [
            'id' => 284,
            'department_id' => 5,
            'code' => 533,
            'name' => 'PAYA'
        ], [
            'id' => 285,
            'department_id' => 5,
            'code' => 537,
            'name' => 'PAZ DEL RIO'
        ], [
            'id' => 286,
            'department_id' => 5,
            'code' => 542,
            'name' => 'PESCA'
        ], [
            'id' => 287,
            'department_id' => 5,
            'code' => 550,
            'name' => 'PISBA'
        ], [
            'id' => 288,
            'department_id' => 5,
            'code' => 572,
            'name' => 'PUERTO BOYACA'
        ], [
            'id' => 289,
            'department_id' => 5,
            'code' => 580,
            'name' => 'QUIPAMA'
        ], [
            'id' => 290,
            'department_id' => 5,
            'code' => 599,
            'name' => 'RAMIRIQUI'
        ], [
            'id' => 291,
            'department_id' => 5,
            'code' => 600,
            'name' => 'RAQUIRA'
        ], [
            'id' => 292,
            'department_id' => 5,
            'code' => 621,
            'name' => 'RONDON'
        ], [
            'id' => 293,
            'department_id' => 5,
            'code' => 632,
            'name' => 'SABOYA'
        ], [
            'id' => 294,
            'department_id' => 5,
            'code' => 638,
            'name' => 'SACHICA'
        ], [
            'id' => 295,
            'department_id' => 5,
            'code' => 646,
            'name' => 'SAMACA'
        ], [
            'id' => 296,
            'department_id' => 5,
            'code' => 660,
            'name' => 'SAN EDUARDO'
        ], [
            'id' => 297,
            'department_id' => 5,
            'code' => 664,
            'name' => 'SAN JOSE DE PARE'
        ], [
            'id' => 298,
            'department_id' => 5,
            'code' => 667,
            'name' => 'SAN LUIS DE GACENO'
        ], [
            'id' => 299,
            'department_id' => 5,
            'code' => 673,
            'name' => 'SAN MATEO'
        ], [
            'id' => 300,
            'department_id' => 5,
            'code' => 676,
            'name' => 'SAN MIGUEL DE SEMA'
        ], [
            'id' => 301,
            'department_id' => 5,
            'code' => 681,
            'name' => 'SAN PABLO DE BORBUR'
        ], [
            'id' => 302,
            'department_id' => 5,
            'code' => 686,
            'name' => 'SANTANA'
        ], [
            'id' => 303,
            'department_id' => 5,
            'code' => 690,
            'name' => 'SANTA MARIA'
        ], [
            'id' => 304,
            'department_id' => 5,
            'code' => 693,
            'name' => 'SANTA ROSA DE VITERBO'
        ], [
            'id' => 305,
            'department_id' => 5,
            'code' => 696,
            'name' => 'SANTA SOFIA'
        ], [
            'id' => 306,
            'department_id' => 5,
            'code' => 720,
            'name' => 'SATIVANORTE'
        ], [
            'id' => 307,
            'department_id' => 5,
            'code' => 723,
            'name' => 'SATIVASUR'
        ], [
            'id' => 308,
            'department_id' => 5,
            'code' => 740,
            'name' => 'SIACHOQUE'
        ], [
            'id' => 309,
            'department_id' => 5,
            'code' => 753,
            'name' => 'SOATA'
        ], [
            'id' => 310,
            'department_id' => 5,
            'code' => 755,
            'name' => 'SOCOTA'
        ], [
            'id' => 311,
            'department_id' => 5,
            'code' => 757,
            'name' => 'SOCHA'
        ], [
            'id' => 312,
            'department_id' => 5,
            'code' => 759,
            'name' => 'SOGAMOSO'
        ], [
            'id' => 313,
            'department_id' => 5,
            'code' => 761,
            'name' => 'SOMONDOCO'
        ], [
            'id' => 314,
            'department_id' => 5,
            'code' => 762,
            'name' => 'SORA'
        ], [
            'id' => 315,
            'department_id' => 5,
            'code' => 763,
            'name' => 'SOTAQUIRA'
        ], [
            'id' => 316,
            'department_id' => 5,
            'code' => 764,
            'name' => 'SORACA'
        ], [
            'id' => 317,
            'department_id' => 5,
            'code' => 774,
            'name' => 'SUSACON'
        ], [
            'id' => 318,
            'department_id' => 5,
            'code' => 776,
            'name' => 'SUTAMARCHAN'
        ], [
            'id' => 319,
            'department_id' => 5,
            'code' => 778,
            'name' => 'SUTATENZA'
        ], [
            'id' => 320,
            'department_id' => 5,
            'code' => 790,
            'name' => 'TASCO'
        ], [
            'id' => 321,
            'department_id' => 5,
            'code' => 798,
            'name' => 'TENZA'
        ], [
            'id' => 322,
            'department_id' => 5,
            'code' => 804,
            'name' => 'TIBANA'
        ], [
            'id' => 323,
            'department_id' => 5,
            'code' => 806,
            'name' => 'TIBASOSA'
        ], [
            'id' => 324,
            'department_id' => 5,
            'code' => 808,
            'name' => 'TINJACA'
        ], [
            'id' => 325,
            'department_id' => 5,
            'code' => 810,
            'name' => 'TIPACOQUE'
        ], [
            'id' => 326,
            'department_id' => 5,
            'code' => 814,
            'name' => 'TOCA'
        ], [
            'id' => 327,
            'department_id' => 5,
            'code' => 816,
            'name' => 'TOGUI'
        ], [
            'id' => 328,
            'department_id' => 5,
            'code' => 820,
            'name' => 'TOPAGA'
        ], [
            'id' => 329,
            'department_id' => 5,
            'code' => 822,
            'name' => 'TOTA'
        ], [
            'id' => 330,
            'department_id' => 5,
            'code' => 832,
            'name' => 'TUNUNGUA'
        ], [
            'id' => 331,
            'department_id' => 5,
            'code' => 835,
            'name' => 'TURMEQUE'
        ], [
            'id' => 332,
            'department_id' => 5,
            'code' => 837,
            'name' => 'TUTA'
        ], [
            'id' => 333,
            'department_id' => 5,
            'code' => 839,
            'name' => 'TUTASA'
        ], [
            'id' => 334,
            'department_id' => 5,
            'code' => 842,
            'name' => 'UMBITA'
        ], [
            'id' => 335,
            'department_id' => 5,
            'code' => 861,
            'name' => 'VENTAQUEMADA'
        ], [
            'id' => 336,
            'department_id' => 5,
            'code' => 879,
            'name' => 'VIRACACHA'
        ], [
            'id' => 337,
            'department_id' => 5,
            'code' => 897,
            'name' => 'ZETAQUIRA'
        ], [
            'id' => 338,
            'department_id' => 6,
            'code' => 1,
            'name' => 'MANIZALES'
        ], [
            'id' => 339,
            'department_id' => 6,
            'code' => 13,
            'name' => 'AGUADAS'
        ], [
            'id' => 340,
            'department_id' => 6,
            'code' => 42,
            'name' => 'ANSERMA'
        ], [
            'id' => 341,
            'department_id' => 6,
            'code' => 50,
            'name' => 'ARANZAZU'
        ], [
            'id' => 342,
            'department_id' => 6,
            'code' => 88,
            'name' => 'BELALCAZAR'
        ], [
            'id' => 343,
            'department_id' => 6,
            'code' => 174,
            'name' => 'CHINCHINA'
        ], [
            'id' => 344,
            'department_id' => 6,
            'code' => 272,
            'name' => 'FILADELFIA'
        ], [
            'id' => 345,
            'department_id' => 6,
            'code' => 380,
            'name' => 'LA DORADA'
        ], [
            'id' => 346,
            'department_id' => 6,
            'code' => 388,
            'name' => 'LA MERCED'
        ], [
            'id' => 347,
            'department_id' => 6,
            'code' => 433,
            'name' => 'MANZANARES'
        ], [
            'id' => 348,
            'department_id' => 6,
            'code' => 442,
            'name' => 'MARMATO'
        ], [
            'id' => 349,
            'department_id' => 6,
            'code' => 444,
            'name' => 'MARQUETALIA'
        ], [
            'id' => 350,
            'department_id' => 6,
            'code' => 446,
            'name' => 'MARULANDA'
        ], [
            'id' => 351,
            'department_id' => 6,
            'code' => 486,
            'name' => 'NEIRA'
        ], [
            'id' => 352,
            'department_id' => 6,
            'code' => 495,
            'name' => 'NORCASIA'
        ], [
            'id' => 353,
            'department_id' => 6,
            'code' => 513,
            'name' => 'PACORA'
        ], [
            'id' => 354,
            'department_id' => 6,
            'code' => 524,
            'name' => 'PALESTINA'
        ], [
            'id' => 355,
            'department_id' => 6,
            'code' => 541,
            'name' => 'PENSILVANIA'
        ], [
            'id' => 356,
            'department_id' => 6,
            'code' => 614,
            'name' => 'RIOSUCIO'
        ], [
            'id' => 357,
            'department_id' => 6,
            'code' => 616,
            'name' => 'RISARALDA'
        ], [
            'id' => 358,
            'department_id' => 6,
            'code' => 653,
            'name' => 'SALAMINA'
        ], [
            'id' => 359,
            'department_id' => 6,
            'code' => 662,
            'name' => 'SAMANA'
        ], [
            'id' => 360,
            'department_id' => 6,
            'code' => 665,
            'name' => 'SAN JOSE'
        ], [
            'id' => 361,
            'department_id' => 6,
            'code' => 777,
            'name' => 'SUPIA'
        ], [
            'id' => 362,
            'department_id' => 6,
            'code' => 867,
            'name' => 'VICTORIA'
        ], [
            'id' => 363,
            'department_id' => 6,
            'code' => 873,
            'name' => 'VILLAMARIA'
        ], [
            'id' => 364,
            'department_id' => 6,
            'code' => 877,
            'name' => 'VITERBO'
        ], [
            'id' => 365,
            'department_id' => 7,
            'code' => 1,
            'name' => 'FLORENCIA'
        ], [
            'id' => 366,
            'department_id' => 7,
            'code' => 29,
            'name' => 'ALBANIA'
        ], [
            'id' => 367,
            'department_id' => 7,
            'code' => 94,
            'name' => 'BELEN DE LOS ANDAQUIES'
        ], [
            'id' => 368,
            'department_id' => 7,
            'code' => 150,
            'name' => 'CARTAGENA DEL CHAIRA'
        ], [
            'id' => 369,
            'department_id' => 7,
            'code' => 205,
            'name' => 'CURILLO'
        ], [
            'id' => 370,
            'department_id' => 7,
            'code' => 247,
            'name' => 'EL DONCELLO'
        ], [
            'id' => 371,
            'department_id' => 7,
            'code' => 256,
            'name' => 'EL PAUJIL'
        ], [
            'id' => 372,
            'department_id' => 7,
            'code' => 410,
            'name' => 'LA MONTAÑITA'
        ], [
            'id' => 373,
            'department_id' => 7,
            'code' => 460,
            'name' => 'MILAN'
        ], [
            'id' => 374,
            'department_id' => 7,
            'code' => 479,
            'name' => 'MORELIA'
        ], [
            'id' => 375,
            'department_id' => 7,
            'code' => 592,
            'name' => 'PUERTO RICO'
        ], [
            'id' => 376,
            'department_id' => 7,
            'code' => 610,
            'name' => 'SAN JOSE DE FRAGUA'
        ], [
            'id' => 377,
            'department_id' => 7,
            'code' => 753,
            'name' => 'SAN VICENTE DEL CAGUAN'
        ], [
            'id' => 378,
            'department_id' => 7,
            'code' => 756,
            'name' => 'SOLANO'
        ], [
            'id' => 379,
            'department_id' => 7,
            'code' => 785,
            'name' => 'SOLITA'
        ], [
            'id' => 380,
            'department_id' => 7,
            'code' => 860,
            'name' => 'VALPARAISO'
        ], [
            'id' => 381,
            'department_id' => 8,
            'code' => 1,
            'name' => 'POPAYAN'
        ], [
            'id' => 382,
            'department_id' => 8,
            'code' => 22,
            'name' => 'ALMAGUER'
        ], [
            'id' => 383,
            'department_id' => 8,
            'code' => 50,
            'name' => 'ARGELIA'
        ], [
            'id' => 384,
            'department_id' => 8,
            'code' => 75,
            'name' => 'BALBOA'
        ], [
            'id' => 385,
            'department_id' => 8,
            'code' => 100,
            'name' => 'BOLIVAR'
        ], [
            'id' => 386,
            'department_id' => 8,
            'code' => 110,
            'name' => 'BUENOS AIRES'
        ], [
            'id' => 387,
            'department_id' => 8,
            'code' => 130,
            'name' => 'CAJIBIO'
        ], [
            'id' => 388,
            'department_id' => 8,
            'code' => 137,
            'name' => 'CALDONO'
        ], [
            'id' => 389,
            'department_id' => 8,
            'code' => 142,
            'name' => 'CALOTO'
        ], [
            'id' => 390,
            'department_id' => 8,
            'code' => 212,
            'name' => 'CORINTO'
        ], [
            'id' => 391,
            'department_id' => 8,
            'code' => 256,
            'name' => 'EL TAMBO'
        ], [
            'id' => 392,
            'department_id' => 8,
            'code' => 290,
            'name' => 'FLORENCIA'
        ], [
            'id' => 393,
            'department_id' => 8,
            'code' => 318,
            'name' => 'GUAPI'
        ], [
            'id' => 394,
            'department_id' => 8,
            'code' => 355,
            'name' => 'INZA'
        ], [
            'id' => 395,
            'department_id' => 8,
            'code' => 364,
            'name' => 'JAMBALO'
        ], [
            'id' => 396,
            'department_id' => 8,
            'code' => 392,
            'name' => 'LA SIERRA'
        ], [
            'id' => 397,
            'department_id' => 8,
            'code' => 397,
            'name' => 'LA VEGA'
        ], [
            'id' => 398,
            'department_id' => 8,
            'code' => 418,
            'name' => 'LOPEZ (MICAY)'
        ], [
            'id' => 399,
            'department_id' => 8,
            'code' => 450,
            'name' => 'MERCADERES'
        ], [
            'id' => 400,
            'department_id' => 8,
            'code' => 455,
            'name' => 'MIRANDA'
        ], [
            'id' => 401,
            'department_id' => 8,
            'code' => 473,
            'name' => 'MORALES'
        ], [
            'id' => 402,
            'department_id' => 8,
            'code' => 513,
            'name' => 'PADILLA'
        ], [
            'id' => 403,
            'department_id' => 8,
            'code' => 517,
            'name' => 'PAEZ (BELALCAZAR)'
        ], [
            'id' => 404,
            'department_id' => 8,
            'code' => 532,
            'name' => 'PATIA (EL BORDO)'
        ], [
            'id' => 405,
            'department_id' => 8,
            'code' => 533,
            'name' => 'PIAMONTE'
        ], [
            'id' => 406,
            'department_id' => 8,
            'code' => 548,
            'name' => 'PIENDAMO'
        ], [
            'id' => 407,
            'department_id' => 8,
            'code' => 573,
            'name' => 'PUERTO TEJADA'
        ], [
            'id' => 408,
            'department_id' => 8,
            'code' => 585,
            'name' => 'PURACE (COCONUCO)'
        ], [
            'id' => 409,
            'department_id' => 8,
            'code' => 622,
            'name' => 'ROSAS'
        ], [
            'id' => 410,
            'department_id' => 8,
            'code' => 693,
            'name' => 'SAN SEBASTIAN'
        ], [
            'id' => 411,
            'department_id' => 8,
            'code' => 698,
            'name' => 'SANTANDER DE QUILICHAO'
        ], [
            'id' => 412,
            'department_id' => 8,
            'code' => 701,
            'name' => 'SANTA ROSA'
        ], [
            'id' => 413,
            'department_id' => 8,
            'code' => 743,
            'name' => 'SILVIA'
        ], [
            'id' => 414,
            'department_id' => 8,
            'code' => 760,
            'name' => 'SOTARA (PAISPAMBA)'
        ], [
            'id' => 415,
            'department_id' => 8,
            'code' => 780,
            'name' => 'SUAREZ'
        ], [
            'id' => 416,
            'department_id' => 8,
            'code' => 807,
            'name' => 'TIMBIO'
        ], [
            'id' => 417,
            'department_id' => 8,
            'code' => 809,
            'name' => 'TIMBIQUI'
        ], [
            'id' => 418,
            'department_id' => 8,
            'code' => 821,
            'name' => 'TORIBIO'
        ], [
            'id' => 419,
            'department_id' => 8,
            'code' => 824,
            'name' => 'TOTORO'
        ], [
            'id' => 420,
            'department_id' => 8,
            'code' => 845,
            'name' => 'VILLARICA'
        ], [
            'id' => 421,
            'department_id' => 9,
            'code' => 1,
            'name' => 'VALLEDUPAR'
        ], [
            'id' => 422,
            'department_id' => 9,
            'code' => 11,
            'name' => 'AGUACHICA'
        ], [
            'id' => 423,
            'department_id' => 9,
            'code' => 13,
            'name' => 'AGUSTIN CODAZZI'
        ], [
            'id' => 424,
            'department_id' => 9,
            'code' => 32,
            'name' => 'ASTREA'
        ], [
            'id' => 425,
            'department_id' => 9,
            'code' => 45,
            'name' => 'BECERRIL'
        ], [
            'id' => 426,
            'department_id' => 9,
            'code' => 60,
            'name' => 'BOSCONIA'
        ], [
            'id' => 427,
            'department_id' => 9,
            'code' => 175,
            'name' => 'CHIMICHAGUA'
        ], [
            'id' => 428,
            'department_id' => 9,
            'code' => 178,
            'name' => 'CHIRIGUANA'
        ], [
            'id' => 429,
            'department_id' => 9,
            'code' => 228,
            'name' => 'CURUMANI'
        ], [
            'id' => 430,
            'department_id' => 9,
            'code' => 238,
            'name' => 'EL COPEY'
        ], [
            'id' => 431,
            'department_id' => 9,
            'code' => 250,
            'name' => 'EL PASO'
        ], [
            'id' => 432,
            'department_id' => 9,
            'code' => 295,
            'name' => 'GAMARRA'
        ], [
            'id' => 433,
            'department_id' => 9,
            'code' => 310,
            'name' => 'GONZALEZ'
        ], [
            'id' => 434,
            'department_id' => 9,
            'code' => 383,
            'name' => 'LA GLORIA'
        ], [
            'id' => 435,
            'department_id' => 9,
            'code' => 400,
            'name' => 'LA JAGUA IBIRICO'
        ], [
            'id' => 436,
            'department_id' => 9,
            'code' => 443,
            'name' => 'MANAURE (BALCON DEL CESAR)'
        ], [
            'id' => 437,
            'department_id' => 9,
            'code' => 517,
            'name' => 'PAILITAS'
        ], [
            'id' => 438,
            'department_id' => 9,
            'code' => 550,
            'name' => 'PELAYA'
        ], [
            'id' => 439,
            'department_id' => 9,
            'code' => 570,
            'name' => 'PUEBLO BELLO'
        ], [
            'id' => 440,
            'department_id' => 9,
            'code' => 614,
            'name' => 'RIO DE ORO'
        ], [
            'id' => 441,
            'department_id' => 9,
            'code' => 621,
            'name' => 'LA PAZ (ROBLES)'
        ], [
            'id' => 442,
            'department_id' => 9,
            'code' => 710,
            'name' => 'SAN ALBERTO'
        ], [
            'id' => 443,
            'department_id' => 9,
            'code' => 750,
            'name' => 'SAN DIEGO'
        ], [
            'id' => 444,
            'department_id' => 9,
            'code' => 770,
            'name' => 'SAN MARTIN'
        ], [
            'id' => 445,
            'department_id' => 9,
            'code' => 787,
            'name' => 'TAMALAMEQUE'
        ], [
            'id' => 446,
            'department_id' => 10,
            'code' => 1,
            'name' => 'MONTERIA'
        ], [
            'id' => 447,
            'department_id' => 10,
            'code' => 68,
            'name' => 'AYAPEL'
        ], [
            'id' => 448,
            'department_id' => 10,
            'code' => 79,
            'name' => 'BUENAVISTA'
        ], [
            'id' => 449,
            'department_id' => 10,
            'code' => 90,
            'name' => 'CANALETE'
        ], [
            'id' => 450,
            'department_id' => 10,
            'code' => 162,
            'name' => 'CERETE'
        ], [
            'id' => 451,
            'department_id' => 10,
            'code' => 168,
            'name' => 'CHIMA'
        ], [
            'id' => 452,
            'department_id' => 10,
            'code' => 182,
            'name' => 'CHINU'
        ], [
            'id' => 453,
            'department_id' => 10,
            'code' => 189,
            'name' => 'CIENAGA DE ORO'
        ], [
            'id' => 454,
            'department_id' => 10,
            'code' => 300,
            'name' => 'COTORRA'
        ], [
            'id' => 455,
            'department_id' => 10,
            'code' => 350,
            'name' => 'LA APARTADA'
        ], [
            'id' => 456,
            'department_id' => 10,
            'code' => 417,
            'name' => 'LORICA'
        ], [
            'id' => 457,
            'department_id' => 10,
            'code' => 419,
            'name' => 'LOS CORDOBAS'
        ], [
            'id' => 458,
            'department_id' => 10,
            'code' => 464,
            'name' => 'MOMIL'
        ], [
            'id' => 459,
            'department_id' => 10,
            'code' => 466,
            'name' => 'MONTELIBANO'
        ], [
            'id' => 460,
            'department_id' => 10,
            'code' => 500,
            'name' => 'MOÑITOS'
        ], [
            'id' => 461,
            'department_id' => 10,
            'code' => 555,
            'name' => 'PLANETA RICA'
        ], [
            'id' => 462,
            'department_id' => 10,
            'code' => 570,
            'name' => 'PUEBLO NUEVO'
        ], [
            'id' => 463,
            'department_id' => 10,
            'code' => 574,
            'name' => 'PUERTO ESCONDIDO'
        ], [
            'id' => 464,
            'department_id' => 10,
            'code' => 580,
            'name' => 'PUERTO LIBERTADOR'
        ], [
            'id' => 465,
            'department_id' => 10,
            'code' => 586,
            'name' => 'PURISIMA'
        ], [
            'id' => 466,
            'department_id' => 10,
            'code' => 660,
            'name' => 'SAHAGUN'
        ], [
            'id' => 467,
            'department_id' => 10,
            'code' => 670,
            'name' => 'SAN ANDRES SOTAVENTO'
        ], [
            'id' => 468,
            'department_id' => 10,
            'code' => 672,
            'name' => 'SAN ANTERO'
        ], [
            'id' => 469,
            'department_id' => 10,
            'code' => 675,
            'name' => 'SAN BERNARDO DEL VIENTO'
        ], [
            'id' => 470,
            'department_id' => 10,
            'code' => 678,
            'name' => 'SAN CARLOS'
        ], [
            'id' => 471,
            'department_id' => 10,
            'code' => 686,
            'name' => 'SAN PELAYO'
        ], [
            'id' => 472,
            'department_id' => 10,
            'code' => 807,
            'name' => 'TIERRALTA'
        ], [
            'id' => 473,
            'department_id' => 10,
            'code' => 855,
            'name' => 'VALENCIA'
        ], [
            'id' => 474,
            'department_id' => 11,
            'code' => 1,
            'name' => 'AGUA DE DIOS'
        ], [
            'id' => 475,
            'department_id' => 11,
            'code' => 19,
            'name' => 'ALBAN'
        ], [
            'id' => 476,
            'department_id' => 11,
            'code' => 35,
            'name' => 'ANAPOIMA'
        ], [
            'id' => 477,
            'department_id' => 11,
            'code' => 40,
            'name' => 'ANOLAIMA'
        ], [
            'id' => 478,
            'department_id' => 11,
            'code' => 53,
            'name' => 'ARBELAEZ'
        ], [
            'id' => 479,
            'department_id' => 11,
            'code' => 86,
            'name' => 'BELTRAN'
        ], [
            'id' => 480,
            'department_id' => 11,
            'code' => 95,
            'name' => 'BITUIMA'
        ], [
            'id' => 481,
            'department_id' => 11,
            'code' => 99,
            'name' => 'BOJACA'
        ], [
            'id' => 482,
            'department_id' => 11,
            'code' => 120,
            'name' => 'CABRERA'
        ], [
            'id' => 483,
            'department_id' => 11,
            'code' => 123,
            'name' => 'CACHIPAY'
        ], [
            'id' => 484,
            'department_id' => 11,
            'code' => 126,
            'name' => 'CAJICA'
        ], [
            'id' => 485,
            'department_id' => 11,
            'code' => 148,
            'name' => 'CAPARRAPI'
        ], [
            'id' => 486,
            'department_id' => 11,
            'code' => 151,
            'name' => 'CAQUEZA'
        ], [
            'id' => 487,
            'department_id' => 11,
            'code' => 154,
            'name' => 'CARMEN DE CARUPA'
        ], [
            'id' => 488,
            'department_id' => 11,
            'code' => 168,
            'name' => 'CHAGUANI'
        ], [
            'id' => 489,
            'department_id' => 11,
            'code' => 175,
            'name' => 'CHIA'
        ], [
            'id' => 490,
            'department_id' => 11,
            'code' => 178,
            'name' => 'CHIPAQUE'
        ], [
            'id' => 491,
            'department_id' => 11,
            'code' => 181,
            'name' => 'CHOACHI'
        ], [
            'id' => 492,
            'department_id' => 11,
            'code' => 183,
            'name' => 'CHOCONTA'
        ], [
            'id' => 493,
            'department_id' => 11,
            'code' => 200,
            'name' => 'COGUA'
        ], [
            'id' => 494,
            'department_id' => 11,
            'code' => 214,
            'name' => 'COTA'
        ], [
            'id' => 495,
            'department_id' => 11,
            'code' => 224,
            'name' => 'CUCUNUBA'
        ], [
            'id' => 496,
            'department_id' => 11,
            'code' => 245,
            'name' => 'EL COLEGIO'
        ], [
            'id' => 497,
            'department_id' => 11,
            'code' => 258,
            'name' => 'EL PEÑON'
        ], [
            'id' => 498,
            'department_id' => 11,
            'code' => 260,
            'name' => 'EL ROSAL'
        ], [
            'id' => 499,
            'department_id' => 11,
            'code' => 269,
            'name' => 'FACATATIVA'
        ], [
            'id' => 500,
            'department_id' => 11,
            'code' => 279,
            'name' => 'FOMEQUE'
        ], [
            'id' => 501,
            'department_id' => 11,
            'code' => 281,
            'name' => 'FOSCA'
        ], [
            'id' => 502,
            'department_id' => 11,
            'code' => 286,
            'name' => 'FUNZA'
        ], [
            'id' => 503,
            'department_id' => 11,
            'code' => 288,
            'name' => 'FUQUENE'
        ], [
            'id' => 504,
            'department_id' => 11,
            'code' => 290,
            'name' => 'FUSAGASUGA'
        ], [
            'id' => 505,
            'department_id' => 11,
            'code' => 293,
            'name' => 'GACHALA'
        ], [
            'id' => 506,
            'department_id' => 11,
            'code' => 295,
            'name' => 'GACHANCIPA'
        ], [
            'id' => 507,
            'department_id' => 11,
            'code' => 297,
            'name' => 'GACHETA'
        ], [
            'id' => 508,
            'department_id' => 11,
            'code' => 299,
            'name' => 'GAMA'
        ], [
            'id' => 509,
            'department_id' => 11,
            'code' => 307,
            'name' => 'GIRARDOT'
        ], [
            'id' => 510,
            'department_id' => 11,
            'code' => 312,
            'name' => 'GRANADA'
        ], [
            'id' => 511,
            'department_id' => 11,
            'code' => 317,
            'name' => 'GUACHETA'
        ], [
            'id' => 512,
            'department_id' => 11,
            'code' => 320,
            'name' => 'GUADUAS'
        ], [
            'id' => 513,
            'department_id' => 11,
            'code' => 322,
            'name' => 'GUASCA'
        ], [
            'id' => 514,
            'department_id' => 11,
            'code' => 324,
            'name' => 'GUATAQUI'
        ], [
            'id' => 515,
            'department_id' => 11,
            'code' => 326,
            'name' => 'GUATAVITA'
        ], [
            'id' => 516,
            'department_id' => 11,
            'code' => 328,
            'name' => 'GUAYABAL DE SIQUIMA'
        ], [
            'id' => 517,
            'department_id' => 11,
            'code' => 335,
            'name' => 'GUAYABETAL'
        ], [
            'id' => 518,
            'department_id' => 11,
            'code' => 339,
            'name' => 'GUTIERREZ'
        ], [
            'id' => 519,
            'department_id' => 11,
            'code' => 368,
            'name' => 'JERUSALEN'
        ], [
            'id' => 520,
            'department_id' => 11,
            'code' => 372,
            'name' => 'JUNIN'
        ], [
            'id' => 521,
            'department_id' => 11,
            'code' => 377,
            'name' => 'LA CALERA'
        ], [
            'id' => 522,
            'department_id' => 11,
            'code' => 386,
            'name' => 'LA MESA'
        ], [
            'id' => 523,
            'department_id' => 11,
            'code' => 394,
            'name' => 'LA PALMA'
        ], [
            'id' => 524,
            'department_id' => 11,
            'code' => 398,
            'name' => 'LA PEÑA'
        ], [
            'id' => 525,
            'department_id' => 11,
            'code' => 402,
            'name' => 'LA VEGA'
        ], [
            'id' => 526,
            'department_id' => 11,
            'code' => 407,
            'name' => 'LENGUAZAQUE'
        ], [
            'id' => 527,
            'department_id' => 11,
            'code' => 426,
            'name' => 'MACHETA'
        ], [
            'id' => 528,
            'department_id' => 11,
            'code' => 430,
            'name' => 'MADRID'
        ], [
            'id' => 529,
            'department_id' => 11,
            'code' => 436,
            'name' => 'MANTA'
        ], [
            'id' => 530,
            'department_id' => 11,
            'code' => 438,
            'name' => 'MEDINA'
        ], [
            'id' => 531,
            'department_id' => 11,
            'code' => 473,
            'name' => 'MOSQUERA'
        ], [
            'id' => 532,
            'department_id' => 11,
            'code' => 483,
            'name' => 'NARIÑO'
        ], [
            'id' => 533,
            'department_id' => 11,
            'code' => 486,
            'name' => 'NEMOCON'
        ], [
            'id' => 534,
            'department_id' => 11,
            'code' => 488,
            'name' => 'NILO'
        ], [
            'id' => 535,
            'department_id' => 11,
            'code' => 489,
            'name' => 'NIMAIMA'
        ], [
            'id' => 536,
            'department_id' => 11,
            'code' => 491,
            'name' => 'NOCAIMA'
        ], [
            'id' => 537,
            'department_id' => 11,
            'code' => 506,
            'name' => 'VENECIA (OSPINA PEREZ)'
        ], [
            'id' => 538,
            'department_id' => 11,
            'code' => 513,
            'name' => 'PACHO'
        ], [
            'id' => 539,
            'department_id' => 11,
            'code' => 518,
            'name' => 'PAIME'
        ], [
            'id' => 540,
            'department_id' => 11,
            'code' => 524,
            'name' => 'PANDI'
        ], [
            'id' => 541,
            'department_id' => 11,
            'code' => 530,
            'name' => 'PARATEBUENO'
        ], [
            'id' => 542,
            'department_id' => 11,
            'code' => 535,
            'name' => 'PASCA'
        ], [
            'id' => 543,
            'department_id' => 11,
            'code' => 572,
            'name' => 'PUERTO SALGAR'
        ], [
            'id' => 544,
            'department_id' => 11,
            'code' => 580,
            'name' => 'PULI'
        ], [
            'id' => 545,
            'department_id' => 11,
            'code' => 592,
            'name' => 'QUEBRADANEGRA'
        ], [
            'id' => 546,
            'department_id' => 11,
            'code' => 594,
            'name' => 'QUETAME'
        ], [
            'id' => 547,
            'department_id' => 11,
            'code' => 596,
            'name' => 'QUIPILE'
        ], [
            'id' => 548,
            'department_id' => 11,
            'code' => 599,
            'name' => 'APULO (RAFAEL REYES)'
        ], [
            'id' => 549,
            'department_id' => 11,
            'code' => 612,
            'name' => 'RICAURTE'
        ], [
            'id' => 550,
            'department_id' => 11,
            'code' => 645,
            'name' => 'SAN ANTONIO DEL TEQUENDAMA'
        ], [
            'id' => 551,
            'department_id' => 11,
            'code' => 649,
            'name' => 'SAN BERNARDO'
        ], [
            'id' => 552,
            'department_id' => 11,
            'code' => 653,
            'name' => 'SAN CAYETANO'
        ], [
            'id' => 553,
            'department_id' => 11,
            'code' => 658,
            'name' => 'SAN FRANCISCO'
        ], [
            'id' => 554,
            'department_id' => 11,
            'code' => 662,
            'name' => 'SAN JUAN DE RIOSECO'
        ], [
            'id' => 555,
            'department_id' => 11,
            'code' => 718,
            'name' => 'SASAIMA'
        ], [
            'id' => 556,
            'department_id' => 11,
            'code' => 736,
            'name' => 'SESQUILE'
        ], [
            'id' => 557,
            'department_id' => 11,
            'code' => 740,
            'name' => 'SIBATE'
        ], [
            'id' => 558,
            'department_id' => 11,
            'code' => 743,
            'name' => 'SILVANIA'
        ], [
            'id' => 559,
            'department_id' => 11,
            'code' => 745,
            'name' => 'SIMIJACA'
        ], [
            'id' => 560,
            'department_id' => 11,
            'code' => 754,
            'name' => 'SOACHA'
        ], [
            'id' => 561,
            'department_id' => 11,
            'code' => 758,
            'name' => 'SOPO'
        ], [
            'id' => 562,
            'department_id' => 11,
            'code' => 769,
            'name' => 'SUBACHOQUE'
        ], [
            'id' => 563,
            'department_id' => 11,
            'code' => 772,
            'name' => 'SUESCA'
        ], [
            'id' => 564,
            'department_id' => 11,
            'code' => 777,
            'name' => 'SUPATA'
        ], [
            'id' => 565,
            'department_id' => 11,
            'code' => 779,
            'name' => 'SUSA'
        ], [
            'id' => 566,
            'department_id' => 11,
            'code' => 781,
            'name' => 'SUTATAUSA'
        ], [
            'id' => 567,
            'department_id' => 11,
            'code' => 785,
            'name' => 'TABIO'
        ], [
            'id' => 568,
            'department_id' => 11,
            'code' => 793,
            'name' => 'TAUSA'
        ], [
            'id' => 569,
            'department_id' => 11,
            'code' => 797,
            'name' => 'TENA'
        ], [
            'id' => 570,
            'department_id' => 11,
            'code' => 799,
            'name' => 'TENJO'
        ], [
            'id' => 571,
            'department_id' => 11,
            'code' => 805,
            'name' => 'TIBACUY'
        ], [
            'id' => 572,
            'department_id' => 11,
            'code' => 807,
            'name' => 'TIBIRITA'
        ], [
            'id' => 573,
            'department_id' => 11,
            'code' => 815,
            'name' => 'TOCAIMA'
        ], [
            'id' => 574,
            'department_id' => 11,
            'code' => 817,
            'name' => 'TOCANCIPA'
        ], [
            'id' => 575,
            'department_id' => 11,
            'code' => 823,
            'name' => 'TOPAIPI'
        ], [
            'id' => 576,
            'department_id' => 11,
            'code' => 839,
            'name' => 'UBALA'
        ], [
            'id' => 577,
            'department_id' => 11,
            'code' => 841,
            'name' => 'UBAQUE'
        ], [
            'id' => 578,
            'department_id' => 11,
            'code' => 843,
            'name' => 'UBATE'
        ], [
            'id' => 579,
            'department_id' => 11,
            'code' => 845,
            'name' => 'UNE'
        ], [
            'id' => 580,
            'department_id' => 11,
            'code' => 851,
            'name' => 'UTICA'
        ], [
            'id' => 581,
            'department_id' => 11,
            'code' => 862,
            'name' => 'VERGARA'
        ], [
            'id' => 582,
            'department_id' => 11,
            'code' => 867,
            'name' => 'VIANI'
        ], [
            'id' => 583,
            'department_id' => 11,
            'code' => 871,
            'name' => 'VILLAGOMEZ'
        ], [
            'id' => 584,
            'department_id' => 11,
            'code' => 873,
            'name' => 'VILLAPINZON'
        ], [
            'id' => 585,
            'department_id' => 11,
            'code' => 875,
            'name' => 'VILLETA'
        ], [
            'id' => 586,
            'department_id' => 11,
            'code' => 878,
            'name' => 'VIOTA'
        ], [
            'id' => 587,
            'department_id' => 11,
            'code' => 885,
            'name' => 'YACOPI'
        ], [
            'id' => 588,
            'department_id' => 11,
            'code' => 898,
            'name' => 'ZIPACON'
        ], [
            'id' => 589,
            'department_id' => 11,
            'code' => 899,
            'name' => 'ZIPAQUIRA'
        ], [
            'id' => 590,
            'department_id' => 12,
            'code' => 1,
            'name' => 'QUIBDO (SAN FRANCISCO DE QUIBDO)'
        ], [
            'id' => 591,
            'department_id' => 12,
            'code' => 6,
            'name' => 'ACANDI'
        ], [
            'id' => 592,
            'department_id' => 12,
            'code' => 25,
            'name' => 'ALTO BAUDO (PIE DE PATO)'
        ], [
            'id' => 593,
            'department_id' => 12,
            'code' => 50,
            'name' => 'ATRATO'
        ], [
            'id' => 594,
            'department_id' => 12,
            'code' => 73,
            'name' => 'BAGADO'
        ], [
            'id' => 595,
            'department_id' => 12,
            'code' => 75,
            'name' => 'BAHIA SOLANO (MUTIS)'
        ], [
            'id' => 596,
            'department_id' => 12,
            'code' => 77,
            'name' => 'BAJO BAUDO (PIZARRO)'
        ], [
            'id' => 597,
            'department_id' => 12,
            'code' => 99,
            'name' => 'BOJAYA (BELLAVISTA)'
        ], [
            'id' => 598,
            'department_id' => 12,
            'code' => 135,
            'name' => 'CANTON DE SAN PABLO (MANAGRU)'
        ], [
            'id' => 599,
            'department_id' => 12,
            'code' => 205,
            'name' => 'CONDOTO'
        ], [
            'id' => 600,
            'department_id' => 12,
            'code' => 245,
            'name' => 'EL CARMEN DE ATRATO'
        ], [
            'id' => 601,
            'department_id' => 12,
            'code' => 250,
            'name' => 'LITORAL DEL BAJO SAN JUAN (SANTA GENOVEVA DE DOCORDO)'
        ], [
            'id' => 602,
            'department_id' => 12,
            'code' => 361,
            'name' => 'ISTMINA'
        ], [
            'id' => 603,
            'department_id' => 12,
            'code' => 372,
            'name' => 'JURADO'
        ], [
            'id' => 604,
            'department_id' => 12,
            'code' => 413,
            'name' => 'LLORO'
        ], [
            'id' => 605,
            'department_id' => 12,
            'code' => 425,
            'name' => 'MEDIO ATRATO'
        ], [
            'id' => 606,
            'department_id' => 12,
            'code' => 430,
            'name' => 'MEDIO BAUDO'
        ], [
            'id' => 607,
            'department_id' => 12,
            'code' => 491,
            'name' => 'NOVITA'
        ], [
            'id' => 608,
            'department_id' => 12,
            'code' => 495,
            'name' => 'NUQUI'
        ], [
            'id' => 609,
            'department_id' => 12,
            'code' => 600,
            'name' => 'RIOQUITO'
        ], [
            'id' => 610,
            'department_id' => 12,
            'code' => 615,
            'name' => 'RIOSUCIO'
        ], [
            'id' => 611,
            'department_id' => 12,
            'code' => 660,
            'name' => 'SAN JOSE DEL PALMAR'
        ], [
            'id' => 612,
            'department_id' => 12,
            'code' => 745,
            'name' => 'SIPI'
        ], [
            'id' => 613,
            'department_id' => 12,
            'code' => 787,
            'name' => 'TADO'
        ], [
            'id' => 614,
            'department_id' => 12,
            'code' => 800,
            'name' => 'UNGUIA'
        ], [
            'id' => 615,
            'department_id' => 12,
            'code' => 810,
            'name' => 'UNION PANAMERICANA'
        ], [
            'id' => 616,
            'department_id' => 13,
            'code' => 1,
            'name' => 'NEIVA'
        ], [
            'id' => 617,
            'department_id' => 13,
            'code' => 6,
            'name' => 'ACEVEDO'
        ], [
            'id' => 618,
            'department_id' => 13,
            'code' => 13,
            'name' => 'AGRADO'
        ], [
            'id' => 619,
            'department_id' => 13,
            'code' => 16,
            'name' => 'AIPE'
        ], [
            'id' => 620,
            'department_id' => 13,
            'code' => 20,
            'name' => 'ALGECIRAS'
        ], [
            'id' => 621,
            'department_id' => 13,
            'code' => 26,
            'name' => 'ALTAMIRA'
        ], [
            'id' => 622,
            'department_id' => 13,
            'code' => 78,
            'name' => 'BARAYA'
        ], [
            'id' => 623,
            'department_id' => 13,
            'code' => 132,
            'name' => 'CAMPOALEGRE'
        ], [
            'id' => 624,
            'department_id' => 13,
            'code' => 206,
            'name' => 'COLOMBIA'
        ], [
            'id' => 625,
            'department_id' => 13,
            'code' => 244,
            'name' => 'ELIAS'
        ], [
            'id' => 626,
            'department_id' => 13,
            'code' => 298,
            'name' => 'GARZON'
        ], [
            'id' => 627,
            'department_id' => 13,
            'code' => 306,
            'name' => 'GIGANTE'
        ], [
            'id' => 628,
            'department_id' => 13,
            'code' => 319,
            'name' => 'GUADALUPE'
        ], [
            'id' => 629,
            'department_id' => 13,
            'code' => 349,
            'name' => 'HOBO'
        ], [
            'id' => 630,
            'department_id' => 13,
            'code' => 357,
            'name' => 'IQUIRA'
        ], [
            'id' => 631,
            'department_id' => 13,
            'code' => 359,
            'name' => 'ISNOS (SAN JOSE DE ISNOS)'
        ], [
            'id' => 632,
            'department_id' => 13,
            'code' => 378,
            'name' => 'LA ARGENTINA'
        ], [
            'id' => 633,
            'department_id' => 13,
            'code' => 396,
            'name' => 'LA PLATA'
        ], [
            'id' => 634,
            'department_id' => 13,
            'code' => 483,
            'name' => 'NATAGA'
        ], [
            'id' => 635,
            'department_id' => 13,
            'code' => 503,
            'name' => 'OPORAPA'
        ], [
            'id' => 636,
            'department_id' => 13,
            'code' => 518,
            'name' => 'PAICOL'
        ], [
            'id' => 637,
            'department_id' => 13,
            'code' => 524,
            'name' => 'PALERMO'
        ], [
            'id' => 638,
            'department_id' => 13,
            'code' => 530,
            'name' => 'PALESTINA'
        ], [
            'id' => 639,
            'department_id' => 13,
            'code' => 548,
            'name' => 'PITAL'
        ], [
            'id' => 640,
            'department_id' => 13,
            'code' => 551,
            'name' => 'PITALITO'
        ], [
            'id' => 641,
            'department_id' => 13,
            'code' => 615,
            'name' => 'RIVERA'
        ], [
            'id' => 642,
            'department_id' => 13,
            'code' => 660,
            'name' => 'SALADOBLANCO'
        ], [
            'id' => 643,
            'department_id' => 13,
            'code' => 668,
            'name' => 'SAN AGUSTIN'
        ], [
            'id' => 644,
            'department_id' => 13,
            'code' => 676,
            'name' => 'SANTA MARIA'
        ], [
            'id' => 645,
            'department_id' => 13,
            'code' => 770,
            'name' => 'SUAZA'
        ], [
            'id' => 646,
            'department_id' => 13,
            'code' => 791,
            'name' => 'TARQUI'
        ], [
            'id' => 647,
            'department_id' => 13,
            'code' => 797,
            'name' => 'TESALIA'
        ], [
            'id' => 648,
            'department_id' => 13,
            'code' => 799,
            'name' => 'TELLO'
        ], [
            'id' => 649,
            'department_id' => 13,
            'code' => 801,
            'name' => 'TERUEL'
        ], [
            'id' => 650,
            'department_id' => 13,
            'code' => 807,
            'name' => 'TIMANA'
        ], [
            'id' => 651,
            'department_id' => 13,
            'code' => 872,
            'name' => 'VILLAVIEJA'
        ], [
            'id' => 652,
            'department_id' => 13,
            'code' => 885,
            'name' => 'YAGUARA'
        ], [
            'id' => 653,
            'department_id' => 14,
            'code' => 1,
            'name' => 'RIOHACHA'
        ], [
            'id' => 654,
            'department_id' => 14,
            'code' => 78,
            'name' => 'BARRANCAS'
        ], [
            'id' => 655,
            'department_id' => 14,
            'code' => 90,
            'name' => 'DIBULLA'
        ], [
            'id' => 656,
            'department_id' => 14,
            'code' => 98,
            'name' => 'DISTRACCION'
        ], [
            'id' => 657,
            'department_id' => 14,
            'code' => 110,
            'name' => 'EL MOLINO'
        ], [
            'id' => 658,
            'department_id' => 14,
            'code' => 279,
            'name' => 'FONSECA'
        ], [
            'id' => 659,
            'department_id' => 14,
            'code' => 378,
            'name' => 'HATONUEVO'
        ], [
            'id' => 660,
            'department_id' => 14,
            'code' => 420,
            'name' => 'LA JAGUA DEL PILAR'
        ], [
            'id' => 661,
            'department_id' => 14,
            'code' => 430,
            'name' => 'MAICAO'
        ], [
            'id' => 662,
            'department_id' => 14,
            'code' => 560,
            'name' => 'MANAURE'
        ], [
            'id' => 663,
            'department_id' => 14,
            'code' => 650,
            'name' => 'SAN JUAN DEL CESAR'
        ], [
            'id' => 664,
            'department_id' => 14,
            'code' => 847,
            'name' => 'URIBIA'
        ], [
            'id' => 665,
            'department_id' => 14,
            'code' => 855,
            'name' => 'URUMITA'
        ], [
            'id' => 666,
            'department_id' => 14,
            'code' => 874,
            'name' => 'VILLANUEVA'
        ], [
            'id' => 667,
            'department_id' => 15,
            'code' => 1,
            'name' => 'SANTA MARTA (DISTRITO TURISTICO CULTURAL E HISTORICO DE SANTA MARTA)'
        ], [
            'id' => 668,
            'department_id' => 15,
            'code' => 30,
            'name' => 'ALGARROBO'
        ], [
            'id' => 669,
            'department_id' => 15,
            'code' => 53,
            'name' => 'ARACATACA'
        ], [
            'id' => 670,
            'department_id' => 15,
            'code' => 58,
            'name' => 'ARIGUANI (EL DIFICIL)'
        ], [
            'id' => 671,
            'department_id' => 15,
            'code' => 161,
            'name' => 'CERRO SAN ANTONIO'
        ], [
            'id' => 672,
            'department_id' => 15,
            'code' => 170,
            'name' => 'CHIVOLO'
        ], [
            'id' => 673,
            'department_id' => 15,
            'code' => 189,
            'name' => 'CIENAGA'
        ], [
            'id' => 674,
            'department_id' => 15,
            'code' => 205,
            'name' => 'CONCORDIA'
        ], [
            'id' => 675,
            'department_id' => 15,
            'code' => 245,
            'name' => 'EL BANCO'
        ], [
            'id' => 676,
            'department_id' => 15,
            'code' => 258,
            'name' => 'EL PIÑON'
        ], [
            'id' => 677,
            'department_id' => 15,
            'code' => 268,
            'name' => 'EL RETEN'
        ], [
            'id' => 678,
            'department_id' => 15,
            'code' => 288,
            'name' => 'FUNDACION'
        ], [
            'id' => 679,
            'department_id' => 15,
            'code' => 318,
            'name' => 'GUAMAL'
        ], [
            'id' => 680,
            'department_id' => 15,
            'code' => 541,
            'name' => 'PEDRAZA'
        ], [
            'id' => 681,
            'department_id' => 15,
            'code' => 545,
            'name' => 'PIJIÑO DEL CARMEN (PIJIÑO)'
        ], [
            'id' => 682,
            'department_id' => 15,
            'code' => 551,
            'name' => 'PIVIJAY'
        ], [
            'id' => 683,
            'department_id' => 15,
            'code' => 555,
            'name' => 'PLATO'
        ], [
            'id' => 684,
            'department_id' => 15,
            'code' => 570,
            'name' => 'PUEBLOVIEJO'
        ], [
            'id' => 685,
            'department_id' => 15,
            'code' => 605,
            'name' => 'REMOLINO'
        ], [
            'id' => 686,
            'department_id' => 15,
            'code' => 660,
            'name' => 'SABANAS DE SAN ANGEL'
        ], [
            'id' => 687,
            'department_id' => 15,
            'code' => 675,
            'name' => 'SALAMINA'
        ], [
            'id' => 688,
            'department_id' => 15,
            'code' => 692,
            'name' => 'SAN SEBASTIAN DE BUENAVISTA'
        ], [
            'id' => 689,
            'department_id' => 15,
            'code' => 703,
            'name' => 'SAN ZENON'
        ], [
            'id' => 690,
            'department_id' => 15,
            'code' => 707,
            'name' => 'SANTA ANA'
        ], [
            'id' => 691,
            'department_id' => 15,
            'code' => 745,
            'name' => 'SITIONUEVO'
        ], [
            'id' => 692,
            'department_id' => 15,
            'code' => 798,
            'name' => 'TENERIFE'
        ], [
            'id' => 693,
            'department_id' => 16,
            'code' => 1,
            'name' => 'VILLAVICENCIO'
        ], [
            'id' => 694,
            'department_id' => 16,
            'code' => 6,
            'name' => 'ACACIAS'
        ], [
            'id' => 695,
            'department_id' => 16,
            'code' => 110,
            'name' => 'BARRANCA DE UPIA'
        ], [
            'id' => 696,
            'department_id' => 16,
            'code' => 124,
            'name' => 'CABUYARO'
        ], [
            'id' => 697,
            'department_id' => 16,
            'code' => 150,
            'name' => 'CASTILLA LA NUEVA'
        ], [
            'id' => 698,
            'department_id' => 16,
            'code' => 223,
            'name' => 'SAN LUIS DE CUBARRAL'
        ], [
            'id' => 699,
            'department_id' => 16,
            'code' => 226,
            'name' => 'CUMARAL'
        ], [
            'id' => 700,
            'department_id' => 16,
            'code' => 245,
            'name' => 'EL CALVARIO'
        ], [
            'id' => 701,
            'department_id' => 16,
            'code' => 251,
            'name' => 'EL CASTILLO'
        ], [
            'id' => 702,
            'department_id' => 16,
            'code' => 270,
            'name' => 'EL DORADO'
        ], [
            'id' => 703,
            'department_id' => 16,
            'code' => 287,
            'name' => 'FUENTE DE ORO'
        ], [
            'id' => 704,
            'department_id' => 16,
            'code' => 313,
            'name' => 'GRANADA'
        ], [
            'id' => 705,
            'department_id' => 16,
            'code' => 318,
            'name' => 'GUAMAL'
        ], [
            'id' => 706,
            'department_id' => 16,
            'code' => 325,
            'name' => 'MAPIRIPAN'
        ], [
            'id' => 707,
            'department_id' => 16,
            'code' => 330,
            'name' => 'MESETAS'
        ], [
            'id' => 708,
            'department_id' => 16,
            'code' => 350,
            'name' => 'LA MACARENA'
        ], [
            'id' => 709,
            'department_id' => 16,
            'code' => 370,
            'name' => 'LA URIBE'
        ], [
            'id' => 710,
            'department_id' => 16,
            'code' => 400,
            'name' => 'LEJANIAS'
        ], [
            'id' => 711,
            'department_id' => 16,
            'code' => 450,
            'name' => 'PUERTO CONCORDIA'
        ], [
            'id' => 712,
            'department_id' => 16,
            'code' => 568,
            'name' => 'PUERTO GAITAN'
        ], [
            'id' => 713,
            'department_id' => 16,
            'code' => 573,
            'name' => 'PUERTO LOPEZ'
        ], [
            'id' => 714,
            'department_id' => 16,
            'code' => 577,
            'name' => 'PUERTO LLERAS'
        ], [
            'id' => 715,
            'department_id' => 16,
            'code' => 590,
            'name' => 'PUERTO RICO'
        ], [
            'id' => 716,
            'department_id' => 16,
            'code' => 606,
            'name' => 'RESTREPO'
        ], [
            'id' => 717,
            'department_id' => 16,
            'code' => 680,
            'name' => 'SAN CARLOS DE GUAROA'
        ], [
            'id' => 718,
            'department_id' => 16,
            'code' => 683,
            'name' => 'SAN JUAN DE ARAMA'
        ], [
            'id' => 719,
            'department_id' => 16,
            'code' => 686,
            'name' => 'SAN JUANITO'
        ], [
            'id' => 720,
            'department_id' => 16,
            'code' => 689,
            'name' => 'SAN MARTIN'
        ], [
            'id' => 721,
            'department_id' => 16,
            'code' => 711,
            'name' => 'VISTAHERMOSA'
        ], [
            'id' => 722,
            'department_id' => 17,
            'code' => 1,
            'name' => 'PASTO (SAN JUAN DE PASTO)'
        ], [
            'id' => 723,
            'department_id' => 17,
            'code' => 19,
            'name' => 'ALBAN (SAN JOSE)'
        ], [
            'id' => 724,
            'department_id' => 17,
            'code' => 22,
            'name' => 'ALDANA'
        ], [
            'id' => 725,
            'department_id' => 17,
            'code' => 36,
            'name' => 'ANCUYA'
        ], [
            'id' => 726,
            'department_id' => 17,
            'code' => 51,
            'name' => 'ARBOLEDA (BERRUECOS)'
        ], [
            'id' => 727,
            'department_id' => 17,
            'code' => 79,
            'name' => 'BARBACOAS'
        ], [
            'id' => 728,
            'department_id' => 17,
            'code' => 83,
            'name' => 'BELEN'
        ], [
            'id' => 729,
            'department_id' => 17,
            'code' => 110,
            'name' => 'BUESACO'
        ], [
            'id' => 730,
            'department_id' => 17,
            'code' => 203,
            'name' => 'COLON (GENOVA)'
        ], [
            'id' => 731,
            'department_id' => 17,
            'code' => 207,
            'name' => 'CONSACA'
        ], [
            'id' => 732,
            'department_id' => 17,
            'code' => 210,
            'name' => 'CONTADERO'
        ], [
            'id' => 733,
            'department_id' => 17,
            'code' => 215,
            'name' => 'CORDOBA'
        ], [
            'id' => 734,
            'department_id' => 17,
            'code' => 224,
            'name' => 'CUASPUD (CARLOSAMA)'
        ], [
            'id' => 735,
            'department_id' => 17,
            'code' => 227,
            'name' => 'CUMBAL'
        ], [
            'id' => 736,
            'department_id' => 17,
            'code' => 233,
            'name' => 'CUMBITARA'
        ], [
            'id' => 737,
            'department_id' => 17,
            'code' => 240,
            'name' => 'CHACHAGUI'
        ], [
            'id' => 738,
            'department_id' => 17,
            'code' => 250,
            'name' => 'EL CHARCO'
        ], [
            'id' => 739,
            'department_id' => 17,
            'code' => 254,
            'name' => 'EL PEÑOL'
        ], [
            'id' => 740,
            'department_id' => 17,
            'code' => 256,
            'name' => 'EL ROSARIO'
        ], [
            'id' => 741,
            'department_id' => 17,
            'code' => 258,
            'name' => 'EL TABLON'
        ], [
            'id' => 742,
            'department_id' => 17,
            'code' => 260,
            'name' => 'EL TAMBO'
        ], [
            'id' => 743,
            'department_id' => 17,
            'code' => 287,
            'name' => 'FUNES'
        ], [
            'id' => 744,
            'department_id' => 17,
            'code' => 317,
            'name' => 'GUACHUCAL'
        ], [
            'id' => 745,
            'department_id' => 17,
            'code' => 320,
            'name' => 'GUAITARILLA'
        ], [
            'id' => 746,
            'department_id' => 17,
            'code' => 323,
            'name' => 'GUALMATAN'
        ], [
            'id' => 747,
            'department_id' => 17,
            'code' => 352,
            'name' => 'ILES'
        ], [
            'id' => 748,
            'department_id' => 17,
            'code' => 354,
            'name' => 'IMUES'
        ], [
            'id' => 749,
            'department_id' => 17,
            'code' => 356,
            'name' => 'IPIALES'
        ], [
            'id' => 750,
            'department_id' => 17,
            'code' => 378,
            'name' => 'LA CRUZ'
        ], [
            'id' => 751,
            'department_id' => 17,
            'code' => 381,
            'name' => 'LA FLORIDA'
        ], [
            'id' => 752,
            'department_id' => 17,
            'code' => 385,
            'name' => 'LA LLANADA'
        ], [
            'id' => 753,
            'department_id' => 17,
            'code' => 390,
            'name' => 'LA TOLA'
        ], [
            'id' => 754,
            'department_id' => 17,
            'code' => 399,
            'name' => 'LA UNION'
        ], [
            'id' => 755,
            'department_id' => 17,
            'code' => 405,
            'name' => 'LEIVA'
        ], [
            'id' => 756,
            'department_id' => 17,
            'code' => 411,
            'name' => 'LINARES'
        ], [
            'id' => 757,
            'department_id' => 17,
            'code' => 418,
            'name' => 'LOS ANDES (SOTOMAYOR)'
        ], [
            'id' => 758,
            'department_id' => 17,
            'code' => 427,
            'name' => 'MAGUI (PAYAN)'
        ], [
            'id' => 759,
            'department_id' => 17,
            'code' => 435,
            'name' => 'MALLAMA (PIEDRANCHA)'
        ], [
            'id' => 760,
            'department_id' => 17,
            'code' => 473,
            'name' => 'MOSQUERA'
        ], [
            'id' => 761,
            'department_id' => 17,
            'code' => 490,
            'name' => 'OLAYA HERRERA (BOCAS DE SATINGA)'
        ], [
            'id' => 762,
            'department_id' => 17,
            'code' => 506,
            'name' => 'OSPINA'
        ], [
            'id' => 763,
            'department_id' => 17,
            'code' => 520,
            'name' => 'FRANCISCO PIZARRO (SALAHONDA)'
        ], [
            'id' => 764,
            'department_id' => 17,
            'code' => 540,
            'name' => 'POLICARPA'
        ], [
            'id' => 765,
            'department_id' => 17,
            'code' => 560,
            'name' => 'POTOSI'
        ], [
            'id' => 766,
            'department_id' => 17,
            'code' => 565,
            'name' => 'PROVIDENCIA'
        ], [
            'id' => 767,
            'department_id' => 17,
            'code' => 573,
            'name' => 'PUERRES'
        ], [
            'id' => 768,
            'department_id' => 17,
            'code' => 585,
            'name' => 'PUPIALES'
        ], [
            'id' => 769,
            'department_id' => 17,
            'code' => 612,
            'name' => 'RICAURTE'
        ], [
            'id' => 770,
            'department_id' => 17,
            'code' => 621,
            'name' => 'ROBERTO PAYAN (SAN JOSE)'
        ], [
            'id' => 771,
            'department_id' => 17,
            'code' => 678,
            'name' => 'SAMANIEGO'
        ], [
            'id' => 772,
            'department_id' => 17,
            'code' => 683,
            'name' => 'SANDONA'
        ], [
            'id' => 773,
            'department_id' => 17,
            'code' => 685,
            'name' => 'SAN BERNARDO'
        ], [
            'id' => 774,
            'department_id' => 17,
            'code' => 687,
            'name' => 'SAN LORENZO'
        ], [
            'id' => 775,
            'department_id' => 17,
            'code' => 693,
            'name' => 'SAN PABLO'
        ], [
            'id' => 776,
            'department_id' => 17,
            'code' => 694,
            'name' => 'SAN PEDRO DE CARTAGO'
        ], [
            'id' => 777,
            'department_id' => 17,
            'code' => 696,
            'name' => 'SANTA BARBARA (ISCUANDE)'
        ], [
            'id' => 778,
            'department_id' => 17,
            'code' => 699,
            'name' => 'SANTA CRUZ (GUACHAVES)'
        ], [
            'id' => 779,
            'department_id' => 17,
            'code' => 720,
            'name' => 'SAPUYES'
        ], [
            'id' => 780,
            'department_id' => 17,
            'code' => 786,
            'name' => 'TAMINANGO'
        ], [
            'id' => 781,
            'department_id' => 17,
            'code' => 788,
            'name' => 'TANGUA'
        ], [
            'id' => 782,
            'department_id' => 17,
            'code' => 835,
            'name' => 'TUMACO'
        ], [
            'id' => 783,
            'department_id' => 17,
            'code' => 838,
            'name' => 'TUQUERRES'
        ], [
            'id' => 784,
            'department_id' => 17,
            'code' => 885,
            'name' => 'YACUANQUER'
        ], [
            'id' => 785,
            'department_id' => 18,
            'code' => 1,
            'name' => 'CUCUTA'
        ], [
            'id' => 786,
            'department_id' => 18,
            'code' => 3,
            'name' => 'ABREGO'
        ], [
            'id' => 787,
            'department_id' => 18,
            'code' => 51,
            'name' => 'ARBOLEDAS'
        ], [
            'id' => 788,
            'department_id' => 18,
            'code' => 99,
            'name' => 'BOCHALEMA'
        ], [
            'id' => 789,
            'department_id' => 18,
            'code' => 109,
            'name' => 'BUCARASICA'
        ], [
            'id' => 790,
            'department_id' => 18,
            'code' => 125,
            'name' => 'CACOTA'
        ], [
            'id' => 791,
            'department_id' => 18,
            'code' => 128,
            'name' => 'CACHIRA'
        ], [
            'id' => 792,
            'department_id' => 18,
            'code' => 172,
            'name' => 'CHINACOTA'
        ], [
            'id' => 793,
            'department_id' => 18,
            'code' => 174,
            'name' => 'CHITAGA'
        ], [
            'id' => 794,
            'department_id' => 18,
            'code' => 206,
            'name' => 'CONVENCION'
        ], [
            'id' => 795,
            'department_id' => 18,
            'code' => 223,
            'name' => 'CUCUTILLA'
        ], [
            'id' => 796,
            'department_id' => 18,
            'code' => 239,
            'name' => 'DURANIA'
        ], [
            'id' => 797,
            'department_id' => 18,
            'code' => 245,
            'name' => 'EL CARMEN'
        ], [
            'id' => 798,
            'department_id' => 18,
            'code' => 250,
            'name' => 'EL TARRA'
        ], [
            'id' => 799,
            'department_id' => 18,
            'code' => 261,
            'name' => 'EL ZULIA'
        ], [
            'id' => 800,
            'department_id' => 18,
            'code' => 313,
            'name' => 'GRAMALOTE'
        ], [
            'id' => 801,
            'department_id' => 18,
            'code' => 344,
            'name' => 'HACARI'
        ], [
            'id' => 802,
            'department_id' => 18,
            'code' => 347,
            'name' => 'HERRAN'
        ], [
            'id' => 803,
            'department_id' => 18,
            'code' => 377,
            'name' => 'LABATECA'
        ], [
            'id' => 804,
            'department_id' => 18,
            'code' => 385,
            'name' => 'LA ESPERANZA'
        ], [
            'id' => 805,
            'department_id' => 18,
            'code' => 398,
            'name' => 'LA PLAYA'
        ], [
            'id' => 806,
            'department_id' => 18,
            'code' => 405,
            'name' => 'LOS PATIOS'
        ], [
            'id' => 807,
            'department_id' => 18,
            'code' => 418,
            'name' => 'LOURDES'
        ], [
            'id' => 808,
            'department_id' => 18,
            'code' => 480,
            'name' => 'MUTISCUA'
        ], [
            'id' => 809,
            'department_id' => 18,
            'code' => 498,
            'name' => 'OCAÑA'
        ], [
            'id' => 810,
            'department_id' => 18,
            'code' => 518,
            'name' => 'PAMPLONA'
        ], [
            'id' => 811,
            'department_id' => 18,
            'code' => 520,
            'name' => 'PAMPLONITA'
        ], [
            'id' => 812,
            'department_id' => 18,
            'code' => 553,
            'name' => 'PUERTO SANTANDER'
        ], [
            'id' => 813,
            'department_id' => 18,
            'code' => 599,
            'name' => 'RAGONVALIA'
        ], [
            'id' => 814,
            'department_id' => 18,
            'code' => 660,
            'name' => 'SALAZAR'
        ], [
            'id' => 815,
            'department_id' => 18,
            'code' => 670,
            'name' => 'SAN CALIXTO'
        ], [
            'id' => 816,
            'department_id' => 18,
            'code' => 673,
            'name' => 'SAN CAYETANO'
        ], [
            'id' => 817,
            'department_id' => 18,
            'code' => 680,
            'name' => 'SANTIAGO'
        ], [
            'id' => 818,
            'department_id' => 18,
            'code' => 720,
            'name' => 'SARDINATA'
        ], [
            'id' => 819,
            'department_id' => 18,
            'code' => 743,
            'name' => 'SILOS'
        ], [
            'id' => 820,
            'department_id' => 18,
            'code' => 800,
            'name' => 'TEORAMA'
        ], [
            'id' => 821,
            'department_id' => 18,
            'code' => 810,
            'name' => 'TIBU'
        ], [
            'id' => 822,
            'department_id' => 18,
            'code' => 820,
            'name' => 'TOLEDO'
        ], [
            'id' => 823,
            'department_id' => 18,
            'code' => 871,
            'name' => 'VILLACARO'
        ], [
            'id' => 824,
            'department_id' => 18,
            'code' => 874,
            'name' => 'VILLA DEL ROSARIO'
        ], [
            'id' => 825,
            'department_id' => 19,
            'code' => 1,
            'name' => 'ARMENIA'
        ], [
            'id' => 826,
            'department_id' => 19,
            'code' => 111,
            'name' => 'BUENAVISTA'
        ], [
            'id' => 827,
            'department_id' => 19,
            'code' => 130,
            'name' => 'CALARCA'
        ], [
            'id' => 828,
            'department_id' => 19,
            'code' => 190,
            'name' => 'CIRCASIA'
        ], [
            'id' => 829,
            'department_id' => 19,
            'code' => 212,
            'name' => 'CORDOBA'
        ], [
            'id' => 830,
            'department_id' => 19,
            'code' => 272,
            'name' => 'FILANDIA'
        ], [
            'id' => 831,
            'department_id' => 19,
            'code' => 302,
            'name' => 'GENOVA'
        ], [
            'id' => 832,
            'department_id' => 19,
            'code' => 401,
            'name' => 'LA TEBAIDA'
        ], [
            'id' => 833,
            'department_id' => 19,
            'code' => 470,
            'name' => 'MONTENEGRO'
        ], [
            'id' => 834,
            'department_id' => 19,
            'code' => 548,
            'name' => 'PIJAO'
        ], [
            'id' => 835,
            'department_id' => 19,
            'code' => 594,
            'name' => 'QUIMBAYA'
        ], [
            'id' => 836,
            'department_id' => 19,
            'code' => 690,
            'name' => 'SALENTO'
        ], [
            'id' => 837,
            'department_id' => 20,
            'code' => 1,
            'name' => 'PEREIRA'
        ], [
            'id' => 838,
            'department_id' => 20,
            'code' => 45,
            'name' => 'APIA'
        ], [
            'id' => 839,
            'department_id' => 20,
            'code' => 75,
            'name' => 'BALBOA'
        ], [
            'id' => 840,
            'department_id' => 20,
            'code' => 88,
            'name' => 'BELEN DE UMBRIA'
        ], [
            'id' => 841,
            'department_id' => 20,
            'code' => 170,
            'name' => 'DOS QUEBRADAS'
        ], [
            'id' => 842,
            'department_id' => 20,
            'code' => 318,
            'name' => 'GUATICA'
        ], [
            'id' => 843,
            'department_id' => 20,
            'code' => 383,
            'name' => 'LA CELIA'
        ], [
            'id' => 844,
            'department_id' => 20,
            'code' => 400,
            'name' => 'LA VIRGINIA'
        ], [
            'id' => 845,
            'department_id' => 20,
            'code' => 440,
            'name' => 'MARSELLA'
        ], [
            'id' => 846,
            'department_id' => 20,
            'code' => 456,
            'name' => 'MISTRATO'
        ], [
            'id' => 847,
            'department_id' => 20,
            'code' => 572,
            'name' => 'PUEBLO RICO'
        ], [
            'id' => 848,
            'department_id' => 20,
            'code' => 594,
            'name' => 'QUINCHIA'
        ], [
            'id' => 849,
            'department_id' => 20,
            'code' => 682,
            'name' => 'SANTA ROSA DE CABAL'
        ], [
            'id' => 850,
            'department_id' => 20,
            'code' => 687,
            'name' => 'SANTUARIO'
        ], [
            'id' => 851,
            'department_id' => 21,
            'code' => 1,
            'name' => 'BUCARAMANGA'
        ], [
            'id' => 852,
            'department_id' => 21,
            'code' => 13,
            'name' => 'AGUADA'
        ], [
            'id' => 853,
            'department_id' => 21,
            'code' => 20,
            'name' => 'ALBANIA'
        ], [
            'id' => 854,
            'department_id' => 21,
            'code' => 51,
            'name' => 'ARATOCA'
        ], [
            'id' => 855,
            'department_id' => 21,
            'code' => 77,
            'name' => 'BARBOSA'
        ], [
            'id' => 856,
            'department_id' => 21,
            'code' => 79,
            'name' => 'BARICHARA'
        ], [
            'id' => 857,
            'department_id' => 21,
            'code' => 81,
            'name' => 'BARRANCABERMEJA'
        ], [
            'id' => 858,
            'department_id' => 21,
            'code' => 92,
            'name' => 'BETULIA'
        ], [
            'id' => 859,
            'department_id' => 21,
            'code' => 101,
            'name' => 'BOLIVAR'
        ], [
            'id' => 860,
            'department_id' => 21,
            'code' => 121,
            'name' => 'CABRERA'
        ], [
            'id' => 861,
            'department_id' => 21,
            'code' => 132,
            'name' => 'CALIFORNIA'
        ], [
            'id' => 862,
            'department_id' => 21,
            'code' => 147,
            'name' => 'CAPITANEJO'
        ], [
            'id' => 863,
            'department_id' => 21,
            'code' => 152,
            'name' => 'CARCASI'
        ], [
            'id' => 864,
            'department_id' => 21,
            'code' => 160,
            'name' => 'CEPITA'
        ], [
            'id' => 865,
            'department_id' => 21,
            'code' => 162,
            'name' => 'CERRITO'
        ], [
            'id' => 866,
            'department_id' => 21,
            'code' => 167,
            'name' => 'CHARALA'
        ], [
            'id' => 867,
            'department_id' => 21,
            'code' => 169,
            'name' => 'CHARTA'
        ], [
            'id' => 868,
            'department_id' => 21,
            'code' => 176,
            'name' => 'CHIMA'
        ], [
            'id' => 869,
            'department_id' => 21,
            'code' => 179,
            'name' => 'CHIPATA'
        ], [
            'id' => 870,
            'department_id' => 21,
            'code' => 190,
            'name' => 'CIMITARRA'
        ], [
            'id' => 871,
            'department_id' => 21,
            'code' => 207,
            'name' => 'CONCEPCION'
        ], [
            'id' => 872,
            'department_id' => 21,
            'code' => 209,
            'name' => 'CONFINES'
        ], [
            'id' => 873,
            'department_id' => 21,
            'code' => 211,
            'name' => 'CONTRATACION'
        ], [
            'id' => 874,
            'department_id' => 21,
            'code' => 217,
            'name' => 'COROMORO'
        ], [
            'id' => 875,
            'department_id' => 21,
            'code' => 229,
            'name' => 'CURITI'
        ], [
            'id' => 876,
            'department_id' => 21,
            'code' => 235,
            'name' => 'EL CARMEN DE CHUCURY'
        ], [
            'id' => 877,
            'department_id' => 21,
            'code' => 245,
            'name' => 'EL GUACAMAYO'
        ], [
            'id' => 878,
            'department_id' => 21,
            'code' => 250,
            'name' => 'EL PEÑON'
        ], [
            'id' => 879,
            'department_id' => 21,
            'code' => 255,
            'name' => 'EL PLAYON'
        ], [
            'id' => 880,
            'department_id' => 21,
            'code' => 264,
            'name' => 'ENCINO'
        ], [
            'id' => 881,
            'department_id' => 21,
            'code' => 266,
            'name' => 'ENCISO'
        ], [
            'id' => 882,
            'department_id' => 21,
            'code' => 271,
            'name' => 'FLORIAN'
        ], [
            'id' => 883,
            'department_id' => 21,
            'code' => 276,
            'name' => 'FLORIDABLANCA'
        ], [
            'id' => 884,
            'department_id' => 21,
            'code' => 296,
            'name' => 'GALAN'
        ], [
            'id' => 885,
            'department_id' => 21,
            'code' => 298,
            'name' => 'GAMBITA'
        ], [
            'id' => 886,
            'department_id' => 21,
            'code' => 307,
            'name' => 'GIRON'
        ], [
            'id' => 887,
            'department_id' => 21,
            'code' => 318,
            'name' => 'GUACA'
        ], [
            'id' => 888,
            'department_id' => 21,
            'code' => 320,
            'name' => 'GUADALUPE'
        ], [
            'id' => 889,
            'department_id' => 21,
            'code' => 322,
            'name' => 'GUAPOTA'
        ], [
            'id' => 890,
            'department_id' => 21,
            'code' => 324,
            'name' => 'GUAVATA'
        ], [
            'id' => 891,
            'department_id' => 21,
            'code' => 327,
            'name' => 'GUEPSA'
        ], [
            'id' => 892,
            'department_id' => 21,
            'code' => 344,
            'name' => 'HATO'
        ], [
            'id' => 893,
            'department_id' => 21,
            'code' => 368,
            'name' => 'JESUS MARIA'
        ], [
            'id' => 894,
            'department_id' => 21,
            'code' => 370,
            'name' => 'JORDAN'
        ], [
            'id' => 895,
            'department_id' => 21,
            'code' => 377,
            'name' => 'LA BELLEZA'
        ], [
            'id' => 896,
            'department_id' => 21,
            'code' => 385,
            'name' => 'LANDAZURI'
        ], [
            'id' => 897,
            'department_id' => 21,
            'code' => 397,
            'name' => 'LA PAZ'
        ], [
            'id' => 898,
            'department_id' => 21,
            'code' => 406,
            'name' => 'LEBRIJA'
        ], [
            'id' => 899,
            'department_id' => 21,
            'code' => 418,
            'name' => 'LOS SANTOS'
        ], [
            'id' => 900,
            'department_id' => 21,
            'code' => 425,
            'name' => 'MACARAVITA'
        ], [
            'id' => 901,
            'department_id' => 21,
            'code' => 432,
            'name' => 'MALAGA'
        ], [
            'id' => 902,
            'department_id' => 21,
            'code' => 444,
            'name' => 'MATANZA'
        ], [
            'id' => 903,
            'department_id' => 21,
            'code' => 464,
            'name' => 'MOGOTES'
        ], [
            'id' => 904,
            'department_id' => 21,
            'code' => 468,
            'name' => 'MOLAGAVITA'
        ], [
            'id' => 905,
            'department_id' => 21,
            'code' => 498,
            'name' => 'OCAMONTE'
        ], [
            'id' => 906,
            'department_id' => 21,
            'code' => 500,
            'name' => 'OIBA'
        ], [
            'id' => 907,
            'department_id' => 21,
            'code' => 502,
            'name' => 'ONZAGA'
        ], [
            'id' => 908,
            'department_id' => 21,
            'code' => 522,
            'name' => 'PALMAR'
        ], [
            'id' => 909,
            'department_id' => 21,
            'code' => 524,
            'name' => 'PALMAS DEL SOCORRO'
        ], [
            'id' => 910,
            'department_id' => 21,
            'code' => 533,
            'name' => 'PARAMO'
        ], [
            'id' => 911,
            'department_id' => 21,
            'code' => 547,
            'name' => 'PIEDECUESTA'
        ], [
            'id' => 912,
            'department_id' => 21,
            'code' => 549,
            'name' => 'PINCHOTE'
        ], [
            'id' => 913,
            'department_id' => 21,
            'code' => 572,
            'name' => 'PUENTE NACIONAL'
        ], [
            'id' => 914,
            'department_id' => 21,
            'code' => 573,
            'name' => 'PUERTO PARRA'
        ], [
            'id' => 915,
            'department_id' => 21,
            'code' => 575,
            'name' => 'PUERTO WILCHES'
        ], [
            'id' => 916,
            'department_id' => 21,
            'code' => 615,
            'name' => 'RIONEGRO'
        ], [
            'id' => 917,
            'department_id' => 21,
            'code' => 655,
            'name' => 'SABANA DE TORRES'
        ], [
            'id' => 918,
            'department_id' => 21,
            'code' => 669,
            'name' => 'SAN ANDRES'
        ], [
            'id' => 919,
            'department_id' => 21,
            'code' => 673,
            'name' => 'SAN BENITO'
        ], [
            'id' => 920,
            'department_id' => 21,
            'code' => 679,
            'name' => 'SAN GIL'
        ], [
            'id' => 921,
            'department_id' => 21,
            'code' => 682,
            'name' => 'SAN JOAQUIN'
        ], [
            'id' => 922,
            'department_id' => 21,
            'code' => 684,
            'name' => 'SAN JOSE DE MIRANDA'
        ], [
            'id' => 923,
            'department_id' => 21,
            'code' => 686,
            'name' => 'SAN MIGUEL'
        ], [
            'id' => 924,
            'department_id' => 21,
            'code' => 689,
            'name' => 'SAN VICENTE DE CHUCURI'
        ], [
            'id' => 925,
            'department_id' => 21,
            'code' => 705,
            'name' => 'SANTA BARBARA'
        ], [
            'id' => 926,
            'department_id' => 21,
            'code' => 720,
            'name' => 'SANTA HELENA DEL OPON'
        ], [
            'id' => 927,
            'department_id' => 21,
            'code' => 745,
            'name' => 'SIMACOTA'
        ], [
            'id' => 928,
            'department_id' => 21,
            'code' => 755,
            'name' => 'SOCORRO'
        ], [
            'id' => 929,
            'department_id' => 21,
            'code' => 770,
            'name' => 'SUAITA'
        ], [
            'id' => 930,
            'department_id' => 21,
            'code' => 773,
            'name' => 'SUCRE'
        ], [
            'id' => 931,
            'department_id' => 21,
            'code' => 780,
            'name' => 'SURATA'
        ], [
            'id' => 932,
            'department_id' => 21,
            'code' => 820,
            'name' => 'TONA'
        ], [
            'id' => 933,
            'department_id' => 21,
            'code' => 855,
            'name' => 'VALLE SAN JOSE'
        ], [
            'id' => 934,
            'department_id' => 21,
            'code' => 861,
            'name' => 'VELEZ'
        ], [
            'id' => 935,
            'department_id' => 21,
            'code' => 867,
            'name' => 'VETAS'
        ], [
            'id' => 936,
            'department_id' => 21,
            'code' => 872,
            'name' => 'VILLANUEVA'
        ], [
            'id' => 937,
            'department_id' => 21,
            'code' => 895,
            'name' => 'ZAPATOCA'
        ], [
            'id' => 938,
            'department_id' => 22,
            'code' => 1,
            'name' => 'SINCELEJO'
        ], [
            'id' => 939,
            'department_id' => 22,
            'code' => 110,
            'name' => 'BUENAVISTA'
        ], [
            'id' => 940,
            'department_id' => 22,
            'code' => 124,
            'name' => 'CAIMITO'
        ], [
            'id' => 941,
            'department_id' => 22,
            'code' => 204,
            'name' => 'COLOSO (RICAURTE)'
        ], [
            'id' => 942,
            'department_id' => 22,
            'code' => 215,
            'name' => 'COROZAL'
        ], [
            'id' => 943,
            'department_id' => 22,
            'code' => 230,
            'name' => 'CHALAN'
        ], [
            'id' => 944,
            'department_id' => 22,
            'code' => 235,
            'name' => 'GALERAS (NUEVA GRANADA)'
        ], [
            'id' => 945,
            'department_id' => 22,
            'code' => 265,
            'name' => 'GUARANDA'
        ], [
            'id' => 946,
            'department_id' => 22,
            'code' => 400,
            'name' => 'LA UNION'
        ], [
            'id' => 947,
            'department_id' => 22,
            'code' => 418,
            'name' => 'LOS PALMITOS'
        ], [
            'id' => 948,
            'department_id' => 22,
            'code' => 429,
            'name' => 'MAJAGUAL'
        ], [
            'id' => 949,
            'department_id' => 22,
            'code' => 473,
            'name' => 'MORROA'
        ], [
            'id' => 950,
            'department_id' => 22,
            'code' => 508,
            'name' => 'OVEJAS'
        ], [
            'id' => 951,
            'department_id' => 22,
            'code' => 523,
            'name' => 'PALMITO'
        ], [
            'id' => 952,
            'department_id' => 22,
            'code' => 670,
            'name' => 'SAMPUES'
        ], [
            'id' => 953,
            'department_id' => 22,
            'code' => 678,
            'name' => 'SAN BENITO ABAD'
        ], [
            'id' => 954,
            'department_id' => 22,
            'code' => 702,
            'name' => 'SAN JUAN DE BETULIA'
        ], [
            'id' => 955,
            'department_id' => 22,
            'code' => 708,
            'name' => 'SAN MARCOS'
        ], [
            'id' => 956,
            'department_id' => 22,
            'code' => 713,
            'name' => 'SAN ONOFRE'
        ], [
            'id' => 957,
            'department_id' => 22,
            'code' => 717,
            'name' => 'SAN PEDRO'
        ], [
            'id' => 958,
            'department_id' => 22,
            'code' => 742,
            'name' => 'SINCE'
        ], [
            'id' => 959,
            'department_id' => 22,
            'code' => 771,
            'name' => 'SUCRE'
        ], [
            'id' => 960,
            'department_id' => 22,
            'code' => 820,
            'name' => 'TOLU'
        ], [
            'id' => 961,
            'department_id' => 22,
            'code' => 823,
            'name' => 'TOLUVIEJO'
        ], [
            'id' => 962,
            'department_id' => 23,
            'code' => 1,
            'name' => 'IBAGUE'
        ], [
            'id' => 963,
            'department_id' => 23,
            'code' => 24,
            'name' => 'ALPUJARRA'
        ], [
            'id' => 964,
            'department_id' => 23,
            'code' => 26,
            'name' => 'ALVARADO'
        ], [
            'id' => 965,
            'department_id' => 23,
            'code' => 30,
            'name' => 'AMBALEMA'
        ], [
            'id' => 966,
            'department_id' => 23,
            'code' => 43,
            'name' => 'ANZOATEGUI'
        ], [
            'id' => 967,
            'department_id' => 23,
            'code' => 55,
            'name' => 'ARMERO (GUAYABAL)'
        ], [
            'id' => 968,
            'department_id' => 23,
            'code' => 67,
            'name' => 'ATACO'
        ], [
            'id' => 969,
            'department_id' => 23,
            'code' => 124,
            'name' => 'CAJAMARCA'
        ], [
            'id' => 970,
            'department_id' => 23,
            'code' => 148,
            'name' => 'CARMEN APICALA'
        ], [
            'id' => 971,
            'department_id' => 23,
            'code' => 152,
            'name' => 'CASABIANCA'
        ], [
            'id' => 972,
            'department_id' => 23,
            'code' => 168,
            'name' => 'CHAPARRAL'
        ], [
            'id' => 973,
            'department_id' => 23,
            'code' => 200,
            'name' => 'COELLO'
        ], [
            'id' => 974,
            'department_id' => 23,
            'code' => 217,
            'name' => 'COYAIMA'
        ], [
            'id' => 975,
            'department_id' => 23,
            'code' => 226,
            'name' => 'CUNDAY'
        ], [
            'id' => 976,
            'department_id' => 23,
            'code' => 236,
            'name' => 'DOLORES'
        ], [
            'id' => 977,
            'department_id' => 23,
            'code' => 268,
            'name' => 'ESPINAL'
        ], [
            'id' => 978,
            'department_id' => 23,
            'code' => 270,
            'name' => 'FALAN'
        ], [
            'id' => 979,
            'department_id' => 23,
            'code' => 275,
            'name' => 'FLANDES'
        ], [
            'id' => 980,
            'department_id' => 23,
            'code' => 283,
            'name' => 'FRESNO'
        ], [
            'id' => 981,
            'department_id' => 23,
            'code' => 319,
            'name' => 'GUAMO'
        ], [
            'id' => 982,
            'department_id' => 23,
            'code' => 347,
            'name' => 'HERVEO'
        ], [
            'id' => 983,
            'department_id' => 23,
            'code' => 349,
            'name' => 'HONDA'
        ], [
            'id' => 984,
            'department_id' => 23,
            'code' => 352,
            'name' => 'ICONONZO'
        ], [
            'id' => 985,
            'department_id' => 23,
            'code' => 408,
            'name' => 'LERIDA'
        ], [
            'id' => 986,
            'department_id' => 23,
            'code' => 411,
            'name' => 'LIBANO'
        ], [
            'id' => 987,
            'department_id' => 23,
            'code' => 443,
            'name' => 'MARIQUITA'
        ], [
            'id' => 988,
            'department_id' => 23,
            'code' => 449,
            'name' => 'MELGAR'
        ], [
            'id' => 989,
            'department_id' => 23,
            'code' => 461,
            'name' => 'MURILLO'
        ], [
            'id' => 990,
            'department_id' => 23,
            'code' => 483,
            'name' => 'NATAGAIMA'
        ], [
            'id' => 991,
            'department_id' => 23,
            'code' => 504,
            'name' => 'ORTEGA'
        ], [
            'id' => 992,
            'department_id' => 23,
            'code' => 520,
            'name' => 'PALOCABILDO'
        ], [
            'id' => 993,
            'department_id' => 23,
            'code' => 547,
            'name' => 'PIEDRAS'
        ], [
            'id' => 994,
            'department_id' => 23,
            'code' => 555,
            'name' => 'PLANADAS'
        ], [
            'id' => 995,
            'department_id' => 23,
            'code' => 563,
            'name' => 'PRADO'
        ], [
            'id' => 996,
            'department_id' => 23,
            'code' => 585,
            'name' => 'PURIFICACION'
        ], [
            'id' => 997,
            'department_id' => 23,
            'code' => 616,
            'name' => 'RIOBLANCO'
        ], [
            'id' => 998,
            'department_id' => 23,
            'code' => 622,
            'name' => 'RONCESVALLES'
        ], [
            'id' => 999,
            'department_id' => 23,
            'code' => 624,
            'name' => 'ROVIRA'
        ], [
            'id' => 1000,
            'department_id' => 23,
            'code' => 671,
            'name' => 'SALDAÑA'
        ], [
            'id' => 1001,
            'department_id' => 23,
            'code' => 675,
            'name' => 'SAN ANTONIO'
        ], [
            'id' => 1002,
            'department_id' => 23,
            'code' => 678,
            'name' => 'SAN LUIS'
        ], [
            'id' => 1003,
            'department_id' => 23,
            'code' => 686,
            'name' => 'SANTA ISABEL'
        ], [
            'id' => 1004,
            'department_id' => 23,
            'code' => 770,
            'name' => 'SUAREZ'
        ], [
            'id' => 1005,
            'department_id' => 23,
            'code' => 854,
            'name' => 'VALLE DE SAN JUAN'
        ], [
            'id' => 1006,
            'department_id' => 23,
            'code' => 861,
            'name' => 'VENADILLO'
        ], [
            'id' => 1007,
            'department_id' => 23,
            'code' => 870,
            'name' => 'VILLAHERMOSA'
        ], [
            'id' => 1008,
            'department_id' => 23,
            'code' => 873,
            'name' => 'VILLARRICA'
        ], [
            'id' => 1009,
            'department_id' => 24,
            'code' => 1,
            'name' => 'CALI (SANTIAGO DE CALI)'
        ], [
            'id' => 1010,
            'department_id' => 24,
            'code' => 20,
            'name' => 'ALCALA'
        ], [
            'id' => 1011,
            'department_id' => 24,
            'code' => 36,
            'name' => 'ANDALUCIA'
        ], [
            'id' => 1012,
            'department_id' => 24,
            'code' => 41,
            'name' => 'ANSERMANUEVO'
        ], [
            'id' => 1013,
            'department_id' => 24,
            'code' => 54,
            'name' => 'ARGELIA'
        ], [
            'id' => 1014,
            'department_id' => 24,
            'code' => 100,
            'name' => 'BOLIVAR'
        ], [
            'id' => 1015,
            'department_id' => 24,
            'code' => 109,
            'name' => 'BUENAVENTURA'
        ], [
            'id' => 1016,
            'department_id' => 24,
            'code' => 111,
            'name' => 'BUGA'
        ], [
            'id' => 1017,
            'department_id' => 24,
            'code' => 113,
            'name' => 'BUGALAGRANDE'
        ], [
            'id' => 1018,
            'department_id' => 24,
            'code' => 122,
            'name' => 'CAICEDONIA'
        ], [
            'id' => 1019,
            'department_id' => 24,
            'code' => 126,
            'name' => 'CALIMA (DARIEN)'
        ], [
            'id' => 1020,
            'department_id' => 24,
            'code' => 130,
            'name' => 'CANDELARIA'
        ], [
            'id' => 1021,
            'department_id' => 24,
            'code' => 147,
            'name' => 'CARTAGO'
        ], [
            'id' => 1022,
            'department_id' => 24,
            'code' => 233,
            'name' => 'DAGUA'
        ], [
            'id' => 1023,
            'department_id' => 24,
            'code' => 243,
            'name' => 'EL AGUILA'
        ], [
            'id' => 1024,
            'department_id' => 24,
            'code' => 246,
            'name' => 'EL CAIRO'
        ], [
            'id' => 1025,
            'department_id' => 24,
            'code' => 248,
            'name' => 'EL CERRITO'
        ], [
            'id' => 1026,
            'department_id' => 24,
            'code' => 250,
            'name' => 'EL DOVIO'
        ], [
            'id' => 1027,
            'department_id' => 24,
            'code' => 275,
            'name' => 'FLORIDA'
        ], [
            'id' => 1028,
            'department_id' => 24,
            'code' => 306,
            'name' => 'GINEBRA'
        ], [
            'id' => 1029,
            'department_id' => 24,
            'code' => 318,
            'name' => 'GUACARI'
        ], [
            'id' => 1030,
            'department_id' => 24,
            'code' => 364,
            'name' => 'JAMUNDI'
        ], [
            'id' => 1031,
            'department_id' => 24,
            'code' => 377,
            'name' => 'LA CUMBRE'
        ], [
            'id' => 1032,
            'department_id' => 24,
            'code' => 400,
            'name' => 'LA UNION'
        ], [
            'id' => 1033,
            'department_id' => 24,
            'code' => 403,
            'name' => 'LA VICTORIA'
        ], [
            'id' => 1034,
            'department_id' => 24,
            'code' => 497,
            'name' => 'OBANDO'
        ], [
            'id' => 1035,
            'department_id' => 24,
            'code' => 520,
            'name' => 'PALMIRA'
        ], [
            'id' => 1036,
            'department_id' => 24,
            'code' => 563,
            'name' => 'PRADERA'
        ], [
            'id' => 1037,
            'department_id' => 24,
            'code' => 606,
            'name' => 'RESTREPO'
        ], [
            'id' => 1038,
            'department_id' => 24,
            'code' => 616,
            'name' => 'RIOFRIO'
        ], [
            'id' => 1039,
            'department_id' => 24,
            'code' => 622,
            'name' => 'ROLDANILLO'
        ], [
            'id' => 1040,
            'department_id' => 24,
            'code' => 670,
            'name' => 'SAN PEDRO'
        ], [
            'id' => 1041,
            'department_id' => 24,
            'code' => 736,
            'name' => 'SEVILLA'
        ], [
            'id' => 1042,
            'department_id' => 24,
            'code' => 823,
            'name' => 'TORO'
        ], [
            'id' => 1043,
            'department_id' => 24,
            'code' => 828,
            'name' => 'TRUJILLO'
        ], [
            'id' => 1044,
            'department_id' => 24,
            'code' => 834,
            'name' => 'TULUA'
        ], [
            'id' => 1045,
            'department_id' => 24,
            'code' => 845,
            'name' => 'ULLOA'
        ], [
            'id' => 1046,
            'department_id' => 24,
            'code' => 863,
            'name' => 'VERSALLES'
        ], [
            'id' => 1047,
            'department_id' => 24,
            'code' => 869,
            'name' => 'VIJES'
        ], [
            'id' => 1048,
            'department_id' => 24,
            'code' => 890,
            'name' => 'YOTOCO'
        ], [
            'id' => 1049,
            'department_id' => 24,
            'code' => 892,
            'name' => 'YUMBO'
        ], [
            'id' => 1050,
            'department_id' => 24,
            'code' => 895,
            'name' => 'ZARZAL'
        ], [
            'id' => 1051,
            'department_id' => 25,
            'code' => 1,
            'name' => 'ARAUCA'
        ], [
            'id' => 1052,
            'department_id' => 25,
            'code' => 65,
            'name' => 'ARAUQUITA'
        ], [
            'id' => 1053,
            'department_id' => 25,
            'code' => 220,
            'name' => 'CRAVO NORTE'
        ], [
            'id' => 1054,
            'department_id' => 25,
            'code' => 300,
            'name' => 'FORTUL'
        ], [
            'id' => 1055,
            'department_id' => 25,
            'code' => 591,
            'name' => 'PUERTO RONDON'
        ], [
            'id' => 1056,
            'department_id' => 25,
            'code' => 736,
            'name' => 'SARAVENA'
        ], [
            'id' => 1057,
            'department_id' => 25,
            'code' => 794,
            'name' => 'TAME'
        ], [
            'id' => 1058,
            'department_id' => 26,
            'code' => 1,
            'name' => 'YOPAL'
        ], [
            'id' => 1059,
            'department_id' => 26,
            'code' => 10,
            'name' => 'AGUAZUL'
        ], [
            'id' => 1060,
            'department_id' => 26,
            'code' => 15,
            'name' => 'CHAMEZA'
        ], [
            'id' => 1061,
            'department_id' => 26,
            'code' => 125,
            'name' => 'HATO COROZAL'
        ], [
            'id' => 1062,
            'department_id' => 26,
            'code' => 136,
            'name' => 'LA SALINA'
        ], [
            'id' => 1063,
            'department_id' => 26,
            'code' => 139,
            'name' => 'MANI'
        ], [
            'id' => 1064,
            'department_id' => 26,
            'code' => 162,
            'name' => 'MONTERREY'
        ], [
            'id' => 1065,
            'department_id' => 26,
            'code' => 225,
            'name' => 'NUNCHIA'
        ], [
            'id' => 1066,
            'department_id' => 26,
            'code' => 230,
            'name' => 'OROCUE'
        ], [
            'id' => 1067,
            'department_id' => 26,
            'code' => 250,
            'name' => 'PAZ DE ARIPORO'
        ], [
            'id' => 1068,
            'department_id' => 26,
            'code' => 263,
            'name' => 'PORE'
        ], [
            'id' => 1069,
            'department_id' => 26,
            'code' => 279,
            'name' => 'RECETOR'
        ], [
            'id' => 1070,
            'department_id' => 26,
            'code' => 300,
            'name' => 'SABANALARGA'
        ], [
            'id' => 1071,
            'department_id' => 26,
            'code' => 315,
            'name' => 'SACAMA'
        ], [
            'id' => 1072,
            'department_id' => 26,
            'code' => 325,
            'name' => 'SAN LUIS DE PALENQUE'
        ], [
            'id' => 1073,
            'department_id' => 26,
            'code' => 400,
            'name' => 'TAMARA'
        ], [
            'id' => 1074,
            'department_id' => 26,
            'code' => 410,
            'name' => 'TAURAMENA'
        ], [
            'id' => 1075,
            'department_id' => 26,
            'code' => 430,
            'name' => 'TRINIDAD'
        ], [
            'id' => 1076,
            'department_id' => 26,
            'code' => 440,
            'name' => 'VILLANUEVA'
        ], [
            'id' => 1077,
            'department_id' => 27,
            'code' => 1,
            'name' => 'MOCOA'
        ], [
            'id' => 1078,
            'department_id' => 27,
            'code' => 219,
            'name' => 'COLON'
        ], [
            'id' => 1079,
            'department_id' => 27,
            'code' => 320,
            'name' => 'ORITO'
        ], [
            'id' => 1080,
            'department_id' => 27,
            'code' => 568,
            'name' => 'PUERTO ASIS'
        ], [
            'id' => 1081,
            'department_id' => 27,
            'code' => 569,
            'name' => 'PUERTO CAICEDO'
        ], [
            'id' => 1082,
            'department_id' => 27,
            'code' => 571,
            'name' => 'PUERTO GUZMAN'
        ], [
            'id' => 1083,
            'department_id' => 27,
            'code' => 573,
            'name' => 'PUERTO LEGUIZAMO'
        ], [
            'id' => 1084,
            'department_id' => 27,
            'code' => 749,
            'name' => 'SIBUNDOY'
        ], [
            'id' => 1085,
            'department_id' => 27,
            'code' => 755,
            'name' => 'SAN FRANCISCO'
        ], [
            'id' => 1086,
            'department_id' => 27,
            'code' => 757,
            'name' => 'SAN MIGUEL (LA DORADA)'
        ], [
            'id' => 1087,
            'department_id' => 27,
            'code' => 760,
            'name' => 'SANTIAGO'
        ], [
            'id' => 1088,
            'department_id' => 27,
            'code' => 865,
            'name' => 'LA HORMIGA (VALLE DEL GUAMUEZ)'
        ], [
            'id' => 1089,
            'department_id' => 27,
            'code' => 885,
            'name' => 'VILLAGARZON'
        ], [
            'id' => 1090,
            'department_id' => 28,
            'code' => 1,
            'name' => 'SAN ANDRES'
        ], [
            'id' => 1091,
            'department_id' => 28,
            'code' => 564,
            'name' => 'PROVIDENCIA'
        ], [
            'id' => 1092,
            'department_id' => 29,
            'code' => 1,
            'name' => 'LETICIA'
        ], [
            'id' => 1093,
            'department_id' => 29,
            'code' => 263,
            'name' => 'EL ENCANTO'
        ], [
            'id' => 1094,
            'department_id' => 29,
            'code' => 405,
            'name' => 'LA CHORRERA'
        ], [
            'id' => 1095,
            'department_id' => 29,
            'code' => 407,
            'name' => 'LA PEDRERA'
        ], [
            'id' => 1096,
            'department_id' => 29,
            'code' => 430,
            'name' => 'LA VICTORIA'
        ], [
            'id' => 1097,
            'department_id' => 29,
            'code' => 460,
            'name' => 'MIRITI-PARANA'
        ], [
            'id' => 1098,
            'department_id' => 29,
            'code' => 530,
            'name' => 'PUERTO ALEGRIA'
        ], [
            'id' => 1099,
            'department_id' => 29,
            'code' => 536,
            'name' => 'PUERTO ARICA'
        ], [
            'id' => 1100,
            'department_id' => 29,
            'code' => 540,
            'name' => 'PUERTO NARIÑO'
        ], [
            'id' => 1101,
            'department_id' => 29,
            'code' => 669,
            'name' => 'PUERTO SANTANDER'
        ], [
            'id' => 1102,
            'department_id' => 29,
            'code' => 798,
            'name' => 'TARAPACA'
        ], [
            'id' => 1103,
            'department_id' => 30,
            'code' => 1,
            'name' => 'PUERTO INIRIDA'
        ], [
            'id' => 1104,
            'department_id' => 30,
            'code' => 343,
            'name' => 'BARRANCO MINAS'
        ], [
            'id' => 1105,
            'department_id' => 30,
            'code' => 883,
            'name' => 'SAN FELIPE'
        ], [
            'id' => 1106,
            'department_id' => 30,
            'code' => 884,
            'name' => 'PUERTO COLOMBIA'
        ], [
            'id' => 1107,
            'department_id' => 30,
            'code' => 885,
            'name' => 'LA GUADALUPE'
        ], [
            'id' => 1108,
            'department_id' => 30,
            'code' => 886,
            'name' => 'CACAHUAL'
        ], [
            'id' => 1109,
            'department_id' => 30,
            'code' => 887,
            'name' => 'PANA PANA (CAMPO ALEGRE)'
        ], [
            'id' => 1110,
            'department_id' => 30,
            'code' => 888,
            'name' => 'MORICHAL (MORICHAL NUEVO)'
        ], [
            'id' => 1111,
            'department_id' => 31,
            'code' => 1,
            'name' => 'SAN JOSE DEL GUAVIARE'
        ], [
            'id' => 1112,
            'department_id' => 31,
            'code' => 15,
            'name' => 'CALAMAR'
        ], [
            'id' => 1113,
            'department_id' => 31,
            'code' => 25,
            'name' => 'EL RETORNO'
        ], [
            'id' => 1114,
            'department_id' => 31,
            'code' => 200,
            'name' => 'MIRAFLORES'
        ], [
            'id' => 1115,
            'department_id' => 32,
            'code' => 1,
            'name' => 'MITU'
        ], [
            'id' => 1116,
            'department_id' => 32,
            'code' => 161,
            'name' => 'CARURU'
        ], [
            'id' => 1117,
            'department_id' => 32,
            'code' => 511,
            'name' => 'PACOA'
        ], [
            'id' => 1118,
            'department_id' => 32,
            'code' => 666,
            'name' => 'TARAIRA'
        ], [
            'id' => 1119,
            'department_id' => 32,
            'code' => 777,
            'name' => 'PAPUNAUA (MORICHAL)'
        ], [
            'id' => 1120,
            'department_id' => 32,
            'code' => 889,
            'name' => 'YAVARATE'
        ], [
            'id' => 1121,
            'department_id' => 33,
            'code' => 1,
            'name' => 'PUERTO CARREÑO'
        ], [
            'id' => 1122,
            'department_id' => 33,
            'code' => 524,
            'name' => 'LA PRIMAVERA'
        ], [
            'id' => 1123,
            'department_id' => 33,
            'code' => 572,
            'name' => 'SANTA RITA'
        ], [
            'id' => 1124,
            'department_id' => 33,
            'code' => 666,
            'name' => 'SANTA ROSALIA'
        ], [
            'id' => 1125,
            'department_id' => 33,
            'code' => 760,
            'name' => 'SAN JOSE DE OCUNE'
        ], [
            'id' => 1126,
            'department_id' => 33,
            'code' => 773,
            'name' => 'CUMARIBO'
        ]];
        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
