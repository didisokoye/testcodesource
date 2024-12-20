<?php

namespace Tests\Feature;

use App\Models\Ue;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    
    public function test_an_ue_can_be_stored_to_the_database(): void{
        $this->withoutExceptionHandling();
        $response=$this->post('ues',[

            'libelle' => 'Mathematique',

           ]);

    //$response->assertok();
    $this->assertCount(expectedCount: 1, haystack: Ue::all());
    }
 

}    
