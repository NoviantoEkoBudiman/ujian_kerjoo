<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Models\Cuti;

class CutiTest extends TestCase
{
    public function testInsertDataCuti()
    {
        $user = factory(Cuti::class, 10)->make();
    }
}
