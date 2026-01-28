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
        Schema::table('products', function (Blueprint $table) {
            // Add new columns if they don't exist
            if (!Schema::hasColumn('products', 'slug')) {
                $table->string('slug')->unique()->after('name');
            }
            if (!Schema::hasColumn('products', 'short_description')) {
                $table->text('short_description')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('products', 'regular_price')) {
                $table->decimal('regular_price', 10, 2)->default(0)->after('description');
            }
            if (!Schema::hasColumn('products', 'sale_price')) {
                $table->decimal('sale_price', 10, 2)->nullable()->after('regular_price');
            }
            if (!Schema::hasColumn('products', 'SKU')) {
                $table->string('SKU')->nullable()->after('sale_price');
            }
            if (!Schema::hasColumn('products', 'stock_status')) {
                $table->enum('stock_status', ['instock', 'outofstock'])->default('instock')->after('SKU');
            }
            if (!Schema::hasColumn('products', 'featured')) {
                $table->boolean('featured')->default(false)->after('stock_status');
            }
            if (!Schema::hasColumn('products', 'quantity')) {
                $table->integer('quantity')->default(0)->after('featured');
            }
            if (!Schema::hasColumn('products', 'images')) {
                $table->text('images')->nullable()->after('image');
            }
            if (!Schema::hasColumn('products', 'brand_id')) {
                $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete();
            }
            
            // Make image nullable
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'slug', 'short_description', 'regular_price', 'sale_price',
                'SKU', 'stock_status', 'featured', 'quantity', 'images'
            ]);
        });
    }
};
