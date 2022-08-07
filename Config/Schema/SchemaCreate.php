<?php
namespace App\Modules\Blog\Config\Schema;

use Illuminate\Support\Facades\Schema;

class SchemaCreate
{
    public function runSchemas() {
        if (!Schema::hasTable(strtolower('blog'))) {
            Schema::create('blog', function ($table) {
                $table->increments('id');
                $table->string('namme');
                $table->string('id_application')->nullable();
                $table->string('id_space')->nullable();
                $table->timestamps();
            });
        }
    }
}
