<?php // todo fix tag

use Doctrine\DBAL\Query;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserroleTable extends Migration
{
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by_user')->nullable();
            $table->unsignedBigInteger('updated_by_user')->nullable();
            $table->string

("user_id")->nullable();
            $table->string

("role_id")->nullable();

            $table->timestamps();
        });

        //extension to use uuid that is used in pgsql
        DB::statement(query: "CREATE EXTENSION IF NOT EXISTS \"uuid-ossp\";");
    }

    public function down()
    {
        Schema::dropIfExists('user_role');
    }
}

