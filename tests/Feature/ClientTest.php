<?php

namespace Tests\Feature;

use App\Models\ClientModel;
use App\Models\ComplaintModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateClient()
    {
        $response = $this->postJson('api/client/', ['name' => 'Sally','address' => 'Addresss']);

        $response
            ->assertStatus(201);
    }

    public function  testCreateComplaint()
    {
        $response = $this->postJson('api/client/complaint', ['title' => 'titletitle','text' => 'texttexttext']);

        $response
            ->assertStatus(201);
    }


}
