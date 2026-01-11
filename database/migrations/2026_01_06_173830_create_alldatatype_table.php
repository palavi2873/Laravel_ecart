<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alldatatype', function (Blueprint $table) {
//normal interger value like id
            $table->id();
            // $table->unsignedInteger('user_id1');
            // $table->bigIncrements('bigid');
            // $table->unsignedBigInteger('order_id');
            // $table->increments("incid");

//for string
            $table->string('name'); //varchar 255 char
            $table->string('lname',100);
            $table->char('mname',10); //fixed 10 char lemnght
            $table->text('address1'); // long text value can be strore here
            $table->mediumtext('address2'); // long text value can be strore here
            $table->longtext('address3'); // long text value can be strore here


//floating decimal point kind of value
            $table->decimal('salary',10,2);
            $table->float('price');
            $table->double('tripprice');

//age qnt rating count view  this kund
            $table->Integer('qnt1');
            $table->mediumInteger('qnt2');
            $table->mediumInteger('qnt3');
            $table->smallInteger('qnt4');
            $table->tinyInteger('qnt5');
            $table->bigInteger('qnt6');


//file upload
            $table->binary('file');

//boolean ither true or false
            $table->boolean('is_avtive_user')->default(true);

//date and time all
            $table->date('dob');
            $table->time('login_time');
            $table->datetime('datetime');
            $table->string('email');
            $table->string('phone');
            $table->timestampTz('loggen_at');
            $table->year('year');
            // $table->timestamps(); // created at and updated at
            $table->softDeletes(); //delete at column 
            $table->nullableTimestamps(); 

//json data
            $table->json('meta');

//enum data
            $table->enum('status', ['pending', 'approved', 'rejected']);

//foreign key
            // $table->foreignId('user_id2')->constrained();
            // $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            // $table->unsignedBigInteger('user_id3');
            // $table->foreign('user_id4')->references('id')->on('users');

//add contraint
            $table->string('data')->default('');
            $table->date('allownull')->nullble();
            // $table->unique('email');
            $table->index('status');
            $table->unique(['email', 'phone']);

//location base
            // $table->point('location');
            // $table->polygon('area');

//default camment
            $table->string('nameis')->comment('User full name');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alldatatype');
    }
};
