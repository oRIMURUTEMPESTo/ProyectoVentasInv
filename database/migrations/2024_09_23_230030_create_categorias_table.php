// Migración de categorias
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('IdCategoria');  // Identificador de la categoría
            $table->string('Nombre');
            $table->text('Descripcion')->nullable();
            $table->timestamp('Fecha')->useCurrent();
            $table->foreignId('IdCreador')->constrained('usuarios', 'idUsuario')->onDelete('cascade');
            $table->boolean('Estado')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
