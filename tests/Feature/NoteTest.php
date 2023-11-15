<?php

namespace Tests\Feature;

use App\Models\Note;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteTest extends TestCase
{
    public function testInsert() {
        $note1 = new Note;
        $note1->user_id = 1;
        $note1->category_id = 1;
        $note1->title = "how to make conversation";
        $note1->content = "caranya adalah";
        $note1->save();
        
        $note2 = new Note;
        $note2->user_id = 1;
        $note2->category_id = 1;
        $note2->title = "list jokes";
        $note2->content = "apa bedanya ...";
        $note2->save();

        self::assertCount(2, Note::all());
        self::assertEquals('how to make conversation', $note1->title);
        self::assertEquals('list jokes', $note2->title);
    }
}
