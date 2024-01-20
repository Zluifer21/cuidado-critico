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
        $employees = array(
            array(
                "dni" => 36696087,
                "lastName" => "ALONSO BERDUGO",
                "name" => "DHELYS ALICIA",
                "phone" => 3016984032,
                "email" => "dhaa0109@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "JEFE ALMACEN",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1083007165,
                "lastName" => "ARANGO PEREIRA",
                "name" => "CARLOS ",
                "phone" => 3016664926,
                "email" => "carlos.arangop01@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 7604232,
                "lastName" => "CAMPO AMAYA",
                "name" => "RAFAEL MAURICIO",
                "phone" => 3004378145,
                "email" => "campoamaya@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO INTERNISTA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 36720898,
                "lastName" => "CANTILLO HERNANDEZ",
                "name" => "ZULEIMA ",
                "phone" => 3104443680,
                "email" => "marsolybrisa@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "AUXILIAR DE FACTURACION",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1082935890,
                "lastName" => "CARRILLO MIER",
                "name" => "JOSE ALEJANDRO",
                "phone" => 3014859627,
                "email" => "josecarr1991@gmail.com",
                "perm:" => "CONTADOR",
                "title" => "JEFE COMPRAS",
                "role" => "staff",
                "department" => "CONTABILIDAD"),
            array(
                "dni" => 1004345213,
                "lastName" => "CERVERA CABARCAS",
                "name" => "LINETH ",
                "phone" => 3017873167,
                "email" => "linethcervera01@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "ADMISIONISTA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 57434182,
                "lastName" => "DIAZ DIAZ",
                "name" => "SAIDA ROSA",
                "phone" => 3173678231,
                "email" => "sarodi2diaz@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "LIDER ENFERMERIA",
                "role" => "lead",
                "department" => "administrativo"),
            array(
                "dni" => 57297333,
                "lastName" => "DURAN OSIAS",
                "name" => "YURANIS TAIS",
                "phone" => 3008365751,
                "email" => "jefeyura@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "JEFE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 36726611,
                "lastName" => "ECHAVARRIA PARDO",
                "name" => "ISIS KARIMA",
                "phone" => 3016111659,
                "email" => "ikep0609@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "leadISTRADOR",
                "role" => "lead",
                "department" => "administrativo"),
            array(
                "dni" => 7142764,
                "lastName" => "ESPITIA ESPITIA",
                "name" => "WILLINTON RAFAEL",
                "phone" => 3002783343,
                "email" => "wilintonespitia122016@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "JEFE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 7602727,
                "lastName" => "FANDIÑO RIOS",
                "name" => "JORGE RAMON",
                "phone" => 3004879860,
                "email" => "fandinoriosj@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 84451609,
                "lastName" => "GARCIA FONTALVO",
                "name" => "ZEUS ",
                "phone" => 3044448806,
                "email" => "zeussexto@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1081824353,
                "lastName" => "GUTIERREZ BLANQUIC",
                "name" => "JOSE GREGORIO",
                "phone" => 3015614962,
                "email" => "3015614962jgb@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "AUXILIAR DE FARMACIA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 56055077,
                "lastName" => "LOPEZ LAVALLE",
                "name" => "ALCIRA MARIA",
                "phone" => 3174475214,
                "email" => "almalollita@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "TERAPIA RESPIRATORIA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 36724298,
                "lastName" => "LURAN BRITO",
                "name" => "TATIANA ",
                "phone" => 3007274742,
                "email" => "tatianaluran575@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "JEFE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 36696560,
                "lastName" => "MATTA MONTOYA",
                "name" => "NINI JOHANNA",
                "phone" => 3005523343,
                "email" => "tomasde26@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 85474996,
                "lastName" => "MENDOZA HERNANDEZ",
                "name" => "RODRIGO SEGUNDO",
                "phone" => 3046019410,
                "email" => "rockymm@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO INTENSIVISTA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1007783082,
                "lastName" => "MORALES BOLAÑO",
                "name" => "ANDRES FELIPE",
                "phone" => 3046632882,
                "email" => "amoralesbolano@gmail.com",
                "perm:" => "CONTADOR",
                "title" => "AUXILIAR CONTABLE",
                "role" => "staff",
                "department" => "CONTABILIDAD"),
            array(
                "dni" => 7631382,
                "lastName" => "MORENO REDONDO",
                "name" => "ABEL ",
                "phone" => 3106904508,
                "email" => "abeljosemoreno@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "JEFE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1129569577,
                "lastName" => "ORTIZ ALTAMAR",
                "name" => "VIRGILIO ",
                "phone" => 3208334108,
                "email" => "virgilio.ortiz@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "TERAPIA RESPIRATORIA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1004367824,
                "lastName" => "PACHECO BALLESTA",
                "name" => "ANDRES MIGUEL",
                "phone" => 3007642922,
                "email" => "pachecoandres2211@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1118840285,
                "lastName" => "PADILLA FERRER",
                "name" => "LUIS ANTONIO",
                "phone" => 3004400428,
                "email" => "luiyidamo@hotmail.es",
                "perm:" => "CONTADOR",
                "title" => "AUXILIAR DE CONTABILIDAD",
                "role" => "staff",
                "department" => "CONTABILIDAD"),
            array(
                "dni" => 36562474,
                "lastName" => "PALMA PATIÑO",
                "name" => "TERESA DE JESUS",
                "phone" => 3008854941,
                "email" => "teresadejesuspalma6@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "SERVICIO GENERALES",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1083003273,
                "lastName" => "PEREZ MENDOZA",
                "name" => "ERIKA CAroleINA",
                "phone" => 3116982041,
                "email" => "caroleinaperez2808@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "JEFE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 57300385,
                "lastName" => "PERTUZ ROSAS",
                "name" => "MATILDE SOCORRO",
                "phone" => 3004851600,
                "email" => "matypertuz@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "NUTRICIONISTA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 36724210,
                "lastName" => "ROSADO NAVARRO",
                "name" => "GREYS ESTHER",
                "phone" => 3043559556,
                "email" => "greysrosado@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "CONTADOR",
                "role" => "lead",
                "department" => "administrativo"),
            array(
                "dni" => 1128170980,
                "lastName" => "SANCHEZ ALTAMAR",
                "name" => "JEISON ANDRES",
                "phone" => 3116982041,
                "email" => "jeisonandressanchezaltamar@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 12559370,
                "lastName" => "APREZA GARCIA",
                "name" => "ALFREDO DOMINGO",
                "phone" => 3012651189,
                "email" => "alfapreza@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 26666485,
                "lastName" => "BARANDICA VASQUEZ",
                "name" => "MONICA PATRICIA",
                "phone" => 3024050285,
                "email" => "hectorosorio1703@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1081812182,
                "lastName" => "CABARCAS ZAMORA",
                "name" => "ANDREINA ",
                "phone" => 3138863350,
                "email" => "andreinacabarcas18@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "INGENIERA DE PROCESOS",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1082847450,
                "lastName" => "CHAVES MANJARRES",
                "name" => "SANDRA MILENA",
                "phone" => 3215060446,
                "email" => "michely1586@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "APRENDIZ",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 85451413,
                "lastName" => "CUISMAN ROSADO",
                "name" => "NEFFER ",
                "phone" => 3173743605,
                "email" => "neffercuisman@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 85125674,
                "lastName" => "DE LA HOZ RIQUET",
                "name" => "VIDAL ",
                "phone" => 3006034867,
                "email" => "videhoz@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 57439064,
                "lastName" => "ESCORCIA GONZALEZ",
                "name" => "ZORAIDA PATRICIA",
                "phone" => 3005575741,
                "email" => "zoraidaescorsia@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 26785368,
                "lastName" => "FERNANDEZ MORA",
                "name" => "YERMAINE ",
                "phone" => 3126047498,
                "email" => "yermainef@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 85490431,
                "lastName" => "FERNANDEZ SERRANO",
                "name" => "RONALD JOSE",
                "phone" => 3008934411,
                "email" => "ronaldfernandez3000@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "SERVICIO GENERALES",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 56054175,
                "lastName" => "GAMEZ MOLINA",
                "name" => "YARILIS FRANCISCA",
                "phone" => 3157472285,
                "email" => "rivaldonarvaez3@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 85467045,
                "lastName" => "GARCIA SEGRERA",
                "name" => "GABRIEL ",
                "phone" => 3205243491,
                "email" => "gabogarciamd@yahoo.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO INTERNISTA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 84459998,
                "lastName" => "HENRIQUEZ GARAVITO",
                "name" => "EDUARDO ",
                "phone" => 3007291817,
                "email" => "eduemirgaravito@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 52711767,
                "lastName" => "IGUARAN AVILA",
                "name" => "KENDYS MILENA",
                "phone" => 3005686276,
                "email" => "kendysmilena@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "TERAPIA RESPIRATORIA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 57294362,
                "lastName" => "OLAYA CUELLO",
                "name" => "LUZ MARY",
                "phone" => 3014549813,
                "email" => "luzzmy83@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "LIDER DE FATURACION",
                "role" => "lead",
                "department" => "administrativo"),
            array(
                "dni" => 57436507,
                "lastName" => "OROZCO ARIZA",
                "name" => "MARELY YOLANDA",
                "phone" => 3018374129,
                "email" => "juaner2605@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1004374259,
                "lastName" => "PATIÑO SALAS",
                "name" => "KEILA MARCELA",
                "phone" => 3232733349,
                "email" => "keylapatinosalas@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 57417559,
                "lastName" => "PEÑA SALAZAR",
                "name" => "MAURYS BEATRIZ",
                "phone" => 3004861769,
                "email" => "maurys1972@gmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 57434186,
                "lastName" => "PIZARRO FERNANDEZ",
                "name" => "ANA MARIA",
                "phone" => 3168778428,
                "email" => "anamapizarro@yahoo.com",
                "perm:" => "GERENTE",
                "title" => "GERENTE",
                "role" => "lead",
                "department" => "GERENCIA"),
            array(
                "dni" => 1004369576,
                "lastName" => "PRADO SANTIAGO",
                "name" => "JAVIER DE JESUS",
                "phone" => 3022697790,
                "email" => "javierprado895@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "APRENDIZ",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1085044228,
                "lastName" => "RAAD NARVAEZ",
                "name" => "MIGUEL ANGEL",
                "phone" => 3234481633,
                "email" => "raadmiguelnarvaez@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "APRENDIZ",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 39016877,
                "lastName" => "RIBON NAVARRO",
                "name" => "ROSANA ",
                "phone" => 3015682680,
                "email" => "rorina777@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "TERAPIA RESPIRATORIA",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 85150260,
                "lastName" => "RIVERA HERNANDEZ",
                "name" => "WILFRIDO ",
                "phone" => 3022124449,
                "email" => "pedroleuis052020@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "SERVICIO GENERALES",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 7140923,
                "lastName" => "ROBLES RIVERA",
                "name" => "LUIS CARLOS",
                "phone" => 3005927625,
                "email" => "luis-robles75@hotmail.com",
                "perm:" => "LIDER ENFERMERIA",
                "title" => "AUXILIAR DE ENFERMERIA",
                "role" => "staff",
                "department" => "ASISTENCIAL"),
            array(
                "dni" => 1048224723,
                "lastName" => "RODRIGUEZ GALLEGO",
                "name" => "KARLA ",
                "phone" => 3045408473,
                "email" => "karlaale508@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "QUIMICO FARMACEUTICO",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1082849188,
                "lastName" => "SERRANO POMBO",
                "name" => "MARCOS JOSE",
                "phone" => 3114006341,
                "email" => "marcoserrano10@hotmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo"),
            array(
                "dni" => 1082993116,
                "lastName" => "VARGAS TINJACA",
                "name" => "JHOAN SEBASTIAN",
                "phone" => 3163916257,
                "email" => "sebas.tinja94@gmail.com",
                "perm:" => "leadISTRADOR",
                "title" => "MEDICO GENERAL",
                "role" => "staff",
                "department" => "administrativo")
        );
        DB::beginTransaction();
        Log::info('Starting the seeding process...');
        try {
            foreach ($employees as $employee){
                Log::info('Creating user '.$employee['name']);
                $identityType=IdentityType::where('code','C.C')->first();
                $user =User::create([
                    'name' => $employee['name'],
                    'email' => $employee['email'],
                    'password' => bcrypt($employee['dni']),
                ]);

                $newEmployee=Employee::create([
                    'identity_type_id' => $identityType->id,
                    'dni' => $employee['dni'],
                    'last_name' => $employee['lastName'],
                    'first_name' => $employee['name'],
                    'phone' => $employee['phone'],
                    'title' => $employee['title'],
                    'user_id' => $user->id]);
                Log::info('Creating employee '.$employee['department']);
                $department=Department::where('name',strtolower($employee['department']))->first();

                $newEmployee->department()->attach($department->id,['role'=>$employee['role']]);
            }
            DB::commit();
            Log::info('Seeding process completed.');
        }catch (
            \Exception $e
        ){
            Log::error('Seeding process failed. '.$e->getMessage());
            DB::rollBack();
        }

    }

}
