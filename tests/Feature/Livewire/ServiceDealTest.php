<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ServiceDeal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ServiceDealTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ServiceDeal::class);

        $component->assertStatus(200);
    }
}
