<?php
use App\User;
use App\Section;
use App\Menu;
use App\Timezone;
use App\Sector;
use App\Category;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Crypt;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Truncamos las tablas principales
      Role::truncate();
      User::truncate();
      Section::truncate();

      //Creamos los roles predeterminados
$superadminRole = Role::create(['name' => 'SuperAdmin']);
     $adminRole = Role::create(['name' => 'Admin']);
  $operatorRole = Role::create(['name' => 'Operator']);
      $userRole = Role::create(['name' => 'UserRole']);
   $monitorRole = Role::create(['name' => 'Monitor']);
      //- Permission Blade
    $viewbladeone= Permission::create(['name' => 'View dashboard pral']);
    $viewbladetwo= Permission::create(['name' => 'View venue']);
    $viewbladethree= Permission::create(['name' => 'View cadena']);
    $viewbladefour= Permission::create(['name' => 'View sector']);
    $viewbladefive= Permission::create(['name' => 'View survey']);
    $viewbladesix= Permission::create(['name' => 'View question']);
    $viewbladeseven= Permission::create(['name' => 'View qualification']);
    $viewbladeeight= Permission::create(['name' => 'View persons']);
    //- Configuración
    $viewcreatuserconfiguration = Permission::create(['name' => 'Create user']);
    $viewedituserconfiguration = Permission::create(['name' => 'Edit user']);
    $viewdeleteuserconfiguration = Permission::create(['name' => 'Delete user']);
    $viewconfiguration = Permission::create(['name' => 'View Configuration']);
    $vieweditconfiguration = Permission::create(['name' => 'Edit Configuration']);
    //Timezone
    $tz_2 = new Timezone;  $tz_2->name='Africa/Abidjan';  $tz_2->save();
    $tz_3 = new Timezone;  $tz_3->name='Africa/Accra';  $tz_3->save();
    $tz_4 = new Timezone;  $tz_4->name='Africa/Addis_Ababa';  $tz_4->save();
    $tz_5 = new Timezone;  $tz_5->name='Africa/Algiers';  $tz_5->save();
    $tz_6 = new Timezone;  $tz_6->name='Africa/Asmara';  $tz_6->save();
    $tz_7 = new Timezone;  $tz_7->name='Africa/Bamako';  $tz_7->save();
    $tz_8 = new Timezone;  $tz_8->name='Africa/Bangui';  $tz_8->save();
    $tz_9 = new Timezone;  $tz_9->name='Africa/Banjul';  $tz_9->save();
    $tz_10 = new Timezone;  $tz_10->name='Africa/Bissau';  $tz_10->save();
    $tz_11 = new Timezone;  $tz_11->name='Africa/Blantyre';  $tz_11->save();
    $tz_12 = new Timezone;  $tz_12->name='Africa/Brazzaville';  $tz_12->save();
    $tz_13 = new Timezone;  $tz_13->name='Africa/Bujumbura';  $tz_13->save();
    $tz_14 = new Timezone;  $tz_14->name='Africa/Cairo';  $tz_14->save();
    $tz_15 = new Timezone;  $tz_15->name='Africa/Casablanca';  $tz_15->save();
    $tz_16 = new Timezone;  $tz_16->name='Africa/Ceuta';  $tz_16->save();
    $tz_17 = new Timezone;  $tz_17->name='Africa/Conakry';  $tz_17->save();
    $tz_18 = new Timezone;  $tz_18->name='Africa/Dakar';  $tz_18->save();
    $tz_19 = new Timezone;  $tz_19->name='Africa/Dar_es_Salaam';  $tz_19->save();
    $tz_20 = new Timezone;  $tz_20->name='Africa/Djibouti';  $tz_20->save();
    $tz_21 = new Timezone;  $tz_21->name='Africa/Douala';  $tz_21->save();
    $tz_22 = new Timezone;  $tz_22->name='Africa/El_Aaiun';  $tz_22->save();
    $tz_23 = new Timezone;  $tz_23->name='Africa/Freetown';  $tz_23->save();
    $tz_24 = new Timezone;  $tz_24->name='Africa/Gaborone';  $tz_24->save();
    $tz_25 = new Timezone;  $tz_25->name='Africa/Harare';  $tz_25->save();
    $tz_26 = new Timezone;  $tz_26->name='Africa/Johannesburg';  $tz_26->save();
    $tz_27 = new Timezone;  $tz_27->name='Africa/Juba';  $tz_27->save();
    $tz_28 = new Timezone;  $tz_28->name='Africa/Kampala';  $tz_28->save();
    $tz_29 = new Timezone;  $tz_29->name='Africa/Khartoum';  $tz_29->save();
    $tz_30 = new Timezone;  $tz_30->name='Africa/Kigali';  $tz_30->save();
    $tz_31 = new Timezone;  $tz_31->name='Africa/Kinshasa';  $tz_31->save();
    $tz_32 = new Timezone;  $tz_32->name='Africa/Lagos';  $tz_32->save();
    $tz_33 = new Timezone;  $tz_33->name='Africa/Libreville';  $tz_33->save();
    $tz_34 = new Timezone;  $tz_34->name='Africa/Lome';  $tz_34->save();
    $tz_35 = new Timezone;  $tz_35->name='Africa/Luanda';  $tz_35->save();
    $tz_36 = new Timezone;  $tz_36->name='Africa/Lubumbashi';  $tz_36->save();
    $tz_37 = new Timezone;  $tz_37->name='Africa/Lusaka';  $tz_37->save();
    $tz_38 = new Timezone;  $tz_38->name='Africa/Malabo';  $tz_38->save();
    $tz_39 = new Timezone;  $tz_39->name='Africa/Maputo';  $tz_39->save();
    $tz_40 = new Timezone;  $tz_40->name='Africa/Maseru';  $tz_40->save();
    $tz_41 = new Timezone;  $tz_41->name='Africa/Mbabane';  $tz_41->save();
    $tz_42 = new Timezone;  $tz_42->name='Africa/Mogadishu';  $tz_42->save();
    $tz_43 = new Timezone;  $tz_43->name='Africa/Monrovia';  $tz_43->save();
    $tz_44 = new Timezone;  $tz_44->name='Africa/Nairobi';  $tz_44->save();
    $tz_45 = new Timezone;  $tz_45->name='Africa/Ndjamena';  $tz_45->save();
    $tz_46 = new Timezone;  $tz_46->name='Africa/Niamey';  $tz_46->save();
    $tz_47 = new Timezone;  $tz_47->name='Africa/Nouakchott';  $tz_47->save();
    $tz_48 = new Timezone;  $tz_48->name='Africa/Ouagadougou';  $tz_48->save();
    $tz_49 = new Timezone;  $tz_49->name='Africa/Porto-Novo';  $tz_49->save();
    $tz_50 = new Timezone;  $tz_50->name='Africa/Sao_Tome';  $tz_50->save();
    $tz_51 = new Timezone;  $tz_51->name='Africa/Tripoli';  $tz_51->save();
    $tz_52 = new Timezone;  $tz_52->name='Africa/Tunis';  $tz_52->save();
    $tz_53 = new Timezone;  $tz_53->name='Africa/Windhoek';  $tz_53->save();
    $tz_54 = new Timezone;  $tz_54->name='America/Adak'; $tz_54->save();
    $tz_55 = new Timezone;  $tz_55->name='America/Anchorage'; $tz_55->save();
    $tz_56 = new Timezone;  $tz_56->name='America/Anguilla'; $tz_56->save();
    $tz_57 = new Timezone;  $tz_57->name='America/Antigua'; $tz_57->save();
    $tz_58 = new Timezone;  $tz_58->name='America/Araguaina'; $tz_58->save();
    $tz_59 = new Timezone;  $tz_59->name='America/Argentina/Buenos_Aires'; $tz_59->save();
    $tz_60 = new Timezone;  $tz_60->name='America/Argentina/Catamarca'; $tz_60->save();
    $tz_61 = new Timezone;  $tz_61->name='America/Argentina/Cordoba'; $tz_61->save();
    $tz_62 = new Timezone;  $tz_62->name='America/Argentina/Jujuy'; $tz_62->save();
    $tz_63 = new Timezone;  $tz_63->name='America/Argentina/La_Rioja'; $tz_63->save();
    $tz_64 = new Timezone;  $tz_64->name='America/Argentina/Mendoza'; $tz_64->save();
    $tz_65 = new Timezone;  $tz_65->name='America/Argentina/Rio_Gallegos'; $tz_65->save();
    $tz_66 = new Timezone;  $tz_66->name='America/Argentina/Salta'; $tz_66->save();
    $tz_67 = new Timezone;  $tz_67->name='America/Argentina/San_Juan'; $tz_67->save();
    $tz_68 = new Timezone;  $tz_68->name='America/Argentina/San_Luis'; $tz_68->save();
    $tz_69 = new Timezone;  $tz_69->name='America/Argentina/Tucuman'; $tz_69->save();
    $tz_70 = new Timezone;  $tz_70->name='America/Argentina/Ushuaia'; $tz_70->save();
    $tz_71 = new Timezone;  $tz_71->name='America/Aruba'; $tz_71->save();
    $tz_72 = new Timezone;  $tz_72->name='America/Asuncion'; $tz_72->save();
    $tz_73 = new Timezone;  $tz_73->name='America/Atikokan'; $tz_73->save();
    $tz_74 = new Timezone;  $tz_74->name='America/Bahia'; $tz_74->save();
    $tz_75 = new Timezone;  $tz_75->name='America/Bahia_Banderas'; $tz_75->save();
    $tz_76 = new Timezone;  $tz_76->name='America/Barbados'; $tz_76->save();
    $tz_77 = new Timezone;  $tz_77->name='America/Belem'; $tz_77->save();
    $tz_78 = new Timezone;  $tz_78->name='America/Belize'; $tz_78->save();
    $tz_79 = new Timezone;  $tz_79->name='America/Blanc-Sablon'; $tz_79->save();
    $tz_80 = new Timezone;  $tz_80->name='America/Boa_Vista'; $tz_80->save();
    $tz_81 = new Timezone;  $tz_81->name='America/Bogota'; $tz_81->save();
    $tz_82 = new Timezone;  $tz_82->name='America/Boise'; $tz_82->save();
    $tz_83 = new Timezone;  $tz_83->name='America/Cambridge_Bay'; $tz_83->save();
    $tz_84 = new Timezone;  $tz_84->name='America/Campo_Grande'; $tz_84->save();
    $tz_85 = new Timezone;  $tz_85->name='America/Cancun'; $tz_85->save();
    //Sector
    $sector_1 = new Sector;
    $sector_1->name='Hotel';
    $sector_1->icons ="fa fa-building";
    $sector_1->save();

    $sector_2 = new Sector;
    $sector_2->name='Restaurantes';
    $sector_2->icons ="fa fa-cutlery";
    $sector_2->save();

    $sector_3 = new Sector;
    $sector_3->name='Hospitales';
    $sector_3->icons ="fa fa-hospital-o";
    $sector_3->save();

    $sector_4 = new Sector;
    $sector_4->name='Escuelas';
    $sector_4->icons ="fa fa-university";
    $sector_4->save();

    $sector_5 = new Sector;
    $sector_5->name='Centros comerciales';
    $sector_5->icons ="fa fa-shopping-cart";
    $sector_5->save();

    //Category survey
    $category_1 = new Category;
    $category_1->name='Educación';
    $category_1->save();

    $category_2 = new Category;
    $category_2->name='Eventos';
    $category_2->save();

    $category_3 = new Category;
    $category_3->name='Servicio al cliente';
    $category_3->save();

    $category_4 = new Category;
    $category_4->name='Otros';
    $category_4->save();

    //User
    $user_1 = new User;
    $user_1->name='Alonso';
    $user_1->last_name='Cauich';
    $user_1->email='acauich@sitwifi.com';
    $user_1->city='Cancún, México';
    $user_1->telephone ='9981892988';
    $user_1->password = bcrypt('123456');
    $user_1->save();

    }
}
