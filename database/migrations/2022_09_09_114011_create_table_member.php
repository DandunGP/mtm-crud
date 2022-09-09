<?php

use App\Models\Course;
use App\Models\Member;
use App\Models\Mentor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Member::class);
            $table->string("member_name");
            $table->foreignIdFor(Course::class);
            $table->string("course");
            $table->foreignIdFor(Mentor::class); // masih manual belum dibuat suatu model dan controller
            $table->string("mentor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_member');
    }
};
