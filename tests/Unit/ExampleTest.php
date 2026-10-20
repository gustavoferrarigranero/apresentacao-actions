<?php

namespace Tests\Unit;

use App\Models\Item;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use LazilyRefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_create_items(): void
    {
        $item = new Item;
        $item->name = 'Test Item';
        $item->description = 'This is a test item.';
        $item->save();

        $this->assertDatabaseHas('items', [
            'name' => 'Test Item',
            'description' => 'This is a test item.',
        ]);
    }
}
