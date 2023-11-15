<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function testInsert() {
        $category = new Category;
        $category->name = "programming";
        $category->description = "ini deskripsi kategori programming";
        $category->save();
        
        self::assertEquals("programming", $category->name);
    }
}
