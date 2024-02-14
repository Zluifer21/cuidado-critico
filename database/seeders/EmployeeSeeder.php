<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\IdentityType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            0 => [
                'dni' => '36696087',
                'last_name' => 'ALONSO BERDUGO',
                'name' => 'DHELYS ALICIA',
                'phone' => '3016984032',
                'email' => 'dhaa0109@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'JEFE ALMACEN',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            1 => [
                'dni' => '1083007165',
                'last_name' => 'ARANGO PEREIRA',
                'name' => 'CARLOS',
                'phone' => '3016664926',
                'email' => 'carlos.arangop01@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            2 => [
                'dni' => '7604232',
                'last_name' => 'CAMPO AMAYA',
                'name' => 'RAFAEL MAURICIO',
                'phone' => '3004378145',
                'email' => 'campoamaya@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO INTERNISTA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            3 => [
                'dni' => '36720898',
                'last_name' => 'CANTILLO HERNANDEZ',
                'name' => 'ZULEIMA',
                'phone' => '3104443680',
                'email' => 'marsolybrisa@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'AUXILIAR DE FACTURACION',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FACTURACION',
            ],
            4 => [
                'dni' => '1082935890',
                'last_name' => 'CARRILLO MIER',
                'name' => 'JOSE ALEJANDRO',
                'phone' => '3014859627',
                'email' => 'josecarr1991@gmail.com',
                'pp' => 'CONTADOR',
                'title' => 'JEFE COMPRAS',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            5 => [
                'dni' => '1004345213',
                'last_name' => 'CERVERA CABARCAS',
                'name' => 'LINETH',
                'phone' => '3017873167',
                'email' => 'linethcervera01@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'ADMISIONISTA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FACTURACION',
            ],
            6 => [
                'dni' => '57434182',
                'last_name' => 'DIAZ DIAZ',
                'name' => 'SAIDA ROSA',
                'phone' => '3173678231',
                'email' => 'sarodi2diaz@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'LIDER ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            7 => [
                'dni' => '57297333',
                'last_name' => 'DURAN OSIAS',
                'name' => 'YURANIS TAIS',
                'phone' => '3008365751',
                'email' => 'jefeyura@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'JEFE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            8 => [
                'dni' => '36726611',
                'last_name' => 'ECHAVARRIA PARDO',
                'name' => 'ISIS KARIMA',
                'phone' => '3016111659',
                'email' => 'ikep0609@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'ADMINISTRADOR',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'GERENCIA',
            ],
            9 => [
                'dni' => '7142764',
                'last_name' => 'ESPITIA ESPITIA',
                'name' => 'WILLINTON RAFAEL',
                'phone' => '3002783343',
                'email' => 'wilintonespitia122016@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'JEFE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            10 => [
                'dni' => '7602727',
                'last_name' => 'FANDIÑO RIOS',
                'name' => 'JORGE RAMON',
                'phone' => '3004879860',
                'email' => 'fandinoriosj@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            11 => [
                'dni' => '84451609',
                'last_name' => 'GARCIA FONTALVO',
                'name' => 'ZEUS',
                'phone' => '3044448806',
                'email' => 'zeussexto@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            12 => [
                'dni' => '1081824353',
                'last_name' => 'GUTIERREZ BLANQUIC',
                'name' => 'JOSE GREGORIO',
                'phone' => '3015614962',
                'email' => '3015614962jgb@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'AUXILIAR DE FARMACIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            13 => [
                'dni' => '56055077',
                'last_name' => 'LOPEZ LAVALLE',
                'name' => 'ALCIRA MARIA',
                'phone' => '3174475214',
                'email' => 'almalollita@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'TERAPIA RESPIRATORIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            14 => [
                'dni' => '36724298',
                'last_name' => 'LURAN BRITO',
                'name' => 'TATIANA',
                'phone' => '3007274742',
                'email' => 'tatianaluran575@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'JEFE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            15 => [
                'dni' => '36696560',
                'last_name' => 'MATTA MONTOYA',
                'name' => 'NINI JOHANNA',
                'phone' => '3005523343',
                'email' => 'tomasde26@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            16 => [
                'dni' => '85474996',
                'last_name' => 'MENDOZA HERNANDEZ',
                'name' => 'RODRIGO SEGUNDO',
                'phone' => '3046019410',
                'email' => 'rockymm@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO INTENSIVISTA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            17 => [
                'dni' => '1007783082',
                'last_name' => 'MORALES BOLAÑO',
                'name' => 'ANDRES FELIPE',
                'phone' => '3046632882',
                'email' => 'amoralesbolano@gmail.com',
                'pp' => 'CONTADOR',
                'title' => 'AUXILIAR CONTABLE',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FINANCIERO',
            ],
            18 => [
                'dni' => '7631382',
                'last_name' => 'MORENO REDONDO',
                'name' => 'ABEL',
                'phone' => '3106904508',
                'email' => 'abeljosemoreno@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'JEFE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            19 => [
                'dni' => '1129569577',
                'last_name' => 'ORTIZ ALTAMAR',
                'name' => 'VIRGILIO',
                'phone' => '3208334108',
                'email' => 'virgilio.ortiz@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'TERAPIA RESPIRATORIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            20 => [
                'dni' => '1004367824',
                'last_name' => 'PACHECO BALLESTA',
                'name' => 'ANDRES MIGUEL',
                'phone' => '3007642922',
                'email' => 'pachecoandres2211@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            21 => [
                'dni' => '1118840285',
                'last_name' => 'PADILLA FERRER',
                'name' => 'LUIS ANTONIO',
                'phone' => '3004400428',
                'email' => 'luiyidamo@hotmail.es',
                'pp' => 'CONTADOR',
                'title' => 'AUXILIAR DE CONTABILIDAD',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FINANCIERO',
            ],
            22 => [
                'dni' => '36562474',
                'last_name' => 'PALMA PATIÑO',
                'name' => 'TERESA DE JESUS',
                'phone' => '3008854941',
                'email' => 'teresadejesuspalma6@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'SERVICIO GENERALES',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            23 => [
                'dni' => '1083003273',
                'last_name' => 'PEREZ MENDOZA',
                'name' => 'ERIKA CAroleINA',
                'phone' => '3116982041',
                'email' => 'caroleinaperez2808@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'JEFE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            24 => [
                'dni' => '57300385',
                'last_name' => 'PERTUZ ROSAS',
                'name' => 'MATILDE SOCORRO',
                'phone' => '3004851600',
                'email' => 'matypertuz@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'NUTRICIONISTA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            25 => [
                'dni' => '36724210',
                'last_name' => 'ROSADO NAVARRO',
                'name' => 'GREYS ESTHER',
                'phone' => '3043559556',
                'email' => 'greysrosado@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'CONTADOR',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            26 => [
                'dni' => '1128170980',
                'last_name' => 'SANCHEZ ALTAMAR',
                'name' => 'JEISON ANDRES',
                'phone' => '3116982041',
                'email' => 'jeisonandressanchezaltamar@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            27 => [
                'dni' => '12559370',
                'last_name' => 'APREZA GARCIA',
                'name' => 'ALFREDO DOMINGO',
                'phone' => '3012651189',
                'email' => 'alfapreza@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            28 => [
                'dni' => '26666485',
                'last_name' => 'BARANDICA VASQUEZ',
                'name' => 'MONICA PATRICIA',
                'phone' => '3024050285',
                'email' => 'hectorosorio1703@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            29 => [
                'dni' => '1081812182',
                'last_name' => 'CABARCAS ZAMORA',
                'name' => 'ANDREINA',
                'phone' => '3138863350',
                'email' => 'andreinacabarcas18@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'INGENIERA DE PROCESOS',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            30 => [
                'dni' => '1082847450',
                'last_name' => 'CHAVES MANJARRES',
                'name' => 'SANDRA MILENA',
                'phone' => '3215060446',
                'email' => 'michely1586@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'APRENDIZ',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FACTURACION',
            ],
            31 => [
                'dni' => '85451413',
                'last_name' => 'CUISMAN ROSADO',
                'name' => 'NEFFER',
                'phone' => '3173743605',
                'email' => 'neffercuisman@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            32 => [
                'dni' => '85125674',
                'last_name' => 'DE LA HOZ RIQUET',
                'name' => 'VIDAL',
                'phone' => '3006034867',
                'email' => 'videhoz@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            33 => [
                'dni' => '57439064',
                'last_name' => 'ESCORCIA GONZALEZ',
                'name' => 'ZORAIDA PATRICIA',
                'phone' => '3005575741',
                'email' => 'zoraidaescorsia@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            34 => [
                'dni' => '26785368',
                'last_name' => 'FERNANDEZ MORA',
                'name' => 'YERMAINE',
                'phone' => '3126047498',
                'email' => 'yermainef@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            35 => [
                'dni' => '85490431',
                'last_name' => 'FERNANDEZ SERRANO',
                'name' => 'RONALD JOSE',
                'phone' => '3008934411',
                'email' => 'ronaldfernandez3000@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'SERVICIO GENERALES',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            36 => [
                'dni' => '56054175',
                'last_name' => 'GAMEZ MOLINA',
                'name' => 'YARILIS FRANCISCA',
                'phone' => '3157472285',
                'email' => 'rivaldonarvaez3@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            37 => [
                'dni' => '85467045',
                'last_name' => 'GARCIA SEGRERA',
                'name' => 'GABRIEL',
                'phone' => '3205243491',
                'email' => 'gabogarciamd@yahoo.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO INTERNISTA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            38 => [
                'dni' => '84459998',
                'last_name' => 'HENRIQUEZ GARAVITO',
                'name' => 'EDUARDO',
                'phone' => '3007291817',
                'email' => 'eduemirgaravito@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            39 => [
                'dni' => '52711767',
                'last_name' => 'IGUARAN AVILA',
                'name' => 'KENDYS MILENA',
                'phone' => '3005686276',
                'email' => 'kendysmilena@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'TERAPIA RESPIRATORIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            40 => [
                'dni' => '57294362',
                'last_name' => 'OLAYA CUELLO',
                'name' => 'LUZ MARY',
                'phone' => '3014549813',
                'email' => 'luzzmy83@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'LIDER DE FATURACION',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            41 => [
                'dni' => '57436507',
                'last_name' => 'OROZCO ARIZA',
                'name' => 'MARELY YOLANDA',
                'phone' => '3018374129',
                'email' => 'juaner2605@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            42 => [
                'dni' => '1004374259',
                'last_name' => 'PATIÑO SALAS',
                'name' => 'KEILA MARCELA',
                'phone' => '3232733349',
                'email' => 'keylapatinosalas@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            43 => [
                'dni' => '57417559',
                'last_name' => 'PEÑA SALAZAR',
                'name' => 'MAURYS BEATRIZ',
                'phone' => '3004861769',
                'email' => 'maurys1972@gmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            44 => [
                'dni' => '1085044228',
                'last_name' => 'RAAD NARVAEZ',
                'name' => 'MIGUEL ANGEL',
                'phone' => '3234481633',
                'email' => 'raadmiguelnarvaez@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'APRENDIZ',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            45 => [
                'dni' => '39016877',
                'last_name' => 'RIBON NAVARRO',
                'name' => 'ROSANA',
                'phone' => '3015682680',
                'email' => 'rorina777@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'TERAPIA RESPIRATORIA',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            46 => [
                'dni' => '85150260',
                'last_name' => 'RIVERA HERNANDEZ',
                'name' => 'WILFRIDO',
                'phone' => '3022124449',
                'email' => 'pedroleuis052020@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'SERVICIO GENERALES',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            47 => [
                'dni' => '7140923',
                'last_name' => 'ROBLES RIVERA',
                'name' => 'LUIS CARLOS',
                'phone' => '3005927625',
                'email' => 'luis-robles75@hotmail.com',
                'pp' => 'LIDER ENFERMERIA',
                'title' => 'AUXILIAR DE ENFERMERIA',
                'role' => 'staff',
                'Area' => 'ASISTENCIAL',
                'department' => 'ASISTENCIAL',
            ],
            48 => [
                'dni' => '1048224723',
                'last_name' => 'RODRIGUEZ GALLEGO',
                'name' => 'KARLA',
                'phone' => '3045408473',
                'email' => 'karlaale508@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'QUIMICO FARMACEUTICO',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            49 => [
                'dni' => '1082849188',
                'last_name' => 'SERRANO POMBO',
                'name' => 'MARCOS JOSE',
                'phone' => '3114006341',
                'email' => 'marcoserrano10@hotmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            50 => [
                'dni' => '1082993116',
                'last_name' => 'VARGAS TINJACA',
                'name' => 'JHOAN SEBASTIAN',
                'phone' => '3163916257',
                'email' => 'sebas.tinja94@gmail.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'MEDICO GENERAL',
                'role' => 'staff',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            51 => [
                'dni' => '57434182',
                'last_name' => 'DIAZ DIAZ',
                'name' => 'SAIDA ROSA',
                'phone' => '3173678231',
                'email' => 'liderenfermeria.cuidadocritico@clinicamarcaribe.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'LIDER ENFERMERIA',
                'role' => 'lead',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ASISTENCIAL',
            ],
            52 => [
                'dni' => '36726611',
                'last_name' => 'ECHAVARRIA PARDO',
                'name' => 'ISIS KARIMA',
                'phone' => '3016111659',
                'email' => 'admin.cuidadocritico@clinicamarcaribe.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'ADMINISTRADOR',
                'role' => 'lead',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'ADMINISTRACION',
            ],
            53 => [
                'dni' => '36724210',
                'last_name' => 'ROSADO NAVARRO',
                'name' => 'GREYS ESTHER',
                'phone' => '3043559556',
                'email' => 'contabilidad.cuidadocritico@clinicamarcaribe.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'CONTADOR',
                'role' => 'lead',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FINANCIERO',
            ],
            54 => [
                'dni' => '57294362',
                'last_name' => 'OLAYA CUELLO',
                'name' => 'LUZ MARY',
                'phone' => '3014549813',
                'email' => 'auditoria.cuidadocritico@clinicamarcaribe.com',
                'pp' => 'ADMINISTRADOR',
                'title' => 'LIDER DE FATURACION',
                'role' => 'lead',
                'Area' => 'ADMINISTRATIVO',
                'department' => 'FACTURACION',
            ],
            55 => [
                'dni' => '57434186',
                'last_name' => 'PIZARRO FERNANDEZ',
                'name' => 'ANA MARIA',
                'phone' => '3168778428',
                'email' => 'gerencia.cuidadocritico@clinicamarcaribe.com',
                'pp' => 'GERENTE',
                'title' => 'GERENTE',
                'role' => 'lead',
                'Area' => 'GERENCIA',
                'department' => 'GERENCIA',
            ],

        ];
        DB::beginTransaction();
        Log::info('Starting the seeding process...');
        try {
            foreach ($employees as $employee) {
                Log::info('Creating user ' . $employee['name']);
                $identityType = IdentityType::where('code', 'C.C')->first();
                $user = User::create([
                    'name' => $employee['name'],
                    'email' => $employee['email'],
                    'password' => bcrypt($employee['dni']),
                ]);

                $newEmployee = Employee::create([
                    'identity_type_id' => $identityType->id,
                    'dni' => $employee['dni'],
                    'last_name' => $employee['last_name'],
                    'first_name' => $employee['name'],
                    'phone' => $employee['phone'],
                    'title' => $employee['title'],
                    'user_id' => $user->id]);
                Log::info('Creating employee ' . $employee['department']);
                $department = Department::where('name', strtolower($employee['department']))->first();

                $newEmployee->department()->attach($department->id, ['role' => $employee['role']]);
            }
            DB::commit();
            Log::info('Seeding process completed.');
        } catch (
        \Exception $e
        ) {
            Log::error('Seeding process failed. ' . $e->getMessage());
            DB::rollBack();
        }

    }

}
