use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->change(); // Make phone nullable
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable(false)->change(); // Revert to not nullable
        });
    }
}