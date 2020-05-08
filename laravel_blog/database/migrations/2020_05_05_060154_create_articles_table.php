<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',200)->default('')->comment('标题');
            $table->string('pic',200)->default('')->comment('缩略图');
            $table->string('keywords',300)->default('')->comment('关键词');
            $table->string('description',500)->default('')->comment('描述');
            $table->bigInteger('cate_id')->default(0)->comment('所属分类');
            $table->text('content')->comment('内容');
            $table->bigInteger('click')->default(0)->comment('点击量');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
