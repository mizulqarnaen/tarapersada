<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        // Courses
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->string('thumbnail')->nullable();
            $table->decimal('stars', 2, 1)->default(0); // e.g., 4.5
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        // Articles
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('author_id')->nullable(); // FK to users table if you have one
            $table->string('tags')->nullable(); // Can store comma-separated tags or JSON
            $table->timestamps();
        });

        // Informations
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('about')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        // Services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });

        // Contacts
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // e.g., "Admin 1"
            $table->string('value'); // e.g., "0822xxxx"
            $table->enum('type', ['phone', 'email', 'whatsapp', 'linkedin', 'facebook', 'instagram', 'website'])->default('phone');
            $table->string('link')->nullable(); // e.g., "https://wa.me/..."
            $table->timestamps();
        });

        // Galleries
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->enum('type', ['logo', 'banner', 'legality', 'schedule', 'documentation']);
            $table->string('caption')->nullable();
            $table->timestamps();
        });

        // Testimonials
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('stars', 2, 1)->default(0);
            $table->string('client_name');
            $table->string('company_name')->nullable();
            $table->string('image')->nullable();
            $table->integer('position')->default(0);
            $table->timestamps();
        });

        // Clients
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('website_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('services');
        Schema::dropIfExists('informations');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('categories');
    }
};
